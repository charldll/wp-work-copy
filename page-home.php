<?php /* Template name: main page */ ?>
<?php get_header(); ?>
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
      <!-- section with general info about us -->
      <!-- welcome text area -->
      <h1 id = "home"> <?php get_field('hero_text') ?> </h1>
      <section id = "team">
        <div class = "section-aboutus">
          <div class = "about-card">
            <?php echo wp_get_attachment_image (get_field ('face_pic_1'), 'thumbnail')?>
              <div class = "textbox">
                <h2><?php echo get_field('header_textbox_1') ?></h2>
                <?php echo get_field('textbox_1') ?>
              </div>
          </div>
          <!-- if the header 2 has text, add more info -->
          <?php if(!empty(get_field('header_textbox_2'))) { ?>
            <div class = "about-card flex-reverse photo-to-right">
                <?php echo wp_get_attachment_image (get_field('face_pic_2'),'thumbnail')?>
                <div class = 'textbox'>
                  <h2><?php echo wp_kses_post (get_field('header_textbox_2') )?></h2>
                  <?php echo get_field('textbox_2') ?>
                </div>
            </div>
          <?php } ?>
          <!-- if header 3 has text, add more info -->
          <?php if(!empty(get_field('header_textbox_3'))) { ?>
            <div class = "about-card">
              <?php echo wp_get_attachment_image (get_field('face_pic_3'),'thumbnail')?>
                <div class = 'textbox'>
                  <h2><?php echo get_field('header_textbox_3') ?></h2>
                  <?php echo get_field ('textbox_3') ?>
                </div>
            </div>
          <?php } ?>
        </div>
      </section>
  <?php endwhile; ?>

  <!-- pages with posts -->

	<?php the_posts_pagination( array(
		'prev_text'          => __( '<' ),
		'next_text'          => __( '>' ),
	) );
	?>
	<?php else : get_template_part( 'content', 'none' ); ?>
<?php endif; ?>
<?php get_footer(); ?>