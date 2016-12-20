<div class="wrapper">
    <div class="web_header">
        <div class="showAllDate"><span id="now_date"></span> 減塑第<span id="activity_date"></span>天</div>
        <div class="title_box center">
            <a href="index.php">
                <img src="<?php echo base_url(); ?>assets/images/title.png" alt="title">
            </a>
        </div>
        <div class="land_box">
            <div class="animals animal2"></div>
            <div class="land center">
                <img src="<?php echo base_url(); ?>assets/images/land.png" alt="land">
                <div class="big_garbage">
                    <img src="<?php echo base_url(); ?>assets/images/garbege.png" alt="garbege">        
                </div>
                <div class="animals animal4"></div>
            </div>
        </div>
        <div id="sea_box">
            <div class="wave top1">
                <div class="garbage_box level1">
                    <img src="<?php echo base_url(); ?>assets/images/bottle.png" alt="bottle">
                    <img src="<?php echo base_url(); ?>assets/images/bag.png" alt="bag">
                </div>
                <div class="animals animal3"></div>
            </div>
            <div class="wave top2">
                <div class="garbage_box level4">
                    <img src="<?php echo base_url(); ?>assets/images/cup.png" alt="cup">
                    <img src="<?php echo base_url(); ?>assets/images/straw.png" alt="straw"> 
                </div>
                <div class="animals animal0"></div>
            </div>
            <div class="wave top3">
                <div class="garbage_box inside">
                    <img src="<?php echo base_url(); ?>assets/images/cup.png" alt="cup"> 
                    <img src="<?php echo base_url(); ?>assets/images/bottle.png" alt="bottle"> 
                </div>
                <div class="animals animal1"></div>
            </div>
            <div class="wave bottom">
                <div class="garbage_box level5">
                    <img src="<?php echo base_url(); ?>assets/images/bag.png" alt="bag"> 
                    <img src="<?php echo base_url(); ?>assets/images/tableware.png" alt="tableware">
                    <img src="<?php echo base_url(); ?>assets/images/straw.png" alt="straw">
                </div>
            </div>
        </div>
    </div>

	<article class="main_article results center">
		<section>
			<h6>Hi <span id="userName"></span>! 你今天一共減塑</h6>
			<h1 id="userTotalReduce"></h1>
			<h6>個塑膠製品</h6>
			<h6>在累積<span id="update_Date"></span>天裡，總共減少了<span id="userTotalReduce2"></span>個塑膠廢棄物</h6>
			<h6>因為有你和其他<?php ECHO $title_users; ?>人的行動</h6>
			<h6>在<span id="activity_date2"></span>天內已經少拋棄了</h6>
			<h1 id="curruntLevel"><?php ECHO $title_plastic; ?></h1>
			<h6>個塑膠製品</h6>
            <h6 id="end_text center">有你加入，我們一起減少許多一次性的塑膠製品請繼續堅持下去，讓更多海洋生物快樂悠游。</h6>
		</section>

        <footer>
            <a id="shareArticle" class="" target="_blank" href="http://www.greenpeace.org/taiwan/zh/news/stories/oceans/2016/9-tips-reduce-plastic/">看文章</a>
            <a id="fb-share-button" href="https://www.facebook.com/dialog/share?app_id=611260555725187&display=popup&href=https://reduceplastic.theinitium.com/&redirect_uri=https://reduceplastic.theinitium.com/;">分享活動</a>
        </footer>

        <div class="logo">
            <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo">
        </div> 
        <a id="logout" href="<?php ECHO $logout_url; ?>" class="btn btn-lg btn-primary btn-block" role="button">離開</a>

    </article>
</div>

<audio autoplay loop>
    <source src="<?php echo base_url(); ?>assets/audio/ocean.mp3" type="audio/mpeg">
    Your browser does not support the audio tag.
</audio>

<script>
	$(document).ready(function(){
        var select = $('#curruntLevel').text();
        $('.animals').hide();
        getUserSession();
        selectLevel(select);

        var storage = sessionStorage;
        var oauth_uid = storage.getItem('userId');

        $.ajax({
            url: "<?php echo base_url(); ?>index.php/main/get_login_time/"+oauth_uid,
            type: "POST",
            dataType : "json",
            success: function(data){  
                var loginTime = data.length;
                $('#update_Date').text(loginTime);
            },
            error : function(data){
                console.log('error');
            }  
        });

	});

    window.fbAsyncInit = function() {
        FB.init({
            appId      : '611260555725187',
            cookie     : true,
            xfbml      : true,
            version    : 'v2.5' 
        });

        document.getElementById('fb-share-button').onclick = function() {
            FB.ui({
                method: 'share',
                display: 'popup',
                mobile_iframe: true,
                href: 'https://reduceplastic.theinitium.com/',
            }, function(response){});
        }
    };

    // Load the SDK asynchronously
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));   
</script>


</body>
</html>