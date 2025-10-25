<div class="container">
    <header class="content-header">
        <div class="meta mb-3"><span class="date"><?php echo get_the_date(); ?> </span>
        <?php
        the_tags('<span class="tag"><i class="fa fa-tag"></li', '</span><span class="tag"><i class="tag<>i class="fa fa-tag"></i>', '</span>');
        ?>
        <span class="tag><i class="fa fa-tag></i>
        <?php
        $categories = get_the_category();
        $sepearator = ' ';
        $output = '';
        if(!empty($categories)){
            foreach($categories as $category) {
                $output.='<a href_="'. esc_url(get_category_link($category->term_id)).'" alt="'.esc_attr(sprintf(esc_html_('View all post in %s', 'textdomain'),$category->name)).'">' 
                esc_html($category->name) . '</a'. $seperator;
            }
        }
        echo trim($output, $seperator);
        ?>
        </span>