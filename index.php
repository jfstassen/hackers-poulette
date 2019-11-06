<?php include("form.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hacker Poulette</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>

    </header>
    <main>
        <section>
            <div class="pi"></div>
            <div class="banner">
                <div class="contact-text">
                    <h1>CONTACT</h1>
                </div>
                <div class="image-logo">
                    <img src="images/logo-resized.png" alt="" id="logo">
                </div>
                <div class="contact-text">
                    <h1>FORM</h1>
                </div>
            </div>
        </section>
        <section class="container">
            <form class="col s12" method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                <div class="row">
                    <div class="input-field col s6">
                        <input class="validate" type="text" name="Firstname" id="firstname" value="<?php echo secure_input($_POST["first_name"]) ?>">
                        <label for="firstname">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input class="validate" type="text" name="Lastname" id="lastname">
                        <label for="lastname">Last Name</label>
                    </div>
                </div>
                <div class="row">
                    <div id="gender" class="input-field col s4">
                        <p>
                            <label class="female">
                                <input value="female" name="gender" type="radio" checked />
                                <span>Female</span>
                            </label>
                        </p>
                        <p>
                            <label class="male">
                                <input value="male" name="gender" type="radio" />
                                <span>Male</span>
                            </label>
                        </p>
                        <p>
                            <label class="non-binary">
                                <input value="non-binary" name="gender" type="radio" />
                                <span>Non-Binary</span>
                            </label>
                        </p>
                    </div>
                    <div class="input-field col s5">
                        <input class="validate" type="text" name="email" id="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field col s3">
                        <input type="text" id="autocomplete-input" class="autocomplete">
                        <label for="autocomplete-input">Country</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s2">
                        <select>
                            <option value="" disabled selected>Select a subject</option>
                            <option value="sale">Sales</option>
                            <option value="sponsoring">Sponsoring</option>
                            <option value="ca">Customer Service</option>
                        </select>
                        <label>Category:</label>
                    </div>
                    <div class="input-field col s10">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">Please insert your message here...</label>
                    </div>
                </div>
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </section>
    </main>

</body>
<script src="script.js"></script>

</html>