<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#06aa5e">
    <meta name="msapplication-navbutton-color" content="#06aa5e">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>Sign up | Basket ™</title>
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <script src="./assets/js/script.js" defer></script>
</head>
<body>
    <main class="card-container slideUp-animation">
        <div class="image-container">
            <h1 class="company">Basket <sup>&trade;</sup></h1>
            <img src="./assets/images/signUp.svg" class="illustration" alt="">
            <p class="quote">Sign up today to get exciting offers..!</p>
            <a href="#btm" class="mobile-btm-nav">
                <img src="./assets/images/dbl-arrow.png" alt="">
            </a>
        </div>
        <form action="" method="">
            <div class="form-container slideRight-animation">

                <h1 class="form-header">
                    Get started
                </h1>

                <div class="input-container">
                    <label for="f-name"></label>
                    <input type="text" name="f-name" id="f-name" required>
                    <span>
                        First name
                    </span>
                    <div class="error"></div>
                </div>

                <div class="input-container">
                    <label for="l-name"></label>
                    <input type="text" name="l-name" id="l-name" required>
                    <span>
                        Last name
                    </span>
                    <div class="error"></div>
                </div>

                <div class="input-container">
                    <label for="mail">
                    </label>
                    <input type="email" name="mail" id="mail" required>
                    <span>
                        E-mail
                    </span>
                    <div class="error"></div>
                </div>

                <div class="input-container">
                    <label for="phone">
                    </label>
                    <input type="tel" name="phone" id="phone" required>
                    <span>Phone</span>
                    <div class="error"></div>
                </div>

                <div class="input-container">
                    <label for="user-password"></label>
                    <input type="password" name="user-password" id="user-password" class="user-password" required>
                    <span>Password</span>
                    <div class="error"></div>
                </div>

                <div class="input-container">
                    <label for="user-password-confirm"></label>
                    <input type="password" name="user-password-confirm" id="user-password-confirm" class="password-confirmation" required>
                    <span>
                        Confirm Password
                    </span>
                    <div class="error"></div>
                </div>

                <div id="btm">
                    <button type="submit" class="submit-btn">Create Account</button>
                    <p class="btm-text">
                        Already have an account..? <span class="btm-text-highlighted">  Log in</span>
                    </p>
                </div>
            </div>
        </form>
    </main>
    <section class="outro-overlay disabled slideUp-animation">
        <h1 class="company">Basket <sup>&trade;</sup></h1>
        <h1 class="outro-greeting">Thank's for signing up..!</h1>
        <img src="./assets/images/shape.svg" alt="" class="shape">
        <img src="./assets/images/signedUp.svg" alt="" id="signedUp-illustration" class="slideRight-animation">
        <div class="author-link">
            &copy;&nbsp;
            <a href="https://www.0xabdulkhalid.ml/">0xabdulkhalid</a> |
            <a href="https://www.github.com/0xabdulkhalid/basket-sign-up-form/">Source Code</a>
        </div>
    </section>
</body>
</html>
