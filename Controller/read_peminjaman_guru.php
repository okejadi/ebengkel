<?php
	include 'config.php';
	session_start();
	$akun_id= $_SESSION['id'];
	$result = mysqli_query($connection, "SELECT peminjaman.id_peminjaman,peminjaman.status_peminjaman,peminjaman.tanggal_pengembalian,akun.kelas,akun.tingkat,peminjaman.tanggal_peminjaman,akun.nama FROM peminjaman INNER JOIN akun ON peminjaman.akun_id = akun.id WHERE id_guru='$akun_id' AND (status_peminjaman='Menunggu Persetujuan Aspiran' OR status_peminjaman='Dipinjam')");
?>