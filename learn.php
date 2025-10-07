<?php include 'includes/header.php'; ?>

<section class="relative z-10 max-w-5xl mx-auto mt-16 px-4 text-center">
    <h1 class="text-4xl md:text-5xl font-extrabold text-indigo-700">Learn <span class="text-pink-600">PHP FunWay</span></h1>
    <p class="mt-4 text-lg text-gray-800 leading-relaxed">
        Quick tips, mini-snippets, and fun ways to learn PHP 😎.  
        Code, laugh, and become a PHP hero in no time!
    </p>
</section>

<!-- Learning Platforms / Official Links -->
<section class="relative z-10 max-w-6xl mx-auto mt-20 px-4 text-center">
    <h2 class="text-3xl font-bold text-indigo-700 mb-8">🌐 Learn More PHP Online</h2>
    <p class="text-gray-700 mb-6">
        Explore official documentation and trusted platforms to master PHP at your own pace!
    </p>
    <div class="flex flex-wrap justify-center gap-4">
        <a href="https://www.php.net/docs.php" target="_blank" class="learning-btn bg-gradient-to-r from-indigo-500 to-indigo-700 text-white font-bold px-6 py-3 rounded-full shadow-lg hover:scale-105 transition">Official PHP Docs</a>
        <a href="https://www.w3schools.com/php/" target="_blank" class="learning-btn bg-gradient-to-r from-pink-500 to-pink-700 text-white font-bold px-6 py-3 rounded-full shadow-lg hover:scale-105 transition">W3Schools PHP</a>
        <a href="https://www.tutorialspoint.com/php/index.htm" target="_blank" class="learning-btn bg-gradient-to-r from-green-500 to-green-700 text-white font-bold px-6 py-3 rounded-full shadow-lg hover:scale-105 transition">TutorialsPoint PHP</a>
        <a href="https://www.freecodecamp.org/news/tag/php/" target="_blank" class="learning-btn bg-gradient-to-r from-yellow-500 to-yellow-700 text-white font-bold px-6 py-3 rounded-full shadow-lg hover:scale-105 transition">FreeCodeCamp PHP</a>
        <a href="https://www.codecademy.com/learn/learn-php" target="_blank" class="learning-btn bg-gradient-to-r from-blue-500 to-blue-700 text-white font-bold px-6 py-3 rounded-full shadow-lg hover:scale-105 transition">Codecademy PHP</a>
    </div>
</section>

<!-- PHP Basics Tips -->
<section class="relative z-10 max-w-6xl mx-auto mt-16 px-4">
    <h2 class="text-3xl font-bold text-indigo-700 mb-8 text-center">🛠️ PHP Basics Tips</h2>
    <div class="grid md:grid-cols-3 gap-6">
        <!-- Echo & Print -->
        <div class="card p-6 rounded-2xl shadow-md hover:shadow-xl transition hover:-translate-y-1 bg-gradient-to-br from-pink-50 to-pink-100">
            <h3 class="text-2xl font-bold text-pink-600 mb-2">💻 Echo & Print</h3>
            <p>Use <code>echo</code> or <code>print</code> to display text.</p>
            <pre class="bg-white p-2 rounded text-sm cursor-pointer hover:bg-gray-100 transition" onclick="copyCode(this)"><code>&lt;?php echo "Hello, PHP!"; ?&gt;</code></pre>
            <span class="text-xs text-gray-500">Click code to copy</span>
        </div>

        <!-- Variables -->
        <div class="card p-6 rounded-2xl shadow-md hover:shadow-xl transition hover:-translate-y-1 bg-gradient-to-br from-indigo-50 to-indigo-100">
            <h3 class="text-2xl font-bold text-indigo-600 mb-2">🔢 Variables</h3>
            <p>Variables start with <code>$</code>.</p>
            <pre class="bg-white p-2 rounded text-sm cursor-pointer hover:bg-gray-100 transition" onclick="copyCode(this)"><code>&lt;?php $name = "Vivek"; ?&gt;</code></pre>
            <span class="text-xs text-gray-500">Click code to copy</span>
        </div>

        <!-- Arrays -->
        <div class="card p-6 rounded-2xl shadow-md hover:shadow-xl transition hover:-translate-y-1 bg-gradient-to-br from-green-50 to-green-100">
            <h3 class="text-2xl font-bold text-green-600 mb-2">⚡ Arrays</h3>
            <p>Store multiple values in arrays.</p>
            <pre class="bg-white p-2 rounded text-sm cursor-pointer hover:bg-gray-100 transition" onclick="copyCode(this)"><code>&lt;?php $fruits = ["Apple","Mango","Banana"]; ?&gt;</code></pre>
            <span class="text-xs text-gray-500">Click code to copy</span>
        </div>
    </div>
</section>

<!-- Fun PHP Snippets -->
<section class="relative z-10 max-w-6xl mx-auto mt-20 px-4 text-center">
    <h2 class="text-3xl font-bold text-indigo-700 mb-8">😂 Fun PHP Snippets</h2>
    <div class="grid md:grid-cols-2 gap-6">
        <div class="card bg-gradient-to-br from-pink-50 to-pink-100 p-6 rounded-2xl shadow-md hover:shadow-xl transition hover:-translate-y-1">
            <h3 class="text-xl font-bold text-pink-600 mb-2">🤖 Random Number Fun</h3>
            <pre class="bg-white p-2 rounded text-sm cursor-pointer hover:bg-gray-100 transition" onclick="copyCode(this)"><code>&lt;?php echo rand(1, 100); ?&gt;</code></pre>
        </div>
        <div class="card bg-gradient-to-br from-indigo-50 to-indigo-100 p-6 rounded-2xl shadow-md hover:shadow-xl transition hover:-translate-y-1">
            <h3 class="text-xl font-bold text-indigo-600 mb-2">🧩 String Tricks</h3>
            <pre class="bg-white p-2 rounded text-sm cursor-pointer hover:bg-gray-100 transition" onclick="copyCode(this)"><code>&lt;?php echo strrev("FunPHP"); ?&gt;</code></pre>
        </div>
        <div class="card bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-2xl shadow-md hover:shadow-xl transition hover:-translate-y-1">
            <h3 class="text-xl font-bold text-green-600 mb-2">🔁 Loops</h3>
            <pre class="bg-white p-2 rounded text-sm cursor-pointer hover:bg-gray-100 transition" onclick="copyCode(this)"><code>&lt;?php for($i=1;$i&lt;=5;$i++){ echo $i; } ?&gt;</code></pre>
        </div>
        <div class="card bg-gradient-to-br from-yellow-50 to-yellow-100 p-6 rounded-2xl shadow-md hover:shadow-xl transition hover:-translate-y-1">
            <h3 class="text-xl font-bold text-yellow-600 mb-2">🌟 Conditional Fun</h3>
            <pre class="bg-white p-2 rounded text-sm cursor-pointer hover:bg-gray-100 transition" onclick="copyCode(this)"><code>&lt;?php if(true){ echo "Yes!"; } ?&gt;</code></pre>
        </div>
    </div>
</section>

<!-- Mini Project Ideas -->
<section class="relative z-10 max-w-6xl mx-auto mt-20 px-4 text-center">
    <h2 class="text-3xl font-bold text-indigo-700 mb-8">🎯 Mini Project Ideas</h2>
    <div class="grid md:grid-cols-3 gap-6">
        <div class="card bg-gradient-to-br from-pink-50 to-pink-100 p-6 rounded-2xl shadow-md hover:shadow-xl transition hover:-translate-y-1">
            <h3 class="text-xl font-bold text-pink-600 mb-2">📚 Quiz App</h3>
            <p>Create a simple PHP quiz that asks questions and calculates scores.</p>
        </div>
        <div class="card bg-gradient-to-br from-indigo-50 to-indigo-100 p-6 rounded-2xl shadow-md hover:shadow-xl transition hover:-translate-y-1">
            <h3 class="text-xl font-bold text-indigo-600 mb-2">📝 ToDo List</h3>
            <p>Build a PHP app to add, remove, and complete tasks.</p>
        </div>
        <div class="card bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-2xl shadow-md hover:shadow-xl transition hover:-translate-y-1">
            <h3 class="text-xl font-bold text-green-600 mb-2">💬 Joke Generator</h3>
            <p>Create a PHP page that shows a random joke on each click.</p>
        </div>
    </div>
</section>

<script>
function copyCode(element){
    navigator.clipboard.writeText(element.innerText);
    alert('Code copied to clipboard! 😎');
}
</script>

<?php include 'includes/footer.php'; ?>
