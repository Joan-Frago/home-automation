<?php

function EstatCaldera() {
    // Executes the Python script to get the boiler status
    $estatCaldera = trim(shell_exec("/home/joan/venv3.10/bin/python ../code/pyt/estatCaldera.py")); 
    return $estatCaldera; // Return the value instead of echoing
}

function ControlCaldera() {
    // Call EstatCaldera and capture the returned value
    $estatCaldera = EstatCaldera();

    if ($estatCaldera === "ON") {
        return "<p>La caldera ja està encesa</p>";
    } elseif ($estatCaldera === "OFF") {
	// Only execute encendreCaldera.py if it's off
	$output = "<p>Running in real mode.</p>";
        $scriptOutput = shell_exec("/home/joan/venv3.10/bin/python ../code/pyt/encendreCaldera.py");
        $output .= $scriptOutput ? "<p>" . htmlspecialchars($scriptOutput) . "</p>" : "Error al encendre la caldera";
	return $output;
    }
    // This else should only be used to test, and ensure it is working
    // Without it, when running off of the server it won't do anything because $estatCaldera will
    // be an error, not ON or OFF
    else {
	$output = "<p>Running in test mode.</p>";
        $scriptOutput = shell_exec("/home/joan/venv3.10/bin/python ../code/pyt/encendreCaldera.py");
	$output .= $scriptOutput ? "<p>" .htmlspecialchars($scriptOutput) . "</p>" : "Error al encendre la caldera";
	return $output;
    }
}

// Check for 'action' parameter consistently across requests
if (isset($_POST['action'])) {
    if ($_POST['action'] === 'controlCaldera') {
        echo ControlCaldera();
    }
    if ($_POST['action'] === 'getEstatCaldera') {
        echo EstatCaldera();
    }
}

?>
