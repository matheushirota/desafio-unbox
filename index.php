<?php
    get_header();
?>
<section class="search-form">
    <h1>Realize a sua busca abaixo:</h1>
    <?php
        get_search_form();
    ?>
    <?php
        if($_GET['first_term'] && $_GET['search_options'] && $_GET['second_term']){
            ?>
                <div class="search-results">
                    <h2>Resultados da busca:</h2>
                    <ul>
                    <?php
                        global $wpdb;

                        if($_GET['search_options'] == 'E'){
                            $results = $wpdb->get_results("SELECT * FROM wp9p_posts WHERE (post_title LIKE '%".$_GET["first_term"]."%' OR post_content LIKE '%".$_GET["first_term"]."%') AND (post_title LIKE '%".$_GET["second_term"]."%' OR post_content LIKE '%".$_GET["second_term"]."%') AND post_status = 'publish' AND post_type = 'post'");
                        }else{
                            $results = $wpdb->get_results("SELECT * FROM wp9p_posts WHERE ((post_title LIKE '%".$_GET["first_term"]."%' OR post_content LIKE '%".$_GET["first_term"]."%') OR (post_title LIKE '%".$_GET["second_term"]."%' OR post_content LIKE '%".$_GET["second_term"]."%')) AND post_status = 'publish' AND post_type = 'post'");
                        }
                        foreach($results as $resultado){
                            ?>
                                <li><b>Título:</b> <?=$resultado->post_title;?><b>Conteúdo:</b> <?=$resultado->post_content;?></li>       
                            <?php
                        }
                    ?>
                    </ul>
                </div>
            <?php
        }
    ?>
</section>
<?php
    get_footer();
?>