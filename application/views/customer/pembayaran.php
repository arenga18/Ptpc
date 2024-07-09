<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header alert alert-success">
                    Invoice Pembayaran Anda
                </div>

                <div class="card-body">
                    <table class="table">
                    <?php foreach($transaksi as $tr): ?>
                    <p class="float-right"><?php echo date('d/m/Y', strtotime($tr->tanggal_sewa));?></p>
                    <div class="col-md-8 mx-auto">
                        <img style="width:100%" src="<?php echo base_url().'assets//upload/'. $tr->gambar ?>">
                    </div>
                    <br>
                        <tr>
                            <th>Nama Properti</th>
                            <td>:</td>
                            <td><?php echo $tr->nama_prop ?></td>
                        </tr>
                        
                        <tr>
                            <th>Alamat</th>
                            <td>:</td>
                            <td><?php echo $tr->alamat ?></td>
                        </tr>

                        <tr>
                            <th>Tanggal Masuk</th>
                            <td>:</td>
                            <td><?php echo date('d/m/Y', strtotime($tr->tanggal_masuk));?></td>
                        </tr>

                        <tr>
                            <th>Tanggal Keluar</th>
                            <td>:</td>
                            <td><?php echo date('d/m/Y', strtotime($tr->tanggal_keluar));?></td>
                        </tr>

                        <tr>
                            <th>Biaya Sewa /hari</th>
                            <td>:</td>
                            <td>Rp. <?php echo number_format($tr->harga,0,',','.') ?></td>
                        </tr>

                        <tr>
                            <?php
                            $x = strtotime($tr->tanggal_keluar);
                            $y = strtotime($tr->tanggal_masuk);
                            $jmlhari = abs(($x - $y)/(60*60*24));
                            ?>
                            <th>Jumlah Hari Sewa</th>
                            <td>:</td>
                            <td><?php echo $jmlhari ?> Hari</td>
                        </tr>

                        <tr>
                            <th class="text-success">Jumlah Pembayaran</th>
                            <td>:</td>
                            <td><button class="btn btn-sm btn-success">Rp. <?php echo number_format($tr->harga*$jmlhari,0,',','.') ?></button></td>
                        </tr>

                    <?php endforeach; ?>

                        <tr>
                            <td colspan="3">
                                <a href="<?php echo base_url('customer/transaksi/cetak_invoice/'.$tr->id_transaksi) ?>" class="btn btn-sm btn-secondary float-right">Cetak Invoice</a>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header alert alert-primary">
                    Informasi Pembayaran
                </div>

                <div class="card-body">
                    <p class="text-danger">Silahkan Melakukan Pembayaran Melalui No. Rekening di Bawah Ini : </p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Bank Mandiri 12345678789000</li>
                        <li class="list-group-item">Bank BCA 12344566</li>
                        <li class="list-group-item">Bank BRI 123345656790007</li>
                        <li class="list-group-item">DANA 08138926813</li>
                    </ul>
                    <?php 
                    if(empty($tr->bukti_pembayaran)) { ?>
                        <button style="width:100%" type="button" class="btn btn-sm btn-danger mt-3" data-toggle="modal" data-target="#exampleModal">
                        Upload Bukti Pembayaran
                        </button>
                    <?php }elseif($tr->status_pembayaran == '0') { ?>
                        <button style="width:100%" class="btn btn-sm btn-warning"><i class="icon-clock-o"></i> Menunggu Konfirmasi</button>
                    <?php }elseif($tr->status_pembayaran == '1') { ?>
                        <button style="width:100%" class="btn btn-sm btn-success"><i class="icon-check"></i> Pembayaran Selesai</button>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran Anda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="POST" action="<?php echo base_url('customer/transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
            <label>Upload Bukti Pembayaran</label>
            <input type="hidden" name="id_transaksi" class="form-control" value="<?php echo $tr->id_transaksi ?>">
            <input type="file" name="bukti_pembayaran" class="form-control">

            <p class="text-danger">Upload file dalam bentuk jpg atau png.</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-sm btn-success">Kirim</button>
      </div>
      </form>
    </div>
  </div>
</div>