<?php
$message = "";

if (isset($_GET['user_name'])&& $_GET ['user_name'] != ""&& $_GET ['user_email'] != "") {
    $name = $_GET['user_name'] ?? "";
    $email = $_GET['user_email'] ?? "";
    $sev_level = $_GET['service_level'] ?? "";

    $message = "<h1>Thank you, $name!</h1>" .
               "<p>Your registration for the <b>$sev_level</b> plan is complete.</p>" . 
               "<p>We Will email: $email</p>" .
               "<hr>" . 
               "<a href='index.html'>Back to homepage</a>";
} else {
    $message = "<h1>Error</h1>" . 
               "<p>You must fill out the form to register.</p>" . 
               "<a href='index.html'>Back to homepage</a>";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registration Complete</title>
        <style>
            body { font-family: sans-serif; margin: 0; }
            .box { max-width: 360px; margin: 2rem auto; padding: 1rem; text-align: center; }
        </style>
    </head>
<body>
    <div class="box">
        <?php echo $message; ?>
</div>
</body>
</html>