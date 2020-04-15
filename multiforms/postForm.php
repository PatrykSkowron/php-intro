

<?php
/* we can get here selected items by 'name' in inputs */

    $cars = $_POST['ccars'];
    echo "Cars select: {$cars}";

    $cars2 = $_POST['mycars'];
    echo "Cars2 select: {$cars2}";

    echo "Letters select: {$_POST['letters']}";
    echo "Numbers select: {$_POST['numbers']}";

?>
