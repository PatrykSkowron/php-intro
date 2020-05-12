<?php
// use here the id of the form you want to capture.
        $color = $_POST['color'];
        echo "chosed color ${color}";
        $car = get_car_based_on_color($color);
?>
