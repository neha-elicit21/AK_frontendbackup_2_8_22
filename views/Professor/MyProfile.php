
  <article>
    <div class="page-heading">

      <div class="container">

        <h2><?= $data['name']?>: <span> My Proﬁle</span></h2>

        <div class="row">

          <div class="col-lg-5 col-md-4 col-sm-6 heading">

            <?php
            if($data['profile']=='')
            {
               $str = substr ( $data['name'] , 0 , 1 );
               echo "<span data-letters=".strtoupper($str)."></span>";
            } else{
            ?>
            <img class="heading-user" src="<?php echo base_url('assets/images/'.$data['profile']); ?>" /><?php } ?> Professor <?php echo $data['name'];  ?> <img class="ml-2" width="35"

              src="<?= base_url('assets') ?>/img/flag.png" />

          </div>

          <div class="col-lg-2 col-md-2 col-sm-2 heading-text">

            Degree: <?= $data['Degree']?>

          </div>

          <div class="col-lg-3 col-md-2 col-sm-2 heading-text">

           <?php

            // $old_date = date($data['Time_zone']); 

            //   $old_date_timestamp = strtotime($old_date);   

            //   date_default_timezone_set("UTC");

            //   $date_in_utc=date('T G',$old_date_timestamp);

            ?>

            Timezone: <?=  $data['Time_zone'] ?>

          </div>

          <div class="col-lg-2 col-md-3 col-sm-3 profile-btn">

            <a href="<?= base_url('professor/edit-profile/'.$data['id']); ?>" title="Edit profile" class="student-profile btn bg-yellow">Edit profile <i

                class="fas fa-chevron-right"></i></a>

          </div>

        </div>

      </div>

    </div>

    <div class="sec-task2 p-0">

      <div class="container p-0">

        <div class="bg-task">

          <div class="form mt-4">

            <form class="needs-validation" novalidate>

              <div class="form-row">

                <div class="col-md-4 mb-5">

                  <label>Phone number</label>

                  <input type="text" class="form-control" id="validationCustom01" value="<?= $data['mobile']?>"

                    placeholder="">

                </div>

                <div class="col-md-4 mb-5">

                  <label>E-mail</label>

                  <input type="text" class="form-control" id="validationCustom02" value="<?= $data['email']?>">

                </div>

                <div class="col-md-4 mb-5">

                  <label>University</label>

                  <input type="text" class="form-control" id="validationCustom03"

                    value="<?= $data['University']?>">

                </div>

                <div class="col-md-12">

                  <div class="form-group">

                    <label for="exampleFormControlTextarea1">Bio </label>

                    <textarea class="form-control" id="exampleFormControlTextarea1" width="100" rows="10" placeholder="<?= $data['Bio']?>"></textarea>

                  </div>

                </div>

              </div>

              <!-- <button class="btn btn-primary" type="submit">Submit form</button> -->

            </form>

          </div>

        </div>

        <div class="profile-box">

          <div class="row mt-5">

            <div class="col-md-4 mb-5">

              <div class="box">

                <div class="icon"><img src="<?= base_url('assets') ?>/img/quote-dark.png" width="35px"/> <span><img src="<?= base_url('assets') ?>/img/plus-dark.png" width="16px"/></span></div>

                <p>A well-written essay or a great interview can get you into the school of your dreams or on the contrary, deny you access to your future. The help of a professional may turn your personal statements, resumes and interviews into a convincing and undeniable argument in favor of your candidature.</p>

                <p><small>Ang	Lee	MBA,	Oxford	University,	England</small></p>

              </div>

            </div>

            <div class="col-md-4 mb-5">

              <div class="box box2">

                <div class="icon"><img src="<?= base_url('assets') ?>/img/quote.png" width="35px"/> <span><img src="<?= base_url('assets') ?>/img/plus.png" width="16px"/></span></div>

                <p>A well-written essay or a great interview can get you into the school of your dreams or on the contrary, deny you access to your future. The help of a professional may turn your personal statements, resumes and interviews into a convincing and undeniable argument in favor of your candidature.</p>

                <p><small>Ang	Lee	MBA,	Oxford	University,	England</small></p>

              </div>

            </div>

            <div class="col-md-4 mb-5">

              <div class="box box3">

                <div class="icon"><img src="<?= base_url('assets') ?>/img/quote-dark.png" width="35px"/> <span><img src="<?= base_url('assets') ?>/img/plus-dark.png" width="16px"/></span></div>

                <p>A well-written essay or a great interview can get you into the school of your dreams or on the contrary, deny you access to your future. The help of a professional may turn your personal statements, resumes and interviews into a convincing and undeniable argument in favor of your candidature.</p>

                <p><small>Ang	Lee	MBA,	Oxford	University,	England</small></p>

              </div>

            </div>

          </div>

      </div>

    </div>




  </article>