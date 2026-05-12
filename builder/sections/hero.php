<?php
$title    = wpstarter_get_field('hero_title') ?: get_the_title();
$subtitle = wpstarter_get_field('hero_subtitle');
$cta_text = wpstarter_get_field('hero_cta_text') ?: 'Kontakt aufnehmen';
$cta_link = wpstarter_get_field('hero_cta_link') ?: '/contact';
$image_id = wpstarter_get_field('hero_image');
?>
<section class="hero bg-gray-50 py-24 text-center">
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
            <?php echo esc_html($title); ?>
        </h1>
        <?php if ($subtitle) : ?>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                <?php echo esc_html($subtitle); ?>
            </p>
        <?php endif; ?>
        <a href="<?php echo esc_url($cta_link); ?>"
           class="inline-block bg-blue-600 text-white px-8 py-4 rounded-lg font-semibold hover:bg-blue-700 transition">
            <?php echo esc_html($cta_text); ?>
        </a>
        <?php if ($image_id) : ?>
            <div class="mt-12">
                <?php echo wpstarter_image($image_id, 'hero', 'w-full rounded-xl shadow-lg'); ?>
            </div>
        <?php endif; ?>
    </div>
</section>
