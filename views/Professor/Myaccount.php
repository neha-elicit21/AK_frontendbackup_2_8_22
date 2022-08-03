<article>

    <div class="page-heading">

      <div class="container">

        <h2>Account settings</h2>

        <div class="row">

          <div class="col-lg-4 col-md-4 col-sm-6 heading">
              <?php
            if($data['profile']=='')
            {
               $str = substr ( $data['name'] , 0 , 1 );
               echo "<span data-letters=".strtoupper($str)."></span>";
            } else{
            ?>
            <img class="heading-user" src="<?= base_url('assets') ?>/images/<?= $data['profile']?>" /><?php } ?> <?= $data['name']?> <img class="ml-2" width="35" src="<?= base_url('assets') ?>/img/flag.png" />

          </div>

          <div class="col-lg-3 col-md-2 col-sm-2 heading-text">

            <?php

              $old_date = date($data['Date_of_registration']); 

              $old_date_timestamp = strtotime($old_date);   

            ?>

            Enrolled:	<?=  date('d F Y',$old_date_timestamp)?>

          </div>

          <div class="col-lg-2 col-md-2 col-sm-2 heading-text">

            Timezone: <?= $data['Time_zone']?>

          </div>

        </div>

      </div>

    </div>

    <div class="sec-students p-0">

      <div class="container p-0">

        <div class="bg-task">

          <div class="form mt-2">

            <form class="needs-validation" >

              <div class="form-row">

                <div class="col-md-4 mb-5">

                  <label>Phone	number</label>

                  <input type="text" class="form-control" id="validationCustom01" value="<?= $data['mobile']?>" placeholder="">

                </div>

                <div class="col-md-4 mb-5">

                  <label>E-mail</label>

                  <input type="text" class="form-control" id="validationCustom02" value="<?= $data['email']?>">

                </div>

                <div class="col-md-4 mb-5">

                  <label>University</label>

                  <input type="text" class="form-control" id="validationCustom02" value="<?= $data['University']?>">

                </div>

                <div class="col-md-4 mb-5">                  

                  <label>Email	notifications</label>

                  <div class="form-check d-inline-block">

                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="Yes" <?php if($data['Email_notifications']=="Yes") echo "checked"; ?> >

                    <label class="form-check-label" for="exampleRadios1">Yes</label>

                  </div>

                  <div class="form-check d-inline-block">

                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="No"  <?php if($data['Email_notifications']=="No") echo "checked"; ?>>

                    <label class="form-check-label" for="exampleRadios2">No</label>

                  </div>

                </div>

                <div class="col-md-4 mb-5">

                  <label>Password	link</label>

                  <a href="Professor/Reset" class="btn btn-reset">Reset</a>

                </div>

                

              </div>

               </form>

              <h3 class="text-refer">Refer a friend</h3>

              <p>Refer a friend to Admissions Key and you can lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porta congue tellus, sed pharetra arcu suscipit a. Praesent interdum sapien at elit lobortis egestas.</p>

               <?php echo $this->session->flashdata('error_message'); ?>

           <?php echo $this->session->flashdata('success_message'); ?>

           <div class="cus_error" style="color:red; font-weight: 700;"><?php echo validation_errors(); ?> </div> 

              <form method="post" action="<?= base_url('Professor/Refer_friend')?>" class="needs-validation">

              <div class="form-row mt-3">

                <div class="col-md-4 mb-3">

                  <label class="mb-2">Name*</label>

                  <input type="text" class="form-control" name="name" id="validationCustom01" value="" placeholder="">

                </div>

                <div class="col-md-4 mb-3">

                  <label class="mb-2">Email	address*</label>

                  <input type="text" name="email" class="form-control" id="validationCustom01" value="" placeholder="">

                </div>

                <div class="col-md-4 mb-3">

                  <label class="mb-2">Phone	number</label>

                  <input type="text" name="phone_number" class="form-control" id="validationCustom01" value="" placeholder="">

                </div>

              </div>

              <p class="text-right"><button class="btn btn-primary" type="submit">Submit</button></p>

            </form>

          </div>    



        </div>

      </div>

    </div>

  </article>

<script type="text/javascript">

     $("input[type='radio']").on('change',function() {

          //alert(this.value);

        $.ajax({  

        type: 'POST',  

        url: '<?php echo base_url('Professor/notifications')?>', 

        data: { notifications_status: this.value },

        success: function(data) {

          console.log(data);

        }

      });

          

 });

  </script>