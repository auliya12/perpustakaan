 
 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Anggota
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nim</th>
                                            <th>Nama</th>
                                            <th>Tempat_lahir(s)</th>
                                            <th>Tgl_lahir</th>
                                            <th>Jenis_kelamin</th>
                                            <th>Program studi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no = 1;

                                            $sql = $koneksi->query("select * from tb_anggota");

                                            while ($data= $sql->fetch_assoc()) {

                                            $jk = ($data['jk']==l)?"Laki-laki":"Perempuan";
                                            $prodi = ($data['prodi']==ti)?"Teknik Informatika":"Sistem Informatika";

                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nim'];?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['tempat_lahhir'];?></td>
                                            <td><?php echo $data['tgl_lahir'];?></td>
                                            <td><?php echo $jk;?></td>
                                            <td><?php echo $prodi;?></td>
                                            <td>
                                        
                                                <a href="?page=anggota&aksi=ubah&id=<?php echo $data['nim']; ?>" class="btn btn-info">Ubah</a>
                                                 <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?')" href="?page=anggota&aksi=hapus&id=<?php echo $data['nim']; ?>" class="btn btn-danger" >Hapus</a>
                                            
                                            </td>
                                          
                                        </tr>


                                         <?php } ?>
                                     </tbody>

                                 </table>


                               
                            </div>

                            <a href="?page=anggota&aksi=tambah" class="btn btn-success" style="margin-top: : 8px"><i class="fa fa-plus"></i>Tambah Data</a>

                            <a href="./laporan/laporan_anggota_exel.php"  target="blank" class="btn btn-default" style="margin-top: 8px"><i class="fa fa-print"></i>ExportToExel</a>





                        </div>
                    </div>
                </div>
</div>
