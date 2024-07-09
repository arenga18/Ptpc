<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Transaksi</h1>
        </div>

        <span class="mt-2 p-2"><?php echo $this->session->flashdata('pesan') ?></span>
        <table class="table table-stripped table-responsive table-bordered">

        <tr>
            <th>No.</th>
            <th>Customer</th>
            <th>Nama Properti</th>
            <th>Tanggal Masuk</th>
            <th>Tanggal Keluar</th>
            <th>Harga /hari</th>
            <th>Status Keluar</th>
            <th>Status Sewa</th>
            <th>Cek Pembayaran</th>
            <th>Aksi</th>
        </tr>

        <?php $no=1;
        foreach($transaksi as $tr) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $tr->nama?></td>
                <td><?php echo $tr->nama_prop?></td>
                <td><?php echo date('d/m/Y', strtotime($tr->tanggal_masuk));?></td>
                <td><?php echo date('d/m/Y', strtotime($tr->tanggal_keluar));?></td>
                <td>Rp. <?php echo number_format($tr->harga,0,',','.')?></td>
                <td>
                    <?php 
                    if ($tr->status_keluar == '1') {
                        echo 'Sudah Check Out';
                    }else{
                        echo 'Belum Check Out';
                    }
                    ?>
                </td>
                <td>
                <?php 
                    if ($tr->status_sewa == '1') {
                        echo 'Selesai';
                    }else{
                        echo 'Belum Selesai';
                    }
                    ?>
                </td>
                <td>
                    <center>
                        <?php 
                        if(empty($tr->bukti_pembayaran)) { ?>
                        <button class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></button>
                        <?php }else { ?>
                            <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/transaksi/pembayaran/'.$tr->id_transaksi) ?>"><i class="fas fa-check-circle"></i></a>
                        <?php } ?>
                    </center>
                </td>
                <td>
                    <?php
                        if ($tr->status == '1') {
                            echo '-';
                        }else{ ?>
                            <div class="row">
                                <a class="btn btn-sm btn-success mr-2" href="<?php echo base_url('admin/transaksi/transaksi_selesai/'. $tr->id_transaksi) ?>"><i class="fas fa-check"></i></a>
                                <a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/transaksi/transaksi_batal/'.$tr->id_transaksi) ?>"><i class="fas fa-times"></i></a>
                            </div>
                        
                    <?php } ?>
                </td>
            </tr>

        <?php endforeach; ?>

        </table>

    </section>
</div>