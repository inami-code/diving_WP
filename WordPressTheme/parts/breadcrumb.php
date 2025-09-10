<div class="breadcrumb <?php if (is_404()) echo ' breadcrumb--404'; ?>">
  <div class="breadcrumb__inner inner">
    <p class="breadcrumb__text <?php if (is_404()) echo ' breadcrumb__text--404'; ?>">
      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </p>
  </div>
</div>