<?php
session_start();
header("Content-disposition: attachment; filename={$_SESSION['name']}.ovpn");
header("Content-type: application/octet-stream");
readfile("../files/{$_SESSION['name']}.ovpn");
?>