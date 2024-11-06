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

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            ControlCaldera();
        };

        $estatCaldera = EstatCaldera();
    ?>

    <link rel="stylesheet" href="../css/stjaume.css">

    <h1>Sant Jaume de Frontanyà</h1>

    <div>
        <?php echo("<p>Estat de la Caldera: $estatCaldera</p>"); ?>
        <form action="index.php" method="POST">
            <button type="submit" id="encendrecaldera-btn">ON / OFF</button>
        </form>
        
    </div>

    <!--<script src="js/stjaume.js"></script>-->
</body>
</html>