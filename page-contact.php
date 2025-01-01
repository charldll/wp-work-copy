<?php /* Template name: contact page*/ ?>
<?php get_header(); ?>

<section id = "contact">
  <div class = "section-contacts">
    <?php echo do_shortcode('[contact-form-7 id="e07c03a" title="Kontakt"]'); ?>
  </div>
</section>

<section id = "bookly">
  <div class = "section-contacts">
    <?php echo do_shortcode('[bookly-form]'); ?>
  </div>
</section>

<?php get_footer(); ?>