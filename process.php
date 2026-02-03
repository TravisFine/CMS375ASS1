<?php
$errors = [];
$formData = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $required = ['name', 'email', 'event'];
    
    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            $errors[] = ucfirst($field) . " is required.";
        } else {
            $formData[$field] = htmlspecialchars(trim($_POST[$field]));
        }
    }
    
    $formData['year'] = htmlspecialchars($_POST['year'] ?? '');
    $formData['message'] = htmlspecialchars($_POST['message'] ?? '');
    if (!empty($formData['email']) && !filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }
}

if (!empty($errors)) {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Registration Error</title>
        <style>
            body { font-family: Arial, sans-serif; max-width: 600px; margin: 50px auto; }
            .error { background-color: #f3f3f3; border: 1px solid #8a8a8a; color: #721c24; padding: 15px; border-radius: 5px; }
            a { color: #434343; text-decoration: none; }
            a:hover { text-decoration: underline; }
        </style>
    </head>
    <body>
        <h2>Oops! Registration Incomplete</h2>
        <div class="error">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <p><a href="register.html">← Back to Registration</a></p>
    </body>
    </html>
    <?php
    exit;
}

// Display confirmation page
if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($errors)) {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Registration Confirmed</title>
        <style>
        a {
            display: inline-block;
            margin: 10px;
            padding: 12px 30px;
            background-color: #3a3a3a;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #484f56;
        }
            body { font-family: Arial, sans-serif; max-width: 600px; margin: 50px auto; background: linear-gradient(135deg, #ffffff 0%, #ffffff 100%); min-height: 100vh; }
            .container { background: white; padding: 40px; border-radius: 10px; box-shadow: 0 10px 25px rgba(0,0,0,0.2); text-align: center; }
            h1 { color: #000000; margin-bottom: 10px; }
            .tagline { color: #000000; font-size: 18px; margin-bottom: 30px; }
            .details { background: #e8e8e8; padding: 20px; border-radius: 8px; margin: 20px 0; }
            .detail-row { display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid #000000; }
            .detail-row:last-child { border-bottom: none; }
            .label { font-weight: bold; color: #000000; }
            .value { color: #000000; }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Fox Day Event Booked!</h1>
            <p class="tagline">Get Ready for Fox-Fun!!</p>
            
            <div class="details">
                <div class="detail-row">
                    <span class="label">Name:</span>
                    <span class="value"><?php echo $formData['name']; ?></span>
                </div>
                <div class="detail-row">
                    <span class="label">Email:</span>
                    <span class="value"><?php echo $formData['email']; ?></span>
                </div>
                <div class="detail-row">
                    <span class="label">Event:</span>
                    <span class="value"><?php echo $formData['event']; ?></span>
                </div>
                <?php if ($formData['year']): ?>
                <div class="detail-row">
                    <span class="label">Year:</span>
                    <span class="value"><?php echo $formData['year']; ?></span>
                </div>
                <?php endif; ?>
                <?php if ($formData['message']): ?>
                <div class="detail-row">
                    <span class="label">Excited For:</span>
                    <span class="value"><?php echo $formData['message']; ?></span>
                </div>
                <?php endif; ?>
            </div>
            
            <p style="color: #000000; margin-top: 30px;">Welcome to Fox Day! Your Adventure has been Booked Successfully!</p>

            <p>
                <a href="index.html">Return Home</a>
            </p>
        </div>
    </body>
    </html>
    <?php
}
?>