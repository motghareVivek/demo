<!-- includes/header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP FunLand 🐘</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-indigo-100 to-blue-200 text-gray-800 font-[Poppins]">

  <!-- Navbar -->
  <nav class="bg-white/80 backdrop-blur-lg shadow-md sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between">
      <a href="index.php" class="flex items-center space-x-2 text-indigo-600 font-bold text-xl">
        <img src="images/php-logo.png" class="w-8 h-8" alt="PHP Logo">
        <span>PHP FunLand 🐘</span>
      </a>

      <ul class="hidden md:flex items-center space-x-6 font-medium">
        <li><a href="index.php" class="hover:text-indigo-500 transition">Home</a></li>
        <li><a href="about.php" class="hover:text-indigo-500 transition">About</a></li>
        <li><a href="#" class="hover:text-indigo-500 transition">Jokes 😜</a></li>
        <li><a href="#" class="hover:text-indigo-500 transition">Learn 📘</a></li>
      </ul>

      <button class="md:hidden bg-indigo-500 text-white px-3 py-1 rounded-lg">☰</button>
    </div>
  </nav>
