<?php
$dischi_str = file_get_contents("dischi.json");
$dischi = json_decode($dischi_str, true);

if (isset($_GET["disk_id"])) {
    $id = $_GET["disk_id"];
    $rsult = $dischi[$id];
} else {
    $result = $dischi;
}

$result = [
    "results" => $dischi
];

header("Content-Type: application/json");
echo json_encode($result);
