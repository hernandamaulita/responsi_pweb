<?php
echo "<head><title>RESPONSI PWEB-2100018281</title></head>";
echo "<h2 align=center> Detail Data Pengiriman </h2>";
$fp=fopen("file.txt","r");

echo "<table border=1 align=center width=100%
		<tr><th>Pengirim</th>
		<th>NoTelp Pengirim </th>
		<th>Asal</th>
		<th>Penerima </th>
		<th>NoTelp Penerima</th>
		<th>Tujuan</th>
		<th>Jarak</th>
		<th>Biaya</th></tr>";

while($isi=fgets($fp,90))
{
	$pisah = explode("|",$isi);
	echo "<tr>
	<td>$pisah[0]</td><td>$pisah[1]</td><td>$pisah[2]</td><td>$pisah[3]</td><td>$pisah[4]</td><td>$pisah[5]</td><td>$pisah[6]</td><td>$pisah[7]</td><td>&nbsp;<hr></td></tr>";
}
echo "</table>";
echo "<a href=index.html>KEMBALI</a>";
?>