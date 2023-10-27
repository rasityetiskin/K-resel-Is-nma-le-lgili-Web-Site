 <!-- Page Header-->
 <header class="masthead" style="background-image: url('assets/img/contact-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Bize Ulaşın</h1>
                            <span class="subheading">Bize Mesaj bırakmak için formu kullanabilirsiniz</span>
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
                        <p>Bize Mesaj bırakmak için formu kullanabilirsiniz</p>
                        <div class="my-5">
                            <?php
                            if(isset($_POST['isim']) && isset($_POST['email']) && isset($_POST['telefon']) && isset($_POST['mesaj']))
                            {
                                //baslik kisa_icerik icerik varsa 
                                $isim=trim($_POST['isim']);// trim ile başındaki sonundaki boşlukları kaldır
                                $email=trim($_POST['email']);
                                $telefon=trim($_POST['telefon']);
                                $mesaj=trim($_POST['mesaj']);
                                $query = $db->prepare("INSERT INTO iletisim SET isim = ?,email = ?,telefon=?,mesaj=?");
                                $insert = $query->execute(array(
                                 $isim,$email,$telefon,$mesaj));
                                    if ( $insert ){
                                        echo '<span style="color:green;">Mesajınız Eklendi</span>';
                                    }else{
                                        echo '<span style="color:red;">Mesajınız Eklenemedi</span>';
                                    }
                            }
                            ?>
                            <form id="contactForm" action="" method="post">
                                <div class="form-floating">
                                    <input class="form-control" id="isim" name="isim" type="text" placeholder="isim..." required />
                                    <label for="isim">isim</label>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="email" type="email" name="email" placeholder="Email..." required />
                                    <label for="email">Email address</label>
                                    
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="telefon" type="text" name="telefon" placeholder="telefon" required/>
                                    <label for="telefon">Telefon</label>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" id="mesaj" placeholder="mesaj" name="mesaj" style="height: 12rem"></textarea>
                                    <label for="mesaj">Mesaj</label>
                                </div>
                                <br />
                                <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>