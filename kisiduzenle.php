<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kişi Düzenleme</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

    <script src="js/jquery-1.12.3.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Kişi Düzenleme</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">

                <?php

                    include 'db.php';

                    $id = $_GET["id"];

                    $select = $db->prepare("select * from adres where id=$id");
                    $select->execute();
                    $row = $select->fetch(PDO::FETCH_ASSOC);
                
                ?>

                <form method="get" action="edit.php">
                    <div class="form-group">
                        <label>Adınız</label>
                        <input type="text" class="form-control" name="name" placeholder="Adınızı Giriniz" value="<?php echo $row["name"]; ?>">
                    </div>

                    <div class="form-group">
                        <label>Soyadınız</label>
                        <input type="text" class="form-control" name="lastname" placeholder="Soyadınızı Giriniz" value="<?php echo $row["lastname"]; ?>">
                    </div>

                    <div class="form-group">
                        <label>Doğum Tarihi</label>
                        <input type="text" class="form-control" name="birthday" placeholder="Doğum Tarihinizi Giriniz" value="<?php echo $row["birthday"]; ?>">
                    </div>

                    <div class="form-group">
                        <label>Telefon</label>
                        <input type="text" class="form-control" name="phone" placeholder="Telefon Numaranızı Giriniz" value="<?php echo $row["phone"]; ?>">
                    </div>

                    <div class="form-group">
                        <label>Web Adresi</label>
                        <input type="text" class="form-control" name="web" placeholder="Web Adresinizi Giriniz" value="<?php echo $row["web"]; ?>">
                    </div>

                    <div class="form-group">
                        <label>Email Adresi</label>
                        <input type="text" class="form-control" name="email" placeholder="Email Adresinizi Giriniz" value="<?php echo $row["email"]; ?>">
                    </div>

                    <div class="form-group">
                        <label>Facebook</label>
                        <input type="text" class="form-control" name="facebook" placeholder="Facebook Adresinizi Giriniz" value="<?php echo $row["facebook"]; ?>">
                    </div>

                    <div class="form-group">
                        <label>Twitter</label>
                        <input type="text" class="form-control" name="twitter" placeholder="Twitter Adresinizi Giriniz" value="<?php echo $row["twitter"]; ?>">
                    </div>

                    <div class="form-group">
                        <label>Google+</label>
                        <input type="text" class="form-control" name="googlePlus" placeholder="Google+ Adresinizi Giriniz" value="<?php echo $row["googlePlus"]; ?>">
                    </div>

                    <div class="form-group">
                        <label>Adres</label>
                        <textarea rows="3" class="form-control" name="location" placeholder="Adresinizi Giriniz"><?php echo $row["location"]; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label>Önemli Not</label>
                        <textarea rows="3" class="form-control" name="note" placeholder="Önemli Bir Not Giriniz"><?php echo $row["note"] ?></textarea>
                    </div>

                    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">

                    <button type="submit" class="btn btn-primary pull-right">Güncelle</button>
                    <a href="list.php" class="btn btn-default pull-left">Geri</a>

                </form>

            </div>
        </div>
        <br>
    </div>
    
</body>
</html>