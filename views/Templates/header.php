<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta property="og:url" content="https://reduceplastic.theinitium.com/" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="海有塑嗎" />
	<meta property="og:description" content="因為你的參與和行動，才共同守護了美麗海洋的未來" />
	<meta property="og:image" content="https://reduceplastic.theinitium.com/FB_preview.jpg" />		
	<meta property="fb:app_id" content="343203876045780" />		
	<meta property="og:locale" content="zh_TW" />	
	<title>海有塑嗎</title>	
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/style.css" media="screen,projection">
    <link rel="shortcut icon" type="image/ico" href="https://secured-static.greenpeace.org/hk/Templates/Planet3/Styles/Images/Icons/favicon.ico">	
    <!--loading & GA-->
    <style>
        #loading {
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 10000;
            width: 100vw;
            height: 100vh;
            background-color: #b1dcfb;
            background-image: url("<?php echo base_url(); ?>assets/images/loading.svg");
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>	
    <script>
        if (window.addEventListener){
            window.addEventListener("load", init, false);
        }else if (window.attachEvent){
            window.attachEvent("onload", init);
        }else{
            window.onload = init;
        }

        function init(){
            document.getElementById("loading").style.display = "none";
            
        }

        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-66625644-26', 'auto');
        ga('send', 'pageview');
    </script>    
    <!--Import jQuery before materialize.js-->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>	
	<script type = 'text/javascript' src = "<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
    <script type = 'text/javascript' src = "<?php echo base_url(); ?>assets/js/function.js"></script>

</head>

<body>
    <div id="loading"></div>


<script>
    $(document).ready(function(){
        showTime();
    });
</script>
