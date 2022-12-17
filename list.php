<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adres Listesi</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

    <script src="js/jquery-1.12.3.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

</head>
<body>

    <?php
    
        include 'db.php';

        $result = $db->query("select * from adres", PDO::FETCH_ASSOC);
        $rows = $result->fetchAll();

    ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Kişi Listesi <a href="kisiEkle.html"><span style="font-size: 18px;" class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <th>K.No</th>
                        <th>Ad</th>
                        <th>Soyad</th>
                        <th>Doğum Tarihi</th>
                        <th>Telefon</th>
                        <th>Email</th>
                        <th>Web</th>
                        <th>Facebook</th>
                        <th>Twitter</th>
                        <th>Google+</th>
                        <th>Adres</th>
                        <th>Note</th>
                        <th>İşlemler</th>
                    </thead>
                    <tbody>
                        <?php foreach ($rows as $row) { ?>
                            <tr>
                                <td class="text-center"><?php echo $row["id"]; ?></td>
                                <td><?php echo $row["name"]; ?></td>
                                <td><?php echo $row["lastname"]; ?></td>
                                <td><?php echo $row["birthday"]; ?></td>
                                <td><?php echo $row["phone"]; ?></td>
                                <td><?php echo $row["email"]; ?></td>
                                <td><?php echo $row["web"]; ?></td>
                                <td><?php echo $row["facebook"]; ?></td>
                                <td><?php echo $row["twitter"]; ?></td>
                                <td><?php echo $row["googlePlus"]; ?></td>
                                <td><?php echo $row["location"]; ?></td>
                                <td><?php echo $row["note"]; ?></td>
                                <td>
                                    <a style="margin-bottom: 5px;" class="btn btn-primary" href="kisiduzenle.php?id=<?php echo $row["id"]; ?>">Düzenle</a>
                                    <a style="width: 78px;" class="btn btn-danger"  href="sil.php?id=<?php echo $row["id"]; ?>">Sil</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>