<!DOCTYPE html>
<html>
  <head>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Yhvreddy - portpolio ready to lanch</title>

    <!-- Bootstrap core CSS -->
    <link href="public/lanching/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="public/lanching/css/soon.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="public/lanching/js/html5shiv.js"></script>
      <script src="public/lanching/js/respond.min.js"></script>
    <![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
      <style>
          #days, #days h1 {
              color: #db4844;
              font-weight: 600;
          }
          #hours, #hours h1 {
              color: #f07c22;
              font-weight: 600;
          }
          #minutes, #minutes h1 {
              color: #f6da74;
              font-weight: 600;
          }
          #seconds, #seconds h1 {
              color: #abcd58;
              font-weight: 600;
          }
      </style>
  </head>
  <!-- START BODY -->
  <body class="nomobile">

    <!-- START HEADER -->
    <section id="header">
        <div class="container">
            <header>
                <!-- HEADLINE -->
                <h1 data-animated="GoIn"><b>Y.H.V.REDDY</b> Portfolio is <br> <p id="message"></p>...</h1>
            </header>
            <!-- START TIMER -->
            <div id="timer" data-animated="FadeIn">
                <div id="days" class="timer_box"></div>
                <div id="hours" class="timer_box"></div>
                <div id="minutes" class="timer_box"></div>
                <div id="seconds" class="timer_box"></div>
            </div>
            <!-- END TIMER -->
			</div>

        </div>
        <!-- LAYER OVER THE SLIDER TO MAKE THE WHITE TEXTE READABLE -->
        <div id="layer"></div>
        <!-- END LAYER -->
        <!-- START SLIDER -->
        <div id="slider" class="rev_slider" style="background-image:url('public/lanching/img/home-banner-bg_5')">
            <ul>
              <li data-transition="slideleft" data-slotamount="1" data-thumb="assets/img/home-banner-bg_1.jpg">
                <img src="public/lanching/img/home-banner-bg_1.jpg">
              </li>
              <li data-transition="slideleft" data-slotamount="1" data-thumb="assets/img/home-banner-bg_2.jpg">
                <img src="public/lanching/img/home-banner-bg_2.jpg">
              </li>
              <li data-transition="slideleft" data-slotamount="1" data-thumb="assets/img/home-banner-bg_4.jpg">
                <img src="public/lanching/img/home-banner-bg_4.jpg">
              </li>
            </ul>
        </div>
        <!-- END SLIDER -->
    </section>
    <!-- END HEADER -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="public/lanching/js/jquery.min.js"></script>
	  <script type="text/javascript" src="public/lanching/js/modernizr.custom.js"></script>
    <script src="public/lanching/js/bootstrap.min.js"></script>
    <script src="public/lanching/js/soon/plugins.js"></script>
    <script src="public/lanching/js/soon/jquery.themepunch.revolution.min.js"></script>
    <script src="public/lanching/js/soon/custom.js"></script>
    <script>
      $(document).ready(function(){

        // var launch = new Date("1 Jan 2020 00:00:00 GMT+5:30");
        // //console.log(launch);
        //
        // var message = $('#message');
        // var days = $('#days');
        // var hours = $('#hours');
        // var minutes = $('#minutes');
        // var seconds = $('#seconds');
        //
        // setDate();
        // function setDate(){
        //     var now = new Date();
        //     if( launch < now ){
        //         days.html('<h1>0</H1><p>Day</p>');
        //         hours.html('<h1>0</h1><p>Hour</p>');
        //         minutes.html('<h1>0</h1><p>Minute</p>');
        //         seconds.html('<h1>0</h1><p>Second</p>');
        //         window.location.href= "http://yhvreddy.com";
        //     }
        //     else{
        //         var s = -now.getTimezoneOffset()*60 + (launch.getTime() - now.getTime())/1000;
        //         //alert(s);
        //         var d = Math.floor(s/86400);
        //         days.html('<h1>'+d+'</h1><p>Day'+(d>1?'s':''),'</p>');
        //         s -= d*86400;
        //
        //         var h = Math.floor(s/3600);
        //         //alert(h);
        //         hours.html('<h1>'+h+'</h1><p>Hour'+(h>1?'s':''),'</p>');
        //         s -= h*3600;
        //
        //         var m = Math.floor(s/60);
        //         minutes.html('<h1>'+m+'</h1><p>Minute'+(m>1?'s':''),'</p>');
        //
        //         s = Math.floor(s-m*60);
        //         seconds.html('<h1>'+s+'</h1><p>Second'+(s>1?'s':''),'</p>');
        //         setTimeout(setDate, 1000);
        //
        //         message.html("<span style='font-size:35px;color:#fff;font-weight:600'>GET READY TO LANCH WITH IN</span>");
        //     }
        // }



          var message = $('#message');
          var cdays = $('#days');
          var chours = $('#hours');
          var cminutes = $('#minutes');
          var cseconds = $('#seconds');

          function makeTimer() {

              //		var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");
              //var endTime = new Date("31 Dec 2019 18:14:00 GMT+5:30");
              var endTime = new Date("1 Jan 2020 00:00:00 GMT+5:30");
              endTime = (Date.parse(endTime) / 1000);

              var now = new Date();
              now = (Date.parse(now) / 1000);

              var timeLeft = endTime - now;

              var days = Math.floor(timeLeft / 86400);
              var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
              var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
              var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

              // if (hours < "10") { hours = "0" + hours; }
              // if (minutes < "10") { minutes = "0" + minutes; }
              // if (seconds < "10") { window.location.href= "http://yhvreddy.com"; }
              //
              if(hours == '00' && minutes == '00' && seconds == '00'){
                  window.location.href= "http://yhvreddy.com";
              }

              // $("#days").html(days + "<br><span>Days</span>");
              // $("#hours").html(hours + "<br><span>Hours</span>");
              // $("#minutes").html(minutes + "<br><span>Minutes</span>");
              // $("#seconds").html(seconds + "<br><span>Seconds</span>");

              cdays.html('<h1>'+days+'</h1><p>Day','</p>');
              chours.html('<h1>'+hours+'</h1><p>Hour','</p>');
              cminutes.html('<h1>'+minutes+'</h1><p>Minute','</p>');
              cseconds.html('<h1>'+seconds+'</h1><p>Second','</p>');
              message.html("<span style='font-size:35px;color:#fff;font-weight:600'>GET READY TO LANCH WITH IN</span>");
          }
          //makeTimer();
          setInterval(function() { makeTimer(); }, 1000);

      })
    </script>
  </body>
  <!-- END BODY -->
</html>
