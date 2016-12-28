<?php
$conn = mysqli_connect('localhost', 'root', 'mallige17', 'cs50_project');
$file = fopen($argv[1], 'r');
while ($l = trim(fgets($file))) {
    $line = str_split($l);
    sort($line);
    $conn->query(sprintf("INSERT INTO dictionary(word, sorted) VALUES('%s', '%s')", $l, implode('', $line)));
}
?>
