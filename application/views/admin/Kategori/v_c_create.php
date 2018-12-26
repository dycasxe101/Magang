
<?php 
	echo validation_errors('<div class="alert alert-warning">', '</div>');
	echo form_open(base_url('admin/kategori/add'));
?>
<div class = "col-md-12">
    <div class="form-group form-group-lg">
    	<label>Nama Kategori</label>
        <input type="text" name="nama_kategori" class="form-control" placeholder="Kategori" value="<?php echo set_value('nama_kategori')?>"/ required>
    </div>
    <div class="form-group ">
        <input type="submit" name="submit" class="btn btn-success btn-lg" value="save"/>
        <input type="reset" name="submit" class="btn btn-default btn-lg" value="reset"/>
    </div>
</div>
<php
	form_close();

 ?>