<?php

    $id = $_GET["id"];

    include 'db.php';

    $delete = $db->prepare("delete from adres where id=$id");
    $result = $delete->execute();

    if ($result) {
        echo "<script>alert('Silme işlemi başarılı..')</script><a href='list.php'>Listeye gitmek için tıklayınız</a>";
    } else {
        echo "<script>alert('Silme işlemi başarılı değil..')</script><a href='list.php'>Listeye gitmek için tıklayınız</a>";
    }
?>