<section class="ftco-section bg-light">
    	<div class="container">
			<?php if($this->session->flashdata('pesan')): ?>
				<?php echo $this->session->flashdata('pesan'); ?>
			<?php endif; ?>
    		<div class="row">
                <?php foreach($property as $pr): ?>
    			<div class="col-md-4 ftco-animate">
    				<div class="properties">
    					<a href="<?php echo base_url('customer/data_properti/detail_properti/'. $pr->id_prop) ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url('assets/upload/'.$pr->gambar) ?>);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
						<span class="status <?php echo $pr->status == '0' ? 'bg-danger' : 'bg-primary'; ?>">
							<?php if ($pr->status == '0'): ?>
								Sedang Disewa
							<?php else: ?>
								<?php echo anchor('customer/rental/tambah_rental/'.$pr->id_prop, '<button class="btn btn-sm btn-primary">Sewa</button>'); ?>
							<?php endif; ?>
						</span>
    						<div class="d-flex">
                                <div class="one" style="flex: 1;">
                                    <h3><a href="<?php echo base_url('customer/data_properti/detail_properti/'.$pr->id_prop) ?>"><?php echo $pr->nama_prop ?></a></h3>
                                    <p><?php echo $pr->area ?></p>
                                </div>
                                <div class="two" style="flex: 1.1;">
                                    <span class="price float-right">Rp. <?php echo number_format($pr->harga,0,',','.') ?></span>
                                </div>
                            </div>

    						<p><?php echo $pr->keterangan ?></p>
    						<hr>
    						<p class="bottom-area d-flex">
                            	<span><i class="flaticon-selection"></i> <?php echo $pr->ukuran ?></span>
    							<span class="ml-auto" style="margin-right: 10px;"><i class="flaticon-bathtub"></i> <?php echo $pr->kamar_mandi ?></span> 
    						    <span><i class="flaticon-bed"> </i> <?php echo $pr->kamar ?></span>
    						</p>
    					</div>
    				</div>
    			</div>
                <?php endforeach; ?>
    		</div>
    	</div>
    </section>