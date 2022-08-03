<div class="wrapper wrapper-intro">
    <div class="slider">
        <div class="">
            <!-- bxslider -->
          <div class="migx_slider" style="background-image: url('<?= base_url('front/');?>assets/image-cache/images/static/slider/work-with-us.jpg');"> 
                <div class="container h-100 d-flex flex-column justify-content-end">
                    <div class="content" data-aos="fade-up">
                        <h1 class="h2">Work with us</h1>
                        <p>Admissions Key is an ambitious team of dedicated professionals who help students get accepted into leading English-speaking universities worlwide.</p>
                    </div>
                    <!-- .content -->
                </div>
                <!-- .container -->
            </div>
            <!-- .migx_slider -->
        </div>
    </div>
</div>

<div id="maincontent" role="main">
    <div class="wrapper wrapper-content">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div id="content">
                        <div class="markdown">
                               <h2><?php if(!empty($this->session->flashdata('success_message'))){
                                echo  $this->session->flashdata('success_message');
                              } ?></h2>
                            <p>
                                Are you passionate about higher education? Are you committed to excellence? Do you hold a degree from a leading educational institution and have extensive experience and knowledge in the admissions, careers,
                                writing and editing, as well as test preparation? Are you genuinely interested in helping young people live up to their full potential? We currently have the following openings:
                            </p>

                            <h3>Admissions Application Expert</h3>

                            <p>
                                Are you excellent at writing and editing? Do you hold a degree in Creative Writing, English Literature or Journalism from a leading university? Apply to join our worldwide Admissions Application Experts team.
                            </p>

                            <h3>Tests consultant</h3>

                            <p>Do you have a long and successful experience of teaching GRE, GMAT, TOEFL or IELTS at recognized institutions? We are currently hiring experienced test consultants.</p>

                            <h3>Interview consultant</h3>

                            <p>Are you an expert in verbal / non-verbal communications and have extensive experience in Human Resources and college admissions? Contact us.</p>

                            <h3>Career consultant</h3>

                            <p>
                                If you have extensive experience in career consulting and are a fine communicator with in-depth knowledge of leading English-speaking universities and undergraduate / graduate specializations, get in touch.
                            </p>

                            <hr />
                            

                            <h2>Apply now !</h2>
                            <!-- id="form_work-with-us" -->

                            <form action="<?=base_url('work-with-us')?>" method="post" class="form" enctype='multipart/form-data'>
                                <fieldset>
                                  <!--   <legend>Your information</legend> -->
                                     <h3>Your information</h3>

                                    <div class="form-group-wrapper">
                                        <div class="row row-md-15">
                                            <div class="col col-12 col-md-6">
                                                <div class="form-group row" id="wrappername">
                                                    <label class="col col-12 control-label" for="name">Full name * </label>

                                                    <div class="col col-12">
                                                        <input type="text" class="form-control" id="fullname" name="fullname" value="<?=set_value('fullname');?>" />
                                                         <div class="error" ><?=form_error('fullname');?></div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .col -->

                                            <div class="col col-12 col-md-6">
                                                <div class="form-group row" id="wrappercontact">
                                                    <label class="col col-12 control-label" for="contact">Contact info * </label>

                                                    <div class="col col-12">
                                                        <input type="text" class="form-control" id="contact" name="contact_info" value="<?=set_value('contact_info')?>" />
                                                        <div class="error" ><?=form_error('contact_info');?></div>

                                                        <label class="error" for="contact"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .col -->
                                        </div>
                                        <!-- .row -->
                                    </div>
                                    <!-- .form-group-wrapper -->

                                    <div class="form-group-wrapper">
                                        <div class="row row-md-15">
                                            <div class="col col-12 col-md-6">
                                                <div class="form-group row" id="wrapperemail">
                                                    <label class="col col-12 control-label" for="email">Email * </label>

                                                    <div class="col col-12">
                                                        <input type="text" class="form-control email" id="email" name="email" value="<?=set_value('email')?>" />
                                                        <div class="error" ><?=form_error('email');?></div>

                                                        <label class="error" for="email"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .col -->

                                            <div class="col col-12 col-md-6">
                                                <div class="form-group row" id="wrapperphone">
                                                    <label class="col col-12 control-label" for="phone">Phone / Skype * </label>

                                                    <div class="col col-12">
                                                        <input type="text" class="form-control" id="phone" name="phone_no" value="<?=set_value('phone_no')?>"  />
                                                        <div class="error" ><?=form_error('phone_no');?></div>

                                                        <label class="error" for="phone"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .col -->
                                        </div>
                                        <!-- .row -->
                                    </div>
                                    <!-- .form-group-wrapper -->

                                    <div class="form-group-wrapper">
                                        <div class="row row-md-15">
                                            <div class="col col-12 col-md-6">
                                                <div class="form-group row" id="wrappercountry">
                                                    <label class="col col-12 control-label" for="country">Country * </label>

                                                    <div class="col col-12">
                                                        <input type="text" class="form-control" id="country" name="country" value="<?=set_value('country')?>"  />
                                                        <div class="error" ><?=form_error('country');?></div>

                                                        <label class="error" for="country"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .col -->
                                        </div>
                                        <!-- .row -->
                                    </div>
                                    <!-- .form-group-wrapper -->
                                </fieldset>

                                <fieldset>
                                   <!--  <legend>Your experience</legend> -->
                                <h3>Your experience</h3>

                                    <div class="form-group-wrapper">
                                        <div class="row row-md-15">
                                            <div class="col col-12 col-md-6">
                                                <div class="form-group row" id="wrapperarea-expertise">
                                                    <label class="col col-12 control-label" for="area-expertise">Area of expertise * </label>

                                                    <div class="col col-12">
                                                        <input type="text" class="form-control" id="area-expertise" name="area_of_expertise" value="<?=set_value('area_of_expertise')?>" />
                                                          <div class="error" ><?=form_error('area_of_expertise');?></div>

                                                        <label class="error" for="area-expertise"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .col -->

                                            <div class="col col-12 col-md-6">
                                                <div class="form-group row" id="wrapperyears-experience">
                                                    <label class="col col-12 control-label" for="years-experience">Years of experience * </label>

                                                    <div class="col col-12">
                                                        <input type="text" class="form-control" id="years-experience" name="year_of_experience" value="<?=set_value('year_of_experience')?>" />
                                                         <div class="error" ><?=form_error('year_of_experience');?></div>

                                                        <label class="error" for="years-experience"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .col -->
                                        </div>
                                        <!-- .row -->
                                    </div>
                                    <!-- .form-group-wrapper -->

                                    <div class="form-group-wrapper">
                                        <label class="control-label d-inline-block mr-5">Experience in the admissions *</label>
                                        <div class="d-inline-block">
                                            <label class="radio radio-inline" for="experience-admissions1">
                                                <input type="radio" name="experience_in_ak" class="" id="experience-admissions1" value="1" <?= set_value('experience_in_ak') == 1 ? "checked" : "";?>  />
                                                <span class="checkmark"></span>
                                                Yes
                                            </label>

                                            <label class="radio radio-inline" for="experience-admissions2">
                                                <input type="radio" name="experience_in_ak" class="" id="experience-admissions2" value="0" <?= set_value('experience_in_ak') == 0 ? "checked" : "";?>  />
                                                <span class="checkmark"></span>
                                                No
                                            </label>
                                             <div class="error" ><?=form_error('experience_in_ak');?></div>

                                            <label id="experience-admissions-error" class="error" for="experience-admissions"></label>
                                        </div>
                                    </div>
                                    <!-- .form-group-wrapper -->

                                    <div class="form-group row" id="wrapperresume">
                                        <label class="col col-12 control-label" for="resume">Resume upload * </label>

                                        <div class="col col-12">
                                            <input type="file" class="form-control" id="resume" name="resume" value="<?=set_value('resume')?>" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" />

                                            <div class="error" ><?=form_error('resume');?></div>
                                            <label class="error" for="resume"></label>
                                        </div>
                                    </div>

                                    <div class="form-group row" id="wrappermessage">
                                        <label class="col col col-12 control-label" for="message">Tell us why you would like to work for us * </label>

                                        <div class="col col col-12">
                                            <textarea class="form-control" id="message" name="message" ><?=set_value('message')?></textarea>
                                             <div class="error" ><?=form_error('message');?></div>
                                            <label class="error" for="message"></label>
                                        </div>
                                    </div>
                                </fieldset>
                                <script src="https://www.google.com/recaptcha/api.js?render=6LfpeeIUAAAAANkWM2759mW91q007QpZ0uXuD2Ps&amp;hl=en"></script>
                                <input type="hidden" name="token-1" />
                                <input type="hidden" name="action-1" value="workwithushtml" />
                                <script>
                                    grecaptcha.ready(function () {
                                        grecaptcha.execute("6LfpeeIUAAAAANkWM2759mW91q007QpZ0uXuD2Ps", { action: "workwithushtml" }).then(function (token) {
                                            document.querySelector('[name="token-1"]').value = token;
                                        });
                                    });
                                </script>

                                <div class="form-group">
                                   <!--  <button type="submit" class="btn bg-white">Submit </button> -->
                                    <input type="submit" name="submit" class="btn bg-white" value="Submit"/> 
                                </div>
                                <!-- .form-actions -->
                            </form>
                        </div>
                        <!-- .markdown -->
                    </div>
                    <!-- #content -->
                </div>
                <!-- .col -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
      </div>
    </div>
    <!-- #maincontent -->

    <div class="wrapperDiaporama container-fluid">
        <div class="diaporama diaporama-slider row row-0"></div>
    </div>
</div>
