
<?php
$admin_data= get_name_by_id('users',$this->session->userdata['logged_in']['id']);
$student_name= get_name_by_id('users',$this->uri->segment(3));
   ?>
  <article>

    <div class="page-heading">

      <div class="container">

        <h2>babloo</h2>

        <div class="row">

          <div class="col-lg-6 col-md-6 col-sm-6 heading">
            <?php
            if($admin_data['profile']=='')
            {
               $str = substr ( $admin_data['name'] , 0 , 1 );
               echo "<span data-letters=".strtoupper($str)."></span>";
            } else{
            ?>
            <img class="heading-user" src="<?php echo base_url('assets/images/'.$admin_data['profile']); ?>" /><?php } ?>  <?php echo $admin_data['name'];  ?>

          </div>

          <div class="col-lg-3 col-md-3 col-sm-3 heading-input">

           
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

          <?php foreach ($data as $key => $row)
          {
            ?>
            
          
          <li><a href="#">
            <div class="card">
           <div class="card-header">
                <input type="checkbox" name="">
              </div>
              <div class="card-body">
                <h5 class="card-title"> <?= $row['package_sub_title'];?></h5>
                <p class="card-text"> <?= $row['package_name'];?></p>
              
                <?php $old_date = date($row['created_date']); 

                $old_date_timestamp = strtotime($old_date);

                ?>

                <span><?php echo date('d F Y',$old_date_timestamp); ?></span><br/><br/>
                <i class="fa fa-paperclip" aria-hidden="true"></i> <span class="status complete">attachments</span>
              </div>
              <div class="card-footer">
              	<div class="date">
                  <?php $pro_data=get_name_by_id('users',$row['created_by']);?>
              	<span>Professor: <?= $pro_data['name'] ?> </span>
               <?php if($row['progress_status']==3){ ?>

                <span class="status complete">Complete</span>

                <?php } elseif($row['progress_status']==2) { ?>

                 <span class="status disabled">In progress</span>

                 <?php } elseif($row['progress_status']==1){  ?>

                 <span class="status">Not Started</span>

               <?php } ?>
              </div>
              </div>
            </div>
          </li>
        </a>
            <?php
          }
          ?>
          
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