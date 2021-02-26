 <div class="panel panel-default">
 <div class="panel-heading">
        Tambah Data
</div>
 <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                
                                <form method="POST">
                                    <div class="form-group">
                                        <label>Judul</label>
                                        <input class="form-control" name="judul"/>                                      
                                    </div>

                                     <div class="form-group">
                                        <label>Pengarang</label>
                                        <input class="form-control" name="pengarang"/>                                      
                                    </div>

                                    <div class="form-group">
                                        <label>Penerbit</label>
                                        <input class="form-control" name="penerbit"/>                                      
                                    </div>

                                     <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <select class="form-control" name="tahun">
                                                <?php

                                                    $tahun = date("Y");

                                                    for ($i=$tahun-23;$i<= $tahun;$i++){
                                                        echo'

                                                            <option value= "'.$i.'">'.$i.'</option>
                                                            ';
                                                    }


                                                ?>
                                            </select>
                                        </div>

                                         <div class="form-group">
                                        <label>isbn</label>
                                        <input class="form-control" name="isbn"/>                                      
                                    </div>

                                    <div class="form-group">
                                        <label>Jumlah Buku</label>
                                        <input class="form-control" type="number" name="jumlah"/>                                      
                                    </div>

                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <select class="form-control" name="lokasi">
                                                <option value="rak 1">Rak 1</option>
                                                <option value="rak 2">Rak 2</option>
                                                <option value="rak 3">Rak 3</option>
                                                                                                                                      
                                            </select>
                                        </div>

                                         <div class="form-group">
                                        <label>Tanggal input</label>
                                        <input class="form-control" name="tanggal"type="date"/>                                      
                                    </div>
                                        
                                        <div>
                                            
                                            <input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
                                        </div>

                                 </div>

                              </form>
                    </div>
</div> 
</div>
</div>  

<?php

    $judul = $POST ['judul'];
    $pengarang = $POST ['pengarang'];
    $penerbit = $POST ['penerbit'];
    $tahun = $POST ['tahun'];
    $isbn = $POST ['isbn'];
    $jumlah = $POST ['jumlah'];
    $lokasi = $POST ['lokasi'];
    $tanggal = $POST ['tanggal'];

    $Simpan = $POST ['Simpan'];

    if ($simpan){

        $sql = $koneksi -> query("insert into tb_buku (judul, pengarang, penerbit, tahun_terbit, isbn, jumlah_buku, lokasi, tgl_input)values('$judul','$pengarang','$penerbit','$tahun','$isbn', ' $jumlah', ' $lokasi', '$tanggal')");
        if ($sql){
            ?>

            <script type="text/javascript">
            alert ("Data Berhasil Disimpan");
            window.location.href="?page=buku";
            <?php
        }
    }


    
?> 