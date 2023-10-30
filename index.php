<?php 
include 'header.php';
?>
<style>
body {
    background-color: #FFF0F5;
}
</style>
<!-- IMAGE -->
<div class="container-fluid" style="margin: 0;padding: 0;">
    <div class="image" style="margin-top: -21px">
        <img src="image/home/toko.jpg" style="width: 100%;  height: 650px;">
    </div>
</div>
<br>
<br>

<!-- PRODUK TERBARU -->
<div class="container">


    <h4 class="text-center"
        style="font-family: arial; padding-top: 10px; padding-bottom: 10px; font-style: italic; line-height: 29px; border-top: 2px solid #4169E1; border-bottom: 2px solid #4169E1;">
        Kios Manda merupakan toko yang menjual produk atau barang untuk kebutuhan sehari - hari. Produk dijual enceran
        dengan demikian pembeli bisa membeli produk dengan jumlah yang dibutuhkan.</h4>


    <h2 style=" width: 100%; border-bottom: 4px solid #4169E1; margin-top: 80px;"><b>Produk Kami</b></h2>

    <div class="row">
        <?php 
		$result = mysqli_query($conn, "SELECT * FROM produk");
		while ($row = mysqli_fetch_assoc($result)) {
			?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="image/produk/fries.jpg?= $row['image']; ?>">
                <div class="caption">
                    <h3><?= $row['nama'];  ?></h3>
                    <h4>Rp.<?= number_format($row['harga']); ?></h4>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="detail_produk.php?produk=<?= $row['kode_produk']; ?>"
                                class="btn btn-warning btn-block">Detail</a>
                        </div>
                        <?php if(isset($_SESSION['kd_cs'])){ ?>
                        <div class="col-md-6">
                            <a href="proses/add.php?produk=<?= $row['kode_produk']; ?>&kd_cs=<?= $kode_cs; ?>&hal=1"
                                class="btn btn-success btn-block" role="button"><i
                                    class="glyphicon glyphicon-shopping-cart"></i> Tambah</a>
                        </div>
                        <?php 
							}
							else{
								?>
                        <div class="col-md-6">
                            <a href="keranjang.php" class="btn btn-success btn-block" role="button"><i
                                    class="glyphicon glyphicon-shopping-cart"></i> Tambah</a>
                        </div>

                        <?php 
							}
							?>








































































































































































































































































































 

                    </div>

                </div>
            </div>
        </div>
        <?php 
		}
		?>
    </div>

</div>
<br>
<br>
<br>
<br>
<?php 
include 'footer.php';
?>