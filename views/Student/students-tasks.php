

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

      font-size: 22px;

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
            if($student_data['profile']=='')
            {
               $str = substr ( $student_data['name'] , 0 , 1 );
               echo "<span data-letters=".strtoupper($str)."></span>";
            } else{
            ?>
            <img class="heading-user" src="<?php echo base_url('assets/images/'.$student_data['profile']); ?>"/> <?php } ?>  <?php echo $student_data['name'];  ?> <img class="ml-2" width="35"
              src="<?= base_url('assets') ?>/img/flag.png" />
          </div>
          <?php 
          foreach ($data as $key => $row) {
            // code...
          }?>
          

          <div class="col-lg-3 col-md-2 col-sm-2 heading-text">
            Enrolled:<?= $row['Date_of_registration']?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 heading-text">
            <?= $row['Time_zone']?>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 profile-btn">
            <a href="<?php echo base_url('student/student_view_profile/')?>" title="View	student	profile" class="student-profile btn">View student profile <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </div>
   
    <div class="sec-task2 p-0"><?php $pro_data=get_name_by_id('users',$row['created_by']);?>
      <div class="container p-0">
        <div class="bg-task">
          <div class="row">
            <div class="col-3">
              <h4><?= $row['package_sub_title'];?></h4>
              <h3><?= $row['package_name'];?> </h3>
            </div>
            <div class="col-3">
              <h3 class="pb-0"> <?= $pro_data['name']?></h3>
              <a href="<?php echo base_url('/Professor/MyProfile'. $pro_data['id'])?>" title="View profile" class="btn small-btn">View profile</a>
            </div>
            <div class="col-2 p-0">
              <h4>Next payment <span style="font-size: 16px;font-weight: 600;"><?= $row['Amount']?> </span> </h4>
              <h3>15 August 2021</h3>
            </div>

            <div class="col mr-5 text-left pl-0">
              <a href="#" title="Pay" class="btn pay-btn">Pay</a>
            </div>
            <div class="col-2">
              <?php if($row['progress_status']==3){ ?>

                <span class="status complete">Complete</span>

                <?php } elseif($row['progress_status']==2) { ?>

                 <span class="status disabled">In progress</span>

                 <?php } elseif($row['progress_status']==1){  ?>

                  <span class="status">Not Started</span>

               <?php } ?>
            </div>
          </div>
          <div class="row documents-row">
            <div class="col-lg-8 col-md-7">
              <div class="uplode-img mt-0">
                <h4>My Documents</h4>
                <div class="row mt-3">
                  <div class="col-lg-6 col-md-6">
                     <div class="file-upload-wrapper content">



                      <form action="<?= base_url('Professor/fileupload') ?>" class="dropzone" id="fileupload">
            
                      </form> 
                      



                        <!-- <input type="file" id="input-file-now-custom-2" class="file-upload"

                       data-height="500" />
    
                     <img src="<?= base_url() ?>assets/img/uplode-img.jpg"/> -->

                      </div>

                  </div>
                  <div class="col-lg-6 col-md-6">
                    <ul class="list-uploaded">
                      <li><?php
                          if(isset($_FILES['fileAttach']['name'])) {
                           echo $_FILES['fileAttach']['name'] . " was uploaded";
                             } else {
                             echo "No File Uploaded";
                               }   
                          ?>      
                       </li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-lg-4 col-md-5">
              <h4>Upcoming Appointments</h4>
              <div class="box-upcoming-appointments">
                <ul class="list-upcoming">
                  <li>07 October 2020</li>
                  <li>13 October 2020</li>
                  <li>27 October 2020</li>
                </ul>
                <span class="btn-slot"><a href="#" class="btn" title="BOOK SLOT">BOOK SLOT</a></span>
              </div>
            </div>
          </div>
          <div class="bottom-attachments">
            <h4>Attachments uploaded by your Professor</h4>
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