<!DOCTYPE HTML>

<html>



<head>

  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

  <meta http-equiv="content-type" content="text/html; charset=utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>My Admissions Key</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">

</head>



<body>

  

  <article class="login-img">

    <section class="login">

      <div class="container">

        <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">

          <li class="nav-item">

            <a class="nav-link active" id="pills-professor-tab" data-toggle="pill" href="#pills-professor" role="tab" aria-controls="pills-professor" aria-selected="true">Professor</a>

          </li>

          <li class="nav-item">

            <a class="nav-link" id="pills-student-tab" data-toggle="pill" href="#pills-student" role="tab" aria-controls="pills-student" aria-selected="false">Student</a>

          </li>

          <li class="nav-item">

            <a class="nav-link" id="pills-administrator-tab" data-toggle="pill" href="#pills-administrator" role="tab" aria-controls="pills-administrator" aria-selected="false">Administrator</a>

          </li>

        </ul>

        <div class="tab-content" id="pills-tabContent">

          <div class="tab-pane fade show active" id="pills-professor" role="tabpanel" aria-labelledby="pills-professor-tab">

            <form method="post" action="<?php echo base_url().'Professor/login';?>">
               <?php echo $this->session->flashdata('error_message'); ?>

           <?php echo $this->session->flashdata('success_message'); ?>

           <div class="cus_error" style="background: #ff9833; color:#f4f4f4; font-weight: 700; text-align: center;"><?php echo validation_errors(); ?> </div> 

              <div class="form-group row" style="padding-top: 20px;">

                <label for="inputEmail3" class="col-sm-3 col-form-label">Login ID</label>

                <div class="col-sm-9">

                  <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email Id">

                </div>

              </div>

              <div class="form-group row">

                <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>

                <div class="col-sm-9">

                  <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">

                </div>

              </div>

              <div class="form-group row">

                <div class="col-sm-12 text-right">
                  <div style="padding-bottom: 20px;">
                  <a href="<?= site_url('forgot-password') ?>" title="Forgot password">Forgot password</a>
                  </div> <button type="submit" class="btn btn-primary">Login</button>

                </div>

              </div>

            </form>

          </div>

          <div class="tab-pane fade" id="pills-student" role="tabpanel" aria-labelledby="pills-student-tab">

            <form method="post" action="<?php echo base_url().'Student/login';?>">

              <div class="form-group row">

                <label for="inputEmail3" class="col-sm-3 col-form-label">Student ID</label>

                <div class="col-sm-9">

                  <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email Id">

                </div>

              </div>

              <div class="form-group row">

                <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>

                <div class="col-sm-9">

                  <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">

                </div>

              </div>

              <div class="form-group row">

                <div class="col-sm-12 text-right">

                  <div style="padding-bottom: 20px;">
                  <a href="<?= site_url('forgot-password') ?>" title="Forgot password">Forgot password</a>
                  </div> <button type="submit" class="btn btn-primary">Login</button>

                </div>

              </div>

            </form>

          </div>

          <div class="tab-pane fade" id="pills-administrator" role="tabpanel" aria-labelledby="pills-administrator-tab">

            <form  method="post" action="<?php echo base_url().'admin/login';?>">

              <div class="form-group row">

                <label for="inputEmail3" class="col-sm-3 col-form-label pl-0">Administrator ID</label>

                <div class="col-sm-9">

                  <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email Id">

                </div>

              </div>

              <div class="form-group row">

                <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>

                <div class="col-sm-9">

                  <input type="password"  name="password" class="form-control" id="inputPassword3" placeholder="Password">

                </div>

              </div>

              <div class="form-group row">

                <div class="col-sm-12 text-right">

                  <div style="padding-bottom: 20px;">
                  <a href="<?= site_url('forgot-password') ?>" title="Forgot password">Forgot password</a>
                  </div> <button type="submit" class="btn btn-primary">Login</button>

                </div>

              </div>

            </form>

          </div>

        </div>

      </div>

    </section>

    

  </article>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script language="javascript" src="<?php echo base_url('assets/js/custom.js');?>"></script>

</body>



</html>