<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous"
    >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="./style/style.css">
    <script src="./js/functions.js"></script>
    <script src="./js/jquery/JQuery_3.5.1.js"></script>

	<title>Connexion</title>
</head>
<body>
<?php
   include 'utils.php';

    // Générer un nouveau token
    $token = generateToken();
    $_SESSION['token'] = $token;
    $_SESSION['token_time'] = time();
?>

<div class="container mt-5">
    <h1>Se connecter</h1>
    <img src="./img/img.png" alt="Form sécurisées">
    <div class="errors"></div>
    <div class="formWrapper">
        <form class="form text-center">
            <input hidden='hidden' name='login'/>
            <div class="mb-3" style="width: 300px;">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input id="email" name="email" type="email"
                    autocomplete="email" class="form-control" required placeholder="Entrez votre email"
                />
            </div>
            <div class="mb-3" style="width: 300px;">
                <label for="exampleInputPassword" class="form-label">Mot de passe</label>
                <input id="password" name="password" type="password"
                    class="form-control" autocomplete="current-password" required placeholder="Entez mot de passe"
                />
            </div>
            <button type="reset" class="btn btn-primary mt-2" style="width: 200px;">
                Reset
            </button>
            <input id="token" type="hidden" name="token" value="<?php echo $token;?>">
        </form>
        <div class="text-center">
            <div class="container">
                <button class="btn btn-primary mt-2" style="width: 200px;" onclick="login()">
                    Se connecter
                </button>
            </div>
            <div class="container">
            </div>
            <div class="container">
                <a href='./registration.php' type="submit" class="btn btn-primary mt-2" style="width: 200px;">
                    Vous n'avez pas compte ? Veuillez le créer
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
