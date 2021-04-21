<?php if (!empty($this->session->flashdata('hasil'))){ ?>
	<div class="alert alert-success" role="alert">
  		<?php echo $this->session->flashdata('hasil'); ?>
	</div>
<?php } ?>