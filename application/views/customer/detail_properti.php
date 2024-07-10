<!-- Page Content -->
<div class="container mt-5 mb-5">

    <div class="row">
            
        <div class="card">
            <div class="card-body">
                <?php foreach($detail as $dt): ?>
                    <div class="row">

                    <div class="col-md-6">
                        <img style="width:100%" src="<?php echo base_url().'assets//upload/'. $dt->gambar ?>">
                    </div>

                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                                <th>Area</th>
                                <td><?php echo $dt->area ?></td>
                            </tr>

                            <tr>
                                <th>Nama</th>
                                <td><?php echo $dt->nama_prop ?></td>
                            </tr>

                            <tr>
                                <th>Alamat</th>
                                <td><?php echo $dt->alamat ?></td>
                            </tr>

                            <tr>
                                <th>Ukuran</th>
                                <td><?php echo $dt->ukuran ?></td>
                            </tr>

                            <tr>
                                <th>Jumlah Kamar</th>
                                <td><?php echo $dt->kamar ?></td>
                            </tr>

                            <tr>
                                <th>Jumlah Kamar Mandi</th>
                                <td><?php echo $dt->kamar_mandi ?></td>
                            </tr>

                            <tr>
                                <th>Harga /hari</th>
                                <td>Rp. <?php echo number_format($dt->harga,0,',','.') ?></td>
                            </tr>

                            <tr>
                                <th>Keterangan</th>
                                <td><?php echo $dt->keterangan ?></td>
                            </tr>

                            <tr>
                                <th>Status</th>
                                <td>
                                    <?php 
                                 if($dt->status == "0"){
                                    echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                 }else{
                                    echo "<span class='badge badge-primary'>Tersedia</span>";
                                 }
                                  ?>
                                  </td>
                            </tr>

                            <tr></tr>
                                <td> </td>
                                <td>
                                <?php
                                    if($dt->status == "0"){
                                    echo "";
                                    }else{
                                    echo anchor('customer/rental/tambah_rental/'.$dt->id_prop, '<button class="btn btn-sm btn-primary">Sewa</button>');
                                    }
                                    ?>
                                </td>
                                
                            </tr>

                        </table>

                    </div>
                    </div>
                <?php endforeach; ?>
            </div>
        
        </div>

        <div class="col-md-12">
                <div class="card bg-transparent border-0">
                    <div class="card-body text-center">
                        <a class="btn btn-sm btn-danger mt-3" href="<?php echo base_url('customer/data_properti') ?>">Kembali</a>
                    </div>
                </div>
            </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->