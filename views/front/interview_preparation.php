<style type="text/css">
  .bx-default-pager {
    display: none;
}
</style>

    <div class="wrapper wrapper-intro">
      <div class="slider">
        <div class=""> <!-- bxslider -->
          <div class="migx_slider"
          style="background-image: url('<?= base_url('front/');?>assets/image-cache/images/static/banner-Interview-preparation.jpeg');">
            <div class="container h-100 d-flex flex-column justify-content-end">
              <div class="content" data-aos="fade-up">
                <h1 class="h2">Interview Preparation</h1>
                <p>"You will never get a second chance to make the first impression. We help you make sure it is the right one."</p>
              </div><!-- .content -->
            </div><!-- .container -->
          </div><!-- .migx_slider -->
        </div>
      </div>
    </div>

    <div id="maincontent" role="main">
      <div class="wrapper wrapper-content" id="top-content">
        <div class="container" data-aos="fade-up">
          <h2>Why consult us?</h2>
          <p style="max-width: 772px;">There is a common belief that interviews are about answering questions. In reality, however, good interviews are about knowing what it is that you want to say in advance and then delivering it with precision, coherence and confidence. We focus on typical questions and answers, manage common pitfalls, work on stress reduction, confidence, and performance techniques to make sure your interview goes smoothly and reveals the best of you.</p>
        </div>
      </div>
      <div class="wrapper wrapper-content" id="why-consult-us">
        <div class="container">
          <div class="inner-box">
            <h2>What do we offer?</h2>
            <p class="mb-5"><ul>
              <li>Communication experts and admissions counselors from top-tier schools</li>
              <li>Extensive 2, 4 or 6-hour interview preparation sessions</li>
              <li>A thorough analysis of your educational background, potential, strengths, and weaknesses</li>
              <li>Essential message development</li>
              <li>Typical questions and pitfalls</li>
              <li>Performance and body language</li>
              <li>Accent reduction (if needed)</li>
              <li>An intense mock drill with our communication experts</li>
            </ul>
            <p class="mt-5"><a href="<?= base_url('free-consultation-booking')?>" class="btn bg-white" title="Book your free consultation">Book your free
                consultation</a></p>
          </div>
        </div>
      </div>

      <div class="wrapper wrapper-content" id="wrapper-contenus">
        <div class="container">
        <div class="owl-carousel owl-theme migx_contenu" id="interview-carousel">
            <div class="item">
            <div class="slider-inner-box">
                              <div class="surtitre">Step 1</div>
                              <h3>Discovery </h3>
                              <p>In this stage you talk, and we listen, as we need to get an in-depth perception of your goals and experiences, strengths and weaknesses.</p>
                              <div class="illustration"><img src="<?= base_url('front/') ?>assets/images/pictos/picto-2.png" /></div>
                            </div>
            </div>
            <div class="item">
            <div class="slider-inner-box">
                      <div class="surtitre">Step 2</div>
                      <h3>Essential Message</h3>
                      <p>We help shape your essential message that will give your interview direction and will make throwing you off course virtually impossible.</p>
                      <div class="illustration"><img src="<?= base_url('front/') ?>assets/images/pictos/essential-message.png" /></div>
                    </div>
            </div>
            <div class="item">
            <div class="slider-inner-box">
                      <div class="surtitre">Step 3</div>
                      <h3>Q&A</h3>
                      <p>Next, we go over typical interview questions and handpick your experiences to ensure coherent and compelling answers.</p>
                      <div class="illustration"><img src="<?= base_url('front/') ?>assets/images/pictos/q-a.png" /></div>
                    </div>
            </div>
            <div class="item">
            <div class="slider-inner-box">
                      <div class="surtitre">Step 4</div>
                      <h3>Drill </h3>
                      <p>Practice makes perfect. Intense mock-drill throws you off the deep end, as our admissions experts address the most challenging and tricky questions.</p>
                      <div class="illustration"><img src="<?= base_url('front/') ?>assets/images/pictos/drill-1.png" /></div>
                            </div>
            </div>
            <div class="item">
              <div class="slider-inner-box">
                      <div class="surtitre">Step 5</div>
                      <h3>Voice power</h3>
                      <p>In this part our experts address your intonation, accent, and volume to ensure conviction and fluency of expression.</p>
                      <div class="illustration"><img src="<?= base_url('front/') ?>assets/images/pictos/voicepower.png" /></div>
                    </div>
            </div>
  
            <div class="item">
            <div class="slider-inner-box">
                      <div class="surtitre">Step 6</div>
                      <h3>Performance</h3>
                      <p>In our performance section our coaches give you thorough advice on your body language, and work with you to ensure confidence and stress reduction.</p>
                      <div class="illustration"><img src="<?= base_url('front/') ?>assets/images/pictos/performance.png" /></div>
                    </div>
         </div>
                  <div class="item">
            <div class="slider-inner-box">
                      <div class="surtitre">Step 7</div>
                      <h3>Follow up & quality control</h3>
                      <p>We never abandon our students are extremely proud of our students’ accomplishments and careers. That is why we always follow up on our students to ensure a 100-percent satisfaction with our services.</p>
                      <div class="illustration"><img src="<?= base_url('front/') ?>assets/images/pictos/picto-10.png" /></div>
                    </div>
         </div>
  
</div>

        </div>
      </div>
      <div class="wrapper wrapper-content" id="wrapper-our-mba-emba-packages">
    <div class="container" id="Ourpackages">
      <h2 class="mb-5">Our packages</h2>
      <div class="row row-md-20">
        <?php foreach($data as $row){?>
        <div class="col-lg-4 col-md-4 col-sm-12" data-aos="fade-up" data-aos-duration="1000">
          <div class="packages-box packages1">
            <h3>
              <?php echo $row[ 'our_packages_name']?>
            </h3>
            <p>Includes:</p>
            <ul class="our-packages-list">
              <?php $includ=explode( '_',$row[ 'our_packages_Includes']); for($i=0;$i<count($includ);$i++){ echo "<li>".$includ[$i]. "</li>"; }?>
            </ul>
            <div class="prices-box">Prices: <span>€ <?php echo $row[ 'our_packages_price']?></span>
            </div>
            <a href="<?php echo base_url('home/interview_preparation_booking/').$row['our_packages_id'] ?>" title="Book your  package " class="btn-learnMore">Book your package
              <i class="fas fa-chevron-right"></i>
            </a>
          </div>
        </div>
        <!-- .col -->
        <?php } ?>
      </div>
      <!-- .row -->
    </div>
    <!-- .container -->
  </div>


      <!-- .wrapper -->

      <div class="wrapper wrapper-content" id="wrapper-option-choose">
        <div class="container">
          <h2 class="animation-scroll animation-fade animated" style="opacity: 1;">Not sure which option to choose?</h2>
          <p class="mb-5 animation-scroll animation-fade animated" style="opacity: 1;">We guide you to the right choice.
          </p>
          <p class="animation-scroll animation-fade animated" style="opacity: 1;"><a href="<?= base_url('free-consultation-booking')?>"
              title="Book your free consultation" class="btn bg-white">Book your free consultation</a></p>
        </div><!-- .container -->
      </div>

      <div class="wrapper wrapper-content" id="wrapper-selection-experts">
        <div class="container">
          <h2>Our Communication Experts</h2>
          <p style="max-width: 594px;">Our communication experts feature experienced media training specialists and admissions consultants. Thanks to their extensive expertise they prepare you for the most competitive and challenging interviews.</p>
          <div class="row">
          <?php 
                    foreach($Our_Communication_Experts as $Our_Communication_Experts_data)
                    {
                      ?>
                     
                        <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="experts-box">
                          <a href="<?php echo base_url('profile/').$Our_Communication_Experts_data['professor_our_experts_id']?>" class="link-learnMore" title=""><img src="<?php echo base_url('assets/img/').$Our_Communication_Experts_data["profile"] ?>" width="100%" /></a>
                            <h2><a href="<?php echo base_url('profile/').$Our_Communication_Experts_data['professor_our_experts_id']?>" class="name-expert" title=""><?= $Our_Communication_Experts_data['name'] ?></a></h2>
                            <?php
                              $count =count(explode('_',$Our_Communication_Experts_data['professor_about_our_expert']));
                              $aboutList =explode('_',$Our_Communication_Experts_data['professor_about_our_expert']);
                              for($i=0; $i<$count; $i++)
                              {
                                echo "<p>".$aboutList[$i]."</p>";
                              }
                            ?>
                            <a href="<?php echo base_url('profile/').$Our_Communication_Experts_data['professor_our_experts_id']?>" class="link-learnMore" title="Learn More">Learn More</a>
                          </div>
                       </div>
                      
                     <?php  } 
             ?>
            <!-- <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?= base_url('profile') ?>" class="link-learnMore" title=""><img src="<?= base_url('front/') ?>assets/images/experts-img1.jpg" width="100%"/></a>
                <h2><a href="<?= base_url('profile') ?>" class="" title="">Lynda Johns</a></h2> 
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will evaluate your aspirations. </p>
                <p class="mb-0">Expertise includes: Test  preparation, Interview preparation, School Selection</p>
                <a href="<?= base_url('profile') ?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?= base_url('profile') ?>" class="link-learnMore" title=""><img src="<?= base_url('front/') ?>assets/images/experts-img2.jpg" width="100%"/></a>
                <h2><a href="<?= base_url('profile') ?>" class="" title="">Jamie Gould</a></h2>
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will evaluate your aspirations.</p>
                <p class="mb-0">Expertise includes: Test preparation, Interview preparation, School Selection</p>
                <a href="<?= base_url('profile') ?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?= base_url('profile') ?>" class="link-learnMore" title=""><img src="<?= base_url('front/') ?>assets/images/experts-img1.jpg" width="100%"/></a>
                <h2><a href="<?= base_url('profile') ?>" class="" title="">Mark  Smith</a></h2>
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will evaluate your aspirations. </p>
                <p class="mb-0">Expertise includes: Test preparation, Interview preparation, School Selection</p>
                <a href="<?= base_url('profile') ?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="experts-box">
              <a href="<?= base_url('profile') ?>" class="link-learnMore" title=""> <img src="<?= base_url('front/') ?>assets/images/experts-img2.jpg" width="100%"/></a>
                <h2><a href="<?= base_url('profile') ?>" class="" title="">Marya Collins</a></h2>
                <p>If you are feeling overwhelmed with different schools and career paths, our career experts will evaluate your aspirations.</p>
                <p class="mb-0">Expertise includes: Test preparation, Interview preparation, School Selection</p>
                <a href="<?= base_url('profile') ?>" class="link-learnMore" title="Learn More">Learn More</a>
              </div>
            </div> -->
          </div>
        </div>
      </div>

      <div class="wrapper wrapper-content" id="wrapper-our-students">
        <div class="container">
          <h2 class="animation-scroll animation-fade animated" style="opacity: 1;">Meet our students</h2>
          <div class="list-students hide-mobile">
            <div class="row row-0">
              <div class="col col-12 col-md-6" data-aos="fade-right" data-aos-duration="2000">
                <div class="illustration h-100 student-1">
                  <img src="<?= base_url('front/') ?>assets/images/Messaira.jpg">
                  <!-- <div class="description d-flex align-items-center justify-content-center">
                    <p>I wanted to do an MBA in one of the most competitive programs, and I was
                      definitely stressed about my admissions essays, as my major was in
                      Accounting and writing wasn't my strong point. I was so lucky&#8230;</p>
                  </div> -->
                  <a href="<?php echo base_url('our-students/21') ?>" class="overlay"></a>
                </div><!-- .illustration -->
              </div><!-- .col -->
              <div class="col col-12 col-md-6" data-aos="fade-left" data-aos-duration="1000">

                <div class="migx_student position-relative">
                  <div class="row row-0 h-50">
                    <div class="col col-12 col-md-6">
                      <div class="illustration h-100">
                        <img src="<?= base_url('front/')?>assets/images/Olga-Hibbard.jpg" id="Lee_data_more" />
                        <!-- <div
                          class="description d-flex align-items-center justify-content-center">
                          <p>Admissions Key gives real meaning to an application and turns you
                            into an ideal candidate. Thanks to&#8230;</p>
                        </div> -->
                      </div><!-- .illustration -->
                    </div><!-- .col -->

                    <div class="col col-12 col-md-6">
                      <div class="content h-100 d-md-flex flex-md-column bg-orange student-2">
                        <h3>Olga Hibbard</h3>
                        <p class="flex-grow-1 text-white">“I wanted to do an MBA in one of the most competitive programs...”</p>
                        <div class="more">
                          <a href="#t8" id="8" onclick="showToggle(this.id)"><span>Read
                              more</span></a>
                        </div><!-- .more -->
                      </div><!-- .content -->
                    </div><!-- .col -->
                  </div><!-- .row -->

                  <a href="#t8"  id="8" onclick="showToggle(this.id)" class="overlay"></a>
                </div><!-- .migx_student -->
                <div class="migx_student position-relative student-3">
                  <div class="row row-0 h-50">
                    <div class="col col-12 col-md-6">
                      <div class="illustration h-100">
                        <img src="<?= base_url('front/')?>assets/images/Wissem_H_new.jpg" />
                        <!-- <div
                          class="description d-flex align-items-center justify-content-center">
                          <p>My coach knew perfectly well how to help me express my ideas and
                            to make my profile stand out. My personality&#8230;</p>
                        </div> -->
                      </div><!-- .illustration -->
                    </div><!-- .col -->

                    <div class="col col-12 col-md-6 order-md-first">
                      <div class="content h-100 d-md-flex flex-md-column bg-grey student-3">
                        <h3 id="renaudMore">Wissem Addoun</h3>
                        <p class="flex-grow-1">“My essays are now catchy, perfectly fluid and logical thanks...”</p>
                        <div class="more">
                          <a href="#t4" id="4" onclick="showToggle(this.id)"><span>Read
                              more</span></a>
                        </div><!-- .more -->
                      </div><!-- .content -->
                    </div><!-- .col -->
                  </div><!-- .row -->

                  <a href="#t4" id="4" onclick="showToggle(this.id)" class="overlay"></a>
                </div><!-- .migx_student -->
              </div><!-- .col -->
            </div><!-- .row -->
            <h2 style="color: rgb(255, 153, 51); opacity: 1;">Messaira H.</h2>
            <p style="opacity: 1;">“At Admissions Key, the coaches can really tell your story in a way you would never do it
yourself! As a child of immigrant parents who is the first of her generation to get higher
education, I was impressed how personal and true my story sounded. Every word of it was
vivid and it made me sound coherent, clear, powerful, and authentic…”</p>
            <div class="more animation-scroll animation-fade animated" style="opacity: 1;">
              <a href="#t21" id="21" onclick="showToggle(this.id)"><span style="text-transform: uppercase;border-bottom: 2px solid #000;padding-bottom: 2px;line-height: 35px;">DISCOVER HER STORY</span></a>


            </div><!-- .more -->
            <p><a href="<?= base_url('our-students') ?>" class="btn text-white mt-4 hover-dark">Meet  our students</a></p>


          </div>
          <!-- .list-students -->
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
                            <img src="<?= base_url('front/') ?>assets/images/Wissem H..jpg" />
                            <div class="help-content">
                                <h3>Wissem Addoun</h3>
                                <p>Wissem is a graduate of Columbia Business School. “Admissions Key allow me...”</p>
                                <a href="<?php echo base_url('our-students') ?>" title="Select package"
                                    class="btn-learnMore">Learn more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="help-box">
                            <img
                                src="<?= base_url('front/') ?>assets/images/Camille de Peretti 2.jpg" />
                            <div class="help-content">
                                <h3>Camille de Peretti</h3>
                                <p>“I highly recommend Admissions Key ... The team is really...”</p>
                                <a href="<?php echo base_url('our-students') ?>" title="Select package"
                                    class="btn-learnMore">Learn more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .list-booking -->
          <!-- .list-students  for mobile-->
            <div class="list-booking show-mobile">
                <div class="owl-carousel" id="students-owl-carousel">
                <div class="item">
                        <div class="help-box">
                              <img src="<?= base_url('front/')?>assets/images/Messaira-new.jpg" />
                            <div class="help-content">
                                <h3>Messaira H.</h3>
                                <p>“At Admissions Key, the coaches can really tell your story in a way you would never do it yourself! As a child of immigrant parents who is the first of her generation to get higher education, I was impressed how personal and true my story sounded. Every word of it was vivid and it made me sound coherent, clear, powerful, and authentic…”</p>
                                <a href="#t21" id="21" onclick="showToggle(this.id)" title="Select package"
                                    class="btn-learnMore">Read more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="help-box">
                                  <img src="<?= base_url('front/')?>assets/images/Olga-Hibbard-new.jpg" />
                            <div class="help-content">
                                <h3>Olga Hibbard</h3>
                                <p>“I wanted to do an MBA in one of the most competitive programs...”</p>
                                <a href="#t8" id="8" onclick="showToggle(this.id)" title="Select package"
                                    class="btn-learnMore">Read more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="help-box">
                            <img src="<?=base_url('front/');?>/assets/images/Wissem_H_new.jpg" />
                            <div class="help-content">
                                <h3>Wissem Addoun</h3>
                                <p>“My essays are now catchy, perfectly fluid and logical thanks...”</p>
                                <a href="#t4" id="4" onclick="showToggle(this.id)" title="Select package"
                                    class="btn-learnMore">Read more <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                 <p>
                 <a href="<?= base_url('our-students') ?>" class="btn text-white mt-4 hover-dark">Meet our students</a>
                 </p>
            </div><!-- .list-booking -->


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


              <div id="t4" class="students-hover-box students" style="display: none;">
              <div class="close" id="4" onclick="showToggle(this.id)"><i class="fas fa-times"></i></div>
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
        if (clicked==4) 
        {
            $('#t4').css('display','block');
              window.scrollBy(500,400);
                $('#t4').click(function(){
                $('#t4').css('display','none');
              window.scrollTo(500,3050);

            });
        }
          if (clicked==8) 
        {
            $('#t8').css('display','block');
              window.scrollBy(500,400);
                $('#t8').click(function(){
                $('#t8').css('display','none');
              window.scrollTo(500,3050);

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
      }
</script>
    
    