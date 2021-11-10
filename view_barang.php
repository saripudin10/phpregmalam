<?php

include ("koneksi.php");
$query_view=mysqli_query($koneksi, "SELECT * FROM barang");

?>
</br>
<a href="input_view_barang.php" class="" btn btn-danger">Tambah Barang</a>
<table width="400" border="1">
    <tr>
        <td align='center'>No.</td>
        <td align='center'>Id barang</td>
        <td align='center'>Id kategori</td>
        <td align='center'>Nama</td>
        <td align='center' colspan="4">Action</td>
    </tr>

<?php
$no=1;
while ($tampil=mysqli_fetch_array($query_view)) { ?>
    <tr>
        <td align='center'><?php echo $no++;?></td>
        <td align='right'><?php echo $tampil['id_barang'];?></td>
        <td align='right'><?php echo $tampil[ 'id_kategori'];?></td>
        <td align='center'><?php echo $tampil['nama'];?></td>
        <td><a href="edit_barang.php?id_barang=<?php echo $tampil['id_barang'];?>">Edit</a></td>
        <td><a href="hapus_barang.php?id_barang=<?php echo $tampil['id_barang'];?>">Hapus</a></td>
    </tr>
<?php }?>
</table>