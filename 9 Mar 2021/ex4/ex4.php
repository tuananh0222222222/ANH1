 <?php
    $sum1 = 0;
    $sum2 = 0;
    $i = 1;
    while ($i < 100) {
        if ($i == 50) {
            break;
        }
        $sum1 += $i;
        $sum2 += pow($i, 2);
        $i++;
    }
    echo "tổng các số là: $sum1 <br>";
    echo "tổng các số bình phương là: $sum2";
    ?>