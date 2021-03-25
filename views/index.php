

<?php 
        $title = 'index';
        require_once 'Shared/header.php';
    ?>

<form method="post" action="index.php"></form>
<p>Pasirinkti konvertavimo tipą:</p>
<a href="array_2_csv">Konvertuoti į csv failą</a><br>
<a href="array_2_json">Konvertuoti į json failą</a><br>
<a href="array_2_xml">Konvertuoti į xml failą</a><br>

<?php require_once 'Shared/footer.php'; ?>
