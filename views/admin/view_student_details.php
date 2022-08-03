<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
  <!-- Content Wrapper. Contains page content -->
  <?php $student_data=get_name_by_id('users',$this->uri->segment(3)) ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>DataTables</h1> -->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard')?>">Home</a></li>
              <li class="breadcrumb-item active">View Students Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><a href="<?= site_url('admin/manage_student/'.$student_data['id']);?>" class="btn btn-primary">Back</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body box-profile">
                <div class="text-center">
                  <?php if($student_data['profile']=='')
            {
              $str = substr ( $student_data['name'] , 0 , 1 );
              ?>
            <td><span data-letters='<?php echo strtoupper($str) ?>'></span></td>
            <?php
            }
            else
            {
              ?>            
         <img src="<?php echo base_url('assets/images/'. $student_data['profile']);?>" width="70" height="50" class="profile-user-img img-fluid img-circle"/>
          <?php } ?>
                </div>

                <h3 class="profile-username text-center">Student <?= $student_data['name']?></h3>
                 <div class="row">
                  <div class="col-md-8">
                    <p><b>Email:</b> <?= $student_data['email']?></p>
                    <p><b>Phone:</b> <?= $student_data['mobile']?></p>
                    <p><b>Country:</b> <?= $student_data['country']?></p>
                    <p><b>Gender:</b> <?= $student_data['gender']?></p>
                    <p><b>Current school:</b> <?php echo $student_data['Current_school']; ?></p>
                    <p><b>Current GPA:</b> <?php echo $student_data['Current_GPA']; ?></p>
                    <p><b>Considered School Nr.1:</b><?php echo $student_data['Considered_School_Nr_1']; ?></p>
                    
                  </div>
                  <div class="col-md-4">
                    <?php $old_date = date($student_data['Date_of_registration']);
                    $old_date_timestamp = strtotime($old_date); ?>
                    <p><b>Date of registration:</b> <?= date('d F Y',$old_date_timestamp);?></p>
                    <p><b>University:</b> <?= $student_data['University']?></p>
                    <p><b>Degree:</b> <?= $student_data['Degree']?></p>
                    <p><b>Time zone:</b> <?= $student_data['Time_zone']?></p>
                    <P><b>Considered School_Nr.2:</b><?php echo $student_data['Considered_School_Nr_2']; ?></P>
                    <P><b>Current Major:</b> <?php echo $student_data['Current_Major']; ?></P>
                    <P><b>Intended Major:</b> <?php echo $student_data['Intended_Major']; ?></P>
                    <P><b>Considered Degree:</b> <?php echo $student_data['Considered_Degree']; ?></P>
                  </div>
                </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>