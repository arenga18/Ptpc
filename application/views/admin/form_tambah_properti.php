<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Input Data Properti</h1>
        </div>

        <div class="card">
            <div class="card-body">

                <form method="POST" action="<?php echo base_url('admin/data_properti/tambah_properti_aksi') ?>" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tipe Properti</label>
                            <select name="kode_type" class="form-control">
                                <option value="">--Pilih Tipe Properti--</option>
                                <?php foreach($tipe as $tp) : ?>
                                    <option value="<?php echo $tp->kode_type ?>">
                                    <?php echo $tp->nama_type ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo form_error('kode_type','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Area</label>
                            <input type="text" name="area" class="form-control">
                            <?php echo form_error('area','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Nama Properti</label>
                            <input type="text" name="nama_prop" class="form-control">
                            <?php echo form_error('nama_prop','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control">
                            <?php echo form_error('alamat','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Ukuran Properti</label>
                            <input type="text" name="ukuran" class="form-control">
                            <?php echo form_error('ukuran','<div class="text-small text-danger">','</div>') ?>
                        </div>
                        
                    </div>

                    <div class="col-md-6">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jumlah Kamar</label>
                                    <input type="text" name="kamar" class="form-control">
                                    <?php echo form_error('kamar','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jumlah Kamar Mandi</label>
                                    <input type="text" name="kamar_mandi" class="form-control">
                                    <?php echo form_error('kamar_mandi','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Harga per hari</label>
                            <input type="text" name="harga" class="form-control">
                            <?php echo form_error('harga','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="">--Pilih Status--</option>
                                <option value="1">Tersedia</option>
                                <option value="0">Tidak Tersedia</option>
                            </select>
                            <?php echo form_error('status','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" name="keterangan" class="form-control">
                            <?php echo form_error('keterangan','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                        <button type="reset" class="btn btn-danger mt-4">Reset</button>

                    </div>
                </div>
                </form>

            </div>
        </div>
    </section>
</div>