<?php

	$koneksi = new mysqli("localhost", "root", "","db_perpustakaan");

	$filename = "anggota_exel-(".date('d-m-Y').").xls";

	header("content-disposition: attachment; filename='$filename'");
	header("content-type: application/vdn.ms-exel");



?>

<h2>Laporan Anggota</h2>

<table border="1">
	<tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Tempat_lahir(s)</th>
        <th>Tgl_lahir</th>
        <th>Jenis_kelamin</th>
        <th>Program studi</th>      
    </tr>

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
        
    
      
    </tr>


     <?php } ?>

</table>