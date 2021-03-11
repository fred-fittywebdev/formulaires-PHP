<?php $pageTitle = "Merci !"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $pageTitle; ?> </title>
</head>

<body>
    <div>
        <p>
            Merci <?php echo $_POST["user_lastname"] ?> <?php echo $_POST["user_name"] ?> de nous avoir contacté à
            propos de <strong>
                <?php echo $_POST["sujet"] ?></strong>.
        </p>
        <p>
            Un de nos conseiller vous contactera soit à l’adresse <em> <?php echo $_POST["user_email"] ?></em> ou par
            téléphone au <em>
                <?php echo $_POST["user_phone"] ?></em> dans les plus
            brefs délais pour traiter votre demande :
        </p>

        <p>
            <?php echo $_POST["user_message"] ?>
        </p>


    </div>
</body>

</html>
