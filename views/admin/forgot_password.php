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
  <style rel="stylesheet">
    .login .container
    {
      padding: 0px 0px 1px;
    }
  </style>

</head>



<body>

  

  <article class="login-img">

    <section class="login">

      <div class="container">

        <div class="tab-content" id="pills-tabContent">

          <div class="tab-pane fade show active" id="pills-professor" role="tabpanel" aria-labelledby="pills-professor-tab">
                  
            <form method="post" action="<?php echo base_url().'forgot-password';?>">
            	<h2 class="text-center" style="padding-top: 20px;"><i class="fa fa-lock fa-4x"></i></h2>
            	<h2 class="text-center">Forgot Password ?</h2>
               <?php echo $this->session->flashdata('error_message'); ?>

           <?php echo $this->session->flashdata('success_message'); ?>

           <div class="cus_error" style="color:red; font-weight: 700; text-align: center;"><?php echo validation_errors(); ?> </div> 

              <div class="form-group row">

                <label for="inputEmail3" class="col-sm-3 col-form-label">Email ID</label>

                <div class="col-sm-9">
                  
                  <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email Id">

                </div>

              </div>

              <div class="form-group row">

                <div class="col-sm-12 text-right">

                   <button type="submit" class="btn btn-primary">Reset Password</button>
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

<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <style type="text/css">
 	.form-gap {
    padding-top: 70px;
}
.cus_error
{
	color: red;
}

 </style>
 <div class="form-gap"></div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">
    
                     <form class="card mt-4" method="post" action="<?php echo base_url().'forgot-password';?>"><?php echo $this->session->flashdata('error_message'); ?>
                    <?php echo $this->session->flashdata('success_message'); ?>
                     <div class="cus_error"><?php echo validation_errors(); ?> </div>
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="email" name="email" placeholder="email address" class="form-control"  type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                      </div>
                      <a class="btn btn-danger" href="<?= site_url('admin/login')?>">Back to Login</a>
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>
 -->

<!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?= site_url() ?>assets/css/forgot_style.css">

	<div class="container padding-bottom-3x mb-2 mt-5">
	    <div class="row justify-content-center">
	        <div class="col-lg-8 col-md-10">
	            <div class="forgot">
	                <h2>Forgot your password?</h2>
	                <p>Change your password in three easy steps. This will help you to secure your password!</p>
	                <ol class="list-unstyled">
	                    <li><span class="text-primary text-medium">1. </span>Enter your email address below.</li>
	                    <li><span class="text-primary text-medium">2. </span>Our system will send you a temporary link</li>
	                    <li><span class="text-primary text-medium">3. </span>Use the link to reset your password</li>
	                </ol>
	            </div>
	            <form class="card mt-4" method="post" action="<?php echo base_url().'forgot-password';?>"><?php echo $this->session->flashdata('error_message'); ?>
                    <?php echo $this->session->flashdata('success_message'); ?>
                     <div class="cus_error"><?php echo validation_errors(); ?> </div> 
	                <div class="card-body">
	                    <div class="form-group"> <label for="email-for-pass">Enter your email address</label> <input class="form-control" type="email" name="email" id="email-for-pass" required="" placeholder="Your Email"><small class="form-text text-muted">Enter the email address you used during the registration on fullstackservice.in/AdmissionsKey. Then we'll email a link to this address.</small> </div>
	                </div>
	                <div class="card-footer"> <button class="btn btn-success" type="submit">Get New Password</button> <a class="btn btn-danger" href="<?= site_url('admin/login')?>">Back to Login</a> </div>
	            </form>
	        </div>
	    </div>
	</div> -->