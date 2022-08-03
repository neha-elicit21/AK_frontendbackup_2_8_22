

    <div id="maincontent" role="main">
      <div class="wrapper wrapper-content" id="wrapper-ContactForm">
        <div class="container">
          <h2>Contact</h2>
          <p style="max-width: 485px;">If you have any questions or would like to hear more about Admissions Key, please get in touch through the form below:</p>
          <?php if(!empty($this->session->flashdata('success_message'))){
            echo  $this->session->flashdata('success_message');
          } ?>
          <form method="post" accept="<?=base_url('home/contact');?>" id="content_form">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Last Name*</label>
                <input type="text" class="form-control " name="last_name" value="<?=set_value('last_name')?>" id="last_name" placeholder="">
                <div class="error" ><?=form_error('last_name');?></div>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">First Name*</label>
                <input type="text" class="form-control" name="first_name" id="first_name" value="<?=set_value('first_name')?>" placeholder="">
                 <div class="error" ><?=form_error('first_name');?></div>
              </div>
              <div class="form-group col-md-6">
                <label for="inputEmail4">Phone  number  </label>
                <input type="number" class="form-control" name="phone_no" id="phone_no" value="<?=set_value('phone_no')?>" placeholder="">
                   <div class="error" ><?=form_error('phone_no');?></div>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Email*</label>
                <input type="text" class="form-control" name="email" id="" value="<?=set_value('email')?>" placeholder="">
                    <div class="error" ><?=form_error('email');?></div>
              </div>
              <div class="form-group col-md-12">
                <label for="inputEmail4">Subject*</label>
               <input type="text" name="subject" class="form-control" name="subject" value="<?=set_value('subject')?>" id="subject">
                   <div class="error" ><?=form_error('subject');?></div>
              </div>
              <div class="form-group col-md-12">
                <label for="inputPassword4">Message*</label>
                <textarea class="form-control " id="validationTextarea" name="message" id="message" value="" placeholder="Message" ><?=set_value('message')?></textarea>
                <div class="error" ><?=form_error('message');?></div>
              </div>
              <div class="form-group col-md-12  text-right">
                <!-- <button type="submit" class="btn">Submit</button> -->
                <input type="submit" name="submit" class="btn" value="Submit" />
              </div>
            </div>
        </form>
        </div>
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
                    <img src="<?= base_url('front/') ?>assets/image-cache/images/static/slider/test-preparation.d951d3bd.jpg" alt="" />
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
    </div><!-- #maincontent -->