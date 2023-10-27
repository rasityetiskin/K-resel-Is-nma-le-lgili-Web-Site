<div class="templatemo-content col-1 light-gray-bg">
    <div class="templatemo-content-container">
        <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
                <table class="table table-striped table-bordered templatemo-user-table">
                    <thead>
                        <tr>
                            <td># </td>
                            <td>
                                <div class="white-text templatemo-sort-by">
                                    Başlık 
                              
                                </div>
                            </td>
                            <td>
                                <div class="white-text templatemo-sort-by">
                                    Kısa İçerik 
                            
                                </div>
                            </td>
                            <td>
                                <div class="white-text templatemo-sort-by">
                                    Yazar kullanici adı
                                </div>
                            </td>
                            
                            <td>
                                <div class="white-text templatemo-sort-by">
                                Yayinlanma Tarihi
                    
                                </div>
                            </td>
                            <td>Detay</td>
                            <td>Düzenle</td>
                            <td>Sil</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    //veritabanındaki blogları id si en büyük olanı en önce olacak şekilde getir
                                $bloglar = $db->query("SELECT * FROM bloglar Order By id Desc", PDO::FETCH_ASSOC);
                                if ( $bloglar->rowCount() ){
                                     foreach( $bloglar as $blog ){
                                         ?>
                    
                        <tr>
                            <td><?php echo $blog['id']; ?></td>
                            <td><?php echo $blog['baslik']; ?></td>
                            <td><?php echo $blog['kisa_icerik']; ?></td>
                            <td><?php echo $blog['yazar_kullanici_adi']; ?></td>
                            <td><?php echo $blog['yayinlanma_tarihi']; ?></td>
                            <td><a href="?sayfa=blog-detay&id=<?php echo $blog['id']; ?>" class="templatemo-edit-btn">Detay</a></td>
                            <td><a href="?sayfa=blog-duzenle&id=<?php echo $blog['id']; ?>" class="templatemo-edit-btn">Düzenle</a></td>
                            <td><a href="?sayfa=blog-sil&id=<?php echo $blog['id']; ?>" class="templatemo-link">Sil</a></td>
                        </tr>
                        <?php
                 }
            }
            ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>