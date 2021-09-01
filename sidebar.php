<?php
/*
Sidebar pages de contenu
 */

?>

<aside id="sidebar" class="widget-area d-none d-md-block col-3 order-1" role="complementary">
    <div id="index-content" class="widget widget_recent_entries">
<!--        <h3 class="widget-title">-->
            <script>
//                var h1 = document.getElementsByTagName("h1");
//                document.write(h1[0].textContent);
            </script>
<!--        </h3>-->
<!--        <ul class="nav flex-column">-->
            <script>
//                var titresElts = document.getElementsByClassName("subtitle"); // Tous les titres h2
//                for (var i = 0; i < titresElts.length; i++) { 
//                    var ancre = titresElts[i].id;
//                    var subtitle = titresElts[i].textContent;
//                    var lien = '<li class="nav-item"><a href="#' + ancre + '" class="nav-link">' + subtitle + '</a></li>';
//                    document.write(lien);
//                } 
            </script>
<!--        </ul>-->
    </div>
    
	<?php dynamic_sidebar( 'sidebar' ); ?>
   
</aside><!-- #secondary -->