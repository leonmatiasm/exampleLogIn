<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lo basico de js</title>
    <script src="main.js"></script>
    <link rel="stylesheet" href="loginStyle.css">
    <link rel="stylesheet" href="ventana_js/ventana.css">
</head>
<body>
    <section class="ventana" id="ventana_js">
        <p class="text_simple">
            New account.
        </p>
        <div class="div_form">
            <div class="newAccount_box_form">
                <form action="newAccount.php" method="post">
                    <div class="name">
                        <label for="newAccount_nickname">Nickname</label>
                        <input type="text" name="newAccount_nickname" id="newAccount_nickname" placeholder="...">
                    </div>
                    <div class="email">
                        <label for="newAccount_email">Email</label>
                        <input type="email" name="newAccount_email" id="newAccount_email" placeholder="...">
                    </div>
                    <div class="pasword">
                        <label for="newAccount_password">Password</label>
                        <input type="password" name="newAccount_password" id="newAccount_password" placeholder="...">
                    </div>
                    <div class="password">
                    <label for="newAccount_repeatPassword">Reapeat password</label>
                        <input type="password" name="newAccount_repeatPassword" id="newAccount_repeatPassword" placeholder="...">
                    </div>
                    <div class="buttonSubmit">
                        <!-- <button class="buttonCancel" onclick="CerrarVentana_CreateNewAccount()">Cancel</button> -->
                        <button type="submit">Create</button>
                    </div>
                </form>
                <button class="buttonCancel" onclick="CerrarVentana_CreateNewAccount()">Cancel</button>
            </div>
        </div>
    </section>
    <section class="login_section" id="login_section">
        <div class="slide_message">
            <p class="text_greetingMessage">
                Welcome. Hope you have a good opinion of my login page example.
                Send to me your comments at 
                <a href="https://github.com/leonmatiasm">github/leonmatiasm</a>  or at 
                <a href="https://twitter.com/leonmatiasm">@leonmatiasmm</a> on Twitter. 
                I'm mexican, so, sorry for my english.      
            </p>
        </div>
        <div class="slide_loginForm">
            <div class="buttons_box_form">
                <p class="button_signIn">
                    Log in
                </p>
                <button class="button_signUp" onclick="AbrirVentana_CreateNewAccount()"> <!-- Boton para registrase por primera vez-->
                    Create new account  
                </button>
            </div>
            <form action="login.php" method="post" class="loginbox_form">
                <div class="signIn_form">
                    <label for="email_signIn">Email</label>
                    <input type="email" name="email_signIn" id="email_signIn" autocomplete="on" placeholder="">
                    <label for="password_signIn">Password</label>
                    <input type="password" name="password_signIn" id="password_signIn">
                    <input type="submit" value="Send" id="submit_button">
                </div>
                <p class="forget_password">
                    <a href="">Are you forget your password?</a>
                </p>
            </form>
        </div>
    </section>
    <!-- <footer>
        <p class="copyright">
            &copy;2020 leonmatiasm.com 
        </p> 
    </footer> -->
    <script src="ventana_js/ventana.js"></script>
</body>
</html>