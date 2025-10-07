<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP FunLand 🐘</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <link rel="stylesheet" href="css/style.css" />
</head>

<body class="bg-gradient-to-br from-indigo-100 to-blue-200 text-gray-800 font-[Poppins] relative">


  <!-- Floating Emojis Background (Full Page) -->
  <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
    <div class="emoji float-random" style="--x:10%; --size:2.5rem; --delay:0s; --duration:12s;">🐘</div>
    <div class="emoji float-random" style="--x:25%; --size:3rem; --delay:2s; --duration:14s;">💻</div>
    <div class="emoji float-random" style="--x:40%; --size:2rem; --delay:4s; --duration:10s;">😆</div>
    <div class="emoji float-random" style="--x:60%; --size:2.7rem; --delay:1s; --duration:13s;">☕</div>
    <div class="emoji float-random" style="--x:75%; --size:2.2rem; --delay:3s; --duration:11s;">🧠</div>
    <div class="emoji float-random" style="--x:90%; --size:3rem; --delay:5s; --duration:15s;">😂</div>
    <div class="emoji float-random" style="--x:15%; --size:2.8rem; --delay:6s; --duration:12s;">📦</div>
    <div class="emoji float-random" style="--x:55%; --size:2.3rem; --delay:2s; --duration:13s;">🔥</div>
  </div>


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
        <li><a href="rasmus.php" class="hover:text-indigo-500 transition">Rasmus</a></li>
        <li><a href="learn.php" class="hover:text-indigo-500 transition">Learn </a></li>
        <li><a href="contact.php" class="hover:text-indigo-500 transition">Contact </a></li>
      </ul>

      <button class="md:hidden bg-indigo-500 text-white px-3 py-1 rounded-lg">☰</button>
    </div>
  </nav>