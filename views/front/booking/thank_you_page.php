<style>
  label.error_style {
    margin-top: 5px;
    font-size: 14px;
    line-height: 18px;
    font-weight: normal;
    color: #f00;
}
.back_btn{
  margin-top: 20px; color: #fff !important;
}
a.btn.back_btn:hover {
    background-color: white;
    color: #FF9833 !important;
    border: 2px solid;
}
   
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo base_url('front/assets/js/form_validation_ak.js') ?>"></script>
<div id="maincontent" role="main">
   <div class="wrapper wrapper-content" id="wrapper-ContactForm">
      <div class="container" style="min-height: 500px; text-align: center;">
      <a href="<?=base_url('home');?>" class="btn back_btn" style="margin-top: 20px; color: #fff !important;"> Back</a>

          <?php if($this->session->flashdata('success_message')){ ?>
            <div class="alert alert-success" role="alert" style="margin-top: 25px; text-align: center;">
              <h3><?php echo $this->session->flashdata('success_message');  ?></h3>
          </div>
         <?php } ?>
         <br>
     <!--     <p style="max-width: 485px;" class="animation-scroll animation-fade">We’re delighted you have chosen to book a free consultation. Please fill in the form below and we will get right back to you</p> -->
      </div>
   </div>
</div>

