<?php
    date_default_timezone_set("America/Chicago");
    $timeStamp = time();
    function todaysDate() {
        global $timeStamp;
        echo ("Todays date is: " . date($timeStamp) . ". ");
        echo "Todays date is: " . date("M-d-Y g:i:s A T", $timeStamp);
        echo (date_default_timezone_get());
    }
    // todaysDate();
    function calculateFutureDate($daysToAdd) {
        global $timeStamp;
        $futureTimeStamp = strtotime("+$daysToAdd days", $timeStamp);
        // echo ($futureTimeStamp);
        $futureDate = date("Y-m-d D", $futureTimeStamp);
        // echo ("The date $daysToAdd days from now is: " . $futureDate);
        return $futureDate;
    }
    // calculateFutureDate(5);
?>

