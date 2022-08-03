<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
  <!-- Content Wrapper. Contains page content -->
  <?php $professor_data=get_name_by_id('users',$this->uri->segment(3)) ?>
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
              <li class="breadcrumb-item active">View Students</li>
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
                <h3 class="card-title"><a href="<?= site_url('admin/manage_professor/'.$professor_data['id']);?>" class="btn btn-primary">Back</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body box-profile">
                <div class="text-center">

          <?php if($professor_data['profile']=='')
            {
              $str = substr ( $professor_data['name'] , 0 , 1 );
              ?>
            <div><span data-letters='<?php echo strtoupper($str) ?>'></span></div>
            <?php
            }
            else
            {
              ?>            
         <img src="<?php echo base_url('assets/images/'. $professor_data['profile']);?>" width="70" height="50" class="profile-user-img img-fluid img-circle"/>
          <?php } ?>
                  
                </div>

                <h3 class="profile-username text-center">Professor <?= $professor_data['name']?></h3>
                 <div class="row">
                  <div class="col-md-8">
                    <p><b>Email:</b> <?= $professor_data['email']?></p>
                    <p><b>Phone:</b> <?= $professor_data['mobile']?></p>
                    <p><b>Country:</b> <?= $professor_data['country']?></p>
                    <p><b>Gender:</b> <?= $professor_data['gender']?></p>
                    
                  </div>
                  <div class="col-md-4">
                    <?php $old_date = date($professor_data['Date_of_registration']);
                    $old_date_timestamp = strtotime($old_date); ?>
                    <p><b>Date of registration:</b> <?= date('d F Y',$old_date_timestamp);?></p>
                    <p><b>University:</b> <?= $professor_data['University']?></p>
                    <p><b>Degree:</b> <?= $professor_data['Degree']?></p>
                    <p><b>Time zone:</b> <?= $professor_data['Time_zone']?></p>
                  </div>
                </div>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    
					<th>Name</th>

					<th>Profile picture</th>

					<th>Country</th>

					<th>Phone number</th>

					<th>Email</th>

					<th>Time zone</th>

					<th>University</th>

					<th>Degree</th>

					<!-- <th>Bio</th> -->

					<th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
					<?php foreach ($data as $row){ ?>

					<tr>

					<td><?php echo $row['name']; ?></td>

					
          <?php if($row['profile']=='')
            {
              $str = substr ( $row['name'] , 0 , 1 );
              ?>
            <td><span data-letters='<?php echo strtoupper($str) ?>'></span></td>
            <?php
            }
            else
            {
              ?>            
          <td><img src="<?php echo base_url('assets/images/'. $row['profile']);?>" width="70" height="50"/></td>
          <?php } ?>

					<td><?php echo $row['country']; ?></td>

					<td><?php echo $row['mobile']; ?></td>

					<td><?php echo $row['email']; ?></td>

					<td><?php echo $row['Time_zone']; ?></td>

					<td><?php echo $row['University']; ?></td>

					<td><?php echo $row['Degree']; ?></td>

					<!-- <td><?php echo $row['Bio']; ?></td> -->

					<td><a href="<?php echo base_url('admin/view_courses/') ?><?php echo $row['id']; ?>" title="view courses"> <i class="fas fa-eye"></i> </a> <a href="<?php echo base_url('admin/manage_professor_Edit/') ?><?php echo $row['id']; ?>" title="Edit"> <i class="fas fa-edit"></i> </a> <a href="<?php echo base_url('admin/manage_professor_delete/') ?><?php echo $row['id']; ?>" title="Delete"> <i class="fas fa-trash"></i> </a></td>

					</tr>

					<?php } ?>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Name</th>

					<th>Profile picture</th>

					<th>Country</th>

					<th>Phone number</th>

					<th>Email</th>

					<th>Time zone</th>

					<th>University</th>

					<th>Degree</th>

					<!-- <th>Bio</th> -->

					<th>Action</th>
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