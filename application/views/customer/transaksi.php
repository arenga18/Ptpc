<div class="container">
    <div class="card mx-auto" style="margin-top : 50px; width: 90%; margin-bottom: 50px">
        <div class="card-header">
            Data Transaksi Anda
        </div>
        <?php if($this->session->flashdata('pesan')): ?>
            <?php echo $this->session->flashdata('pesan'); ?>
        <?php endif; ?>
        <div class="card-body">
            <table class="table table-stripped table-responsive table-bordered">
                <tr>
                    <th>No.</th>
                    <th>Tanggal Sewa</th>
                    <th>Nama Customer</th>
                    <th>Nama Properti</th>
                    <th>Alamat</th>
                    <th>Harga /hari</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Keluar</th>
                    <th>Action</th>
                    <th>Batal</th>
                </tr>

                <?php $no=1;
                foreach($transaksi as $tr): ?>

                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo date('d/m/Y', strtotime($tr->tanggal_sewa));?></td>
                        <td><?php echo $tr->nama ?></td>
                        <td><?php echo $tr->nama_prop ?></td>
                        <td><?php echo $tr->alamat ?></td>
                        <td style="white-space: nowrap;">Rp. <?php echo number_format($tr->harga,0,',','.')?></td>
                        <td><?php echo date('d/m/Y', strtotime($tr->tanggal_masuk));?></td>
                        <td><?php echo date('d/m/Y', strtotime($tr->tanggal_keluar));?></td>
                        <td>
                            <?php if($tr->status_sewa == '1'){ ?>
                                <button class="btn btn-sm btn-danger">Selesai</button>
                            <?php }else{ ?>
                                <a href="<?php echo base_url('customer/transaksi/pembayaran/'.$tr->id_transaksi) ?>" class="btn btn-sm btn-success">Cek Pembayaran</a>
                            <?php } ?>
                        </td>
                        <td>

                            <?php 
                                if($tr->status_sewa == '0'){ ?>
                                <a onclick="return confirm('Yakin Batal?')"  class="btn btn-sm btn-danger" href="<?php echo base_url('customer/transaksi/batal_transaksi/'. $tr -> id_transaksi) ?>">Batalkan</a>
                            <?php }else{?>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
                                Batalkan
                                </button>
                            <?php } ?>


                            
                        </td>
                    </tr>

                <?php endforeach; ?>

            </table>
        </div>

    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informasi Batal Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Maaf.
        Transaksi ini sudah selesai dan tidak dapat dibatalkan!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Oke</button>
      </div>
    </div>
  </div>
</div>