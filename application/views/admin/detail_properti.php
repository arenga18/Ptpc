<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Properti</h1>
        </div>
    </section>
    <?php foreach ($detail as $dt) : ?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <img width='500px' src="<?php echo base_url().'assets//upload/'. $dt->gambar ?>">
                    </div>

                    <div class="col-md-7">
                        <table class='table'>
                            <tr>
                                <td>Type Properti</td>
                                <td>
                                <?php
                                    if ($dt->kode_type == 'VL') {
                                        echo "Villa";
                                    } elseif ($dt->kode_type == 'KS') {
                                        echo "Kost";
                                    } elseif ($dt->kode_type == 'KT') {
                                        echo "Kontrakan";
                                    } else{
                                        echo "<span class='text-danger'>Tipe Properti Tidak Diketahui</span>";
                                    }
                                ?>
                                </td>
                            </tr>

                            <tr>
                                <td>Area</td>
                                <td><?php echo $dt->area ?></td>
                            </tr>

                            <tr>
                                <td>Nama Properti</td>
                                <td><?php echo $dt->nama_prop ?></td>
                            </tr>

                            <tr>
                                <td>Alamat</td>
                                <td><?php echo $dt->alamat ?></td>
                            </tr>

                            <tr>
                                <td>Ukuran Properti</td>
                                <td><?php echo $dt->ukuran ?></td>
                            </tr>

                            <tr>
                                <td>Jumlah Kamar</td>
                                <td><?php echo $dt->kamar ?></td>
                            </tr>

                            <tr>
                                <td>Jumlah Kamar Mandi</td>
                                <td><?php echo $dt->kamar_mandi ?></td>
                            </tr>

                            <tr>
                                <td>Harga /hari</td>
                                <td><?php echo $dt->harga ?></td>
                            </tr>

                            <tr>
                                <td>Keterangan</td>
                                <td><?php echo $dt->keterangan ?></td>
                            </tr>

                            <tr>
                                <td>Status</td>
                                <td><?php 
                                 if($dt->status == "0"){
                                    echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                 }else{
                                    echo "<span class='badge badge-primary'>Tersedia</span>";
                                 }
                                  ?></td>
                            </tr>

                        </table>

                        <a class="btn btn-sm btn-danger ml-7" href="<?php echo base_url('admin/data_properti') ?>">Kembali</a>

                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/data_properti/update_properti/'.$dt->id_prop) ?>">Update</a>
                    </div>
                </div>
            </div>        
        </div>        
    <?php endforeach; ?>
</div>