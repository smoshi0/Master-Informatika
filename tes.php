<?php 

    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa");

	$produk = mysqli_query($konek, "SELECT jurusan, COUNT(*) jml FROM mahasiswa GROUP BY jurusan HAVING COUNT(jml)  > 0");
	while($row = mysqli_fetch_array($produk)){
	$nama_produk[] = $row['jurusan'];
	
	$query = mysqli_query($konek,"SELECT COUNT(*) jml FROM mahasiswa GROUP BY jurusan HAVING COUNT(jml)  > 0");
	$row = $query->fetch_array();
	$jumlah_produk[] = $row['jml'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Membuat Grafik Menggunakan Chart JS</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	<?php echo json_encode($nama_produk); ?>
	 <?php echo json_encode($jumlah_produk); ?>
	<div style="width: 800px;height: 800px">
		<canvas id="myChart"></canvas>
	</div>
 	
 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["AW"],
				datasets: [{
					label: 'Grafik Penjualan',
					data: [2],
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgba(255,99,132,1)',
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>