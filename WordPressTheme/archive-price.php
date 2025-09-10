<?php get_header(); ?>
<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv--price">
  <h1 class="sub-mv__title">Price</h1>
</div>
<!-- パンくずリスト -->
<?php get_template_part('parts/breadcrumb') ?>

<div class="sub-price top-sub-price">
  <div class="sub-price__inner inner">
    <div class="sub-price__table price-table">
      <div class="price-table__items">

        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>

            <?php
            // フィールドをすべて取得
            $courses = [
              ['course' => get_field('course'), 'price' => get_field('price')],
              ['course' => get_field('course2'), 'price' => get_field('price2')],
              ['course' => get_field('course3'), 'price' => get_field('price3')],
              ['course' => get_field('course4'), 'price' => get_field('price4')],
              ['course' => get_field('course5'), 'price' => get_field('price5')],
            ];

            // 表示できる項目があるか確認
            $has_content = false;
            foreach ($courses as $item) {
              if ($item['course'] && $item['price']) {
                $has_content = true;
                break;
              }
            }
            ?>

            <?php if ($has_content) : ?>
              <div class="price-table__item">
                <div class="price-table__title">
                  <h2 class="price-table__text"><?php the_title(); ?></h2>
                  <div class="price-table__icon">
                    <svg>
                      <use href="#tab_icon01"></use>
                    </svg>
                  </div>
                </div>
                <div class="price-table__content">
                  <?php foreach ($courses as $item) : ?>
                    <?php if ($item['course'] && $item['price']) : ?>
                      <dl class="price-table__row">
                        <dt class="price-table__cource"><?php echo esc_html($item['course']); ?></dt>
                        <dd class="price-table__price">¥<?php echo esc_html($item['price']); ?></dd>
                      </dl>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
              </div>
            <?php endif; ?>

          <?php endwhile; ?>
        <?php endif; ?>


      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>