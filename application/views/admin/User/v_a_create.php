
<?php 
	echo validation_errors('<div class="alert alert-warning">', '</div>');
	echo form_open(base_url('admin/user/add'));
?>
<div class = "col-md-12">
    <div class="form-group form-group-lg">
    	<label>Nama</label>
        <input type="text" name="nama_admin" class="form-control" placeholder="Nama Admin" value="<?php echo set_value('nama_admin')?>"/ required>
    </div>
    <div class="form-group form-group-lg">
    	<label>Email</label>
        <input type="text" name="email_admin" class="form-control" placeholder="Email Admin" value="<?php echo set_value('email_admin')?>"/ required>
    </div>
    <div class="form-group form-group-lg">
    	<label>Kontak</label>
        <input type="text" name="ponsel_admin" class="form-control" placeholder="Kontak " value="<?php echo set_value('ponsel_admin')?>"/ required>
    </div>
    <div class="form-group form-group-lg">
    	<label>Username</label>
        <input type="text" name="username_admin" class="form-control" placeholder= "Username " value="<?php echo set_value('username_admin')?>"/ required>
    </div>
     <div class="form-group form-group-lg">
    	<label>Password</label>
        <input type="text" name="password_admin" class="form-control" placeholder="Password" value="<?php echo set_value('password_admin')?>"/ required>
    </div>
    <div class="form-group ">
        <input type="submit" name="submit" class="btn btn-success btn-lg" value="simpan"/>
        <input type="reset" name="submit" class="btn btn-default btn-lg" value="reset"/>
    </div>
</div>
<php
	form_close();

 ?>