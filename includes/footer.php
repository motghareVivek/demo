<!-- includes/footer.php -->
<footer class="mt-16 bg-indigo-600 text-white py-8 text-center relative overflow-hidden">
  <div class="max-w-5xl mx-auto px-4">
    <p class="text-lg font-semibold">© <?= date('Y'); ?> PHP FunLand 🐘</p>
    <p class="mt-2 text-sm opacity-90">
      Built with ❤️, ☕, and endless <code>echo</code> statements.
    </p>

    <!-- Creator credit -->
    <div class="mt-4 text-pink-200 font-medium tracking-wide text-sm">
      👨‍💻 Created by <span class="text-white font-bold hover:text-yellow-300 transition">Vivek Motghare</span>
    </div>
  </div>

  <!-- Decorative wave -->
  <div
    class="absolute bottom-0 left-0 w-full h-3 bg-gradient-to-r from-pink-400 via-indigo-500 to-blue-400 animate-pulse">
  </div>
</footer>
<script>
    const form = document.getElementById('contactForm');

    form.addEventListener('submit', function(e) {
        e.preventDefault(); // prevent page reload

        const name = document.getElementById('name').value.trim();
        const message = document.getElementById('message').value.trim();

        if(name === "" || message === "") {
            Swal.fire({
                icon: 'error',
                title: 'Oops!',
                text: 'Please enter your name and message 😅',
                timer: 2000
            });
            return;
        }

        // Success popup
        Swal.fire({
            icon: 'success',
            title: 'Thanks ' + name + '!',
            html: 'Your joke/feedback has been received 😎🎉',
            timer: 2500,
            showConfirmButton: false
        });

        // Optional: clear form after submission
        form.reset();
    });
</script>

</body>

</html>