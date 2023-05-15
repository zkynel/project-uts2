<?php require_once "config.php" ?>
<?php require_once "dbkoneksi.php" ?>
<?php include_once "template/header.php"?>

<style>
  .card {
    margin: 30px;
    text-align: center;
  }
</style>



    <div class="site-blocks-cover" style="background-image: url(images/hero_1.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
          <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
            <h1 class="mb-2">Finding Your Perfect Shoes</h1>
            <div class="intro-text text-center text-md-left">
              <p class="mb-4">Temukan Sepatu Terbaik Di Toko Kami</p>
              <p>
                <a href="#" class="btn btn-sm btn-primary">Belanja Sekarang</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm site-blocks-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Free Shipping</h2>
              <p>Gratis Ongkir ke Seluruh Indonesia!</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-refresh2"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Free Returns</h2>
              <p>Jaminan Pengembalian Barang jika Barang Rusak
              <p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Customer Support</h2>
              <p>Menangani keluhan pelanggan, memberikan solusi dan alternatif yang tepat dalam respon yang cepat</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
             <div class="col-md-7 site-section-heading text-center pt-4">
             <h2>Produk Terbaru</h2>
          </div>
          <div class="container-fluid">
            <div class="row">
              <?php
              $sql = "SELECT * FROM `produk`;";
              $stmt = $conn->query($sql);


              while ($row = $stmt->fetch()) {
              ?>
                <div class="col-md-4 mt-4">
                  <div class="card" style="width: 20rem;">
                    <div class="card-body">
                      <img src="images/<?= $row['nama'] ?>.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-footer">
                        <div class="product-name"><?= $row['nama']?> </div>
                        <div class="product-desc"><?= $row['deskripsi']?></div>
                        <div class="product-price"><h4><b>Rp <?= $row['harga_jual'] ?></b></h4></div>
                        <br>
                        <a href="checkout.php?id=<?= $row['id'] ?>" button type="button" class="btn btn-sm btn-primary">Add to Cart</button></a>
                    </div>
                  </div>
                </div>

              <?php
              }
              ?>
        </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>
<?php include_once "template/footer.php"?>