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
                                İsim 
                              
                                </div>
                            </td>
                            <td>
                                <div class="white-text templatemo-sort-by">
                                email
                            
                                </div>
                            </td>
                            <td>
                                <div class="white-text templatemo-sort-by">
                                telefon
                            
                                </div>
                            </td>
                            <td>
                                <div class="white-text templatemo-sort-by">
                           mesaj
                    
                                </div>
                                <td>
                                <div class="white-text templatemo-sort-by">
                                Gonderilme tarihi
                    
                                </div>
                            </td>
                            <td>Sil</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    //iletisim tablosundaki verileri id tersten olacak şekilde listele
                                $iletisim = $db->query("SELECT * FROM iletisim Order By id Desc", PDO::FETCH_ASSOC);
                                if ( $iletisim->rowCount() ){
                                     foreach( $iletisim as $kayit ){
                                         ?>
                    
                        <tr>
                            <td><?php echo $kayit['id']; ?></td>
                            <td><?php echo $kayit['isim']; ?></td>
                            <td><?php echo $kayit['email']; ?></td>
                              <td><?php echo $kayit['telefon']; ?></td>
                            <td><?php echo $kayit['mesaj']; ?></td>
                            <td><?php echo $kayit['gonderilme_tarihi']; ?></td>
                            <td><a href="?sayfa=iletisim-sil&id=<?php echo $kayit['id']; ?>" class="templatemo-link">Sil</a></td>
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