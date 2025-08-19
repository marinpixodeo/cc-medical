<?php
/**
 * Theme footer template.
 *
 * @package TailPress
 */
?>
        <?php do_action('tailpress_content_end'); ?>
    </div>

    <?php do_action('tailpress_content_after'); ?>

    <footer id="colophon" class="site-footer footer-section">
        <div class="container-responsive py-16">
            <!-- Company Profile Section -->
            <div class="mb-12">
                <h3 class="text-2xl font-bold text-gray-800 mb-8 text-center">会社概要</h3>
                <div class="max-w-2xl mx-auto">
                    <div class="company-profile">
                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="text-center md:text-left">
                                <h4 class="font-semibold text-gray-700 mb-2">会社名</h4>
                                <p class="text-gray-600">株式会社C&Cメディカル</p>
                            </div>
                            <div class="text-center md:text-left">
                                <h4 class="font-semibold text-gray-700 mb-2">所在地</h4>
                                <p class="text-gray-600">愛知県名古屋市</p>
                            </div>
                            <div class="text-center md:text-left">
                                <h4 class="font-semibold text-gray-700 mb-2">連絡先</h4>
                                <p class="text-gray-600">TEL: 052-602-9995</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map Section -->
            <div class="mb-12">
                <div class="max-w-4xl mx-auto">
                    <div class="map-placeholder">
                        <div class="text-center">
                            <svg class="icon-large" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <p class="text-gray-500">Google Maps がここに表示されます</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-200 pt-8 text-center">
                <p class="text-gray-500 text-sm">
                    © 2023 株式会社C&Cメディカル
                </p>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<script>
// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
</script>

<?php wp_footer(); ?>

</body>
</html>
