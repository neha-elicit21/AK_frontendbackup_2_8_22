   <!-- Dropzone CSS & JS -->

    <link href='<?= base_url() ?>assets/resources/dropzone.css' type='text/css' rel='stylesheet'>

    <script src='<?= base_url() ?>assets/resources/dropzone.js' type='text/javascript'></script>

    

    <!-- Dropzone CDN -->

    <!-- 

    <link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>

    -->

        <style>

  /*  .content{

      width: 50%;

      padding: 5px;

      margin: 0 auto;

    }*/

    .content span{

      width: 250px;

    }

    .dz-message{

      text-align: center;

      font-size: 28px;

    }

    </style>

    <script>

    // Add restrictions

    Dropzone.options.fileupload = {

      //acceptedFiles: 'image/*',

      maxFilesize: 5 // MB

    };

    </script>

 <article>

    <div class="page-heading">

      <div class="container">

        <h2>My Tasks</h2>

        <div class="row">

          <div class="col-lg-4 col-md-4 col-sm-6 heading">

             <?php
            if($data['profile']=='')
            {
               $str = substr ( $data['name'] , 0 , 1 );
               echo "<span data-letters=".strtoupper($str)."></span>";
            } else{
            ?>
            <img class="heading-user" src="<?= base_url('assets') ?>/images/<?= $data['profile']?>" /><?php }?>  <?= $data['name']?><img class="ml-2" width="35"

              src="<?= base_url('assets') ?>/img/flag.png" />

          </div>

          <div class="col-lg-3 col-md-2 col-sm-2 heading-text">

            <?php

              $old_date = date($data['Date_of_registration']); 

              $old_date_timestamp = strtotime($old_date);   

            ?>

            Enrolled:	<?=  date('d F Y',$old_date_timestamp)?>

          </div>

          <div class="col-lg-2 col-md-2 col-sm-2 heading-text">

            <?php

            // $old_date = date($data['Time_zone']); 

            //   $old_date_timestamp = strtotime($old_date);   

            //   date_default_timezone_set("UTC");

            //   $date_in_utc=date('T G',$old_date_timestamp);

            ?>

            Timezone: <?=  $data['Time_zone'] ?>

          </div>

          <div class="col-lg-3 col-md-3 col-sm-3 profile-btn">

            <a href="<?= base_url('professor/student/'.$data['id'])?>" title="View	student	profile" class="student-profile btn">View	student	profile <i class="fas fa-chevron-right"></i></a>

          </div>

        </div>

      </div>

    </div>

    <div class="sec-task2 p-0">

      <div class="container p-0">

        <div class="bg-task">

           <?php

        $my_student_pakage=$this->db->select('*')

        ->from('user_membership')

        ->join('package','package.id = user_membership.pakage_id')

        ->where('user_id',$data['id'])

        ->get()->result_array();

        foreach ($my_student_pakage as $key => $row) {

        ?>



        <div class="row">

            <?php if ($row['payment_status']==3)

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

                <!-- <option <?php if($row['payment_status']==2) echo "selected"; ?> value="2">In  progress</option> -->

                <option <?php if($row['payment_status']==3) echo "selected"; ?> value="3">Complete</option>

               <!--  <option <?php if($row['payment_status']==1) echo "selected"; ?> value="1">Approved</option> -->

              </select>

            </div>

            

          <?php } if($row['payment_status']==2) { ?>

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

                <option <?php if($row['payment_status']==2) echo "selected"; ?> value="2">In  progress</option>

               <!--  <option <?php if($row['payment_status']==3) echo "selected"; ?> value="3">Complete</option> -->

               <!--  <option <?php if($row['payment_status']==1) echo "selected"; ?> value="1">Approved</option> -->

              </select>

            </div>

            <?php } ?>

          </div>

<?php } ?>

          <div class="uplode-img">





            <div class="file-upload-wrapper content">



              <form action="<?= base_url('Professor/fileupload') ?>" class="dropzone" id="fileupload">

            </form> 

              <!-- <input type="file" id="input-file-now-custom-2" class="file-upload"

             data-height="500" />

             <img src="<?= base_url() ?>assets/img/uplode-img.jpg"/> -->

           </div>

   

           <h4>Attachments	uploaded	by	student</h4>

           <ul class="list-uploaded">

             <li><span>File Name</span></li>

             <li><span>File Name</span></li>

             <li><span>File Name</span></li>

             <li><span>File Name</span></li>

             <li><span>File Name</span></li>

           </ul>

          </div>

        </div>

      </div>

    </div>





  </article>