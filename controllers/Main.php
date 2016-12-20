<?php
// defined('BASEPATH') OR exit('No direct script access allowed');
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

        public function __construct(){
                parent::__construct();
        // To use site_url and redirect on this controller.
        $this->load->helper('url');

                // Load model
                $this->load->model('User');
                $this->load->model('Action');

                $this->load->helper('form');
        }

        public function index(){
                $this->load->view('Main/start');
        }

        public function start(){
                $this->load->view('Templates/header');
                include_once APPPATH."libraries/facebook.php";

                $this->load->library('facebook'); // Automatically picks appId and secret from config

                $redirectUrl = site_url('Main/start');
                $fbPermissions = 'email';

        //Call Facebook API
        $facebook = new Facebook(array(
                'appId' => '1444638895549261',
                // 'appId' => '611260555725187',
                'secret' => 'f31017998d90710f320dd249105a21b0',
                // 'secret' => '8b7a2715e398d94ca5b07a494a6b468d',
                'default_graph_version' => 'v2.8',
        ));

        $fbuser = $facebook->getUser();

        if ($fbuser) {
                $userProfile = $facebook->api('/me?fields=id,first_name,last_name,email,gender,locale,picture');
                //Preparing data for database insertion
                $userData['oauth_provider'] = 'facebook';
                $userData['oauth_uid'] = $userProfile['id'];
                $userData['first_name'] = $userProfile['first_name'];
                $userData['last_name'] = $userProfile['last_name'];
                $userData['email'] = $userProfile['email'];
                $userData['gender'] = $userProfile['gender'];
                $userData['locale'] = $userProfile['locale'];
                $userData['profile_url'] = 'https://www.facebook.com/'.$userProfile['id'];
                $userData['picture_url'] = $userProfile['picture']['data']['url'];

                $userID = $this->User->checkUser($userData);
                if(!empty($userID)){
                        // Insert user data
                        $data['userData'] = $userData;
                        $this->session->set_userdata('userData',$userData);
            } else {
                // Update user data
               $data['userData'] = array();
            }
        } else {
            $fbuser = '';
            $data['authUrl'] = $facebook->getLoginUrl(array(
                'redirect_uri'=>$redirectUrl,
                'scope'=>$fbPermissions
            ));
        }
                $data['logout_url'] = site_url('Main/logout'); // Logs off application

                $this->load->view('Main/start',$data);
        }

    public function logout() {
        $this->load->library('facebook');
        // Logs off session from website
        $this->facebook->destroySession();
        // Make sure you destory website session as well.
        redirect('Main/start');
    }

    public function action(){
        $this->load->view('Main/start');
        $this->load->model('Action');
        $this->Action->action();
        redirect('Main/share');
    }

    public function share(){
        $this->load->view('Templates/header');
        $this->load->model('Share');
        $this->load->model('Action');

        $data['logout_url'] = site_url('Main/logout'); // Logs off application
        $data['title_users'] = $this->Share->get_user_title_count();
        $data['title_plastic'] = $this->Share->get_plastic_title_count();

        $this->load->view('Main/share',$data);
    }


    public function get_login_time($oauth_uid = null) {
        // echo $oauth_uid;
        $this->load->model("Share");

        $data["results"] = $this->Share->did_get_login_time($oauth_uid);

        echo json_encode($data["results"]);
    }
}