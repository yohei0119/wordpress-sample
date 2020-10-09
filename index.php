<?php get_header(); ?>
      <section id="main-visual">
        <div class="main-visual-image"><img src="/wp-content/uploads/2020/09/dummy.png"></div>
        <div class="main-visual-body">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                <p class="catchcopy">Catchcopy</p>
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                <p class="btn-area">
                  <a href="/category/service">
                    <button class="btn btn-primary rounded-pill" type="button">Button</button>
                  </a>
                </p>
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
        <div class="row justify-content-center mt10 mb30">
          <div class="col-8 col-lg-6 col-md-6 col-sm-8">
            <a href="/category/service/" class="btn btn-light rounded-pill more-btn">More</a>    
          </div>
        </div>                    
      </section>
      <section id="top-news" class="container">
        <div class="row">
          <div class="col-12 col-lg-12 col-md-12 col-sm-12">
            <h3 class="title">News</h3>
          </div>
        </div> 
        <div class="row">
          <div class="col-12 col-lg-12 col-md-12 col-sm-12">
            <ul>
            <?php
            $arg = array(
              'posts_per_page' => 4,    // 表示件数
              'orderby' => 'date',      // 日付でソート
              'order' => 'DESC',        // DESC 最新から表示、ASC 最古から表示
              'category_name' => 'news' // カテゴリーのスラッグを指定
            );
            $posts = get_posts( $arg );
            if($posts):
              foreach ( $posts as $post ) : setup_postdata( $post );
            ?>  
              <li>
                <a href="<?php the_permalink(); ?>">
                  <span class="date"><?php the_time( 'Y-m-d' ); ?></span>
                  <span class="text"><?php the_title(); ?></span>
                  <?php
                    $post_time = get_the_time('U');
                    $days = 7; // NEWを表示させる日数
                    $last = time() - ($days * 24 * 60 * 60);
                    if ($post_time > $last) {
                      echo '<span class="new-icon">NEW</span>';
                    }
                  ?>
                </a>
              </li>
              <?php endforeach; ?>
            <?php
              endif;
              wp_reset_postdata();
            ?>                                                                     
            </ul>
          </div>
        </div>
        <div class="row justify-content-center mt40">
          <div class="col-8 col-lg-6 col-md-6 col-sm-8">
            <a href="/category/news/" class="btn btn-light rounded-pill more-btn">More</a>    
          </div>
        </div>                         
      </section>            
<?php get_footer(); ?>