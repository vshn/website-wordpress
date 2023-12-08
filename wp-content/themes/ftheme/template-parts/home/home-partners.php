<?php
if( have_rows('partners') ):
    while( have_rows('partners') ): the_row();
        $item_button_text = get_sub_field('item_button_text');
        if( have_rows('items') ):
            $counter = 1;
?>
            <section class="wrapper partners partners-slider">
                <div class="swiper-wrapper">
                    <?php
                    while( have_rows('items') ): the_row();
                        $photo = get_sub_field('photo');
                        $name = get_sub_field('name');
                        $position = get_sub_field('position');
                        $text = get_sub_field('text');
                        $button_link = get_sub_field('button_link');
                    ?>
                        <div class="swiper-slide">
                            <div class="container inner">
                                <div class="details">
                                    <div class="photo-wrapper">
                                        <div class="photo">
                                            <img src="<?php echo $photo['url']; ?>" alt="">
                                        </div>
                                        <span class="rectangle rectangle-1" aria-hidden ></span>
                                        <span class="rectangle rectangle-2" aria-hidden ></span>
                                        <span class="rectangle rectangle-3" aria-hidden ></span>
                                    </div>

                                    <div class="info">
                                        <h3 class="name" class="heading wrapper wrapper_size_lg"><?= $name; ?></h3>
                                        <span class="position"><?= $position; ?></span>
                                        <!-- <div class="sm-hidden" > -->
                                            <div class="tabs-wrapper sm-hidden">
                                                <button class="tab active">
                                                    <div class="progress-circle wrapper animate">
                                                        <svg class="circle" viewBox="0 0 58 58">
                                                            <circle fill-opacity="0" stroke-width="5" stroke-dashoffset="95.68259209647496"
                                                                stroke-dasharray="166.50441064025904" cx="29" cy="29" r="26.5"></circle>
                                                        </svg>
                                                        <div class="inner"><?php echo $counter; ?> </div>
                                                    </div>
                                                </button>
                                                <button class="tab"><span class="bullet"></span></button>
                                                <button class="tab"><span class="bullet"></span></button>
                                                <button class="tab"><span class="bullet"></span></button>
                                                <button class="tab"><span class="bullet"></span></button>
                                                <button class="tab"><span class="bullet"></span></button>
                                            </div>
                                        <!-- </div> -->
                                    </div>
                                </div>

                                <div class="content">
                                    <div class="quote-icon" aria-hidden>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 40"><defs/><path d="M16.317 18.7059c1.9425.8627 3.4577 2.1568 4.5455 3.8823 1.0878 1.7255 1.6317 3.7647 1.6317 6.1177 0 3.3725-1.049 6.1176-3.1469 8.2353C17.2494 38.9804 14.5688 40 11.3054 40c-3.26344 0-5.98295-1.0588-8.15855-3.1765C1.04895 34.7059 0 32 0 28.7059 0 27.1373.19425 25.5686.58275 24c.388501-1.5686 1.2432-3.9216 2.5641-7.0588L9.90676 0H21.4452L16.317 18.7059zm27.5058 0c1.9426.8627 3.4577 2.1568 4.5455 3.8823C49.4561 24.3137 50 26.3529 50 28.7059c0 3.3725-1.049 6.1176-3.1469 8.2353C44.7552 38.9804 42.0746 40 38.8112 40s-5.9829-1.0588-8.1585-3.1765c-2.0979-2.1176-3.1469-4.8235-3.1469-8.1176 0-1.5686.1943-3.1373.5828-4.7059.3885-1.5686 1.2432-3.9216 2.5641-7.0588L37.4126 0h11.5385l-5.1283 18.7059z"/></svg>
                                    </div>
                                    <div class="text heading wrapper wrapper_size_xl">
                                        <p><?= $text; ?></p>
                                    </div>
                                    <a href="<?php echo get_site_url() . $button_link['url']; ?>" class="button wrapper wrapper_size_md"><?= $item_button_text; ?></a>
                                </div>

                                <div class="tabs-wrapper sm-visible">
                                    <h1 class="tab">
                                        <div class="tab-progress-circle active">
                                            <?php echo $counter; ?>
                                        </div>
                                        <span class="bullet"> </span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    <?php
                        $counter++;
                    endwhile; ?>
                </div>
            </section>
<?php
        endif;
    endwhile;
endif;
