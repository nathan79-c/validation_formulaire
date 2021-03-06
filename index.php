
<?php
    $firstname = $name = $email = $phone = $message = "";
    $firstnameError = $nameError = $emailError = $phoneError = $messageError = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $firstname = verifyInput($_POST["firstname"]);
        $name = verifyInput($_POST["name"]);
        $email = verifyInput($_POST["email"]);
        $phone = verifyInput($_POST["phone"]);
        $message = verifyInput($_POST["message"]);
        if(empty($firstname)){
            $firstnameError = "je veux connaitre ton prenom";
        }
        if(empty($name)){
            $nameError = "je veux connaitre meme ton nom";
        }
        if(empty($email)){
            $emailError = "tu es oblige d'entre  un email";
        }
        if(empty($phone)){
            $phoneError = "on a aussi besoin de ton numero de telephone";
        }
        if(empty($message)){
            $messageError = "Tu as oublie de laisser un message";
        }

    }
/**
 * @param $var
 * @return string
 */
function verifyInput($var): string
    {
        $var = trim($var);
        $var = stripslashes($var);
        return htmlspecialchars($var);

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>   
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="divider"></div>
        <div class="heading">
            <h2>Contacter-moi</h2>
        </div>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ; ?>" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="firstname">Prenom<span class="blue">*</span></label>
                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="votre prenom" value="<?php echo $firstname; ?>">
                            <p class="comments"><?php echo $firstnameError ?></p>
                        </div>
                        <div class="col-md-6">
                            <label for="name">Nom<span class="blue">*</span></label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="votre nom" value="<?php echo $name; ?>">
                            <p class="comments"><?php echo $nameError ?></p>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email<span class="blue">*</span></label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="votre email" value="<?php echo $email; ?>">
                            <p class="comments"><?php echo $emailError ?></p>
                        </div>
                            <div class="col-md-6">
                                <label for="phone">Telephone<span class="blue">*</span></label>
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="votre Telephone" value="<?php echo $phone; ?>">
                                <p class="comments"><?php echo $phoneError ?></p>
                            </div>
                            <div class="col-md-12">
                                <label for="message">Message<span class="blue">*</span></label>
                                <textarea id="message" name="message" class="form-control" placeholder="votre message" rows="4"><?php echo $message; ?></textarea>
                                <p class="comments"><?php echo $messageError ?></p>
                            </div>
                            <div class="col-md-12">
                                <p class="blue"><strong>* ces informations sont requises</strong></p>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="button1" value="envoyer">
                            </div>
                        
                    </div>
                    <p class="thanks-you">votre message a bien ete envoyer. Merci de m'avoir contacter</p>
                </form>

            </div>
        </div>
    </div>
</body>
</html>