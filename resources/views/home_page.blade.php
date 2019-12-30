<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="yhvreddy - Harshavardhan">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        
        <title>yhvreddy - Portfolio</title>

        <!-- favicon -->
        <link href="public/images/favicon.ico" rel="icon" type="image/png">

        <!--Font Awesome css-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--Bootstrap css-->
        <link rel="stylesheet" href="public/css/bootstrap.css">

        <!--Owl Carousel css-->
        <link rel="stylesheet" href="public/css/owl.carousel.min.css">
        <link rel="stylesheet" href="public/css/owl.theme.default.min.css">

        <!--Magnific Popup css-->
        <link rel="stylesheet" href="public/css/magnific-popup.css">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800,900%7cOpen+Sans:400,600,700,800" rel="stylesheet">

        <!--Site Main Style css-->
        <link rel="stylesheet" href="public/css/style.css">
        <style>
            .loader{
                /*top: 40%;*/
                position: fixed;
                /*left: 50%;*/
                z-index: 111111111;
                width:100%;
                height:100vh;
            }
            .loader center img{
                width: 10%;
                position: relative;
                top:250px;
                right:0%;
            }
            .social-icons{
                display: inline-block;
            }
            .about-button{
                margin-top: 30px !important;
                float: right;
            }
            .main-btn{
                padding: 5px 10px;
                border-radius: 15px;
            }
            .about-content{
                width: 100%;
            }
            .about-content .skills{
                display: block;
            }
            .about-content .skills .skill{
                padding: 8px 12px;
                margin: 5px;
                /*background-color: #7b0672;*/
                color: #eee;
                border-radius: 15px;
                font-weight:600;
                line-height: 1;
                font-size: 12px;
            }
        </style>
    </head>

    <body>

        <!--Preloader-->
        <div class="preloader">
            <div class="loader "></div>
        </div>
        <!--Preloader-->
        <div class="loader" id="loaderajax" style="display:none">
            <centrer>
                <img src="{{asset('public/images/loading.gif')}}">
            </centre>
        </div>    
        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand logo" href="index.html">
                    Y.H.V.REDDY
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <!--Nav Links-->
                        <li class="nav-item">
                            <a href="#" class="nav-link active" data-scroll-nav="0" >Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-scroll-nav="1" >About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-scroll-nav="2" >Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-scroll-nav="3">Works</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link" data-scroll-nav="4">Blog</a>
                        </li> -->
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-scroll-nav="5">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Navbar End-->

        <!--Home Section Start-->
        <section id="home" class="banner" style="background-image: url('public/images/background/home-banner-bg_2.jpg')" data-stellar-background-ratio=".7" data-scroll-index="0">
            <?php //print_r($aboutdetails[0]); ?>
            <div class="container">
                <!--Banner Content-->
                <div class="banner-caption">
                    <h1>Hi! I'm {{$aboutdetails[0]->first_name}}.</h1>
                    <p class="cd-headline clip mt-30">
                        <span>{{$aboutdetails[0]->profession}} located in {{$aboutdetails[0]->location}}.</span><br>
                        <span class="blc">Specialized in</span>
                        <span class="cd-words-wrapper">
                            <b class="is-visible">Graphic designing (PS)..!</b>
                            <b>Ui Developer..!</b>
                            <b>Web Developer (PHP & MYSQL)..!</b>
                        </span>
                    </p>
                </div>
                <div class="arrow bounce">
                    <a class="fa fa-chevron-down fa-2x" href="#" data-scroll-nav="1"></a>
                </div>
            </div>
        </section>
        <!--Home Section End-->

        <!--About Section Start-->
        <section class="about pt-100 pb-100" data-scroll-index="1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <!--About Image-->
                        <div class="about-img">
                            <img src="public/images/about-img.jpg" alt="yhvreddy : Harshavardhan">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <!--About Content-->
                        <div class="about-content">
                            <div class="about-heading">
                                <h2>About Me.</h2>
                                <span>{{$aboutdetails[0]->profession}}</span>
                            </div>
                            <?=$aboutdetails[0]->description?>
                            <!--About Social Icons-->
                            <div class="skills">
                                <?php $colors = array('#7b0672','#28a745','#6173a5','#9461a5','#c72c65','#ad741f','#074415','#296588','#696f8a'); ?>
                                <span style="font-weight:600;">Technical Skills : </span>
                                @foreach($skills as $key => $skill)
                                    <span class="label label-primary skill" style="background-color:{{$colors[array_rand($colors,1)]}}">{{$skill->name}}</span>
                                @endforeach
                            </div>
                            <div class="social-icons">
                                <a href="{{$aboutdetails[0]->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="{{$aboutdetails[0]->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="{{$aboutdetails[0]->linkedin}}" target="_blank"><i class="fa fa-linkedin"></i></a>
                                <a href="{{$aboutdetails[0]->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a href="{{$aboutdetails[0]->github}}" target="_blank"><i class="fa fa-github"></i></a>
                            </div>
                            <span class="about-button">
                                <a class="main-btn bg-success" href="{{$aboutdetails[0]->resume}}" target="_blank">Download CV</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Section End-->

        <!--Services Section Start-->
        <section class="services bg-gray pt-100 pb-50" data-scroll-index="2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="heading text-center">
                            <h6>Services</h6>
                            <h2>What can i do</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <?php //print_r($services); ?>

                    @foreach($services as $service)
                        <div class="col-md-4">
                            <!--Service Item-->
                            <div class="service-item">
                                <span class="icon">
                                    <i class="{{$service->service_icon}}"></i>
                                </span>
                                <h4>{{$service->service_name}}</h4>
                                <p>{{$service->service_content}}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!--Services Section End-->

        <!--Stats Section Start-->
        <!--<section class="stats pt-100 pb-100" style="background-image: url('public/images/background/stats-bg.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-stat">
                            <span class="stat-icon">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </span>
                            <h2 class="counter" data-count="220">10</h2>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-stat">
                            <span class="stat-icon">
                                <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                            </span>
                            <h2 class="counter" data-count="700">20</h2>
                            <p>Projects Completed</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-stat">
                            <span class="stat-icon">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </span>
                            <h2 class="counter" data-count="1100">10</h2>
                            <p>Lines Of Code</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-stat">
                            <span class="stat-icon">
                                <i class="fa fa-trophy" aria-hidden="true"></i>
                            </span>
                            <h2 class="counter" data-count="160">15</h2>
                            <p>Awards Achieved</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--Stats Section End-->


        <!--Portfolio Section Start-->
        <?php //print_r($projects); ?>
        @if(count($projects) != 0)
            <section class="portfolio pt-100 pb-70" data-scroll-index="3">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="heading text-center">
                                <h6>Portfolio</h6>
                                <h2>Work I Have Done</h2>
                            </div>
                            <div class="portfolio-filter text-center">
                                <ul>
                                    <li class="sel-item" data-filter="*">All</li>
                                    @foreach($projectypes as $projectype)
                                    <li data-filter=".{{$projectype->short_name}}">{{$projectype->name}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row portfolio-items">
                        <!--Portfolio Item-->
                        @foreach($projects as $project)
                            <div class="col-lg-4 col-md-6 item {{$project->project_type}}">
                                <div class="item-content">
                                    <img src="{{$project->project_cover_img}}" alt="">
                                    <div class="item-overlay">
                                        <h6>
                                            @if(!empty($project->project_link))
                                                <a href="{{$project->project_link}}" target="_blank"> <i class="fa fa-link"></i> {{$project->project_name}} </a>
                                            @else
                                                <a href="{{$project->github}}" target="_blank"> <i class="fa fa-link"></i> {{$project->project_name}} </a>
                                            @endif
                                        </h6>    
                                        <h6>
                                            <small>
                                                @if($project->project_mode == 'company')
                                                    {{ $project->company_name }}
                                                @else
                                                    {{ ucwords($project->client_name) }}
                                                @endif
                                            </small>
                                        </h6>
                                        <div class="icons">
                                            <span class="icon link">
                                                <a href="{{$project->project_cover_img}}">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
        <!--Portfolio Section End-->

        <!--Blog Section Start-->
        <!--<section class="blogs pt-100 pb-100 bg-gray" data-scroll-index="4">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="heading text-center">
                            <h6>Blog</h6>
                            <h2>Latest News</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="owl-carousel owl-theme">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="single-blog.html">
                                    <img src="public/images/blog/img-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3>The best of web design and web design inspiration</h3>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first ...</p>
                                <div class="blog-meta">
                                    <span class="more">
                                        <a href="single-blog.html">Read More</a>
                                    </span>
                                    <span class="date">
                                        1/April/2018
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="single-blog.html">
                                    <img src="public/images/blog/img-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3>The best of web design and web design inspiration</h3>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first ...</p>
                                <div class="blog-meta">
                                    <span class="more">
                                        <a href="single-blog.html">Read More</a>
                                    </span>
                                    <span class="date">
                                        1/April/2018
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="single-blog.html">
                                    <img src="public/images/blog/img-3.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3>The best of web design and web design inspiration</h3>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first ...</p>
                                <div class="blog-meta">
                                    <span class="more">
                                        <a href="single-blog.html">Read More</a>
                                    </span>
                                    <span class="date">
                                        1/April/2018
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="single-blog.html">
                                    <img src="public/images/blog/img-4.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3>The best of web design and web design inspiration</h3>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first ...</p>
                                <div class="blog-meta">
                                    <span class="more">
                                        <a href="single-blog.html">Read More</a>
                                    </span>
                                    <span class="date">
                                        1/April/2018
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <div class="blog-button pt-40">
                            <a class="main-btn" href="blogs-page.html">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--Blog Section End-->

        <!--Testimonials Section Start-->
        @if(count($testimonials) != 0)
        <section class="testimonials pt-100 pb-100" style="background-image: url('public/images/background/home-banner-bg_4.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="owl-carousel owl-theme text-center">
                            @foreach($testimonials as $testimonial)
                                <!--Testimonials Item-->
                                <div class="testimonial-item">
                                    <!-- <div class="author-img">
                                        <img src="public/public/images/testimonial/img-1.jpg" alt="">
                                    </div> -->
                                    <h5>{{$testimonial->name}}</h5>
                                    <span>{{$testimonial->profession}}</span>
                                    <p>{{$testimonial->comment}}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
        <!--Testimonials Section End-->

        <!--Contact Section Start-->
        <section class="contact pt-100 pb-100" data-scroll-index="5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="heading">
                            <h6>Contact</h6>
                            <h2>Get In Touch</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <!--Contact Form-->
                        <form id='contactform' method='POST' action="#">
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <!--name-->
                                    <input type="text" name="username" required="required" class="form-control" id="contact-name" placeholder="Name" minlength=3 >
                                </div>
                                <div class="col-md-4 form-group">
                                    <!--name-->
                                    <input type="tel" required="required" pattern="[789][0-9]{9}" name="usermobile" class="form-control" id="contact-name" placeholder="Mobile" maxlength=10 >
                                </div>
                                <div class="col-md-4 form-group">
                                    <!--email-->
                                    <input type="email" required="required" name="useremail" class="form-control" id="contact-email" placeholder="Email" >
                                </div>
                                <div class="col-md-12 form-group">
                                    <!--message box-->
                                    <textarea class="form-control con-validate" name="usercontent" id="contact-message" placeholder="How can we help you..?" rows=6 ></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <!--contact button-->
                                    <button id="contact-submit" type="submit" class="mt-30 main-btn">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Section End-->

        <!--Footer Start-->
        <footer class="pt-50 pb-50">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6">
                        <!--Contant Item-->
                        <div class="contact-info">
                            <h5>yhvreddy</h5>
                            <p>{{$aboutdetails[0]->profession}}.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Contant Item-->
                        <div class="contact-info">
                            <h5>Phone No.</h5>
                            <p>+91 {{$aboutdetails[0]->mobile}}</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Contant Item-->
                        <div class="contact-info">
                            <h5>Email</h5>
                            <p>{{$aboutdetails[0]->email}}</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Contant Item-->
                        <div class="contact-info">
                            <h5>Address</h5>
                            <p>16-163, Beside CGGB Bank, MainRoad, Jm.puram, Gurazala - 522415</p>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-12">
                        <hr>
                        <p class="copy pt-30">
                            yhvreddy &copy; {{date('Y')}}. All Right Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!--Footer End-->

        <!--Jquery js-->
        <script src="public/js/jquery-3.0.0.min.js"></script>
        <script src="public/js/sweetalert.min.js"></script>
        <!--Bootstrap js-->
        <script src="public/js/bootstrap.min.js"></script>
        <!--Stellar js-->
        <script src="public/js/jquery.stellar.js"></script>
        <!--Animated Headline js-->
        <script src="public/js/animated.headline.js"></script>
        <!--Owl Carousel js-->
        <script src="public/js/owl.carousel.min.js"></script>
        <!--ScrollIt js-->
        <script src="public/js/scrollIt.min.js"></script>
        <!--Isotope js-->
        <script src="public/js/isotope.pkgd.min.js"></script>
        <!--Magnific Popup js-->
        <script src="public/js/jquery.magnific-popup.min.js"></script>
        <!--Site Main js-->
        <script src="public/js/main.js"></script>

        <script type="text/javascript">

   

    $.ajaxSetup({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });

   

    $("#contactform").submit(function(e){
        e.preventDefault();
        $("#loaderajax").show();
        var name = $("input[name=username]").val();
        var mobile = $("input[name=usermobile]").val();
        var email = $("input[name=useremail]").val();
        var content = $("textarea[name=usercontent]").val();
        var sendata = {name:name, mobile:mobile, email:email,content:content};
        //console.log(sendata);
        $.ajax({
           type:'POST',
           url: "{{url('ajaxRequest')}}",
           data:sendata,
           dataType:'json', 
           success:function(data){
              //console.log(data);
              $("#loaderajax").hide();
              if(data.status == 1){  
                $("#contactform").trigger("reset");
                swal(data.Message);
              }else{
                $("#contactform").trigger("reset");
                swal(data.Message);
              }
           }
        });

	});

</script>

    </body>
</html>
