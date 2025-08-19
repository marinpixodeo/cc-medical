<?php
/**
 * Theme header template.
 *
 * @package TailPress
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <header id="header" class="site-header fixed top-32px left-0 w-full z-50">
        <div class="flex items-start justify-between py-5 pl-10 pr-[30px] lg:py-[30px]">
            <!-- Logo Section -->
            <div class="logo mt-[3px]">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-start group">
                    <img src="<?= THEME_URL; ?>images/top_hd_logo.webp" alt="">
                </a>
            </div>

            <!-- Contact Info & CTA -->
            <div class="flex items-start gap-7">
                <!-- Phone Number -->
                <div class="flex items-center mr-0 mt-[6px]">
                    <a class="block !no-underline text-[32px] text-[var(--color-green)] font-bold" href="tel:052-602-9955"><span class="text-2xl">TEL</span>.052-602-9955</a>
                </div>

                <!-- Inquiry Button -->
                <a href="#inquiry" class="bg-[var(--color-green)] w-[266px] h-[56px] text-white font-bold text-[16px] gap-[10px] tracking-[1.5px] rounded-full transform transition-all duration-200 flex items-center justify-center !no-underline">
                    <span>問い合わせする</span>
                    <img src="<?= THEME_URL ?>/images/icon-arrow.webp" alt="">
                </a>
            </div>
        </div>
    </header>

    <div id="content" class="site-content">
