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


    <article class="main_article center home">
        <section class="main_section">
            <p class="white-text">
                臺灣四面環海，海岸線全長超過1,500公里。但是，美麗之島的名字漸漸被塑膠垃圾蒙上陰影。塑膠袋、瓶罐、吸管、菸蒂和其他垃圾，變成沙灘的常客。為了海洋的未來，也為了守護瀕危的海龜、鯨豚和更多海洋生物，邀請你加入為期30天的減塑挑戰！成為改變的力量，減少製造用後即棄的塑膠廢棄物，讓海洋生生不息。
            </p>
        </section>

        <?php
        if(!empty($authUrl)) {// call var_dump($user_profile) to view all data
            // echo '<a href="'.$authUrl.'"><img src="'.base_url().'assets/images/flogin.png" alt=""/></a>';
            echo '<div id="fb_box">
                    <a id="fbLogin" href="'.$authUrl.'" class="btn btn-block btn-social btn-facebook link_white" >FACEBOOK登入</a>
                </div>
                <a id="fbprivacy" class="lightbox_open">隱私使用聲明</a>';
        }else{
            echo '<button id="start_box" class="lightbox_open btn_white"></button>';
        }
        ?>

        <div class="logo">
            <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo">
        </div>

    </article>

</div>
<div id="form_box" class="lightbox-target">
    <div class="content">
        <button id="form-close" class="lightbox-close circle"></button>
        <div id="noUse" style="display:none;">
            <p>今天已送出過表單</p>
            <p>我們一起減少許多一次性的塑膠製品</p>
            <p>明天繼續堅持下去</p>
            <div class="turtle"></div>
            <a id="logout" href="<?php ECHO $logout_url; ?>" class="btn btn-lg btn-primary btn-block" role="button">登出</a>

        </div>
        <div id="formField">
            <?php
            echo '<h6 class="center"><img class="user_photo circle middle" src="'.$userData['picture_url'].'"/>Hi '.$userData['first_name'].'，你今天少用了?</h6>';            
            ?>		
            <div class="input_field center">
                <button class="btn_red" onclick="countRemove('straw')">-</button>
                <div class="icon">
                    <img src="<?php echo base_url(); ?>assets/images/straw.png" alt="straw"/>
                    <span id="straw"></span>
                    <!--<input name="straw" id="straw" type="text" class="" value="0" disabled >-->
                </div>
                <button class="btn_green" onclick="countAdd('straw')">+</button>
            </div>
            <div class="input_field center">
                <button class="btn_red" onclick="countRemove('bag')">-</button>
                <div class="icon">
                    <img src="<?php echo base_url(); ?>assets/images/bag.png" alt="bag"/>
                    <span id="bag"></span>
                    <!--<input name="bag" id="bag" type="text" class="" value="0" disabled >-->
                </div>
                <button class="btn_green" onclick="countAdd('bag')">+</button>
            </div>
            <div class="input_field center">
                <button class="btn_red" onclick="countRemove('bottle')">-</button>
                <div class="icon">
                    <img src="<?php echo base_url(); ?>assets/images/bottle.png" alt="bottle"/>
                    <span id="bottle"></span>
                    <!--<input name="bottle" id="bottle" type="text" class="" value="0" disabled >-->
                </div>
                <button class="btn_green" onclick="countAdd('bottle')">+</button>
            </div>
            <div class="input_field center">
                <button class="btn_red" onclick="countRemove('cup')">-</button>
                <div class="icon">
                    <img src="<?php echo base_url(); ?>assets/images/cup.png" alt="cup"/>
                    <span id="cup"></span>
                    <!--<input name="cup" id="cup" type="text" class="" value="0" disabled >-->
                </div>
                <button class="btn_green" onclick="countAdd('cup')">+</button>
            </div>
            <div class="input_field center">
                <button class="btn_red" onclick="countRemove('tableware')">-</button>
                <div class="icon">
                    <img src="<?php echo base_url(); ?>assets/images/tableware.png" alt="tableware"/>
                    <span id="tableware"></span>
                    <!--<input name="tableware" id="tableware" type="text" class="" value="0" disabled >-->
                </div>
                <button class="btn_green" onclick="countAdd('tableware')">+</button>
            </div>

            <!--<form action="">-->
            <?php echo form_open('Main/action'); ?>
                <div class="hide">
                <?php
                    echo '<input type="text" name="oauth_uid" value="'.$userData['oauth_uid'].'">';
                ?>                
                    <input type="text" id="created" name="created">
                    <input type="text" id="act_count" name="act_count">
                    <input id="straw_value" name="straw" type="number">
                    <input id="bag_value" name="bag" type="number">
                    <input id="bottle_value" name="bottle" type="number">
                    <input id="cup_value" name="cup" type="number">
                    <input id="tableware_value" name="tableware" type="number">
                </div>
                <div class="center">
                    <button type="submit" name="submit" id="submit">OK</button>
                </div>
            </form>
        </div>
    </div>    
</div>

<div id="privacy" class="lightbox-target">
  <div class="content">
    <button id="privacy_close" class="lightbox-close circle"></button>
    <p>點擊「登入」代表您同意將個人資料傳送給 Greenpeace 綠色和平（台灣網站），同時對方也同意在使用這些資料時將遵守相關隱私政策。Facebook 使用這些資料時（包含將您的資料自動填入廣告表單）也會遵守我們的資料政策。</p>
    <a href="https://www.facebook.com/policy.php" target="_blank">Facebook Data Policy 隱私保護政策</a>
  </div>
</div>



<div class="hide">
<?php
    echo '<div class="welcome_txt">Welcome <b>'.$userData['first_name'].'</b></div>';
    echo '<p class="image"><img src="'.$userData['picture_url'].'" alt="" width="300" height="220"/></p>';
    echo '<p id="useId">' . $userData['oauth_uid'].'</p>';
    echo '<p id="userName">' . $userData['last_name'].''.$userData['first_name'].'</p>';
?>
</div>

<audio autoplay loop>
    <source src="<?php echo base_url(); ?>assets/audio/ocean.mp3" type="audio/mpeg">
    Your browser does not support the audio tag.
</audio>

<script>
	$(document).ready(function(){
        getCreateTime();

        var oauth_uid = $('#useId').html();
        $.ajax({
            url: "<?php echo base_url(); ?>index.php/main/get_login_time/"+oauth_uid,
            type: "POST",
            dataType : "json",
            success: function(data){
                var date = new Date( );
                var createObj = data.pop();
                var createTime = createObj.created;
                var lastCreate = createTime.slice(0,10);
                var today = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+date.getDate();
                if(lastCreate ===today){
                    $('#noUse').show();
                    $('#formField').hide();
                }
            },
            error : function(data){
                console.log(data);
                console.log('error');
            }  
        });

        $('#submit').on('click',function(){
            var storage = sessionStorage;
            var user_name = $("#userName").html();
            var user_id = $("#useId").html();
            storage.setItem('userName', user_name);
            storage.setItem('userId', user_id);
        });        
        $('#privacy_close').on('click',function(){
            $("#privacy").removeClass('open').addClass('close');
        });
        $('#fbprivacy').on('click',function(){
            $("#privacy").removeClass('close').addClass('open');
        });

        $('#form-close').on('click',function(){
            $("#form_box").removeClass('open').addClass('close');
        });
        $('#start_box').on('click',function(){
            $("#form_box").removeClass('close').addClass('open');
        });

        $('.modal').modal();
        $('#form_box').modal('close');

        $("input[name=straw]").val("5");
        $("#straw").html("5");

        $("input[name=bag]").val("5");
        $("#bag").html("5");

        $("input[name=bottle]").val("5");    
        $("#bottle").html("5");

        $("input[name=cup]").val("5");
        $("#cup").html("5");

        $("input[name=tableware]").val("5");
        $("#tableware").html("5"); 
	});
</script>

</body>
</html>