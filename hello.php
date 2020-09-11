<?php
    if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['name'])) {
        echo "Hello ".$_GET['name'];
    } elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
        $data = json_decode(file_get_contents('php://input'), true);
        echo "Hello ".$data['name'];
    } else
        echo "Hello World";
?>