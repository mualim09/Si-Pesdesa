<div id="header" class="p-2">
	<!-- button -->
	<button class="bars btn bg-white" onclick="myFunction()"><i class="fas fa-bars"></i></button>

	<div class="kanan mt-2">
		<?php
		// Query menampilkan data
		$query_nm = "SELECT nm_petugas FROM akun WHERE email = '{$sessionEmail}'";
		$hasil = mysqli_query($db,$query_nm);

		// menggunakan fetch assoc dikarenakan yang dibutuhkan cuma 1 data
		$data_nm = mysqli_fetch_assoc($hasil);		
		?>
		<span class="profile text-decoration-none">
			<img src="assets/img/avatar.jpg" alt="">
			<?php echo ucwords(strtolower($data_nm['nm_petugas']));?> | 
			<a class="logout text-decoration-none text-white" href="logout.php"><i class="fa fa-sign-out-alt"></i> Log Out </a>
		</span>
	</div>
</div>