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
            <!-- <h1>Add</h1> -->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard')?>">Home</a></li>
              <li class="breadcrumb-item active">Add Student</li>
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
                <h3 class="card-title">Add <small>Student</small></h3>
              </div>
              <!-- /.card-header --> 
              <!-- form start -->
              <form  method="post" id="student_form" action="<?= site_url('admin/add_student');?>" enctype="multipart/form-data"> 
                               <div class="card-body">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Full Name *"  name="name" id="name" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="12"  name="mobile" id="mobile" class="form-control" placeholder="Your Phone *" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="password1" class="form-control" placeholder="Password *"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="Degree" class="form-control" placeholder="Your Degree *" id="Degree" required/>
                                        </div>
                                         <div class="form-group">
                                            <input type="text" id="University" class="form-control" placeholder="Your University *" name="University" required value="" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" id="gender" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" id="gender" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Current_GPA" name="Current_GPA" placeholder="Current GPA *">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Considered_School_Nr_1" name="Considered_School_Nr_1" placeholder="Considered School Nr. 1 *">
                                        </div>
                                         <div class="form-group">
                                            <input type="text" class="form-control" id="Considered_Degree" name="Considered_Degree" placeholder="Considered Degree *">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="Current_Major" id="Current_Major" placeholder="Current Major *">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email1" class="form-control" placeholder="Your Email *"  />
                                             <span id="email_result1"></span>
                                        </div>
                                       <div class="form-group">
                                            <!-- <label>Profile</label> -->
                                           <input type="button" id="loadFileXml" value="Choose Profile image" onclick="document.getElementById('file1').click();" class="form-control" />
                                           <input type="file" style="display:none;" id="file1" name="profile"/>

                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="cpassword" name="cpassword" class="form-control"  placeholder="Confirm Password *" />
                                            <input type="hidden" name="user_type" class="form-control" value="3" />
                                            <input type="hidden" name="Time_zone" class="form-control"  value="<?php echo utc_offset_dst(get_time_zone()); ?>" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="country" id="country">
                                                <option class="hidden"  selected disabled>Please select your Country </option>
                                                <?php $data=get_countries();
                                                 foreach ($data as  $country)
                                                  {?>
                                                   <option value='<?= $country['country_name']?>'> <?= $country['country_name']?></option>";
                                                <?php
                                                 }
                                                ?>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <select class="form-control" name="professor_id" id="professor_id">
                                                <option class="hidden"  selected disabled>Please select Professor </option>
                                                <?php $data=get_professor();
                                                 foreach ($data as  $professor)
                                                  {?>
                                                   <option value='<?= $professor['id']?>'> <?= $professor['name']?></option>";
                                                <?php
                                                 }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="Current_school" id="Current_school" placeholder="Current School *">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="Intended_Major" id="Intended_Major" placeholder="Intended Major *">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Considered_School_Nr_2" name="Considered_School_Nr_2" placeholder="Considered School Nr. 2 *">
                                        </div>
                                        

                                        <div class="form-group">
                                            <textarea  name="Bio" id="Bio" class="form-control" rows="3" placeholder="Your Bio (optional)" /></textarea>
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
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
         if ($("#student_form").length > 0) {
            $("#student_form").validate({
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
                    password: {
                        required : true,
                        minlength: 8
                    },
                    cpassword: {
                        required : true,
                        equalTo: "#password1"
                    },
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
                         maxlength: "Username maxlength  100 characters"
                    },
                    email: {
                        required : "Email is required",
                        email: "Enter a valid email. Ex: example@gmail.com"
                    },
                    password: {
                        required : "Password is required",
                        minlength: "Password must contain at least 8 characters"
                    },
                    cpassword: {
                        required : "Confirm Password is required",
                        equalTo: "Confirm Password must be matched with Password"
                    },

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
      $('#email1').change(function(){  
           var email = $('#email1').val();  
           if(email != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>admin/check_email_avalibility",  
                     method:"POST",  
                     data:{email:email},  
                     success:function(data){  
                          $('#email_result1').html(data);  
                     }  
                });  
           }  
      });  
 });  


  </script>