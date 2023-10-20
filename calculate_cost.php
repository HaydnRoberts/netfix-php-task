<!DOCTYPE html>
<html>
<head>
    <title>Netflix Subscription</title>
</head>
<body>
    <h1>Netflix Invoice</h1>
    <?php
     if (isset($_POST['tier']) && isset($_POST['billing_date'])) {
        $selected_tier = $_POST['tier'];
        $billing_date = new DateTime($_POST['billing_date']);
        $start_date = new DateTime();
        echo 'tier ' . $selected_tier;
        echo '<br> start date ' . $start_date->format('Y-m-d');
        echo '<br> end date ' . $billing_date->format('Y-m-d');
        $billing_period = $start_date->diff($billing_date);
        $days_since_signup = $billing_period->days;
        echo '<br> days since signup ' . $days_since_signup;

        $tier1cost = 5.99;
        $tier2cost = 8.99;

        if ($selected_tier == 1){
        $cost = $days_since_signup * ($tier1cost / 30.42);
        echo '<br> this will cost ' . $cost;
        } else if ($selected_tier == 2){
        $cost = $days_since_signup * ($tier2cost / 30.42);
        echo '<br> this will cost £' . $cost;
        }
     };
    ?>
</body>
</html>
