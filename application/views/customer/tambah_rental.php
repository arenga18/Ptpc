<div class="container">
    <div class="card" style="margin-top: 50px; margin-bottom:50px">
        <div class="card-header">
            Form Rental Mobil
        </div>
        <div class="card-body">
            <?php foreach($detail as $dt) : ?>
                <form method="POST" action="<?php echo base_url('customer/rental/tambah_rental_aksi') ?>">
                    <div class="form-group">
                        <input type="hidden" name="id_prop" value="<?php echo $dt->id_prop; ?>">
                        <label>Harga Sewa /hari</label>
                        <input type="text" name="harga" class="form-control" value="Rp.<?php echo number_format($dt->harga, 0, ',', '.'); ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Masuk</label>
                        <input type="date" name="tanggal_masuk" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Tanggal Keluar</label>
                        <input type="date" name="tanggal_keluar" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Sewa</button>
                </form>  
            <?php endforeach; ?>
        </div>

    </div>
</div>