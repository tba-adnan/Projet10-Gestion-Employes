<?php
if (isset($_GET["id"])) {
    $id = (int) $_GET["id"];
    $all = file_get_contents('people.json');
    $all = json_decode($all, true);
    if ($id) {
        array_pop($all);
        file_put_contents("people.json", json_encode($all));
    }
    header("Location: index.php");
}