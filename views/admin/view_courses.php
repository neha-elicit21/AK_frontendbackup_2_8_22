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
              <li class="breadcrumb-item active">View Courses</li>
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
                <h3 class="card-title"><a href="<?= site_url('admin/view_professor_student/'.$student_data['professor_id']);?>" class="btn btn-primary">Back</a></h3>
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
                    
                  </div>
                  <div class="col-md-4">
                    <?php $old_date = date($student_data['Date_of_registration']);
                    $old_date_timestamp = strtotime($old_date); ?>
                    <p><b>Date of registration:</b> <?= date('d F Y',$old_date_timestamp);?></p>
                    <p><b>University:</b> <?= $student_data['University']?></p>
                    <p><b>Degree:</b> <?= $student_data['Degree']?></p>
                    <p><b>Time zone:</b> <?= $student_data['Time_zone']?></p>
                  </div>
                </div>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    
					<th>Package name</th>

					<th>Package sub title</th>

					<th>Amount</th>

					<th>Number of day</th>

					<th>Created date</th>

					<th>Status</th>
					<th>Progress status</th>

					<!-- <th>Bio</th> -->

					<!-- <th>Action</th> -->
                  </tr>
                  </thead>
                  <tbody>
					<?php foreach ($data as $row){ ?>

					<tr>

					<td><?php echo $row['package_name']; ?></td>

					<td><?php echo $row['package_sub_title']; ?></td>

					<td><?php echo $row['Amount']; ?></td>

					<td><?php echo $row['number_of_day']; ?></td>

					<td><?php echo $row['created_date']; ?></td>

					<td><?php if($row['new_status']==0){ echo "<span class='right badge badge-danger'>new</span>";} else {echo "<span class='right badge badge-primary'>old</span>";} ?></td>

					<td><?php
					if($row['progress_status']==1)
                      {
                        echo "<span class='right badge badge-dark'>Approved</span>";
                      }
                      elseif($row['progress_status']==2)
                      {
                        echo "<span class='right badge badge-danger'>In Progress</span>";
                      }
                       elseif($row['progress_status']==3)
                      {
                        echo "<span class='right badge badge-success'>Completed</span>";
                      }
                      else
                      {
                      	echo "<span class='right badge badge-danger'>Not Approved</span>";
                      }

					 ?></td>

					<!-- <td><?php echo $row['Bio']; ?></td> -->

					<!-- <td><a href="<?php echo base_url('admin/view_courses/') ?><?php echo $row['id']; ?>" title="view courses"> <i class="fas fa-eye"></i> </a> <a href="<?php echo base_url('admin/manage_professor_Edit/') ?><?php echo $row['id']; ?>" title="Edit"> <i class="fas fa-edit"></i> </a> <a href="<?php echo base_url('admin/manage_professor_delete/') ?><?php echo $row['id']; ?>" title="Delete"> <i class="fas fa-trash"></i> </a></td> -->

					</tr>

					<?php } ?>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Package name</th>

					<th>Package sub title</th>

					<th>Amount</th>

					<th>Number of day</th>

					<th>Created date</th>

					<th>Status</th>
					<th>Progress status</th>

					<!-- <th>Bio</th> -->

					<!-- <th>Action</th> -->
                  </tr>
                  </tfoot>
                </table>
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