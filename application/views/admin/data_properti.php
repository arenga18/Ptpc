<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Properti</h1>
        </div>

        <a href="<?php echo base_url('admin/data_properti/tambah_properti') ?>" class="btn btn-primary mb-3">Tambah Data</a>
        
        <?php echo $this->session->flashdata('pesan') ?>
        <table class="table table-stripped table-responsive table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Gambar</th>
                    <th>Type</th>
                    <th>Area</th>
                    <th>Nama Property</th>
                    <th>Alamat</th>
                    <th>Ukuran</th>
                    <th>Kamar</th>
                    <th>Kamar Mandi</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no=1;
                    foreach($property as $pr):?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td>
                                <img width="100px" src="<?php echo base_url().'assets/upload/'.$pr->gambar?>">
                            </td>
                            <td><?php echo $pr->kode_type ?></td>
                            <td><?php echo $pr->area ?></td>
                            <td><?php echo $pr->nama_prop ?></td>
                            <td><?php echo $pr->alamat ?></td>
                            <td><?php echo $pr->ukuran ?></td>
                            <td><?php echo $pr->kamar ?></td>
                            <td><?php echo $pr->kamar_mandi ?></td>
                            <td style="white-space: nowrap;">Rp. <?php echo number_format($pr->harga,0,',','.')?></td>
                            <td><?php
                            if ($pr->status == "0"){
                                echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                            }else{
                                echo "<span class='badge badge-primary'>Tersedia</span>";
                            }
                            
                            ?></td>
                            <td style="white-space: nowrap;">
                                <a href="<?php echo base_url('admin/data_properti/detail_properti/') .$pr->id_prop ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                                <a href="<?php echo base_url('admin/data_properti/delete_properti/') .$pr->id_prop ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                <a href="<?php echo base_url('admin/data_properti/update_properti/') .$pr->id_prop ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>