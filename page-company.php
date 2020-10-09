<?php
/*
Template Name: company
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
      <?php endwhile; ?>

      <section id="company" class="container">
        <div class="row">
          <div class="col-12 col-lg-12 col-md-12 col-sm-12">
            <h3 class="title">Company Profile</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-12 col-md-12 col-sm-12">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <th scope="row" class="align-middle">Company Name</th>
                  <td class="align-middle">Company Name</td>
                </tr>
                <tr>
                  <th scope="row" class="align-middle">Established</th>
                  <td class="align-middle">June 2020</td>
                </tr>
                <tr>
                  <th scope="row" class="align-middle">Capital</th>
                  <td class="align-middle">JPY 99 million</td>
                </tr>
                <tr>
                  <th scope="row" class="align-middle">President</th>
                  <td class="align-middle">Taro Yamada</td>
                </tr>
                <tr>
                  <th scope="row" class="align-middle">Employees</th>
                  <td class="align-middle">100 (as of March 2020)</td>
                </tr> 
                <tr>
                  <th scope="row" class="align-middle">Annual turnover</th>
                  <td class="align-middle">JPY 1 billion (Fiscal Year 2020)</td>
                </tr>    
                <tr>
                  <th scope="row" class="align-middle">Annual turnover</th>
                  <td class="align-middle">
                    <ul>
                      <li>IT systems and services</li>
                      <li>IT systems and services</li>
                      <li>IT systems and services</li>
                      <li>IT systems and services</li>
                      <li>IT systems and services</li>
                    </ul>                  
                  </td>
                </tr>               
                <tr>
                  <th scope="row" class="align-middle">Address</th>
                  <td class="align-middle">8-1 Nishi-Shinjuku 2-chome, Shinjuku-ku, Tokyo 163-8001</td>
                </tr>    
              </tbody>
            </table>    
          </div> 
        </div>          
      </section>

      <section id="map" class="container">
        <div class="row">
          <div class="col-12 col-lg-12 col-md-12 col-sm-12">
            <h3 class="title">Map</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-12 col-md-12 col-sm-12">
            <div class="embed-responsive embed-responsive-21by9">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13164.33912587252!2d139.68918574924643!3d35.68488078197146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cd0d6b1ba1f%3A0x1c32a1f1ecacfdd5!2z5paw5a6_6aeF!5e0!3m2!1sja!2sjp!4v1600849499947!5m2!1sja!2sjp" width="100％" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
        </div>        
      </section>    
<?php get_footer(); ?>