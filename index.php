<?php include 'includes/header.php'; ?>
<!-- heto section -->
<section class="relative z-10 max-w-5xl mx-auto mt-16 px-4 text-center">
  <h1 class="text-4xl md:text-6xl font-extrabold text-indigo-700">
    Welcome to <span class="text-pink-600 underline decoration-wavy decoration-pink-400">PHP FunLand!</span>
  </h1>
  <p class="mt-4 text-lg text-gray-700 leading-relaxed">
    The land where <strong class="text-indigo-600">echo</strong> is not just a command — it’s a lifestyle 😎
  </p>
  <img src="images/php-logo.png" alt="PHP Logo" class="mx-auto mt-10 w-32 md:w-40 animate-bounce">
  <div class="mt-8 space-x-4">
    <a href="about.php" class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition">Learn
      More</a>
    <a href="#jokes" class="bg-pink-500 text-white px-6 py-3 rounded-lg hover:bg-pink-600 transition">Crack a Joke 😆</a>
  </div>
</section>


<section class="relative z-10 max-w-6xl mx-auto mt-20 grid md:grid-cols-3 gap-6 px-4">
  <div class="bg-white/80 backdrop-blur-md p-6 rounded-2xl shadow-md hover:shadow-xl transition hover:-translate-y-1">
    <h2 class="text-2xl font-semibold mb-2">🧠 Smart Syntax?</h2>
    <p>Well... kind of 😅. PHP can be messy, but hey — so can life!</p>
  </div>
  <div class="bg-white/80 backdrop-blur-md p-6 rounded-2xl shadow-md hover:shadow-xl transition hover:-translate-y-1">
    <h2 class="text-2xl font-semibold mb-2">⚡ Fast Execution</h2>
    <p>PHP runs so fast... unless you forgot that semicolon again! 🤯</p>
  </div>
  <div class="bg-white/80 backdrop-blur-md p-6 rounded-2xl shadow-md hover:shadow-xl transition hover:-translate-y-1">
    <h2 class="text-2xl font-semibold mb-2">🌍 Web Hero</h2>
    <p>It’s been powering the web since dinosaurs learned HTML 🦖</p>
  </div>
</section>

<!-- PHP History & Funny Facts Section -->
<section class="relative z-10 max-w-6xl mx-auto mt-24 px-4 text-center">
  <h2 class="text-4xl font-bold text-indigo-700 mb-10">🕰️ PHP History & Funny Facts</h2>

  <div class="grid md:grid-cols-3 gap-8">
    <div class="bg-white/90 backdrop-blur-md p-6 rounded-2xl shadow-md hover:shadow-xl transition hover:-translate-y-1">
      <h3 class="text-2xl font-semibold text-pink-600 mb-2">1995 — The Birth of PHP 🐣</h3>
      <p class="text-gray-700">Rasmus Lerdorf made PHP to track visits — basically a “hello world” gone wild.</p>
      <p class="mt-3 text-sm text-gray-500 italic">("Let me just write a small script..." — famous last words)</p>
    </div>
    <div class="bg-white/90 backdrop-blur-md p-6 rounded-2xl shadow-md hover:shadow-xl transition hover:-translate-y-1">
      <h3 class="text-2xl font-semibold text-indigo-600 mb-2">PHP 5.0 — Object-Oriented Time ⚙️</h3>
      <p class="text-gray-700">PHP decided to grow up and got OOP features... still made mistakes though 😆</p>
      <p class="mt-3 text-sm text-gray-500 italic">("We can be classy now!")</p>
    </div>
    <div class="bg-white/90 backdrop-blur-md p-6 rounded-2xl shadow-md hover:shadow-xl transition hover:-translate-y-1">
      <h3 class="text-2xl font-semibold text-green-600 mb-2">PHP 8.0 — Speed Demon 🚀</h3>
      <p class="text-gray-700">Introduced JIT and faster performance. Finally, PHP stopped being the punchline of every
        meme!</p>
      <p class="mt-3 text-sm text-gray-500 italic">("Who's slow now, huh?")</p>
    </div>
  </div>
</section>

<!-- PHP vs Other Languages Section -->
<section class="max-w-6xl mx-auto mt-24 px-4 text-center">
  <h2 class="text-4xl font-bold text-indigo-700 mb-10">🤖 PHP vs Other Languages</h2>
  <p class="text-gray-700 mb-12 text-lg">Just friendly banter between siblings in code world 😉</p>

  <div class="grid md:grid-cols-3 gap-8">

    <!-- PHP vs Python -->
    <div class="bg-white/90 p-6 rounded-2xl shadow-md hover:shadow-xl transition transform hover:-translate-y-1">
      <h3 class="text-2xl font-semibold text-pink-600 mb-3">🐘 PHP vs 🐍 Python</h3>
      <p class="text-gray-700 leading-relaxed">
        PHP: “I power 75% of the web!”<br>
        Python: “I power the AI that judges you.” 😏
      </p>
      <p class="mt-3 text-sm text-gray-500 italic">Moral: Both are overworked and underpaid.</p>
    </div>

    <!-- PHP vs Java -->
    <div class="bg-white/90 p-6 rounded-2xl shadow-md hover:shadow-xl transition transform hover:-translate-y-1">
      <h3 class="text-2xl font-semibold text-indigo-600 mb-3">🐘 PHP vs ☕ Java</h3>
      <p class="text-gray-700 leading-relaxed">
        PHP: “I’m simple and fast!”<br>
        Java: “I’m enterprise and... verbose.” 🧾
      </p>
      <p class="mt-3 text-sm text-gray-500 italic">Moral: PHP runs faster, Java loads slower — both compile jokes
        instantly.</p>
    </div>

    <!-- PHP vs JavaScript -->
    <div class="bg-white/90 p-6 rounded-2xl shadow-md hover:shadow-xl transition transform hover:-translate-y-1">
      <h3 class="text-2xl font-semibold text-green-600 mb-3">🐘 PHP vs 💡 JavaScript</h3>
      <p class="text-gray-700 leading-relaxed">
        PHP: “I rule the backend.”<br>
        JavaScript: “I rule the frontend... and kinda the backend too.” 🤓
      </p>
      <p class="mt-3 text-sm text-gray-500 italic">Moral: It’s complicated — they’re frenemies.</p>
    </div>
  </div>

  <!-- Fun ending line -->
  <p id="jokes" class="mt-12 text-lg text-gray-700 font-medium">
    Every language has its charm — but PHP’s charm comes with <strong>echoes of laughter</strong> 😆
  </p>
</section>

<?php
$jokes = [
  [
    "title" => "🤣 Echo Chamber",
    "color" => "text-pink-600",
    "text" => "PHP developers don’t talk to themselves. They just <code>echo</code> everything!"
  ],
  [
    "title" => "😅 Syntax Surprise",
    "color" => "text-indigo-600",
    "text" => "Why did the PHP function break up? It had too many arguments 💔"
  ],
  [
    "title" => "🧠 Logic Loops",
    "color" => "text-green-600",
    "text" => "PHP developers when something doesn’t work: “Let’s add one more <code>if</code> — just in case.” 😬"
  ],
  [
    "title" => "🤯 Classic Error",
    "color" => "text-yellow-600",
    "text" => "PHP without semicolons is like tea without sugar — just pure sadness 😢"
  ],
  [
    "title" => "🧩 Connection Lost",
    "color" => "text-blue-600",
    "text" => "Why did PHP stop connecting to MySQL? Because it couldn’t find a stable relationship. 💔"
  ],
  [
    "title" => "🔥 Debug Mode",
    "color" => "text-purple-600",
    "text" => "Debugging in PHP is like being a detective... in a crime movie where you’re also the murderer 😈"
  ]
];

// Shuffle the jokes array randomly
shuffle($jokes);
?>
<section class="relative z-10 max-w-6xl mx-auto mt-24 px-4 text-center">
  <h2 class="text-4xl font-bold text-indigo-700 mb-10">💬 PHP Jokes Zone</h2>
  <p class="text-gray-700 mb-12 text-lg">Because laughter is the best syntax error recovery 😜</p>

  <div class="grid md:grid-cols-3 gap-8">
    <?php foreach ($jokes as $joke): ?>
      <div class="bg-white/80 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition hover:-translate-y-1 transform">
        <h3 class="text-xl font-semibold <?= $joke['color'] ?> mb-3"><?= $joke['title'] ?></h3>
        <p class="text-gray-700 leading-relaxed"><?= $joke['text'] ?></p>
      </div>
    <?php endforeach; ?>
  </div>

  <p class="mt-12 text-lg text-gray-700 font-medium relative z-10">
    Remember: In PHP, <strong>everything’s funny</strong> until it’s undefined 🤣
  </p>
</section>


<?php include 'includes/footer.php'; ?>