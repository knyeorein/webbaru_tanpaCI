<?php
@session_start();
include "inc/konek.php";
?>

<fieldset>
	<legend>Tambah Data Menu</legend>
	<form action="" method="post">
		<table>
			<tr>
			<td>Kode Produk</td>
			<td>:</td>
				<td><input type="text" name="Id_Produk"/></td>
			</tr>
			<tr>
			<td>Kode Omset</td>
			<td>:</td>
				<td><input type="text" name="Kd_Omset"/></td>
			</tr>
			<tr>
			<td>Nama Produk</td>
			<td>:</td>
				<td><input type="text" name="Nama_Produk"/></td>
			</tr>
			<tr>
			<td>Harga Produk</td>
			<td>:</td>
				<td><input type="text" name="Harga_Produk"/></td>
			</tr>
			<tr>
			<td>Satuan</td>
			<td>:</td>
				<td><input type="text" name="Satuan"/></td>
			</tr>
			<tr>
			<td>Modal</td>
			<td>:</td>
				<td><input type="text" name="Modal"/></td>
			</tr>
			<tr>
			<td></td>
			<td></td>
				<td><input type="submit" name="tambah" value="Tambah" /><input type="reset" name="" value="Reset"></td>
			</tr>
		</table>
	</form>
	<?php
	$Id_Produk = @$_POST['Id_Produk'];
	$Kd_Omset = @$_POST['Kd_Omset'];
	$Nama_Produk = @$_POST['Nama_Produk'];
	$Harga_Produk = @$_POST['Harga_Produk'];
	$Satuan = @$_POST['Satuan'];
	$Modal = @$_POST['Modal'];
	$tambah = @$_POST['tambah'];
	if($tambah){
		if($Id_Produk == "" || $Kd_Omset =="" || $Nama_Produk ==""||$Harga_Produk ==""||$Satuan =="" || $Modal){
			
			?>
			<script type="text/javascript">
				alert("Input tidak boleh kosong ")
			</script>
			<?php
		}else{
			mysql_query("insert into harga_produk values('$Id_Produk', '$Kd_Omset','$Nama_Produk','$Harga_Produk','$Satuan','$Modal')") or die (mysql_error());
			?>
			<script type="text/javascript">
				alert("Tambah data baru berhasil");
				window.location.href="?page=menu";
			</script>
			<?php
		}
	}
	?>
</fieldset>