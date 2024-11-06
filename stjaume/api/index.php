<?php

function EstatCaldera() {
    $estatCaldera = "OFF";
    return $estatCaldera;
};

function ControlCaldera() {
    $estatCaldera = EstatCaldera();
    if ($estatCaldera == "ON") {
        echo "La caldera està encesa";
    }
    elseif ($estatCaldera == "OFF") {
        $output = shell_exec("python3 ../code/pyt/encendrecaldera.py 2>&1");
        echo("<pre>$output</pre>");
    };
};

// Verificar si se ha solicitado esta función (por ejemplo, mediante AJAX)
if (isset($_POST['action']) && $_POST['action'] === 'controlcaldera') {
    // Llamar a la función y devolver el resultado
    echo ControlCaldera();
}

?>