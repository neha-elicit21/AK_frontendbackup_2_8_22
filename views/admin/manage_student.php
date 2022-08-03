<link rel="stylesheet" type="text/css" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
<script  src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
  <!-- Content Wrapper. Contains page content -->
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
              <li class="breadcrumb-item active">Manage Student</li>
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
                <h3 class="card-title"><a href="<?= site_url('admin/add_student_form');?>" class="btn btn-primary"><span class="fa fa-user-plus" aria-hidden="true"></span>
</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    
                      <th>Name</th>

                      <th>Profile picture</th>

                      <th>Country</th>

                      <th>Phone number</th>

                      <th>Email</th>
                      <!-- <th>Gender</th> -->
                      <th>Time zone</th>

                      <!-- <th>University</th> -->
                      <th>Is Status</th>
                      <!-- <th>Degree</th>

                      <th>Bio</th>
                      <th>Date of registration</th>
                      <th>Current school</th>
                      <th>Current GPA</th>
                      <th>Considered School Nr. 1</th>
                      <th>Considered School Nr. 2</th>
                      <th>Current Major</th>
                      <th>Intended Major</th>
                      <th>Considered Degree</th> -->
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
          <!-- <td><?php echo $row['gender']; ?> -->

					<td><?php echo $row['Time_zone']; ?></td>

					<!-- <td><?php echo $row['University']; ?></td> -->
            
         <?php
                if($row['is_status'] == '1')
                        {
                          $status = 'checked';
                        }
                        else
                        {
                          $status = '';
                        } 
            echo '<td> <input data-id='.$row['id'].' class="usr_status" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" '.$status.' value='.$row['is_status'].'></td>'; ?>
					<!-- <td><?php echo $row['Degree']; ?></td>

				   <td><?php echo $row['Bio']; ?></td>
           <td><?php echo $row['Date_of_registration']; ?></td>
           <td><?php echo $row['Current_school']; ?></td>
           <td><?php echo $row['Current_GPA']; ?></td>
           <td><?php echo $row['Considered_School_Nr_1']; ?></td>
           <td><?php echo $row['Considered_School_Nr_2']; ?></td>
           <td><?php echo $row['Current_Major']; ?></td>
           <td><?php echo $row['Intended_Major']; ?></td>
           <td><?php echo $row['Considered_Degree']; ?></td> -->

					<td> <a href="<?php echo base_url('admin/view_student_details/') ?><?php echo $row['id']; ?>" title="view student details"> <i class="fas fa-eye"></i> </a> <a href="<?php echo base_url('admin/manage_student_Edit/') ?><?php echo $row['id']; ?>" title="Edit"> <i class="fas fa-edit"></i> </a> <a href="<?php echo base_url('admin/manage_student_delete/') ?><?php echo $row['id']; ?>" title="Delete"> <i class="fas fa-trash"></i> </a></td>

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
          <!-- <th>Gender</th> -->
					<th>Time zone</th>

					<!-- <th>University</th> -->
          <th>Is Status</th>

					<!-- <th>Degree</th>

					<th>Bio</th>
          <th>Date of registration</th>
          <th>Current school</th>
          <th>Current GPA </th>
          <th>Considered School Nr. 1</th>
          <th>Considered School Nr. 2</th>
          <th>Current Major</th>
          <th>Intended Major</th>
          <th>Considered Degree</th>
 -->
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

  <script type="text/javascript">
     $("td").on('change', '.usr_status', function(){ 
       // var status = $(this).prop('checked') == true ? 1 : 0; 
        
        var user_id = $(this).data('id'); 
        var ustatus = $(this).val();
         if(ustatus == '0'){
              $(this).val('1');
              // elem.html('<i class="fa fa-toggle-on" style="font-size: 32px; color: #4ea75b;"></i>');
            }
            else{
              $(this).val('0');
              // elem.html('<i class="fa fa-toggle-off" style="font-size: 32px; color: #cccccc;"></i>');
            }
        $.ajax({
            type: "POST",
            dataType: "json",
            url: '<?php echo base_url('admin/is_status')?>',
            data: {'status': ustatus, 'user_id': user_id},
            success: function(data){
               if(res == 1){
                  
                }
            }
        });
    })
</script>