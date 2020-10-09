<?php
/*
Template Name: news
*/
?>
<?php get_header(); ?>
      <section id="main-visual">
        <div class="main-visual-image"><img src="/wp-content/uploads/2020/09/dummy.png"></div>
        <div class="main-visual-body">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                <h2 class="page-title"><?php single_cat_title(); // カテゴリー名 ?></h2>
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
              </div>
            </div>
          </div>
        </div>
      </section>      

      <section id="news" class="container">
      <?php
        $categories = get_categories('parent=12'); // newsのカテゴリーID
        //$categories = get_categories('parent=6'); // newsのカテゴリーID
        foreach($categories as $category) :
      ?>
        <div class="row">
          <div class="col-12 col-lg-12 col-md-12 col-sm-12">
            <h3 class="title"><?php echo $category->cat_name; // 子カテゴリー名 ?></h3>
          </div>
        </div>
        <ul class="row mb50">
          <?php
            query_posts('cat='.$category->cat_ID);
            if (have_posts()) : while (have_posts()) : the_post();
          ?>
          <li class="col-12 col-lg-6 col-md-12 col-sm-12">              
            <div class="media">
              <div class="media-image">
                <?php if(has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full'); ?> 
                <?php endif; ?>      
              </div>
              <div class="media-body">
                <p><?php the_time( 'Y-m-d' ); ?></p>
                <p>
                  <span class="fw500"><?php the_title(); ?></span>
                  <?php
                    $post_time = get_the_time('U');
                    $days = 7; // NEWを表示させる日数
                    $last = time() - ($days * 24 * 60 * 60);
                    if ($post_time > $last) {
                      echo '<span class="new-icon">NEW</span>';
                    }
                  ?>                  
                </p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary rounded-pill">Button</a>
              </div>
            </div>
          </li>
          <?php endwhile; endif; ?>
        </ul>
      <?php endforeach; ?>
      </section>      
<?php get_footer(); ?>