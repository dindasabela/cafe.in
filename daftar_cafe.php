<?php 
session_start();
include('koneksi.php');
?>

<?php 
	if(isset($_POST["tambah_cafe"])){
		$nama      = $_POST["nama"];
		$harga     = $_POST["harga"];
		$rating    = $_POST["rating"];
		$jam    	= $_POST["jam"];
		$fasilitas = $_POST["fasilitas"];
		$comfy    	= $_POST["comfy"];
		
		$harga_angka = $rating_angka = $jam_angka = $fasilitas_angka = $comfy_angka = 0;

		if($harga < 20000){
			$harga_angka = 5;
		} 
		elseif($harga >= 20000 && $harga <= 30000){
			$harga_angka = 4;
		}
		elseif($harga > 30000 && $harga <= 40000){
			$harga_angka = 3;
		}
		elseif($harga > 40000 && $harga <= 50000){
			$harga_angka = 2;
		}
		elseif($harga > 50000){
			$harga_angka = 1;
		}


		if($rating == "< 1.9"){
			$rating_angka = 1;
		}
		elseif($rating == "2.0 - 2.9"){
			$rating_angka = 2;
		}
		elseif($rating == "3.0 - 3.9"){
			$rating_angka = 3;
		}
		elseif($rating == "4.0 - 4.5"){
			$rating_angka = 4;
		}
		elseif($rating == "4.6 - 5.0"){
			$rating_angka = 5;
		}


		if($jam== "Kurang dari 24 Jam"){
			$jam_angka = 3;
		}
		elseif($jam == "24 Jam"){
			$jam_angka = 5;
		}


		if($fasilitas == "Hanya Outdoor/ Indoor"){
			$fasilitas_angka = 1;
		}
		elseif($fasilitas == "Outdoor dan Indoor"){
			$fasilitas_angka = 3;
		}
		elseif($fasilitas == "Outdoor, Indoor, dan Workspace"){
			$fasilitas_angka = 5;
		}


		if($comfy == "Kurang Nyaman"){
			$comfy_angka = 1;
		}
		elseif($comfy == "Nyaman"){
			$comfy_angka = 3;
		}
		elseif($comfy == "Sangat Nyaman"){
			$comfy_angka = 5;
		}

		$sql = "INSERT INTO `data_cafe` (`id_cafe`, `nama_cafe`, `harga_cafe`, `rating_cafe`, `jam_cafe`, `fasilitas_cafe`, `comfy_cafe`, `harga_angka`, `rating_angka`, `jam_angka`, `fasilitas_angka`, `comfy_angka`) 
				VALUES (NULL, :nama_cafe, :harga_cafe, :rating_cafe, :jam_cafe, :fasilitas_cafe, :comfy_cafe, :harga_angka, :rating_angka, :jam_angka, :fasilitas_angka, :comfy_angka)";
		$stmt = $db->prepare($sql);
		$stmt->bindValue(':nama_cafe', $nama);
		$stmt->bindValue(':harga_cafe', $harga);
		$stmt->bindValue(':rating_cafe', $rating);
		$stmt->bindValue(':jam_cafe', $jam);
		$stmt->bindValue(':fasilitas_cafe', $fasilitas);
		$stmt->bindValue(':comfy_cafe', $comfy);
		$stmt->bindValue(':harga_angka', $harga_angka);
		$stmt->bindValue(':rating_angka', $rating_angka);
		$stmt->bindValue(':jam_angka', $jam_angka);
		$stmt->bindValue(':fasilitas_angka', $fasilitas_angka);
		$stmt->bindValue(':comfy_angka', $comfy_angka);
		$stmt->execute();
	}

	if(isset($_POST["hapus_cafe"])){
		$id_hapus_cafe = $_POST['id_hapus_cafe'];
		$sql_delete = "DELETE FROM `data_cafe` WHERE `id_cafe` = :id_hapus_cafe";
		$stmt_delete = $db->prepare($sql_delete);
		$stmt_delete->bindValue(':id_hapus_cafe', $id_hapus_cafe);
		$stmt_delete->execute();
		$query_reorder_id=mysqli_query($selectdb,"ALTER TABLE data_cafe AUTO_INCREMENT = 1");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pendukung Keputusan Pemilihan Smartphone</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Data Table -->
	<link rel="stylesheet" type="text/css" href="assets/dataTable/jquery.dataTables.min.css">
	<script type="text/javascript" charset="utf8" src="assets/dataTable/jquery.dataTables.min.js"></script>

</head>
<body>
	<div class="navbar-fixed">
	<nav>
    	<div class="container">
					
						<div class="nav-wrapper">
								<ul class="left" style="margin-left: -52px;">
									<li><a href="index.php">HOME</a></li>
									<li><a href="rekomendasi.php">REKOMENDASI</a></li>
									<li><a class="active" href="daftar_cafe.php">DAFTAR CAFE</a></li>
									<li><a href="#about">TENTANG</a></li>
								</ul>
						</div>
					
        </div>
		</nav>
		</div>
		<!-- Body Start -->

		<!-- Daftar cafe Start -->
	<div style="background-color: #efefef">
		<div class="container">
		    <div class="section-card" style="padding: 40px 0px 20px 0px;">
				<ul>
				    <li>
						<div class="row">
						<div class="card">
								<div class="card-content">
									<center><h4 style="margin-bottom: 0px; margin-top: -8px;">Daftar Cafe</h4></center>
									<table id="table_id" class="hover dataTablesCustom" style="width:100%">
											<thead style="border-top: 1px solid #d0d0d0;">
												<tr>
													<th><center>No </center></th>
													<th><center>Nama Cafe</center></th>
													<th><center>Harga Rata - Rata</center></th>
													<th><center>Rating Google</center></th>
													<th><center>Jam Operasional</center></th>
													<th><center>Fasilitas Ruangan</center></th>
													<th><center>Tingkat Kenyamanan</center></th>
													<th><center>Hapus</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query=mysqli_query($selectdb,"SELECT * FROM data_cafe");
												$no=1;
												while ($data=mysqli_fetch_array($query)) {
												?>
												<tr>
													<td><center><?php echo $no; ?></center></td>
													<td><center><?php echo $data['nama_cafe'] ?></center></td>
													<td><center><?php echo "Rp. ", $data['harga_cafe'] ?></center></td>
													<td><center><?php echo $data['rating_cafe'] ?></center></td>
													<td><center><?php echo $data['jam_cafe'] ?></center></td>
													<td><center><?php echo $data['fasilitas_cafe'] ?></center></td>
													<td><center><?php echo $data['comfy_cafe'] ?></center></td>
													<td>
														<center>
															<form method="POST">
																<input type="hidden" name="id_hapus_cafe" value="<?php echo $data['id_cafe'] ?>">
																<button type="submit" name="hapus_cafe" style="height: 32px; width: 32px;" class="btn-floating btn-small waves-effect waves-light red"><i style="line-height: 32px;" class="material-icons">remove</i></button>
															</form>
														</center>
													</td>
												</tr>
												<?php
														$no++;}
												?>
											</tbody>
									</table>
									</div>
									
							</div>
							<a href="#tambah" class="btn-floating btn-large waves-effect waves-light teal btn-float-custom"><i class="material-icons">add</i></a>
						</div>
				    </li>
				</ul>	     
	    	</div>
		</div>
	</div>
	<!-- Daftar cafe End -->

	<!-- Daftar cafe Start -->
	<div style="background-color: #efefef">
		<div class="container">
		    <div class="section-card" style="padding: 1px 20% 24px 20%;">
				<ul>
				    <li>
						<div class="row">
							<div class="card">
								<div class="card-content" style="padding-top: 10px;">
									<center><h5 style="margin-bottom: 10px;">Analisa Cafe</h5></center>
									<table class="responsive-table">
									
											<thead style="border-top: 1px solid #d0d0d0;">
												<tr>
													<th><center>Alternatif</center></th>
													<th><center>C1 (Cost)</center></th>
													<th><center>C2 (Benefit)</center></th>
													<th><center>C3 (Benefit)</center></th>
													<th><center>C4 (Benefit)</center></th>
													<th><center>C5 (Benefit)</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query=mysqli_query($selectdb,"SELECT * FROM data_cafe");
												$no=1;
												while ($data=mysqli_fetch_array($query)) {
												?>
												<tr>
													<td><center><?php echo "A",$no ?></center></td>
													<td><center><?php echo $data['harga_angka'] ?></center></td>
													<td><center><?php echo $data['rating_angka'] ?></center></td>
													<td><center><?php echo $data['jam_angka'] ?></center></td>
													<td><center><?php echo $data['fasilitas_angka'] ?></center></td>
													<td><center><?php echo $data['comfy_angka'] ?></center></td>
												</tr>
												<?php
														$no++;}
												?>
											</tbody>
									</table>
									</div>
							</div>
						</div>
				    </li>
				</ul>	     
	    	</div>
		</div>
	</div>
	<!-- Daftar cafe End -->

	<!-- Modal Start -->
	<div id="tambah" class="modal" style="width: 40%; height: 100%;">
		<div class="modal-content">
			<div class="col s6">
					<div class="card-content">
						<div class="row">
							<center><h5 style="margin-top:-8px;">Input Cafe</h5></center>
							<form method="POST" action="">
								<div class = "row">
									<div class="col s12">

										<div class="col s6" style="margin-top: 10px;">
											<b>Nama</b>
										</div>
										<div class="col s6">
											<input style="height: 2rem;" name="nama" type="text" required>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Harga Rata - Rata</b>
										</div>
										<div class="col s6">
											<input style="height: 2rem;" name="harga" type="number" required>
										</div>
										
										<div class="col s6" style="margin-top: 10px;">
										<b>Rating Google</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="rating">
												<!-- <option value = "" disabled selected>Kriteria rating_cafe</option>  -->
												<option value = "< 1.9">< 1.9</option>
												<option value = "2.0 - 2.9">2.0 - 2.9</option>
												<option value = "3.0 - 3.9">3.0 - 3.9</option>
												<option value = "4.0 - 4.5">4.0 - 4.5</option>
												<option value = "4.6 - 5.0">4.6 - 5.0</option>
											</select>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Jam Operasional</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="jam">
												<!-- <option value = "" disabled selected>Kriteria Penyimpanan</option> -->
												<option value = "Kurang dari 24 Jam">Kurang dari 24 Jam</option>
												<option value = "24 Jam">24 Jam</option>
											</select>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Fasilitas Ruangan</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="fasilitas">
												<option value = "Hanya Outdoor/ Indoor">Hanya Outdoor/ Indoor</option>
												<option value = "Outdoor dan Indoor">Outdoor dan Indoor</option>
												<option value = "Outdoor, Indoor, dan Workspace">Outdoor, Indoor, dan Workspace</option>
											</select>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Tingkat Kenyamanan</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="comfy">
												<!-- <option value = "" disabled selected>Kriteria Kamera</option> -->
												<option value = "Kurang Nyaman">Kurang Nyaman</option>
												<option value = "Nyaman">Nyaman</option>
												<option value = "Sangat Nyaman">Sangat Nyaman</option>
											</select>
										</div>

									</div>  
								</div> 
								<center><button name="tambah_cafe" type="submit" class="waves-effect waves-light btn teal" style="margin-top: 0px;">Tambah</button></center>	
							</form>
						</div>
					</div>
				</div>
			</div>
		<div style="height: 0px; "class="modal-footer">
          <a style="margin-top: -30px;" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</a>
        </div>
	</div>
	<!-- Modal End -->

	<!-- Modal Start -->
	<div id="about" class="modal">
		<div class="modal-content">
			<h4>Tentang</h4>
			<p>Sistem Pendukung Keputusan Pemilihan Coffee Shop ini menggunakan metode TOPSIS yang dibangun menggunakan bahasa PHP.
				Sistem ini dibuat sebagai Tugas Akhir Mata Kuliah Sistem Pendukung Keputusan Prodi Teknologi Informasi Universitas Gadjah Mada. <br>
				<br>
				1. Dinda Sabela Rahma W<br>
				2. Natasha Astia Dewanti<br>
				3. Noer Azizah Pertama S<br>
				4. Senopati Ajeng Sinta Ayu<br>
			</p>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</a>
		</div>
	</div>
	<!-- Modal End -->

    <!-- Body End -->

    <!-- Footer Start -->
	<div class="footer-copyright" style="padding: 0px 0px; background-color: white">
      <div class="container">
        <p align="center" style="color: #999">&copy; Sistem Pendukung Keputusan Pemilihan Cafe 2023.</p>
      </div>
    </div>
    <!-- Footer End -->
    <script type="text/javascript">
	  	$(document).ready(function(){
		$('.parallax').parallax();
		$('.modal').modal();
		$('#table_id').DataTable({
    		"paging": false
		});
	    });
	</script>
</body>
</html>