<p><a href="<?php echo base_url('admin/user/add')?>" class="btn btn-primary">
<i class ="fa fa-plus"></i>Tambah</a></p>

<?php 
if($this->session->flashdata('sukses')){
	echo '<div class="alert alert-success">';
    echo $this->session->flashdata('sukses');	
    echo '</div>';
}
?>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
    	<th class="center">NO</th>
        <th class="center">Nama</th>
        <th class="center">ID Admin</th>
        <th class="center">Username</th>
        <th class="center">Email</th>
        <th class="center">Kontak</th>
        <th class="center"	>Edit</th>
    </tr>
</thead>
<tbody>
	<?php $i=1; foreach($admin as $admin) {?>
    <tr class="odd gradeX">
        <td><?php echo $i ?></td>
        <td><?php echo $admin->nama_admin ?></td>
        <td><?php echo $admin->id_admin ?></td>
        <td><?php echo $admin->username_admin ?></td>
        <td><?php echo $admin->email_admin ?></td>
        <td><?php echo $admin->ponsel_admin ?></td>
        <td> 
        	<a href = "<?php echo base_url('admin/user/edit/'.$admin->id_admin) ?>" class="btn btn-primary btn-sm" title="Edit Admin"> <i class="fa fa-edit"></i></a>  
            <?php include('delete.php');?>
        </td>
        
    </tr><?php  $i++; }?>
</tbody>
</table>