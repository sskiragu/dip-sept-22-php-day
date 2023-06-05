<?php
function generateCalendar($year, $month)
{
    // Calculate the start and end dates of the month
    $startDate = date('Y-m-01', strtotime($year . '-' . $month));
    $endDate = date('Y-m-t', strtotime($year . '-' . $month));

    // Generate an array of dates for the specified month
    $dates = array();
    $currentDate = $startDate;
    while ($currentDate <= $endDate) {
        $dates[] = $currentDate;
        $currentDate = date('Y-m-d', strtotime($currentDate . ' + 1 day'));
    }

    // Retrieve available slots from the database
    // Assuming you have a function that retrieves the available slots for each date
    $availableSlots = retrieveAvailableSlotsFromDatabase($startDate, $endDate);

    // Display the calendar in a table format
    echo "<table>";
    echo "<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>";

    $dayCount = 0;
    $rowCount = 0;
    echo "<tr>";
    foreach ($dates as $date) {
        $dayOfWeek = date('N', strtotime($date));
        if ($dayOfWeek == 7) {
            echo "</tr><tr>";
            $rowCount++;
        } elseif ($dayCount < $dayOfWeek) {
            for ($i = $dayCount; $i < $dayOfWeek; $i++) {
                echo "<td></td>";
                $dayCount++;
            }
        }

        echo "<td>";
        echo "<strong>" . date('j', strtotime($date)) . "</strong><br>";

        if (isset($availableSlots[$date])) {
            // Display available slots
            foreach ($availableSlots[$date] as $slot) {
                echo "<span class='available-slot'>" . $slot . "</span><br>";
            }
        } else {
            echo "No slots available";
        }
        echo "</td>";

        $dayCount++;
    }

    // Add empty cells for remaining days in the last week
    while ($dayCount % 7 != 0) {
        echo "<td></td>";
        $dayCount++;
    }

    echo "</tr>";
    echo "</table>";
}

// Example usage
$year = 2023;
$month = 5;
generateCalendar($year, $month);

function retrieveAvailableSlotsFromDatabase($startDate, $endDate)
{
    // Replace this with your code to retrieve available slots from the database
    // Query your database and return the available slots in the format:
    // Array(
    //    'YYYY-MM-DD' => Array('slot1', 'slot2', ...),
    //    'YYYY-MM-DD' => Array('slot1', 'slot2', ...),
    //    ...
    // )
    return array(
        '2023-05-01' => array('09:00 AM', '10:00 AM', '11:00 AM'),
        '2023-05-05' => array('02:00 PM', '03:00 PM', '04:00 PM'),
        '2023-05-10' => array('10:00 AM', '11:00 AM', '12:00 PM'),
    );
}
?>
