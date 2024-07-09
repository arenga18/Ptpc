<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Data Tipe Properti</h1>
        </div>
    </div>

    <a class="btn btn-primary mb-3" href="<?php echo base_url('admin/tipe_properti/tambah_tipe')?>">Tambah Tipe</a>
    
    <?php echo $this->session->flashdata('pesan') ?>
    <table class="table table-bordered table-stripped table-hover">
        <thead>
            <tr>
                <th width="20px">No</th>
                <th>Kode Type</th>
                <th>Nama Type</th>
                <th width="180px">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            foreach ($tipe as $tp) : ?>

                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $tp->kode_type ?></td>
                        <td><?php echo $tp->nama_type ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/tipe_properti/update_type/'.$tp->id_type) ?>"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/tipe_properti/delete_type/'.$tp->id_type) ?>"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>

            <?php endforeach; ?>
        </tbody>

    </table>

</div>