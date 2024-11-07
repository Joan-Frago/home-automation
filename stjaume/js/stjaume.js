// Function to execute the PHP function to control the boiler
function callEncendreCaldera() {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "api/index.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("result").innerHTML = xhr.responseText;
        }
    };

    // Send the request with 'action=controlCaldera'
    xhr.send("action=controlCaldera");
}

// Function to get the current status of the boiler
function getEstatCaldera() {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "api/index.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Update the span with the boiler status
            document.getElementById("estat-caldera").innerText = xhr.responseText;
        }
    };

    // Send the request with 'action=getEstatCaldera'
    xhr.send("action=getEstatCaldera");
}

// Execute when the page loads
document.addEventListener("DOMContentLoaded", function() {
    getEstatCaldera(); // Calls the function to get the initial status
});