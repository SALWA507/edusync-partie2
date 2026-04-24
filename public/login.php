<?php include('../includes/header.php'); ?>

<section class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen">

    <div class="w-full bg-white rounded-lg shadow sm:max-w-md p-6">

      <h1 class="text-xl font-bold mb-4">Connexion</h1>

      <form action="../scripts/authprocess.php" method="POST" class="space-y-4">

        <input type="email" name="email" placeholder="Email"
          class="w-full p-2 border rounded" required>

        <input type="password" name="password" placeholder="Mot de passe"
          class="w-full p-2 border rounded" required>

        <button type="submit" name="login"
          class="w-full bg-blue-600 text-white py-2 rounded">
          Se connecter
        </button>

      </form>

      <?php if(isset($_GET['error'])): ?>
        <p class="text-red-500 mt-2">
          Email ou mot de passe incorrect 
        </p>
      <?php endif; ?>

    </div>
  </div>
</section>

<?php include('../includes/footer.php'); ?>