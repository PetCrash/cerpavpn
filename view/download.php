<?php
header("Content-disposition: attachment; filename=pedro.pdf");
header("Content-type: application/octet-stream");
readfile("../files/pedro.pdf");
?>