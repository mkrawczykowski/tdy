    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col logo-menu">


            <a class="logo" href="<?php echo site_url(); ?>">
              <picture class="logo__picture">
                <source type="image/webp"
                  srcset=
                  "
                    <?php echo get_stylesheet_directory_uri(); ?>/public/teddy-logo.webp,
                    <?php echo get_stylesheet_directory_uri(); ?>/public/teddy-logo@2x.webp 2x
                  "
                >
                <img 
                  srcset=
                  "
                    <?php echo get_stylesheet_directory_uri(); ?>/public/teddy-logo.png,
                    <?php echo get_stylesheet_directory_uri(); ?>/public/teddy-logo@2x.png 2x
                  "
                  src="<?php echo get_stylesheet_directory_uri(); ?>/public/teddy-logo.png"
                  alt="Klub bokserski Teddy - logo"
                  decoding="async"
                >
              </picture>
              <p class="logo__text">Klub bokserski Teddy</p>
            </a>


            <?php
              wp_nav_menu( array(
                'theme_location' => 'header-menu',
                'container'      => 'nav',
                'container_class'=> 'main-nav',
                'menu_class'     => 'main-nav__nav',
                'container_id'   => 'js-main-nav'
              ) );
            ?>


            <a class="go-up" href="#start">
              <svg xmlns="http://www.w3.org/2000/svg" width="51.959" height="51.956" viewBox="0 0 51.959 51.956">
                <g id="Up" transform="translate(-6.043 -6.044)">
                  <path id="Path_19" data-name="Path 19" d="M32,44a2,2,0,0,1-2-2V22a2,2,0,0,1,4,0V42A2,2,0,0,1,32,44Z" fill="#c12525"/>
                  <path id="Path_20" data-name="Path 20" d="M23,33a2,2,0,0,1-1.414-3.414l9-9a2,2,0,1,1,2.828,2.828l-9,9A1.994,1.994,0,0,1,23,33Z" fill="#c12525"/>
                  <path id="Path_21" data-name="Path 21" d="M41,33a1.994,1.994,0,0,1-1.414-.586l-9-9a2,2,0,1,1,2.828-2.828l9,9A2,2,0,0,1,41,33Z" fill="#c12525"/>
                  <path id="Path_22" data-name="Path 22" d="M32,58A25.978,25.978,0,1,1,56.549,40.584a2,2,0,1,1-3.776-1.32,22.023,22.023,0,1,0-3.4,6.24,2,2,0,1,1,3.156,2.457A25.852,25.852,0,0,1,32,58Z" fill="#c12525"/>
                </g>
              </svg>
              <p class="go-up__paragraph">Przewiń do góry</p>
            </a>


          </div>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>

  </body>
</html>