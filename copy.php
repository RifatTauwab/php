<?php
$file = 'books.xml';
$newfile = 'E:\\books.xml';

if (!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
}
?>

