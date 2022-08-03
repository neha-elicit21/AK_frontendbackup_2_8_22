<?php

  $our_packages_id=$this->uri->segment(3);

  $opid = array('our_packages_id' =>$our_packages_id);

  $OPdata=get_all_by_id('our_packages',$opid);


?>

<!DOCTYPE HTML>

<html>

   <head>

      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

      <meta http-equiv="content-type" content="text/html; charset=utf-8">

      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <title>My Admissions Key</title>



      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

      <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.css" />

      <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

      <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet' />

      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

      <link href="<?php echo base_url('assets') ?>/css/booking.css" rel="stylesheet">

      

<!-- Stripe JavaScript library -->

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>    



<script type="text/javascript">

    //set your publishable key

    Stripe.setPublishableKey('pk_test_GW5puzCJ2T4K0bAyLthXEgH600ESA2Bcxj');

    

    //callback to handle the response from stripe

    function stripeResponseHandler(status, response) {

        if (response.error) {

            //enable the submit button

            $('#payBtn').removeAttr("disabled");

            //display the errors on the form

            // $('#payment-errors').attr('hidden', 'false');

            $('#payment-errors').addClass('alert alert-danger');

            $("#payment-errors").html(response.error.message);

        } else {

            var form$ = $("#paymentFrm");

            //get token id

            var token = response['id'];

            //insert the token into the form

            form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");

            //submit form to the server

            form$.get(0).submit();

        }

    }

    $(document).ready(function() {

        //on form submit

        $("#paymentFrm").submit(function(event) {

            //disable the submit button to prevent repeated clicks

            $('#payBtn').attr("disabled", "disabled");

            

            //create single-use token to charge the user

            Stripe.createToken({

                number: $('#card_num').val(),

                cvc: $('#card-cvc').val(),

                exp_month: $('#card-expiry-month').val(),

                exp_year: $('#card-expiry-year').val()

            }, stripeResponseHandler);

            

            //submit from callback

            return false;

        });

    });

</script>

   </head>

   <body>

      <header class="booking-header">

         <div class="main-menu">

            <div class="container">

               <nav id="navbar" class="navbar navbar-expand-lg navbar-light">

                  <h1 id="logo">

                     <a href="

                        <?php echo base_url();?>" title="">

                     <img src="

                        <?php echo base_url('assets') ?>/img/company-logo.png" alt="" title="" />

                     </a>

                  </h1>

                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"

                     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                  <span

                     class="navbar-toggler-icon"></span>

                  </button>

                  <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"><ul class="navbar-nav ml-auto"><li class="nav-item active booking-menu"><a title="" class="nav-link" href="javascript:void(0)">Book  your  package</a></li><li class="nav-item"></li></ul></div> -->

                  <div class="booking-menu">

                     <a title="" class="nav-link" href="javascript:void(0)">Book your package</a>

                  </div>

                  <ul class="save-list">

                     <li style="display: none;" class="back-booking-status">

                        <a href="javascript:void(0)" title="Back" id="back-booking-status">

                        <i class="fas fa-chevron-left"></i> Back

                        </a>

                     </li>

                     <li>

                        <a href="javascript:void(0)" title="Save">Save</a>

                     </li>

                     <li>

                        <a href="javascript:void(0)" title="Next" class="next-booking-status" id="next-booking-ststus">Next 

                        <i class="fas fa-chevron-right"></i>

                        </a>

                     </li>

                  </ul>

               </nav>

            </div>

         </div>

      </header>

      <article class="pb-0">

         <div class="top-tab">

         <div class="container">

            <ul class="booking-nav nav nav-tabs nav-justified" id="myTab" role="tablist">

               <li class="nav-item">

                  <a class="nav-link active" id="considered-tab" data-toggle="tab" href="#considered" role="tab" aria-controls="considered" aria-selected="true">Considered 

                  </br>degree/schools

                  </a>

               </li>

               <li class="nav-item">

                  <a class="nav-link" id="package-tab" data-toggle="tab" href="#package" role="tab" aria-controls="package"

                     aria-selected="false">Package options 

                  </br>selection

                  </a>

               </li>

               <li class="nav-item">

                  <a class="nav-link" id="professor-tab" data-toggle="tab" href="#professor" role="tab"

                     aria-controls="professor" aria-selected="false">Professor 

                  </br>selection

                  </a>

               </li>

               <li class="nav-item">

                  <a class="nav-link" id="date-tab" data-toggle="tab" href="#date" role="tab" aria-controls="date"

                     aria-selected="false">Date and time 

                  </br>selection

                  </a>

               </li>

               <li class="nav-item">

                  <a class="nav-link" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account"

                     aria-selected="false">Account 

                  </br>creation

                  </a>

               </li>

               <li class="nav-item">

                  <a class="nav-link" id="summary-tab" data-toggle="tab" href="#summary" role="tab" aria-controls="summary"

                     aria-selected="false">Summary

                  </br> and payment

                  </a>

               </li>

            </ul>

         </div>

            <?php if (validation_errors())

            {   

            echo '<div id="validation_errors" title="Error:">';

            echo '<div class="response-msgs errors ui-corner-all"><span>Errors:</span><br /><ul>';

            echo validation_errors();

            echo '</ul></div>';

            echo '</div>';

            }
             

            ?>
 
         

         <div class="tab-content" id="myTabContent">

            <div class="tab-pane fade show active" id="considered" role="tabpanel" aria-labelledby="considered-tab">

               <section class="booking-content">

                  <div class="container">

                     <div class="page-heading">

                        <div class="container">

                           <div class="row border-0">

                              <div class="col-lg-12 col-md-12 col-sm-12 heading">

                                 <h2 class="">Choose your considered degree</h2>

                              </div>

                           </div>

                        </div>

                     </div>
                        
            <form method="post" id="paymentFrm"  enctype="multipart/form-data" action="<?=isset($user_data['id'])?(base_url()."home/auth_checkout"):(base_url()."home/checkout")?>">

    <!--      <input name="<?php //echo $this->security->get_csrf_token_name(); ?>" id="csrf_token" type="hidden" value="<?php //echo $this->security->get_csrf_hash(); ?>" /> -->
            <input type="radio" name="price_package_id" data-name="<?php echo $OPdata[0]['our_packages_name']; ?>" data-price="<?php echo $OPdata[0]['our_packages_price']; ?>" value="<?php echo $our_packages_id ?>" checked="" hidden>
            <input type="radio" name="our_packages_price" value="<?php echo $OPdata[0]['our_packages_price']; ?>" checked="" hidden>
							 <span id="err-Considered_Degree"></span>

						

                        <div class="row mb-5 pb-5">

						

                           <?php

                              foreach ($data as $key => $row) {?>

                           <div class="col-lg-3 col-md-6 col-sm-12">

                              <div class="considered-box">

                                 <h3>

                                    <?= $row['package_name'] ?>

                                 </h3>

                                 <p>

                                    <?= $row['Package_content'] ?>

                                 </p>

                                 <input type="radio" title="Select package" data-val="<?= $row['package_name'] ?>" name="considered_degree"  class="select-package-input" id="selectbsc-bs"  value="<?= $row['id'] ?>">

                                 <a  href="javascript:void(0)" title="Select package"  class="select-package-btn" id="selectbsc-bs" onclick="SubjectSelect(this.id)"><span>Select  package </span>

                                 <i class="fas fa-chevron-right"></i>

                                 </a>

                              </div>

                

                           </div>

                           <?php }?>

							

                           <!-- <div class="col-lg-3 col-md-6 col-sm-12"><div class="considered-box bg-color1"><input type="radio" id="2" name="package_name" class="selectmsc-ms" value="MS  / MSc" hidden=""><h3>MS  / MSc</h3><p>With Admissions Key you are no longer alone. Get full personalized help to ensure success.</p><a  href="javascript:void(0)" title="Select package"  class="select-package-btn" id="selectmsc-ms" onclick="SubjectSelect(this.id)">Select  package <i class="fas fa-chevron-right"></i></a></div><span style="color:red; display:none;" id="err-selectmsc-ms">Please select a school</span></div><div class="col-lg-3 col-md-6 col-sm-12"><div class="considered-box bg-color2"><input type="radio" id="3" name="package_name" value="MBA / EMBA"  class="selectEmba-mba" hidden=""><h3>MBA / EMBA</h3><p>Your story - our storytelling expertise. Most of our students get accepted into their first choice MBA / EMBA program.</p><a  href="javascript:void(0)" title="Select package"  class="select-package-btn" id="selectEmba-mba" onclick="SubjectSelect(this.id)">Select  package <i class="fas fa-chevron-right"></i></a></div><span style="color:red; display:none;" id="err-selectEmba-mba">Please select a school</span></div><div class="col-lg-3 col-md-6 col-sm-12"><div class="considered-box bg-color3"><input type="radio" id="4" name="package_name" value="PhD" class="selectphd" hidden=""><h3>PhD</h3><p>From your resume to your research proposal, we assist you every step of the way.</p><a  href="javascript:void(0)" title="Select package"  class="select-package-btn" id="selectphd" onclick="SubjectSelect(this.id)">Select  package <i class="fas fa-chevron-right"></i></a></div><span style="color:red; display:none;" id="err-selectphd">Please select a school</span></div> -->

                        </div>

                        <h2 class="pb-5">Choose your considered schools</h2>

                        <div class="row">

                           <div class="col-lg-6 col-md-8 col-sm-12">

                              <div class="form-row" style="flex-wrap: nowrap;">

                                 <div class="col-md-6 mb-5" id="schoolData1">
                                  
                                    <label class="mb-2">School</label>  

                                    <select class="form-select bg-white" name="considered_school[]" id="select-school"  onchange="SubjectSelect(this.id)" aria-label="Default select example" required="required">

                                       <option value="0">Select a school</option>

                                       <option value="University of Oxford">University of Oxford</option>

                                       <option value="University of RGPV">University of RGPV</option>

                                       <option value="University of MLWQ">University of MLWQ</option>

                                       <option value="Don't Know">Don't Know</option>

                                    </select>

                                    <label class="mt-5 mb-2">Intended major</label>

                                    <select class="form-select bg-white" name="intended_major[]" aria-label="Default select example"  id="select-major" required="required">

                                       <option  value="0">Select your major</option>

                                       <option value="Mathematics">Mathematics</option>

                                       <option value="Science">Science</option>

                                       <option value="Physics">Physics</option>

                                    </select>

                                 </div>

                                 <div class="col-md-6 mb-5" id="file-upload-wrapper">

                                    <label>Add  school</label>

                                    <div class="uplode-img plus-icon">

                                       <div class="file-upload-wrapper" >

                                          <a id="1"  class="file-upload"  data-height="500"></a>

                                          <img src="<?php echo base_url('assets') ?>/img/bg-plus.jpg">

                                       </div>

                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>

                  </div>

               </section>

            </div>


<!--start second tab-->
 <div class="tab-pane fade " id="package" role="tabpanel" aria-labelledby="package-tab">
   <section class="booking-content">
      <div class="container">
         <div class="page-heading">
            <div class="container">
               <div class="row border-0">
                  <div class="col-lg-12 col-md-12 col-sm-12 heading">
                     <h2 class="">Fixed price packages</h2>
                     <span id="err-packages"></span>
                  </div>
               </div>
            </div>
         </div>
      <div class="row row-md-20">
       <?php 

        foreach($Fixed_price_new as $row){?>
        <div class="col-lg-4 col-md-4 col-sm-12" data-aos="fade-up" data-aos-duration="1000">
          <div class="packages-box">
            <h3>
              <?php echo $row[ 'our_packages_name']?>
            
            <span>
              <span>€ <?= $row['our_packages_price']?></span>
                     
            </span></h3>
         <ul class="packages-list">
              <?php $includ=explode( '_',$row[ 'our_packages_Includes']); for($i=0;$i<count($includ);$i++){ echo "<li>".$includ[$i]. "</li>"; }?>
            </ul>

              <p style="position: relative;"> 
                  <input type="radio" name="price_package_id" class="select-package-input" data-val="<?= $row['our_packages_name'] ?>" data-price=" <?= $row['our_packages_price'] ?>" value="<?= $row['our_packages_id'] ?>" <?php if($our_packages_id==$row['our_packages_id']){ echo "checked"; } else echo "disabled"; ?>>
                  <a  href="javascript:void(0)" title="Select package"  class="select-package-btn">Select package 
                  <i class="fas fa-chevron-right"></i>
                  </a>
               </p>

          </div>
        </div>
      
        <?php } ?>
      </div> 
      <!-- .row -->
        <!--  <div class="row packages-row">
            <?php $newFix= $Fixed_price ;?>
            <input type="hidden" name="price_package_id_val" id="price_package_id_val" value="" /> 
            <?php
               $price= $OPdata[0]['our_packages_price'];
             foreach($Fixed_price as $Fixed_data) { 
              if($Fixed_data['price_package_type']==0){?>
            <div class="col-lg-3 col-md-6 col-sm-12">
               <div class="packages-box">
                  <h3>
                  <?php foreach ($our_packages_name as $key => $our_packages_name_row) {
                       echo $our_packages_name_row['our_packages_name'];
                     }
                     ?>
                     <span>
                     <?=  '€'.$price ?>
                     </span>
                  </h3>
                  <ul class="packages-list">
                     <?php $includ=explode('_',$Fixed_data['price_packages_content']); for($i=0;$i <count($includ);$i++){
                        echo "<li>".$includ[$i]."</li>"; }?>
                  </ul>
               </div>
               <div id="accordion">
                  <div class="card">
                     <div class="card-header" id="headingOne">
                     
                     </div>
                     <div id="collapse<?= $Fixed_data['price_packages_id'] ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                           <ul class="packages-radio-list">
                           <?php foreach($newFix as $ac) {
                               if( $ac['price_package_type']==1 && $ac['price_packages_id_ref']== $Fixed_data['price_packages_id'])
                                 { 
                                    //   echo $ac['price_package_type'];
                                       $includ=explode('_',$ac['price_packages_content']);
                                       $essay_price=explode('_',$ac['price_packages']);
                                       for($i=0;$i <count($includ);$i++){ ?>
                                          <li>
                                             <label class="radio"><?= $ac['price_packages_name']?>: 
                                             </br> <?= $includ[$i] ?>
                                             </br> <?=  $essay_price[$i] ?>
                                             <input type="radio" data-name="<?= $ac['price_packages_name'] ?>" data-price="<?= $ac['price_packages'] ?>" name="price_package_id" value="<?= $ac['price_packages_id'] ?>" id="<?= $i ?>" onclick="PackageRadioFn(this.id)" />
                                    
                                             <span class="checkmark"></span>
                                             
                                             </label>
                                          </li>
                                          <?php 
                                       }
                                 } 
                              }
                              ?>
                            
                           </ul>
                        </div>
                  
                     </div>
                  </div>
               </div>
               <p style="position: relative;">
                  <input type="radio" name="price_package_id" class="select-package-input" data-val="<?= $Fixed_data['price_packages_name'] ?>" data-price=" <?= $price ?>" value="<?= $Fixed_data['price_packages_id'] ?>" <?php if($our_packages_id==$Fixed_data['price_packages_id']){ echo "checked"; } else echo "disabled"; ?>>
                  <a  href="javascript:void(0)" title="Select package"  class="select-package-btn">Select package 
                  <i class="fas fa-chevron-right"></i>
                  </a>
               </p>
             
               <?php $price = $price +15 ?>
            
               
            </div>
            <?php } ?>
            <?php } ?>
           
         </div>
      </div>
   </section>
   <section class="booking-content package-card" id="package-card">
      <div class="container">
         <div class="page-heading">
            <div class="container">
               <div class="row border-0">
                  <div class="col-lg-6 col-md-12 col-sm-12 heading">
                     <h2 class="">Build your package</h2>
                  </div>
                  <div class="col-lg-3 col-md-12 col-sm-12">
                     <span title="Select package" class="select-package-btn bg-white">Package  value 
                     <i style="font-style: normal;">€<span  id="buid-package-manage">0</span></i>
                     </span>
                  </div>
                  <div class="col-lg-3 col-md-12 col-sm-12">
                     <a href="javascript:void(0)" title="Select package" class="select-package-btn">Select  package 
                     <i class="fas fa-chevron-right"></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div id="accordion">
            <div class="card">
               <div class="card-header" id="headingOne1">
                  <h5 class="mb-0">
                     <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">Essay Review 
                     <i class="fas fa-chevron-down"></i>
                     </a>
                  </h5>
               </div>
               <div id="collapseOne1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordion">
                  <div class="card-body">
                     <div class="row packages-row">
                        <?php foreach($build_your_package as $build_package) {
                            if($build_package['package_type']==1){
                           ?>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                           <div class="build-package-box essay_review_price<?=  $build_package['build_package_id'] ?>" id="build-package-box<?=  $build_package['build_package_id'] ?>">
                              <h3><?=  $build_package['essay_review_head'] ?> 
                                 <span><?=  $build_package['essay_review_word'] ?></span>
                              </h3>
                              <div class="price">€
                                  <?=  $build_package['essay_review_price'] ?>
                                 <a href="javascript:void(0)" class="plus-icon">
                                 <img src="
                                    <?php echo base_url('assets') ?>/img/plus-icon.png"/>
                                    <input type="checkbox" class="price-input" name="build_package_id[]" id="essay_review_price<?=  $build_package['build_package_id'] ?>" data-price="<?=  $build_package['essay_review_price'] ?>" onclick="BuildCheckBoxFn(this)" value="<?=  $build_package['build_package_id'] ?>">
                                 </a>
                              </div>
                           </div>
                        </div>
                        <?php } } ?>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header" id="headingTwo2">
                  <h5 class="mb-0">
                     <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">Resume Review 
                     <i class="fas fa-chevron-down"></i>
                     </a>
                  </h5>
               </div>
               <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordion">
                  <div class="card-body">
                     <div class="row packages-row">
                     <?php foreach($build_your_package as $build_package) {
                            if($build_package['package_type']==2){
                           ?>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                           <div class="build-package-box essay_review_price<?=  $build_package['build_package_id'] ?>">
                              <h3><?=  $build_package['essay_review_head'] ?> 
                                 <span><?=  $build_package['essay_review_word'] ?></span>
                              </h3>
                              <div class="price">€
                                  <?=  $build_package['essay_review_price'] ?>
                                 
                                 <a href="javascript:void(0)" class="plus-icon">
                                 <input type="checkbox" class="price-input" name="build_package_id[]" id="essay_review_price<?=  $build_package['build_package_id'] ?>" data-price="<?=  $build_package['essay_review_price'] ?>" onclick="BuildCheckBoxFn(this)" value="<?=  $build_package['build_package_id'] ?>">
                                 <img src="
                                    <?php echo base_url('assets') ?>/img/plus-icon.png"/>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <?php } } ?>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header" id="headingThree3">
                  <h5 class="mb-0">
                     <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">Recommendations  Letters 
                     <i class="fas fa-chevron-down"></i>
                     </a>
                  </h5>
               </div>
               <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3" data-parent="#accordion">
                  <div class="card-body">
                     <div class="row packages-row">
                       <?php foreach($build_your_package as $build_package) {
                            if($build_package['package_type']==3){
                           ?>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                           <div class="build-package-box essay_review_price<?=  $build_package['build_package_id'] ?>" id="build-package-box<?=  $build_package['build_package_id'] ?>">
                              <h3><?=  $build_package['essay_review_head'] ?> 
                                 <span><?=  $build_package['essay_review_word'] ?></span>
                              </h3>
                              <div class="price">
                                  <?=  '€'.$build_package['essay_review_price'] ?>
                                 <a href="javascript:void(0)" class="plus-icon">
                                 <input type="checkbox" class="price-input" name="build_package_id[]" id="essay_review_price<?=  $build_package['build_package_id'] ?>" data-price="<?=  $build_package['essay_review_price'] ?>" onclick="BuildCheckBoxFn(this)" value="<?=  $build_package['build_package_id'] ?>">
                                 <img src="
                                    <?php echo base_url('assets') ?>/img/plus-icon.png"/>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <?php } } ?>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header" id="headingThree4">
                  <h5 class="mb-0">
                     <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">MBA  Strategy  Development 
                     <i class="fas fa-chevron-down"></i>
                     </a>
                  </h5>
               </div>
               <div id="collapseThree4" class="collapse" aria-labelledby="headingThree4" data-parent="#accordion">
                  <div class="card-body">
                  <div class="row packages-row">
                       <?php foreach($build_your_package as $build_package) {
                            if($build_package['package_type']==4){
                           ?>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                           <div class="build-package-box essay_review_price<?=  $build_package['build_package_id'] ?>" id="build-package-box<?=  $build_package['build_package_id'] ?>">
                              <h3><?=  $build_package['essay_review_head'] ?> 
                                 <span><?=  $build_package['essay_review_word'] ?></span>
                              </h3>
                              <div class="price">€
                                  <?=  $build_package['essay_review_price'] ?>
                                 <a href="javascript:void(0)" class="plus-icon">
                                 <input type="checkbox" class="price-input" name="build_package_id[]" id="essay_review_price<?=  $build_package['build_package_id'] ?>" data-price="<?=  $build_package['essay_review_price'] ?>" onclick="BuildCheckBoxFn(this)" value="<?=  $build_package['build_package_id'] ?>">
                                 <img src="
                                    <?php echo base_url('assets') ?>/img/plus-icon.png"/>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <?php } } ?>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header" id="headingThree5">
                  <h5 class="mb-0">
                     <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">Career counselor advice and recommendation
                     <i class="fas fa-chevron-down"></i>
                     </a>
                  </h5>
               </div>
               <div id="collapseThree5" class="collapse" aria-labelledby="headingThree5" data-parent="#accordion">
                  <div class="card-body">
                  <div class="row packages-row">
                       <?php foreach($build_your_package as $build_package) {
                            if($build_package['package_type']==5){
                           ?>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                           <div class="build-package-box essay_review_price<?=  $build_package['build_package_id'] ?>" id="build-package-box<?=  $build_package['build_package_id'] ?>">
                              <h3><?=  $build_package['essay_review_head'] ?> 
                                 <span><?=  $build_package['essay_review_word'] ?></span>
                              </h3>
                              <div class="price">€
                                  <?=  $build_package['essay_review_price'] ?>
                                 
                                 <a href="javascript:void(0)" class="plus-icon">
                                 <input type="checkbox" name="build_package_id[]" id="essay_review_price<?=  $build_package['build_package_id'] ?>" data-price="<?=  $build_package['essay_review_price'] ?>" class="price-input" onclick="BuildCheckBoxFn(this)" value="<?=  $build_package['build_package_id'] ?>">
                                 <img src="
                                    <?php echo base_url('assets') ?>/img/plus-icon.png"/>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <?php } } ?>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header" id="headingThree6">
                  <h5 class="mb-0">
                     <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">Rejection  Strategy 
                     <i class="fas fa-chevron-down"></i>
                     </a>
                  </h5>
               </div>
               <div id="collapseThree6" class="collapse" aria-labelledby="headingThree6" data-parent="#accordion">
               <div class="row packages-row">
                       <?php foreach($build_your_package as $build_package) {
                            if($build_package['package_type']==6){
                           ?>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                           <div class="build-package-box essay_review_price<?=  $build_package['build_package_id'] ?>" id="build-package-box<?=  $build_package['build_package_id'] ?>">
                              <h3><?=  $build_package['essay_review_head'] ?> 
                                 <span><?=  $build_package['essay_review_word'] ?></span>
                              </h3>
                              <div class="price">€
                                  <?=  $build_package['essay_review_price'] ?>
                                 <a href="javascript:void(0)" class="plus-icon">
                                 <input type="checkbox" name="build_package_id[]" id="essay_review_price<?=  $build_package['build_package_id'] ?>" data-price="<?=  $build_package['essay_review_price'] ?>" class="price-input" onclick="BuildCheckBoxFn(this)" value="<?=  $build_package['build_package_id'] ?>">
                                 <img src="
                                    <?php echo base_url('assets') ?>/img/plus-icon.png"/>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <?php } } ?>
                     </div>
               </div>
            </div>
         </div> -->
   </section>
</div>
<!--end -->



   <div class="tab-pane fade " id="professor" role="tabpanel" aria-labelledby="professor-tab">

      <section class="booking-content">

         <div class="container">

            <div class="page-heading">

               <div class="container">

                  <div class="row border-0">

                     <div class="col-lg-12 col-md-12 col-sm-12 heading">

                        <h2 class="">Select your professor</h2>

                        <span id="err-professor"></span>

                     </div>

                  </div>

               </div>

            </div>

            <div class="row">

            <?php  foreach($professor as $professorData) { ?>

               <div class="col-lg-2 col-md-3 col-sm-6">

                  <div class="professor-box">

                     <!-- <h3>Lydia 

                        </br>Johns -->

                     <h3>

                        <?= $professorData['name']  ?>

                        </br>

                        <?= $professorData['last_name']  ?>

                     </h3>

                     <img src="<?php echo base_url('assets') ?>/img/<?= $professorData['profile']  ?>"/>

                     <a href="<?php echo base_url('profile/').$professorData['professor_our_experts_id'] ?>" target="_blank" title="Select package" class="select-package-btn bg-white">View profile

                     </i>

                     </a>

                     <p style="position: relative;">

                     <input type="radio" class="select-package-input" name="professor_id" value="<?= $professorData['professor_our_experts_id']  ?>" />

                     <a href="javascript:void(0)" title="Select package" class="select-package-btn">Select  professor 

                     <i class="fas fa-chevron-right"></i>

                     </a>

                     <p>

                  </div>

               </div>

               <?php } ?>

            </div>

      </section>

   </div>

   <div class="tab-pane fade " id="date" role="tabpanel" aria-labelledby="date-tab">

      <section class="booking-content">

         <!-- <div class="container"> -->

         <div class="page-heading-2">

            <div class="container">

               <div class="row border-0">

                  <div class="col-lg-7 col-md-7 col-sm-7 ">

                     <div class="row date-heading">

                        <div class="col-lg-6 col-md-6 col-sm-6">

                           <h3 class="select-date-cal">Select your date</h3>

                           <span id="err-date"></span>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 text-right">

                           <select id='time-zone-selector-1' name="package_utc">

                              <option value='local'>local</option>

                              <option value='UTC' selected>UTC</option>

                           </select>

                        </div>

                     </div>

                     <div id='calendar'></div>

                  </div>

                  <div class="col-lg-5 col-md-5 col-sm-5 heading">

                     <h3 class="">Select your Time</h3>

                     <span id="err-time"></span>

                     <h4 id="select-time-cal">NAN</h4>

                     <div class="row times-select">

                          <input type="hidden" name="package_startDate" value="" id="package_startDate">

                          <input type="hidden" name="package_startEndDate" value="" id="package_startEndDate">

                        <div class="col-lg-6 col-md-6 col-sm-6 slect-time-right">
                            <?php
                           $interval = date_interval_create_from_date_string('1 hour');
                           $begin = date_create('09:00');
                           $end = date_create('20:00')->add($interval);
                           foreach (new DatePeriod($begin, $interval, $end) as $dt) {
                               $start_time=$dt->format('H:i');
                             echo "<div><input type='radio' name='package_startTime' value='".$start_time."'> <span class='time'>".$start_time."</span></div>";
                           }
                           ?>

                 
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 slect-time-right">
                             <?php
                           $interval = date_interval_create_from_date_string('1 hour');
                           $begin = date_create('10:00');
                           $end = date_create('21:00')->add($interval);
                           foreach (new DatePeriod($begin, $interval, $end) as $dt) {
                               $end_time=$dt->format('H:i');
                             echo "<div><input type='radio' name='package_endTime' value='".$end_time."'> <span class='time'>$end_time</span></div>";
                           } ?>
                           <span clas="time">

                           <!-- <a href="javascript:void(0)" class="btn btn-primary">Proceed ></a> -->

                           <a href="javascript:void(0)" title="Select package" class="select-package-btn mt-3" id="selectbsc-bs" ><span>Proceed</span><i class="fas fa-chevron-right"></i></a>

                           </span>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

            <!-- </div> -->

      </section>

   </div>

   <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">

      <section class="booking-content">

         <div class="container">

            <div class="page-heading">

               <div class="container">

                  <div class="row border-0">

                     <div class="col-lg-12 col-md-12 col-sm-12 heading">

                        <h2 class="">Create your Admissions Key account</h2>

                     </div>

                  </div>

               </div>

            </div>

            <div class="form mt-2">

                  <div class="form-row form-account-create">

                     <div class="col-md-6 mb-5">
                            
                        <label>Email*</label>
                        <input type="hidden" name="user_id" id="user_id" value="<?=isset($this->session->userdata['logged_in']['id'])?$this->session->userdata['logged_in']['id']:'';?>" data-userId="<?=isset($this->session->userdata['logged_in']['id'])?$this->session->userdata['logged_in']['id']:'';?>">
                        <input type="text" name="email" id="email" class="form-control"  data-email="<?=isset($user_data['email'])?$user_data['email']:'';?>" value="<?=isset($user_data['email'])?$user_data['email']:'';?>" disabled>
                        <span id="email_result"></span>  
                        <span id="err-email"></span>

                     </div>

                     <div class="col-md-6 mb-5">

                        <label>Set  password*</label>

                        <input type="password" name="password" id="password" class="form-control" value="<?=isset($user_data['password'])&& !empty($user_data['password'])?('********'):('')?>"  data-password="<?=isset($user_data['password'])?$user_data['password']:'';?>" disabled>

                        <span id="err-password"></span>

                     </div>

                     <div class="col-md-6 mb-5">

                        <label>Last name*</label>

                        <input type="text"  name="lname" id="lname" value="<?=(isset($user_data['last_name']) && !empty($user_data['last_name'])?($user_data['last_name']):(''))?>" data-lname="<?=isset($user_data['last_name'])?$user_data['last_name']:'';?>" class="form-control" disabled >

                        <span id="err-lname"></span>

                     </div>

                     <div class="col-md-6 mb-5">

                        <label>First  name*</label>

                        <input type="text"  name="fname" id="fname" value="<?=isset($user_data['name'])&& !empty($user_data['name'])?($user_data['name']):('')?>" data-fname="<?=isset($user_data['name'])?$user_data['name']:'';?>" class="form-control" disabled>

                        <span id="err-fname"></span>

                     </div>

                     <div class="col-md-6 mb-5">

                        <label>Country  of  residence*</label>

                        <input type="text"  name="country_of_residence" id="country_of_residence" class="form-control" value="<?=isset($user_data['country_of_residence'])?($user_data['country_of_residence']):'';?>" data-country_of_residence="<?=isset($user_data['country_of_residence'])?$user_data['country_of_residence']:'';?>" disabled>

                        <span id="err-country_of_residence"></span>

                     </div>

                     <div class="col-md-6 mb-5">

                        <label>Phone  number</label>
                       
                        <input type="tel" name="phone_no" id="phone_no" class="form-control" value="<?=isset($user_data['mobile'])?$user_data['mobile']:'';?>" data-phone_no="<?=isset($user_data['mobile'])?$user_data['mobile']:'';?>" placeholder="+44 (0) 7123 456 789" disabled>

                        <span id="err-phone_no"></span>

                     </div>

                    <?php
                   
                      $count= count(explode(',',$user_data['Considered_School']));
                      $Considered_School=explode(',',$user_data['Considered_School']);
                      $k=1;
                      for($i=0; $i< $count; $i++)
                      {?>
                        <div class="col-md-6 mb-5">

                        <label>Your current school/university Nr. <?= $k ?></label>

                        <input type="text" name="current_school_university" id="current_school_university" class="form-control" value="<?=isset($user_data['Considered_School'])?($Considered_School[$i]):('')?>" placeholder="McGill University" data-current_school_university="<?=isset($user_data['Considered_School'])?$user_data['Considered_School']:'';?>" disabled>

                        </div>
                        <?php
                        $k++;
                      }
                  ?>

                   <div class="col-md-6 mb-5">

                        <label>Your current GPA</label>

                        <input type="text" name="current_gpa" id="current_gpa" class="form-control" value="<?=isset($user_data['Current_GPA'])?$user_data['Current_GPA']:'';?>" data-current_gpa="<?=isset($user_data['Current_GPA'])?$user_data['Current_GPA']:'';?>" placeholder="1.0">

                        <span id="err-current_gpa"></span>

                     </div>

                     <div class="col-md-6 mb-5">

                        <label>Yoru current major</label>

                        <input type="text" name="current_major" id="current_major" class="form-control" value="<?=isset($user_data['Current_Major'])?$user_data['Current_Major']:'';?>"  data-current_major="<?=isset($user_data['current_major'])?$user_data['current_major']:'';?>"placeholder="Mathematics">

                        <span id="err-current_major"></span>

                     </div>

                        <label></label>

                        <a href="javascript:void(0)" style="width: 250px; float: right;" title="Select package" class="select-package-btn">Proceed to  payment 

                        <i class="fas fa-chevron-right"></i>

                        </a>

                     </div>

                  </div>

            </div>

         </div>

      </section>

   </div>

   <div class="tab-pane fade" id="summary" role="tabpanel" aria-labelledby="summary-tab">

         <section class="booking-content">

            <div class="container">

               <div class="row ">

                  <div class="col-lg-6 col-md-12 col-sm-12">

                     <h2>Your information</h2>

                     <ul class="list-information">

                        <li>

                           <span>Last name</span> <span id="lname_v"></span>

                        </li>

                        <li>

                           <span>First name</span> <span id="fname_v"></span>

                        </li>

                        <li>

                           <span>Country of residence</span><span id="country_of_residence_v"></span>

                        </li>

                        <li>

                           <span>Phone number</span><span id="phone_no_v"></span>

                        </li>

                        <li>

                           <span>Degree  considered</span> <span id="considered_degree_v"></span>

                        </li>

                        <li>

                           <span>School(s) considered</span><span id="current_school_university_v"></span>

                        </li>

                        <li>

                           <span>Intended  major</span> <span id="intended_major_v"></span>

                        </li>

                     </ul>

                     <h2>Selected package</h2>

                     <div class="selected-package">

                        <h3><span id="considered_degree_vi"></span>

                           </br> <span id="price_packages_name_v"></span>

                           €<span id="price_packages_v"></span>

                           <input type="hidden" name="itemPrice" id="itemPrice" value="">

                           <input type="hidden" name="itemName" id="itemName" value="">

                        </h3>

                        <a href="<?php echo base_url('interview-preparation');?>" title="Select package" class="select-package-btn">Change  package 

                        <i class="fas fa-chevron-right"></i>

                        </a>

                     </div>

                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12 payment-col">

                     <h2>Payment information</h2>

                     <?php if (validation_errors()): ?>

                        <div class="alert alert-danger" role="alert">

                            <strong>Oops!</strong>

                            <?php echo validation_errors() ;?> 

                        </div>  

                    <?php endif ?>

                    <div id="payment-errors"></div> 

                     <div class="form-row mb-5">

                        <div class="col-md-12 mb-2">

                           <label class="mb-1">Card  information</label>

                           <input type="number" name="card_num" id="card_num" class="form-control" placeholder="Card Number" autocomplete="off" value="<?php echo set_value('card_num'); ?>" required>

                        </div>

                        <div class="col-md-4">

                      <input type="text" name="exp_month" maxlength="2" class="form-control" id="card-expiry-month" placeholder="MM" value="<?php echo set_value('exp_month'); ?>" required>

                      </div>

                      <div class="col-md-4">

                      <input type="text" name="exp_year" class="form-control" maxlength="4" id="card-expiry-year" placeholder="YY" required="" value="<?php echo set_value('exp_year'); ?>">

                      </div>

                      <div class="col-sm-4">

                        <input type="text" name="cvv" id="card-cvc" maxlength="3" class="form-control" autocomplete="off" placeholder="CVV" value="<?php echo set_value('cvc'); ?>" required>

                     </div>

                     </div>

                     <div class="form-row mb-5">

                        <div class="col-md-12 mb-2">

                           <label class="mb-1">Name  on  card</label>

                           <input type="text" name="card_name" id="card_name" class="form-control" placeholder="Card Name" autocomplete="off" value="<?php echo set_value('card_name'); ?>" required>

                        </div>

                     </div>

                     <div class="form-row mb-4">

                        <div class="col-md-6 mb-2">

                           <label class="mb-1">Country or  region</label>

                           <select class="form-select bg-white" name="region" aria-label="Default select example">

                              <option selected="" value="United Kingdom">United Kingdom</option>

                              <option value="United Kingdom 1">United Kingdom 1</option>

                              <option value="United Kingdom 2">United Kingdom 2</option>

                           </select>

                           <ul class="country-btn-list">

                             <!--  <li>

                                 <input type="radio" class="select-package-input" name="installment" value="Pay in  30  days ">

                                 <a href="javascript:void(0)" title="Select package" class="select-package-btn">Pay in  30  days 

                                 <i class="fas fa-chevron-right"></i>

                                 </a>

                              </li> -->
                               <li>

                                 <input type="radio" class="select-package-input" name="installment" value="full_payment">

                                 <a href="javascript:void(0)" title="Select package" class="select-package-btn">Full Payment

                                 <i class="fas fa-chevron-right"></i>

                                 </a>

                              </li> 

                              <li>


                              <li>

                                 <input type="radio" class="select-package-input" name="installment" value="Pay_in_4_installments">

                                 <a href="javascript:void(0)" title="Select package" class="select-package-btn">Pay in  4 installments 

                                 <i class="fas fa-chevron-right"></i>

                                 </a>

                              </li>
                              
                               <li>

                                 <input type="radio" class="select-package-input" name="installment" value="2_installments_Every_2_Weeks">

                                 <a href="javascript:void(0)" title="Select package" class="select-package-btn">Pay In 2 installments Every 2 Weeks

                                 <i class="fas fa-chevron-right"></i>

                                 </a>

                              </li>

                           <!--    <li>

                                 <input type="radio" class="select-package-input" name="installment" value="Monthly financing">

                                 <a href="javascript:void(0)" title="Select package" class="select-package-btn">Monthly financing 

                                 <i class="fas fa-chevron-right"></i>

                                 </a>

                              </li> -->

                           </ul>

                        </div>

                        <div class="col-md-6 mb-2">

                           <label class="mb-1"></label>

                           <input type="text" name="post_code" class="form-control" placeholder="Post code" required>

                           <p>

                              <!-- <a href="javascript:void(0)" title="Select package" class="select-package-btn mt-4">Make  full  payment 

                              <i class="fas fa-chevron-right"></i>

                              </a> -->

                               <button type="submit"  id="payBtn" class="select-package-btn mt-4" style="z-index:999; text-align: left; text-transform: none;">Make  full  payment <i class="fas fa-chevron-right"></i></button>

                           </p>

                           <label class="mb-3">Add a voucher code</label>

                           <input type="text" name="voucher_code" class="form-control" placeholder="voucher code" required>

                        </div>

                     </div>

                     <div class="payment-radio">

                        <label class="radio">Sign up  to  the Admissions  Key newsletter

                        <input type="radio" name="acceptTC" value="0" checked="checked">

                        <span class="checkmark"></span>

                        </label>

                        <label class="radio">Agree  to  our 

                        <u>terms  and conditions</u>

                        <input type="radio" name="acceptTC" checked="checked" value="1">

                        <span class="checkmark"></span>

                        </label>

                        <p>

                        <!-- <button type="submit"  id="payBtn" class="btn btn-success" style="z-index:999;">Make  full  payment</button> -->

                              <!-- <i class="fas fa-chevron-right"></i> -->

                           </p>

                     </div>

                  </div>

               </div>

            </div>

         </section>
   
</form>       

         <!-- <section class="booking-content payment-successfully">

            <div class="container">

               <h5>Your  payment has been  processed successfully!</h5>

               <h5 class="text-dark">Thank you for choosing  Admisssions Key</h5>

               <p>We are glad that you have chosen to become part of our community of high achievers who are

                  </br>

                  regularly admitted into the world’s elite and most competitive university progams.

               </p>

               <p>Email confirmation of your order is on it’s way and you will be contacted shortly by your

                  </br>

                  selected expert.

               </p>

               <p>

                  <button href="javascript:void(0)" title="Select package" class="select-package-btn mt-5" style="width: 260px;">Return  to  website 

                  <i class="fas fa-chevron-right"></i>

                  </button>

               </p>

            </div>

         </section> -->

      </div>

   </div>

</div>

</div>

</article>

<footer>

	<div class="container">

	   <div class="copyright">&copy; Admissions Key 2021</div>

	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"

    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"

    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"

    crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"

    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"

    crossorigin="anonymous"></script>

	<script language="javascript" src="<?php echo base_url('assets') ?>/js/custom.js"></script>

    <script language="javascript" src="<?php echo base_url('front/assets/js/auth_interview_preprations_booking.js') ?>"></script>

 </footer>

   </body>

</html>

<script type = "text/javascript" >

   document.addEventListener('DOMContentLoaded', function () {

   var calendarEl = document.getElementById('calendar');

   var timeZoneSelectorEl = document.getElementById('time-zone-selector-1');

   var initialTimeZone = 'local';

   var calendar = new FullCalendar.Calendar(calendarEl, {

   selectable: true,

   selectAllow: function(select) {
      return moment().diff(select.start, 'days') <= 0
   },

   timeZone: initialTimeZone,

   headerToolbar: {

   left: 'title',

   center: '',

   right: ''

   },

   //   dateClick: function (info) {

   //     alert('clicked ' + info.dateStr);

   //   },

   select: function (info) {

   var titlEventModal =moment(info.startStr).format("dddd Do MMMM  YYYY") ;

    $("#select-time-cal").html(titlEventModal);

    $("#package_startDate").val(info.startStr);

    $("#package_startEndDate").val(info.endStr);

   // alert('selected ' + info.startStr + ' to ' + info.endStr +'hiiiiii'+titlEventModal);

   

   }

   });

   FullCalendar.requestJson('GET', '<?php echo base_url("home/Timezones") ?>', {}, function(

   timeZones) {

   

   timeZones.forEach(function(timeZone) {

   var optionEl;

   

   if (timeZone !== 'UTC') { // UTC is already in the list

   optionEl = document.createElement('option');

   optionEl.value = timeZone;

   optionEl.innerText = timeZone;

   timeZoneSelectorEl.appendChild(optionEl);

   }

   });

   }, function() {

   // TODO: handle error

   });

   timeZoneSelectorEl.addEventListener('change', function() {

   calendar.setOption('timeZone', this.value);

   });		


   setInterval(function(){

   calendar.render();

   }) }, 1000)


   $(document).ready(function(){  
      $('#email').change(function(){  
           var email = $('#email').val();  
           if(email != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>admin/check_email_avalibility",  
                     method:"POST",  
                     data:{email:email},  
                     success:function(data){  
                          $('#email_result').html(data);  
                        // console.log(data); 
                     }  
                });  
           }  
      });  
 });


</script>
