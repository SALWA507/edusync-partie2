<?php
session_start();
if (isset($_SESSION['user'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion - EduSync</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">

<div class="bg-white p-8 rounded-lg shadow-lg w-96">

    <h2 class="text-2xl font-bold mb-6 text-center text-blue-600">
        EduSync - Connexion
    </h2>

    <?php if (isset($_GET['error'])): ?>
        <p class="text-red-500 text-center mb-3">Email ou mot de passe incorrect</p>
    <?php endif; ?>

    <form action="../script/authprocess.php" method="POST" class="space-y-4">

        <input type="email" name="email" placeholder="Email"
               class="w-full p-2 border rounded">

        <input type="password" name="password" placeholder="Mot de passe"
               class="w-full p-2 border rounded">

        <button name="login"
                class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-700">
            Se connecter
        </button>

    </form>

    <p class="mt-4 text-center text-sm">
        Pas de compte ?
        <a href="register.php" class="text-blue-600">S'inscrire</a>
    </p>

</div>

</body>
</html>