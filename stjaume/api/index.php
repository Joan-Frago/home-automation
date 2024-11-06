<?php
$estatCaldera = "OFF";

function EstatCaldera() {
    return $estatCaldera;
};

function ControlCaldera() {
    $estatCaldera = EstatCaldera();
    if ($estatCaldera == "ON") {
        echo "La caldera està encesa";
    }
    elseif ($estatCaldera == "OFF") {
        $scriptPath = "../code/pyt/encendrecaldera.py";
        $output = shell_exec("python3 " . escapeshellarg($scriptPath));

        echo $output;
    };
    
};

?>