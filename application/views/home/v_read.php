    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <h2 class="brand-before">
                        <medium>Search Your Aspiration To See Our Respons</medium>
                        <br>
                    </h2>
					<?php 
					
						echo form_open(base_url('aspirasi/readdetail'));
					?>
                    <form name="form" action="<?php echo base_url() ?>read/readdetail" method="post">
                    	<br>
                        <br>
                        <div class="input-group col-md-12">
                        
                                <input type="text" class="form-control input-lg" placeholder="Your Ticket" name="tiket" >
                                <span class="input-group-btn">
                                    <button class="btn btn-info btn-lg" type="button" name="submit">
                                        <i class="glyphicon-search" ></i>
                                    </button>
                                </span>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
