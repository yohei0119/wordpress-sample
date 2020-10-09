<?php
/*
Template Name: contact
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
      <?php //the_content(); //contact formを表示させてdomを取得する際に使用 ?>
      <section id="contact" class="container">
        <div class="row">
          <div class="col-12 col-lg-12 col-md-12 col-sm-12">
            <h3 class="title">Contact Form</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-12 col-md-12 col-sm-12">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
          </div>
        </div>
        <div role="form" class="wpcf7" id="wpcf7-f14-p12-o1" lang="ja" dir="ltr">
          <form action="/contact/#wpcf7-f14-p12-o1" method="post" id="contact-form" class="wpcf7-form init" novalidate="novalidate">
            <div class="dn">
              <input type="hidden" name="_wpcf7" value="14">
              <input type="hidden" name="_wpcf7_version" value="5.2.2">
              <input type="hidden" name="_wpcf7_locale" value="ja">
              <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f14-p12-o1">
              <input type="hidden" name="_wpcf7_container_post" value="12">
              <input type="hidden" name="_wpcf7_posted_data_hash" value="">
            </div>
            <div class="row mb80">
              <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th scope="row" class="align-middle">
                        <label for="name">Name&nbsp;(required)</label>
                      </th>
                      <td class="align-middle">
                        <input type="text" name="contactName" size="40" aria-required="true" aria-invalid="false" placeholder="Your Name">
                      </td>                      
                    </tr>
                    <tr>
                      <th scope="row" class="align-middle">
                        <label for="email">Email&nbsp;(required)</label>
                      </th>
                      <td class="align-middle">
                        <input type="email" name="contactEmail" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Your Email">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row" class="align-middle">
                        <label for="subject">Subject</label>
                      </th>
                      <td class="align-middle">
                        <input type="text" name="contactSubject" size="40" aria-invalid="false" placeholder="Subject">
                      </td>
                    </tr>
                    <tr>
                      <th scope="row" class="align-middle">
                        <label for="textarea">Message</label>
                      </th>
                      <td class="align-middle">
                        <textarea name="contactMessage" cols="40" rows="10" aria-invalid="false"></textarea>
                      </td>
                    </tr>                                                                                                                  
                  </tbody>
                </table>
              </div>               
            </div>
            <div class="row">
              <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                <h3 class="title">Privacy Policy</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                <div class="privacy">
                  <p class="privacy-title">Act on the Protection of Personal Information</p>
                  <p>Act No. 57 of May 30, 2003</p>
                  <p>Chapter I General Provisions</p>
                  <p>Article 1</p>
                  <p>The purpose of this Act is to protect the rights and interests of individuals while taking consideration of the usefulness of personal information, in view of a remarkable increase in the utilization of personal information due to development of the advanced information and communications society, by clarifying the responsibilities of the State and local governments, etc. with laying down basic principle, establishment of a basic policy by the Government and the matters to serve as a basis for other measures on the protection of personal information, and by prescribing the duties to be observed by entities handling personal information, etc., regarding the proper handling of personal information.</p>
                  <p>(Definitions)</p>
                  <p>Article 2</p>
                  <p>(1)　The term "personal information" as used in this Act shall mean information about a living individual which can identify the specific individual by name, date of birth or other description contained in such information (including such information as will allow easy reference to other information and will thereby enable the identification of the specific individual).</p>
                  <p>(2)　The term "a personal information database, etc." as used in this Act shall mean an assembly of information including personal information as set </p>
                  <p>　(i)　an assembly of information systematically arranged in such a way that specific personal information can be retrieved by a computer; or</p>
                  <p>　(ii)　in addition to what is listed in the preceding item, an assembly of information designated by a Cabinet Order as being systematically arranged in such a way that specific personal information can be easily retrieved.</p>
                  <p>(3)　The term "a business operator handling personal information" as used in this Act shall mean a business operator using a personal information database, etc. for its business; however, the following entities shall be excluded;</p>
                  <p> (i)　The State organs</p>
                  <p> (ii)　Local governments</p>
                  <p> (iii)　Incorporated administrative agencies, etc. (which means independent administrative agencies as provided in paragraph (1) of Article 2 of the Act on the Protection of Personal Information Held by Incorporated Administrative Agencies, etc. (Act No. 59 of 2003); the same shall apply hereinafter)</p>
                  <p> (iv)　Local independent administrative institutions (which means local incorporated administrative agencies as provided in paragraph (1) of Article 2 of the Local Incorporated Administrative Agencies Law (Act No. 118 of 2003); the same shall apply hereinafter)</p>
                  <p> (v)　Entities specified by a Cabinet Order as having a little likelihood to harm the rights and interests of individuals considering the volume and the manner of utilization of personal information they handle.</p>
                  <p>(4)　The term "personal data" as used in this Act shall mean personal information constituting a personal information database, etc.</p>
                  <p>(5)　The term "retained personal data" as used in this Act shall mean such personal data over which a business operator handling personal information has the authority to disclose, to correct, add or delete the content, to discontinue its utilization, to erase, and to discontinue its provision to a third party, excluding the data which is specified by a Cabinet Order as harming public or other interests if its presence or absence is known and the data which will be erased within a period of no longer than one year that is specified by a Cabinet Order.</p>
                  <p>(6)　The term "person" as to personal information as used in this Act shall mean a specific individual identified by personal information.</p>
                  <p>(Basic Principle)</p>
                  <p>Article 3</p>
                  <p>n view of the fact that personal information should be handled cautiously under the philosophy of respecting the personalities of individuals, proper handling of personal information shall be promoted.</p>
                  <p>Chapter II Responsibilities of the State and Local governments, etc.</p>
                </div>
              </div>  
            </div>
            <div class="row justify-content-center">
              <div class="col-12 col-lg-4 col-md-4 col-sm-12"> 
                <button type="submit" class="btn btn-primary rounded-pill wpcf7-form-control wpcf7-submit">Submit</button>   
              </div>
              <div class="col-12 col-lg-4 col-md-4 col-sm-12"> 
                <button type="button" class="btn btn-outline-primary rounded-pill js-clearBtn">Clear</button>   
              </div>
            </div>
          </form>
        </div> 
      </section>
      <?php endwhile; ?>
<?php get_footer(); ?>