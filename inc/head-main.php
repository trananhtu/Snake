<div class="main-head">
    <div class="wrapper">

        <h1 class="page-title">
            <?php
                if(is_home()) :
                    printf(__('Blogs', 'tuta'));
                elseif(is_tag()) :
                    printf(__('Posts Tagged: %1$s', 'tuta'), single_tag_title('', false));
                elseif(is_category()) :
                    printf(__('Posts Categories: %1$s', 'tuta'), single_cat_title('', false));
                elseif(is_author()) :
                    printf(__('Author: %1$s', 'tuta'), get_the_author());
                elseif(is_search()) :
                    printf(__('Search', 'tuta'));
                elseif(is_single()) :
                    printf(__('Blogs', 'tuta'));
                elseif(is_day()) :
                    printf(__('Dayly Archives: %1$s', 'tuta'), get_the_time('l, F j, Y'));
                elseif(is_month()) :
                    printf(__('Monthly Archives: %1$s', 'tuta'), get_the_time('F Y'));
                elseif(is_year()) :
                    printf(__('Yearly Archives: %1$s', 'tuta'), get_the_time('Y'));
                endif;

                if(is_tag() || is_category()) :
                    echo term_description();
                endif;
            ?>
        </h1>

        <?php tuta_breadcrumbs(); ?>

    </div>
</div> <!-- .main-head -->

<div class="tool-box">
    <div class="wrapper">
        <a href="#" class="tuta-button-default button-3d button-ico button-sm btn-white-hover pull-left">
            <i class="fa fa-print"></i> Print This Page
        </a>
        <a href="#" class="tuta-button-default button-3d button-ico button-sm btn-white-hover pull-left">
            <i class="fa fa-star"></i> Add To Favorites
        </a>
        <a href="#" class="tuta-button-default button-3d button-ico button-sm btn-white-hover pull-left">
            <i class="fa fa-share-alt"></i> Share Vehicle
        </a>
        <a href="#" class="tuta-button-default button-3d button-ico button-sm btn-white-hover pull-right">
            Back to Previous Page
        </a>
    </div>
</div> <!-- .tool-box -->