<?php 
  $vizyon = $db->query("SELECT * FROM vizyon ")->fetch(PDO::FETCH_ASSOC);
 ?>
 <!-- Page Header-->
  <header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1><?php echo $vizyon['baslik']; ?></h1>
                            <span class="subheading"><?php echo $vizyon['alt_baslik']; ?></span>
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
                        <p><?php echo $vizyon['yazi']; ?></p>

                    </div>
                </div>
            </div>
        </main>