    <article>

        <div class="page-heading">

      <div class="container">

        <h2><?= $data['name'] 	?>: <span> Student Proﬁle</span></h2>

        <div class="row">

          <div class="col-lg-5 col-md-4 col-sm-6 heading">

            <img class="heading-user" src="<?= base_url('assets') ?>/images/<?= $data['profile']?>" /> Student <?= $data['name']?> <img class="ml-2" width="35"

              src="<?= base_url('assets') ?>/img/flag.png" />

          </div>

          <div class="col-lg-2 col-md-2 col-sm-2 heading-text">

            Degree: <?= $data['Degree']?>

          </div>

          <div class="col-lg-3 col-md-2 col-sm-2 heading-text">

            Timezone: <?= $data['Time_zone']?>

          </div>

      

        </div>

      </div>

    </div>

    <div class="sec-task2 p-0">

      <div class="container p-0">

        <div class="bg-task">

          <div class="form mt-4">

            <form class="needs-validation" novalidate>

              <div class="form-row">

                <div class="col-md-4 mb-5">

                  <label>Name</label>

                  <input type="text" class="form-control" id="validationCustom01" value="<?= $data['name']?>"

                    placeholder="">

                </div>

                <div class="col-md-4 mb-5">

                  <label>E-mail</label>

                  <input type="text" class="form-control" id="validationCustom02" value="<?= $data['email']?>">

                </div>

                <div class="col-md-4 mb-5">

                  <label>Phone number</label>

                  <input type="text" class="form-control" id="validationCustom03"

                    value="<?= $data['mobile']?>">

                </div>

                
                <div class="col-md-4 mb-5">

                  <label>Country</label>

                  <input type="text" class="form-control" id="validationCustom01" value="<?= $data['country']?>"

                    placeholder="">

                </div>

                <div class="col-md-4 mb-5">

                  <label>Profile</label>

                  <!-- <input type="text" class="form-control" id="validationCustom02" value="<?= $data['profile']?>"> -->
                  <img src="<?php echo base_url('assets/images/'. $data['profile']);?> "  id="validationCustom02" width="70" height="50"/>

                </div>

                <div class="col-md-4 mb-5">

                  <label>Date of registration</label>

                  <input type="text" class="form-control" id="validationCustom03"

                    value="<?= $data['Date_of_registration']?>">

                </div>
                <div class="col-md-4 mb-5">

                  <label>Current school</label>

                  <input type="text" class="form-control" id="validationCustom01" value="<?= $data['Current_school']?>"

                    placeholder="">

                </div>

                <div class="col-md-4 mb-5">

                  <label>Current GPA</label>

                  <input type="text" class="form-control" id="validationCustom02" value="<?= $data['Current_GPA']?>">

                </div>

                <div class="col-md-4 mb-5">

                  <label>Considered School Nr. 1</label>

                  <input type="text" class="form-control" id="validationCustom03"

                    value="<?= $data['Considered_School_Nr_1']?>">

                </div>

                <div class="col-md-4 mb-5">

                  <label>Considered School Nr. 2</label>

                  <input type="text" class="form-control" id="validationCustom01" value="<?= $data['Considered_School_Nr_2']?>"

                    placeholder="">

                </div>

                <div class="col-md-4 mb-5">

                  <label>Current Major</label>

                  <input type="text" class="form-control" id="validationCustom02" value="<?= $data['Current_Major']?>">

                </div>

                <div class="col-md-4 mb-5">

                  <label>Intended Major</label>

                  <input type="text" class="form-control" id="validationCustom03"

                    value="<?= $data['Intended_Major']?>">

                </div>

                <div class="col-md-4 mb-5">

                  <label>Considered Degree</label>

                  <input type="text" class="form-control" id="validationCustom01" value="<?= $data['Considered_Degree']?>"

                    placeholder="">

                </div>

              
        

              </div>

              <!-- <button class="btn btn-primary" type="submit">Submit form</button> -->

            </form>

          </div>

        </div>

        

    </div>

</article>