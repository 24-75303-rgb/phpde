<?php include 'pure_php.php';
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Username: <u>'.$username.'</u></h2>
    <button type="button"><a href="index.php" style = "text-decoration: none; color:black;">Click to back</a></button>
    <button type="button" onclick="greetUser()">GREET USER</button>
    <script>
        
        function greetUser(){
            alert("Hello '.$username.' ")
            }
    </script>        
</body>
</html>';
?>