<!DOCTYPE html>
<html>
<head>
    <title>Solocrossfit</title>
</head>
<body>

<?php
    function calculate_fee($user, $weeks) {
        $price_per_hour = 15;
        $private_sessions = $user['extra_hours'];
        $total_private_session_fee = $private_sessions * $price_per_hour;

        $category_price = array(
            'beginner' => 20,
            'intermediate' => 25,
            'advanced' => 30,
            'elite' => 35
        );

        $category_price_fee = $category_price[$user['category']];

        $event_fee = $user['events'] * 10;

        $total_fee = $total_private_session_fee + $category_price_fee + $event_fee;

        return $total_fee * $weeks;
    }

    $users = array(
        array('name' => 'User 1', 'plan' => 'Intermediate', 'weight' => 70, 'category' => 'intermediate', 'events' => 3, 'extra_hours' => 5),
        array('name' => 'User 2', 'plan' => 'Advanced', 'weight' => 80, 'category' => 'advanced', 'events' => 1, 'extra_hours' => 0),
        array('name' => 'User 3', 'plan' => 'Elite', 'weight' => 90, 'category' => 'elite', 'events' => 5, 'extra_hours' => 10),
        array('name' => 'User 4', 'plan' => 'Beginner', 'weight' => 60, 'category' => 'beginner', 'events' => 0, 'extra_hours' => 0),
        array('name' => 'User 5', 'plan' => 'Elite', 'weight' => 100, 'category' => 'elite', 'events' => 3, 'extra_hours' => 15)
    );

    foreach ($users as $user) {
        $fee = calculate_fee($user, 4);
        echo "<p>Name: " . $user['name'] . "</p>";
        echo "<p>Plan: " . $user['plan'] . "</p>";
        echo "<p>Weight: " . $user['weight'] . " kg</p>";
        echo "<p>Category: " . $user['category'] . "</p>";
        echo "<p>Events: " . $user['events'] . "</p>";
        echo "<p>Extra Hours: " . $user['extra_hours'] . "</p>";
        echo "<p>Total Fee: $" . number_format($fee, 2) . "</p>";
        echo "<hr>";
    }
?>

</body>
</html>