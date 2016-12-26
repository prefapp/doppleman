<?php

$VERSION = "1";

$DATOS = array(
    "name" => "Doppleman",

    "version"   =>  $VERSION,

    "entorno" => getenv("VERSION_ENTORNO")

);

echo json_encode($DATOS);

