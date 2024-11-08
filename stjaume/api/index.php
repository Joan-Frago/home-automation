<?php

function EstatCaldera() {
    // Executes the Python script to get the boiler status
    $estatCaldera = trim(shell_exec("python3 ../code/pyt/estatCaldera.py")); 
    return $estatCaldera; // Return the value instead of echoing
}

function ControlCaldera() {
    // Call EstatCaldera and capture the returned value
    $estatCaldera = EstatCaldera();

    if ($estatCaldera === "ON") {
        echo "La caldera està encesa";
    } elseif ($estatCaldera === "OFF") {
        // Only execute encendreCaldera.py if it's off
        $output = shell_exec("python3 ../code/pyt/encendreCaldera.py");
        echo $output ? $output : "Error al encendre la caldera";
    }
}

// Check for 'action' parameter consistently across requests
if (isset($_POST['action'])) {
    if ($_POST['action'] === 'controlCaldera') {
        ControlCaldera();
    } elseif ($_POST['action'] === 'getEstatCaldera') {
        echo EstatCaldera();
    }
}
?>