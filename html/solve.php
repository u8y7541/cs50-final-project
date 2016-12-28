<?php
require("helpers.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect('localhost', 'root', 'mallige17', 'cs50_project');
    $rows = [];
    $word = str_split($_POST["word"]);
    sort($word);
    $result = $conn->query(sprintf("SELECT word FROM dictionary WHERE sorted = '%s'", implode('', $word)));
    while ($row = $result->fetch_assoc()) {
	array_push($rows, $row);  
    }
    render('solved.php', ["rows" => $rows, "input" => strtolower($_POST["word"])]);
}
