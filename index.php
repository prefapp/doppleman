<?php

$VERSION = "1.2";

$DATOS = array(
    "name" => "Doppleman",

    "version"   =>  $VERSION,

    "entorno" => getenv("VERSION_ENTORNO")

);

echo json_encode($DATOS);

