        <!-- Collapse button -->
        <a class="menu_principal z-3" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <i class="bi bi-list" style="font-size: 30px;"></i>
        </a>
        
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header" style="color: #342F82;">
                <h5 class="offcanvas-title fw-bold" id="offcanvasExampleLabel" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></h5>
            </div>
            <?php 
                wp_nav_menu( 
                    array( 
                        'theme_location'    => 'menu-home',
                        'menu_id'           => '',
                        'menu_class'        => 'menu',
                        'container'         => 'div',
                        'echo'              => true,
                        'link_before'       => '',
                        'link_after'        => '',
                        'before'            => '<ul data-bs-dismiss="offcanvas" aria-label="Close">',
                        'after'             => '</ul>',
                        'item_spacing'      => 'discard',
                        'walker'            => '',
                    ) 
                ); 
            ?>
        </div>