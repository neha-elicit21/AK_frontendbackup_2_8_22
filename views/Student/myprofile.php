
<article>
    <div class="page-heading">
      <?php
               foreach ($data as $row) {
                // code...
              }
        ?>
      <div class="container">
        <h2><?= $row['name']?><span>:My Profile</span></h2>
        <div class="row">
          <div class="col-lg-5 col-md-4 col-sm-6 heading">
            <img class="heading-user" src="<?php echo base_url('assets/images/'.$row['profile']) ?>" /><?= $row['name']?> 
            <img class="ml-2" width="35" src="<?= base_url('assets') ?>/img/flag.png" />
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 heading-text">
            Degree: <?= $row['Degree']?>
          </div>
          <div class="col-lg-3 col-md-2 col-sm-2 heading-text">
            Time-Zone: <?= $row['Time_zone']?>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-3 profile-btn">
            <a href="#" title="Edit profile" class="student-profile btn bg-yellow">Edit profile <i
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
                  <label>Country</label>
                  <input type="text" class="form-control" id="validationCustom01" value="<?= $row['country']?>" placeholder="">
                </div>
                <div class="col-md-4 mb-5">
                  <label>Current School</label>
                  <input type="text" class="form-control" id="validationCustom02" value="<?= $row['Current_school']?>">
                </div>
                <div class="col-md-4 mb-5">
                  <label>Considered Degree</label>
                  <input type="text" class="form-control" id="validationCustom03" value="<?=$row['Considered_Degree']?>">
                </div>

                <div class="col-md-4 mb-5">
                  <label>Mobile</label>
                  <input type="text" class="form-control" id="validationCustom01" value="<?=$row['mobile']?>" placeholder="">
                </div>
                <div class="col-md-4 mb-5">
                  <label>Current GPA</label>
                  <input type="text" class="form-control" id="validationCustom02" value="<?=$row['Current_GPA']?>">
                </div>
                <div class="col-md-4 mb-5">
                  <label>Considered School No.1</label>
                  <input type="text" class="form-control" id="validationCustom03" value="<?=$row['Considered_School_Nr_1']?>">
                </div>

                <div class="col-md-4 mb-5">
                  <label>Email</label>
                  <input type="text" class="form-control" id="validationCustom01" value="<?=$row['email']?>" placeholder="">
                </div>
                <div class="col-md-4 mb-5">
                  <label>Current Major</label>
                  <input type="text" class="form-control" id="validationCustom02" value="<?=$row['Current_Major']?>">
                </div>
                <div class="col-md-4 mb-5">
                  <label>Indented Major</label>
                  <input type="text" class="form-control" id="validationCustom03" value="<?=$row['Intended_Major']?>">
                </div>
                <!-- <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Bio </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" width="100" rows="10" placeholder="I got my ﬁrst taste of admissions through my undergraduate work-study where, in addition to ﬁling a lot of paper, I interacted with students and families as a tour guide and admissions ponelist. However, it was only when I was away from a college environment working as a Civil Engineer that I realized how much I missed working with students at this important time in their lives. I spent the ﬁrst ﬁve years of my admissions career working at small liberal arts colleges on the East Coast, before joining the undergraduate admission staff at Boston College. After a total of 12 years working in admissions, I wanted to have more insight into the student experience in the college process.
                    "></textarea>
                  </div>
                </div> -->
              </div>
              <!-- <button class="btn btn-primary" type="submit">Submit form</button> -->
            </form>
          </div>
        </div>
        <ul class="task-card mt-5">
           <?php  foreach ($data as $key => $row)
          {
            ?>
          <li><a href="<?php echo base_url('student/students_tasks/').$row['created_date']?>">
            <div class="card">
              <div class="card-header bg-yellow"> <?php $pro_data=get_name_by_id('users',$row['created_by']);?>

             <img class="card-user" src="<?php echo base_url('assets/images/'.$pro_data['profile']) ?>" /> <?= $pro_data['name'] ?> 
              <span class="new-user">New</span>
              </div>
              <div class="card-body">
                <h5 class="card-title"><?= $row['package_sub_title'];?></h5>
                <p class="card-text"><?= $row['package_name'];?></p>
                  <div class="date">
                  <!-- <span class="w-100 d-inline-block">06 January 2021</span> -->
                  <?php $pro_data=get_name_by_id('users',$row['created_by']);?>
               <!--  <span>Professor: <?= $pro_data['name'] ?> </span> -->
               <?php if($row['progress_status']==3){ ?>

                <span class="status complete">Complete</span>

                <?php } elseif($row['progress_status']==2) { ?>

                 <span class="status disabled">In progress</span>

                 <?php } elseif($row['progress_status']==1){  ?>

                 <span class="status">Not Started</span>

               <?php } ?>
                  <div class="attachments-box">
                    <input type="file" id="myfile" name="myfile">
                    <i class="fas fa-paperclip"></i> Attachments
                  </div>
                 <!--  <span class="status n-started">Not  started</span> -->
                 </div>
              </div>
            </div>
          </a>
          </li>
        <?php }?>
        </ul>
      </div>
    </div>


  </article>