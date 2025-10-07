<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative z-10 max-w-4xl mx-auto mt-16 px-4 text-center">
    <h1 class="text-5xl font-extrabold text-indigo-700 mb-4">Rasmus <span class="text-pink-600">Lerdorf</span></h1>
    <p class="text-gray-800 text-lg md:text-xl">
        The mind behind PHP — a true web pioneer with a casual, witty personality 😎
    </p>
    <img src="images/rasmus.jpeg" alt="Rasmus Lerdorf" class="mx-auto mt-8 w-64 h-64 rounded-full shadow-lg border-4 border-indigo-600">
</section>

<!-- Fun Facts / Journey -->
<section class="max-w-6xl mx-auto mt-16 px-4">
    <h2 class="text-3xl font-bold text-indigo-700 mb-8 text-center">🌟 Fun Facts & Journey</h2>
    <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-white/90 p-6 rounded-2xl shadow-md hover:shadow-xl transition hover:-translate-y-1">
            <h3 class="text-xl font-bold text-pink-600 mb-2">🧠 Creator of PHP</h3>
            <p class="text-gray-800 leading-relaxed">
                Rasmus Lerdorf created PHP in 1994 to manage his personal website. Initially, it was just a “Personal Home Page” tool, but it grew into the PHP we know today!
            </p>
        </div>
        <div class="bg-white/90 p-6 rounded-2xl shadow-md hover:shadow-xl transition hover:-translate-y-1">
            <h3 class="text-xl font-bold text-indigo-600 mb-2">🏁 Initial Purpose</h3>
            <p class="text-gray-800 leading-relaxed">
                PHP was designed to handle visitor counts, forms, and simple dynamic content. Imagine starting a global phenomenon from a humble personal script!
            </p>
        </div>
        <div class="bg-white/90 p-6 rounded-2xl shadow-md hover:shadow-xl transition hover:-translate-y-1">
            <h3 class="text-xl font-bold text-green-600 mb-2">🌍 Evolution</h3>
            <p class="text-gray-800 leading-relaxed">
                PHP gradually became a full server-side language. Today, platforms like WordPress, Facebook, and countless websites run on PHP.
            </p>
        </div>
        <div class="bg-white/90 p-6 rounded-2xl shadow-md hover:shadow-xl transition hover:-translate-y-1">
            <h3 class="text-xl font-bold text-yellow-600 mb-2">💬 Philosophy</h3>
            <p class="text-gray-800 leading-relaxed">
                Keep it simple and practical. Rasmus’s philosophy made web development accessible for everyone, not just experts.
            </p>
        </div>
    </div>
</section>

<!-- What You Can Learn Section -->
<section class="relative z-10 max-w-6xl mx-auto mt-16 px-4 text-center">
    <h2 class="text-3xl font-bold text-indigo-700 mb-8">💡 What You Can Learn from Rasmus</h2>
    <ol class="list-decimal list-inside space-y-4 text-gray-800 text-left md:text-center text-lg font-semibold">
        <li>सादगी में ताकत है – Keep it simple, clean, readable code.</li>
        <li>Code & Design अलग रखो – MVC pattern use करो.</li>
        <li>PHP quirks समझो – Bugs avoid करने के लिए inconsistencies समझो.</li>
        <li>Performance & Security – Lightweight requests, prepared statements, input validation, caching.</li>
        <li>Framework thoughtfully choose करो – Small: micro-frameworks, Big: Laravel/Symfony.</li>
        <li>Step-by-step build – पहले working version, फिर features add करो, refactor regularly.</li>
    </ol>
</section>

<!-- Practical Tips Table -->
<section class="max-w-6xl mx-auto mt-16 px-4 overflow-x-auto">
    <h2 class="text-3xl font-bold text-indigo-700 mb-6 text-center">🧩 Practical Website Tips (Rasmus Style)</h2>
    <table class="min-w-full bg-white/90 rounded-2xl shadow-md overflow-hidden text-gray-800">
        <thead class="bg-indigo-700 text-white">
            <tr>
                <th class="py-3 px-4">Step</th>
                <th class="py-3 px-4">Task</th>
            </tr>
        </thead>
        <tbody>
            <tr class="hover:bg-indigo-50 transition">
                <td class="py-2 px-4">1️⃣</td>
                <td class="py-2 px-4">Basic folder structure: app/, views/, config/, public/</td>
            </tr>
            <tr class="hover:bg-indigo-50 transition">
                <td class="py-2 px-4">2️⃣</td>
                <td class="py-2 px-4">Modules separated: blog, login, admin</td>
            </tr>
            <tr class="hover:bg-indigo-50 transition">
                <td class="py-2 px-4">3️⃣</td>
                <td class="py-2 px-4">Template engine: Blade (Laravel) or Twig</td>
            </tr>
            <tr class="hover:bg-indigo-50 transition">
                <td class="py-2 px-4">4️⃣</td>
                <td class="py-2 px-4">Validate inputs for all forms</td>
            </tr>
            <tr class="hover:bg-indigo-50 transition">
                <td class="py-2 px-4">5️⃣</td>
                <td class="py-2 px-4">Enable error logging and monitoring</td>
            </tr>
            <tr class="hover:bg-indigo-50 transition">
                <td class="py-2 px-4">6️⃣</td>
                <td class="py-2 px-4">Unit testing for main logic</td>
            </tr>
            <tr class="hover:bg-indigo-50 transition">
                <td class="py-2 px-4">7️⃣</td>
                <td class="py-2 px-4">Enable caching for performance</td>
            </tr>
        </tbody>
    </table>
</section>

<!-- Conclusion -->
<section class="mt-16 text-center">
    <p class="text-2xl font-extrabold text-red-600">
        “कोड ऐसा लिखो जो सरल हो, उपयोगी हो, और आसानी से मेंटेन किया जा सके।” <br>
        — रास्मस लर्डॉर्फ (Rasmus Lerdorf)
    </p>
</section>

<?php include 'includes/footer.php'; ?>
