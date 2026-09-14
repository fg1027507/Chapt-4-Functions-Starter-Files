<?php
    date_default_timezone_set("America/Chicago");
    function todaysDate() {
        $timeStamp = time();
        echo ("Todays date is: " . date($timeStamp) . ". ");
        echo "Todays date is: " . date("M-d-Y g:i:s A T", $timeStamp);
        echo (date_default_timezone_get());
    }
    todaysDate();
?>

