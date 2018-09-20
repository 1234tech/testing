<?php require('today-logic.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <!-- Head code excluded for brevity -->
</head>
<body>
    <h1>Daily Planner</h1>
    <p>
        Today is <?php echo $day; ?>; it's time to <?php echo $toDo; ?>.
    </p>
</body>
</html>

<?php
$x = 1;

function square($x)
{
    return $x * $x;
}

if (isset($user)) {
    $loggedIn = true;
}
?>

<?php
echo 'Hello<br>';
echo square(4);
$title = "DWA"
?>

<h1>Welcome to <?php echo $title; ?></h1>