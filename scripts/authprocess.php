<?php
session_start();

if (isset($_POST['register'])) {

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérification champs vides
    if (empty($nom) || empty($prenom) || empty($email) || empty($password)) {
        header("Location: ../public/register.php?error=empty");
        exit();
    }

    // Vérification email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../public/register.php?error=email");
        exit();
    }

    // Sécurité XSS
    $nom = htmlspecialchars($nom);
    $prenom = htmlspecialchars($prenom);
    $email = htmlspecialchars($email);
    $password = htmlspecialchars($password);

    // 💡 SIMULATION BASE DE DONNÉES
    $_SESSION['registered_user'] = [
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'password' => $password
    ];

    header("Location: ../public/login.php?success=1");
    exit();
}