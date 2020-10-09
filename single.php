<?php
/*
Template Name: single
*/
?>
<?php // カテゴリーごとに振り分け
//if(in_category(2) || post_is_in_descendant_category(2)){ 
if(in_category(6) || post_is_in_descendant_category(6)){ 
    include(TEMPLATEPATH . '/single-service.php'); // Service用テンプレート
  } else if (in_category(12) || post_is_in_descendant_category(12)){ 
  //} else if (in_category(6) || post_is_in_descendant_category(6)){ 
    include(TEMPLATEPATH . '/single-news.php'); // News用テンプレート   
  } else {
    // 指定無し
  }
?>