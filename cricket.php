<?php
    $players = array("Sachin Tendulkar","Virat Kholi","Sanju Samson","Sreeshant","MS Dhoni");
    $age = array("43","34","29","35","39")
?>
<html>
    <head><title>Cricket players</title></head>
    <body>
        <table border="5" cellpadding="12">
            <tr><th>Player Names</th><th>Age</th></tr>
            <tr><td><?php echo($players[0]); ?></td> <td><?php echo($age[0]); ?></td></tr>
            <tr><td><?php echo($players[1]); ?></td> <td><?php echo($age[1]); ?></td></tr>
            <tr><td><?php echo($players[2]); ?></td> <td><?php echo($age[2]); ?></td></tr>
            <tr><td><?php echo($players[3]); ?></td> <td><?php echo($age[3]); ?></td></tr>
            <tr><td><?php echo($players[4]); ?></td> <td><?php echo($age[4]); ?></td></tr>
        </table>
    </body>
</html>
