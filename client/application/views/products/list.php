  <div clas="row">
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header">Data Products <a href="<?php echo base_url('products/create'); ?>" class="btn btn-sm btn-success float-right">Insert Data</a></h5>
        <div class="card-body">
          <div class="table-responsive">
            <table id="myTable" class="table table-sm table-hover">
              <thead>
                <tr>
                  <th>ACTION</th>
                  <th>ID</th>
                  <th>Product Code</th>
                  <th>Product Name</th>
                  <th>Description</th>
                  <th>Standard Cost</th>
                  <th>List Price</th>
                  <th>Reorder Level</th>
                  <th>Target Level</th>
                  <th>Quantity per Unit</th>
                  <th>Discontinued</th>
                  <th>Minimum Reorder Quantity</th>
                  <th>Category</th>
                  <th>Attachments</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($products as $m){
                  echo "<tr>
                  <td>
                  <div class='btn-group-vertical'>
                  <a href='".base_url('products/edit/').$m->id."' class='btn btn-sm btn-warning'>Update</a> 
                  <a href='".base_url('products/delete/').$m->id."' class='btn btn-sm btn-danger'>Delete</a>
                  </div>
                  </td>
                  <td>$m->id</td>
                  <td>$m->product_code</td>
                  <td>$m->product_name</td>
                  <td>$m->description</td>
                  <td>$m->standard_cost</td>
                  <td>$m->list_price</td>
                  <td>$m->reorder_level</td>
                  <td>$m->target_level</td>
                  <td>$m->quantity_per_unit</td>
                  <td>$m->discontinued</td>
                  <td>$m->minimum_reorder_quantity</td>
                  <td>$m->category</td>
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