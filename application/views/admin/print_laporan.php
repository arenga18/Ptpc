<h3 style="text-align: center;" class="mt-4">Laporan Transaksi Sewa Property</h3>

<div style="width: 100%; display: flex; justify-content: center; margin-top : 40px;">
    <table style="margin: auto; text-align: left;">
        <tr>
            <td>Dari Tanggal</td>
            <td>:</td>
            <td><?php echo date('d-M-Y', strtotime($_GET['dari'])); ?></td>
        </tr>

        <tr>
            <td>Sampai Tanggal</td>
            <td>:</td>
            <td><?php echo date('d-M-Y', strtotime($_GET['sampai'])); ?></td>
        </tr>
    </table>
</div>

<div style="width: 100%; display: flex; justify-content: center;">
    <table class="table table-striped table-bordered mt-4 mr-5 ml-5" style="text-align: center;">
        <thead>
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
        </thead>
        <tbody>
            <?php $no=1; foreach($laporan as $lp) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $lp->nama ?></td>
                    <td><?php echo $lp->nama_prop ?></td>
                    <td><?php echo date('d/m/Y', strtotime($lp->tanggal_masuk)); ?></td>
                    <td><?php echo date('d/m/Y', strtotime($lp->tanggal_keluar)); ?></td>
                    <td>Rp. <?php echo number_format($lp->harga, 0, ',', '.') ?></td>
                    <td><?php echo ($lp->status_keluar == '1') ? 'Sudah Check Out' : 'Belum Check Out'; ?></td>
                    <td><?php echo ($lp->status_sewa == '1') ? 'Selesai' : 'Belum Selesai'; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script type="text/javascript">
    window.print();
</script>