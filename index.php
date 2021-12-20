
<?php
    $firstname = $name = $email = $phone = $message = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $firstname = $_POST["firstname"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];

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
                <form id="contact-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="firstname">Prenom<span class="blue">*</span></label>
                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="votre prenom" value="<?php echo $firstname; ?>">
                            <p class="comments">Message d'erreur</p>
                        </div>
                        <div class="col-md-6">
                            <label for="name">Nom<span class="blue">*</span></label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="votre nom" value="<?php echo $name; ?>">
                            <p class="comments">Message d'erreur</p>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email<span class="blue">*</span></label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="votre email" value="<?php echo $email; ?>">
                            <p class="comments">Message d'erreur</p>
                        </div>
                            <div class="col-md-6">
                                <label for="phone">Telephone<span class="blue">*</span></label>
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="votre Telephone" value="<?php echo $phone; ?>">
                                <p class="comments">Message d'erreur</p>
                            </div>
                            <div class="col-md-12">
                                <label for="message">Message<span class="blue">*</span></label>
                                <textarea id="message" name="message" class="form-control" placeholder="votre message" rows="4"><?php echo $message; ?></textarea>
                                <p class="comments">Message d'erreur</p>
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