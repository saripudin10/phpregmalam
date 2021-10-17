<?php

include ("koneksi.php");

$query_view=mysqli_query($koneksi, "SELECT * FROM kategori");

?>

<table width="300" border="1">
    <tr>
        <td align='center'>No.</td>
        <td align='center'>Id kategori</td>
        <td align='center'>Nama</td>
    </tr>

<?php
$no=1;
while ($tampil=mysqli_fetch_array($query_view)) { ?>
    <tr>
        <td align='center'><?php echo $no++;?></td>
        <td align='right'><?php echo $tampil['id_kategori'];?></td>
        <td align='center'><?php echo $tampil[ 'nama'];?></td>
    </tr>
<?php }?>
</table>