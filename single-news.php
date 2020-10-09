<?php
/*
Template Name: service
*/
?>
<?php get_header(); ?>
      <?php while (have_posts()): the_post(); ?>
      <section id="main-visual">
        <div class="main-visual-image">
          <?php if(has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('full'); ?> 
          <?php endif; ?>  
        </div>
        <div class="main-visual-body">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                <h2 class="page-title"><?php the_title(); // 記事タイトル ?></h2>
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="single">
        <?php if( get_field('title1') ): ?>
        <div class="container mb80">
          <div class="row">
            <div class="col-12 col-lg-12 col-md-12 col-sm-12">
              <h3 class="title"><?php the_field('title1'); ?></h3>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-6 col-md-6 col-sm-12">
              <p class="image">
              <?php if( get_field('image1') ): ?>
                <img src="<?php the_field('image1'); ?>" />
              <?php endif; ?>
              </p>
            </div>
            <?php if( get_field('text1') ): ?>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12">
              <p><?php the_field('text1'); ?></p>
            </div>   
            <?php endif; ?>         
          </div>
        </div>
        <?php endif; ?>

        <?php if( get_field('title2') ): ?>
        <div class="container mb80">      
          <div class="row">
            <div class="col-12 col-lg-12 col-md-12 col-sm-12">
              <h3 class="title"><?php the_field('title2'); ?></h3>
            </div>
          </div>
          <div class="row">
            <?php if( get_field('text2') ): ?>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 order-2 order-lg-1 order-md-1 order-sm-2">
              <p><?php the_field('text2'); ?></p>
            </div>   
            <?php endif; ?>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 order-1 order-lg-2 order-md-2 order-sm-1">
              <p class="image">
              <?php if( get_field('image2') ): ?>
                <img src="<?php the_field('image2'); ?>" />
              <?php endif; ?>
              </p>
            </div>                     
          </div>   
        </div>
        <?php endif; ?>  

        <?php if( get_field('title3') ): ?>
        <div class="container mb80">
          <div class="row">
            <div class="col-12 col-lg-12 col-md-12 col-sm-12">
              <h3 class="title"><?php the_field('title3'); ?></h3>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-6 col-md-6 col-sm-12">
              <p class="image">
              <?php if( get_field('image3') ): ?>
                <img src="<?php the_field('image3'); ?>" />
              <?php endif; ?>
              </p>
            </div>
            <?php if( get_field('text3') ): ?>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12">
              <p><?php the_field('text3'); ?></p>
            </div>   
            <?php endif; ?>         
          </div>
        </div>
        <?php endif; ?>               
      </section>
      <?php endwhile; ?>

<?php // 画像の設定 ?>
<?php /* if( get_field('image') ): ?>
<img src="<?php the_field('image'); ?>" />
<?php endif; */ ?>
      
<?php get_footer(); ?>      