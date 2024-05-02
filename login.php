<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <link rel="icon" href="./assets/favicon.ico" type="image/x-icon">
    <title>Plateforme Scolarité</title>
</head>
<body>
    <div class="wrapper">
        <section class="login-container">
            <form id="loginForm" class="login-form">
                <fieldset class="login-fieldset">
                    <legend class="form-title">Login</legend>

                    <div id="failed" class="error-alert" hidden></div>

                    <div class="form-group">
                        <label for="userType">Type de compte:</label>
                        <select id="userType" name="userType" class="form-input">
                            <option value="admin">Admin</option>
                            <option value="prof">Prof</option>
                            <option value="etudiant">Etudiant</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="identifiant">User:</label>
                        <input id="identifiant" type="text" name="identifiant" class="form-input" value="">
                        <small id="loginError" class="error-message" hidden></small>
                    </div>

                    <div class="form-group">
                        <label for="mdp">Mot de Passe:</label>
                        <input id="mdp" type="password" name="mdp" class="form-input">
                        <small id="mdpError" class="error-message" hidden></small>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="submit-btn">Se Connecter</button>
                    </div>
                </fieldset>
            </form>
        </section>
    </div>
    <script src="../scripts/login.js" type="module"></script>
</body>
</html>
