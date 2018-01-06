<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

include "conn.php";


$sql="select * from pendaftaran where id_sekolah='$q' order by nilai_akhir desc";
$result = mysqli_query($conn,$sql);

echo "<table>
<tr>
<th>Ranking</th>
<th>Nama Pendaftar</th>
<th>Nilai Akhir</th>

</tr>";
$i = 1;
while($row = mysqli_fetch_array($result)) {

    echo "<tr>";
    echo "<td>" . $i . "</td>";
    echo "<td>" . $row['nama_pendaftar'] . "</td>";
    echo "<td>" . $row['nilai_akhir'] . "</td>";
    echo "</tr>";
    $i++;
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>
