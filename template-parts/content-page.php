
<artical>
    <?php the_title();?>  
    <?php the_content();?>  

    
    <div class="content-entry">
    <?php wp_link_pages(array(
        'before' => '<div class="page-links">'. __('pages:','consulttheme'),
        'after' => '</div>'
));?>
    </div>
</artical>
