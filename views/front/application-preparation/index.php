<style type="text/css">
  .why-consultUs-mba {
    background-color: #424242;
    color: #fff;
}
.activeCourse {
    background: #424242 !important;
}
.activeCourse p {
    color: #fff;
}
/* .activeCourse:hover {
    color: #000;
} */
.bx-default-pager {
    display: none;
}
.experts-box h2 {
    font-size: 25px;
}
  a.name-expert {
    text-decoration: none !important;
}
</style>
<div class="wrapper wrapper-intro">
      <div class="slider">
        <div class=""> <!-- bxslider -->
          <div class="migx_slider"
            style="background-image: url('<?= base_url('front/');?>assets/image-cache/images/static/slider/application-preparation.jpg');">
            <div class="container h-100 d-flex flex-column justify-content-end" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
              <div class="content">
                <h1 class="h2">Application preparation</h1>
                <p>Discover our personalized one-on-one sessions with top experts to maximize your chances of
                  admission.</p>
              </div><!-- .content -->
            </div><!-- .container -->
          </div><!-- .migx_slider -->
        </div>
      </div>
    </div>

    <div id="maincontent" role="main">
      <div class="wrapper wrapper-content" id="top-content-box">
        <div class="container" id="Ourpackages">
       

          <div class="row">
          <?php 

          if(isset($package_data) && !empty($package_data)){
          foreach($package_data as $row){ ?>
                <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up" data-aos-duration="1000">
                  <?php
                  if($row['id']==1 && !empty($row['id']))
                  {?>
                    <div class="considered-box bg-color3 activeCourse" id="considered-box<?= ($row['id'])?($row['id']):('') ; ?>">
                  <?php }
                  else{?>
                  <div class="considered-box bg-color3" id="considered-box<?= ($row['id'])?($row['id']):('') ; ?>">
                  <?php }
                  ?>
              
                <h3><?= $row['package_name'] ?> </h3>
                <p><?= $row['Package_content'] ?>
                </p>
                <a href="#why-consultUs-<?= $row['package_name'] ?>" title="Select package" id="<?= $row['id'] ; ?>" onclick="LearnCourse(this.id)" class="select-package-btn">Learn More <i
                    class="fas fa-chevron-right"></i></a>
              </div>
            </div>
             <?php
            } }
          ?>
          <!-- please do not remove commented code -->
            <!-- <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up" data-aos-duration="1000">
              <div class="considered-box bg-color3 activeCourse" id="considered-box">
                <h3>BS / BSc </h3>
                <p>Don’t leave your future to chance. We put all chances on your side and guide you towards acceptance.
                </p>
                <a href="#why-consultUs-bs" title="Select package" id="1" onclick="LearnCourse(this.id)" class="select-package-btn">Learn More <i
                    class="fas fa-chevron-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up" data-aos-duration="1500">
              <div class="considered-box bg-color3" id="considered-box1">
                <h3> MS / MSc</h3>
                <p>With Admissions Key you are no longer alone. Get full personalized help to ensure success.</p>
                <a href="#why-consultUs-ms" id="2" onclick="LearnCourse(this.id)" title="Select package" class="select-package-btn">Learn More <i
                    class="fas fa-chevron-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up" data-aos-duration="2000">
              <div class="considered-box bg-color3" id="considered-box2">
                <h3> MBA / EMBA</h3>
                <p>Your story - our storytelling expertise. Most of our students get accepted into their first choice
                  MBA / EMBA program.</p>
                <a href="#why-consultUs-mba" id="3" onclick="LearnCourse(this.id)" title="Select package" class="select-package-btn">Learn More <i
                    class="fas fa-chevron-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up" data-aos-duration="2500">
              <div class="considered-box bg-color3" id="considered-box3">
                <h3>  PHD</h3>
                <p>From your resume to your research proposal, we assist you every step of the way.</p>
                <a href="#why-consultUs-phd" id="4" onclick="LearnCourse(this.id)" title="Select package" class="select-package-btn">Learn More <i
                    class="fas fa-chevron-right"></i></a>
              </div>
            </div> -->
          </div>
        </div>
      </div>
      <div class="wrapper wrapper-content bsc-1 why-consultUs-mba" id="why-consultUs-BS/BSc" >
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-mba-emba"  data-aos="fade-right" data-aos-duration="1000">
              <h3 class="mb-3">BS/BSc</h3>
              <h3 class="mt-0">Why consult us?</h3>
              <p>Studying abroad after high school represents a serious financial and emotional investment. You must be certain of your choice and leave nothing to chance. Your personal statement is key in evaluating your personality and your potential. Are you a future leader or a follower? Do you have what it takes to succeed? What about your extra-curricular activities, international experience, or volunteering? </p>
              <h3>What do we offer? </h3>
              <ul>
                <li>A fully developed 9-step strategy to cover every stage of the admissions process</li>
                <li> Goal and essential message development </li>
                <li>Essay and recommendation letters writing and editing </li>
                <li>Review of the application forms</li>
                <li>An expert dream-team with years of experience in the admissions</li>
                <li>Individually tailored sessions to obtain stellar results</li>

              </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6"  data-aos="fade-left" data-aos-duration="1000">
              <div class="packages-includes-box">
                <h3>Our BS/BSc packages includes:</h3>
                <div class="row">
                <div class="col-8">
                  <ul class="packages-includes-list">
                    <li> Goal & essential message development</li>
                    <li> Personal statement writing & editing</li>
                    <li> Resume editing (optional)</li>
                    <li> Recommender advice & letter editing</li>
                    <li> Application forms review</li>
                    
                  </ul>
                </div>
                <div class="col-4">
                  <div class="icon-box">
                    <img src="<?= base_url('front/');?>assets/images/icon-pdf.png" /></br>
                      <a role="button" href="<?=base_url('assets/sample_application_pdf/UCAS_application_sample.pdf')?>" download="UCAS_application_sample.pdf">
                    <span>Download a sample application</span></a>
                  </div>
                </div>
              </div>
              <span class="prices-box">Prices: <span>€1,499</span></span>
              <a href="<?= base_url('home/application_preparation_booking/9'); ?>" title="Select package" class="select-package-btn">Select  this  package <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="wrapper wrapper-content msc-1 why-consultUs-mba" id="why-consultUs-MS/MSc" style="display: none;">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-mba-emba" data-aos="fade-right" data-aos-duration="1000">
              <h3 class="mb-3">MS/MSc</h3>
              <h3 class="mt-0">Why consult us?</h3>
              <p>Acquiring a master’s degree abroad is an important decision that may have a great influence over your future life and career.  Once you have selected the right school, your application needs to demonstrate sophisticated content and delicate balance of teamwork/leadership, clear career goals, integrity, sincerity, character, and vision. </p>
              <h3>What do we offer? </h3>
              <ul>
                <li> A fully developed 10-step strategy to cover every step of the admissions process</li>
                <li> Goal and essential message development </li>
                <li> Essay, resume, and recommendation letters writing and editing </li>
                <li>Review of the application forms</li>
                <li>An expert dream-team with years of experience in the admissions</li>
                <li> Individually tailored one-on-one sessions to obtain stellar results</li>
              </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6" data-aos="fade-left" data-aos-duration="1000">
              <div class="packages-includes-box">
                <h3>Our MS/MSc packages includes:</h3>
                <div class="row">
                <div class="col-8">
                  <ul class="packages-includes-list">

                    <li>Goal & essential message development</li>
                    <li>Essay writing & editing</li>
                    <li>Goal Development</li>
                    <li>Resume editing</li>
                    <li>Application forms review</li>
                    <li>Recommender advice & letter editing (optional)</li>
                  </ul>
                </div>
                <div class="col-4">
                  <div class="icon-box">
                    <img src="<?= base_url('front/');?>assets/images/icon-pdf.png" /></br>
                   <a role="button" href="<?=base_url('assets/sample_application_pdf/LLM_Application_sample.pdf')?>" download="LLM_Application_sample.pdf"> <span>Download a sample application</span></a>
                  </div>
                </div>
              </div>
              <span class="prices-box">Prices: <span>€1,800</span></span>
              <a href="<?= base_url('home/application_preparation_booking/10'); ?>" title="Select package" class="select-package-btn">Select  this  package <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="wrapper wrapper-content emba-1 why-consultUs-mba" id="why-consultUs-MBA/EMBA" style="display: none;">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-mba-emba">
              <h3 class="mb-3">MBA/EMBA</h3>
              <h3 class="mt-0">Why consult us?</h3>
              <p>MBA competition is often quite fierce, especially if you are considering an elite program. That is why defining clear professional goals in relation with the MBA program is crucial. Also, flawless essays that describe how you handled professional or personal challenges and what you learned from them are great ways to show your inner strength, resilience, and ability to drive change.  </p>
              <h3>What do we offer?</h3>
               <ul>
             <li>A fully developed 10-step strategy to cover every step of the admissions process</li>
       <li>Goal and essential message development</li>
       <li>Essay, resume, and recommendation letters writing and editing.</li>
       <li>Review of the application forms.</li>
       <li>An expert dream-team with years of experience in the admissions.</li>
       <li>Individually tailored one-on-one sessions to obtain stellar results.</li>
               </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="packages-includes-box">
                <h3>Our MBA/EMBA packages includes:</h3>
                <div class="row">
                <div class="col-8">
                  <ul class="packages-includes-list">
                      <li>Target school list</li>
                    <li>Goal & essential message development</li>
                    <li>Essay writing & editing</li>
                    <li>Resume editing</li>
                    <li>Application forms review</li>
                    <li>Recommender advice & letter editing (optional)</li>
                  </ul>
                </div>
                <div class="col-4">
                  <div class="icon-box">
                    <img src="<?= base_url('front/');?>assets/images/icon-pdf.png" /></br>
                   <a role="button" href="<?=base_url('assets/sample_application_pdf/EXECUTIVE_MBA_APPLICATION_SAMPLE.pdf')?>" download="EXECUTIVE_MBA_APPLICATION_SAMPLE.pdf"><span>Download a sample application</span></a> 
                  </div>
                </div>
              </div>
              <span class="prices-box">Prices: <span>€2,499</span></span>
              <a href="<?= base_url('home/application_preparation_booking/11'); ?>" title="Select package" class="select-package-btn">Select  this  package <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="wrapper wrapper-content phd-1 why-consultUs-mba" id="why-consultUs-PhD" style="display: none;">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-mba-emba">
              <h3 class="mb-3">PHD</h3>
              <h3 class="mt-0">Why consult us?</h3>
              <p>Applying for a PhD is a complex process with many intermediary steps. One of the main things the universities will be looking at in your PhD application is a research proposal. It needs to highlight your background knowledge of the topic, experiences, qualifications, methodology and your proposed research plan. </p>
              <h3>What do we offer? </h3>
                <ul>
                  <li>A fully developed 11-step strategy to cover every step of the admissions process</li>
                  <li> Goal and essential message development</li> 
                  <li> Essay, resume, and recommendation letters writing and editing </li>
                  <li> Review of the application forms</li>
                  <li>An expert dream-team with years of experience in the admissions</li>
                  <li> Individually tailored one-on-one sessions to obtain stellar results
                  </li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="packages-includes-box">
                <h3>Our PHD packages includes:</h3>
                <div class="row">
                <div class="col-8">
                  <ul class="packages-includes-list">
                    <li> Target school list</li>
                    <li>Goal & essential message development</li>
                    <li>Essay writing & editing</li>
                    <li>Research proposal editing & Resume editing</li>
                    <li>Application forms review</li>
                    <li>Recommender advice & letter editing (optional)</li>
                  </ul>
                </div>
                <div class="col-4">
                  <!-- <div class="icon-box">
                    <img src="<?= base_url('front/');?>assets/images/icon-pdf.png" /></br>
                    <span>Download a sample application</span>
                  </div> -->
                </div>
              </div>
              <span class="prices-box">Prices: <span>€2,599</span></span>
              <a href="<?= base_url('home/application_preparation_booking/12'); ?>" title="Select package" class="select-package-btn">Select  this  package <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="wrapper wrapper-content contenus-1 application-preparation-approach step-height" id="wrapper-contenus">
        <div class="container">
        <h2>Our approach</h2>
          <div class="owl-carousel owl-theme migx_contenu owlcareer" id="owlcareer">
            <div class="item">
                <div class="slider-inner-box">
                      <div class="surtitre">Step 1</div>
                      <h3>Positioning your candidature</h3>
                      <p>The first step is the interview process. It allows us to get a glimpse into your personality, your accomplishments and failures, goals, and experiences.</p>
                      <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/picto-2.png" /></div>
                    </div>
            </div>
            <div class="item">
            <div class="slider-inner-box">
                      <div class="surtitre">Step 2</div>
                      <h3>Determining the school list</h3>
                      <p>Based on the information you provided our experts make sure that your schools match your personality, your background, and your professional goals.</p>
                      <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/school-list.png" /></div>
                    </div>
            </div>
            <div class="item">
            <div class="slider-inner-box">
                      <div class="surtitre">Step 3</div>
                      <h3>Goal development</h3>
                      <p>Clear professional goal is not only about what you want to do. It is about explaining why you want to do it and how it ﬁts into your background. Together we develop strong goals that provide impact and direction to your candidature.</p>
                      <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/goal-dev.png" /></div>
                    </div>
            </div>
            <div class="item">
            <div class="slider-inner-box">
                      <div class="surtitre">Step 4</div>
                      <h3>Recommender advice & letter editing</h3>
                      <p>We help edit your recommendation letters to ensure smooth and professionally written letters that support your candidature.</p>
                      <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/picto-5.png" /></div>
                    </div>
            </div>
            <div class="item">
            <div class="slider-inner-box">
                      <div class="surtitre">Step 5 </div>
                      <h3>Essential message development</h3>
                      <p>Your essays need to have a clear essential message that will give direction and power to your candidature. We help you shape your message and handpick your experiences to support it. </p>
                      <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/essential-message.png" /></div>
                    </div>
            </div>
            <div class="item">
            <div class="slider-inner-box">
                      <div class="surtitre">Step 6</div>
                      <h3>Personal Statement writing & editing</h3>
                      <p>Your essays are the soul of your application. Together, we craft coherent and eloquent essays that grasp the essence of your accomplishments and are certain to make you stand out from the crowd.</p>
                      <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/personal-statement.png" /></div>
                    </div>
            </div>

            <div class="item">
                <div class="slider-inner-box">
                    <div class="surtitre">Step 7</div>
                    <h3>Application forms review</h3>
                    <p>In your application, every word matters. We review all your application forms to make sure that your application is consistent and grammatically impeccable</p>
                    <div class="illustration"><img style="width:15px" src="<?= base_url('front/');?>assets/images/pictos/picto-8.png" /></div>
                </div>
            </div>
            <div class="item">
                <div class="slider-inner-box">
                      <div class="surtitre">Step 8</div>
                      <h3>Final review</h3>
                      <p>Before you click submit, our undergraduate admissions counselor reviews every single ﬁle to ensure the ﬂawlessness of your application.</p>
                      <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/picto-9.png" /></div>
                    </div>
            </div>
            <div class="item">
                <div class="slider-inner-box">
                    <div class="surtitre">Step 9</div>
                    <h3>Follow up & Quality control</h3>
                    <p>We never abandon our students and are extremely proud of our students’ accomplishments and careers. That is why we always follow-up to ensure a 100-percent satisfaction with our services.</p>
                    <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/picto-10.png" /></div>
                </div>
            </div>
            
          </div>
        </div>
      </div>
    
        <div class="wrapper wrapper-content contenus-2" id="wrapper-contenus" style="display:none;">
          <div class="container">
          <h2>Our approach</h2>
            <div class="owl-carousel owl-theme migx_contenu owlcareer" id="owlcareer2">
              <div class="item">
                  <div class="slider-inner-box">
                        <div class="surtitre">Step 1</div>
                        <h3>Positioning your candidature</h3>
                        <p>The first step is the interview process. It allows us to get a glimpse into your personality, your accomplishments and failures, goals, and experiences.</p>
                        <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/picto-2.png" /></div>
                      </div>
              </div>
              <div class="item">
              <div class="slider-inner-box">
                        <div class="surtitre">Step 2</div>
                        <h3>Determining the school list</h3>
                        <p>Based on the information you provided our experts make sure that your schools match your personality, your background, and your professional goals.</p>
                        <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/school-list.png" /></div>
                      </div>
              </div>
              <div class="item">
              <div class="slider-inner-box">
                        <div class="surtitre">Step 3</div>
                        <h3>Goal development</h3>
                        <p>Clear professional goal is not only about what you want to do. It is about explaining why you want to do it and how it ﬁts into your background. Together we develop strong goals that provide impact and direction to your candidature.</p>
                        <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/goal-dev.png" /></div>
                      </div>
              </div>
              <div class="item">
              <div class="slider-inner-box">
                        <div class="surtitre">Step 4</div>
                        <h3>Recommender advice & letter editing</h3>
                        <p>We help edit your recommendation letters to ensure smooth and professionally written letters that support your candidature.</p>
                        <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/picto-5.png" /></div>
                      </div>
              </div>
              <div class="item">
              <div class="slider-inner-box">
                        <div class="surtitre">Step 5 </div>
                        <h3>Essential message development</h3>
                        <p>Your essays need to have a clear essential message that will give direction and power to your candidature. We help you shape your message and handpick your experiences to support it. </p>
                        <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/essential-message.png" /></div>
                      </div>
              </div>
              <div class="item">
              <div class="slider-inner-box">
                        <div class="surtitre">Step 6</div>
                        <h3>Personal Statement writing & editing</h3>
                        <p>Your essays are the soul of your application. Together, we craft coherent and eloquent essays that grasp the essence of your accomplishments and are certain to make you stand out from the crowd.</p>
                        <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/personal-statement.png" /></div>
                      </div>
              </div>

              <div class="item">
                  <div class="slider-inner-box">
                      <div class="surtitre">Step 7</div>
                      <h3>Resume editing</h3>
                      <p>We polish your professional experiences and highlight your skills and accomplishments.The result is a concise, clear, and visually appealing resume that showcases the best of what you have to offer. </p>
                      <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/picto-7.png" /></div>
                  </div>
              </div> 
              <div class="item">
                  <div class="slider-inner-box">
                      <div class="surtitre">Step 8</div>
                      <h3>Application forms review</h3>
                      <p>In your application, every word matters. We review all your application forms to make sure that your application is consistent and grammatically impeccable</p>
                      <div class="illustration"><img style="width:15px" src="<?= base_url('front/');?>assets/images/pictos/picto-8.png" /></div>
                  </div>
              </div>
              <div class="item">
                  <div class="slider-inner-box">
                        <div class="surtitre">Step 9</div>
                        <h3>Final review</h3>
                        <p>Before you click submit, our undergraduate admissions counselor reviews every single ﬁle to ensure the ﬂawlessness of your application.</p>
                        <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/picto-9.png" /></div>
                      </div>
              </div>
              <div class="item">
                  <div class="slider-inner-box">
                      <div class="surtitre">Step 10</div>
                      <h3>Follow up & Quality control</h3>
                      <p>We never abandon our students and are extremely proud of our students’ accomplishments and careers. That is why we always follow-up to ensure a 100-percent satisfaction with our services.</p>
                       <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/picto-10.png" /></div>
                  </div>
              </div>
            </div>
          </div>
        </div>
         
        <div class="wrapper wrapper-content contenus-3" id="wrapper-contenus" style="display:none;">
          <div class="container">
          <h2>Our approach</h2>
            <div class="owl-carousel owl-theme migx_contenu owlcareer" id="owlcareer3">
              <div class="item">
                  <div class="slider-inner-box">
                        <div class="surtitre">Step 1</div>
                        <h3>Positioning your candidature</h3>
                        <p>The first step is the interview process. It allows us to get a glimpse into your personality, your accomplishments and failures, goals, and experiences.</p>
                        <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/picto-2.png" /></div>
                      </div>
              </div>
              <div class="item">
              <div class="slider-inner-box">
                        <div class="surtitre">Step 2</div>
                        <h3>Determining the school list</h3>
                        <p>Based on the information you provided our experts make sure that your schools match your personality, your background, and your professional goals.</p>
                        <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/school-list.png" /></div>
                      </div>
              </div>
              <div class="item">
              <div class="slider-inner-box">
                        <div class="surtitre">Step 3</div>
                        <h3>Goal development</h3>
                        <p>Clear professional goal is not only about what you want to do. It is about explaining why you want to do it and how it ﬁts into your background. Together we develop strong goals that provide impact and direction to your candidature.</p>
                        <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/goal-dev.png" /></div>
                      </div>
              </div>
              <div class="item">
              <div class="slider-inner-box">
                        <div class="surtitre">Step 4</div>
                        <h3>Recommender advice & letter editing</h3>
                        <p>We help edit your recommendation letters to ensure smooth and professionally written letters that support your candidature.</p>
                        <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/picto-5.png" /></div>
                      </div>
              </div>
              <div class="item">
              <div class="slider-inner-box">
                        <div class="surtitre">Step 5 </div>
                        <h3>Essential message development</h3>
                        <p>Your essays need to have a clear essential message that will give direction and power to your candidature. We help you shape your message and handpick your experiences to support it. </p>
                        <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/essential-message.png" /></div>
                      </div>
              </div>
              <div class="item">
              <div class="slider-inner-box">
                        <div class="surtitre">Step 6</div>
                        <h3>Personal Statement writing & editing</h3>
                        <p>Your essays are the soul of your application. Together, we craft coherent and eloquent essays that grasp the essence of your accomplishments and are certain to make you stand out from the crowd.</p>
                        <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/personal-statement.png" /></div>
                      </div>
              </div>
              <div class="item">
              <div class="slider-inner-box">
                        <div class="surtitre">Step 7</div>
                        <h3>Resume editing</h3>
                        <p>We polish your professional experiences and highlight your skills and accomplishments.The result is a concise, clear, and visually appealing resume that showcases the best of what you have to offer..</p>
                        <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/personal-statement.png" /></div>
                      </div>
              </div>

              <div class="item">
                  <div class="slider-inner-box">
                      <div class="surtitre">Step 8</div>
                      <h3>Application forms review</h3>
                      <p>In your application, every word matters. We review all your application forms to make sure that your application is consistent and grammatically impeccable</p>
                      <div class="illustration"><img style="width:15px" src="<?= base_url('front/');?>assets/images/pictos/picto-8.png" /></div>
                  </div>
              </div>
              <div class="item">
                  <div class="slider-inner-box">
                        <div class="surtitre">Step 9</div>
                        <h3>Final review</h3>
                        <p>Before you click submit, our undergraduate admissions counselor reviews every single ﬁle to ensure the ﬂawlessness of your application.</p>
                        <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/picto-9.png" /></div>
                      </div>
              </div>
              <div class="item">
                  <div class="slider-inner-box">
                      <div class="surtitre">Step 10</div>
                      <h3>Follow up & Quality control</h3>
                      <p>We never abandon our students and are extremely proud of our students’ accomplishments and careers. That is why we always follow-up to ensure a 100-percent satisfaction with our services.</p>
                      <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/picto-10.png" /></div>
                  </div>
              </div>
              
            </div>
          </div>
        </div>
        <div class="wrapper wrapper-content contenus-4" id="wrapper-contenus" style="display:none;">
          <div class="container">
          <h2>Our approach</h2>
            <div class="owl-carousel owl-theme migx_contenu owlcareer" id="owlcareer4">
              <div class="item">
                  <div class="slider-inner-box">
                        <div class="surtitre">Step 1</div>
                        <h3>Positioning your candidature</h3>
                        <p>The first step is the interview process. It allows us to get a glimpse into your personality, your accomplishments and failures, goals, and experiences.</p>
                        <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/picto-2.png" /></div>
                      </div>
              </div>
              <div class="item">
              <div class="slider-inner-box">
                        <div class="surtitre">Step 2</div>
                        <h3>Determining the school list</h3>
                        <p>Based on the information you provided our experts make sure that your schools match your personality, your background, and your professional goals.</p>
                        <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/school-list.png" /></div>
                      </div>
              </div>
              <div class="item">
              <div class="slider-inner-box">
                        <div class="surtitre">Step 3</div>
                        <h3>Goal development</h3>
                        <p>Clear professional goal is not only about what you want to do. It is about explaining why you want to do it and how it ﬁts into your background. Together we develop strong goals that provide impact and direction to your candidature.</p>
                        <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/goal-dev.png" /></div>
                      </div>
              </div>
              <div class="item">
              <div class="slider-inner-box">
                        <div class="surtitre">Step 4</div>
                        <h3>Recommender advice & letter editing</h3>
                        <p>We help edit your recommendation letters to ensure smooth and professionally written letters that support your candidature.</p>
                        <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/picto-5.png" /></div>
                      </div>
              </div>
              <div class="item">
              <div class="slider-inner-box">
                        <div class="surtitre">Step 5 </div>
                        <h3>Essential message development</h3>
                        <p>Your essays need to have a clear essential message that will give direction and power to your candidature. We help you shape your message and handpick your experiences to support it. </p>
                        <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/essential-message.png" /></div>
                      </div>
              </div>
              <div class="item">
              <div class="slider-inner-box">
                        <div class="surtitre">Step 6</div>
                        <h3>Personal Statement writing & editing</h3>
                        <p>Your essays are the soul of your application. Together, we craft coherent and eloquent essays that grasp the essence of your accomplishments and are certain to make you stand out from the crowd.</p>
                        <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/personal-statement.png" /></div>
                      </div>
              </div>

              <div class="item">
                  <div class="slider-inner-box">
                      <div class="surtitre">Step 7</div>
                      <h3>Crafting a research proposal</h3>
                      <p>This is an essential part of your application. We help you with content, clarity and organization of your research proposal. </p>
                      <div class="illustration"><img  src="<?= base_url('front/');?>assets/images/pictos/crafting-research.png" /></div>
                  </div>
              </div> 
              <div class="item">
                  <div class="slider-inner-box">
                      <div class="surtitre">Step 8</div>
                      <h3>Resume editing </h3>
                      <p> We polish your professional experiences and highlight your skills and accomplishments. The result is a concise, clear, and visually appealing resume that showcases the best of what you have to offer.</p>
                      <div class="illustration"><img style="width:15px" src="<?= base_url('front/');?>assets/images/pictos/picto-8.png" /></div>
                  </div>
              </div>
               <div class="item">
                  <div class="slider-inner-box">
                      <div class="surtitre">Step 9</div>
                      <h3>Application forms review</h3>
                      <p>In your application, every word matters. We review all your application forms to make sure that your application is consistent and grammatically impeccable</p>
                      <div class="illustration"><img style="width:15px" src="<?= base_url('front/');?>assets/images/pictos/picto-8.png" /></div>
                  </div>
              </div>
              <div class="item">
                  <div class="slider-inner-box">
                        <div class="surtitre">Step 10</div>
                        <h3>Final review</h3>
                        <p>Before you click submit, our undergraduate admissions counselor reviews every single ﬁle to ensure the ﬂawlessness of your application.</p>
                        <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/picto-9.png" /></div>
                      </div>
              </div>
              <div class="item">
                  <div class="slider-inner-box">
                      <div class="surtitre">Step 11</div>
                      <h3>Follow up & Quality control</h3>
                      <p>We never abandon our students and are extremely proud of our students’ accomplishments and careers. That is why we always follow-up to ensure a 100-percent satisfaction with our services.</p>
                      <div class="illustration"><img src="<?= base_url('front/');?>assets/images/pictos/picto-10.png" /></div>
                  </div>
              </div>
            </div>
          </div>
        </div>

      <div class="wrapper wrapper-content wrapper-selection-experts-1"  id="wrapper-selection-experts-bsc">
        <div class="container">
          <h2>Meet our experts</h2>
          <p style="max-width: 594px;">Our BS / BSc experts have been handpicked to provide you with professional writing expertise and school knowledge. All native English speakers from either Great Britain or the US with years of experience in the admissions, they offer you insider knowledge from such prestigious undergraduate institutions as Columbia, Harvard, Cornell, Stanford, Princeton, Yale, Berkeley, Oxford, Cambridge, Bocconi, King's, City University of London...</p>
          <div class="row">
            <?php 
                    foreach($bsc_our_experts as $bsc_our_experts_data)
                    {
                      ?>
                     
                        <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="experts-box">
                          <a href="<?php echo base_url('profile/').$bsc_our_experts_data['professor_our_experts_id']?>" class="link-learnMore" title=""><img src="<?php echo base_url('assets/img/').$bsc_our_experts_data["profile"] ?>" width="100%" /></a>
                            <h2><a href="<?php echo base_url('profile/').$bsc_our_experts_data['professor_our_experts_id']?>" class="name-expert" title=""><?= $bsc_our_experts_data['name'] ?> <?= $bsc_our_experts_data['last_name'] ?></a></h2>
                            <?php
                              $count =count(explode('_',$bsc_our_experts_data['professor_about_our_expert']));
                              $aboutList =explode('_',$bsc_our_experts_data['professor_about_our_expert']);
                              for($i=0; $i<$count; $i++)
                              {
                                echo "<p>".$aboutList[$i]."</p>";
                              }
                            ?>
                            <a href="<?php echo base_url('profile/').$bsc_our_experts_data['professor_our_experts_id']?>" class="link-learnMore" title="Learn More">Learn More</a>
                          </div>
                       </div>
                      
                     <?php  } 
             ?>
           
            <!-- <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title=""><img src="<?= base_url('front/');?>assets/images/experts-img2.jpg" width="100%" /></a>
                <h2><a href="<?= base_url('our-experts'); ?>" class="" title="">Jamie Gould</a></h2>
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will
                  evaluate your aspirations.</p>
                <p class="mb-0">Expertise includes: Test preparation, Interview preparation, School Selection</p>
                <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title=""><img src="<?= base_url('front/');?>assets/images/experts-img1.jpg" width="100%" /></a>
                <h2><a href="<?= base_url('our-experts'); ?>" class="" title="">Mark Smith</a></h2>
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will
                  evaluate your aspirations. </p>
                <p class="mb-0">Expertise includes: Test preparation, Interview preparation, School Selection</p>
                <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title=""><img src="<?= base_url('front/');?>assets/images/experts-img2.jpg" width="100%" /></a>
                <h2><a href="<?= base_url('our-experts'); ?>" class="" title="">Marya Collins</a></h2>
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will
                  evaluate your aspirations.</p>
                <p class="mb-0">Expertise includes: Test preparation, Interview preparation, School Selection</p>
                <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div> -->
          </div>
        </div>
      </div>

      <div class="wrapper wrapper-content wrapper-selection-experts-2"  id="wrapper-selection-experts-msc" style="display:none;">
        <div class="container">
          <h2>Meet our experts</h2>
        <!--   <p style="max-width: 594px;">Our MS / MSc experts have been handpicked to provide you with professional writing expertise and school knowledge. All native English speakers from either Great Britain or the US with years of experience in the admissions, they offer you insider knowledge from such prestigious undergraduate institutions as Columbia, Harvard, Cornell, Stanford, Princeton, Yale, Berkeley, Oxford, Cambridge, Bocconi, King's, City University of London...</p> -->
        <p style="max-width: 594px;">Our MS / MSc experts bring you content advice and professional writing help to shape your story. They all possess extensive experience in the admissions and insider knowledge from Cambridge, Oxford, King's, Imperial, University of Sydney, University of Toronto, McGill, Stanford, UC Berkeley, UCLA, Columbia, Dartmouth, Princeton, University of Chicago, Duke, University of Pennsylvania, Brown, Cornell...</p>
          <div class="row">
          <?php 
                    foreach($msc_our_experts as $msc_our_experts_data)
                    {
                      ?>
                     
                        <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="experts-box">
                          <a href="<?php echo base_url('profile/').$msc_our_experts_data['professor_our_experts_id']?>" class="link-learnMore" title=""><img src="<?php echo base_url('assets/img/').$msc_our_experts_data["profile"] ?>" width="100%" /></a>
                            <h2><a href="<?php echo base_url('profile/').$msc_our_experts_data['professor_our_experts_id']?>" class="name-expert" title=""><?= $msc_our_experts_data['name'] ?> <?= $msc_our_experts_data['last_name'] ?></a></h2>
                            <?php
                              $count =count(explode('_',$msc_our_experts_data['professor_about_our_expert']));
                              $aboutList =explode('_',$msc_our_experts_data['professor_about_our_expert']);
                              for($i=0; $i<$count; $i++)
                              {
                                echo "<p>".$aboutList[$i]."</p>";
                              }
                            ?>
                            <a href="<?php echo base_url('profile/').$msc_our_experts_data['professor_our_experts_id']?>" class="link-learnMore" title="Learn More">Learn More</a>
                          </div>
                       </div>
                      
                     <?php  } 
             ?>
            <!-- <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title=""><img src="<?= base_url('front/');?>assets/images/experts-img1.jpg" width="100%" /></a>
                <h2><a href="<?= base_url('our-experts'); ?>" class="name-expert" title="">Lynda Johns</a></h2>
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will
                  evaluate your aspirations. </p>
                <p class="mb-0">Expertise includes: Test preparation, Interview preparation, School Selection</p>
                <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title=""><img src="<?= base_url('front/');?>assets/images/experts-img2.jpg" width="100%" /></a>
                <h2><a href="<?= base_url('our-experts'); ?>" class="" title="">Jamie Gould</a></h2>
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will
                  evaluate your aspirations.</p>
                <p class="mb-0">Expertise includes: Test preparation, Interview preparation, School Selection</p>
                <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title=""><img src="<?= base_url('front/');?>assets/images/experts-img1.jpg" width="100%" /></a>
                <h2><a href="<?= base_url('our-experts'); ?>" class="" title="">Mark Smith</a></h2>
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will
                  evaluate your aspirations. </p>
                <p class="mb-0">Expertise includes: Test preparation, Interview preparation, School Selection</p>
                <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title=""><img src="<?= base_url('front/');?>assets/images/experts-img2.jpg" width="100%" /></a>
                <h2><a href="<?= base_url('our-experts'); ?>" class="" title="">Marya Collins</a></h2>
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will
                  evaluate your aspirations.</p>
                <p class="mb-0">Expertise includes: Test preparation, Interview preparation, School Selection</p>
                <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div> -->
          </div>
        </div>
      </div>

      <div class="wrapper wrapper-content wrapper-selection-experts-3"  id="wrapper-selection-experts-mba" style="display:none;">
        <div class="container">
          <h2>Meet our experts</h2>
          <p style="max-width: 594px;">OUR MBA / EMBA experts bring you professional writing expertise that helps shape your story. They also possess insider knowledge from Harvard Business School, Stanford GSB, Chicago Booth, Wharton, MIT, Berkeley Haas, ESSEC, Yale SOM, UCLA Anderson, Kellogg, Columbia Business School, INSEAD, London Business School, ESSEC...</p>
          <div class="row">
          <?php 
                    foreach($mba_our_experts as $mba_our_experts_data)
                    {
                      ?>
                     
                        <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="experts-box">
                          <a href="<?php echo base_url('profile/').$mba_our_experts_data['professor_our_experts_id']?>" class="link-learnMore" title=""><img src="<?php echo base_url('assets/img/').$mba_our_experts_data["profile"] ?>" width="100%" /></a>
                            <h2><a href="<?php echo base_url('profile/').$mba_our_experts_data['professor_our_experts_id']?>" class="name-expert" title=""><?= $mba_our_experts_data['name'] ?><?= $mba_our_experts_data['last_name'] ?></a></h2>
                            <?php
                              $count =count(explode('_',$mba_our_experts_data['professor_about_our_expert']));
                              $aboutList =explode('_',$mba_our_experts_data['professor_about_our_expert']);
                              for($i=0; $i<$count; $i++)
                              {
                                echo "<p>".$aboutList[$i]."</p>";
                              }
                            ?>
                            <a href="<?php echo base_url('profile/').$mba_our_experts_data['professor_our_experts_id']?>" class="link-learnMore" title="Learn More">Learn More</a>
                          </div>
                       </div>
                      
                     <?php  } 
             ?>
            <!-- <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title=""><img src="<?= base_url('front/');?>assets/images/experts-img1.jpg" width="100%" /></a>
                <h2><a href="<?= base_url('our-experts'); ?>" class="name-expert" title="">Lynda Johns</a></h2>
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will
                  evaluate your aspirations. </p>
                <p class="mb-0">Expertise includes: Test preparation, Interview preparation, School Selection</p>
                <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title=""><img src="<?= base_url('front/');?>assets/images/experts-img2.jpg" width="100%" /></a>
                <h2><a href="<?= base_url('our-experts'); ?>" class="" title="">Jamie Gould</a></h2>
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will
                  evaluate your aspirations.</p>
                <p class="mb-0">Expertise includes: Test preparation, Interview preparation, School Selection</p>
                <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title=""><img src="<?= base_url('front/');?>assets/images/experts-img1.jpg" width="100%" /></a>
                <h2><a href="<?= base_url('our-experts'); ?>" class="" title="">Mark Smith</a></h2>
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will
                  evaluate your aspirations. </p>
                <p class="mb-0">Expertise includes: Test preparation, Interview preparation, School Selection</p>
                <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title=""><img src="<?= base_url('front/');?>assets/images/experts-img2.jpg" width="100%" /></a>
                <h2><a href="<?= base_url('our-experts'); ?>" class="" title="">Marya Collins</a></h2>
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will
                  evaluate your aspirations.</p>
                <p class="mb-0">Expertise includes: Test preparation, Interview preparation, School Selection</p>
                <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div> -->
          </div>
        </div>
      </div>

      <div class="wrapper wrapper-content wrapper-selection-experts-4"  id="wrapper-selection-experts-phd" style="display:none;">
        <div class="container">
          <h2>Meet our experts</h2>
         <!--  <p style="max-width: 594px;">Our PHD experts have been handpicked to provide you with professional writing expertise and school knowledge. All native English speakers from either Great Britain or the US with years of experience in the admissions, they offer you insider knowledge from such prestigious undergraduate institutions as Columbia, Harvard, Cornell, Stanford, Princeton, Yale, Berkeley, Oxford, Cambridge, Bocconi, King's, City University of London...</p> -->
           <p style="max-width: 594px;">OUR PHD experts bring you professional writing expertise and years of experience in the admissions. They possess insider knowledge from Dartmouth, Duke, University of Pennsylvania (Penn), USC, UCSD, University of Texas, University of Birmingham, University of Leeds, University of Nottingham, Queens, Brunel, City University of London...</p>
          <div class="row">
          <?php 
                    foreach($phd_our_experts as $phd_our_experts_data)
                    {
                      ?>
                     
                        <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="experts-box">
                          <a href="<?php echo base_url('profile/').$phd_our_experts_data['professor_our_experts_id']?>" class="link-learnMore" title=""><img src="<?php echo base_url('assets/img/').$phd_our_experts_data["profile"] ?>" width="100%" /></a>
                            <h2><a href="<?php echo base_url('profile/').$phd_our_experts_data['professor_our_experts_id']?>" class="name-expert" title=""><?= $phd_our_experts_data['name'] ?> <?= $phd_our_experts_data['last_name'] ?></a></h2>
                            <?php
                              $count =count(explode('_',$phd_our_experts_data['professor_about_our_expert']));
                              $aboutList =explode('_',$phd_our_experts_data['professor_about_our_expert']);
                              for($i=0; $i<$count; $i++)
                              {
                                echo "<p>".$aboutList[$i]."</p>";
                              }
                            ?>
                            <a href="<?php echo base_url('profile/').$phd_our_experts_data['professor_our_experts_id']?>" class="link-learnMore" title="Learn More">Learn More</a>
                          </div>
                       </div>
                      
                     <?php  } 
             ?>
            <!-- <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title=""><img src="<?= base_url('front/');?>assets/images/experts-img1.jpg" width="100%" /></a>
                <h2><a href="<?= base_url('our-experts'); ?>" class="name-expert" title="">Lynda Johns</a></h2>
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will
                  evaluate your aspirations. </p>
                <p class="mb-0">Expertise includes: Test preparation, Interview preparation, School Selection</p>
                <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title=""><img src="<?= base_url('front/');?>assets/images/experts-img2.jpg" width="100%" /></a>
                <h2><a href="<?= base_url('our-experts'); ?>" class="" title="">Jamie Gould</a></h2>
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will
                  evaluate your aspirations.</p>
                <p class="mb-0">Expertise includes: Test preparation, Interview preparation, School Selection</p>
                <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title=""><img src="<?= base_url('front/');?>assets/images/experts-img1.jpg" width="100%" /></a>
                <h2><a href="<?= base_url('our-experts'); ?>" class="" title="">Mark Smith</a></h2>
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will
                  evaluate your aspirations. </p>
                <p class="mb-0">Expertise includes: Test preparation, Interview preparation, School Selection</p>
                <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title=""><img src="<?= base_url('front/');?>assets/images/experts-img2.jpg" width="100%" /></a>
                <h2><a href="<?= base_url('our-experts'); ?>" class="" title="">Marya Collins</a></h2>
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will
                  evaluate your aspirations.</p>
                <p class="mb-0">Expertise includes: Test preparation, Interview preparation, School Selection</p>
                <a href="<?= base_url('our-experts'); ?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div> -->
          </div>
        </div>
      </div>

      <div class="wrapper wrapper-content" id="wrapper-option-choose">
        <div class="container">
          <h2 class="animation-scroll animation-fade animated" style="opacity: 1;">Not sure which option to choose?</h2>
          <p class="mb-5 animation-scroll animation-fade animated" style="opacity: 1;">We guide you to the right choice.
          </p>
          <p class="animation-scroll animation-fade animated" style="opacity: 1;"><a href="<?= base_url('free-consultation-booking')?>"
              title="Book your free consultation" class="btn bg-white">Book your free consultation</a></p>
        </div><!-- .container -->
      </div>

      <div class="wrapper wrapper-content" id="wrapper-our-students-bsc">
        <div class="container">
          <h2 class="animation-scroll animation-fade animated" style="opacity: 1;">Meet our students</h2>
          <div class="list-students hide-mobile">
            <div class="row row-0">
              <div class="col col-12 col-md-6" data-aos="fade-right" data-aos-duration="2000">
                <div class="illustration h-100 student-1">
                  <img class="img_height1" src="<?= base_url('front/');?>assets/images/jonas_attias_copy.jpg">
                  <!-- <div class="description d-flex align-items-center justify-content-center">
                    <p>I wanted to do an MBA in one of the most competitive programs, and I was
                      definitely stressed about my admissions essays, as my major was in
                      Accounting and writing wasn't my strong point. I was so lucky&#8230;</p>
                  </div> -->
                  <a href="<?= base_url('our-students/18'); ?>" class="overlay"></a>
                </div><!-- .illustration -->
              </div><!-- .col -->
              <div class="col col-12 col-md-6" data-aos="fade-left" data-aos-duration="1000">

                <div class="migx_student position-relative">
                  <div class="row row-0 h-50">
                    <div class="col col-12 col-md-6">
                      <div class="illustration h-100">
                        <img src="<?= base_url('front/')?>assets/images/Johanna_Loembet.jpg" id="Lee_data_more" />
                        <!-- <div
                          class="description d-flex align-items-center justify-content-center">
                          <p>Admissions Key gives real meaning to an application and turns you
                            into an ideal candidate. Thanks to&#8230;</p>
                        </div> -->
                      </div><!-- .illustration -->
                    </div><!-- .col -->

                    <div class="col col-12 col-md-6">
                      <div class="content h-100 d-md-flex flex-md-column bg-orange student-2">
                        <h3>Johanna Loembet</h3>
                        <p class="flex-grow-1 text-white">“I was looking for help in writing my various personal statements..”</p>
                        <div class="more">
                          <a href="#t1" id="1" onclick="showToggle(this.id)"><span>Read
                              more</span></a>
                        </div><!-- .more -->
                      </div><!-- .content -->
                    </div><!-- .col -->
                  </div><!-- .row -->

                  <a href="#t1" id="1" onclick="showToggle(this.id)" class="overlay"></a>
                </div><!-- .migx_student -->
                <div class="migx_student position-relative student-3">
                  <div class="row row-0 h-50">
                    <div class="col col-12 col-md-6">
                      <div class="illustration h-100">
                        <img src="<?= base_url('front/')?>assets/images/Yann Hoarau.jpg" />
                        <!-- <div
                          class="description d-flex align-items-center justify-content-center">
                          <p>My coach knew perfectly well how to help me express my ideas and
                            to make my profile stand out. My personality&#8230;</p>
                        </div> -->
                      </div><!-- .illustration -->
                    </div><!-- .col -->

                    <div class="col col-12 col-md-6 order-md-first">
                      <div class="content h-100 d-md-flex flex-md-column bg-grey student-3">
                        <h3 id="renaudMore">Yann Hoarau</h3>
                        <p class="flex-grow-1">“I wanted an international school, oriented towards entrepreneurship”</p>
                        <div class="more">
                         <a href="#t5" id="5" onclick="showToggle(this.id)"><span>Read
                              more</span></a>
                        </div><!-- .more -->
                      </div><!-- .content -->
                    </div><!-- .col -->
                  </div><!-- .row -->

                  <a href="#t5" id="5" onclick="showToggle(this.id)" class="overlay"></a>
                </div><!-- .migx_student -->
              </div><!-- .col -->
            </div><!-- .row -->
            <h2 style="color: rgb(255, 153, 51); opacity: 1;" class="animation-scroll animation-fade animated">Jonas Attias
            </h2>
          <!--   <p class="animation-scroll animation-fade animated" style="opacity: 1;">Admitted to McGill University, Boston University and NYU.
            </p>  -->
            <p class="animation-scroll animation-fade animated" style="opacity: 1;">"My coach was extremely dedicated, and I was really impressed by her personalized advice, how she managed to canalize all my energy and helped me to define my goals. Then came the application preparation and again I was completely impressed by the dedication of my professor..."
            </p>
            <div class="more animation-scroll animation-fade animated" style="opacity: 1;">
             <!--  <a href="<?= base_url('our-students/18'); ?>"><span style="text-transform: uppercase;border-bottom: 2px solid #000;padding-bottom: 2px;line-height: 35px;">DISCOVER HIS STORY</span></a>-->
              <a href="#t18" id="18" onclick="showToggle(this.id)"><span style="text-transform: uppercase;border-bottom: 2px solid #000;padding-bottom: 2px;line-height: 35px;">DISCOVER HIS STORY</span></a>

                         </div><!-- .more -->
            <p><a href="<?php echo base_url('our-students') ?>" class="btn text-white mt-4 hover-dark">Meet our students</a></p>

            
          
           
          </div><!-- .list-students -->
          <div class="list-booking show-mobile">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="help-box">
                          <!--   <img src="<?= base_url('front/') ?>assets/images/video-img-mobile.jpg"
                                alt="" />   -->
                                 <img src="<?= base_url('front/') ?>assets/images/front/assets/images/Renaud%20de%20Peretti.jpg"
                                alt="" />
                            <div class="help-content">
                                <h3>Renaud de Peretti</h3>
                               <!--  <p>Lee is a graduate of Stanford thanks to Admissions Key.</p>  -->
                                <p>“Admissions Key gives real meaning to an application and turns you into an ideal candidate. Thanks to you I was accepted into a very competitive program at UC Berkeley...”</p>
                                <a href="<?php echo base_url('career-and-school-selection')?>" title="Select package"
                                    class="btn-learnMore">Learn more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="help-box">
                            <img
                                src="<?= base_url('front/') ?>assets/images/Yann Hoarau.jpg" />
                            <div class="help-content">
                                <h3>Yann Hoarau</h3>
                                <p>“I wanted an international school, oriented towards entrepreneurship”</p>
                                <a href="<?php echo base_url('our-students') ?>" title="Select package"
                                    class="btn-learnMore">Learn more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="help-box">
                            <img
                                src="<?= base_url('front/') ?>assets/images/Johanna_Loembet.jpg" />
                            <div class="help-content">
                                <h3>Johanna Loembet</h3>
                                <p>“I was looking for help in writing my various personal statements..”</p>
                                <a href="<?php echo base_url('our-students') ?>" title="Select package"
                                    class="btn-learnMore">Learn more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .list-booking -->


            <!-- .list-students  for mobile for bsc-->
            <div class="list-booking show-mobile">
                <div class="owl-carousel" id="students-owl-carousel">
                <div class="item">
                        <div class="help-box">
                              <div class="img_mob"><img src="<?= base_url('front/')?>assets/images/jonas_attias_copy_new.jpg" /></div>
                            <div class="help-content">
                                <h3>Jonas Attias</h3>
                                <p>“When I graduated from the American school of Paris, I was confused because I wasn’t quite sure where I wanted to go next. That is when a friend recommended Admissions Key. I started with Career and School Preparation to define the career I wanted and the list of schools that would suit me best...”</p>
                                <a href="#t18" id="18" onclick="showToggle(this.id)" title="Select package"
                                    class="btn-learnMore">Read more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="help-box">
                                 <!--  <img src="<?= base_url('front/')?>assets/images/Polina.jpg" /> -->
                                <div class="img_mob">  <img src="<?= base_url('front/')?>assets/images/Johanna_Loembet_new.jpg" /></div>
                            <div class="help-content">
                                <h3>Johanna Loembet</h3>
                                <p>“I was looking for help in writing my various personal statements..”</p>
                                <a href="#t1" id="1" onclick="showToggle(this.id)" title="Select package"
                                    class="btn-learnMore">Read more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="help-box">
                            <div class="img_mob"> <img src="<?=base_url('front/');?>assets/images/Yann-Hoarau-new.jpg" /></div>
                            <div class="help-content">
                                <h3>Yann Hoarau</h3>
                                <p>“I wanted an international school, oriented towards entrepreneurship...”</p>
                                <a href="#t5" id="5" onclick="showToggle(this.id)" title="Select package"
                                    class="btn-learnMore">Read more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <p>
 <a href="<?= base_url('our-students') ?>" class="btn text-white mt-4 hover-dark">Meet our students</a>
 </p>
            </div><!-- .list-booking -->


            <!-- read me  -->

            <div id="t1" class="students-hover-box students" style="display: none;">
              <div class="close" id="1" onclick="showToggle(this.id)"><i class="fas fa-times"></i></div>
              <div class="row">
                <div class="col-lg-6 col-md-6 detail">
                  <h3 class="student-name">Johanna Loembet</h3>
                  <h2>MSc</h2>
                  <h3>Accepted to Imperial Business school, London, Cass and UCL</h3>
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <h4>Packages Selected</h4>
                      <ul class="list-school-low">
                        <li>Application Preparation</li>
                         <li>IELTS</li>
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
                  “I was looking for help in writing my various personal statements and IELTS preparation, as I wanted to apply for a master’s degree in London. Admissions Key was of incredible help.
                  Thanks to your experts and their editorial skills I was accepted to UCL, Cass and Imperial Business School! I would like to add that I contacted you 10 days before the deadline for Imperial and you still knew how to adjust your schedule to help me out.
                  Thank you so much...”</p>
                </div>
              </div>
            </div>
            <div id="t18" class="students-hover-box " style="display: none;">
              <div class="close" id="18" onclick="showToggle(this.id)"><i class="fas fa-times"></i></div>
              <div class="row">
                <div class="col-lg-6 col-md-6 detail">
                <h3 class="student-name">Jonas Attias</h3>
                  <h2>BS</h2>
                  <h3>Admitted to McGill University, Boston University and NYU</h3>
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <h4>Packages Selected</h4>
                      <ul class="list-school-low">
                        <li>Career& School Preparation</li>
                        <li>Application Preparation</li>
                      </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 pl-0">
                      <h4>Major</h4>
                      <ul class="list-school-low">
                        <li>Management</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 content">
                  <img class="mb-5" width="60px" src="<?php echo base_url('front/') ?>assets/images/quote-icon-color.png" />
                  <p style="font-size: 20px; max-width: 352px; margin-top: 10px; line-height: 26px;">
                    “When I graduated from the American school of Paris, I was confused because I wasn’t quite sure where I wanted to go next. That is when a friend recommended Admissions Key. I started with Career and School Preparation to define the career I wanted and the list of schools that would suit me best. My coach was extremely dedicated, and I was really impressed by her personalized advice, how she managed to canalize all my energy and helped me to define my goals. Then came the application preparation and again I was completely impressed by the dedication of my professor. I can easily sayAdmissions Key has greatly contributed to the success of my application!”</p>
                      <!-- <p style="font-size: 20px; max-width: 352px; margin-top: 10px; line-height: 26px;">
                    “My coach was extremely dedicated, and I was really impressed by her personalized advice, how she managed to canalize all my energy and helped me to define my goals. Then came the application preparation and again I was completely impressed by the dedication of my professor”</p> -->
                </div>
              </div>
            </div>

            <div id="t3" class="students-hover-box students" style="display: none;">
              <div class="close" id="3" onclick="showToggle(this.id)"><i class="fas fa-times"></i></div>
              <div class="row">
                <div class="col-lg-6 col-md-6 detail">
                  <h3 class="student-name">Johanna Loembet</h3>
                  <h2>MSc</h2>
                  <h3>Accepted to Imperial Business school, London, Cass and UCL</h3>
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <h4>Packages Selected</h4>
                      <ul class="list-school-low">
                        <li>Application Preparation</li>
                         <li>IELTS</li>
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
                  “I was looking for help in writing my various personal statements and IELTS preparation, as I wanted to apply for a master’s degree in London. Admissions Key was of incredible help.
                  Thanks to your experts and their editorial skills I was accepted to UCL, Cass and Imperial Business School! I would like to add that I contacted you 10 days before the deadline for Imperial and you still knew how to adjust your schedule to help me out.
                  Thank you so much...”</p>
                </div>
              </div>
            </div>

             <div id="t5" class="students-hover-box " style="display: none;">
              <div class="close" id="5" onclick="showToggle(this.id)"><i class="fas fa-times"></i></div>
              <div class="row">
                <div class="col-lg-6 col-md-6 detail">
                <h3 class="student-name">Yann Hoarau </h3>
                  <h2>EMBA</h2>
                  <h3>Accepted to Cass and ESCP </h3>
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <h4>Packages Selected</h4>
                      <ul class="list-school-low">
                        <li>School selection</li>
                        <li>Application preparation</li>
                        <li>Interview Preparation</li>
                      </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 pl-0">
                      <h4>Major</h4>
                      <ul class="list-school-low">
                        <li>Business</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 content">
                  <img class="mb-5" width="60px" src="<?php echo base_url('front/') ?>assets/images/quote-icon-color.png" />
                  <p style="font-size: 20px; max-width: 352px; margin-top: 10px; line-height: 26px;">
                  “I wanted an international school, oriented towards entrepreneurship. In the beginning I was thinking about HEC, but the career advisor at Admissions Key recommended me to apply to an EMBA program at ESCP and Cass, which were better fits for my profile… I was coached not only for the essays that were complex but also for the interview, which is an essential step in the process. On top of being accepted, I received a scholarship of 7,000 pounds!!!  Thank you so much for allowing me to seize this amazing opportunity of studying for an EMBA in London! I recommend Admissions Key strongly and without any reservation!”</p>
                </div>
              </div>
            </div> 




        </div><!-- .container -->
      </div>

      <div class="wrapper wrapper-content" id="wrapper-our-students-msc" style="display:none">
        <div class="container">
          <h2 class="animation-scroll animation-fade animated" style="opacity: 1;">Meet our students</h2>
          <div class="list-students hide-mobile">
            <div class="row row-0">
              <div class="col col-12 col-md-6" data-aos="fade-right" data-aos-duration="2000">
                <div class="illustration h-100 student-1">
                  <!-- <img src="<?= base_url('front/');?>assets/images/video-img.jpg"> -->
                   <img class="img_height2" src="<?= base_url('front/');?>assets/images/Renaud%20de%20Peretti.jpg"> 

                  <!-- <div class="description d-flex align-items-center justify-content-center">
                    <p>I wanted to do an MBA in one of the most competitive programs, and I was
                      definitely stressed about my admissions essays, as my major was in
                      Accounting and writing wasn't my strong point. I was so lucky&#8230;</p>
                  </div> -->
                  <a href="<?= base_url('our-students'); ?>" class="overlay"></a>
                </div><!-- .illustration -->
              </div><!-- .col -->
              <div class="col col-12 col-md-6" data-aos="fade-left" data-aos-duration="1000">

                <div class="migx_student position-relative">
                  <div class="row row-0 h-50">
                    <div class="col col-12 col-md-6">
                      <div class="illustration h-100">
                        <img src="<?= base_url('front/')?>assets/images/Polina.jpg" id="Lee_data_more" />
                        <!-- <div
                          class="description d-flex align-items-center justify-content-center">
                          <p>Admissions Key gives real meaning to an application and turns you
                            into an ideal candidate. Thanks to&#8230;</p>
                        </div> -->
                      </div><!-- .illustration -->
                    </div><!-- .col -->

                    <div class="col col-12 col-md-6">
                      <div class="content h-100 d-md-flex flex-md-column bg-orange student-2">
                        <h3>Polina Okhotnikova</h3>
                        <p class="flex-grow-1 text-white">“I was looking for help in writing my various personal statements..”</p>
                        <div class="more">
                          <a href="#t19" id="19" onclick="showToggle(this.id)"><span>Read
                              more</span></a>
                        </div><!-- .more -->
                      </div><!-- .content -->
                    </div><!-- .col -->
                  </div><!-- .row -->

                  <a href="#t19" id="19" onclick="showToggle(this.id)" class="overlay"></a>
                </div><!-- .migx_student -->
                <div class="migx_student position-relative student-3">
                  <div class="row row-0 h-50">
                    <div class="col col-12 col-md-6">
                      <div class="illustration h-100">
                        <img src="<?= base_url('front/')?>assets/images/Messaira.jpg" />
                        <!-- <div
                          class="description d-flex align-items-center justify-content-center">
                          <p>My coach knew perfectly well how to help me express my ideas and
                            to make my profile stand out. My personality&#8230;</p>
                        </div> -->
                      </div><!-- .illustration -->
                    </div><!-- .col -->

                    <div class="col col-12 col-md-6 order-md-first">
                      <div class="content h-100 d-md-flex flex-md-column bg-grey student-3">
                        <h3 id="renaudMore">Messaira</h3>
                        <p class="flex-grow-1">“I wanted an international school, oriented towards entrepreneurship”</p>
                        <div class="more">
                          <a href="#t21" id="21" onclick="showToggle(this.id)"><span>Read
                              more</span></a>
                        </div><!-- .more -->
                      </div><!-- .content -->
                    </div><!-- .col -->
                  </div><!-- .row -->

                  <a href="#t21" id="21" onclick="showToggle(this.id)" class="overlay"></a>
                </div><!-- .migx_student -->
              </div><!-- .col -->
            </div><!-- .row -->
            <h2 style="color: rgb(255, 153, 51); opacity: 1;" class="animation-scroll animation-fade animated">Renaud de Peretti
            </h2>
            <p class="animation-scroll animation-fade animated" style="opacity: 1;">“Admissions Key gives real meaning to an application and turns you into an ideal candidate. Thanks to you I was accepted into a very competitive program at UC Berkeley...”</p>
            <div class="more animation-scroll animation-fade animated" style="opacity: 1;">
               <a href="#t6" id="6" onclick="showToggle(this.id)"><span style="text-transform: uppercase;border-bottom: 2px solid #000;padding-bottom: 2px;line-height: 35px;">DISCOVER HIS STORY</span></a>

           
             <!--  <a href="<?= base_url('our-students'); ?>">
<span style="text-transform: uppercase;border-bottom: 2px solid #000;padding-bottom: 2px;line-height: 35px; font-size: 13PX;">DISCOVER HIS STORY</span></a> -->

<!-- read me div for reretti -->
<div id="t6" class="students-hover-box " style="display: none;">
              <div class="close" id="6" onclick="showToggle(this.id)"><i class="fas fa-times"></i></div>
              <div class="row">
                <div class="col-lg-6 col-md-6 detail">
                <h3 class="student-name">Renaud de Peretti</h3>
                  <h2>MS</h2>
                  <h3>Accepted to UC Berkeley</h3>
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
                    “ My essays are now catchy, perfectly fluid and logical thanks to the very high-quality editorial work and the perfectionism of the team of Admissions Key. Admissions Key gives real meaning to an application and turns you into an ideal candidate. Thanks to you I was accepted into a very competitive program at UC Berkeley...”</p>
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
             <div id="t21" class="students-hover-box" style="display: none;">
              <div class="close" id="21" onclick="showToggle(this.id)"><i class="fas fa-times"></i></div>
              <div class="row">
                <div class="col-lg-6 col-md-6 detail" id="10" onclick="showToggle(this.id)">
                <h3 class="student-name">Messaira H.</h3>
                  <h2>MS</h2>
                  <h3>Admitted to Columbia, NYU, University of Toronto</h3>
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <h4>Packages Selected</h4>
                      <ul class="list-school-low">
                        <li>Application Preparation</li>
                        <li>Interview Preparation</li>
                        <li>TOEFL</li>
                        <li>GRE</li>
                      </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 pl-0">
                      <h4>Major</h4>
                      <ul class="list-school-low">
                        <li>Economics</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 content">
                  <img class="mb-5" width="60px" src="<?php echo base_url('front/') ?>assets/images/quote-icon-color.png" />
                  <p style="font-size: 20px; max-width: 352px; margin-top: 10px; line-height: 26px;">
                    “Columbia university was my first-choice school. When I saw the Admissions Key was founded by a Columbia graduate, I decided to contact them, and I was so lucky I did! At Admissions Key, the coaches can really tell your story in a way you would never do it yourself! As a child of immigrant parents who is the first of her generation to get higher education, I was impressed how personal and true my story sounded. Every word of it was vivid and it made me sound coherent, clear, powerful, and authentic. I learned a lot about writing, about my strengths and weaknesses, but also about what I really wanted to do in life. It was a great experience of self-reflection and self-improvement.”</p>
                </div>
              </div>
            </div>

            </div><!-- .more -->
              <p><a href="<?php echo base_url('our-students') ?>" class="btn text-white mt-4 hover-dark">Meet our students</a></p>
            <!-- <p><a href="#" class="btn text-white mt-4 hover-dark">Meet our students</a></p> -->
          </div><!-- .list-students -->
          <div class="list-booking show-mobile">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="help-box">
                         <!--    <img src="<?= base_url('front/') ?>assets/images/video-img-mobile.jpg"
                                alt="" /> -->
                                   <img src="<?= base_url('front/') ?>assets/images/Renaud%20de%20Peretti.jpg"
                                alt="" />
                            <div class="help-content">
                                <h3>Renaud de Peretti</h3>
                              <!--   <p>Lee is a graduate of Stanford thanks to Admissions Key.</p> -->
                                <p>“Admissions Key gives real meaning to an application and turns you into an ideal candidate. Thanks
to you I was accepted into a very competitive program at UC Berkeley...”</p>
                                <a href="<?php echo base_url('career-and-school-selection')?>" title="Select package"
                                    class="btn-learnMore">Learn more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="help-box">
                            <img
                                src="<?= base_url('front/') ?>assets/images/Yann Hoarau.jpg" />
                            <div class="help-content">
                                <h3>Yann Hoarau</h3>
                                <p>“I wanted an international school, oriented towards entrepreneurship”</p>
                                <a href="<?php echo base_url('our-students') ?>" title="Select package"
                                    class="btn-learnMore">Learn more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="help-box">
                            <img
                                src="<?= base_url('front/') ?>assets/images/Johanna_Loembet.jpg" />
                            <div class="help-content">
                                <h3>Johanna Loembet</h3>
                                <p>“I was looking for help in writing my various personal statements..”</p>
                                <a href="<?php echo base_url('our-students') ?>" title="Select package"
                                    class="btn-learnMore">Learn more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .list-booking -->
        </div><!-- .container -->
      </div>
      <div class="wrapper wrapper-content" id="wrapper-our-students-mba" style="display:none">
        <div class="container">
          <h2 class="animation-scroll animation-fade animated" style="opacity: 1;">Meet our students</h2>
          <div class="list-students hide-mobile">
            <div class="row row-0">
              <div class="col col-12 col-md-6" data-aos="fade-right" data-aos-duration="2000">
                <div class="illustration h-100 student-1">
                  <img class="img_height2" src="<?= base_url('front/');?>assets/images/Olga%20Hibbard.jpg">
                  <!-- <div class="description d-flex align-items-center justify-content-center">
                    <p>I wanted to do an MBA in one of the most competitive programs, and I was
                      definitely stressed about my admissions essays, as my major was in
                      Accounting and writing wasn't my strong point. I was so lucky&#8230;</p>
                  </div> -->
                  <a href="<?= base_url('our-students'); ?>" class="overlay"></a>
                </div><!-- .illustration -->
              </div><!-- .col -->
              <div class="col col-12 col-md-6" data-aos="fade-left" data-aos-duration="1000">

                <div class="migx_student position-relative">
                  <div class="row row-0 h-50">
                    <div class="col col-12 col-md-6">
                      <div class="illustration h-100">
                        <img src="<?= base_url('front/')?>assets/images/Johanna_Loembet.jpg" id="Lee_data_more" />   
                        <!-- <div
                          class="description d-flex align-items-center justify-content-center">
                          <p>Admissions Key gives real meaning to an application and turns you
                            into an ideal candidate. Thanks to&#8230;</p>
                        </div> -->
                      </div><!-- .illustration -->
                    </div><!-- .col -->

                    <div class="col col-12 col-md-6">
                      <div class="content h-100 d-md-flex flex-md-column bg-orange student-2">
                        <h3>Johanna Loembet</h3>
                        <p class="flex-grow-1 text-white">“I was looking for help in writing my various personal statements..”</p>
                        <div class="more">
                          <a href="#t33" id="33" onclick="showToggle(this.id)" ><span>Read
                              more</span></a>
                        </div><!-- .more -->
                      </div><!-- .content -->
                    </div><!-- .col -->
                  </div><!-- .row -->

                  <a href="#t33" id="33" onclick="showToggle(this.id)" class="overlay"></a>
                </div><!-- .migx_student -->
                <div class="migx_student position-relative student-3">
                  <div class="row row-0 h-50">
                    <div class="col col-12 col-md-6">
                      <div class="illustration h-100">
                        <img src="<?= base_url('front/')?>assets/images/Yann Hoarau.jpg" />
                        <!-- <div
                          class="description d-flex align-items-center justify-content-center">
                          <p>My coach knew perfectly well how to help me express my ideas and
                            to make my profile stand out. My personality&#8230;</p>
                        </div> -->
                      </div><!-- .illustration -->
                    </div><!-- .col -->

                    <div class="col col-12 col-md-6 order-md-first">
                      <div class="content h-100 d-md-flex flex-md-column bg-grey student-3">
                        <h3 id="renaudMore">Yann Hoarau</h3>
                        <p class="flex-grow-1">“I wanted an international school, oriented towards entrepreneurship”</p>
                        <div class="more">
                            <a href="#t4" id="4" onclick="showToggle(this.id)" ><span>Read
                              more</span></a>
                        </div><!-- .more -->
                      </div><!-- .content -->
                    </div><!-- .col -->
                  </div><!-- .row -->

                  <a href="#t4" id="4" onclick="showToggle(this.id)" class="overlay"></a>
                </div><!-- .migx_student -->
              </div><!-- .col -->
            </div><!-- .row -->
            <h2 style="color: rgb(255, 153, 51); opacity: 1;" class="animation-scroll animation-fade animated">Olga Hibbard
            </h2>
            <p class="animation-scroll animation-fade animated" style="opacity: 1;">“I wanted to do an MBA in one of the most competitive programs, and I was definitely stressed about my admissions essays, as my major was in Accounting and writing wasn't my strong point. I was so lucky to find Admissions Key...”</p>
            <div class="more animation-scroll animation-fade animated" style="opacity: 1;">
              <a href="#t8" id="8" onclick="showToggle(this.id)"><span style="text-transform: uppercase;border-bottom: 2px solid #000;padding-bottom: 2px;line-height: 35px;">DISCOVER HER STORY</span></a>

              <div id="t33" class="students-hover-box students" style="display: none;">
              <div class="close" id="33" onclick="showToggle(this.id)"><i class="fas fa-times"></i></div>
              <div class="row">
                <div class="col-lg-6 col-md-6 detail">
                  <h3 class="student-name">Johanna Loembet</h3>
                  <h2>MSc</h2>
                  <h3>Accepted to Imperial Business school, London, Cass and UCL</h3>
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <h4>Packages Selected</h4>
                      <ul class="list-school-low">
                        <li>Application Preparation</li>
                         <li>IELTS</li>
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
                  “I was looking for help in writing my various personal statements and IELTS preparation, as I wanted to apply for a master’s degree in London. Admissions Key was of incredible help.
                  Thanks to your experts and their editorial skills I was accepted to UCL, Cass and Imperial Business School! I would like to add that I contacted you 10 days before the deadline for Imperial and you still knew how to adjust your schedule to help me out.
                  Thank you so much...”</p>
                </div>
              </div>
            </div>
     <div id="t3" class="students-hover-box students" style="display: none;">
              <div class="close" id="3" onclick="showToggle(this.id)"><i class="fas fa-times"></i></div>
              <div class="row">
                <div class="col-lg-6 col-md-6 detail">
                  <h3 class="student-name">Johanna Loembet</h3>
                  <h2>MSc</h2>
                  <h3>Accepted to Imperial Business school, London, Cass and UCL</h3>
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <h4>Packages Selected</h4>
                      <ul class="list-school-low">
                        <li>Application Preparation</li>
                         <li>IELTS</li>
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
                  “I was looking for help in writing my various personal statements and IELTS preparation, as I wanted to apply for a master’s degree in London. Admissions Key was of incredible help.
                  Thanks to your experts and their editorial skills I was accepted to UCL, Cass and Imperial Business School! I would like to add that I contacted you 10 days before the deadline for Imperial and you still knew how to adjust your schedule to help me out.
                  Thank you so much...”</p>
                </div>
              </div>
            </div>
                       <div id="t4" class="students-hover-box " style="display: none;">
              <div class="close" id="4" onclick="showToggle(this.id)"><i class="fas fa-times"></i></div>
              <div class="row">
                <div class="col-lg-6 col-md-6 detail">
                <h3 class="student-name">Yann Hoarau </h3>
                  <h2>EMBA</h2>
                  <h3>Accepted to Cass and ESCP </h3>
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <h4>Packages Selected</h4>
                      <ul class="list-school-low">
                        <li>School selection</li>
                        <li>Application preparation</li>
                        <li>Interview Preparation</li>
                      </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 pl-0">
                      <h4>Major</h4>
                      <ul class="list-school-low">
                        <li>Business</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 content">
                  <img class="mb-5" width="60px" src="<?php echo base_url('front/') ?>assets/images/quote-icon-color.png" />
                  <p style="font-size: 20px; max-width: 352px; margin-top: 10px; line-height: 26px;">
                  “I wanted an international school, oriented towards entrepreneurship. In the beginning I was thinking about HEC, but the career advisor at Admissions Key recommended me to apply to an EMBA program at ESCP and Cass, which were better fits for my profile… I was coached not only for the essays that were complex but also for the interview, which is an essential step in the process. On top of being accepted, I received a scholarship of 7,000 pounds!!!  Thank you so much for allowing me to seize this amazing opportunity of studying for an EMBA in London! I recommend Admissions Key strongly and without any reservation!”</p>
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

            </div><!-- .more -->
               <p><a href="<?php echo base_url('our-students') ?>" class="btn text-white mt-4 hover-dark">Meet our students</a></p>
            <!-- <p><a href="#" class="btn text-white mt-4 hover-dark">Meet our students</a></p> -->
            <!-- read me div for olgA-->
    
            <div id="t2" class="students-hover-box students" style="display: none;">
              <div class="close" id="2" onclick="showToggle(this.id)"><i class="fas fa-times"></i></div>
              <div class="row">
                <div class="col-lg-6 col-md-6 detail">
                    <h3 class="student-name">Wissem Addoun</h3>
                  <h2>MS</h2>
                  <h3>Accepted to Law and Management</h3>
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <h4>Packages Selected</h4>
                      <ul class="list-school-low">
                        <li>Career Preparation</li>
                        <li>Application Preparation</li>
                      </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 pl-0">
                      <h4>Major</h4>
                      <ul class="list-school-low">
                        <li>Law and Management</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 content"> <!-- specifically -->
                  <img class="mb-5" width="60px" src="<?php echo base_url('front/') ?>assets/images/quote-icon-color.png" />
                  <p style="font-size: 20px; max-width: 352px; margin-top: 10px; line-height: 26px;">
                    “With Admissions Key, I found a perfectly  adapted coaching program. My coach knew perfectly well how to help me express my ideas and to make my profile stand out. My personality really shined through and my final application looked impeccable...”</p>
                </div>
              </div>
            </div>



            
            <!-- read me div for olgA end -->

          </div><!-- .list-students -->
          <div class="list-booking show-mobile">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="help-box">
                            <img src="<?= base_url('front/') ?>assets/images/video-img-mobile.jpg"
                                alt="" />
                            <div class="help-content">
                                <h3>Lee Jing</h3>
                                <p>Lee is a graduate of Stanford thanks to Admissions Key.</p>
                                <a href="<?php echo base_url('career-and-school-selection')?>" title="Select package"
                                    class="btn-learnMore">Learn more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="help-box">
                            <img
                                src="<?= base_url('front/') ?>assets/images/Yann Hoarau.jpg" />
                            <div class="help-content">
                                <h3>Yann Hoarau</h3>
                                <p>“I wanted an international school, oriented towards entrepreneurship”</p>
                                <a href="<?php echo base_url('our-students') ?>" title="Select package"
                                    class="btn-learnMore">Learn more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="help-box">
                            <img
                                src="<?= base_url('front/') ?>assets/images/Johanna_Loembet.jpg" />
                            <div class="help-content">
                                <h3>Johanna Loembet</h3>
                                <p>“I was looking for help in writing my various personal statements..”</p>
                                <a href="<?php echo base_url('our-students') ?>" title="Select package"
                                    class="btn-learnMore">Learn more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .list-booking -->
        </div><!-- .container -->
      </div>
      <div class="wrapper wrapper-content" id="wrapper-our-students-phd" style="display:none">
        <div class="container">
          <h2 class="animation-scroll animation-fade animated" style="opacity: 1;">Meet our students</h2>
          <div class="list-students hide-mobile">
            <div class="row row-0">
              <div class="col col-12 col-md-6" data-aos="fade-right" data-aos-duration="2000">
                <div class="illustration h-100 student-1">
                  <img src="<?= base_url('front/');?>assets/images/Victor.jpg">
                  <!-- <div class="description d-flex align-items-center justify-content-center">
                    <p>I wanted to do an MBA in one of the most competitive programs, and I was
                      definitely stressed about my admissions essays, as my major was in
                      Accounting and writing wasn't my strong point. I was so lucky&#8230;</p>
                  </div> -->
                  <a href="<?= base_url('our-students'); ?>" class="overlay"></a>
                </div><!-- .illustration -->
              </div><!-- .col -->
              <div class="col col-12 col-md-6" data-aos="fade-left" data-aos-duration="1000">

                <div class="migx_student position-relative">
                  <div class="row row-0 h-50">
                    <div class="col col-12 col-md-6">
                      <div class="illustration h-100">
                        <img src="<?= base_url('front/')?>assets/images/Johanna_Loembet.jpg" id="Lee_data_more" />
                        <!-- <div
                          class="description d-flex align-items-center justify-content-center">
                          <p>Admissions Key gives real meaning to an application and turns you
                            into an ideal candidate. Thanks to&#8230;</p>
                        </div> -->
                      </div><!-- .illustration -->
                    </div><!-- .col -->

                    <div class="col col-12 col-md-6">
                      <div class="content h-100 d-md-flex flex-md-column bg-orange student-2">
                        <h3>Johanna Loembet</h3>
                        <p class="flex-grow-1 text-white">“I was looking for help in writing my various personal statements...”</p>
                        <div class="more">
                          <a href="t11" id="11" onclick="showToggle(this.id)"><span>Read
                              more</span></a>
                        </div><!-- .more -->
                      </div><!-- .content -->
                    </div><!-- .col -->
                  </div><!-- .row -->

                  <a href="#t11" id="11" onclick="showToggle(this.id)" class="overlay"></a>
                </div><!-- .migx_student -->
                <div class="migx_student position-relative student-3">
                  <div class="row row-0 h-50">
                    <div class="col col-12 col-md-6">
                      <div class="illustration h-100">
                        <img src="<?= base_url('front/')?>assets/images/Yann Hoarau.jpg" />
                        <!-- <div
                          class="description d-flex align-items-center justify-content-center">
                          <p>My coach knew perfectly well how to help me express my ideas and
                            to make my profile stand out. My personality&#8230;</p>
                        </div> -->
                      </div><!-- .illustration -->
                    </div><!-- .col -->

                    <div class="col col-12 col-md-6 order-md-first">
                      <div class="content h-100 d-md-flex flex-md-column bg-grey student-3">
                        <h3 id="renaudMore">Yann Hoarau</h3>
                        <p class="flex-grow-1">“I wanted an international school, oriented towards entrepreneurship...”</p>
                        <div class="more">
                          <a href="#t10" id="10" onclick="showToggle(this.id)"><span>Read
                              more</span></a>
                        </div><!-- .more -->
                      </div><!-- .content -->
                    </div><!-- .col -->
                  </div><!-- .row -->

                  <a href="#t10" id="10" onclick="showToggle(this.id)" class="overlay"></a>
                </div><!-- .migx_student -->
              </div><!-- .col -->
            </div><!-- .row -->
            <h2 style="color: rgb(255, 153, 51); opacity: 1;" class="animation-scroll animation-fade animated">Victor D 
            </h2>
            <p class="animation-scroll animation-fade animated" style="opacity: 1;">“The Global MiM program at LBS that I was applying to is one of the most competitive and I wanted to have all chances to succeed, this is why I contacted Admissions Key. From the very first moment I felt the high standards and the dedication of the team. It was extremely pleasant...”</p>
            <div class="more animation-scroll animation-fade animated" style="opacity: 1;">
              <a href="#t20" id="20" onclick="showToggle(this.id)"><span style="text-transform: uppercase;border-bottom: 2px solid #000;padding-bottom: 2px;line-height: 35px;">DISCOVER HIS STORY</span></a>
            </div><!-- .more -->
             <p><a href="<?php echo base_url('our-students') ?>" class="btn text-white mt-4 hover-dark">Meet our students</a></p>
            <!-- <p><a href="#" class="btn text-white mt-4 hover-dark">Meet our students</a></p> -->

       <!-- read me for victor d  -->
       <div id="t20" class="students-hover-box" style="display: none;">
              <div class="close" id="20" onclick="showToggle(this.id)"><i class="fas fa-times"></i></div>
              <div class="row">
                <div class="col-lg-6 col-md-6 detail">
                <h3 class="student-name">Victor D</h3>
                  <h2>MS</h2>
                  <h3>Admitted to LBS</h3>
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <h4>Packages Selected</h4>
                      <ul class="list-school-low">
                        <li>Application Preparation</li>
                      </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 pl-0">
                      <h4>Major</h4>
                      <ul class="list-school-low">
                        <li>Management</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 content">
                  <img class="mb-5" width="60px" src="<?php echo base_url('front/') ?>assets/images/quote-icon-color.png" />
                  <p style="font-size: 20px; max-width: 352px; margin-top: 10px; line-height: 26px;">
                    “The Global MiM program at LBS that I was applying to is one of the most competitive and I wanted to have all chances to succeed, this is why I contacted Admissions Key. From the very first moment I felt the high standards and the dedication of the team. It was extremely pleasant. With my coach we came up with a strategy that really paid off and allowed me to demonstrate the best I had to offer. I was impressed by the result and most importantly I got in! ”</p>
                </div>
              </div>
            </div>
       <div id="t10" class="students-hover-box " style="display: none;">
              <div class="close" id="10" onclick="showToggle(this.id)"><i class="fas fa-times"></i></div>
              <div class="row">
                <div class="col-lg-6 col-md-6 detail">
                <h3 class="student-name">Yann Hoarau </h3>
                  <h2>EMBA</h2>
                  <h3>Accepted to Cass and ESCP </h3>
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <h4>Packages Selected</h4>
                      <ul class="list-school-low">
                        <li>School selection</li>
                        <li>Application preparation</li>
                        <li>Interview Preparation</li>
                      </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 pl-0">
                      <h4>Major</h4>
                      <ul class="list-school-low">
                        <li>Business</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 content">
                  <img class="mb-5" width="60px" src="<?php echo base_url('front/') ?>assets/images/quote-icon-color.png" />
                  <p style="font-size: 20px; max-width: 352px; margin-top: 10px; line-height: 26px;">
                  “I wanted an international school, oriented towards entrepreneurship. In the beginning I was thinking about HEC, but the career advisor at Admissions Key recommended me to apply to an EMBA program at ESCP and Cass, which were better fits for my profile… I was coached not only for the essays that were complex but also for the interview, which is an essential step in the process. On top of being accepted, I received a scholarship of 7,000 pounds!!!  Thank you so much for allowing me to seize this amazing opportunity of studying for an EMBA in London! I recommend Admissions Key strongly and without any reservation!”</p>
                </div>
              </div>
            </div>
                  <div id="t11" class="students-hover-box students" style="display: none;">
              <div class="close" id="11" onclick="showToggle(this.id)"><i class="fas fa-times"></i></div>
              <div class="row">
                <div class="col-lg-6 col-md-6 detail">
                  <h3 class="student-name">Johanna Loembet</h3>
                  <h2>MSc</h2>
                  <h3>Accepted to Imperial Business school, London, Cass and UCL</h3>
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <h4>Packages Selected</h4>
                      <ul class="list-school-low">
                        <li>Application Preparation</li>
                         <li>IELTS</li>
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
                  “I was looking for help in writing my various personal statements and IELTS preparation, as I wanted to apply for a master’s degree in London. Admissions Key was of incredible help.
                  Thanks to your experts and their editorial skills I was accepted to UCL, Cass and Imperial Business School! I would like to add that I contacted you 10 days before the deadline for Imperial and you still knew how to adjust your schedule to help me out.
                  Thank you so much...”</p>
                </div>
              </div>
            </div>
            </div>


          </div><!-- .list-students -->
          <div class="list-booking show-mobile">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="help-box">
                            <img src="<?= base_url('front/') ?>assets/images/video-img-mobile.jpg"
                                alt="" />
                            <div class="help-content">
                                <h3>Lee Jing</h3>
                                <p>Lee is a graduate of Stanford thanks to Admissions Key.</p>
                                <a href="<?php echo base_url('career-and-school-selection')?>" title="Select package"
                                    class="btn-learnMore">Learn more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="help-box">
                            <img
                                src="<?= base_url('front/') ?>assets/images/Yann Hoarau.jpg" />
                            <div class="help-content">
                                <h3>Yann Hoarau</h3>
                                <p>“I wanted an international school, oriented towards entrepreneurship”</p>
                                <a href="<?php echo base_url('our-students') ?>" title="Select package"
                                    class="btn-learnMore">Learn more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="help-box">
                            <img
                                src="<?= base_url('front/') ?>assets/images/Johanna_Loembet.jpg" />
                            <div class="help-content">
                                <h3>Johanna Loembet</h3>
                                <p>“I was looking for help in writing my various personal statements..”</p>
                                <a href="<?php echo base_url('our-students') ?>" title="Select package"
                                    class="btn-learnMore">Learn more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .list-booking -->
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

     function showToggle(clicked) {
        if (clicked==1) 
        {
            $('#t1').css('display','block');
              window.scrollBy(500,400);
                $('#t1').click(function(){
                $('#t1').css('display','none');
              window.scrollTo(500,3050);

            });
        }
        if (clicked==2) 
        {
            $('#t2').css('display','block');
              window.scrollBy(500,400);
                $('#t2').click(function(){
                $('#t2').css('display','none');
              window.scrollTo(500,3050);

            });
        }

       if (clicked==3) 
        {
            $('#t3').css('display','block');
              window.scrollBy(500,400);
                $('#t3').click(function(){
                $('#t3').css('display','none');
              window.scrollTo(500,3050);

            });
        }

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

         if (clicked==5) 
        {
            $('#t5').css('display','block');
             $('#t8').css('display','none');
            $('#t7').css('display','none');
              window.scrollBy(500,400);
                $('#t5').click(function(){
                $('#t5').css('display','none');
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
         if (clicked==9) 
        {
            
            $('#t9').css('display','block');
            $('#t4').css('display','none');
            $('#t7').css('display','none');
             window.scrollBy(500, 400);
            $('#t9').click(function(){
                $('#t9').css('display','none');
             window.scrollTo(500,3050);
            });
        }
         if (clicked==10) 
        {
            
            $('#t10').css('display','block');
        
             window.scrollBy(500, 400);
            $('#t10').click(function(){
                $('#t10').css('display','none');
             window.scrollTo(500,3050);
            });
        }

         if (clicked==11) 
        {
            
            $('#t11').css('display','block');
        
             window.scrollBy(500, 400);
            $('#t11').click(function(){
                $('#t11').css('display','none');
             window.scrollTo(500,3050);
            });
        }


         if (clicked==19) 
        {
            
            $('#t19').css('display','block');
            $('#t4').css('display','none');
            $('#t7').css('display','none');
             window.scrollBy(500, 1000);
            $('#t19').click(function(){
                $('#t19').css('display','none');
             window.scrollTo(500,2000);
            });
        }
        
           if (clicked==21) 
        {
            $('#t21').css('display','block');
              window.scrollBy(500,400);
                $('#t21').click(function(){
                $('#t21').css('display','none');
              window.scrollTo(500,3050);

            });
        }  

        if (clicked==18) 
        {
            $('#t18').css('display','block');
              window.scrollBy(500,400);
                $('#t18').click(function(){
                $('#t18').css('display','none');
              window.scrollTo(500,3050);

            });
        }
         if (clicked==20) 
        {
            $('#t20').css('display','block');
              window.scrollBy(500,400);
                $('#t20').click(function(){
                $('#t20').css('display','none');
              window.scrollTo(500,2000);

            });
        }
          if (clicked==6) 
        {
            $('#t6').css('display','block');
              window.scrollBy(500,400);
                $('#t6').click(function(){
                $('#t6').css('display','none');
              window.scrollTo(500,1000);

            });
        }
           if (clicked==8) 
        {
            $('#t8').css('display','block');
              window.scrollBy(500,400);
                $('#t8').click(function(){
                $('#t8').css('display','none');
              window.scrollTo(500,1000);

            });
        }
            if (clicked==33) 
        {
            $('#t33').css('display','block');
              window.scrollBy(500,400);
                $('#t33').click(function(){
                $('#t33').css('display','none');
              window.scrollTo(500,1000);

            });
        }
         
    }
</script>