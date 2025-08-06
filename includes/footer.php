<footer class="bg-gray-900 text-white pt-16 pb-8">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 mb-8">
            <div class="lg:col-span-2">
                <div class="flex items-center mb-6">
                    <img src="/public_html/assets/img/logo-white.png" alt="Nepal van Java" class="h-10 mr-3">
                    <span class="text-2xl font-bold font-heading">Nepal van Java</span>
                </div>
                <div class="space-y-2 text-gray-300">
                    <p>Desa Wisata di Lereng Gunung Sumbing</p>
                    <p>Kecamatan Kejajar, Kabupaten Wonosobo</p>
                    <p class="mt-4"><strong>Phone:</strong> +62 123 4567 890</p>
                    <p><strong>Email:</strong> info@nepalvanjava.com</p>
                </div>
            </div>

            <div>
                <h4 class="text-lg font-bold mb-4 pb-2 border-b border-green-600">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors">Home</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors">About Us</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors">Spot Wisata</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors">Paket Wisata</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors">Contact</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-bold mb-4 pb-2 border-b border-green-600">Fasilitas</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors">Homestay</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors">Kuliner</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors">Trekking</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors">Camping</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors">Oleh-oleh</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-bold mb-4 pb-2 border-b border-green-600">Social Media</h4>
                <div class="flex space-x-4 mb-6">
                    <a href="#"
                        class="w-10 h-10 bg-gray-700 hover:bg-green-600 rounded-full flex items-center justify-center transition-colors">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-gray-700 hover:bg-green-600 rounded-full flex items-center justify-center transition-colors">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-gray-700 hover:bg-green-600 rounded-full flex items-center justify-center transition-colors">
                        <i class="bi bi-youtube"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-gray-700 hover:bg-green-600 rounded-full flex items-center justify-center transition-colors">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                </div>
                <h4 class="text-lg font-bold mb-4 pb-2 border-b border-green-600">Newsletter</h4>
                <form class="flex">
                    <input type="email" placeholder="Your email"
                        class="px-3 py-2 bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-green-400">
                    <button type="submit" class="bg-green-600 hover:bg-green-700 px-4 py-2 transition-colors">
                        <i class="bi bi-send"></i>
                    </button>
                </form>
            </div>
        </div>

        <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
            <div class="text-center md:text-left mb-4 md:mb-0">
                <p>&copy; Copyright <strong>Nepal van Java</strong>. All Rights Reserved</p>
                <p class="text-sm text-gray-400 mt-1">Designed with ❤️ by Nepal van Java Team</p>
            </div>
            <div class="flex space-x-4">
                <a href="#" class="text-gray-400 hover:text-green-400">Terms of Service</a>
                <a href="#" class="text-gray-400 hover:text-green-400">Privacy Policy</a>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll Top Button -->
<a href="#" id="scroll-top"
    class="fixed bottom-8 right-8 bg-green-600 text-white w-12 h-12 rounded-full flex items-center justify-center opacity-0 invisible transition-all duration-300 hover:bg-green-700">
    <i class="bi bi-arrow-up-short text-2xl"></i>
</a>

<!-- Preloader -->
<div id="preloader" class="fixed inset-0 z-50 bg-white flex items-center justify-center">
    <div class="w-16 h-16 border-4 border-green-600 border-t-transparent rounded-full animate-spin"></div>
</div>

<!-- Vendor JS Files -->
<script src="/public_html/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/public_html/assets/vendor/aos/aos.js"></script>
<script src="/public_html/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/public_html/assets/vendor/glightbox/js/glightbox.min.js"></script>

<!-- Main JS -->
<script>
    // Preloader
    window.addEventListener('load', function () {
        const preloader = document.getElementById('preloader');
        preloader.style.opacity = '0';
        preloader.style.visibility = 'hidden';
        setTimeout(() => {
            preloader.remove();
        }, 500);
    });

    // Scroll top button
    window.addEventListener('scroll', function () {
        const scrollTop = document.getElementById('scroll-top');
        if (window.scrollY > 300) {
            scrollTop.classList.remove('opacity-0', 'invisible');
            scrollTop.classList.add('opacity-100', 'visible');
        } else {
            scrollTop.classList.remove('opacity-100', 'visible');
            scrollTop.classList.add('opacity-0', 'invisible');
        }
    });

    // Initialize AOS
    document.addEventListener('DOMContentLoaded', function () {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Initialize Swiper
        const swiperElements = document.querySelectorAll('.init-swiper');
        swiperElements.forEach(el => {
            const config = JSON.parse(el.querySelector('.swiper-config').innerHTML);
            new Swiper(el, config);
        });
    });
</script>

<?php include 'modal-akun.php'; ?>
</body>

</html>