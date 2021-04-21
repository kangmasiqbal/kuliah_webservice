  <div clas="row">
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header">Insert Data Products 
          <a href="<?php echo base_url('products'); ?>" class="btn btn-sm btn-danger float-right">Back</a>
        </h5>
        <div class="card-body">
          <form class="form-signin" role="form" action="<?php echo base_url('products/create'); ?>" method="POST">
            <div class="form-group">
              <label>Supplier IDs</label>
              <input type="text" class="form-control" name="supplier_ids" value="<?php echo set_value('supplier_ids') ?>" required autofocus>
            </div>
            <div class="form-group">
              <label>Product Code</label>
              <input type="text" class="form-control" name="product_code" value="<?php echo set_value('product_code') ?>">
            </div>
            <div class="form-group">
              <label>Product Name</label>
              <input type="text" class="form-control" name="product_name" value="<?php echo set_value('product_name') ?>">
            </div>
            <div class="form-group">
              <label>Description</label>
              <input type="text" class="form-control" name="description" value="<?php echo set_value('description') ?>">
            </div>
            <div class="form-group">
              <label>Standard Cost</label>
              <input type="text" class="form-control" name="standard_cost" value="<?php echo set_value('standard_cost') ?>">
            </div>
            <div class="form-group">
              <label>List Price</label>
              <input type="text" class="form-control" name="list_price" value="<?php echo set_value('list_price') ?>">
            </div>
            <div class="form-group">
              <label>Reorder Level</label>
              <input type="text" class="form-control" name="reorder_level" value="<?php echo set_value('reorder_level') ?>">
            </div>
            <div class="form-group">
              <label>Target Level</label>
              <input type="text" class="form-control" name="target_level" value="<?php echo set_value('target_level') ?>">
            </div>
            <div class="form-group">
              <label>Quantity per Unit</label>
              <input type="text" class="form-control" name="quantity_per_unit" value="<?php echo set_value('quantity_per_unit') ?>">
            </div>
            <div class="form-group">
              <label>Discontinued</label>
              <input type="text" class="form-control" name="discontinued" value="<?php echo set_value('discontinued') ?>">
            </div>
            <div class="form-group">
              <label>Minimum Reorder Quantity</label>
              <input type="text" class="form-control" name="minimum_reorder_quantity" value="<?php echo set_value('minimum_reorder_quantity') ?>">
            </div>
            <div class="form-group">
              <label>Category</label>
              <input type="text" class="form-control" name="category" value="<?php echo set_value('category') ?>">
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
