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

            <form method="post" id="paymentFrm"  enctype="multipart/form-data" action="<?php echo base_url(); ?>home/checkout">

    <!--      <input name="<?php //echo $this->security->get_csrf_token_name(); ?>" id="csrf_token" type="hidden" value="<?php //echo $this->security->get_csrf_hash(); ?>" /> -->
            <input type="radio" name="price_package_id" data-name="<?php echo $OPdata[0]['our_packages_name']; ?>" data-price="<?php echo $OPdata[0]['our_packages_price']; ?>" value="<?php echo $our_packages_id ?>" checked="" hidden>
            <input type="radio" name="our_packages_price" value="<?php echo $OPdata[0]['our_packages_id']; ?>" checked="" hidden>
							 <span id="err-Considered_Degree"></span>

						

                        <div class="row mb-5 pb-5">

						

                           <?php
                           $count=0;

                              foreach ($data as $key => $row) {?>

                           <div class="col-lg-3 col-md-6 col-sm-12">

                              <div class="considered-box">

                                 <h3>

                                    <?= $row['package_name'] ?>

                                 </h3>

                               <!--   <p>
                                    <?= $row['Package_content'] ?>
                                 </p> -->

                                 <input type="radio" title="Select package" data-val="<?= $row['package_name'] ?>" name="considered_degree"  class="select-package-input" id="selectbsc-bs<?php echo $count;?>"  value="<?= $row['id'] ?>">


                                 <a  href="javascript:void(0)" title="Select package"  class="select-package-btn" id="selectbsc-bs" onclick="SubjectSelect(this.id)">
                                
                                 <span class="select-span" id="selectbsc-bs <?php echo $count;?>">Select  Degree </span>
                                 
                                 <i class="fas fa-chevron-right"></i>

                                 </a>

                              </div>

                

                           </div>


                           <?php 
                           $count++; 

                            }?>

							

                           <!-- <div class="col-lg-3 col-md-6 col-sm-12"><div class="considered-box bg-color1"><input type="radio" id="2" name="package_name" class="selectmsc-ms" value="MS  / MSc" hidden=""><h3>MS  / MSc</h3><p>With Admissions Key you are no longer alone. Get full personalized help to ensure success.</p><a  href="javascript:void(0)" title="Select package"  class="select-package-btn" id="selectmsc-ms" onclick="SubjectSelect(this.id)">Select  package <i class="fas fa-chevron-right"></i></a></div><span style="color:red; display:none;" id="err-selectmsc-ms">Please select a school</span></div><div class="col-lg-3 col-md-6 col-sm-12"><div class="considered-box bg-color2"><input type="radio" id="3" name="package_name" value="MBA / EMBA"  class="selectEmba-mba" hidden=""><h3>MBA / EMBA</h3><p>Your story - our storytelling expertise. Most of our students get accepted into their first choice MBA / EMBA program.</p><a  href="javascript:void(0)" title="Select package"  class="select-package-btn" id="selectEmba-mba" onclick="SubjectSelect(this.id)">Select  package <i class="fas fa-chevron-right"></i></a></div><span style="color:red; display:none;" id="err-selectEmba-mba">Please select a school</span></div><div class="col-lg-3 col-md-6 col-sm-12"><div class="considered-box bg-color3"><input type="radio" id="4" name="package_name" value="PhD" class="selectphd" hidden=""><h3>PhD</h3><p>From your resume to your research proposal, we assist you every step of the way.</p><a  href="javascript:void(0)" title="Select package"  class="select-package-btn" id="selectphd" onclick="SubjectSelect(this.id)">Select  package <i class="fas fa-chevron-right"></i></a></div><span style="color:red; display:none;" id="err-selectphd">Please select a school</span></div> -->

                        </div>

                        <h2 class="pb-5">Choose your considered schools</h2>

                        <div class="row">

                           <div class="col-lg-6 col-md-8 col-sm-12">

                              <div class="form-row flex-wrap-box" style="flex-wrap: nowrap;">

                                 <div class="col-md-6 mb-5" id="schoolData1">
                                  
                                    <label class="mb-2">School</label>  
                                    
                                    <select class="form-select bg-white" name="considered_school[]" id="select-school"  onchange="SubjectSelect(this.id)" aria-label="Default select example" required="required">

                                       <!-- <option value="0">Select a school</option> -->
                                       
                                       <option id="0" selected>Select a school</option>
                                       <option id="1" class="sortMe" value="Massachusetts Institute of Technology">Massachusetts Institute of Technology</option>
                                       <option id="2" class="sortMe" value="Harvard University">Harvard University</option>
                                       <option id="3" class="sortMe" value="Stanford University">Stanford University</option>
                                       <option class="sortMe" value="Cornell University">Cornell University</option>
                                       <option class="sortMe" value="University of California, Berkeley">University of California, Berkeley</option>
                                       <option class="sortMe" value="Columbia University in the City of New York">Columbia University in the City of New York</option>
                                       <option class="sortMe" value="University of Michigan">University of Michigan</option>
                                       <option class="sortMe" value="Columbia University in the City of New York">Columbia University in the City of New York</option>
                                       <option class="sortMe" value="University of Michigan">University of Michigan</option>
                                       <option class="sortMe" value="University of Washington">University of Washington</option>
                                       <option class="sortMe" value="University of Pennsylvania">University of Pennsylvania</option>
                                       <option class="sortMe" value="University of Minnesota-Twin Cities">University of Minnesota-Twin Cities</option>
                                       <option class="sortMe" value="Yale University">Yale University</option>
                                          <option class="sortMe" value="University of California, Los Angeles">University of California, Los Angeles</option>
                                          <option class="sortMe" value="Johns Hopkins University">Johns Hopkins University</option>
                                          <option class="sortMe" value="The University of Texas at Austin">The University of Texas at Austin </option>
                                          <option class="sortMe" value="University of Oxford">University of Oxford</option>
                                          <option class="sortMe" value="New York University">New York University</option>
                                          <option class="sortMe" value="University of Wisconsin-Madison">University of Wisconsin-Madison</option>
                                          <option class="sortMe" value="Purdue University">Purdue University</option>

                                          <option class="sortMe" value="Princeton University">Princeton University</option>
                                          <option class="sortMe" value="Carnegie Mellon University">Carnegie Mellon University</option>
                                          <option class="sortMe" value="University of Southern California">University of Southern California</option>
                                          <option class="sortMe" value="University of Chicago">University of Chicago</option>
                                          <option class="sortMe" value="University of Cambridge">University of Cambridge</option>
                                          <option class="sortMe" value="University of Toronto">University of Toronto</option>
                                          <option class="sortMe" value="The University of British Columbia">The University of British Columbia</option>
                                          <option class="sortMe" value="Arizona State University">Arizona State University</option>
                                          <option class="sortMe" value="University of Florida">University of Florida</option>

                                          
                                        <option class="sortMe" value="Michigan State University">Michigan State University</option>
                                        <option class="sortMe" value="University of California, San Diego">University of California, San Diego</option>
                                        <option class="sortMe" value="University of Illinois at Urbana-Champaign">University of Illinois at Urbana-Champaign</option>
                                        <option class="sortMe" value="University of North Carolina at Chapel Hill">University of North Carolina at Chapel Hill</option>
                                        <option class="sortMe" value="Duke University">Duke University</option>
                                        <option class="sortMe" value="Northwestern University">Northwestern University</option>
                                        <option class="sortMe" value="University of California, Davis">University of California, Davis</option>
                                        <option class="sortMe" value="Boston University">Boston University</option>
                                        <option class="sortMe" value="University of Maryland">University of Maryland</option>
                                        <option class="sortMe" value="Rutgers, The State University of New Jersey">Rutgers, The State University of New Jersey</option>

                                          <option class="sortMe" value="University of California, Irvine">University of California, Irvine</option>
                                          <option class="sortMe" value="The University of Arizona">The University of Arizona</option>
                                          <option class="sortMe" value="Texas A&M University">Texas A&M University</option>
                                          <option class="sortMe" value="The University of Utah">The University of Utah</option>
                                          <option class="sortMe" value="University of Virginia">University of Virginia</option>
                                          <option class="sortMe" value="University College London">University College London</option>
                                          <option class="sortMe" value="The Ohio State University">The Ohio State University</option>
                                          <option class="sortMe" value="University of Colorado Boulder">University of Colorado Boulder</option>
                                          <option class="sortMe" value="North Carolina State University">North Carolina State University</option>
                                          <option class="sortMe" value="Simon Fraser University">Simon Fraser University</option>
                                          <option class="sortMe" value="Georgia Institute of Technology">Georgia Institute of Technology
                                          <option class="sortMe" value="The University of Melbourne">The University of Melbourne</option>
                                          <option class="sortMe" value="The University of Edinburgh">The University of Edinburgh</option>
                                          <option class="sortMe" value="University of Pittsburgh">University of Pittsburgh</option>
                                          <option class="sortMe" value="McGill University">McGill University</option>
                                          <option class="sortMe" value="University of Waterloo">University of Waterloo</option>
                                          <option class="sortMe" value="Monash University">Monash University</option>
                                          <option class="sortMe" value="Indiana University Bloomington">Indiana University Bloomington</option>
                                          <option class="sortMe" value="California Institute of Technology">California Institute of Technology</option>
                                          <option class="sortMe" value="Washington University in St. Louis">Washington University in St. Louis</option>
                                           <option class="sortMe" value="University of California, Santa Barbara">University of California, Santa Barbara</option>
                                           <option class="sortMe" value="The University of Sydney">The University of Sydney</option>
                                           <option class="sortMe" value="Georgetown University">Georgetown University</option>
                                           <option class="sortMe" value="Tufts University">Tufts University</option>
                                           <option class="sortMe" value="University of Nebraska-Lincoln">University of Nebraska-Lincoln</option>
                                           <option class="sortMe" value="Virginia Polytechnic Institute and State University">Virginia Polytechnic Institute and State University</option>
                                           <option class="sortMe" value="Florida State University">Florida State University</option>
                                           <option class="sortMe" value="The University of New South Wales">The University of New South Wales</option>
                                           <option class="sortMe" value="University of South Florida">University of South Florida</option>
                                           <option class="sortMe" value="Oregon State University">Oregon State University</option>
                                        <option class="sortMe" value="University of Massachusetts Amherst">University of Massachusetts Amherst</option>
                                        <option class="sortMe" value="University of Georgia">University of Georgia</option>
                                        <option class="sortMe" value="University of Glasgow">University of Glasgow</option>
                                        <option class="sortMe" value="Brown University">Brown University</option>
                                        <option class="sortMe" alue="Iowa State University">Iowa State University</option>
                                        <option class="sortMe" value="Brigham Young University">Brigham Young University</option>
                                        <option class="sortMe" value="University of Rochester">University of Rochester</option>
                                        <option class="sortMe" value="University of Iowa">University of Iowa</option>
                                        <option class="sortMe" value="University of California, Riverside">University of California, Riverside</option>
                                        <option class="sortMe" value="Washington State University">Washington State University</option>
                                        <option class="sortMe" value="University of Delaware">University of Delaware</option>
                                       <option class="sortMe" value="The University of Queensland">The University of Queensland</option>
                                       <option class="sortMe" value="Georgia State University">Georgia State University</option>
                                       <option class="sortMe" value="William Marsh Rice University">William Marsh Rice University</option>
                                       <option class="sortMe" value="University at Buffalo, State University of New York">University at Buffalo, State University of New York</option>
                                       <option class="sortMe" value="Dartmouth College">Dartmouth College</option>
                                       <option class="sortMe" value="The University of Manchester">The University of Manchester</option>
                                       <option class="sortMe" value="York University">York University</option>
                                       <option class="sortMe" value="George Washington University">George Washington University</option>
                                       <option class="sortMe" value="Vanderbilt University">Vanderbilt University</option>

                                          <option class="sortMe" value="National University of Singapore">National University of Singapore</option>
                                          <option class="sortMe" value="Syracuse University">Syracuse University</option>
                                          <option class="sortMe" value="Colorado State University">Colorado State University</option>
                                          <option class="sortMe" value="University of Houston">University of Houston</option>
                                          <option class="sortMe" value="Australian National University">Australian National University</option>
                                          <option class="sortMe" value="University of Alberta">University of Alberta</option>
                                          <option class="sortMe" value="The London School of Economics and Political Science">The London School of Economics and Political Science</option>
                                          <option class="sortMe" value="George Mason University">George Mason University</option>
                                          <option class="sortMe" value="University of Oregon">University of Oregon</option>
                                          <option class="sortMe" value="University of California, Santa Cruz">University of California, Santa Cruz</option>
                                          <option class="sortMe" value="University of Illinois at Chicago">University of Illinois at Chicago</option>
                                          <option class="sortMe" value="University of California, San Francisco">University of California, San Francisco</option>
                                          <option class="sortMe" value="University of Notre Dame">University of Notre Dame</option>
                                          <option class="sortMe" value="University of Connecticut">University of Connecticut</option>
                                          <option class="sortMe" value="Imperial College London">Imperial College London</option>
                                          <option class="sortMe" value="Emory University">Emory University</option>
                                          <option class="sortMe" value="Temple University">Temple University</option>
                                          <option class="sortMe" value="Northeastern University">Northeastern University</option>
                                          <option class="sortMe" value="University of Missouri">University of Missouri</option>
                                          <option class="sortMe" value="University of Calgary">University of Calgary</option>
                                          <option class="sortMe" value="University of Central Florida">University of Central Florida</option>
                                           <option class="sortMe" value="University of Kansas">University of Kansas</option>
                                           <option class="sortMe" value="University of Victoria">University of Victoria</option>
                                           <option class="sortMe" value="University of Kentucky">University of Kentucky</option>
                                           <option class="sortMe" value="Florida International University">Florida International University</option>
                                           <option class="sortMe" value="University of New Mexico">University of New Mexico</option>
                                           <option class="sortMe" value="Université de Montréal">Université de Montréal</option>
                                           <option class="sortMe" value="Drexel University">Drexel University</option>
                                           <option class="sortMe" value="The University of Warwick">The University of Warwick</option>
                                           <option class="sortMe" value="University of Cape Town">University of Cape Town</option>

                                           <option class="sortMe" value="Queen's University">Queen's University</option>
                                           <option class="sortMe" value="The University of Tennessee, Knoxville">The University of Tennessee, Knoxville</option>
                                           <option class="sortMe" value="The University of Adelaide">The University of Adelaide</option>
                                           <option class="sortMe" value="University of Leeds">University of Leeds</option>
                                           <option class="sortMe" value="University of Southampton">University of Southampton</option>
                                           <option class="sortMe" value="Rochester Institute of Technology">Rochester Institute of Technology</option>
                                           <option class="sortMe" value="McMaster University">McMaster University</option>
                                           <option class="sortMe" value="Nanyang Technological University">Nanyang Technological University</option>
                                           <option class="sortMe" value="University of Miami">University of Miami</option>
                                           <option class="sortMe" value="Louisiana State University">Louisiana State University</option>

                                          <option class="sortMe" value="University of St Andrews">University of St Andrews</option>
                                          <option class="sortMe" value="Western University">Western University</option>
                                          <option class="sortMe" value="The University of Alabama">The University of Alabama</option>
                                          <option class="sortMe" value="San Diego State University">San Diego State University</option>
                                          <option class="sortMe" value="RMIT University">RMIT University</option>
                                          <option class="sortMe" value="University of Auckland">University of Auckland</option>
                                          <option class="sortMe" value="American University">American University</option>
                                          <option class="sortMe" value="University of Birmingham">University of Birmingham</option>
                                          <option class="sortMe" value="Boston College">Boston College</option>
                                          <option class="sortMe" value="Carleton University">Carleton University</option>
                                          <option class="sortMe" value="">Fordham University</option>
                           <option class="sortMe" value="King's College London">King's College London</option>
                           <option class="sortMe" value="The University of Oklahoma">The University of Oklahoma</option>
                           <option class="sortMe" value="Trinity College Dublin, University of Dublin">Trinity College Dublin, University of Dublin</option>
                           <option class="sortMe" value="Newcastle University">Newcastle University</option>
                           <option class="sortMe" value="University of Vermont">University of Vermont</option>
                           <option class="sortMe" value="University of Liverpool">University of Liverpool</option>
                           <option class="sortMe" value="The University of Tennessee at Martin">The University of Tennessee at Martin</option>
                           <option class="sortMe" value="University of New Hampshire">University of New Hampshire</option>
                           <option class="sortMe" value="Université Laval">Université Laval</option>
                           <option class="sortMe" value="Clemson University">Clemson University</option>
                           <option class="sortMe" value="The University of York">The University of York</option>
                           <option class="sortMe" value="University of Cincinnati">University of Cincinnati</option>
                           <option class="sortMe" value="University of North Texas">University of North Texas</option>
                           <option class="sortMe" value="Ryerson University">Ryerson University</option>
                           <option class="sortMe" value="University of South Carolina">University of South Carolina</option>
                           <option class="sortMe" value="Southern Methodist University">Southern Methodist University</option>
                           <option class="sortMe" value="California State University, Northridge">California State University, Northridge</option>
                           <option class="sortMe" value="The University of Nottingham">The University of Nottingham</option>
                           <option class="sortMe" value="San José State University">San José State University</option>
                           <option class="sortMe" value="Utah State University">Utah State University</option>
                           <option class="sortMe" value="Case Western Reserve University">Case Western Reserve University</option>
                           <option class="sortMe" value="University of Pretoria">University of Pretoria</option>
                           <option class="sortMe" value="Virginia Commonwealth University">Virginia Commonwealth University</option>
                           <option class="sortMe" value="Deakin University">Deakin University</option>
                           <option class="sortMe" value="University of Exeter">University of Exeter</option>
                           <option class="sortMe" value="University of Bristol">University of Bristol</option>
                           <option class="sortMe" value="The University of Sheffield">The University of Sheffield</option>
                           <option class="sortMe" value="San Francisco State University">San Francisco State University</option>
                           <option class="sortMe" value="Baylor University">Baylor University</option>
                             <option class="sortMe" value="Lancaster University">Lancaster University</option>
                             <option class="sortMe" value="Concordia University">Concordia University</option>
                             <option class="sortMe" value="Queen Mary University of London">Queen Mary University of London</option>
                             <option class="sortMe" value="Queensland University of Technology">Queensland University of Technology</option>
                             <option class="sortMe" value="Curtin University">Curtin University</option>
                             <option class="sortMe" value="Macquarie University">Macquarie University</option>
                             <option class="sortMe" value="Oklahoma State University">Oklahoma State University</option>
                             <option class="sortMe" value="Auburn University">Auburn University</option>
                             <option class="sortMe" value="West Virginia University">West Virginia University</option>
                             <option class="sortMe" value="University of the Witwatersrand">University of the Witwatersrand</option>
                             <option class="sortMe" value="Rensselaer Polytechnic Institute">Rensselaer Polytechnic Institute</option>
                             <option class="sortMe" value="University of Alabama at Birmingham">University of Alabama at Birmingham</option>
                             <option class="sortMe" value="Durham University">Durham University</option>
                             <option class="sortMe" value="University of Guelph">University of Guelph</option>
                             <option class="sortMe" value="Dalhousie University">Dalhousie University</option>
                             <option class="sortMe" value="Texas Tech University">Texas Tech University</option>
                             <option class="sortMe" value="Cardiff University">Cardiff University</option>
                             <option class="sortMe" value="University of Manitoba">University of Manitoba</option>
                             <option class="sortMe" value="University of Bath">University of Bath</option>
                             <option class="sortMe" value="Florida Atlantic University">Florida Atlantic University</option>
                             <option class="sortMe" value="Portland State University">Portland State University</option>
                             <option class="sortMe" value="College of William & Mary">College of William & Mary</option>
                             <option class="sortMe" value="University of East Anglia">University of East Anglia</option>
                             <option class="sortMe" value="University of Saskatchewan">University of Saskatchewan</option>
                             <option class="sortMe" value="Tulane University">Tulane University</option>
                             <option class="sortMe" value="Stony Brook University">Stony Brook University</option>
                             <option class="sortMe" value="University of Wisconsin-Milwaukee">University of Wisconsin-Milwaukee</option>
                             <option class="sortMe" value="The University of Texas at Dallas">The University of Texas at Dallas</option>
                             <option class="sortMe" value="University of Ottawa">University of Ottawa</option>
                             <option class="sortMe" value="Michigan Technological University">Michigan Technological University</option>
                             <option class="sortMe" value="Western Sydney University">Western Sydney University</option>
                             <option class="sortMe" id='University of Reading' value="University of Reading">University of Reading</option>

                                    </select>
                                    <span id="show-by-value"></span> 

                                    <label class="mt-5 mb-2">Intended major</label>

                                    <select class="form-select bg-white" name="intended_major[]" aria-label="Default select example"  id="select-major" required="required">

                                      <option  value="0">Select your major</option>


                                      <!-- <option selected>Select your major</option> -->

                                        <option id='Ancient Studies'>Ancient Studies</option>
                                                      <option id='Animal Behavior and Ethology'>Animal Behavior and Ethology</option>
                                                      <option id='Animal Science'>Animal Science</option>
                                                      <option id='Animation and Special Effects'>Animation and Special Effects</option>
                                                      <option id='Anthropology'>Anthropology</option>
                                                      <option id='Applied Mathematics'>Applied Mathematics</option>
                                                      <option id='Aquaculture'>Aquaculture</option>
                                                      <option id='Aquatic Biology'>Aquatic Biology</option>
                                                      <option id='Arabic'>Arabic</option>
                                                      <option id='Archeology'>Archeology</option>
                                                      <option id='Architectural Engineering'>Architectural Engineering</option>
                                                      <option id='Architectural History'>Architectural History</option>
                                                      <option id='Architecture'>Architecture</option>
                                                      <option id='Art'>Art</option>
                                                      <option id='Art Education'>Art Education</option>
                                                      <option id='Art History'>Art History</option>
                                                      <option id='Art Therapy'>Art Therapy</option>
                                                      <option id='Artificial Intelligence and Robotics'>Artificial Intelligence and Robotics</option>
                                                      <option id='Asian-American Studies'>Asian-American Studies</option>
                                                      <option id='Astronomy'>Astronomy</option>
                                                      <option id='Astrophysics'>Astrophysics</option>
                                                      <option id='Athletic Training'>Athletic Training</option>
                                                      <option id='Atmospheric Science'>Atmospheric Science</option>
                                                      <option id='Automotive Engineering'>Automotive Engineering</option>
                                                      <option id='Aviation'>Aviation</option>
                                                      <option id='Bakery Science'>Bakery Science</option>
                                                      <option id='Biblical Studies'>Biblical Studies</option>
                                                      <option id='Biochemistry'>Biochemistry</option>
                                                      <option id='Bioethics'>Bioethics</option>
                                                      <option id='Biology'>Biology</option>
                                                      <option id='Biomedical Engineering'>Biomedical Engineering</option>
                                                      <option id='Biomedical Science'>Biomedical Science</option>
                                                      <option id='Biopsychology'>Biopsychology</option>
                                                      <option id='Biotechnology'>Biotechnology</option>
                                                      <option id='Botany/Plant Biology'>Botany/Plant Biology</option>
                                                      <option id='Business Administration/Management'>Business Administration/Management</option>
                                                      <option id='Business Communications'>Business Communications</option>
                                                      <option id='Business Education'>Business Education</option>
                                                      <option id='Canadian Studies'>Canadian Studies</option>
                                                      <option id='Caribbean Studies'>Caribbean Studies</option>
                                                      <option id='Cell Biology Major'>Cell Biology Major</option>
                                                      <option id='Ceramic Engineering'>Ceramic Engineering</option>
                                                      <option id='Ceramics'>Ceramics</option>
                                                      <option id='Chemical Engineering Major'>Chemical Engineering Major</option>
                                                      <option id='Chemical Physics'>Chemical Physics</option>
                                                      <option id='Chemistry Major'>Chemistry Major</option>
                                                      <option id='Child Care'>Child Care</option>
                                                      <option id='Child Development'>Child Development</option>
                                                      <option id='Chinese'>Chinese</option>
                                                      <option id='Chiropractic'>Chiropractic</option>
                                                      <option id='Church Music'>Church Music</option>
                                                      <option id='Cinematography and Film/Video Production'>Cinematography and Film/Video Production</option>
                                                      <option id='Circulation Technology'>Circulation Technology</option>
                                                      <option id='Civil Engineering'>Civil Engineering</option>
                                                      <option id='Classics'>Classics</option>
                                                      <option id='Clinical Psychology'>Clinical Psychology</option>
                                                      <option id='Cognitive Psychology'>Cognitive Psychology</option>
                                                      <option id='Communication Disorders'>Communication Disorders</option>
                                                      <option id='Communications Studies/Speech Communication and Rhetoric'>Communications Studies/Speech Communication and Rhetoric</option>
                                                      <option id='Comparative Literature'>Comparative Literature</option>
                                                      <option id='Computer and Information Science'>Computer and Information Science</option>
                                                      <option id='Computer Engineering'>Computer Engineering</option>
                                                      <option id='Computer Graphics'>Computer Graphics</option>
                                                      <option id='Computer Systems Analysis Major'>Computer Systems Analysis Major</option>
                                                      <option id='Construction Management'>Construction Management</option>
                                                      <option id='Counseling'>Counseling</option>
                                                      <option id='Crafts'>Crafts</option>
                                                      <option id='Creative Writing'>Creative Writing</option>
                                                      <option id='Criminal Science'>Criminal Science</option>
                                                      <option id='Criminology'>Criminology</option>
                                                      <option id='Culinary Arts'>Culinary Arts</option>
                                                      <option id='Dance'>Dance</option>
                                                      <option id='Data Processing'>Data Processing</option>
                                                      <option id='Dental Hygiene'>Dental Hygiene</option>
                                                      <option id='Developmental Psychology'>Developmental Psychology</option>
                                                      <option id='Diagnostic Medical Sonography'>Diagnostic Medical Sonography</option>
                                                      <option id='Dietetics'>Dietetics</option>
                                                      <option id='Digital Communications and Media/Multimedia'>Digital Communications and Media/Multimedia</option>
                                                      <option id='Drawing'>Drawing</option>
                                                      <option id='Early Childhood Education'>Early Childhood Education</option>
                                                      <option id='East Asian Studies'>East Asian Studies</option>
                                                      <option id='East European Studies'>East European Studies</option>
                                                      <option id='Ecology'>Ecology</option>
                                                      <option id='Economics Major'>Economics Major</option>
                                                      <option id='Education'>Education</option>
                                                      <option id='Education Administration'>Education Administration</option>
                                                      <option id='Education of the Deaf'>Education of the Deaf</option>
                                                      <option id='Educational Psychology'>Educational Psychology</option>
                                                      <option id='Electrical Engineering'>Electrical Engineering</option>
                                                      <option id='Elementary Education'>Elementary Education</option>
                                                      <option id='Engineering Mechanics'>Engineering Mechanics</option>
                                                      <option id='Engineering Physics'>Engineering Physics</option>
                                                      <option id='English'>English</option>
                                                      <option id='English Composition'>English Composition</option>
                                                      <option id='English Literature Major'>English Literature Major</option>
                                                      <option id='Entomology'>Entomology</option>
                                                      <option id='Entrepreneurship Major'>Entrepreneurship Major</option>
                                                      <option id='Environmental Design/Architecture'>Environmental Design/Architecture</option>
                                                      <option id='Environmental Science'>Environmental Science</option>
                                                      <option id='Environmental/Environmental Health Engineering'>Environmental/Environmental Health Engineering</option>
                                                      <option id='Epidemiology'>Epidemiology</option>
                                                      <option id='Equine Studies'>Equine Studies</option>
                                                      <option id='Ethnic Studies'>Ethnic Studies</option>
                                                      <option id='European History'>European History</option>
                                                      <option id='Experimental Pathology'>Experimental Pathology</option>
                                                      <option id='Experimental Psychology'>Experimental Psychology</option>
                                                      <option id='Fashion Design'>Fashion Design</option>
                                                      <option id='Fashion Merchandising'>Fashion Merchandising</option>
                                                      <option id='Feed Science'>Feed Science</option>
                                                      <option id='Fiber, Textiles, and Weaving Arts'>Fiber, Textiles, and Weaving Arts</option>
                                                      <option id='Film'>Film</option>
                                                      <option id='Finance'>Finance</option>
                                                      <option id='Floriculture'>Floriculture</option>
                                                      <option id='Food Science'>Food Science</option>
                                                      <option id='Forensic Science'>Forensic Science</option>
                                                      <option id='Forestry'>Forestry</option>
                                                      <option id='French'>French</option>
                                                      <option id='Furniture Design'>Furniture Design</option>
                                                      <option id='Game Design'>Game Design</option>
                                                      <option id='Gay and Lesbian Studies'>Gay and Lesbian Studies</option>
                                                      <option id='Genetics'>Genetics</option>
                                                      <option id='Geography'>Geography</option>
                                                      <option id='Geological Engineering'>Geological Engineering</option>
                                                      <option id='Geology'>Geology</option>
                                                      <option id='Geophysics'>Geophysics</option>
                                                      <option id='German'>German</option>
                                                      <option id='Gerontology'>Gerontology</option>
                                                      <option id='Government Major'>Government Major</option>
                                                      <option id='Graphic Design'>Graphic Design</option>
                                                      <option id='Health Administration'>Health Administration</option>
                                                      <option id='Hebrew'>Hebrew</option>
                                                      <option id='Hispanic-American, Puerto Rican, and Chicano Studies'>Hispanic-American, Puerto Rican, and Chicano Studies</option>
                                                      <option id='Historic Preservation'>Historic Preservation</option>
                                                      <option id='History'>History</option>
                                                      <option id='Home Economics'>Home Economics</option>
                                                      <option id='Horticulture'>Horticulture</option>
                                                      <option id='Hospitality'>Hospitality</option>
                                                      <option id='Human Development'>Human Development</option>
                                                      <option id='Human Resources Management Major'>Human Resources Management Major</option>
                                                      <option id='Illustration'>Illustration</option>
                                                      <option id='Industrial Design'>Industrial Design</option>
                                                      <option id='Industrial Engineering'>Industrial Engineering</option>
                                                      <option id='Industrial Management'>Industrial Management</option>
                                                      <option id='Industrial Psychology'>Industrial Psychology</option>
                                                      <option id='Information Technology'>Information Technology</option>
                                                      <option id='Interior Architecture'>Interior Architecture</option>
                                                      <option id='Interior Design'>Interior Design</option>
                                                      <option id='International Agriculture'>International Agriculture</option>
                                                      <option id='International Business'>International Business</option>
                                                      <option id='International Relations'>International Relations</option>
                                                      <option id='International Studies'>International Studies</option>
                                                      <option id='Islamic Studies'>Islamic Studies</option>
                                                      <option id='Italian'>Italian</option>
                                                      <option id='Japanese'>Japanese</option>
                                                      <option id='Jazz Studies'>Jazz Studies</option>
                                                      <option id='Jewelry and Metalsmithing'>Jewelry and Metalsmithing</option>
                                                      <option id='Jewish Studies'>Jewish Studies</option>
                                                      <option id='Journalism'>Journalism</option>
                                                      <option id='Kinesiology'>Kinesiology</option>
                                                      <option id='Korean'>Korean</option>
                                                      <option id='Land Use Planning and Management'>Land Use Planning and Management</option>
                                                      <option id='Landscape Architecture'>Landscape Architecture</option>
                                                      <option id='Landscape Horticulture'>Landscape Horticulture</option>
                                                      <option id='Latin American Studies'>Latin American Studies</option>
                                                      <option id='Library Science'>Library Science</option>
                                                      <option id='Linguistics'>Linguistics</option>
                                                      <option id='Logistics Management'>Logistics Management</option>
                                                      <option id='Management Information Systems'>Management Information Systems</option>
                                                      <option id='Managerial Economics'>Managerial Economics</option>
                                                      <option id='Marine Biology Major'>Marine Biology Major</option>
                                                      <option id='Marine Science'>Marine Science</option>
                                                      <option id='Marketing Major'>Marketing Major</option>
                                                      <option id='Mass Communication'>Mass Communication</option>
                                                      <option id='Massage Therapy'>Massage Therapy</option>
                                                      <option id='Materials Science'>Materials Science</option>
                                                      <option id='Mathematics'>Mathematics</option>
                                                      <option id='Mechanical Engineering'>Mechanical Engineering</option>
                                                      <option id='Medical Technology'>Medical Technology</option>
                                                      <option id='Medieval and Renaissance Studies'>Medieval and Renaissance Studies</option>
                                                      <option id='Mental Health Services'>Mental Health Services</option>
                                                      <option id='Merchandising and Buying Operations'>Merchandising and Buying Operations</option>
                                                      <option id='Metallurgical Engineering'>Metallurgical Engineering</option>
                                                      <option id='Microbiology'>Microbiology</option>
                                                      <option id='Middle Eastern Studies'>Middle Eastern Studies</option>
                                                      <option id='Military Science'>Military Science</option>
                                                      <option id='Mineral Engineering'>Mineral Engineering</option>
                                                      <option id='Missions'>Missions</option>
                                                      <option id='Modern Greek'>Modern Greek</option>
                                                      <option id='Molecular Biology'>Molecular Biology</option>
                                                      <option id='Molecular Genetics'>Molecular Genetics</option>
                                                      <option id='Mortuary Science'>Mortuary Science</option>
                                                      <option id='Museum Studies'>Museum Studies</option>
                                                      <option id='Music'>Music</option>
                                                      <option id='Music Education'>Music Education</option>
                                                      <option id='Music History Major'>Music History Major</option>
                                                      <option id='Music Management'>Music Management</option>
                                                      <option id='Music Therapy'>Music Therapy</option>
                                                      <option id='Musical Theater'>Musical Theater</option>
                                                      <option id='Native American Studies'>Native American Studies</option>
                                                      <option id='Natural Resources Conservation'>Natural Resources Conservation</option>
                                                      <option id='Naval Architecture'>Naval Architecture</option>
                                                      <option id='Neurobiology'>Neurobiology</option>
                                                      <option id='Neuroscience'>Neuroscience</option>
                                                      <option id='Nuclear Engineering'>Nuclear Engineering</option>
                                                      <option id='Nursing Major'>Nursing Major</option>
                                                      <option id='Nutrition'>Nutrition</option>
                                                      <option id='Occupational Therapy'>Occupational Therapy</option>
                                                      <option id='Ocean Engineering'>Ocean Engineering</option>
                                                      <option id='Oceanography'>Oceanography</option>
                                                      <option id='Operations Management'>Operations Management</option>
                                                      <option id='Organizational Behavior Studies'>Organizational Behavior Studies</option>
                                                      <option id='Painting'>Painting</option>
                                                      <option id='Paleontology'>Paleontology</option>
                                                      <option id='Pastoral Studies'>Pastoral Studies</option>
                                                      <option id='Peace Studies'>Peace Studies</option>
                                                      <option id='Petroleum Engineering'>Petroleum Engineering</option>
                                                      <option id='Pharmacology'>Pharmacology</option>
                                                      <option id='Pharmacy'>Pharmacy</option>
                                                      <option id='Philosophy'>Philosophy</option>
                                                      <option id='Photography'>Photography</option>
                                                      <option id='Photojournalism Major'>Photojournalism Major</option>
                                                      <option id='Physical Education'>Physical Education</option>
                                                      <option id='Physical Therapy'>Physical Therapy</option>
                                                      <option id='Physician Assistant'>Physician Assistant</option>
                                                      <option id='Physics'>Physics</option>
                                                      <option id='Physiological Psychology'>Physiological Psychology</option>
                                                      <option id='Piano'>Piano</option>
                                                      <option id='Planetary Science'>Planetary Science</option>
                                                      <option id='Plant Pathology'>Plant Pathology</option>
                                                      <option id='Playwriting and Screenwriting'>Playwriting and Screenwriting</option>
                                                      <option id='Political Communication'>Political Communication</option>
                                                      <option id='Political Science Major'>Political Science Major</option>
                                                      <option id='Portuguese'>Portuguese</option>
                                                      <option id='Pre-Dentistry'>Pre-Dentistry</option>
                                                      <option id='Pre-Law'>Pre-Law</option>
                                                      <option id='Pre-Medicine'>Pre-Medicine</option>
                                                      <option id='Pre-Optometry'>Pre-Optometry</option>
                                                      <option id='Pre-Seminary'>Pre-Seminary</option>
                                                      <option id='Pre-Veterinary Medicine'>Pre-Veterinary Medicine</option>
                                                      <option id='Printmaking'>Printmaking</option>
                                                      <option id='Psychology'>Psychology</option>
                                                      <option id='Public Administration'>Public Administration</option>
                                                      <option id='Public Health'>Public Health</option>
                                                      <option id='Public Policy Analysis'>Public Policy Analysis</option>
                                                      <option id='Public Relations Major'>Public Relations Major</option>
                                                      <option id='Radio and Television'>Radio and Television</option>
                                                      <option id='Radiologic Technology'>Radiologic Technology</option>
                                                      <option id='Range Science and Management'>Range Science and Management</option>
                                                      <option id='Real Estate'>Real Estate</option>
                                                      <option id='Recording Arts Technology'>Recording Arts Technology</option>
                                                      <option id='Recreation Management'>Recreation Management</option>
                                                      <option id='Rehabilitation Services'>Rehabilitation Services</option>
                                                      <option id='Religious Studies'>Religious Studies</option>
                                                      <option id='Respiratory Therapy'>Respiratory Therapy</option>
                                                      <option id='Risk Management'>Risk Management</option>
                                                      <option id='Rural Sociology'>Rural Sociology</option>
                                                      <option id='Russian'>Russian</option>
                                                      <option id='Scandinavian Studies'>Scandinavian Studies</option>
                                                      <option id='Sculpture'>Sculpture</option>
                                                      <option id='Slavic Languages and Literatures'>Slavic Languages and Literatures</option>
                                                      <option id='Social Psychology'>Social Psychology</option>
                                                      <option id='Social Work'>Social Work</option>
                                                      <option id='Sociology'>Sociology</option>
                                                      <option id='Soil Science'>Soil Science</option>
                                                      <option id='Sound Engineering'>Sound Engineering</option>
                                                      <option id='South Asian Studies'>South Asian Studies</option>
                                                      <option id='Southeast Asia Studies'>Southeast Asia Studies</option>
                                                      <option id='Spanish Major'>Spanish Major</option>
                                                      <option id='Special Education'>Special Education</option>
                                                      <option id='Speech Pathology'>Speech Pathology</option>
                                                      <option id='Sport and Leisure Studies'>Sport and Leisure Studies</option>
                                                      <option id='Sports Management'>Sports Management</option>
                                                      <option id='Statistics Major'>Statistics Major</option>
                                                      <option id='Surveying'>Surveying</option>
                                                      <option id='Sustainable Resource Management'>Sustainable Resource Management</option>
                                                      <option id='Teacher Education'>Teacher Education</option>
                                                      <option id='Teaching English as a Second Language'>Teaching English as a Second Language</option>
                                                      <option id='Technical Writing'>Technical Writing</option>
                                                      <option id='Technology Education'>Technology Education</option>
                                                      <option id='Textile Engineering'>Textile Engineering</option>
                                                      <option id='Theatre'>Theatre</option>
                                                      <option id='Theology'>Theology</option>
                                                      <option id='Tourism'>Tourism</option>
                                                      <option id='Toxicology'>Toxicology</option>
                                                      <option id='Turfgrass Science'>Turfgrass Science</option>
                                                      <option id='Urban Planning'>Urban Planning</option>
                                                      <option id='Urban Studies'>Urban Studies</option>
                                                      <option id='Visual Communication'>Visual Communication</option>
                                                      <option id='Voice'>Voice</option>
                                                      <option id='Web Design'>Web Design</option>
                                                      <option id='Webmaster and Web Management'>Webmaster and Web Management</option>
                                                      <option id='Welding Engineering'>Welding Engineering</option>
                                                      <option id='Wildlife Management'>Wildlife Management</option>
                                                      <option id='Womens Studies'>Women's Studies</option>
                                                      <option id='Youth Ministries'>Youth Ministries</option>

                                      <!--  <option value="Mathematics">Mathematics</option>

                                       <option value="Science">Science</option>

                                       <option value="Physics">Physics</option> -->

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
         <div style="position:relative; height: 100%;">
          <div class="packages-box" style="opacity:<?php if($our_packages_id!=$row['our_packages_id']){ echo "0.3"; }?>">
            <h3>
              <?php echo $row[ 'our_packages_name']?>
            
            <span>
                       <span>€ <?= $row['our_packages_price']?></span>
                     
            </span></h3>
         <ul class="packages-list">
              <?php $includ=explode( '_',$row[ 'our_packages_Includes']); for($i=0;$i<count($includ);$i++){ echo "<li>".$includ[$i]. "</li>"; }?>
            </ul>

          <!--   
            <a href="#" title="Select your  package " class="btn-learnMore" id="packege" data-packege="<?=$row['our_packages_id']?>" >Select your package
              <i class="fas fa-chevron-right"></i>
            </a> -->

              

          </div>
          <p style="position: absolute;left: 0;bottom: 0;right: 0;opacity:<?php if($our_packages_id!=$row['our_packages_id']){ echo "0.3"; }?>"> 
                  <input type="radio" name="price_package_id" class="select-package-input" data-val="<?= $row['our_packages_name'] ?>" data-price=" <?= $row['our_packages_price'] ?>" value="<?= $row['our_packages_id'] ?>" <?php if($our_packages_id==$row['our_packages_id']){ echo "checked"; } else echo "disabled"; ?>>
                  <a  href="javascript:void(0)" title="Select package"  class="select-package-btn"><?php if($our_packages_id==$row['our_packages_id']){ echo "Selected package"; } else echo "Select package"; ?> 
                  <i class="fas fa-chevron-right"></i>
                  </a>
               </p>
            </div>
        </div>
        <!-- .col -->
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
            </div> -->
         </div>
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
                     <input type="radio" class="select-package-input" name="professor_id" id="professor_id" value="<?= $professorData['professor_our_experts_id']  ?>" />

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

                  <div class="col-lg-7 col-md-7 col-sm-12 ">

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

                  <div class="col-lg-5 col-md-5 col-sm-12 heading">

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

                           <!-- <span clas="time">

                           <a href="javascript:void(0)" class="btn btn-primary">Proceed ></a>

                           <a href="javascript:void(0)" title="Select package" class="select-package-btn mt-3" id="selectbsc-bs" ><span>Proceed</span><i class="fas fa-chevron-right"></i></a>

                           </span> -->

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
                        <input type="text" name="email" id="email" class="form-control"  data-email="<?=isset($user_data['email'])?$user_data['email']:'';?>" placeholder="admin@gmail.com">
                        <span id="email_result"></span>  
                        <span id="err-email"></span>

                     </div>

                     <div class="col-md-6 mb-5">

                        <label>Set  password*</label>

                        <input type="password" name="password" id="password" class="form-control" value="<?=isset($user_data['password'])&& !empty($user_data['password']?(set_value($user_data['password'])):(''))?>" placeholder="Enter Password"  data-password="<?=!empty($user_data['password'])?$user_data['password']:'';?>"  required>

                        <span id="err-password"></span>

                     </div>

                     <div class="col-md-6 mb-5">

                        <label>Last name*</label>

                        <input type="text"  name="lname" id="lname" value="<?=isset($user_data['last_name'])&& !empty($user_data['last_name']?(set_value($user_data['last_name'])):(''))?>" data-lname="<?=isset($user_data['last_name'])?$user_data['last_name']:'';?>" class="form-control" value="" placeholder="Garner-Jones">

                        <span id="err-lname"></span>

                     </div>

                     <div class="col-md-6 mb-5">

                        <label>First  name*</label>

                        <input type="text"  name="fname" id="fname" value="<?=isset($user_data['name'])&& !empty($user_data['name']?(set_value($user_data['name'])):(''))?>" data-fname="<?=isset($user_data['name'])?$user_data['name']:'';?>" class="form-control" value="" placeholder="Louise">

                        <span id="err-fname"></span>

                     </div>

                     <div class="col-md-6 mb-5">

                        <label>Country  of  residence*</label>

                        <input type="text"  name="country_of_residence" id="country_of_residence" class="form-control" value="" data-country_of_residence="<?=isset($user_data['country_of_residence'])?$user_data['country_of_residence']:'';?>" placeholder="Canada">

                        <span id="err-country_of_residence"></span>

                     </div>

                     <div class="col-md-6 mb-5">

                        <label>Phone  number</label>

                        <input type="tel" name="phone_no" id="phone_no" class="form-control" value="" data-phone_no="<?=isset($user_data['phone_no'])?$user_data['phone_no']:'';?>" placeholder="7123-456-789">

                        <span id="err-phone_no"></span>

                     </div>

                     <div class="col-md-6 mb-5">

                        <label>Your current school/university</label>

                        <input type="text" name="current_school_university" id="current_school_university" class="form-control" value=""  data-current_school_university="<?=isset($user_data['current_school_university'])?$user_data['current_school_university']:'';?>" placeholder="McGill University">

                        <span id="err-current_school_university"></span>

                     </div>

                     <div class="col-md-6 mb-5">

                        <label>Your current GPA</label>

                        <input type="text" name="current_gpa" id="current_gpa" class="form-control" value="" data-current_gpa="<?=isset($user_data['current_gpa'])?$user_data['current_gpa']:'';?>" placeholder="1.0">

                        <span id="err-current_gpa"></span>

                     </div>

                     <div class="col-md-6 mb-5">

                        <label>Your current major</label>

                        <input type="text" name="current_major" id="current_major" class="form-control" value=""  data-current_major="<?=isset($user_data['current_major'])?$user_data['current_major']:'';?>"placeholder="Mathematics">

                        <span id="err-current_major"></span>

                     </div>

                     <div class="col-md-6 mb-5">

                        <label></label>
<!-- 
                        <a href="javascript:void(0)" style="width: 250px; float: right;" title="Select package" class="select-package-btn">Proceed to  payment 

                        <i class="fas fa-chevron-right"></i>

                        </a> -->

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

                           <span>School(s) considered</span><span id="considered_school_v"></span>
                          <!--  <span id="current_school_university_v"></span> -->
                            

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

                        <a href="<?php echo base_url('/career-and-school-selection/#Ourpackages');?>" title="Select package" class="select-package-btn">Change  package 

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
                           <input type="text" name="region" id="region" class="form-control" placeholder="Country or  region" autocomplete="off" value="<?php echo set_value('region'); ?>" required>

                          <!--  <select class="form-select bg-white" name="region" aria-label="Default select example">

                              <option selected="" value="United Kingdom">United Kingdom</option>

                              <option value="United Kingdom 1">United Kingdom 1</option>

                              <option value="United Kingdom 2">United Kingdom 2</option>

                           </select> -->

                           <ul class="country-btn-list">

                            <!--   <li>

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

                                 <input type="radio" class="select-package-input" name="installment" value="Pay_in_4_installments">

                                 <a href="javascript:void(0)" title="Select package" class="select-package-btn">Pay in  4 installments 

                                 <i class="fas fa-chevron-right"></i>

                                 </a>

                              </li>

                            <!--   <li>

                                 <input type="radio" class="select-package-input" name="installment" value="Monthly financing">

                                 <a href="javascript:void(0)" title="Select package" class="select-package-btn">Monthly financing 

                                 <i class="fas fa-chevron-right"></i>

                                 </a>

                              </li> -->
                                <li>

                                 <input type="radio" class="select-package-input" name="installment" value="2_installments_Every_2_Weeks">

                                 <a href="javascript:void(0)" title="Select package" class="select-package-btn">Pay In 2 installments Every 2 Weeks

                                 <i class="fas fa-chevron-right"></i>

                                 </a>

                              </li>

                           </ul>

                        </div>

                        <div class="col-md-6 mb-2">

                           <label class="mb-1"></label>

                           <input type="text" name="post_code" class="form-control" placeholder="Post code">

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

    <script language="javascript" src="<?php echo base_url('front/assets/js/career_and_school_selection_booking_booking.js') ?>"></script>

 </footer>

   </body>

</html>

<script type = "text/javascript" >

/*
          $('.fc-day-future').click(function(){
    $('.fc-day-future .fc-daygrid-day-top').css("background-color", "#fff")
     $(this).children('.fc-daygrid-day-frame').children('.fc-daygrid-day-top').css("background-color", "#ff9833");
   
});
 */
   
 var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
   

   document.addEventListener('DOMContentLoaded', function () {

   var calendarEl = document.getElementById('calendar');

   var timeZoneSelectorEl = document.getElementById('time-zone-selector-1');

   var initialTimeZone = 'local';

   var timeZoneSelectorEl = document.getElementById('time-zone-selector-1');

   var initialTimeZone = 'local';
   if (isMobile) {
   var calendar = new FullCalendar.Calendar(calendarEl, {

   timeZone: initialTimeZone,

   headerToolbar: {

   left: 'title',

   center: '',

   right: '',

   },
    selectable: true,
   //code for mobile view
      dateClick: function (eventClickInfo) {
        // console.log(eventClickInfo);
       this.select(eventClickInfo.dateStr);

     },

  

/*   selectAllow: function(select) {
      return moment().diff(select.start, 'days') <= 0
   },
  */


   select: function (info) {
      //console.log(info);

   var titlEventModal =moment(info.startStr).format("dddd Do MMMM  YYYY") ;

    $("#select-time-cal").html(titlEventModal);

    $("#package_startDate").val(info.startStr);

    $("#package_startEndDate").val(info.endStr);

   // alert('selected ' + info.startStr + ' to ' + info.endStr +'hiiiiii'+titlEventModal);

  

   }

   });
      }else{
        var calendar = new FullCalendar.Calendar(calendarEl, {

   timeZone: initialTimeZone,

   headerToolbar: {

   left: 'title',

   center: '',

   right: ''

   },
    selectable: true,

   selectAllow: function(select) {
      return moment().diff(select.start, 'days') <= 0
   },



   //code for mobile view
   /*   dateClick: function (eventClickInfo) {
       this.select(eventClickInfo.dateStr);
     },*/



   select: function (info) {
      console.log(info);

   var titlEventModal =moment(info.startStr).format("dddd Do MMMM  YYYY") ;

    $("#select-time-cal").html(titlEventModal);

    $("#package_startDate").val(info.startStr);

    $("#package_startEndDate").val(info.endStr);

   // alert('selected ' + info.startStr + ' to ' + info.endStr +'hiiiiii'+titlEventModal);

   

   }

   });
   }

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

   $('.fc-day-future').click(function(){
   $('.fc-day-future .fc-daygrid-day-top').css("background-color", "#fff")
   $(this).children('.fc-daygrid-day-frame').children('.fc-daygrid-day-top').css("background-color", "#ff9833");
   
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


/*
  $('.fc-day-future').click(function(){
    $('.fc-day-future .fc-daygrid-day-top').css("background-color", "#fff")
     $(this).children('.fc-daygrid-day-frame').children('.fc-daygrid-day-top').css("background-color", "#ff9833");
   
});*/

var mylist = $('#select-school');
 var listitems = mylist.children('option.sortMe').get();
 listitems.sort(function(a, b) {
    var compA = $(a).text().toUpperCase();
    var compB = $(b).text().toUpperCase();
    return (compA < compB) ? -1 : (compA > compB) ? 1 : 0;
 })
 $.each(listitems, function(idx, itm) { mylist.append(itm); });


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


$(document).ready(function(){


document.getElementById('payBtn').onclick = function() {
    var selected = [];
    for (var option of document.getElementById('pets').options)
    {
        if (option.selected) {
            selected.push(option.value);
        }
    }
    alert(selected);
}

    $(".considered-box").click(function () {
        const considered_degree = $("input[name='considered_degree']:checked").val();
        if ($("#selectbsc-bs0").is(":checked")) {
          $('.select-span').html('Select Degree');
          $('span', this).html('Selected Degree');
        } else if ($("#selectbsc-bs1").is(":checked")) {
           $('.select-span').html('Select Degree');
           $('span', this).html('Selected Degree');
        }else if ($("#selectbsc-bs2").is(":checked")) {
           $('.select-span').html('Select Degree');
           $('span', this).html('Selected Degree');
        }else if($("#selectbsc-bs3").is(":checked")) {
           $('.select-span').html('Select Degree');
          $('span', this).html('Selected Degree');
        }
        else
        {
            $('.select-span').html('Select Degree');
        }
    });
});

 </script>