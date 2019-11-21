<?php

$nama = "Muhammad Fatkurozi";
$alamat = "Yogyakarta";
$pekerjaan = "Web Developer";

?>

<table cellpadding="10" cellspacing="0" border="1" align="center">
    <tr>
        <td>Nama Lengkap :</td>
        <td><?= $_GET["nama"]; ?></td>
    </tr>
    <tr>
        <td>Alamat :</td>
        <td><?= $_GET["alamat"]; ?></td>
    </tr>
    <tr>
        <td>Pekerjaan :</td>
        <td><?= $_GET["pekerjaan"]; ?></td>
    </tr>

</table>