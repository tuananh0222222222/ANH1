<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex7</title>
	<link rel=stylesheet href="style.css">
</head>


<body>
    <table>
        <?php
        for ($i = 0; $i < 8; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 8; $j++) {
                if ($i % 2 == 0 && $j % 2 == 1) {
                    echo '<td class="black"></td>';
                } elseif ($i % 2 == 1 && $j % 2 == 0) {
                    echo '<td class="black"></td>';
                    echo '<td></td>';
                } else {
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>