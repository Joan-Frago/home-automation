<!-- // This will be the main page -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Sant Jaume</title>
   <link rel="stylesheet" href="css/stjaume.css">
</head>

<body>
    <?php
        require_once("api/index.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["callFunctionEncendreCaldera"])) {
            EncendreCaldera();
        }
    ?>

    <link rel="stylesheet" href="../css/stjaume.css">

    <h1>Sant Jaume de Frontanyà</h1>

    <div>
        <form method="POST">
            <button type="submit" name="callFunctionEncendreCaldera" id="encendrecaldera-btn">Encendre la Caldera</button>
        </form>
    </div>

    <!--<script src="js/stjaume.js"></script>-->
</body>
</html>