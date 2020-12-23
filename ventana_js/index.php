<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New account</title>
    <link rel="stylesheet" href="ventana.css">
</head>
<body>
    <section class="ventana" id="ventana_js">
        <!-- 
        <div class="button_exit" id="buttonExit">
            <picture>
                <button onclick="CerrarVentana_CreateNewAccount()">
                    <img src="img/x-mark.png" alt="exit" onclick="CerrarVentana_CreateNewAccount()">
                </button>
            </picture>
        Iconos diseñados por <a href="https://www.flaticon.es/autores/darius-dan" title="Darius Dan">Darius Dan</a> from <a href="https://www.flaticon.es/" title="Flaticon"> www.flaticon.es</a>
        </div>
        -->
        <p class="text_simple">
            Create a new account.
        </p>
        <div class="div_form">
            <!-- <div class="box_iframe">
                <iframe src="https://giphy.com/embed/8WJw9kAG3wonu" width="400" height="281" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>

            </div>     -->
        <!-- <p><a href="https://giphy.com/gifs/happy-excited-spongebob-squarepants-8WJw9kAG3wonu">via GIPHY</a></p> -->
            <div class="newAccount_box_form">
                <form action="newAccount.php" method="post">
                    <div class="name">
                        <label for="newAccount_nickname">Nickname</label>
                        <input type="text" name="newAccount_nickname" id="newAccount_nickname">
                    <!-- <label for="newAccount_name">Name</label>
                    <input type="text" name="newAccount_name" id="newAccount_name" placeholder="Marco Antonio">
                    <label for="newAccount_firstLastName">First last name</label>
                    <input type="text" name="newAccount_firstLastName" id="newAccount_firstLastName" placeholder="León">
                    <label for="newAccount_secondLastName">Second last name</label>
                    <input type="text" name="newAccount_secondLastName" id="newAccount_secondLastName" placeholder="Matías"> -->
                    </div>
                    <div class="email">
                        <label for="newAccount_email">Email</label>
                        <input type="email" name="newAccount_email" id="newAccount_email">
                    </div>
                    <div class="pasword">
                        <label for="newAccount_password">Password</label>
                        <input type="password" name="newAccount_password" id="newAccount_password">
                    </div>
                    <div class="password">
                    <label for="newAccount_repeatPassword">Reapeat password</label>
                        <input type="password" name="newAccount_repeatPassword" id="newAccount_repeatPassword">
                    </div>
                    <div class="buttonSubmit">
                        <button type="submit">Create</button>
                    </div>
                </form>
            </div>
        </div>
        
    </section>
    <button onclick="AbrirVentana_CreateNewAccount()">New account</button>
    <script src="ventana.js"></script>
</body>
</html>