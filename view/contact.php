<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/contact.css">
</head>

<body>

    <?php require_once("./includes/header.php"); ?>

    <main>

        <section id="contact_section">
            <div id="contact_form_img">
            </div>
            <div id="contact_form">
                <h3>Formulaire de contact</h3>
                <form action="" methode="post">
                    <div id="name_form">
                        <div class="input_container" id="firstname_input">
                            <input type="text" name="firstname" id="firstname" placeholder=" ">
                            <label for="firstname">Prénom</label>
                        </div>
                        <div class="input_container" id="lastname_input">
                            <input type="text" name="lastname" id="lastname" placeholder=" ">
                            <label for="lastname">Nom</label>
                        </div>
                    </div>
                    <div class="input_container" id="email_input">
                        <input type="text" name="email" id="email" placeholder=" ">
                        <label for="email">Email</label>
                    </div>
                    <div class="input_container" id="phone_input">
                        <input type="tel" name="phone" id="phone" placeholder=" ">
                        <label for="phone">Téléphone</label>
                    </div>
                    <div class="textarea_container">
                        <textarea name="content" id="message_content" cols="30" rows="10" placeholder=" "></textarea>
                        <label for="message_content">Votre message...</label>
                    </div>
                    <div id="submit_form">
                        <button type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </section>

        <?php require_once("./includes/footer.php"); ?>
    </main>

    <script src="./js/contact.js"></script>
</script>

</body>

</html>