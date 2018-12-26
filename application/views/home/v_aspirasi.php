 
    <div class="container">
        <div class="row">
        <?php
		if($this->session->flashdata('sukses')){
			echo '<div class="alert alert-success" id="form">';
			echo 'Aspirasi telah berhasil disimpan, akan segera kami tindak lanjuti. Terima kasih';
			echo '<br>';
			echo 'Nomor tiket anda ';
			echo $this->session->flashdata('sukses');
			echo '(Simpan nomor tiket, untuk melihat respon aspirasi yang anda sampaikan). ';
			echo '<a href="#a" id="hide">[tutup pesan]</a>';
			echo '</div>';
		}
		?>
		  <script>
		  $(document).ready(function(){
			  $("#hide").click(function(){
				  $("#form").hide();
			  });
		  });
		  </script>
        
        
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">ASPIRASI
                        <strong>form</strong>
                    </h2>
                    <?php 
						echo validation_errors('<div class="alert alert-warning">', '</div>');
						echo form_open(base_url('aspirasi/add'));
					?>
                    <hr>
                    <p>Mari Bantu Kami dengan Aspirasi Kalian</p>
                    <form role="form">
                        <div class="row"> 
                            <div class="form-group col-lg-4">
                                <label>Nama</label>
                                <input name="nama" type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email</label>
                                <input name="email" type="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Kontak</label>
                                <input name ="ponsel" type="ponsel" class="form-control">
                            </div>
                            <div class="form-group col-lg-4"> 
                                <label>Kategori</label>
                                <select name="id_kategori" class="form-control"> 
                                	<?php foreach($kategori as $kategori) { ?>
                                    <option value="<?php echo $kategori->id_kategori ?>">
                                    <?php echo $kategori->nama_kategori?>
                                    </option>
                                    <?php }?>
                                </select>
                            </div> 
                            <div class="clearfix"></div> 
                            <div class="form-group col-lg-12"> 
                                <label>Pesan Aspirasi</label> 
                                <textarea class="form-control" rows="6" name="isi_aspirasi"></textarea> 
                            </div> 
                            <input type ="hidden" name="uid_aspirasi" value=" <?php
								$kode_pendaftaran = generate_code(); echo $kode_pendaftaran;  ?> ">
                            <?php
								function generate_code(){
									$kode_laporan=NULL;
									$n = 6; // jumlah karakter yang akan di bentuk.
									$chr = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
									for($i=0;$i<$n;$i++){
										$rIdx = rand(1,strlen($chr));
										$kode_laporan .=substr($chr,$rIdx,1);
									}
									return $kode_laporan;
								};
							?> 
                            <input type="hidden" name="status_aspirasi" value="Not Yet"> 
                            <div class="form-group col-lg-12"> 
                                <button type="submit" class="btn btn-default">Submit</button> 
                            </div> 
                        </div> 
                    </form>
                </div> 
            </div> 
        </div> 

    </div>
    <!-- /.container -->