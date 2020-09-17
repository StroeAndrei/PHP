<?php
/*
4. Modify your answer to Exercise 3 to use for() instead of
while().
*/
?>

<table border="1">
    <tr>
        <th>Fahrenheit</th>
        <th>Celsius</th>
    </tr>
    <?php
    for($start = -50, $end = 50; $start <= $end; $start += 5) {
        print '<tr>';
            echo '<td>' . $start . '</td>';
            echo '<td>' . round((($start - 32) * 5) / 9, 2) . '</td>';
        print '</tr>';
    }
    ?>
</table>