<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
if(!$this->session->userdata['logged_in']['id'])

{
    $this->session->set_flashdata('error_message','<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="text-align:right">×</button>Please login first !</div>');

  redirect('admin');

}


 ?>



<!DOCTYPE HTML>

<html>



<head>

  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

  <meta http-equiv="content-type" content="text/html; charset=utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>My Admissions Key</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"

    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"

    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>



<body>

  <header>

    <div class="main-menu">

      <div class="container">

        <nav id="navbar" class="navbar navbar-expand-lg navbar-light">

          <h1 id="logo"><a href="<?= base_url('dashboard')?>" title=""><img src="<?php echo base_url('assets/img/company-logo.png'); ?>" alt="" title="" /></a></h1>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"

            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span

              class="navbar-toggler-icon"></span> </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto">

              <li class="nav-item <?php if($this->uri->segment(1)=='dashboard') echo "active" ?>"> <a title="" class="nav-link" href="<?php echo base_url('dashboard'); ?>">My Tasks</a> </li>

              <li class="nav-item <?php if($this->uri->segment(1)=='My-Student') echo "active" ?>"> <a title="" class="nav-link" href="<?= base_url('My-Student'); ?>">My students</a> </li>

              <li class="nav-item <?php if($this->uri->segment(1)=='My-Schedule') echo "active" ?>"> <a title="" class="nav-link" href="<?= base_url('My-Schedule'); ?>">My Schedule</a> </li>

              <li class="nav-item <?php if($this->uri->segment(1)=='Myprofile') echo "active" ?>"> <a title="" class="nav-link" href="<?= base_url('Myprofile');?>">My profile</a> </li>

              <li class="nav-item dropdown"> <a title="" class="nav-link dropdown-toggle" href="#" role="button"

                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">


                   <?php
                    $header_id=$this->session->userdata['logged_in']['id'];
                    $this->db->where('id',$header_id);
                   $header= $this->db->get('users')->result_array();
                   foreach ($header as $key => $header_data); 
                   echo $header_data['name'];

                     ?>


                     <?php
            if($header_data['profile']=='')
            {
               $str = substr ( $header_data['name'] , 0 , 1 );
               //echo "<span data-letters=".strtoupper($str)."></span>";
            } else{
            ?>
            <img class="user-img" src="<?php echo base_url('assets/images/'.$header_data['profile']); ?>" /><?php } ?> </a>

                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                  <li><a title="" class="dropdown-item" href="<?= base_url('Myprofile')?>">Profile</a></li>

                  <li><a title="" class="dropdown-item" href="<?php echo base_url('Account') ?>">My account </a></li>

                  <li><a title="" class="dropdown-item" href="<?php echo base_url('admin/logout'); ?>">Logout</a></li>

                </ul>

              </li>

            </ul>

          </div>

        </nav>

      </div>

    </div>

  </header>
  <?php echo $this->session->flashdata('error_message'); ?>

           <?php echo $this->session->flashdata('success_message'); ?>

         <!--   <div class="cus_error" style="background: #ff9833; color:#f4f4f4; font-weight: 700; text-align: center;"><?php echo validation_errors(); ?> </div> -->