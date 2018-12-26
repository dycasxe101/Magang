<p><a href="<?php echo base_url('admin/kategori/add')?>" class="btn btn-primary">
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
        <th class="center">ID Kategori</th>
        <th class="center">Nama Kategori</th>
        <th class="center">Hapus</th>
    </tr>
</thead>
<tbody>
	<?php $i=1; foreach($kategori as $kategori) {?>
    <tr class="odd gradeX">
        <td><?php echo $i ?></td>
        <td><?php echo $kategori->id_kategori ?></td>
        <td><?php echo $kategori->nama_kategori ?></td>
        <td> 
            <?php include('delete.php');?>
        </td>
        
    </tr><?php  $i++; }?>
</tbody>
</table>