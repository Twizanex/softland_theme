<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$user = elgg_get_page_owner_entity();
$site = elgg_get_site_entity();
$site_url = elgg_get_site_url();
?>
  <div class="col-md-4 sidebar">
            <div class="sidebar-box">
              <form action="<?php echo $site_url?>search" class="search-form" method="get">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" name="q"  class="form-control" placeholder="<?php echo elgg_echo('softland:search'); ?>">
                      <input type="hidden" name="search_type" value="all">
                </div>
              </form>
            </div>
            <div class="sidebar-box">
              <div class="categories">
                <h3>Categories</h3>
                <?php
                $site_categories = $site->categories;
                
                if($site_categories){
                    
                    foreach ($site_categories as $s) {
                        ?>
                 <li>
                     <a href="<?php echo $site_url;?>categories/list?category=<?php echo str_replace(' ', '+', $s);?>">
                     <?php echo $s;?>
                     </a>
                 </li>
                <?php
                    }
                }
                
                
                ?>
                 
              </div>
            </div>
            <div class="sidebar-box">
                 <center>
              <img src="<?php echo $user->getIconURL('medium');?>" alt="Image placeholder" class="img-fluid mb-4">
                 
              <h3>About The Author</h3>
              <p>
                  
                  <div href="#" class="btn btn-primary btn-sm">
                      <?php
                  echo $user->name;
                  ?>
                  </div>
                      </center>
              </p>
              <p>
                  <?php
                  echo $user->description;
                  ?>
              </p>
              
            </div>

            <div class="sidebar-box">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>
        