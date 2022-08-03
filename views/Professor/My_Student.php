<?php
$professor_data= get_name_by_id('users',$this->session->userdata['logged_in']['id']);
?>

  <article>

    <div class="page-heading">

      <div class="container">

        <h2>My Tasks</h2>

        <div class="row">

          <div class="col-lg-6 col-md-6 col-sm-6 heading">

            <?php
            if($professor_data['profile']=='')
            {
               $str = substr ( $professor_data['name'] , 0 , 1 );
               echo "<span data-letters=".strtoupper($str)."></span>";
            } else{
            ?>
            <img class="heading-user" src="<?php echo base_url('assets/images/'.$professor_data['profile']); ?>" /><?php } ?> Professor <?php echo $professor_data['name'];  ?>

          </div>

          <div class="col-lg-3 col-md-3 col-sm-3 heading-input">

            

            <select id="sort_filter" class="form-select" aria-label="Default select example">

              <option selected disabled="">Sort</option>

              <option value="name">Sort by name</option>

              <option value="package_name">Sort by task</option>

              <option value="created_date">Sort by date</option>

            </select>

          </div>

          <div class="col-lg-3 col-md-3 col-sm-3 heading-input">

            <div class="input-group search-box">

              <input type="search" class="form-control" id="search_filter" placeholder="search" aria-label="search"

                aria-describedby="basic-addon2">

              <span class="input-group-text" id="basic-addon2"><button type="button" class="btn search-btn">

                  <i class="fas fa-search"></i></button></span>

            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="sec-task">

      <div class="container">

        <span id="one"></span>

        <span id="two">

        <ul class="task-card">          

          <?php foreach ($data as $key => $row) { ?>

           <li>

            <div class="card">

              <?php if($row['new_status']==0){ ?>

              <div class="card-header bg-yellow">

                <?php if($row['profile']=='')
            {
              $str = substr ( $row['name'] , 0 , 1 );
              ?>
            <td><span data-letters='<?php echo strtoupper($str) ?>'></span></td>
            <?php
            }
            else
            {
              ?>            
          <td><img class="card-user" src="<?php echo base_url('assets/images/'. $row['profile']);?>"/></td>
          <?php } ?> <?php echo $row['name']; ?>

                <span class="new-user">New</span>

              </div>

            <?php }elseif ($row['progress_status']==1 or $row['progress_status']==2) {?>

              <div class="card-header bg-yellow">

                <img class="card-user" src="<?php echo base_url('assets/images/'.$row['profile']) ?>" /> <?php echo $row['name']; ?>

                <span class="new-user">PAYMENT DUE</span>

              </div>
           <?php } else {?>

              <div class="card-header">

                <img class="card-user" src="<?php echo base_url('assets/images/'.$row['profile']) ?>" /> <?php echo $row['name']; ?>

              </div>

              <?php } ?>

              <div class="card-body">

                <h5 class="card-title"><?php echo $row['package_sub_title']; ?></h5>

                <ul class="contact-list">

                  <li><img src="<?= base_url() ?>assets/img/icon-email.png" width="15" class="mr-2" /><?php echo $row['email']; ?></li>

                  <li><img src="<?= base_url() ?>assets/img/icon-phone.png" width="18" class="mr-2" /><?php echo $row['mobile']; ?></li>

                </ul>

                <div class="bottom-content">

                  <a href="<?= base_url('professor/packages/'.$row['id'])?>">Multiple Packages <i class="fas fa-chevron-right"></i></a>

                </div>

            </div>

          </li>

          <?php } ?>

        </ul>

      </span>

      </div>

    </div>





  </article>

<script type="text/javascript">

  $('select').on('change', function() {

    //var sort_filter =this.value;

    $.ajax({  

    type: 'POST',  

    url: '<?php echo base_url('Professor/sort_filter_my_student')?>', 

    data: { sort_filter_name: this.value },

    success: function(data) {

       $('#one').html(data);

       $('#two').hide();

    }

});



});



  $('#search_filter').keyup(function () {

   //$('#one').text($(this).val());



   $.ajax({  

    type: 'POST',  

    url: '<?php echo base_url('Professor/search_filter_my_student')?>', 

    data: { search_filter: this.value },

    success: function(data) {

       $('#one').html(data);

       $('#two').hide();

    }

});



});

</script> 