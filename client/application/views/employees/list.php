  <div clas="row">
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header">Data Employees <a href="<?php echo base_url('employees/create'); ?>" class="btn btn-sm btn-success float-right">Insert Data</a></h5>
        <div class="card-body">
          <div class="table-responsive">
            <table id="myTable" class="table table-sm table-hover">
              <thead>
                <tr>
                  <th>ACTION</th>
                  <th>ID</th>
                  <th>COMPANY</th>
                  <th>LAST NAME</th>
                  <th>FIRST NAME</th>
                  <th>EMAIL ADDRESS</th>
                  <th>JOB TITLE</th>
                  <th>BUSINESS PHONE</th>
                  <th>HOME PHONE</th>
                  <th>MOBILE PHONE</th>
                  <th>FAX NUMBER</th>
                  <th>ADDRESS</th>
                  <th>CITY</th>
                  <th>STATE PROVINCE</th>
                  <th>ZIP POSTAL CODE</th>
                  <th>COUNTRY REGION</th>
                  <th>WEB PAGE</th>
                  <th>NOTES</th>
                  <th>ATTACHMENTS</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($employees as $m){
                  echo "<tr>
                  <td>
                  <div class='btn-group-vertical'>
                  <a href='".base_url('employees/edit/').$m->id."' class='btn btn-sm btn-warning'>Update</a> 
                  <a href='".base_url('employees/delete/').$m->id."' class='btn btn-sm btn-danger'>Delete</a>
                  </div>
                  </td>
                  <td>$m->id</td>
                  <td>$m->company</td>
                  <td>$m->last_name</td>
                  <td>$m->first_name</td>
                  <td>$m->email_address</td>
                  <td>$m->job_title</td>
                  <td>$m->business_phone</td>
                  <td>$m->home_phone</td>
                  <td>$m->mobile_phone</td>
                  <td>$m->fax_number</td>
                  <td>$m->address</td>
                  <td>$m->city</td>
                  <td>$m->state_province</td>
                  <td>$m->zip_postal_code</td>
                  <td>$m->country_region</td>
                  <td>$m->web_page</td>
                  <td>$m->notes</td>
                  <td>$m->attachments</td>
                  </tr>";
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>