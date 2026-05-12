<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="w-full bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
        <a href="<?php echo home_url('/'); ?>" class="text-xl font-bold text-gray-900">
            <?php bloginfo('name'); ?>
        </a>

        <!-- Desktop Nav -->
        <nav aria-label="Primary Navigation" class="hidden md:block">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'menu_class'     => 'flex gap-6 items-center',
                'container'      => false,
                'fallback_cb'    => false,
            ]);
            ?>
        </nav>

        <!-- Mobile Toggle -->
        <button
            id="menu-toggle"
            data-menu-toggle
            class="md:hidden p-2 text-gray-700"
            aria-label="Toggle menu"
            aria-expanded="false"
        >
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" data-mobile-menu class="hidden md:hidden bg-white border-t px-4 py-4">
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'menu_class'     => 'flex flex-col gap-4',
            'container'      => false,
            'fallback_cb'    => false,
        ]);
        ?>
    </div>
</header>
