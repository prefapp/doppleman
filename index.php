<?php

$VERSION = "2";

$DATOS = array(

    "version"   =>  $VERSION,

    "entorno" => getenv("VERSION_ENTORNO")

);

echo json_encode($DATOS);

