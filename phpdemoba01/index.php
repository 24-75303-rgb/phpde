<!-- php code with var data ass-->
<?php include 'pure_php.php'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DEMO BSIT BA 3101</title>
    <style>
        #j{
            animation: ikot .5s ease-in infinite;
        }
        @keyframes ikot{
            from{
                rotate(0deg)
            }
            to{
                rotate(360deg)
            }
        }
    </style>
</head>
<body>
    <button type="button"><a id = "j" href="new_page.php" style = "text-decoration: none; color:black;">New Page</a></button>
    <!--<h1>Hello World!</h1>-->
    <?php //echo "<h1>Hello world</h1>"; ?>
    <h2>Username: <u><?php echo $username; ?></u></h2>
    <h2>User ID: <u><?php echo $user_id; ?></u></h2>
    <h2>Room: <u><?php echo $room; ?></u></h2>
    <h2>Schedule: <u><?php echo $sched; ?></u></h2>

    <button type="button" onclick="greetUser()">GREET USER</button>
    <script>
        //var
        var username = "<?php echo $username?>";
        var userid = "<?php echo $user_id?>";
        var room = "<?php echo $room?>";
        var sched = "<?php echo $sched?>";
        var react = "<?php echo $react?>";
        //func
        function greetUser(){
            alert("Hello "+username+" "+" your user id is "+userid+" "+" your room is "+room+" "+" and your schedule is "+sched+" ")
            alert(`hoy ${react}`)
        }
    </script>
</body>
</html>