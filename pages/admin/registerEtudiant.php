<?php

session_start();

if (!isset($_SESSION['logged']) || $_SESSION['role'] !== 'admin') {
    // Redirect them to login page or show an error
    header('Location: ../login.php');
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../style.css" />
    <title>Plateforme Scolarité</title>
</head>
<body>
    <div class="wrapper">
        <section class="login-container">
            <form id="registerForm" class="login-form" novalidate>
                <fieldset class="login-fieldset">
                    <legend class="form-title">Ajouter un etudiant</legend>

                    <input type="hidden" id="userRole" value="<?php echo $_SESSION['role']; ?>">

                    <div id="failed" class="error-alert" hidden></div>

                    <div class="form-group">
                        <label for="userType">Type de compte:</label>
                        <select id="userType" name="userType" class="form-input">
                            <option value="etudiant">Etudiant</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="identifiant">Email:</label>
                        <input id="identifiant" type="email" name="identifiant" class="form-input" placeholder="Email" required>
                        <small id="loginError" class="error-message" hidden></small>
                    </div>

                    <div class="form-group">
                        <label for="mdp">Mot de Passe:</label>
                        <input id="mdp" type="password" name="mdp" class="form-input" required>
                        <small id="mdpError" class="error-message" hidden></small>
                    </div>

                    <div class="form-group">
                        <label for="name">Nom:</label>
                        <input id="name" type="text" name="name" class="form-input" required>
                        <small id="NameFieldError" class="error-message" hidden></small>
                    </div>

                    <div class="form-group">
                        <label for="surname">Prenom:</label>
                        <input id="surname" type="text" name="surname" class="form-input" required>
                        <small id="surnameError" class="error-message" hidden></small>
                    </div>

                    <div class="form-group">
                        <label for="address">Adresse:</label>
                        <input id="address" type="text" name="address" class="form-input" required>
                        <small id="addressError" class="error-message" hidden></small>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="submit-btn">Ajouter etudiant</button>
                        <button id="annuler" type="button" class="submit-btn">Annuler</button>
                        <script type="text/javascript">
                            const annuler = document.getElementById('annuler');
                            annuler.addEventListener('click', function() {
                                window.location.href = './dashboardAdmin.php'; // Adjust the path as necessary
                            });
                        </script>
                    </div>
                </fieldset>
            </form>
        </section>
    </div>
    <script src="../../scripts/register.js" type="module"></script>
</body>
</html>
