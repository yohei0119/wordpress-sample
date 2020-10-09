<?php
/*
Template Name: success
*/
?>
<?php get_header(); ?>
      <?php while (have_posts()): the_post(); ?>
      <section id="main-visual">
        <div class="main-visual-image"><img src="/wp-content/uploads/2020/09/dummy.png"></div>
        <div class="main-visual-body">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                <h2 class="page-title"><?php the_title(); // カテゴリー名 ?></h2>
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
              </div>
            </div>
          </div>
        </div>
      </section>      
      <section id="pickup" class="container">
        <div class="row">
          <div class="col-12 col-lg-12 col-md-12 col-sm-12">
            <h3 class="title">Pickup</h3>
          </div>
        </div>
        <div class="row">
          <?php
            $args = array('numberposts' => 8, 'tag' => 'pickup'); // 表示したいタグを指定
            $posts = get_posts( $args );
            foreach ( $posts as $post ) : setup_postdata( $post );
          ?>
          <div class="col-12 col-lg-3 col-md-4 col-sm-12">
            <div class="card">
              <div class="bd-placeholder-img card-img-top">
                <div class="card-image">
                  <?php if(has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('full'); ?> 
                  <?php endif; ?>
                </div>
              </div>
              <div class="card-body">
                <p class="card-title">
                  <span class="fw500"><?php the_title(); // タイトル ?></span>
                  <?php
                    $post_time = get_the_time('U');
                    $days = 7; // NEWを表示させる日数
                    $last = time() - ($days * 24 * 60 * 60);
                    if ($post_time > $last) {
                      echo '<span class="new-icon">NEW</span>';
                    }
                  ?>
                </p>
                <?php if( get_field('description') ): ?>
                <p class="card-text">
                <?php
                // 文字数制限 45文字に設定
                if(mb_strlen(get_field('description'))>45) { 
                  $hoge= mb_substr(get_field('description'), 0, 44);
                  echo $hoge. … ;
                } else {
                  echo get_field('description');
                }
                ?>
                </p>
                <?php endif; ?> 
                <a href="<?php the_permalink(); ?>" class="btn btn-primary rounded-pill">Button</a>
              </div>
            </div>
          </div>
        <?php 
          endforeach; 
          wp_reset_postdata();
        ?>
        </div>
        <div class="row justify-content-center mt10 mb80">
          <div class="col-8 col-lg-6 col-md-6 col-sm-8">
            <a href="/category/service/" class="btn btn-light rounded-pill more-btn">More</a>    
          </div>
        </div>                    
      </section>  
      <?php endwhile; ?>
<?php get_footer(); ?>