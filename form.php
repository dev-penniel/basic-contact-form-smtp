<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Contact Form</title>
</head>
<body>
            <form method="post" action="includes/send-form.php">

                <?php if(isset($_GET['success'])): ?>

                    <h4 class="justify-content-xxl-center" style="border-color: rgb(69,69,69);color: rgb(59,180,64);font-size: 20px;margin-bottom: 20px;">Message Sent Successfully</h4>

                <?php endif;?>

                <label for="names">Names</label>
                <input type="text" name="names" placeholder="Enter Names.." required>
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Enter Email.." required>
                <label for="message">Message</label>
                <textarea name="message" id="" cols="30" rows="10" required></textarea>
                <button type="submit">Submit</button>
            </form>
</body>
</html>