<div class="wrapper wrapper-intro">
    <div id="carouselHome" class="carousel slide isDesktop" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselHome" data-slide-to="0" class="active"></li>
            <li data-target="#carouselHome" data-slide-to="1"></li>
            <li data-target="#carouselHome" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <video autoplay muted loop id="myVideo">
                    <source src="<?= base_url() ?>front/assets/templates/meridian/video/video2.mp4" type="video/mp4">
                </video>
                <div class="container h-100 d-flex flex-column justify-content-center carousel-caption" data-aos="fade-up">
                            <div class="content">
                                <h1 class="h2">Get in !</h1>
                                <p>We provide full help and guidance for students applying to leading English-speaking
                                    universities worldwide.</p>
                            </div><!-- .content -->
                        </div><!-- .container -->
            </div>
            <div class="carousel-item">
                <video autoplay muted loop id="myVideo">
                    <source src="<?= base_url() ?>front/assets/templates/meridian/video/video.mp4" type="video/mp4">
                </video>
                <div class="container h-100 d-flex flex-column justify-content-center carousel-caption" data-aos="fade-up">
                    <div class="content">
                        <h1 class="h2">Get in !</h1>
                        <p>Our students are admitted to Columbia, Stanford, INSEAD, Berkeley, UCLA, MIT, UCL, King’s,
                            Oxford, LBS...</p>
                    </div><!-- .content -->
                </div>  
            </div>
            <div class="carousel-item">
                <video autoplay muted loop id="myVideo">
                    <source src="<?= base_url() ?>front/assets/templates/meridian/video/video3.mov" type="video/mp4">
                </video>
                <div class="container h-100 d-flex flex-column justify-content-center carousel-caption" data-aos="fade-up">
                        <div class="content">
                            <h1 class="h2">Get in !</h1>
                            <p>Our experts offer a unique know-how in essay writing, career counseling, test and interview
                                preparation</p>
                        </div><!-- .content -->
                 </div><!-- .container -->
            </div>
        </div>
    </div>
    <div id="carouselHome1" class="carousel slide isMobile" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselHome1" data-slide-to="0" class="active"></li>
            <li data-target="#carouselHome1" data-slide-to="1"></li>
            <li data-target="#carouselHome1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img id="img_banner" src="http://137.184.74.35/front/assets/images/static/home/banner_img_1.jpeg" />
                <div class="container h-100 d-flex flex-column justify-content-center carousel-caption container_new" data-aos="fade-up">
                            <div class="content isMobilecontent content_new">
                                <h1 class="h2">Get in !</h1>
                               <p>We provide full help and guidance for students applying to leading English-speaking
                                    universities worldwide.</p>
                            </div>
                        </div>
            </div>
            <div class="carousel-item">
                   <img id="img_banner" src="http://137.184.74.35/front/assets/images/static/home/banner_img_2-min.jpg" />
                <div class="container h-100 d-flex flex-column justify-content-center carousel-caption" data-aos="fade-up">
                    <div class="content isMobilecontent content_new">
                        <h1 class="h2">Get in !</h1>
                       <p>Our students are admitted to Columbia, Stanford, INSEAD, Berkeley, UCLA, MIT, UCL, King’s,
                            Oxford, LBS...</p>
                    </div>
                </div>  
            </div>
            <div class="carousel-item">
                 <img id="img_banner" src="http://137.184.74.35/front/assets/images/static/home/banner_img3.jpg" />
                <div class="container h-100 d-flex flex-column justify-content-center carousel-caption" data-aos="fade-up">
                        <div class="content isMobilecontent content_new">
                            <h1 class="h2">Get in !</h1>
                            <p>Our experts offer a unique know-how in essay writing, career counseling, test and interview
                                preparation</p>
                        </div>
                 </div>
            </div>
        </div>
   <!--   <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>  -->
    </div>

</div>

<div id="maincontent" role="main">

    <div class="wrapper wrapper-content" id="how-ca-we-help">
        <div class="container" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <h2>Who are we?</h2>
            <div class="chapo">
                <p class="mb-5 pb-5" style="max-width: 840px;">Admissions Key is a full online platform providing
                    comprehensive help and individually tailored guidance to students applying to elite English-speaking
                    universities worldwide. Our team features top admissions consultants including former admissions
                    officers from leading universities. Wherever you come from, whatever your background is, we believe
                    in your uniqueness and your potential. Any ambition is achievable. Any future you envision is
                    possible. We are here because we believe that you have got what it takes, and that you deserve to
                    succeed.</p>
                <p><b>Get in with Admissions Key!</b></p>
            </div>

            <h2>How can we help?</h2>

            <div class="list-booking hide-mobile">
                <div class="owl-carousel" id="home-carousel-desktop">
                    <div class="item">
                        <div class="help-box">
                            <img src="<?= base_url('front/') ?>assets/image-cache/images/static/slider/Career-and-school-selection.jpg"
                                alt="" />
                            <div class="help-content">
                                <h3>Career & School Selection</h3>
                                <p>Our career experts evaluate your aspirations and credentials to help you make the
                                    best choice among numerous schools and career paths.</p>
                                <a href="<?php echo base_url('career-and-school-selection')?>" title="Select package"
                                    class="btn-learnMore">Learn more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="help-box">
                            <img
                                src="<?= base_url('front/') ?>assets/image-cache/images/static/slider/application-preparation.jpg" />
                            <div class="help-content">
                                <h3>Application Preparation</h3>
                                <p>The personal statement is one of the most important parts of your application. We
                                    help you craft and polish your unique story that best highlights your strengths and
                                    who you truly are.</p>
                                <a href="<?php echo base_url('application-preparation') ?>" title="Select package"
                                    class="btn-learnMore">Learn more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="help-box">
                            <img
                                src="<?= base_url('front/') ?>assets/image-cache/images/static/slider/interview-preparation-expert.e5214bca.jpg" />
                            <div class="help-content">
                                <h3>Interview Preparation</h3>
                                <p>We work with you on content, clarity, and fluency of your oral expression to improve
                                    your confidence and to lead you to success.</p>
                                <a href="<?php echo base_url('interview-preparation') ?>" title="Select package"
                                    class="btn-learnMore">Learn more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="help-box">
                            <img src="<?= base_url('front/') ?>assets/image-cache/images/static/slider/test-preparation.jpg"
                                alt="" />
                            <div class="help-content">
                                <h3>Test Preparation</h3>
                                <p>Individually tailored, intensive training with top test preparation consultants is
                                    designed to dramatically improve your test scores and to ensure that you reach your
                                    goals.</p>
                                <a href="<?php echo base_url('test-preparation') ?>" title="Select package"
                                    class="btn-learnMore">Learn more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .list-booking -->

            <div class="list-booking show-mobile">
                <div class="owl-carousel" id="home-carousel">
                    <div class="item">
                        <div class="help-box">
                            <img src="<?= base_url('front/') ?>assets/image-cache/images/static/slider/Career-and-school-selection.jpg"
                                alt="" />
                            <div class="help-content">
                                <h3>Career & School Selection</h3>
                                <p>Our career experts evaluate your aspirations and credentials to help you make the
                                    best choice among numerous schools and career paths.</p>
                                <a href="<?php echo base_url('career-and-school-selection')?>" title="Select package"
                                    class="btn-learnMore">Learn more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="help-box">
                            <img
                                src="<?= base_url('front/') ?>/assets/images/static/slider/career-preparation-expert_new.jpg" />
                            <div class="help-content">
                                <h3>Application Preparation</h3>
                                <p>The personal statement is one of the most important parts of your application. We
                                    help you craft and polish your unique story that best highlights your strengths and
                                    who you truly are.</p>
                                <a href="<?php echo base_url('application-preparation') ?>" title="Select package"
                                    class="btn-learnMore">Learn more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="help-box">
                            <img
                                src="<?= base_url('front/') ?>assets/image-cache/images/static/slider/interview-preparation-expert.e5214bca.jpg" />
                            <div class="help-content">
                                <h3>Interview Preparation</h3>
                                <p>We work with you on content, clarity, and fluency of your oral expression to improve
                                    your confidence and to lead you to success.</p>
                                <a href="<?php echo base_url('interview-preparation') ?>" title="Select package"
                                    class="btn-learnMore">Learn more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="help-box">
                            <img src="<?= base_url('front/') ?>assets/image-cache/images/static/slider/test-preparation.d951d3bd.jpg"
                                alt="" />
                            <div class="help-content">
                                <h3>Test</br> Preparation</h3>
                                <p>Individually tailored, intensive training with top test preparation consultants is
                                    designed to dramatically improve your test scores and to ensure that you reach your
                                    goals.</p>
                                <a href="<?php echo base_url('test-preparation') ?>" title="Select package"
                                    class="btn-learnMore">Learn more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .list-booking -->

        </div><!-- .container -->
    </div><!-- .wrapper -->

    <div class="wrapper wrapper-content" id="wrapper-option-choose">
        <div class="container">
            <h2>Not sure which option to choose?</h2>
            <p class="mb-5">We guide you to the right choice.</p>
            <p><a href="/free-consultation-booking" title="Book your free consultation" class="btn text-dark">Book your free consultation</a></p>
        </div><!-- .container -->
    </div><!-- .wrapper -->

    <div class="wrapper wrapper-intro" id="why-choose-us">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <!-- <li data-target="#carouselExampleIndicators" data-slide-to="4"></li> -->
            </ol>
            <div class="carousel-inner migx_slider">
                <div class="carousel-item active">
                   <!--  <img src="<?= base_url('front/')?>/assets/images/static/home/img-homeWhychoose1.jpg" />   -->
                   <img src="<?= base_url('front/')?>/assets/images/static/home/img_1.png" />
                    <div class="container">
                        <div class="content" data-aos="fade-up-right">
                            <h1 class="h2">Why choose us?</h1>
                            <p>Hundreds of applicants accepted into their <br />first-choice school.</p>
                            <a href="/about-us" class="btn text-dark" title="About Us">About Us</a>
                        </div><!-- .content -->
                    </div><!-- .container -->
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('front/')?>/assets/images/static/home/img-homeWhychoose2.jpg" />
                    <div class="container">
                        <div class="content" data-aos="fade-up-right">
                            <h1 class="h2">Why choose us?</h1>
                            <p>99% admittance rate for Admissions Key applicants.</p>
                            <a href="<?php echo base_url('about-us') ?>" class="btn text-dark" title="About Us">About
                                Us</a>
                        </div><!-- .content -->
                    </div><!-- .container -->
                </div>
                <div class="carousel-item">
                   <!--  <img src="<?= base_url('front/')?>/assets/images/static/home/img-homeWhychoose3.jpg" /> -->
                    <img src="<?= base_url('front/')?>/assets/images/static/home/img_2.png" />
                    <div class="container">
                        <div class="content" data-aos="fade-up-right">
                            <h1 class="h2">Why choose us?</h1>
                            <p>Unique methodology and step-by-step guidance and help.</p>
                            <a href="<?php echo base_url('about-us') ?>" class="btn text-dark" title="About Us">About
                                Us</a>
                        </div><!-- .content -->
                    </div><!-- .container -->
                </div>
                <div class="carousel-item">
                  <!--   <img src="<?= base_url('front/')?>/assets/images/static/home/img-homeWhychoose4.jpg" /> -->
                   <img src="<?= base_url('front/')?>/assets/images/static/home/img_3.png" />
                    <div class="container">
                        <div class="content" data-aos="fade-up-right">
                            <h1 class="h2">Why choose us?</h1>
                            <p>Full commitment and insider knowledge from experienced admissions experts who help you
                                craft your story.</p>
                            <a href="<?php echo base_url('about-us') ?>" class="btn text-dark" title="About Us">About
                                Us</a>
                        </div><!-- .content -->
                    </div><!-- .container -->
                </div>
                <!--  -->
            </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div>


    </div><!-- .wrapper -->

    <div class="wrapper wrapper-content" id="wrapper-our-students">
        <div class="container">
            <h2>What our students say</h2>
            <div class="list-students hide-mobile" >
                <div class="row row-0">
                    <div class="col col-12 col-md-6" data-aos="fade-right" data-aos-duration="2000">
                        <div class="illustration  student-1">
                            <img src="<?= base_url('front/')?>assets/images/Polina.jpg" />
                            <!-- <div class="description d-flex align-items-center justify-content-center">
                                        <p>I wanted to do an MBA in one of the most competitive programs, and I was
                                            definitely stressed about my admissions essays, as my major was in
                                            Accounting and writing wasn't my strong point. I was so lucky&#8230;</p>
                                    </div> -->
                                        <a href="javascript:void(0)" id="7" onclick="showToggle(this.id)">Lee Jing </a>
                        </div><!-- .illustration -->
                    </div><!-- .col -->

                    <!-- <div class="col col-12 order-md-last">
                                <div class="content student-1"> -->
                    <!-- <h3>Olga Pischevskaya</h3>
                                    <p>Accepted to Columbia business school (MBA)</p> -->

                    <!-- <div class="more">
                                        <a href="about-us/our-students/olga-pischevskaya.html"><span>Read
                                                more</span></a>
                                    </div> -->

                    <!-- </div>
                            </div> -->


                    <div class="col col-12 col-md-6" data-aos="fade-left" data-aos-duration="1000">

                        <div class="migx_student position-relative">
                            <div class="row row-0 h-50">
                                <div class="col col-12 col-md-6">
                                    <div class="illustration ">
                                        <img src="<?= base_url('front/')?>assets/images/Olga Hibbard.jpg"
                                            id="Lee_data_more" />
                                        <!-- <div
                                                    class="description d-flex align-items-center justify-content-center">
                                                    <p>Admissions Key gives real meaning to an application and turns you
                                                        into an ideal candidate. Thanks to&#8230;</p>
                                                </div> -->
                                    </div><!-- .illustration -->
                                </div><!-- .col -->

                                <div class="col col-12 col-md-6">
                                    <div class="content  d-md-flex flex-md-column bg-orange student-2">
                                        <h3 id="8" onclick="showToggle(this.id)">Olga Hibbard</h3>
                                        <p class="flex-grow-1 text-white">“I wanted to do an MBA in one of the most
                                            competitive programs...”</p>
                                            <div class="more">
                                                    <a href="javascript:void(0)" id="8" onclick="showToggle(this.id)"><span>Read More</span></a>
                                                </div><!-- .more -->
                                    </div><!-- .content -->
                                </div><!-- .col -->
                            </div><!-- .row -->

                            <a href="javascript:void(0)" id="8" onclick="showToggle(this.id)" class="overlay"></a>
                        </div><!-- .migx_student -->
                        <div class="migx_student position-relative student-3">
                            <div class="row row-0 h-50">
                                <div class="col col-12 col-md-6">
                                    <div class="illustration ">
                                        <img src="<?= base_url('front/')?>assets/images/Renaud de Peretti.jpg" />
                                        <!-- <div
                                                    class="description d-flex align-items-center justify-content-center">
                                                    <p>My coach knew perfectly well how to help me express my ideas and
                                                        to make my profile stand out. My personality&#8230;</p>
                                                </div> -->
                                    </div><!-- .illustration -->
                                </div><!-- .col -->

                                <div class="col col-12 col-md-6 order-md-first">
                                    <div class="content  d-md-flex flex-md-column bg-grey student-3">
                                        <h3 id="4" onclick="showToggle(this.id)">Renaud de Peretti</h3>
                                        <p class="flex-grow-1">“My essays are now catchy, perfectly fluid and logical
                                            thanks...”</p>
                                            <div class="more">
                                                    <a href="javascript:void(0)" id="4" onclick="showToggle(this.id)"><span>Read More</span></a>
                                                </div><!-- .more -->
                                    </div><!-- .content -->
                                </div><!-- .col -->
                            </div><!-- .row -->

                            <a href="javascript:void(0)" id="4" onclick="showToggle(this.id)" class="overlay"></a>
                        </div><!-- .migx_student -->
                    </div><!-- .col -->
                </div><!-- .row -->
                <div id="t7" class="students-hover-box" style="display: none;">
                            <div class="close" id="7" onclick="showToggle(this.id)"><i class="fas fa-times"></i></div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 detail">
                                <h3 class="student-name">Lee Jing </h3>
                                    <h2>Graduate</h2>
                                    <h3>Accepted to the University of Rotterdam (MSc in Accounting & Financial Management)</h3>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <h4>Packages Selected</h4>
                                            <ul class="list-school-low">
                                                <li>Msc/MS</li>
                                                <li>2 Schools</li>
                                                <li>Resume Review</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-6 pl-0">
                                            <h4>Major</h4>
                                            <ul class="list-school-low">
                                                <li>Accounting & Financial Management</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 content">
                                    <img class="mb-5" width="60px" src="<?php echo base_url('front/') ?>assets/images/quote-icon-color.png" />
                                    <p style="font-size: 20px; max-width: 352px; margin-top: 10px; line-height: 26px;">
                                        “I highly recommend Admissions Key ... The team is really professional and efficient not even mentioning the editorial talent of my coach. I contacted her a bit "last minute" because I realized I needed help with my MSc application to study in the Netherlands. My expert could adapt to my busy schedule and I thank her immensely for it. I would have never gotten into the program that I wanted without you.Thanks to you, I obtained the desired MSc.Thank you for everything.”</p>
                                </div>
                            </div>
                        </div>
               
                     
                <h2 style="color: #f93;" data-aos="fade-up" class="mt-4">Polina Okhotnikova</h2>
                <p data-aos="fade-up">"Cambridge has made an exception and admitted me to the last year of its BS program, so that I could then continue on with a Master’s and a PHD. It was unexpected and wonderful news! I am forever grateful to Admissions Key for the great advice, emotional support, and amazing professionalism!"</p>

                   
              <!--   <p data-aos="fade-up">Admitted to the University of Cambridge</p> -->
                <div class="more" data-aos="fade-up" >
                  <!--   <a href="<?php echo base_url('our-students/19') ?>" ><span style="text-transform: uppercase;border-bottom: 2px solid #000;padding-bottom: 2px;line-height: 50px;">DISCOVER HER STORY</span></a> -->
                    <a href="#t19" id="19" onclick="showToggle(this.id)" ><span style="text-transform: uppercase;border-bottom: 2px solid #000;padding-bottom: 2px;line-height: 50px;">DISCOVER HER STORY</span></a>
                </div><!-- .more -->
                <p><a class="btn text-white mt-4 hover-dark" href="<?php echo base_url('our-students') ?>" title="Meet our students">Meet our students</a></p>

                

            </div>


            <!-- .list-students -->
            <div class="list-booking show-mobile">
                <div class="owl-carousel" id="students-owl-carousel">
                    <div class="item">
                        <div class="help-box">
                              <div class="img_mob"><img src="<?= base_url('front/')?>assets/images/Polina_new.jpg" /></div>
                                <div class="help-content">
                                    <h3>Polina Okhotnikova</h3>
                                    <p>“Cambridge has made an exception and admitted me to the last year of its BS program, so that I could then continue on with a Master’s and a PHD. It was unexpected and wonderful news! I am forever grateful to Admissions Key for the great advice, emotional support, and amazing professionalism!”</p>
                                    <a href="#t19" id="19" onclick="showToggle(this.id)" title="Select package"
                                        class="btn-learnMore">Read more <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    <div class="item">
                        <div class="help-box">
                            <div class="img_mob"><img
                                src="<?= base_url('front/') ?>assets/images/Renaud de Peretti.jpg" /></div>
                            <div class="help-content">
                                <h3>Renaud de Peretti</h3>
                                <p>“My essays are now catchy, perfectly fluid and logical thanks...”</p>
                                <a href="#t4" id="4" onclick="showToggle(this.id)" title="Select package"
                                    class="btn-learnMore">Read more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="help-box">
                            <div class="img_mob"><img
                                src="<?= base_url('front/') ?>assets/images/Olga Hibbard.jpg" /></div>
                            <div class="help-content">
                                <h3>Olga Hibbard</h3>
                                <p>“I wanted to do an MBA in one of the most competitive programs...”</p>
                                <a href="javascript:void(0)"  onclick="showToggle(8)" title="Select package"
                                    class="btn-learnMore">Read more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                 <p>
          <a href="<?= base_url('our-students') ?>" class="btn text-white mt-4 hover-dark">Meet our students</a>
        </p>
            </div><!-- .list-booking -->
             <div id="t4" class="students-hover-box " style="display: none; overflow: auto;" >
                            <div class="close" id="4" onclick="showToggle(this.id)"><i class="fas fa-times"></i></div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 detail">
                                <h3 class="student-name">Renaud de Peretti</h3>
                                    <h2 class="animation-scroll animation-fade">MS</h2>
                                    <h3>Accepted to UC Berkeley </h3>
                                       <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <h4>Packages Selected</h4>
                                            <ul class="list-school-low">
                                                <li>Application preparation</li>
                                                <li>TOEFL</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-6 pl-0">
                                            <h4>Major</h4>
                                            <ul class="list-school-low">
                                                <li>Engnieering</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 content">
                                    <img class="mb-5" width="60px" src="<?php echo base_url('front/') ?>assets/images/quote-icon-color.png" />
                                    <p style="font-size: 20px; max-width: 352px; margin-top: 10px; line-height: 26px;">
                                        “My essays are now catchy, perfectly fluid and logical thanks to the very high-quality editorial work and the perfectionism of the team of Admissions Key. Admissions Key gives real meaning to an application and turns you into an ideal candidate. Thanks to you I was accepted into a very competitive program at UC Berkeley...”</p>
                                </div>
                            </div>
                        </div>

                        <div id="t8" class="students-hover-box" style="display: none;">
                            <div class="close" id="8" onclick="showToggle(this.id)"><i class="fas fa-times"></i></div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 detail">
                                <h3 class="student-name">Olga Hibbard</h3>
                                    <h2>MBA</h2>
                                    <h3>Accepted to Columbia Business School</h3>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <h4>Packages Selected</h4>
                                            <ul class="list-school-low">
                                                <li>Application preparation</li>
                                                <li>Interview Preparation</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-6 pl-0">
                                            <h4>Major</h4>
                                            <ul class="list-school-low">
                                                <li>Finance</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 content">
                                    <img class="mb-5" width="60px" src="<?php echo base_url('front/') ?>assets/images/quote-icon-color.png" />
                                    <p style="font-size: 20px; max-width: 352px; margin-top: 10px; line-height: 26px;">
                                        “I wanted to do an MBA in one of the most competitive programs, and I was definitely stressed about my admissions essays, as my major was in Accounting, and writing wasn't my strong point. I was so lucky to find Admissions Key!
                                        I loved my coach, how personalized the approach was and how great the essays sounded at the end. I think the interview process in the beginning really helped me to clarify my own goals and motivations. The interview preparation was also great and very important! 
                                        I got accepted to Columbia (my first and only choice)! I would really recommend Admissions Key to anyone.
                                        ”</p>
                                </div>
                            </div>
                        </div>

                <div id="t19" class="students-hover-box" style="display: none;">
                            <div class="close" id="19" onclick="showToggle(this.id)"><i class="fas fa-times"></i></div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 detail">
                                <h3 class="student-name">Polina Okhotnikova</h3>
                                    <h2>MSc</h2>
                                    <h3>Admitted to the University of Cambridge</h3>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <h4>Packages Selected</h4>
                                            <ul class="list-school-low">
                                                <li>School selection</li>
                                                <li>Application Preparation</li>
                                                <li>Interview Preparation</li>
                                                <li>IELTS</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-6 pl-0">
                                            <h4>Major</h4>
                                            <ul class="list-school-low">
                                                <li>Psychology</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 content">
                                    <img class="mb-5" width="60px" src="<?php echo base_url('front/') ?>assets/images/quote-icon-color.png" />
                                    <p style="font-size: 20px; max-width: 352px; margin-top: 10px; line-height: 26px;">
                                        “When I came to Admissions Key, I had a very stressful situation. It turned out that the private school
                                        that I went to in France and where I got my Bachelor’s in Psychology wasn’t recognized in Europe.
                                        However, taking into account my excellent grades and my personal story, my career coach at
                                        Admissions Key advised me to apply to Cambridge! Thanks to the excellent quality of my application,
                                        essays and interview I got in! Cambridge has made an exception and admitted me to the last year of
                                        its BS program, so that I could then continue on with a Master’s and a PHD. It was unexpected and
                                        wonderful news! I am forever grateful to Admissions Key for the great advice, emotional support,
                                        and amazing professionalism! Without your help I wouldn’t have made it!”</p>
                                </div>
                            </div>
                        </div>
                
        </div><!-- .container -->
    </div><!-- .wrapper -->

    <!-- new div  -->

    <!-- end new div -->


    <div class="wrapper wrapper-content">
        <div class="container">
            <div class="quote">
                <div class="row row-15">
                    <div class="col col-12 col-md-7 mt-5 mt-md-0" data-aos="fade-left" data-aos-duration="1500">
                        <div class="content">
                            <blockquote>
                                <p>After fifteen years of helping students with admissions, I decided to create
                                    Admissions Key because I firmly believe that every single person should have an
                                    opportunity to fully live up to his or her potential. Admissions Key is all about
                                    revealing your personality, passion, and vision. It is about using our expertise to
                                    polish your unique story and your accomplishments and to makes them come alive.</p>
                            </blockquote>
                        <div class="hide-mobile">
                            <p class="author">Marina Yaloyan. </br>CEO, Admissions Key</p>
                            <p class="sub-text">MS in Journalism from Columbia University <br />
                                BA in Literature from UCLA (summa cum laude)</p>
                        </div>
                        </div><!-- .content -->
                    </div><!-- .col -->
                    <div class="col col-12 col-md-5 text-right" data-aos="fade-right"
                        data-aos-duration="1500">
                        <div class="illustration">
                            <img src="<?= base_url('front/')?>assets/images/img-marina-yaloyan.jpg" />
                        </div><!-- .illustration -->
                        <div class="show-mobile mt-5">
                            <p class="author text-left">Marina Yaloyan. </br>CEO, Admissions Key</p>
                            <p class="sub-text text-left">MS in Journalism from Columbia University <br />
                                BA in Literature from UCLA (summa sum laude)</p>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .quote -->
        </div><!-- .container -->
    </div><!-- .wrapper -->
</div><!-- #maincontent -->

<div class="sign-up-box">
    <div class="container">
        <span>Sign up to our newsletter </span> to get the latest updates, news, and insights from Admissions Key. </br> 
        <!-- <a href="<?php echo base_url('sign-up') ?>" title="Sign up" class="sign-up-btn"> Sign-up</a> -->
            <button onclick="showPopup()" class="sign-up-btn">Sign-up</button>
    </div>
</div>

<!-- <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/81e2bc766ee0aed9eee102a5e/02e43690ff035b4118aaae62d.js");</script> -->


<script id="mcjs">
function showPopup() { 
    !function(c, h, i, m, p) {
        m = c.createElement(h), p = c.getElementsByTagName(h)[0], m.async = 1, m.src = i, p.parentNode.insertBefore(m,
            p)
    }(document, "script",
        "https://chimpstatic.com/mcjs-connected/js/users/96b16939638c57e847d968921/9b0b404fa702d11c4bc6f7cc5.js");

//unsetting the cookie
    document.cookie = "MCPopupClosed=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";                  
    document.cookie = "MCPopupSubscribed=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
   }
    
    document.getElementById("show-popup").onclick = function() { showPopup(); } </script>


<script src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script>
$('.bxslider').bxSlider({
  auto: false,
  autoControls: false,
  stopAutoOnClick: false,
  pager: false,
  slideWidth: 600,
  adaptiveHeight: true
  speed:3000,
  adaptiveHeightSpeed:3000,
});
</script>

<script type="text/javascript">

 /*   var url = $(location).attr('href');
       alert(url);
   var tab = url.slice(url.lastIndexOf('/') + 2);


   switch (tab){
            case '19':
              $('#t'+tab).css('display','block');
              break;
            case '18':
               $('#t'+tab).css('display','block');
              break;
        }*/


    function showToggle(clicked) {
        if (clicked==4) 
        {
            $('#t4').css('display','block');
            $('#t8').css('display','none');
            $('#t7').css('display','none');
              window.scrollBy(500,400);
                $('#t4').click(function(){
                $('#t4').css('display','none');
              window.scrollTo(500,3050);

            });
        }

        if (clicked==7) 
        {
            $('#t7').css('display','block');
            $('#t4').css('display','none');
            $('#t8').css('display','none');
             window.scrollBy(500,400);
            $('#t7').click(function(){
                $('#t7').css('display','none');
            window.scrollTo(500,3050);
            });
        }

        if (clicked==8) 
        {
            
            $('#t8').css('display','block');
            $('#t4').css('display','none');
            $('#t7').css('display','none');
             window.scrollBy(500, 400);
            $('#t8').click(function(){
                $('#t8').css('display','none');
             window.scrollTo(500,3050);
            });
        }

        if (clicked==19) 
        {
              console.log(clicked);
            $('#t19').css('display','block');
            $('#t4').css('display','none');
            $('#t7').css('display','none');
             window.scrollBy(500, 400);
            $('#t19').click(function(){
                $('#t19').css('display','none');
             window.scrollTo(500,3050);
            });
        }
        
    }
</script>

