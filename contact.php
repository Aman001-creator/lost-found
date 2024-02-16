<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$successMessage = '';
$errorMessage = '';

if (isset($_POST['send'])) {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $message = $_POST['message'];

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();                                       
        $mail->Host       = 'smtp.gmail.com';                 
        $mail->SMTPAuth   = true;                              
        $mail->Username   = 'itsakpro1@gmail.com';            
        $mail->Password   = 'rvorlalozpqoetkg';               
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;       
        $mail->Port       = 465;                              

        $mail->setFrom('itsakpro1@gmail.com', 'Feedback');
        $mail->addAddress('itsakpro1@gmail.com', 'Third Eye Website');

        $mail->isHTML(true);
        $mail->Subject = 'Feedback from User';
        $mail->Body    = "<strong>Username:</strong> $name <br> <strong>Email Id:</strong> $email <br> <strong>Contact no.:</strong> $contact <br> <strong>Message:</strong> $message";

        $mail->send();
        $_SESSION['successMessage'] = 'Message has been sent successfully!';
    } catch (Exception $e) {
        $_SESSION['errorMessage'] = "Message couldn't be sent!";
    }

    // Redirect to avoid form resubmission on refresh
    header('Location: ' . $_SERVER['REQUEST_URI']);
    exit();
}


$successMessage = isset($_SESSION['successMessage']) ? $_SESSION['successMessage'] : '';
$errorMessage = isset($_SESSION['errorMessage']) ? $_SESSION['errorMessage'] : '';
unset($_SESSION['successMessage']);
unset($_SESSION['errorMessage']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Your Campus Lost & Found</title>
    <?php include_once "inc\head_links.php"; ?>
    <style>
        .btn {
            background-color: #4942e4;
            border: none;
        }
        .btn:hover {
            background-color: #3831b0;
            border: none;
            transform: scale(0.95);
        }
        .success-message,
        .error-message {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<?php include_once "inc/header.php"; ?>

<div class="container-fluid py-5">
    <header>
        <div class="container py-2">
            <h1 class="pageTitle text-center">Contact Us</h1>
            <hr class="mx-auto bg-primary border-primary opacity-100" style="width:50px">
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Our Contact Information</h2>
                    <dl>
                        <dt><b>Main Office Location:</b></dt>
                        <dd>Ghaziabad-Bulandshahr G.T. Road, NH-91 Greater Noida Phase-ⅠⅠ, Gautam Buddha Nagar, UP-203207</dd>

                        <dt><b>Email:</b></dt>
                        <dd>thirdeye@gmail.com</dd>
                        <dt><b>Toll-Free :</b></dt>
                        <dd>1800 XXXX XXX</dd>

                        <dt><b>Mobile :</b></dt>
                        <dd>88824 XXXXX, 99990 XXXXX</dd>
                    </dl>
                </div>

                <div class="col-md-6">
                    <h2>Send us a Message</h2>
                    <div class="success-message alert alert-success <?php echo !empty($successMessage) ? 'd-flex justify-content-center' : 'd-none'; ?>">
    <strong><?php echo $successMessage; ?></strong>
</div>

<div class="error-message alert alert-danger <?php echo !empty($errorMessage) ? 'd-flex justify-content-center' : 'd-none'; ?>">
    <strong><?php echo $errorMessage; ?></strong>
</div>

                    <form action="" method="post">
                        <div class="form-group">
                            <label for="fullname">Full Name</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="contact">Contact Number</label>
                            <input type="number"  maxlength="14" class="form-control" id="contact" name="contact" required>
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>

                        <button type="submit" name="send" class="btn btn-primary rounded-pill">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include_once "inc/top.php"; ?>
<?php include_once "inc/footer.php"; ?>

</body>
</html>
