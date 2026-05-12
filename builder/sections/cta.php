<?php
$title    = wpstarter_get_field('cta_title') ?: 'Bereit loszulegen?';
$text     = wpstarter_get_field('cta_text');
$btn_text = wpstarter_get_field('cta_button_text') ?: 'Jetzt kontaktieren';
$btn_link = wpstarter_get_field('cta_button_link') ?: '/contact';
?>
<section class="cta bg-blue-600 py-20 text-center text-white">
    <div class="max-w-3xl mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">
            <?php echo esc_html($title); ?>
        </h2>
        <?php if ($text) : ?>
            <p class="text-lg text-blue-100 mb-8">
                <?php echo esc_html($text); ?>
            </p>
        <?php endif; ?>
        <a href="<?php echo esc_url($btn_link); ?>"
           class="inline-block bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold hover:bg-blue-50 transition">
            <?php echo esc_html($btn_text); ?>
        </a>
    </div>
</section>
