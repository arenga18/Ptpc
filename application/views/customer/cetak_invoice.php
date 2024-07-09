<table style="width: 60%">
    <h3>Invoice Pembayaran Anda</h3>
    <?php foreach($transaksi as $tr) : ?>
        <tr>
            <td>Nama Customer</td>
            <td>:</td>
            <td><?php echo $tr->nama ?></td>
        </tr>
        <tr>
            <td>Nama Properti</td>
            <td>:</td>
            <td><?php echo $tr->nama_prop ?></td>
        </tr>
        
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $tr->alamat ?></td>
        </tr>

        <tr>
            <td>Tanggal Masuk</td>
            <td>:</td>
            <td><?php echo date('d/m/Y', strtotime($tr->tanggal_masuk));?></td>
        </tr>

        <tr>
            <td>Tanggal Keluar</td>
            <td>:</td>
            <td><?php echo date('d/m/Y', strtotime($tr->tanggal_keluar));?></td>
        </tr>

        <tr>
            <td>Biaya Sewa /hari</td>
            <td>:</td>
            <td>Rp. <?php echo number_format($tr->harga,0,',','.') ?></td>
        </tr>

        <tr>
            <?php
            $x = strtotime($tr->tanggal_keluar);
            $y = strtotime($tr->tanggal_masuk);
            $jmlhari = abs(($x - $y)/(60*60*24));
            ?>
            <td>Jumlah Hari Sewa</td>
            <td>:</td>
            <td><?php echo $jmlhari ?> Hari</td>
        </tr>

        <tr>
            <td>Status Pembayaran</td>
            <td>:</td>
            <td><?php if($tr->status_pembayaran == '0') {
                echo 'Belum Lunas';
            }else { 
                echo 'Lunas'; 
            }?>
            </td>
        </tr>
        
        <tr style="font-wight: bold; color: red">
            <td>Jumlah Pembayaran</td>
            <td>:</td>
            <td>Rp. <?php echo number_format($tr->harga*$jmlhari,0,',','.') ?></td>
        </tr>

        <tr>
            <td></td>
        </tr>

        <tr>
            <td colspan="3">Apabila Belum Melakukan Pembayaran, Silahkan Melakukan Pembayaran ke No. Rekening di Bawah Ini :</td>
        </tr>

        <tr>
            <td>
                <ul>
                    <li>Bank Mandiri 12345678789000</li>
                    <li>Bank BCA 12344566</li>
                    <li>Bank BRI 123345656790007</li>
                    <li>DANA 08138926813</li>
                </ul>
            </td>
        </tr>

    <?php endforeach; ?>

</table>

<script type="text/javascript">
    window.print();
</script>