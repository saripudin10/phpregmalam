<?php

include ("koneksi.php");

$query_view=mysqli_query($koneksi, "SELECT * FROM kategori");

?>
</br>
<a href="input_view_kategori.php" class="" btn btn-danger">Tambah Kategori</a>
<table width="300" border="1">
    <tr>
        <td align='center'>No.</td>
        <td align='center'>Id kategori</td>
        <td align='center'>Nama</td>
        <td align='center' colspan="4">Action</td>
    </tr>

<?php
$no=1;
while ($tampil=mysqli_fetch_array($query_view)) { ?>
    <tr>
        <td align='center'><?php echo $no++;?></td>
        <td align='right'><?php echo $tampil['id_kategori'];?></td>
        <td align='center'><?php echo $tampil[ 'nama'];?></td>
        <td><a href="edit_kategori.php?id_kategori=<?php echo $tampil['id_kategori'];?>">Edit</a></td>
        <td><a href="hapus_kategori.php?id_kategori=<?php echo $tampil['id_kategori'];?>">Hapus</a></td>
    </tr>
<?php }?>
</table>