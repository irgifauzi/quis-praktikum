
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Informasi Pegawai</title>
</head>
<body>
<header>
<h3>informasi pegawai</h3>
</header>

        

<table border="1">
 
<thead>
<tr>
<th>No</th>
<th>Nama</th>
<th>Alamat</th>
<th>Jenis Kelamin</th>
<th>Agama</th>
<th>Sekolah Asal</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM pendaftaran";
{
echo "<tr>";
echo "<td>".$maba['id']."</td>";
echo "<td>".$maba['nama']."</td>";
echo "<td>".$maba['alamat']."</td>";
echo "<td>".$maba['jenis_kelamin']."</td>"; 
echo "<td>".$maba['sekolah_asal']."</td>";

echo "<td>";
echo "<a href='form- edit.php?id=".$maba['id']."'>Edit</a> | ";
echo "<a href='hapus.php?id=".$maba['id']."'>Hapus</a>"; echo "</td>";
echo "</tr>";
}
?>
</tbody>
</table>

</body>
</html>
