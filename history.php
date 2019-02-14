<?php
$a=$_POST['his'];
$data = array_slice(file('history.txt'), -($a));
foreach ($data as $line) {
    echo $line;
}