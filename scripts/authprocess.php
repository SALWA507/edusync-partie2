<?php
session_start();

if (isset($_POST['register'])) {

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($nom) || empty($prenom) || empty($email) || empty($password)) {
        header("Location: ../public/register.php?error=empty");
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../public/register.php?error=email");
        exit();
    }

    $nom = htmlspecialchars($nom);
    $prenom = htmlspecialchars($prenom);
    $email = htmlspecialchars($email);
    $password = htmlspecialchars($password);

    $_SESSION['registered_user'] = [
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'password' => $password
    ];

    header("Location: ../public/login.php?success=1");
    exit();
}


if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérifier champs vides
    if (empty($email) || empty($password)) {
        header("Location: ../public/login.php?error=empty");
        exit();
    }

    $email = htmlspecialchars($email);
    $password = htmlspecialchars($password);

    if (isset($_SESSION['registered_user'])) {

        $user = $_SESSION['registered_user'];

        if ($email === $user['email'] && $password === $user['password']) {

            $_SESSION['user'] = [
                'nom' => $user['nom'],
                'prenom' => $user['prenom']
            ];

            header("Location: ../public/dashboard.php");
            exit();
        }
    }

    header("Location: ../public/login.php?error=1");
    exit();
}