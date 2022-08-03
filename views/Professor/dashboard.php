
<?php
$professor_data= get_name_by_id('users',$this->session->userdata['logged_in']['id']);
 // encrypt_url(1);
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

          <?php foreach ($data as $key => $row) {// $this->encryption->encrypt($row['id'])) ?>


          <li><a href="<?= base_url('professor/mytask/'.$row['id']) ?>" >

            <div class="card">  
            <!--   $old_date = date($row['created_date']); 

               $old_date_timestamp = strtotime($old_date); 

               //$old_date_timestamp.=+ 30;

               echo $date= date('d F Y',$old_date_timestamp);
               $new_and_old = array('duration' =>2);
               $new_student=date('d F Y',strtotime('+'.$new_and_old['duration'].' days',strtotime($date))) . PHP_EOL;
               echo $new_student;
               die(); -->

              <?php if($row['new_status']==0){ ?>

              <div class="card-header bg-yellow">

                <img class="card-user" src="<?php echo base_url('assets/images/'.$row['profile']) ?>" /> <?php echo $row['name']; ?>

                <span class="new-user">New</span>

              </div>

            <?php } else {?>

              <div class="card-header">

                <?php if($row['profile']=='')
            {
              $str = substr ( $row['name'] , 0 , 1 );
              ?>
            <span data-letters='<?php echo strtoupper($str) ?>'></span>
            <?php
            }
            else
            {
              ?>            
          <img class="card-user" src="<?php echo base_url('assets/images/'. $row['profile']);?>"/>
          <?php echo $row['name']; ?>
          <?php } ?>

              </div>

              <?php } ?>

              <div class="card-body">

                <h5 class="card-title"><?php echo $row['package_sub_title']; ?></h5>

                <p class="card-text"><?php echo $row['package_name']; ?></p>

               <div class="date">

                <?php $old_date = date($row['created_date']); 

                $old_date_timestamp = strtotime($old_date);

                ?>

                <span><?php echo date('d F Y',$old_date_timestamp); ?></span>

                <?php if($row['progress_status']==3){ ?>

                <span class="status complete">Complete</span>

                <?php } elseif($row['progress_status']==2) { ?>

                 <span class="status disabled">In progress</span>

                 <?php } elseif($row['progress_status']==1){  ?>

                 <span class="status">Approved</span>

               <?php } ?>

               </div>

              </div>

            </div>

          </a></li>

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

    url: '<?php echo base_url('Professor/sort_filter')?>', 

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

    url: '<?php echo base_url('Professor/search_filter')?>', 

    data: { search_filter: this.value },

    success: function(data) {

       $('#one').html(data);

       $('#two').hide();

    }

});



});

</script> 