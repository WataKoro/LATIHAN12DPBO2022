<?php

include("../model/Template.class.php");
include("../model/DB.class.php");
include("../model/Pasien.class.php");
include("../model/TabelPasien.class.php");
include("ProsesPasien.php");

try {
    $prosespasien = new ProsesPasien();
    $prosespasien->add($_POST);
    var_dump($_POST);
    header("Location: ../index.php");
} catch (\Throwable $th) {
    echo "wiw error" . $e->getMessage();
}
