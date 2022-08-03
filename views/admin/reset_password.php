<!DOCTYPE HTML>

<html>



<head>

  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

  <meta http-equiv="content-type" content="text/html; charset=utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>My Admissions Key</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <!--  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

 -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">

</head>



<body>

  

  <article class="login-img">

    <section class="login">

      <div class="container">

        <div class="tab-content" id="pills-tabContent">

          <div class="tab-pane fade show active" id="pills-professor" role="tabpanel" aria-labelledby="pills-professor-tab">
                  
            <!-- <form method="post" action="<?php echo base_url().'admin/reset_password/';?>"> -->
               <?php echo form_open(cms_current_url(), array('role' => 'form')) ?>
              <h2 class="text-center"><i class="fa fa-lock fa-4x"></i></h2>
              <h2 class="text-center">Change password</h2>
               <?php echo $this->session->flashdata('error_message'); ?>

           <?php echo $this->session->flashdata('success_message'); ?>

           <div class="cus_error" style="color:red; font-weight: 700; text-align: center;"><?php echo validation_errors(); ?> </div> 

              <div class="form-group row">

                <label for="inputEmail3" class="col-sm-3 col-form-label">New Password</label>

                <div class="col-sm-9">
                  
                  <input type="password" name="password" class="form-control" id="inputEmail3" placeholder="New Password">

                </div>

              </div>
              <div class="form-group row">

                <label for="inputEmail3" class="col-sm-3 col-form-label">Confirm Password</label>

                <div class="col-sm-9">
                  
                  <input type="password" name="resetpassword" class="form-control" id="inputEmail3" placeholder="Confirm Password">

                </div>

              </div>

              <div class="form-group row">

                <div class="col-sm-12 text-right">

                   <button type="submit" class="btn btn-primary">Change password</button>
                   <div style="padding-top: 30px">
                   <a href="<?= site_url('admin/login') ?>" title="Back to Login">Back to Login</a>
               </div>

                </div>

              </div>

            </form>

          </div>
      </div>
  </div>
</section>
</article>
</body>
</html>