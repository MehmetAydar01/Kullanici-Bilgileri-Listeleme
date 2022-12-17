<?php

    if ($_GET) {

        $id         = $_GET["id"];
        $name       = $_GET["name"];
        $lastname   = $_GET["lastname"];
        $birthday   = $_GET["birthday"];
        $phone      = $_GET["phone"];
        $web        = $_GET["web"];
        $email      = $_GET["email"];
        $facebook   = $_GET["facebook"];
        $twitter    = $_GET["twitter"];
        $googlePlus = $_GET["googlePlus"];
        $location   = $_GET["location"];
        $note       = $_GET["note"];

        include 'db.php';

        $data = [$id, $name, $lastname, $birthday, $phone, $web, $email, $facebook, $twitter, $googlePlus, $location, $note];

        $update = $db->prepare("update adres set id = ?, name = ?, lastname = ?, birthday = ?, phone = ?, web = ?, email = ?, facebook = ?, twitter = ?, googlePlus = ?, location = ?, note = ? where id=$id");

        $result = $update->execute($data);

        if ($result) {
            echo "<script>alert('Güncelleme işlemi başarılı..')</script><a href='list.php'>Listeye gitmek için tıklayınız</a>";
        } else {
            echo "<script>alert('Güncelleme işlemi başarılı değil..')</script>";
        }


    }

?>