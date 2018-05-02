<?php
@session_start();
include "inc/konek.php";
?>

<fieldset>
	<legend>Tabel Harga Produk</legend>
		<table width="100%" style="border:1px solid #000; border-collapse: collapse;">
			<tr style="background-color: #fc0;">
				<th>Id Produk</th>
				<th>Kode Omset</th>
				<th>Nama Produk</th>
				<th>Harga Produk</th>
				<th>Satuan</th>
				<th>Modal</th>
			</tr>
			<?php
			$sql = mysql_query("select * from harga_produk") or die (mysql_error());
			while($data = mysql_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $data['Id_Produk'];?></td>
				<td><?php echo $data['Kd_Omset'];?></td>
				<td><?php echo $data['Nama_Produk'];?></td>
				<td><?php echo $data['Harga_Produk'];?></td>
				<td><?php echo $data['Satuan'];?></td>
				<td><?php echo $data['Modal'];?></td>
				<td align="center"><button>Edit</button><Button>Hapus</Button></td>
			</tr>
			<?php
		}
		?>
		</table>
</fieldset>