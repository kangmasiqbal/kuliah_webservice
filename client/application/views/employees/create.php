  <div clas="row">
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header">Insert Data Employees 
          <a href="<?php echo base_url('employees'); ?>" class="btn btn-sm btn-danger float-right">Back</a>
        </h5>
        <div class="card-body">
          <form class="form-signin" role="form" action="<?php echo base_url('employees/create'); ?>" method="POST">
            <div class="form-group">
              <label>Company</label>
              <input type="text" class="form-control" name="company" value="<?php echo set_value('company') ?>" required autofocus>
            </div>
            <div class="form-group">
              <label>Last Name</label>
              <input type="text" class="form-control" name="last_name" value="<?php echo set_value('last_name') ?>">
            </div>
            <div class="form-group">
              <label>First Name</label>
              <input type="text" class="form-control" name="first_name" value="<?php echo set_value('first_name') ?>">
            </div>
            <div class="form-group">
              <label>Email Address</label>
              <input type="text" class="form-control" name="email_address" value="<?php echo set_value('email_address') ?>">
            </div>
            <div class="form-group">
              <label>Job Title</label>
              <input type="text" class="form-control" name="job_title" value="<?php echo set_value('job_title') ?>">
            </div>
            <div class="form-group">
              <label>Business Phone</label>
              <input type="text" class="form-control" name="business_phone" value="<?php echo set_value('business_phone') ?>">
            </div>
            <div class="form-group">
              <label>Home Phone</label>
              <input type="text" class="form-control" name="home_phone" value="<?php echo set_value('home_phone') ?>">
            </div>
            <div class="form-group">
              <label>Mobile Phone</label>
              <input type="text" class="form-control" name="mobile_phone" value="<?php echo set_value('mobile_phone') ?>">
            </div>
            <div class="form-group">
              <label>Fax Number</label>
              <input type="text" class="form-control" name="fax_number" value="<?php echo set_value('fax_number') ?>">
            </div>
            <div class="form-group">
              <label>Address</label>
              <input type="text" class="form-control" name="address" value="<?php echo set_value('address') ?>">
            </div>
            <div class="form-group">
              <label>City</label>
              <input type="text" class="form-control" name="city" value="<?php echo set_value('city') ?>">
            </div>
            <div class="form-group">
              <label>State Province</label>
              <input type="text" class="form-control" name="state_province" value="<?php echo set_value('state_province') ?>">
            </div>
            <div class="form-group">
              <label>ZIP Postal Code</label>
              <input type="text" class="form-control" name="zip_postal_code" value="<?php echo set_value('zip_postal_code') ?>">
            </div>
            <div class="form-group">
              <label>Country Region</label>
              <input type="text" class="form-control" name="country_region" value="<?php echo set_value('country_region') ?>">
            </div>
            <div class="form-group">
              <label>Web Page</label>
              <input type="text" class="form-control" name="web_page" value="<?php echo set_value('web_page') ?>">
            </div>
            <div class="form-group">
              <label>Notes</label>
              <input type="text" class="form-control" name="notes" value="<?php echo set_value('notes') ?>">
            </div>
            <div class="form-group">
              <label>Attachments</label>
              <input type="text" class="form-control" name="attachments" value="<?php echo set_value('attachments') ?>">
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-success">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
