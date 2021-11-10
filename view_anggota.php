<?php

include ("koneksi.php");
$query_view=mysqli_query($koneksi, "select * from anggota");

?>
</br>
<a href="input_view_anggota.php" class="" btn btn-danger">Tambah Anggota</a>
<table width="400" border="1">
    <tr>
        <td align='center'>No</td>
        <td align='center'>Nama</td>
        <td align='center'>Alamat</td>
        <td align='center'>No Tlpn</td>
        <td align='center' colspan="4">Action</td>
    </tr>

<?php
$no=1;
while ($tampil=mysqli_fetch_array($query_view)) { ?>
    <tr>
        <td align='center'><?php echo $no++;?></td>
        <td><?php echo $tampil['nama'];?></td>
        <td><?php echo $tampil[ 'alamat'];?></td>
        <td><?php echo $tampil['no_tlpn'];?></td>
        <td><a href="edit_anggota.php?id_anggota=<?php echo $tampil['id_anggota'];?>">Edit</a></td>
        <td><a href="hapus_anggota.php?id_anggota=<?php echo $tampil['id_anggota'];?>">Hapus</a></td>
    </tr>
<?php }?>
</table>