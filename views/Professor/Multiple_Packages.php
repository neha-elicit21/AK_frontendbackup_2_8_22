
<article>

    <div class="page-heading">

      <div class="container">

        <h2>My Students</h2>

        <div class="row">

          <div class="col-lg-4 col-md-4 col-sm-6 heading">

             <?php
            if($data['profile']=='')
            {
               $str = substr ( $data['name'] , 0 , 1 );
               echo "<span data-letters=".strtoupper($str)."></span>";
            } else{
            ?>
            <img class="heading-user" src="<?= base_url('assets') ?>/images/<?= $data['profile']?>" /><?php } ?>  <?= $data['name']?> <img class="ml-2" width="35"

              src="<?= base_url('assets') ?>/img/flag.png" />

          </div>

          <div class="col-lg-3 col-md-2 col-sm-2 heading-text">

            <?php

              $old_date = date($data['Date_of_registration']); 

              $old_date_timestamp = strtotime($old_date);   

            ?>

            Enrolled: <?=  date('d F Y',$old_date_timestamp)?>

          </div>

          <div class="col-lg-4 col-md-4 col-sm-2 heading-text">

           <!--  <?php

            $old_date = date($data['Time_zone']); 

              $old_date_timestamp = strtotime($old_date);   

              date_default_timezone_set("UTC");

              $date_in_utc=date('T G',$old_date_timestamp);

            ?> -->

            Timezone: <?=  $data['Time_zone'] ?>

          </div>

          

      </div>

        </div>

      </div>

    </div>

    <div class="sec-students p-0">

      <div class="container p-0">

        <div class="bg-task">

          

        <?php
          $id=$this->session->userdata['logged_in']['id'];

          $my_student_pakage=$this->db->select('*')

          ->from('user_membership')

          ->join('package','package.id = user_membership.pakage_id')

          ->join('users','users.id = user_membership.user_id')

          ->where('created_by',$id)

          ->get()->result_array();

        foreach ($my_student_pakage as $key => $row) {

        ?>



        <div class="row">

            <?php if ($row['progress_status']==3)

               { 

                ?>

              <div class="col-3">

              <h4><?= $row['package_sub_title'];?> </h4>

              <h3><?= $row['package_name'];?></h3>

            </div>

                <div class="col-2 p-0">

              <h4>Next payment </h4>

              <h3>N/A</h3>

            </div>

             <div class="col text-center">

              <span class="unpaid text-yellow">PAID</span>

            </div>

            <div class="col mr-5">

              <!-- <a href="" title="Send reminder" class="send-reminder btn">Send  reminder <i class="fas fa-chevron-right"></i></a> -->

            </div>

            <div class="col-2">

              <select class="form-select complete-select" aria-label="Default select example">

                <!-- <option <?php if($row['progress_status']==2) echo "selected"; ?> value="2">In  progress</option> -->

                <option <?php if($row['progress_status']==3) echo "selected"; ?> value="3">Complete</option>

               <!--  <option <?php if($row['progress_status']==1) echo "selected"; ?> value="1">Approved</option> -->

              </select>

            </div>

            

          <?php } if($row['progress_status']==2) { ?>

             <div class="col-3">

              <h4><?= $row['package_sub_title'];?> </h4>

              <h3><?= $row['package_name'];?></h3>

            </div>

              <div class="col-2 p-0">

              <h4>Next payment <span style="font-size: 16px;font-weight: 600;"> EUR600 </span> </h4>

              <?php

               $old_date = date($row['created_date']); 

               $old_date_timestamp = strtotime($old_date); 

               //$old_date_timestamp.=+ 30;

               $date= date('d F Y',$old_date_timestamp);

              ?>

              <h3><?=  date('d F Y',strtotime('+'.$row['duration'].' days',strtotime($date))) . PHP_EOL;?></h3>

            </div>

              <div class="col text-center">

              <span class="unpaid">UNPAID </span>

            </div>

            <div class="col mr-5">

              <a href="<?= base_url('Professor/send_reminder/').$row['user_id'];?>" title="Send reminder" class="send-reminder btn">Send  reminder <i class="fas fa-chevron-right"></i></a>

            </div>

            <div class="col-2">

              <select class="form-select select-task" aria-label="Default select example">

                <option <?php if($row['progress_status']==2) echo "selected"; ?> value="2">In  progress</option>

               <!--  <option <?php if($row['progress_status']==3) echo "selected"; ?> value="3">Complete</option> -->

               <!--  <option <?php if($row['progress_status']==1) echo "selected"; ?> value="1">Approved</option> -->

              </select>

            </div>

            <?php } ?>

          </div>

<?php } ?>

          <div class="form">

            <form class="needs-validation" novalidate>

              <div class="form-row">

                <div class="col-md-4 mb-5">

                  <label>Phone	number</label>

                  <input type="text" class="form-control" id="validationCustom01" value="<?= $data['mobile'] ?>" placeholder="">

                </div>

                <div class="col-md-4 mb-5">

                  <label>E-mail</label>

                  <input type="text" class="form-control" id="validationCustom02" value="<?= $data['email'] ?>">

                </div>

                <div class="col-md-4 mb-5">

                  <label>Current	school</label>

                  <input type="text" class="form-control" id="validationCustom02" value="<?= $data['Current_school'] ?>">

                </div>

                <div class="col-md-4 mb-5">

                  <label>Current	GPA</label>

                  <input type="text" class="form-control" id="validationCustom02" value="<?= $data['Current_GPA'] ?> ">

                </div>

                <div class="col-md-4 mb-5">

                  <label>Considered	School	Nr.	1	</label>

                  <input type="text" class="form-control" id="validationCustom02" value="<?= $data['Considered_School_Nr_1'] ?>">

                </div>

                <div class="col-md-4 mb-5">

                  <label>Considered	School	Nr.	2</label>

                  <input type="text" class="form-control" id="validationCustom02" value="<?= $data['Considered_School_Nr_2'] ?>">

                </div>

                <div class="col-md-4 mb-5">

                  <label>Current	Major</label>

                  <input type="text" class="form-control" id="validationCustom02" value="<?= $data['Current_Major'] ?>">

                </div>

                <div class="col-md-4 mb-5">

                  <label>Intended	Major</label>

                  <input type="text" class="form-control" id="validationCustom02" value="<?= $data['Intended_Major'] ?>">

                </div>

                <div class="col-md-4 mb-5">

                  <label>Considered	Degree</label>

                  <input type="text" class="form-control" id="validationCustom02" value="<?= $data['Considered_Degree'] ?>">

                </div>

              </div>

              <!-- <button class="btn btn-primary" type="submit">Submit form</button> -->

            </form>

          </div>         

        </div>

        <ul class="task-card"> 
          <?php foreach ($my_student_pakage as $key => $row_data) { if($row_data['progress_status']!=3){ ?>
          <li><a href="<?= base_url('Professor/MyTaskStudent/'.$data['id']) ?>" >
            <div class="card">
              <?php if($row_data['progress_status']==2){ ?>
              <div class="card-header bg-yellow">
                
                <?php if($data['profile']=='')
            {
              $str = substr ( $data['name'] , 0 , 1 );
              ?>
            <td><span data-letters='<?php echo strtoupper($str) ?>'></span></td>
            <?php
            }
            else
            {
              ?>            
          <td><img class="card-user" src="<?php echo base_url('assets/images/'. $data['profile']);?>"/></td>
          <?php } ?> <?php echo $data['name']; ?>
                <span class="new-user">New</span>
              </div>
            <?php } else {?>
              <div class="card-header">
                <img class="card-user" src="<?php echo base_url('assets/images/'.$data['profile']) ?>" /> <?php echo $data['name']; ?>
              </div>
              <?php } ?>
              <div class="card-body">
                <h5 class="card-title"><?php echo $row_data['package_sub_title']; ?></h5>
                <p class="card-text"><?php echo $row_data['package_name']; ?></p>
               <div class="date">
                <?php $old_date = date($data['Date_of_registration']); 
                $old_date_timestamp = strtotime($old_date);
                ?>
                <span><?php echo date('d F Y',$old_date_timestamp); ?></span>
                <?php if($row_data['progress_status']==2) { ?>
                 <span class="status disabled">In progress</span>
                 <?php } if($row_data['progress_status']==1){  ?>
                 <span class="status">Approved</span>
               <?php } ?>
               </div>
              </div>
            </div>
          </a></li>
          <?php } } ?>
          </ul>

      </div>

    </div>

                                                             



  </article>

  <script type="text/javascript">



//   var timezone_offset_minutes = new Date().getTimezoneOffset();

// timezone_offset_minutes = timezone_offset_minutes == 0 ? 0 : -timezone_offset_minutes;



//    $.ajax({  

//     type: 'POST',  

//     url: '<?php echo base_url('Mylibrary/ch150918__utc_offset_dst')?>', 

//     data: { timezone_offset_minutes: timezone_offset_minutes },

//     success: function(data) {

//       console.log(timezone_offset_minutes);

//     }

// });

// Timezone difference in minutes such as 330 or -360 or 0





</script>