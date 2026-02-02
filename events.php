<!DOCTYPE html>
<html>
<head>
    <title>Events</title>
</head>
<body>
    <h1>Upcoming Campus Events:</h1>
    <ul>
        <?php
        $Events = [
            [ "event" => "Fox Petting Zoo", "date" => "May 3rd, 2026",
             "location" => "Mill's Lawn",
              "description" => "At lest 4 foxes available for petting (May be Rabid)." ],
            [ "event" => "Dunk Tank", "date" => "May 3rd, 2026",
             "location" => "Bush Science Center Lobby",
              "description" => "No water, participants will be dunked into a vat of foxes." ],
            [ "event" => "Fox Seminar",
             "date" => "May 3rd, 2026", "location" => "Crummer Auditorium",
              "description" => "The fox cannot speak english, yet we will listen anyway. What does the fox say?" ],
            [ "event" => "Fox Boxing",
               "date" => "May 3rd, 2026", "location" => "Alfond Sports Center",
                "description" => "We gave them gloves. If you show up you may be punched, whoopsies." ]
        ];
        foreach ($Events as $event) {
            echo "<li><strong>" . $event["event"] . "</strong> - " . $event["date"] . " at " . $event["location"] . "<br>" . $event["description"] . "</li>";
        }
        ?>
    </ul>
</body>
</html>
