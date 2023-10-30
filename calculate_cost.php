<!DOCTYPE html>
<html>
<head>
    <title>Netflix Subscription</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <h1>Netflix Invoice</h1>
    <?php
     if (isset($_POST['tier']) && isset($_POST['billing_date'])) {
        $selected_tier = $_POST['tier'];
        $billing_date = new DateTime($_POST['billing_date']);
        $start_date = new DateTime();
        echo '<div class="output-box">';
        echo 'Tier ' . $selected_tier . ' subscription';
        echo '<br> Start date ' . $start_date->format('Y-m-d');
        echo '<br> End date ' . $billing_date->format('Y-m-d');
        $billing_period = $start_date->diff($billing_date);
        $days_since_signup = $billing_period->days;
        echo '<br> Days since signup ' . $days_since_signup;

        $tier1cost = 5.99;
        $tier2cost = 8.99;

        if ($selected_tier == 1){
        $cost = $days_since_signup * ($tier1cost / 30.42);
        $cost = round($cost, 2); 
        echo '<br> This will cost £' . $cost;
        } else if ($selected_tier == 2){
        $cost = $days_since_signup * ($tier2cost / 30.42);
        $cost = round($cost, 2); 
        echo '<br> This will cost £' . $cost;
        };
        echo '</div>';
     };
    ?>
</body>
</html>
