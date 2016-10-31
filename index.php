<?php

$VERSION = "1";

$DATOS = array(

    "version"   =>  $VERSION,

    "entorno" => getenv("VERSION_ENTORNO")

);

echo json_encode($DATOS);

