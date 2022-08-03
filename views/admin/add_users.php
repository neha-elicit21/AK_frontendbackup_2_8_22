<?php
// $timezones = DateTimeZone::listIdentifiers(DateTimeZone::ALL);

//  foreach ($timezones as $timezone) {
//     echo $timezone;
//     echo "<br />";
//  }
//  //utc_offset_dst('asia');
//  die();
?>

<style>
.error {
    width: 100%;
    margin-top: .25rem;
    font-size: .875em;
    color: #dc3545;
}
</style>
 <div class="content-wrapper">
<section class="content">
      <div class="container register">
                <div class="row">
                        
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Admin!</p>
                        <!--   -->
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Professor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Student</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                
                                <h3 class="register-heading">Registration for Professor</h3>

                                <form method="post" id="professor_form" action="<?= site_url('admin/add_professor');?>" enctype="multipart/form-data">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Full Name *"   name="name" id="name" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="12" name="mobile" class="form-control" id="mobile" placeholder="Your Phone *" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Password *"/>
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
                                            <input type="text" id="University" name="University" class="form-control" placeholder="Your University *" value="" />
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

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Your Email *"  />
                                              <span id="email_result"></span>  
                                        </div>
                                        <div class="form-group">
                                            <!-- <label>Profile</label> -->
                                           <input type="button" name="profile1" id="loadFileXml" value="Choose Profile image" onclick="document.getElementById('file').click();" class="form-control" />
                                           <input accept="image/*" type="file" style="display:none;" id="file" name="profile"/>

                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="cpassword" name="cpassword" class="form-control"  placeholder="Confirm Password *" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" id="Degree" name="Degree" class="form-control" placeholder="Your Degree *"/>
                                            <input type="hidden" name="user_type" class="form-control" value="2" />
                                            <input type="hidden" name="Time_zone" class="form-control"  value="UTC +5.5" />
                                        </div>
                                        <div class="form-group">
                                            <textarea  name="Bio" id="Bio" class="form-control" placeholder="Your Bio (optional)" /></textarea>
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </form>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Registration for Students</h3>
                                 <form  method="post" id="student_form" action="<?= site_url('admin/add_student');?>" enctype="multipart/form-data">
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
                                            <input type="hidden" name="Time_zone" class="form-control"  value="UTC +5.5" />
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
                                            <input type="text" class="form-control" name="professor_id" id="professor_id" placeholder="Professor Id *">
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
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
  </section>
</div>
    <script>
     if ($("#professor_form").length > 0) {
            $("#professor_form").validate({
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
                        equalTo: "#password"
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
                    }

                }
            })
        }

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
                          //$('#email_result1').html(data);  
                     }  
                });  
           }  
      });  
 });

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
