<?php

define('THEME_URL', get_template_directory_uri().'/resources/');

if (is_file(__DIR__.'/vendor/autoload_packages.php')) {
    require_once __DIR__.'/vendor/autoload_packages.php';
}

function tailpress(): TailPress\Framework\Theme
{
    return TailPress\Framework\Theme::instance()
        ->assets(fn($manager) => $manager
            ->withCompiler(new TailPress\Framework\Assets\ViteCompiler, fn($compiler) => $compiler
                ->registerAsset('resources/css/app.css')
                ->registerAsset('resources/js/app.js')
                ->editorStyleFile('resources/css/editor-style.css')
            )
            ->enqueueAssets()
        )
        ->features(fn($manager) => $manager->add(TailPress\Framework\Features\MenuOptions::class))
        ->menus(fn($manager) => $manager->add('primary', __( 'Primary Menu', 'tailpress')))
        ->themeSupport(fn($manager) => $manager->add([
            'title-tag',
            'custom-logo',
            'post-thumbnails',
            'align-wide',
            'wp-block-styles',
            'responsive-embeds',
            'html5' => [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            ]
        ]));
}

tailpress();



function cc_medical_enqueue_assets() {
    $manifest_path = get_template_directory() . '/dist/.vite/manifest.json';

    // Check if in development mode
    if (defined('WP_DEBUG') && WP_DEBUG && !file_exists($manifest_path)) {
        wp_enqueue_script(
            'vite-client',
            'http://localhost:3000/@vite/client',
            [],
            null
        );

        wp_enqueue_script(
            'cc-medical-js',
            'http://localhost:3000/resources/js/app.js',
            [],
            null,
            true
        );

        wp_enqueue_style(
            'cc-medical-css',
            'http://localhost:3000/resources/css/app.css',
            [],
            null
        );
    } else {
        if (file_exists($manifest_path)) {
            $manifest = json_decode(file_get_contents($manifest_path), true);

            if (isset($manifest['resources/js/app.js'])) {
                wp_enqueue_script(
                    'cc-medical-js',
                    get_template_directory_uri() . '/dist/' . $manifest['resources/js/app.js']['file'],
                    [],
                    null,
                    true
                );
            }

            if (isset($manifest['resources/css/app.css'])) {
                wp_enqueue_style(
                    'cc-medical-css',
                    get_template_directory_uri() . '/dist/' . $manifest['resources/css/app.css']['file'],
                    [],
                    null
                );
            }
        }
    }
}
add_action('wp_enqueue_scripts', 'cc_medical_enqueue_assets');
