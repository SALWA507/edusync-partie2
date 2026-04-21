<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
<section class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

      <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

              <h1 class="text-xl font-bold text-gray-900 md:text-2xl dark:text-white">
                  Créer un compte
              </h1>

              <form class="space-y-4 md:space-y-6" action="../scripts/authprocess.php" method="POST">

                  <div>
                      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                      <input type="text" name="nom" class="w-full p-2.5 border rounded-lg" required>
                  </div>

                  <div>
                      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prénom</label>
                      <input type="text" name="prenom" class="w-full p-2.5 border rounded-lg" required>
                  </div>

                  <div>
                      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                      <input type="email" name="email" class="w-full p-2.5 border rounded-lg" required>
                  </div>

                  <div>
                      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de passe</label>
                      <input type="password" name="password" class="w-full p-2.5 border rounded-lg" required>
                  </div>

                  <button type="submit" name="register"
                      class="w-full text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                      S'inscrire
                  </button>

                  <p class="text-sm text-gray-500">
                      Déjà un compte ?
                      <a href="login.php" class="text-blue-600">Se connecter</a>
                  </p>

              </form>
          </div>
      </div>
  </div>
</section>
</body>
</html>