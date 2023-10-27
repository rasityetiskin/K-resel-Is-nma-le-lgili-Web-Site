 <?php 
  $hakkimizda = $db->query("SELECT * FROM hakkimizda ")->fetch(PDO::FETCH_ASSOC);
  //hakkimizda tablosundaki hazıyı çek
 ?>
 <!-- Page Header-->
  <header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1><?php echo $hakkimizda['baslik']; ?></h1><!-- hakkımızda başlığı yaz -->
                            <span class="subheading"><?php echo $hakkimizda['alt_baslik']; ?></span><!-- hakkımızda alt başlığı yaz -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p><?php echo $hakkimizda['yazi']; ?></p><!-- hakkımızda yazısını yaz -->

                    </div>
                </div>
            </div>
        </main>