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
  <link href="<?php echo base_url('assets/booking/') ?>style.css" rel="stylesheet">
  <!-- CSS -->
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

</head>

<body>
  <header class="booking-header">
    <div class="main-menu">
      <div class="container">
        <nav id="navbar" class="navbar navbar-expand-lg navbar-light">
          <h1 id="logo"><a href="<?= site_url('Home');?>" title=""><img src="<?php echo base_url('assets/') ?>img/company-logo.png" alt="" title="" /></a></h1>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
              class="navbar-toggler-icon"></span> </button>
          <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active booking-menu"> <a title="" class="nav-link" href="#">Book	your	package</a> </li>
              <li class="nav-item"> 
                 
              </li>
            </ul>
          </div> -->
          <div class="booking-menu"> <a title="" class="nav-link" href="<?= site_url('application-preparation')?>">Book your package</a> </div>
          <ul class="save-list">
            <li><button type="button" title="Back" class="back" id="prevBtn" onclick="nextPrev(-1)"><i class="fas fa-chevron-left"></i> Back</button></li>
            <!-- <li><button type="button" title="Save" class="save">Save</button></li> -->
            <li><button type="button" title="Next" class="next" id="nextBtn" onclick="nextPrev(1)">Next <i class="fas fa-chevron-right"></i></button></li>
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
            <a class="nav-link active" id="considered-tab" data-toggle="tab" href="#considered" role="tab"
              aria-controls="considered" aria-selected="false">Considered </br>degree/schools</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="package-tab" data-toggle="tab" href="#package" role="tab" aria-controls="package"
              aria-selected="false">Package options </br>selection</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="professor-tab" data-toggle="tab" href="#professor" role="tab"
              aria-controls="professor" aria-selected="false">Professor </br>selection</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="date-tab" data-toggle="tab" href="#date" role="tab" aria-controls="date"
              aria-selected="false">Date and time </br>selection</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account"
              aria-selected="false">Account </br>creation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="summary-tab" data-toggle="tab" href="#summary" role="tab" aria-controls="summary"
              aria-selected="false">Summary</br> and payment</a>
          </li>
        </ul>
        </div>
        <div class="tab-content" id="myTabContent">

          <div class="tab-pane fade show active tab" id="considered" role="tabpanel" aria-labelledby="considered-tab">
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
                <div class="row mb-5 pb-5">
                  <?php foreach ($data as $key => $row) {
                  ?>
                  <a href="#">
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="considered-box">
                      <h3><?= $row['package_name'];?></h3>
                      <p>Don’t leave your future to chance. We put all chances on your side and guide you towards acceptance.</p>
                      <a  href="#" title="Select package"  class="select-package-btn">Select  package <i class="fas fa-chevron-right"></i></a>
                    </div>
                  </div>
                </a>
                <?php } ?>
                  <!-- <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="considered-box bg-color1">
                      <h3>MS  / MSc</h3>
                      <p>Don’t leave your future to chance. We put all chances on your side and guide you towards acceptance.</p>
                      <a  href="#" title="Select package"  class="select-package-btn">Select  package <i class="fas fa-chevron-right"></i></a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="considered-box bg-color2">
                      <h3>MBA / EMBA</h3>
                      <p>Your story - our storytelling expertise. Most of our students get accepted into their ﬁrst choice MBA / EMBA program.</p>
                      <a  href="#" title="Select package"  class="select-package-btn">Select  package <i class="fas fa-chevron-right"></i></a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="considered-box bg-color3">
                      <h3>PhD</h3>
                      <p>From your resume to your research proposal, we assist you every step of the way.</p>
                      <a  href="#" title="Select package"  class="select-package-btn">Select  package <i class="fas fa-chevron-right"></i></a>
                    </div>
                  </div> -->
                </div>
                <h2 class="pb-5">Choose your considered schools</h2>
                <div class="row">
                  <div class="col-lg-6 col-md-8 col-sm-12">
                    <div class="form-row">
                      <div class="col-md-6 mb-5">
                        <label class="mb-2">School</label>
                        <select class="form-select bg-white" aria-label="Default select example">
                          <option selected="">University of Oxford</option>
                          <option value="1">University of Oxford</option>
                          <option value="2">University of Oxford</option>
                        </select>
                        <label class="mt-5 mb-2">Intended majoy</label>
                        <select class="form-select bg-white" aria-label="Default select example">
                          <option selected="">Mathematics</option>
                          <option value="1">Mathematics</option>
                          <option value="2">Mathematics</option>
                        </select>
                      </div>
                      <div class="col-md-6 mb-5">
                        <label>Add  school</label>
                        <div class="uplode-img plus-icon">
                          <div class="file-upload-wrapper">
                            <input type="file" id="input-file-now-custom-2" class="file-upload" data-height="500">
                           <img src="<?php echo base_url('assets/');?>img/bg-plus.jpg">
                         </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="tab-pane fade tab" id="package" role="tabpanel" aria-labelledby="package-tab">
            <section class="booking-content">
              <div class="container">
                <div class="page-heading">
                  <div class="container">
                    <div class="row border-0">
                      <div class="col-lg-12 col-md-12 col-sm-12 heading">
                        <h2 class="">Fixed price packages</h2>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row packages-row">
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="packages-box">
                      <h3>1 school  package <span>€XXXX</span></h3>
                      <ul class="packages-list">
                        <li>Target school list </li>
                        <li>Goal & essential message  development </li>
                        <li>Resume editing </li>
                        <li>Application forms review </li>
                        <li>Essay writing and editing </br>– 1 essay 500 - 750 words  </br>– (option to add an essay) </li>
                        <li>Recommendation </br>letters editing  </br>1 letter </br>– Option to add an additional </br>letter (€200)</li>
                      </ul>
                    </div>
                    <div id="accordion">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h5 class="mb-0 p-0">
                            <a class="btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Customize package <i class="fas fa-chevron-down"></i></a>
                          </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                          <div class="card-body">
                            <ul class="packages-radio-list">
                              <li>
                                <label class="radio">Add an essay: </br> 500 – 750 words</br>  €700
                                  <input type="radio" name="radio" checked="checked">
                                  <span class="checkmark"></span>
                                </label>
                              </li>
                              <li>
                                <label class="radio">Add an essay</br> 500 – 750 words</br>  €700
                                  <input type="radio" name="radio">
                                  <span class="checkmark"></span>
                                </label>
                              </li>
                              <li>
                                <label class="radio">Add an essay</br> 500 – 750 words</br>  €700
                                  <input type="radio" name="radio">
                                  <span class="checkmark"></span>
                                </label> 
                              </li>
                              <li>
                                <label class="radio">Add an essay</br> 500 – 750 words</br>  €700
                                  <input type="radio" name="radio">
                                  <span class="checkmark"></span>
                                </label>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p><a  href="#" title="Select package"  class="select-package-btn">Select package <i class="fas fa-chevron-right"></i></a></p>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="packages-box">
                      <h3>1 school  package <span>€XXXX</span></h3>
                      <ul class="packages-list">
                        <li>Target school list </li>
                        <li>Goal & essential message  development </li>
                        <li>Resume editing </li>
                        <li>Application forms review </li>
                        <li>Essay writing and editing </br>– 1 essay 500 - 750 words  </br>– (option to add an essay) </li>
                        <li>Recommendation </br>letters editing  </br>1 letter </br>– Option to add an additional </br>letter (€200)</li>
                      </ul>
                    </div>
                    <div id="accordion">
                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h5 class="mb-0 p-0">
                            <a class="btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Customize package <i class="fas fa-chevron-down"></i></a>
                          </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                          <div class="card-body">
                            <ul class="packages-radio-list">
                              <li>
                                <label class="radio">Add an essay: </br> 500 – 750 words</br>  €700
                                  <input type="radio" name="radio" checked="checked">
                                  <span class="checkmark"></span>
                                </label>
                              </li>
                              <li>
                                <label class="radio">Add an essay</br> 500 – 750 words</br>  €700
                                  <input type="radio" name="radio">
                                  <span class="checkmark"></span>
                                </label>
                              </li>
                              <li>
                                <label class="radio">Add an essay</br> 500 – 750 words</br>  €700
                                  <input type="radio" name="radio">
                                  <span class="checkmark"></span>
                                </label> 
                              </li>
                              <li>
                                <label class="radio">Add an essay</br> 500 – 750 words</br>  €700
                                  <input type="radio" name="radio">
                                  <span class="checkmark"></span>
                                </label>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p><a  href="#" title="Select package"  class="select-package-btn">Select package <i class="fas fa-chevron-right"></i></a></p>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="packages-box">
                      <h3>1 school  package <span>€XXXX</span></h3>
                      <ul class="packages-list">
                        <li>Target school list </li>
                        <li>Goal & essential message  development </li>
                        <li>Resume editing </li>
                        <li>Application forms review </li>
                        <li>Essay writing and editing </br>– 1 essay 500 - 750 words  </br>– (option to add an essay) </li>
                        <li>Recommendation </br>letters editing  </br>1 letter </br>– Option to add an additional </br>letter (€200)</li>
                      </ul>
                    </div>
                    <div id="accordion">
                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <h5 class="mb-0 p-0">
                            <a class="btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Customize package <i class="fas fa-chevron-down"></i></a>
                          </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                          <div class="card-body">
                            <ul class="packages-radio-list">
                              <li>
                                <label class="radio">Add an essay: </br> 500 – 750 words</br>  €700
                                  <input type="radio" checked="checked"  name="radio">
                                  <span class="checkmark"></span>
                                </label>
                              </li>
                              <li>
                                <label class="radio">Add an essay</br> 500 – 750 words</br>  €700
                                  <input type="radio" name="radio">
                                  <span class="checkmark"></span>
                                </label>
                              </li>
                              <li>
                                <label class="radio">Add an essay</br> 500 – 750 words</br>  €700
                                  <input type="radio" name="radio">
                                  <span class="checkmark"></span>
                                </label> 
                              </li>
                              <li>
                                <label class="radio">Add an essay</br> 500 – 750 words</br>  €700
                                  <input type="radio" name="radio">
                                  <span class="checkmark"></span>
                                </label>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p><a  href="#" title="Select package"  class="select-package-btn">Select package <i class="fas fa-chevron-right"></i></a></p>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="packages-box uplode-img plus-icon file-upload-wrapper">
                      <h3>Build your  own package</h3>
                        <div class="">
                          <input type="file" id="input-file-now-custom-2" class="file-upload" data-height="500">
                         <img src="<?php echo base_url('assets/');?>img/bg-plus.jpg">
                       </div>
                      </div>
                    </div>
                </div>
              </div>
            </section>
            <section class="booking-content package-card">
              <div class="container">
                <div class="page-heading">
                  <div class="container">
                    <div class="row border-0">
                      <div class="col-lg-6 col-md-12 col-sm-12 heading">
                        <h2 class="">Build your package</h2>
                      </div>
                      <div class="col-lg-3 col-md-12 col-sm-12">
                        <span title="Select package" class="select-package-btn bg-white">Package  value <i style="font-style: normal;">€600</i></span>
                      </div>
                      <div class="col-lg-3 col-md-12 col-sm-12">
                        <a href="#" title="Select package" class="select-package-btn">Select  package <i class="fas fa-chevron-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="accordion">
                  <div class="card">
                    <div class="card-header" id="headingOne1">
                      <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">Essay Review <i class="fas fa-chevron-down"></i></button>
                      </h5>
                    </div>                
                    <div id="collapseOne1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordion">
                      <div class="card-body">
                        <div class="row packages-row">
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box new-package">
                              <h3>Mechanical  Editing <span> 500-750  words</span></h3>
                              <div class="price">
                                €250 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box new-package">
                              <h3>Content Advice <span> 500-750 words</span></h3>
                              <div class="price">
                                €350 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Mechanical  Editing <span> 700-900  words</span></h3>
                              <div class="price">
                                €300 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Content Advice <span> 700-900 words</span></h3>
                              <div class="price">
                                €250 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Mechanical  Editing <span> 900-1400 words</span></h3>
                              <div class="price">
                                €350 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Content Advice <span> 900-1400  words</span></h3>
                              <div class="price">
                                €450 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Mechanical  Editing <span> 1400-2000  words</span></h3>
                              <div class="price">
                                €400 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Content Advice <span> 1400-2000 words</span></h3>
                              <div class="price">
                                €500 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo2">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">Resume Review <i class="fas fa-chevron-down"></i></button>
                      </h5>
                    </div>
                    <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordion">
                      <div class="card-body">
                        <div class="row packages-row">
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box new-package">
                              <h3>Mechanical  Editing <span> 500-750  words</span></h3>
                              <div class="price">
                                €250 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box new-package">
                              <h3>Content Advice <span> 500-750 words</span></h3>
                              <div class="price">
                                €350 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Mechanical  Editing <span> 700-900  words</span></h3>
                              <div class="price">
                                €300 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Content Advice <span> 700-900 words</span></h3>
                              <div class="price">
                                €250 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Mechanical  Editing <span> 900-1400 words</span></h3>
                              <div class="price">
                                €350 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Content Advice <span> 900-1400  words</span></h3>
                              <div class="price">
                                €450 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Mechanical  Editing <span> 1400-2000  words</span></h3>
                              <div class="price">
                                €400 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Content Advice <span> 1400-2000 words</span></h3>
                              <div class="price">
                                €500 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree3">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">Recommendations  Letters <i class="fas fa-chevron-down"></i></button>
                      </h5>
                    </div>
                    <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3" data-parent="#accordion">
                      <div class="card-body">
                        <div class="row packages-row">
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box new-package">
                              <h3>Mechanical  Editing <span> 500-750  words</span></h3>
                              <div class="price">
                                €250 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box new-package">
                              <h3>Content Advice <span> 500-750 words</span></h3>
                              <div class="price">
                                €350 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Mechanical  Editing <span> 700-900  words</span></h3>
                              <div class="price">
                                €300 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Content Advice <span> 700-900 words</span></h3>
                              <div class="price">
                                €250 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Mechanical  Editing <span> 900-1400 words</span></h3>
                              <div class="price">
                                €350 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Content Advice <span> 900-1400  words</span></h3>
                              <div class="price">
                                €450 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Mechanical  Editing <span> 1400-2000  words</span></h3>
                              <div class="price">
                                €400 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Content Advice <span> 1400-2000 words</span></h3>
                              <div class="price">
                                €500 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree4">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">MBA  Strategy  Development <i class="fas fa-chevron-down"></i></button>
                      </h5>
                    </div>
                    <div id="collapseThree4" class="collapse" aria-labelledby="headingThree4" data-parent="#accordion">
                      <div class="card-body">
                        <div class="row packages-row">
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box new-package">
                              <h3>Mechanical  Editing <span> 500-750  words</span></h3>
                              <div class="price">
                                €250 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box new-package">
                              <h3>Content Advice <span> 500-750 words</span></h3>
                              <div class="price">
                                €350 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Mechanical  Editing <span> 700-900  words</span></h3>
                              <div class="price">
                                €300 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Content Advice <span> 700-900 words</span></h3>
                              <div class="price">
                                €250 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Mechanical  Editing <span> 900-1400 words</span></h3>
                              <div class="price">
                                €350 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Content Advice <span> 900-1400  words</span></h3>
                              <div class="price">
                                €450 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Mechanical  Editing <span> 1400-2000  words</span></h3>
                              <div class="price">
                                €400 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Content Advice <span> 1400-2000 words</span></h3>
                              <div class="price">
                                €500 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree5">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">Career Advice <i class="fas fa-chevron-down"></i></button>
                      </h5>
                    </div>
                    <div id="collapseThree5" class="collapse" aria-labelledby="headingThree5" data-parent="#accordion">
                      <div class="card-body">
                        <div class="row packages-row">
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box new-package">
                              <h3>Mechanical  Editing <span> 500-750  words</span></h3>
                              <div class="price">
                                €250 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box new-package">
                              <h3>Content Advice <span> 500-750 words</span></h3>
                              <div class="price">
                                €350 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Mechanical  Editing <span> 700-900  words</span></h3>
                              <div class="price">
                                €300 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Content Advice <span> 700-900 words</span></h3>
                              <div class="price">
                                €250 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Mechanical  Editing <span> 900-1400 words</span></h3>
                              <div class="price">
                                €350 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Content Advice <span> 900-1400  words</span></h3>
                              <div class="price">
                                €450 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Mechanical  Editing <span> 1400-2000  words</span></h3>
                              <div class="price">
                                €400 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Content Advice <span> 1400-2000 words</span></h3>
                              <div class="price">
                                €500 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree6">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">Rejection  Strategy <i class="fas fa-chevron-down"></i></button>
                      </h5>
                    </div>
                    <div id="collapseThree6" class="collapse" aria-labelledby="headingThree6" data-parent="#accordion">
                      <div class="card-body">
                        <div class="row packages-row">
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box new-package">
                              <h3>Mechanical  Editing <span> 500-750  words</span></h3>
                              <div class="price">
                                €250 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box new-package">
                              <h3>Content Advice <span> 500-750 words</span></h3>
                              <div class="price">
                                €350 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Mechanical  Editing <span> 700-900  words</span></h3>
                              <div class="price">
                                €300 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Content Advice <span> 700-900 words</span></h3>
                              <div class="price">
                                €250 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Mechanical  Editing <span> 900-1400 words</span></h3>
                              <div class="price">
                                €350 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Content Advice <span> 900-1400  words</span></h3>
                              <div class="price">
                                €450 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Mechanical  Editing <span> 1400-2000  words</span></h3>
                              <div class="price">
                                €400 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="build-package-box">
                              <h3>Content Advice <span> 1400-2000 words</span></h3>
                              <div class="price">
                                €500 <a href="#" class="plus-icon"><img src="<?php echo base_url('assets/');?>img/plus-icon.png"/></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="tab-pane fade" id="professor" role="tabpanel" aria-labelledby="professor-tab">
            <section class="booking-content tab">
              <div class="container">
                <div class="page-heading">
                  <div class="container">
                    <div class="row border-0">
                      <div class="col-lg-12 col-md-12 col-sm-12 heading">
                        <h2 class="">Select your professor</h2>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="professor-box">
                    <h3>Lydia </br>Johns</h3>
                    <img src="<?php echo base_url('assets/');?>img/professor-img1.jpg"/>
                    <a href="#" title="Select package" class="select-package-btn bg-white">View profile</i></a>
                    <a href="#" title="Select package" class="select-package-btn">Select  professor <i class="fas fa-chevron-right"></i></a>
                  </div>
                  </div>
                  <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="professor-box">
                    <h3>Jamie </br>Gould</h3>
                    <img src="<?php echo base_url('assets/');?>img/professor-img2.jpg"/>
                    <a href="#" title="Select package" class="select-package-btn bg-white">View profile</i></a>
                    <a href="#" title="Select package" class="select-package-btn">Select  professor <i class="fas fa-chevron-right"></i></a>
                  </div>
                  </div>
                  <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="professor-box">
                    <h3>Mark </br>Smith</h3>
                    <img src="<?php echo base_url('assets/');?>img/professor-img1.jpg"/>
                    <a href="#" title="Select package" class="select-package-btn bg-white">View profile</i></a>
                    <a href="#" title="Select package" class="select-package-btn">Select  professor <i class="fas fa-chevron-right"></i></a>
                  </div>
                  </div>
                  <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="professor-box">
                    <h3>Gracelyn </br>Hargreaves</h3>
                    <img src="<?php echo base_url('assets/');?>img/professor-img2.jpg"/>
                    <a href="#" title="Select package" class="select-package-btn bg-white">View profile</i></a>
                    <a href="#" title="Select package" class="select-package-btn">Select  professor <i class="fas fa-chevron-right"></i></a>
                  </div>
                  </div>
                  <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="professor-box">
                    <h3>Maryra </br>Collins</h3>
                    <img src="<?php echo base_url('assets/');?>img/professor-img1.jpg"/>
                    <a href="#" title="Select package" class="select-package-btn bg-white">View profile</i></a>
                    <a href="#" title="Select package" class="select-package-btn">Select  professor <i class="fas fa-chevron-right"></i></a>
                  </div>
                  </div>
                  <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="professor-box">
                    <h3>Emanuelle </br>Le Quare</h3>
                    <img src="<?php echo base_url('assets/');?>img/professor-img2.jpg"/>
                    <a href="#" title="Select package" class="select-package-btn bg-white">View profile</i></a>
                    <a href="#" title="Select package" class="select-package-btn">Select  professor <i class="fas fa-chevron-right"></i></a>
                  </div>
                  </div>
                  <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="professor-box">
                    <h3>Mark </br>Smith</h3>
                    <img src="<?php echo base_url('assets/');?>img/professor-img1.jpg"/>
                    <a href="#" title="Select package" class="select-package-btn bg-white">View profile</i></a>
                    <a href="#" title="Select package" class="select-package-btn">Select  professor <i class="fas fa-chevron-right"></i></a>
                  </div>
                  </div>
                  <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="professor-box">
                    <h3>Gracelyn </br>Hargreaves</h3>
                    <img src="<?php echo base_url('assets/');?>img/professor-img2.jpg"/>
                    <a href="#" title="Select package" class="select-package-btn bg-white">View profile</i></a>
                    <a href="#" title="Select package" class="select-package-btn">Select  professor <i class="fas fa-chevron-right"></i></a>
                  </div>
                  </div>
                  <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="professor-box">
                    <h3>Maryra </br>Collins</h3>
                    <img src="<?php echo base_url('assets/');?>img/professor-img1.jpg"/>
                    <a href="#" title="Select package" class="select-package-btn bg-white">View profile</i></a>
                    <a href="#" title="Select package" class="select-package-btn">Select  professor <i class="fas fa-chevron-right"></i></a>
                  </div>
                  </div>
                  <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="professor-box">
                    <h3>Emanuelle </br>Le Quare</h3>
                    <img src="<?php echo base_url('assets/');?>img/professor-img2.jpg"/>
                    <a href="#" title="Select package" class="select-package-btn bg-white">View profile</i></a>
                    <a href="#" title="Select package" class="select-package-btn">Select  professor <i class="fas fa-chevron-right"></i></a>
                  </div>
                  </div>
              </div>
            </section>
          </div>
          <div class="tab-pane fade tab" id="date" role="tabpanel" aria-labelledby="date-tab">
            <section class="booking-content">
              <div class="container">
                <div class="page-heading">
                  <div class="container">
                    <div class="row border-0">
                      <div class="col-lg-12 col-md-12 col-sm-12 heading">
                        <h2 class="">Select your date</h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="tab-pane fade tab" id="account" role="tabpanel" aria-labelledby="account-tab">
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
                  <form class="needs-validation">
                    <div class="form-row form-account-create">
                      <div class="col-md-6 mb-5">
                        <label>Email*</label>
                        <input type="text" class="form-control" placeholder="University of Oxford">
                      </div>
                      <div class="col-md-6 mb-5">
                        <label>Set  password*</label>
                        <input type="text" class="form-control" value="" placeholder="1234567890">
                      </div>
                      <div class="col-md-6 mb-5">
                        <label>Last name*</label>
                        <input type="text" class="form-control" value="" placeholder="Garner-Jones">
                      </div>
                      <div class="col-md-6 mb-5">
                        <label>First  name*</label>
                        <input type="text" class="form-control" value="" placeholder="Louise">
                      </div>
                      <div class="col-md-6 mb-5">
                        <label>Country  of  residence*</label>
                        <input type="text" class="form-control" value="" placeholder="Canada">
                      </div>
                      <div class="col-md-6 mb-5">
                        <label>Phone  number</label>
                        <input type="number" class="form-control" value="" placeholder="+44 (0) 7123 456 789">
                      </div>
                      <div class="col-md-6 mb-5">
                        <label>Your current school/university</label>
                        <input type="number" class="form-control" value="" placeholder="McGill University">
                      </div>
                      <div class="col-md-6 mb-5">
                        <label>Your current GPA</label>
                        <input type="number" class="form-control" value="" placeholder="1.0">
                      </div>
                      <div class="col-md-6 mb-5">
                        <label>Yoru current major</label>
                        <input type="number" class="form-control" value="" placeholder="Mathematics">
                      </div>
                      <div class="col-md-6 mb-5">
                        <label></label>
                        <a href="#" style="width: 250px; float: right;" title="Select package" class="select-package-btn">Proceed to  payment <i class="fas fa-chevron-right"></i></a>
                      </div>
                    </div>
                    
                  </form>
                </div>
              </div>
            </section>
          </div>
          <div class="tab-pane fade tab" id="summary" role="tabpanel" aria-labelledby="summary-tab">
            <section class="booking-content">
              <div class="container">
                <div class="row ">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <h2>Your information</h2>
                    <ul class="list-information">
                      <li><span>Last name</span> Garner-Jones</li>
                      <li><span>First name</span> Louise</li>
                      <li><span>Country of residence</span> Canada</li>
                      <li><span>Phone number</span> +44 (0) 7123 456 789</li>
                      <li><span>Degree  considered</span> MBA / EMBA </li>
                      <li><span>School(s) considered</span> Australian  National  University </li>
                      <li><span>Intended  major</span> Advertising  and Public  Relations</li>
                    </ul>
                    <h2>Selected package</h2>
                    <div class="selected-package">
                        <h3>MBA / EMBA </br> 2  Schools package <span>€XXXX</span></h3>
                        <a href="#" title="Select package" class="select-package-btn">Change  package <i class="fas fa-chevron-right"></i></a>
                    </div>                    
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12 payment-col">
                    <h2>Payment information</h2>
                    <div class="form-row mb-5">
                      <div class="col-md-12 mb-2">
                        <label class="mb-1">Card  information</label>
                        <input type="text" class="form-control" placeholder="1234 1234 1234 1234">
                      </div>
                      <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="MM / YY ">
                      </div>
                      <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="CVC">
                      </div>
                    </div>
                    <div class="form-row mb-5">
                      <div class="col-md-12 mb-2">
                        <label class="mb-1">Name  on  card</label>
                        <input type="text" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="form-row mb-5">
                      <div class="col-md-6 mb-2">
                        <label class="mb-1">Country or  region</label>
                        <select class="form-select bg-white" aria-label="Default select example">
                          <option selected="">United Kingdom</option>
                          <option value="1">United Kingdom 1</option>
                          <option value="2">United Kingdom 2</option>
                        </select>
                        <ul class="country-btn-list">
                          <li><a href="#" title="Select package" class="select-package-btn">Pay in  30  days <i class="fas fa-chevron-right"></i></a></li>
                          <li><a href="#" title="Select package" class="select-package-btn">Pay in  4 installments <i class="fas fa-chevron-right"></i></a></li>
                          <li><a href="#" title="Select package" class="select-package-btn">Monthly financing <i class="fas fa-chevron-right"></i></a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 mb-2">
                        <label class="mb-1"></label>
                        <input type="text" class="form-control" placeholder="Post code">
                        <p><a href="#" title="Select package" class="select-package-btn mt-4">Make  full  payment <i class="fas fa-chevron-right"></i></a></p>
                        <label class="mb-3">Add a voucher code</label>
                        <input type="text" class="form-control" placeholder="Post code">
                      </div>
                    </div>
                    <div class="payment-radio">
                      <label class="radio">Sign up  to  the Admissions  Key newsletter
                        <input type="radio" name="radio" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                      <label class="radio">Agree  to  our <u>terms  and conditions</u>
                        <input type="radio" name="radio" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="booking-content payment-successfully">
              <div class="container">
                <h5>Your  payment has been  processed successfully!</h5>
                <h5 class="text-dark">Thank you for choosing  Admisssions Key</h5>
                <p>We are glad that you have chosen to become part of our community of high achievers who are</br>
                  regularly admitted into the world’s elite and most competitive university progams.</p>
                  <p>Email confirmation of your order is on it’s way and you will be contacted shortly by your</br>
                    selected expert.</p>
                  <p><a href="#" title="Select package" class="select-package-btn mt-5" style="width: 260px;">Return  to  website <i class="fas fa-chevron-right"></i></a></p>
              </div>
            </section>
          </div>
        </div>
        <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
  </div>
      </div>
    </div>
  
  </article>
  <footer>
    <div class="container">
      <div class="copyright">&copy; Admissions Key 2021</div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script language="javascript" src="<?php echo base_url('assets/') ?>js/custom.js"></script>
</body>

</html>
<script type="text/javascript">
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  if (currentTab==0) 
  {
    var id =document.getElementById('package');
     id.classList.add("show","active");
     var package=document.getElementById('package-tab');
      package.classList.add("active");
  }
  if (currentTab==1) 
  {
    var id =document.getElementById('professor');
     id.classList.add("show","active");
      var professor=document.getElementById('professor-tab');
      professor.classList.add("active");
  }
  if (currentTab==2) 
  {
    var id =document.getElementById('date');
     id.classList.add("show","active");
      var date=document.getElementById('date-tab');
      date.classList.add("active");
  }
  if (currentTab==3) 
  {
    var id =document.getElementById('account');
     id.classList.add("show","active");
      var account=document.getElementById('account-tab');
      account.classList.add("active");
  }
  if (currentTab==4) 
  {
    var id =document.getElementById('summary');
     id.classList.add("show","active");
     var summary=document.getElementById('summary-tab');
      summary.classList.add("active");
  }
    
     
      // professor.classList.add("show","active");
  // Exit the function if any field in the current tab is invalid:
  //if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>