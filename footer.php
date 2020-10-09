    </article>
  </main>

  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
          <p class="copyright">Copyright © WordPress Sample. All Rights Reserved.</p>
          <ul>
            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

</div><!-- /#js-scrollContents -->

<div id="page-top"><i class="fal fa-arrow-to-top"></i></div>

<?php if (is_page('Contact')): ?>
  <script type="text/javascript">
    document.addEventListener('wpcf7mailsent', function(event){
      location = 'https://wp-sample.raindrop.jp/success/';
    }, false );
  </script>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>