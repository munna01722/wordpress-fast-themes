<?php
/* 
* This template for displaying the header
*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes( ); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' )?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head( ); ?>
</head>
<body <?php body_class( );?>>
<div id="header_area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
             <a href=""><img src="<?php echo get_theme_mod('ft_logo') ?>" alt=""></a>
            </div>
            <div class="col-md-9" id="header-manu">
                <nav>
                    <ul class="menuItems">
                    <li><a href='#' data-item='Home'>Home</a></li>
                    <li><a href='#' data-item='About'>About</a></li>
                    <li><a href='#' data-item='Projects'>Projects</a></li>
                    <li><a href='#' data-item='Blog'>Blog</a></li>
                    <li><a href='#' data-item='Contact'>Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
    
<?php wp_footer( );?>
</body>
</html>