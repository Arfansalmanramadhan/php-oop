<?php
namespace {
    require_once "data/config.php";

    $konfig1 = new \Data\Satu\Konfig();
    $konfig2 = new \Data\Dua\Konfig();

    echo Helper\APPLICATION;
    Helper\helpMe();
}
