
<?php 
	echo validation_errors('<div class="alert alert-warning">', '</div>');
	echo form_open(base_url('admin/user/edit/'.$admin->id_admin));
?>
<div class = "col-md-12">
    <div class="form-group form-group-lg">
    	<label>Nama</label>
        <input type="text" name="nama_admin" class="form-control" placeholder="Nama Admin" value="<?php echo $admin->nama_admin ?>"/>
    </div>
    <div class="form-group form-group-lg">
    	<label>Email</label>
        <input type="text" name="email_admin" class="form-control" placeholder="Email Admin" value="<?php echo $admin->email_admin ?>"/>
    </div>
    <div class="form-group form-group-lg">
    	<label>Kontak</label>
        <input type="text" name="ponsel_admin" class="form-control" placeholder="Kontak " value="<?php echo $admin->ponsel_admin ?>"/>
    </div>
    <div class="form-group form-group-lg">
    	<label>Username</label>
        <input type="text" name="username_admin" class="form-control" placeholder= "Username " value="<?php echo $admin->username_admin ?>"/ readonly>
    </div>
     <div class="form-group form-group-lg">
    	<label>Password</label>
        <input type="password" name="password_admin" class="form-control" placeholder="Password" value="<?php echo $admin->password_admin ?>"/>
    </div>
    <div class="form-group ">
        <input type="submit" name="submit" class="btn btn-primary btn-lg" value="save"/>
    </div>
</div>
<php
	form_close();

 ?>