<?php

function EncendreCaldera() {
    $scriptPath = "../code/pyt/encendrecaldera.py";
    $output = shell_exec("python3 " . escapeshellarg($scriptPath));

    echo $output;
}

?>