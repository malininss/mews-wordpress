<div class="price__description-container">
  <?php
    if ($post_datas = get_post_meta($post->ID, 'post_datas', true)) {
      $post_datas_html = '';
      // echo "<pre>",htmlspecialchars(print_r($post_datas,true)),"</pre>";      
      foreach ($post_datas as $post_datas_arr) {
          // Если есть инфа.
          if (!empty($post_datas_arr['name']) || !empty($post_datas_arr['value'])) {
            $post_datas_html .= "
              <div class='price__description'>
                <div class='price__service'>" . $post_datas_arr['name'] . "</div>
                <div class='price__price'>" . $post_datas_arr['value'] . "</div>
              </div>
            ";
          }
      }

    if (mb_strlen($post_datas_html)) {
        ?><div class="price__wrapper"><?php echo $post_datas_html; ?></div><?php
    }
  }

  ?>
</div>