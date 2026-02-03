<!DOCTYPE html>
<html>
    <title>Events</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        a {
            display: inline-block;
            margin: 10px;
            padding: 12px 30px;
            background-color: #3a3a3a;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #484f56;
        }
    </style>
<body>
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
            echo "<li><strong>" . $event["event"] . "</strong> - " . $event["date"] . " at " . $event["location"] . "<br>" . $event["description"] . "</li><br>";
        }
        ?>
    </ul>

    <a href="index.html">Return Home</a>
</body>
</html>
