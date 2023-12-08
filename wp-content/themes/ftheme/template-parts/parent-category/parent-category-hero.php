<?php
if( have_rows('parent_category_hero') ):
    while( have_rows('parent_category_hero') ): the_row();
        $subtitle = get_sub_field('subtitle');
        $description = get_sub_field('description');
        $image = get_sub_field('image');
?>

<section class="wrapper products-hero">
    <div class="container">
        <h1 class="title header wrapper wrapper_size_xs" color=" secondary"><?php the_title(); ?></h1>
        <p class="subtitle" class="heading wrapper wrapper_size_xl"><?= $subtitle; ?></p>
        <div class="description">
            <?= $description; ?>
        </div>

        <?php
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="illustration" />
        <?php endif; ?>

        <svg class="shape" width="948" height="1000" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M819.726 87.9703C861.007 64.5308 915.463 31.6684 948 0V1000C896.565 970.877 848.8 934.576 803.743 898.604C764.061 866.925 719.56 837.594 674.444 811.871C619.522 780.557 559.022 758.379 499.449 734.676C407.553 698.112 315.51 664.578 220.975 633.457C149.306 609.864 70.7445 586.438 29.1781 526.585C5.86721 493.019 -6.79949 456.904 3.76915 417.947C23.6292 344.742 114.755 310.679 188.394 285.992C234.051 270.686 279.216 254.382 325.685 240.947C441.624 207.426 558.468 176.428 674.034 141.848C722.909 127.223 775.866 112.874 819.726 87.9703Z"
                fill="#F6F7F9" />
        </svg>

    </div>
</section>

<?php
    endwhile;
endif;