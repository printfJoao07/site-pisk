<?php
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>

    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/style_pisk.css">

</head>
<body>

        <?php require "../components/header.php"; ?>

    
        <?php require_once "../components/footer.php"; ?>
        
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>