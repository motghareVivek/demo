<?php include 'includes/header.php'; ?>

<section class="relative z-10 max-w-3xl mx-auto mt-16 px-4">
    <form id="contactForm" class="bg-white/90 p-8 rounded-2xl shadow-lg backdrop-blur-md">
        <div class="mb-6">
            <label class="block text-gray-700 font-semibold mb-2" for="name">Your Name</label>
            <input type="text" id="name" name="name" placeholder="Vivek Motghare" 
                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-400">
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 font-semibold mb-2" for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="you@example.com" 
                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-400">
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 font-semibold mb-2" for="message">Your Message / Joke 😜</label>
            <textarea id="message" name="message" rows="5" placeholder="Write something funny or feedback..." 
                      class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-400"></textarea>
        </div>

        <button type="submit" class="bg-pink-500 text-white px-6 py-3 rounded-lg hover:bg-pink-600 transition font-semibold">
            Send & Join the Fun 🎉
        </button>
    </form>
</section>


<?php include 'includes/footer.php'; ?>
