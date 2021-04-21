  <div clas="row">
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header">Update Data Customers 
          <a href="<?php echo base_url('customers'); ?>" class="btn btn-sm btn-danger float-right">Back</a>
        </h5>
        <div class="card-body">
          <form class="form-signin" role="form" action="<?php echo base_url('customers/edit'); ?>" method="POST">
            <input type="hidden" class="form-control" name="id" value="<?php echo $customers[0]->id; ?>" readonly required>
            <div class="form-group">
              <label>Company</label>
              <input type="text" class="form-control" name="company" value="<?php echo $customers[0]->company; ?>" required autofocus>
            </div>
            <div class="form-group">
              <label>Last Name</label>
              <input type="text" class="form-control" name="last_name" value="<?php echo $customers[0]->last_name; ?>">
            </div>
            <div class="form-group">
              <label>First Name</label>
              <input type="text" class="form-control" name="first_name" value="<?php echo $customers[0]->first_name; ?>">
            </div>
            <div class="form-group">
              <label>Email Address</label>
              <input type="text" class="form-control" name="email_address" value="<?php echo $customers[0]->email_address; ?>">
            </div>
            <div class="form-group">
              <label>Job Title</label>
              <input type="text" class="form-control" name="job_title" value="<?php echo $customers[0]->job_title; ?>">
            </div>
            <div class="form-group">
              <label>Business Phone</label>
              <input type="text" class="form-control" name="business_phone" value="<?php echo $customers[0]->business_phone; ?>">
            </div>
            <div class="form-group">
              <label>Home Phone</label>
              <input type="text" class="form-control" name="home_phone" value="<?php echo $customers[0]->home_phone; ?>">
            </div>
            <div class="form-group">
              <label>Mobile Phone</label>
              <input type="text" class="form-control" name="mobile_phone" value="<?php echo $customers[0]->mobile_phone; ?>">
            </div>
            <div class="form-group">
              <label>Fax Number</label>
              <input type="text" class="form-control" name="fax_number" value="<?php echo $customers[0]->fax_number; ?>">
            </div>
            <div class="form-group">
              <label>Address</label>
              <input type="text" class="form-control" name="address" value="<?php echo $customers[0]->address; ?>">
            </div>
            <div class="form-group">
              <label>City</label>
              <input type="text" class="form-control" name="city" value="<?php echo $customers[0]->city; ?>">
            </div>
            <div class="form-group">
              <label>State Province</label>
              <input type="text" class="form-control" name="state_province" value="<?php echo $customers[0]->state_province; ?>">
            </div>
            <div class="form-group">
              <label>ZIP Postal Code</label>
              <input type="text" class="form-control" name="zip_postal_code" value="<?php echo $customers[0]->zip_postal_code; ?>">
            </div>
            <div class="form-group">
              <label>Country Region</label>
              <input type="text" class="form-control" name="country_region" value="<?php echo $customers[0]->country_region; ?>">
            </div>
            <div class="form-group">
              <label>Web Page</label>
              <input type="text" class="form-control" name="web_page" value="<?php echo $customers[0]->web_page; ?>">
            </div>
            <div class="form-group">
              <label>Notes</label>
              <input type="text" class="form-control" name="notes" value="<?php echo $customers[0]->notes; ?>">
            </div>
            <div class="form-group">
              <label>Attachments</label>
              <input type="text" class="form-control" name="attachments" value="<?php echo $customers[0]->attachments; ?>">
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-success">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
