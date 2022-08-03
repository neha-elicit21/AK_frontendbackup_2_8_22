 <div id="maincontent " role="main">

        <div class="wrapper wrapper-content" id="experts-our-name">
          <div class="container">
            <h2>Our	experts:</br> <?= $data['name']; ?></h2>
          </div>
        </div>
        <div class="wrapper wrapper-content" id="experts-our-profile">
          <div class="container">
            <div class="row">
              <div  class="col-lg-6 col-md-12">
                <h3>Education</h3>
                <ul class="education-list">
                  <li>Certificate in Strategic Management</br> (One-year Program), Harvard</li>
                  <li>University, EUA, 2013 </li>
                  <li>MSc, University of Toronto, Canada, 2009 </li>
                  <li>BSc, Universidade Federal de Santa Catarina, Brasil, 2005 </li>
                </ul>

                <h3>Admissions	experience</h3>
                <ul class="education-list">
                  <li>Former admissions officer at Boston College </li>
                  <li>Former admissions officer at University of Illinois at Urbana-Champaign </li>
                  <li>Former admissions officer at Lafayette College</li>
                  <li>Former admissions officer at Ursinus College</li>
                  <li>Former college counselor at Castilleja School </li>
                </ul>
                <h3>Background</h3>
                <p class="font17 mb-5">I got my first taste of admissions through my undergraduate work-study where, in addition to filing a lot of paper, I interacted with students and families as a tour guide and admissions ponelist. However, it was only when I was away from a college environment working as a Civil Engineer that I realized how much I missed working with students at this important time in their lives. I spent the first five years of my admissions career working at small liberal arts colleges on the East Coast, before joining the undergraduate admission staff at Boston College. After a totalof 12 years working in admissions, I wanted to have more insight into the student experience in the college process.</p>
                <p class="font17">My curiosity took me to Northern California where I worked as a college counselor at a highly selective private girls high school, helping students opply to the most competitive colleges and universities in the United States and abroad. My career path took me back into admission when I moved to the Midwest to manage the undergraduate international admission process at a large public university. I hove traveled across the nation and around the world (20+ countries), meeting and working with students and families to shore my knowledge and expertise of the nuances of the college process </p>
              </div>
              <div  class="col-lg-5 offset-1 col-md-12 col-profile-img">
                <span class="span-profile-img"><img width="100%" src="<?php echo base_url('assets/img/').$data["profile"] ?>"/></span>
                <div class="experts-text">
                  <img class="quote-icon" src="<?php echo base_url('front/') ?>assets/images/quote-icon-color.png"/>
                  <p style="max-width: 320px;">A well-written essay or a great interview can get you into the school of your dreams or on the contrary, deny you access to your future. The help of a professional may turn your personal statements, resumes and interviews into a convincing and undeniable argument in favor of your candidature.</p>
                </div>
                <div class="experts-bottom-btn">
                  <!-- <p><a href="<?= base_url('home/booking') ?>" title="Speciality package" class="btn bg-dark">Speciality	package</a></p>
                  <p><a href="<?= base_url('home/booking') ?>" title="Work	with	Mark" class="btn">Work	with	Mark</a></p> -->
                  <p><a href="<?= base_url('our-experts') ?>" title="See	all	our	experts" class="btn bg-white">See	all	our	experts</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="wrapper wrapper-content profile-our-students" id="experts-our-students"> 
          <div class="container">
            <!-- <h2 class="animation-scroll animation-fade animated" style="opacity: 1; color: #424242;">Our Students</h2> -->
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="student-testimonial" >
                  <div class="student-img">
                    <img class="img-student" src="<?php echo base_url('front/') ?>assets/images/students-img1.jpg"/>
                    <img  class="quote-icon" src="<?php echo base_url('front/') ?>assets/images/quote-icon.png"/>
                  </div>
                  <p>A well-written essay or a great interview can get you into the school of your dreams or on the contrary, deny you access to your future. The help of a professional may turn your personal statements, resumes and interviews into a convincing and undeniable argument in favor of your candidature.</p>
                  <p><span>Ang	Lee	MBA,	Oxford	University,	England	</span></p>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="student-testimonial">
                  <div class="student-img">
                    <img class="img-student" src="<?php echo base_url('front/') ?>assets/images/students-img1.jpg"/>
                    <img  class="quote-icon" src="<?php echo base_url('front/') ?>assets/images/quote-icon.png"/>
                  </div>
                  <p>A well-written essay or a great interview can get you into the school of your dreams or on the contrary, deny you access to your future. The help of a professional may turn your personal statements, resumes and interviews into a convincing and undeniable argument in favor of your candidature.</p>
                  <p><span>Ang	Lee	MBA,	Oxford	University,	England	</span></p>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="student-testimonial">
                  <div class="student-img">
                    <img class="img-student" src="<?php echo base_url('front/') ?>assets/images/students-img1.jpg"/>
                    <img  class="quote-icon" src="<?php echo base_url('front/') ?>assets/images/quote-icon.png"/>
                  </div>
                  <p>A well-written essay or a great interview can get you into the school of your dreams or on the contrary, deny you access to your future. The help of a professional may turn your personal statements, resumes and interviews into a convincing and undeniable argument in favor of your candidature.</p>
                  <p><span>Ang	Lee	MBA,	Oxford	University,	England	</span></p>
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
                      <img src="<?= base_url('front/') ?>assets/image-cache/images/static/slider/career-preparation-expert-coach.e95b8f9f.jpg"
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
    </div>

      </div>
      <div class="sign-up-box">
  			<div class="container">
  			<span>Sign up to our newsletter</span> to get the latest updates and insights about the admissions process from Admissions Key <a href="#" title="Sign up" class="sign-up-btn"> Sign-up</a>
  			</div>
  		</div>