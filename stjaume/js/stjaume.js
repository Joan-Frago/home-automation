// Función para ejecutar la función PHP mediante AJAX
function encendreCaldera() {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "api/index.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Definir la función que procesa la respuesta
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("result").innerHTML = xhr.responseText;
        }
    };

    // Enviar la solicitud con el parámetro 'accion' que indica la función a ejecutar en PHP
    xhr.send("action=controlcaldera");
}