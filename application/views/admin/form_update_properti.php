<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update Data Properti</h1>
        </div>

        <div class="card">
            <div class="card-body">
            <?php foreach($property as $pr) : ?>
                <form method="POST" action="<?php echo base_url('admin/data_properti/update_properti_aksi') ?>" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tipe Properti</label>
                            <input type="hidden" name="id_prop" value="<?php echo $pr->id_prop ?>">
                            <select name="kode_type" class="form-control">
                                <option value="<?php echo $pr->kode_type ?>"><?php echo $pr->kode_type ?></option>
                                <?php foreach($tipe as $tp) : ?>
                                    <option value="<?php echo $tp->kode_type ?>">
                                    <?php echo $tp->nama_type ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo form_error('kode_type','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Area</label>
                            <input type="text" name="area" class="form-control" value="<?php echo $pr->area ?>">
                            <?php echo form_error('area','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Nama Properti</label>
                            <input type="text" name="nama_prop" class="form-control" value="<?php echo $pr->nama_prop ?>">
                            <?php echo form_error('nama_prop','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="<?php echo $pr->alamat ?>">
                            <?php echo form_error('alamat','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Ukuran Properti</label>
                            <input type="text" name="ukuran" class="form-control" value="<?php echo $pr->ukuran ?>">
                            <?php echo form_error('ukuran','<div class="text-small text-danger">','</div>') ?>
                        </div>
                        
                    </div>

                    <div class="col-md-6">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jumlah Kamar</label>
                                    <input type="text" name="kamar" class="form-control" value="<?php echo $pr->kamar ?>">
                                    <?php echo form_error('kamar','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jumlah Kamar Mandi</label>
                                    <input type="text" name="kamar_mandi" class="form-control" value="<?php echo $pr->kamar_mandi ?>">
                                    <?php echo form_error('kamar_mandi','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Harga per hari</label>
                            <input type="text" name="harga" class="form-control" value="<?php echo $pr->harga ?>">
                            <?php echo form_error('harga','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option <?php if($pr->status == "1"){echo "selected='selected'";}
                                echo $pr->status; ?> value="1">Tersedia</option>
                                <option <?php if($pr->status == "0"){echo "selected='selected'";}
                                echo $pr->status; ?> value="0">Tidak Tersedia</option>
                            </select>
                            <?php echo form_error('status','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar" class="form-control"  value="<?php echo $pr->gambar ?>">
                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" value="<?php echo $pr->keterangan ?>">
                            <?php echo form_error('keterangan','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                        <button type="reset" class="btn btn-danger mt-4">Reset</button>

                    </div>
                </div>
                </form>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
</div>