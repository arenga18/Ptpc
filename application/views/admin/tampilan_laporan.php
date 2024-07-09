<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Laporan Transaksi</h1>
        </div>
    </section>
    
    <form method="POST" action="<?php echo base_url('admin/laporan') ?>">
        <div class="form-group">
            <label>Dari Tanggal</label>
            <input type="date" name="dari" class="form-control">
            <?php echo form_error('dari','<span class="text-small text-danger">','</span>')  ?>
        </div>

        <div class="form-group">
            <label>Sampai Tanggal</label>
            <input type="date" name="sampai" class="form-control">
            <?php echo form_error('dari','<span class="text-small text-danger">','</span>')  ?>
        </div>
        
        <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i> Tampilkan Data</button>
    </form>
    <hr>

    <div class="btn-group mt-2">
        <a class="btn btn-sm btn-success" target="_blank" href="<?php echo base_url().'admin/laporan/print_laporan/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>"><i class="fas fa-print"></i> Print</a>
    </div>

    <table class="table table-stripped table-responsive table-bordered mt-4">

        <tr>
            <th>No.</th>
            <th>Customer</th>
            <th>Nama Properti</th>
            <th>Tanggal Masuk</th>
            <th>Tanggal Keluar</th>
            <th>Harga /hari</th>
            <th>Status Keluar</th>
            <th>Status Sewa</th>

        </tr>

        <?php $no=1;
        foreach($laporan as $lp) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $lp->nama?></td>
                <td><?php echo $lp->nama_prop?></td>
                <td><?php echo date('d/m/Y', strtotime($lp->tanggal_masuk));?></td>
                <td><?php echo date('d/m/Y', strtotime($lp->tanggal_keluar));?></td>
                <td>Rp. <?php echo number_format($lp->harga,0,',','.')?></td>
                <td>
                    <?php 
                    if ($lp->status_keluar == '1') {
                        echo 'Sudah Check Out';
                    }else{
                        echo 'Belum Check Out';
                    }
                    ?>
                </td>
                <td>
                <?php 
                    if ($lp->status_sewa == '1') {
                        echo 'Selesai';
                    }else{
                        echo 'Belum Selesai';
                    }
                    ?>
                </td>
               
            </tr>

        <?php endforeach; ?>

    </table>
</div>

