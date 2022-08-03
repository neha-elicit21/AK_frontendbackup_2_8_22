<article>

	<div class="sec-task2 p-0">

      <div class="container p-0">

        <div class="bg-task">

          <div class="form mt-4">

            <form class="needs-validation" novalidate method="post" action="<?= base_url('Professor/professor_update') ?>" enctype="multipart/form-data">

              <div class="form-row">

                <div class="col-md-4 mb-5">

                  <label>Name</label>

                  <input type="text" class="form-control" name="name" id="validationCustom01" value="<?= $data['name']?>"

                    placeholder="">

                    <input type="hidden" class="form-control" name="id" id="validationCustom01" value="<?= $data['id']?>"

                    placeholder="">

                </div>

                <div class="col-md-4 mb-5">

                  <label>Phone number</label>

                  <input type="text" name="mobile" class="form-control" id="validationCustom02" value="<?= $data['mobile']?>">

                </div>

                <div class="col-md-4 mb-5">

                  <label>E-mail</label>

                  <input type="text" name="email" class="form-control" id="validationCustom03"

                    value="<?= $data['email']?>">

                </div>

                <div class="col-md-4 mb-5">

                  <label>Profile</label>

                  <input type="file" name="Profile_img" accept="image/*" class="form-control" id="validationCustom03"

                    value="<?= $data['profile']?>">

                    <input type="hidden" name="Profile_img1" value="<?php echo $data['profile']; ?>">
                    <?php
                     if($data['profile'])
                      {?>
                       <img src="<?php echo base_url('assets/images/'. $data['profile']);?>" width="70" height="50"/>
                      <?php
                    }
                    ?>
                   

                </div>

                <div class="col-md-4 mb-5">

                  <label>Country</label>

                    <select class="form-control" id="validationCustom03" name="country">

                    	<option disabled="">--select Countries--</option>

                    	<?php

                       $result=$this->db->get('countries')->result_array();

                       foreach ($result as $countries)

                        {

                        	?>

                       	  <option value="<?= $countries['country_name'] ?>" <?php if ($data['country']==$countries['country_name']) { echo "selected";

                       	  } ?>><?= $countries['country_name'] ?></option>

                      <?php

                       }

                   ?>

                    </select>

                </div>

                <div class="col-md-4 mb-5">

                  <label>University</label>

                  <input type="text" class="form-control" name="University" id="validationCustom03"

                    value="<?= $data['University']?>">

                </div>

                <div class="col-md-4 mb-5">

                  <label>Degree</label>

                  <input type="text" class="form-control" name="Degree" id="validationCustom03"

                    value="<?= $data['Degree']?>">

                </div>

                <div class="col-md-12">

                  <div class="form-group">

                    <label for="exampleFormControlTextarea1">Bio </label>

                    <textarea class="form-control" id="exampleFormControlTextarea1" name=" Bio" width="100" rows="10"  placeholder="<?= $data['Bio']?>"><?= $data['Bio']?></textarea>

                  </div>

                </div>

              </div>

              <p class="text-right"><button class="btn btn-primary" type="Update">Update</button></p>

              <!-- <button class="btn btn-primary" type="submit">Submit form</button> -->

            </form>

          </div>

        </div>

    </div>

</div>

</article>