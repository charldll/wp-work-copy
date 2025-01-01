<!--section with actual portfolio-->
<?php /* Template name: gallery page */ ?>
<?php get_header(); ?>
    <section id="portfolio">
      <div class="section-projects">
        <div class="gallery">
          <?/* the general gallery look is controlled by css style of div */ ?>
          <?/* field gallery is a group, images are subgroups for clarity */?>
          <?php if (have_rows('gallery')): ?>
            <?php while (have_rows('gallery')): the_row() ?>
              <?php echo wp_get_attachment_image (
                (get_sub_field('picture')), 'small')?>
              <?php echo wp_get_attachment_image (
                (get_sub_field('picture2')), 'small')?>
              <?php echo wp_get_attachment_image (
                (get_sub_field('picture3')), 'small')?>
              <?php echo wp_get_attachment_image (
                (get_sub_field('picture4')), 'small')?>
              <?php echo wp_get_attachment_image (
                (get_sub_field('picture5')), 'small')?>
              <?php echo wp_get_attachment_image (
                (get_sub_field('picture6')), 'small')?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </section>
<?php get_footer(); ?>