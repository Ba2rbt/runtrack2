<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i == 0 || $i <= 20) {
        echo "<i>$i</i><br>";
    } elseif ($i >= 25 && $i <= 50) {
        echo "<strong>$i</strong><br>";
    } else {
        echo "$i<br>";
    }
}
?>
