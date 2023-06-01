
<?php
    include('phpqrcode/qrlib.php'); //On inclut la librairie au projet
    $lien='https://www.243tech.com'; // Vous pouvez modifier le lien selon vos besoins
    QRcode::png($lien); // On crée notre QR Code
?>