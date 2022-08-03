 <article>   
    <div class="sec-task2 p-0">
      <div class="container p-0">
        <div class="bg-task">
          <div class="form mt-4">
          	 <?php echo $this->session->flashdata('error_message'); ?>
           <?php echo $this->session->flashdata('success_message'); ?>
           <div class="cus_error" style="color:red; font-weight: 700;"><?php echo validation_errors(); ?> </div> 
            <form class="needs-validation" method="POST" novalidate action="<?= base_url('Change-Password'); ?>">
              <div class="form-row">
                <div class="col-md-4 mb-5">
                  <label>Old Password</label>
                  <input type="password" class="form-control" name="Old_password" id="validationCustom01"  placeholder="Old Password">
                  <input type="password" class="form-control" name="Db_password"   placeholder="Db Password" value="<?= $data['password'];?>" hidden>
                  <input type="text" class="form-control" name="id"   placeholder="Db Password" value="<?= $data['id'];?>" hidden>
                </div>
                <div class="col-md-4 mb-5">
                  <label>New Password</label>
                  <input type="password" class="form-control" name="new_password" id="validationCustom02" placeholder="New Password">
                </div>
                <div class="col-md-4 mb-5">
                  <label>Confirm Password</label>
                  <input type="password" name="confirm_password" class="form-control" id="validationCustom03" placeholder="Confirm Password">
                </div>
              </div>
              <button class="btn btn-primary" type="submit">Change Password</button>
            </form>
          </div>
        </div>
 
    </div>
</div>

  </article>
