<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


$config['appId']   = '1444638895549261';
$config['secret']  = 'f31017998d90710f320dd249105a21b0';
$config['facebook_app_id']              = '1444638895549261';
$config['facebook_app_secret']          = 'f31017998d90710f320dd249105a21b0';
// $config['appId']   = '611260555725187';
// $config['secret']  = '8b7a2715e398d94ca5b07a494a6b468d';
// $config['facebook_app_id']              = '611260555725187';
// $config['facebook_app_secret']          = '8b7a2715e398d94ca5b07a494a6b468d';
$config['facebook_login_type']          = 'web';
$config['facebook_login_redirect_url']  = 'Main/start';
$config['facebook_logout_redirect_url'] = 'Main/logout';
$config['facebook_permissions']         = array('public_profile', 'publish_actions', 'email');
$config['facebook_graph_version']       = 'v2.6';
$config['facebook_auth_on_load']        = TRUE;

?>
