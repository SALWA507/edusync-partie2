# EduSync - Système d'Authentification PHP

## Description

EduSync est une application web développée en PHP procédural permettant de gérer un système d’authentification simple.

Elle permet aux utilisateurs de :
- Créer un compte (inscription)
- Se connecter
- Accéder à un espace sécurisé (dashboard)
- Se déconnecter

Ce projet a été réalisé dans le cadre de la formation Développeur Web & Web Mobile.

---

## Objectifs

- Manipuler les superglobales PHP (`$_POST`, `$_GET`, `$_SESSION`)
- Implémenter une logique d’authentification
- Sécuriser les données utilisateur
- Structurer un projet web de manière professionnelle

---

## Technologies utilisées

- PHP (procédural)
- HTML5
- Tailwind CSS
- XAMPP (Apache)

---

## Structure du projet

edusync-backend/
│
├── public/
│   ├── index.php          # Page d'accueil
│   ├── login.php          # Formulaire de connexion
│   ├── register.php       # Formulaire d'inscription
│   ├── dashboard.php      # Page sécurisée
│   └── assets/            # Fichiers CSS / JS
│
├── scripts/
│   ├── authprocess.php    # Traitement des formulaires
│   └── logout.php         # Déconnexion
│
├── includes/
│   ├── header.php         # Header commun
│   ├── footer.php         # Footer commun
│   └── functions.php      # Fonctions utiles
│
└── README.md

---

## Fonctionnalités

### Inscription
- Formulaire avec Nom, Prénom, Email, Mot de passe
- Vérification des champs vides
- Validation du format email
- Nettoyage des données avec `htmlspecialchars()`
- Redirection avec message d’erreur

---

### Connexion
- Vérification des identifiants
- Gestion des erreurs (champs vides ou incorrects)
- Redirection vers le dashboard en cas de succès

---

### Gestion des sessions
- Création de session avec `session_start()`
- Stockage des informations utilisateur dans `$_SESSION`
- Maintien de la connexion entre les pages

---

### Protection du Dashboard
- Vérification si l’utilisateur est connecté
- Redirection vers login si non autorisé

---

###  Déconnexion
- Destruction de la session avec `session_destroy()`
- Redirection vers la page d’accueil

---

## Parcours utilisateur

1. L'utilisateur accède au formulaire d'inscription
2. Il remplit ses informations
3. Il se connecte avec ses identifiants
4. Une session est créée
5. Il accède au dashboard
6. Il peut se déconnecter

---

## Sécurité

- Validation des entrées utilisateur
- Vérification du format email (`filter_var`)
- Protection contre les attaques XSS (`htmlspecialchars`)
- Utilisation de `$_POST` pour éviter l’exposition des données
- Sessions pour sécuriser l’accès aux صفحات protégées

---



