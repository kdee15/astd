<!-- C. WORK AREA ++++++++++++++++++++++++++++++++++++++ -->
    
    <!-- C.1. Masthead -->
    <header id="masthead">
    
        <nav class="main-navigation" id="main-navigation">
            <div class="container">            
                <?php print theme('links__system_main_menu', array(
                  'links' => $main_menu,
                  'attributes' => array(
                    'id' => 'main-menu',
                  ),
                  'heading' => array(
                    'text' => t('Main menu'),
                    'level' => 'h2',
                    'class' => array('element-invisible'),
                  ),				  
                )); ?>       
                
                <a href="<?php print $GLOBALS['base_url']."/" ?>signup" class="register"><img src="<?php print $GLOBALS['base_url']."/".path_to_theme() ?>/assets/images/site/register.png" alt="Sign up now as a Military Veteran" /></a>
                
            </div>
                    
        </nav>         
    
        <div class="wrapper">
        
        	<div class="wrapper-gradient">
                
                <!-- C.1.2. Search Region -->
                <div class="mobile-links">
                    <a href="#main-navigation" class="reveal"><i class="icon-reorder"></i></a>
                    <a href="#block-search-form " class="reveal" style="display:none;"><i class="icon-search"></i></a>
                </div>
            
                <!-- C.1.1. Logo -->
                <div class="front-logo">
                    <a href="<?php print $front_page; ?>" rel="home" class="logo">
                        <img src="http://milvets.omnistudio.co.za/sites/all/themes/DMV/assets/images/site/logo-web.png">
                        <span>DMV - The Veteran's Voice</span>
                    </a>
                </div>
            
            </div>

       </div> 
    </header>

    <!-- C.2. Mast -->
    <div class="container mast">
        <section id="mast">
                
                <!-- C.2.1. Page -->
                <section class="page">
                    <div class="wrapper">
                    <!-- C.2.1 Tabs -->
        
                    <?php if ($tabs): ?>
                      <nav class="tabbed navigation">
                        <?php print render($tabs); ?>
                      </nav>
                    <?php endif; ?>
                    <?php print render($title_prefix); ?>
                    <?php if ($title): ?>
                      <h1 class="title" id="page-title">
                        <?php print $title; ?>
                      </h1>
                    <?php endif; ?>
                    <?php print render($title_suffix); ?>
                    
                    <?php print render($page['help']); ?>
                    <?php if ($action_links): ?>
                      <ul class="action-links">
                        <?php print render($action_links); ?>
                      </ul>
                    <?php endif; ?>
                    <?php print render($page['content']); ?>
                    <?php print $feed_icons; ?>
                
                    <section class="section-region page-bottom">
                        <?php print render($page['page_bottom']); ?>
                    </section>
                    </div>
                </section>
                
                <!-- C.2.2. Sub -->
                <section class="sidebar">
                	<div class="inside">
                    	<?php print render($page['sidebar']); ?>
                    </div>
                </section>
                
        </section>
    </div>

    <!-- C.3. Footend -->
    <footer id="footend">
        <div class="container">
            
            <!-- C.3.1. Sponsors -->
            <?php print render($page['footend_one']); ?>
            
            <!-- C.3.2. Follow DMV -->
            <?php print render($page['footend_two']); ?>
            
            <!-- C.3.3. Newsletter Signup -->
            <?php print render($page['footend_three']); ?>
            
        </div>
    </footer>


	<!-- C. END ++++++++++++++++++++++++++++++++++++++ -->
