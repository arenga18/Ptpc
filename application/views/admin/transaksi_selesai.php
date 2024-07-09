<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Transaksi Selesai</h1>
        </div>
    </section>

    <?php foreach($transaksi as $tr) : ?>
    <form method="POST" action="<?php echo base_url('admin/transaksi/transaksi_selesai_aksi/') ?>">
        <input type="hidden" name="id_transaksi" value="<?php echo $tr->id_transaksi ?>">

        <div class="form-group">
            <label>Status Keluar</label>
            <select name="status_keluar" class="form-control">
                <option value="<?php echo $tr->status_keluar ?>"><?php echo $tr->status_keluar ?></option>
                <option value="1">Sudah Check Out</option>
                <option value="0">Belum Check Out</option>
            </select>
        </div>

        <div class="form-group">
            <label>Status Sewa</label>
            <select name="status_sewa" class="form-control">
                <option value="<?php echo $tr->status_sewa ?>"><?php echo $tr->status_sewa ?></option>
                <option value="1">Selesai</option>
                <option value="0">Belum Selesai</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>

    </form>
    <?php endforeach; ?>
</div>