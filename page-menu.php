<?php get_header()?>

<section class="menuList bg--primary">
      <div class="container">
        <div class="menuList__wrapper">
          <div class="menuList__content">
            <div class="menuList__title">
              <h2>Beef Items</h2>
            </div>
                <?php 
                    $beef = new WP_Query(array (
                    'post_type' => 'menus',
                    'post_per_page' => -1,
                    'meta_key' => "Grouping",
                    'meta_value' => "Beef",
                ))
                ?>
            <div class="menu__food__grid">
                <?php if($beef->have_posts()) : while($beef->have_posts()) : $beef->the_post() ?>
                <div class="menu__food__griditem">
                    <ul>
                        <li><?php the_title()?></li>
                        <li>$<?php echo get_post_meta(get_the_ID(), 'Price', true)?></li>
                    </ul>
                    <p><?php echo get_the_content()?></p>
                </div>
                    <?php endwhile;
                        else:
                        echo "no menus";
                        endif;
                        wp_reset_postdata();
                    ?>
            </div>
            <img src="<?php echo get_post_meta(get_the_ID(), "Banner Beef", true) ?>" alt="" />

            
            <div class="menuList__title">
              <h2>Chicken Items</h2>
            </div>
                <?php 
                    $chicken = new WP_Query(array (
                    'post_type' => 'menus',
                    'post_per_page' => -1,
                    'meta_key' => "Grouping",
                    'meta_value' => "Chicken",
                ))
                ?>
            <div class="menu__food__grid">
                <?php if($chicken->have_posts()) : while($chicken->have_posts()) : $chicken->the_post() ?>
                <div class="menu__food__griditem">
                    <ul>
                        <li><?php the_title()?></li>
                        <li>$<?php echo get_post_meta(get_the_ID(), 'Price', true)?></li>
                    </ul>
                    <p><?php echo get_the_content()?></p>
                </div>
                    <?php endwhile;
                        else:
                        echo "no menus";
                        endif;
                        wp_reset_postdata();
                    ?>
            </div>
            <img src="<?php echo get_post_meta(get_the_ID(), "Banner Chicken", true) ?>" alt="" />

            
            <div class="menuList__title">
              <h2>Beef Items</h2>
            </div>
                <?php 
                    $dessert = new WP_Query(array (
                    'post_type' => 'menus',
                    'post_per_page' => -1,
                    'meta_key' => "Grouping",
                    'meta_value' => "Dessert",
                ))
                ?>
            <div class="menu__food__grid">
                <?php if($dessert->have_posts()) : while($dessert->have_posts()) : $dessert->the_post() ?>
                <div class="menu__food__griditem">
                    <ul>
                        <li><?php the_title()?></li>
                        <li>$<?php echo get_post_meta(get_the_ID(), 'Price', true)?></li>
                    </ul>
                    <p><?php echo get_the_content()?></p>
                </div>
                    <?php endwhile;
                        else:
                        echo "no menus";
                        endif;
                        wp_reset_postdata();
                    ?>
            </div>
            <img src="<?php echo get_post_meta(get_the_ID(), "Banner Dessert", true) ?>" alt="" />

            
          </div>            
        </div>
      </div>
    </section>


<?php get_footer()?>