<style>
.error {
    width: 100%;
    margin-top: .25rem;
    font-size: .875em;
    color: #dc3545;
}
</style>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>EDIT</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard')?>">Home</a></li>
              <li class="breadcrumb-item active">Edit Student</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit <small>Professor</small></h3>
              </div>
              <!-- /.card-header --> 
              <!-- form start -->
              <form id="Edit_Form_student" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/manage_student_update') ?>">
                <div class="card-body">
                  
                <div class="form-group">

                  <label for="exampleInputEmail1">Name</label>

                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="name" value="<?php echo $data['name']; ?>">

                  <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="id" value="<?php echo $data['id']; ?>">

                </div>



                <div class="form-group">

                  <label for="exampleInputEmail1">Profile picture</label>

                  <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Profile_img" value="<?php echo $data['profile']; ?>" accept="image/*">

                  <input type="hidden" name="Profile_img1" value="<?php echo $data['profile']; ?>">

                    <?php
                    if ($data['profile'])
                    {
                    ?>
                    <img src="<?php echo base_url('assets/images/'. $data['profile']);?>" width="70" height="50"/>
                    <?php } ?>

                </div>

                <div class="form-group">

                  <label for="exampleInputEmail1">Country</label>

                <select class="form-control" id="validationCustom03" name="Country">
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

                <div class="form-group">

                  <label for="exampleInputEmail1">Phone number</label>

                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Phone_number" placeholder="Enter number" value="<?php echo $data['mobile'] ?>">

                </div>

                <div class="form-group">

                  <label for="exampleInputEmail1">Email</label>

                  <input type="eamil" class="form-control" id="email" aria-describedby="emailHelp" name="Email" placeholder="Enter email" value="<?php echo $data['email']; ?>">
                  <span id="email_result"></span>
                </div>

                <div class="form-group">

                  <label for="exampleInputEmail1">University </label>

                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="University" placeholder="Enter University" value="<?php echo $data['University']; ?>">

                </div>

                <div class="form-group">

                  <label for="exampleInputEmail1">Considered Degree</label>

                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Degree" name="Considered_Degree" value="<?php echo $data['Considered_Degree']; ?>">

                </div>

                 <div class="form-group">

                  <label for="exampleInputEmail1">Date of registration</label>

                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Degree" name="Date_of_registration" value="<?php echo $data['Date_of_registration']; ?>">

                </div>
                 <div class="form-group">

                  <label for="exampleInputEmail1">Current school</label>

                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Degree" name="Current_school" value="<?php echo $data['Current_school']; ?>">

                </div>
                 <div class="form-group">

                  <label for="exampleInputEmail1">Current GPA</label>

                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Degree" name="Current_GPA" value="<?php echo $data['Current_GPA']; ?>">

                </div>
                 <div class="form-group">

                  <label for="exampleInputEmail1">Considered School Nr.1</label>

                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Degree" name="Considered_School_Nr_1" value="<?php echo $data['Considered_School_Nr_1']; ?>">

                </div>
                <div class="form-group">

                  <label for="exampleInputEmail1">Considered School Nr.2</label>

                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Degree" name="Considered_School_Nr_2" value="<?php echo $data['Considered_School_Nr_2']; ?>">

                </div>
                <div class="form-group">

                  <label for="exampleInputEmail1">Current Major</label>

                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Current Major" name="Current_Major" value="<?php echo $data['Current_Major']; ?>">

                </div>
                <div class="form-group">

                  <label for="exampleInputEmail1">Intended Major</label>

                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Intended Major" name="Intended_Major" value="<?php echo $data['Intended_Major']; ?>">

                </div>

                <div class="form-group">

                  <label for="exampleInputEmail1">Bio</label>

                  <textarea class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Bio" placeholder="Enter Name"><?php echo $data['Bio']; ?></textarea>

                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script type="text/javascript">
            if ($("#Edit_Form_student").length > 0) {
            $("#Edit_Form_student").validate({
               rules: {
                    name: {
                        required : true,
                        minlength: 5,
                        maxlength:100
                    },
                    email: {
                        required : true,
                        email: true
                    },
                    // password: {
                    //     required : true,
                    //     minlength: 8
                    // },
                    // cpassword: {
                    //     required : true,
                    //     equalTo: "#password1"
                    // },
                    mobile: {
                        required : true,
                        minlength: 10,
                        maxlength:12
                    },
                    profile: {
                        required: false,
                        extension: "png|jpeg|jpg"
                    },
                    country: {
                        required : true
                    },
                    Degree: {
                        required : true
                    },
                    University: {
                        required : true
                    },
                     Current_school: {
                        required : true
                    },
                     Current_GPA: {
                        required : true
                    },
                     Considered_School_Nr_1: {
                        required : true
                    },
                     Considered_School_Nr_2: {
                        required : true
                    },
                     Current_Major: {
                        required : true
                    },
                    Intended_Major: {
                        required : true
                    },
                    Considered_Degree: {
                        required : true
                    }
                },
            // set validation messages for the rules are set previously
                messages: {
                    name: {
                        required : "Username is required",
                        minlength: "Username must contain at least 5 characters",
                         minlength: "Username maxlength  100 characters"
                    },
                    email: {
                        required : "Email is required",
                        email: "Enter a valid email. Ex: example@gmail.com"
                    },
                    // password: {
                    //     required : "Password is required",
                    //     minlength: "Password must contain at least 8 characters"
                    // },
                    // cpassword: {
                    //     required : "Confirm Password is required",
                    //     equalTo: "Confirm Password must be matched with Password"
                    // },

                     mobile: {
                        required : "Phone number is required"
                    },
                    profile: {
                        required : "Please enter a value with a valid extension."
                    },
                    country: {
                        required : "Country is required"
                    },
                    Degree: {
                        required : "Degree is required"
                    },
                    University: {
                        required : "University is required"
                    },
                     Current_school: {
                        required : "Current school is required"
                    },
                     Current_GPA: {
                        required : "Current GPA is required"
                    },
                     Considered_School_Nr_1: {
                        required : "Considered School Nr.1 is required"
                    },
                     Considered_School_Nr_2: {
                        required : "Considered School Nr.2 is required"
                    },
                     Current_Major: {
                        required : "Current Major is required"
                    },
                     Intended_Major: {
                        required : "Intended Major is required"
                    },
                     Considered_Degree: {
                        required : "Considered Degree Major is required"
                    }


                }
            })
        }

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
                     }  
                });  
           }  
      });  
 });
  </script>