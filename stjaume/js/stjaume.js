document.getElementById("encendrecaldera-btn").addEventListener("click", function() {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../api/index.php", true);

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Display the output from the response in the output div
            document.getElementById("output-content").textContent = xhr.responseText;
        }
    };
    // Send the request
    xhr.send();
});