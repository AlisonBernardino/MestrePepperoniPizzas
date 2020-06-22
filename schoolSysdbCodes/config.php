
<!-- HTML body code: PHP code = -->
<html>
<head>
    <title>
        Conexão com o banco de dados - S.G.E.
    </title>
</head>
<body>

<?php

$hostdb = 'localhost'; // (It can be name or IP address) Host responsible for transaction
$userdb = 'root'; // Access user
$passdb = ''; // User password
$db = 'sistemaescolar'; // DB name
$con = new mysqli($hostdb,$userdb,$passdb,$db);
    if($con->connect_error){
        echo "Connection error:" . $con->connect_error;
    }
?>                      

</body>

</html>
