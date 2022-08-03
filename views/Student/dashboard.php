

    <article>
    <div class="page-heading">
      <div class="container">
        <h2>My Tasks</h2>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 heading">
            <?php
            if($student_data['profile']=='')
            {
               $str = substr ( $student_data['name'] , 0 , 1 );
               echo "<span data-letters=".strtoupper($str)."></span>";
            } else{
            ?>
            <img class="heading-user" src="<?php echo base_url('assets/images/'.$student_data['profile']) ?>"/> <?php } ?>  <?php echo $student_data['name'];  ?>
            <img class="ml-2" width="35" src="<?= base_url('assets') ?>/img/flag.png" />

          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 heading-input">
            <!-- <select>
              <option selected>Sort</option>
              <option value="1">Sort 1</option>
              <option value="2">Sort 2</option>
              <option value="3">Sort 3</option>
            </select>  -->
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 heading-input">
            <div class="input-group search-box">
              <input type="search" id="search_filter" class="form-control" placeholder="search" aria-label="search"
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
          <?php  foreach ($data as $key => $row)
          {
            ?>
          <li><a href="<?php echo base_url('student/students_tasks/').$row['created_date']?>">
            <div class="card">
              <div class="card-header bg-yellow"> <?php $pro_data=get_name_by_id('users',$row['created_by']);?>

                <img class="card-user" src="<?php echo base_url('assets/images/'.$pro_data['profile']) ?>" /> <?= $pro_data['name'] ?> 
                <span class="new-user">New</span>
              </div>
              <div class="card-body">
                <h5 class="card-title"><?= $row['package_sub_title'];?></h5>
                <p class="card-text"><?= $row['package_name'];?></p>
                  <div class="date">
                  <!-- <span class="w-100 d-inline-block">06 January 2021</span> -->
                  <?php $pro_data=get_name_by_id('users',$row['created_by']);?>
               <!--  <span>Professor: <?= $pro_data['name'] ?> </span> -->
               <?php if($row['progress_status']==3){ ?>

                <span class="status complete">Complete</span>

                <?php } elseif($row['progress_status']==2) { ?>

                 <span class="status disabled">In progress</span>

                 <?php } elseif($row['progress_status']==1){  ?>

                 <span class="status">Not Started</span>

               <?php } ?>
                  <div class="attachments-box">
                    <input type="file" id="myfile" name="myfile">
                    <i class="fas fa-paperclip"></i> Attachments
                  </div>
                 <!--  <span class="status n-started">Not  started</span> -->
                 </div>
              </div>
            </div>
          </a>
          </li>
        <?php }?>
        </ul>
      </span>
      </div>
    </div>


  </article>


<script type="text/javascript">
  $('#search_filter').keyup(function () {

   //$('#one').text($(this).val());



   $.ajax({  

    type: 'POST',  

    url: '<?php echo base_url('Student/search_filter')?>', 

    data: { search_filter: this.value },

    success: function(data) {

       $('#one').html(data);

       $('#two').hide();

    }

});



});

</script> 