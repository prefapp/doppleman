<?php

$VERSION = "3";

$DATOS = array(

    "version"   =>  $VERSION,

    "entorno" => getenv("VERSION_ENTORNO"),

    "entorno_plus" => getenv("VERSION_ENTORNO_PLUS")

);

echo json_encode($DATOS);

