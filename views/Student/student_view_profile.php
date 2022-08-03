 <article>
    <div class="page-heading">
     <!--  <?php 
      foreach ($data as $data) {
        // code...
      }?> -->
      <div class="container">
        <h2><?= $data['name']?><span>:My Proﬁle</span></h2>
        <div class="row">
          <div class="col-lg-5 col-md-4 col-sm-6 heading">
            <img class="heading-user" src="<?php echo base_url('assets/images/'.$data['profile']) ?>" /><?= $data['name']?>  
            <!-- <img class="ml-2" width="35"src="<?= base_url('assets') ?>/img/flag.png" /> -->
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 heading-text">
            Degree: <?= $data['Degree']?>
          </div>
          <div class="col-lg-3 col-md-2 col-sm-2 heading-text">
            Timezone: <?= $data['Time_zone']?>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-3 profile-btn">
            <a href="<?php echo base_url('student/myprofile/')?>" title="Edit profile" class="student-profile btn bg-yellow">Edit profile <i
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
                  <input type="text" class="form-control" id="validationCustom01" value="<?=$data['mobile']?>"
                    placeholder="">
                </div>
                <div class="col-md-4 mb-5">
                  <label>E-mail</label>
                  <input type="text" class="form-control" id="validationCustom02" value="<?=$data['email']?>">
                </div>
                <div class="col-md-4 mb-5">
                  <label>University</label>
                  <input type="text" class="form-control" id="validationCustom03"
                    value="<?=$data['University']?>">
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Bio </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" width="100" rows="10" ><?= $data['Bio']?></textarea>
                  </div>
                </div>
              </div>
              <!-- <button class="btn btn-primary" type="submit">Submit form</button> -->
            </form>
          </div>
        </div>
        </div>
    </div>


  </article>