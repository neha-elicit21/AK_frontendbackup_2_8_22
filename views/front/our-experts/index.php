<style type="text/css">
  .bx-default-pager {
    display: none;
}
</style>
<div class="wrapper wrapper-intro">
      <div class="slider">
        <div class=""> <!-- bxslider -->
          <div class="migx_slider"
            style="background-image: url('<?= base_url('front/');?>assets/image-cache/images/static/slider/career-preparation-expert-coach.e95b8f9f.jpg');">
            <div class="container h-100 d-flex flex-column justify-content-end">
              <div class="content">
                <h1 class="h2">Meet our experts</h1>
                <p>Tailored advice. Expert coaching. Partner with </br>Admissions Key and maximize your chance of </br> acceptance to the top business schools. </p>
              </div><!-- .content -->
            </div><!-- .container -->
          </div><!-- .migx_slider -->
        </div>
      </div>
    </div>

    <div id="maincontent " role="main">
      <div class="wrapper wrapper-content our-experts-page" id="wrapper-selection-experts">
        <div class="container pt-5">
          <div class="row">  
            <?php
             foreach($data as $professorData)
             {?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="experts-box">
                  <a href="<?php echo base_url('profile/').$professorData['id']?>">
                    <?php if(!empty($professorData["profile"])){?> 

                   <img src="<?php echo base_url('assets/img/').$professorData["profile"] ?>" width="100%"/>
                    <?php }else{?>

                   <img src="<?php echo base_url('assets/img/dummy.png')?>" width="100%"/>
                   <?php  } ?>
                </a>
                  <h2><a href="<?php echo base_url('profile/').$professorData['id']?>"><?=$professorData['name']; ?></a></h2> 
                     <?php
                      $count =count(explode('_',$professorData['professor_about_our_expert']));
                      $aboutList =explode('_',$professorData['professor_about_our_expert']);
                      for($i=0; $i<$count; $i++)
                      {
                        echo "<p>".$aboutList[$i]."</p>";
                      }
                     ?>
                  <!-- <p>If you are feeling overwhelmed with different schools and career paths, our career experts will evaluate your aspirations. </p>
                  <p>Expertise includes: Test  preparation, Interview preparation, School Selection</p> -->
                  <a href="<?php echo base_url('profile/').$professorData['id']?>" class="link-learnMore" title="Learn More">Learn More</a>
                </div>
              </div>
             <?php }
            ?>         
          
            <!-- <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?php echo base_url('profile')?>">
                <img src="<?= base_url('front/');?>assets/images/experts-img2.jpg" width="100%"/>
              </a>  
                <h2><a href="<?php echo base_url('profile')?>">Jamie Gould</a></h2>
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will evaluate your aspirations.</p>
                <p class="mb-0">Expertise includes: Test preparation, Interview preparation, School Selection</p>
                <a href="<?php echo base_url('profile')?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?php echo base_url('profile')?>">
                <img src="<?= base_url('front/');?>assets/images/experts-img1.jpg" width="100%"/>
              </a>
                <h2><a href="<?php echo base_url('profile')?>">Mark  Smith</a></h2>
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will evaluate your aspirations. </p>
                <p class="mb-0">Expertise includes: Test preparation, Interview preparation, School Selection</p>
                <a href="<?php echo base_url('profile')?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?php echo base_url('profile')?>">
                <img src="<?= base_url('front/');?>assets/images/experts-img2.jpg" width="100%"/>
                </a>  
                <h2><a href="<?php echo base_url('profile')?>">Marya Collins</a></h2>
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will evaluate your aspirations.</p>
                <p class="mb-0">Expertise includes: Test preparation, Interview preparation, School Selection</p>
                <a href="<?php echo base_url('profile')?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?php echo base_url('profile')?>">
                <img src="<?= base_url('front/');?>assets/images/experts-img1.jpg" width="100%"/>
              </a>
                <h2><a href="<?php echo base_url('profile')?>">Lynda Johns</a></h2> 
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will evaluate your aspirations. </p>
                <p class="mb-0">Expertise includes: Test  preparation, Interview preparation, School Selection</p>
                <a href="<?php echo base_url('profile')?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?php echo base_url('profile')?>">
                <img src="<?= base_url('front/');?>assets/images/experts-img2.jpg" width="100%"/>
              </a>
                <h2><a href="<?php echo base_url('profile')?>">Jamie Gould</a></h2>
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will evaluate your aspirations.</p>
                <p class="mb-0">Expertise includes: Test preparation, Interview preparation, School Selection</p>
                <a href="<?php echo base_url('profile')?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?php echo base_url('profile')?>">
                <img src="<?= base_url('front/');?>assets/images/experts-img1.jpg" width="100%"/>
              </a>
                <h2><a href="<?php echo base_url('profile')?>">Mark  Smith</a></h2>
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will evaluate your aspirations. </p>
                <p class="mb-0">Expertise includes: Test preparation, Interview preparation, School Selection</p>
                <a href="<?php echo base_url('profile')?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div> -->
            <!-- <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?php echo base_url('profile')?>">
                <img src="<?= base_url('front/');?>assets/images/experts-img2.jpg" width="100%"/>
              </a>
                <h2><a href="<?php echo base_url('profile')?>">Marya Collins</a></h2>
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will evaluate your aspirations.</p>
                <p class="mb-0">Expertise includes: Test preparation, Interview preparation, School Selection</p>
                <a href="<?php echo base_url('profile')?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div> -->
          </div>
        </div>
      </div>

      <div class="wrapper wrapper-content" id="experts-our-students">
        <div class="container">
          <h2 class="" data-aos="fade-up" style="opacity: 1; color: #424242;">Meet our students</h2>
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12" data-aos="fade-right" data-aos-duration="1000">
              <div class="student-testimonial" id="student-testi">
                <div class="student-img">
                  <img class="img-student" src="<?= base_url('front/');?>assets/images/Victor.jpg"/>
                  <img  class="quote-icon" src="<?= base_url('front/');?>assets/images/quote-icon.png"/>
                </div>
            <p><span>Victor D</span></p>
            <ul>
              <li>Admitted to LBS</li>
              <li>Degree: MS</li>
              <li>Packages selected: Application Preparation</li>
              <li> Major: Management</li>
           </ul>
            <p>The Global MiM program at LBS that I was applying to is one of the most competitive and I wanted
            to have all chances to succeed, this is why I contacted Admissions Key. From the very first moment I
            felt the high standards and the dedication of the team. It was extremely pleasant. With my coach we
            came up with a strategy that really paid off and allowed me to demonstrate the best I had to offer. I
            was impressed by the result and most importantly I got in!</p>
               <!--  <p><span>Ang  Lee MBA,  Oxford  University, England </span></p> -->
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12" data-aos="fade-left" data-aos-duration="1000">
              <div class="student-testimonial" id="student-testi">
                <div class="student-img">
                  <img class="img-student" src="<?= base_url('front/');?>assets/images/students-img1.jpg"/>
                  <img  class="quote-icon" src="<?= base_url('front/');?>assets/images/quote-icon.png"/>
                </div>
                 <p><span>Nabil M</span></p>
                <ul>
                    <li>Admitted to UCLA Anderson, University of Michigan</li>
                    <li>Degree: MBA, TOEFL, GRE</li>
                    <li>Packages selected: School Selection, Application Preparation, Interview Preparation, GMAT</li>
                    <li> Major: Management</li>
               </ul>
                  <p>When I first looked at all the questions required for UCLA, as well as the competitive test scores, I
                  panicked. But then as my coach at Admissions Key started helping me, I felt more and more
                  confident about the outcome of my application. It required intense work, and I am so grateful that I
                  was helped in every way. Admissions Key really brings the best out of you! I got the scores I wanted 
                  on my tests, and I also got an incredibly written application that got me into the school I have always
                  wanted to be in! Thank you very much! </p>
                    <!--   <p><span>Ang  Lee MBA,  Oxford  University, England </span></p> -->
              </div>
            </div> 
            <div class="col-lg-4 col-md-4 col-sm-12" data-aos="fade-left" data-aos-duration="1000">
              <div class="student-testimonial" id="student-testi">
                <div class="student-img">
                  <img class="img-student" src="<?= base_url('front/');?>assets/images/students-img1.jpg"/>
                  <img  class="quote-icon" src="<?= base_url('front/');?>assets/images/quote-icon.png"/>
                </div>
                  <p><span>Hanéne A</span></p>
                <ul>
                    <li>Admitted to London School of Economics (LSE)</li>
                    <li>Degree: Executive LLM</li>
                    <li>Packages selected: Ms / Msc Application Preparation, Interview Preparation</li>
                    <li> Major: Corporate Law</li>
               </ul>
                <p>I wanted to apply for an executive LLM program but after several nights spent writing I found that my personal
              statement lacked power and relevance. So, I started looking for help. With Admissions Key, I found a perfectly
              adapted coaching program. I received personal guidance for every step of the admissions process - from the
              beginning to the final stage of my project, including the interview preparation. The investment of the Admissions
              Key team was beyond my expectations. They were able to craft my personal story much better than I would ever
              do it myself!</p>
               
              </div>
            </div> 
          </div>
        </div><!-- .container -->
      </div>
     <div class="wrapper wrapper-content" id="wrapper-voir-aussi">
        <div class="container">
          <h2 style="color: #424242;">See also...</h2>

          <div class="list-experts">
            <div class="row">
              <div class="col col-12 col-md-6 col-lg-3 mt-5 mt-lg-0" data-aos="fade-up" data-aos-duration="0">
                <div class="migx_service position-relative h-100">
                  <div class="inner h-100 d-flex flex-column">
                    <div class="illustration">
                       <img src="<?= base_url('front/') ?>assets/image-cache/images/static/slider/Career-and-school-selection.jpg" alt="" />
                    </div><!-- .illustration -->

                    <div class="content flex-grow-1">
                      <h3>Career  & School</br> Selection</h3>
                      <p>If you are insecure about writing your personal statement, our writing experts will help you
                        craft your unique story that will make you stand apart from a competitive pool of highly
                        qualified
                        candidates.</p>
                    </div><!-- .content -->

                    <div class="more">
                      <span class="a"><span>Learn more</span></span>
                    </div><!-- .more -->
                  </div><!-- .inner -->

                  <a href="<?= base_url('career-and-school-selection') ?>" class="overlay">Learn more</a>
                </div><!-- .migx_service -->
              </div><!-- .col -->
              <div class="col col-12 col-md-6 col-lg-3 mt-5 mt-lg-0" data-aos="fade-up" data-aos-duration="1000">
                <div class="migx_service position-relative h-100">
                  <div class="inner h-100 d-flex flex-column">
                    <div class="illustration">
                      <img src="<?= base_url('front/') ?>assets/image-cache/images/static/slider/application-preparation.jpg"
                        alt="" />
                    </div><!-- .illustration -->

                    <div class="content flex-grow-1">
                      <h3>Application </br>
                        Preparation</h3>
                      <p>If you are stressed about the interview process, our communication experts will work on
                        content,
                        clarity and fluency of your expression to encourage confidence and to ensure success.</p>
                    </div><!-- .content -->

                    <div class="more">
                      <span class="a"><span>Learn more</span></span>
                    </div><!-- .more -->
                  </div><!-- .inner -->

                  <a href="<?= base_url('application-preparation') ?>" class="overlay">Learn more</a>
                </div><!-- .migx_service -->
              </div><!-- .col -->              
              <div class="col col-12 col-md-6 col-lg-3 mt-5 mt-lg-0" data-aos="fade-up" data-aos-duration="2000">
                <div class="migx_service position-relative h-100">
                  <div class="inner h-100 d-flex flex-column">
                    <div class="illustration">
                      <img src="<?= base_url('front/') ?>assets/image-cache/images/static/slider/interview-preparation-expert.e5214bca.jpg"
                        alt="" />
                    </div><!-- .illustration -->

                    <div class="content flex-grow-1">
                      <h3>Interview</br>  
                        Preparation</h3>
                      <p>If you are stressed about the interview process, our communication experts will work on
                        content,
                        clarity and fluency of your expression to encourage confidence and to ensure success.</p>
                    </div><!-- .content -->

                    <div class="more">
                      <span class="a"><span>Learn more</span></span>
                    </div><!-- .more -->
                  </div><!-- .inner -->

                  <a href="<?= base_url('interview-preparation') ?>" class="overlay">Learn more</a>
                </div><!-- .migx_service -->
              </div><!-- .col -->
              <div class="col col-12 col-md-6 col-lg-3 mt-5 mt-lg-0" data-aos="fade-up" data-aos-duration="3000">
                <div class="migx_service position-relative h-100">
                  <div class="inner h-100 d-flex flex-column">
                    <div class="illustration">
                    <img src="<?= base_url('front/') ?>assets/image-cache/images/static/slider/test-preparation.jpg" alt="" />
                    </div><!-- .illustration -->

                    <div class="content flex-grow-1">
                      <h3>Test  Preparation</h3>
                      <p>If you are uncertain about your test level, or if you have already scored lower than expected,
                        we
                        offer tailored methodology and intensive training to boost your performance and help you obtain
                        the scores you need.</p>
                    </div><!-- .content -->

                    <div class="more">
                      <span class="a"><span>Learn more</span></span>
                    </div><!-- .more -->
                  </div><!-- .inner -->

                  <a href="<?= base_url('test-preparation') ?>" class="overlay">Learn more</a>
                </div><!-- .migx_service -->
              </div><!-- .col -->
            
            </div><!-- .row -->
          </div><!-- .list-experts -->
        </div><!-- .container -->
      </div><!-- .wrapper -->

    </div>
    <div class="sign-up-box">
    <div class="container">
        <span>Sign up to our newsletter </span> to get the latest updates, news, and insights from Admissions Key. </br> 
        <!-- <a href="<?php echo base_url('sign-up') ?>" title="Sign up" class="sign-up-btn"> Sign-up</a> -->
            <button onclick="showPopup()" class="sign-up-btn">Sign-up</button>
    </div>
</div>

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
    
    document.getElementById("show-popup").onclick = function() { showPopup(); }
  </script>
