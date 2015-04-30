<link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
<?php
?>
  <?php print render($page['header']); ?>

  <div id="customwrapper">
    <div id="container" class="clearfix">

      <div id="header">
        <div id="logo-floater">
        <?php if ($logo || $site_title): ?>
          <?php if ($title): ?>
            <div id="branding"><strong><a href="<?php print $front_page ?>">
            <?php if ($logo): ?>
              <img src="<?php print $logo ?>"  id="logo" />
            <?php endif; ?>
            <?php print $site_html ?>
            </a></strong></div>
          <?php else: /* Use h1 when the content title is empty */ ?>
            <h1 id="branding"><a href="<?php print $front_page ?>">
            <?php if ($logo): ?>
              <img src="<?php print $logo ?>"  id="logo" />
            <?php endif; ?>
            </a>
            </h1>
        <?php endif; ?>
        <?php endif; ?>
        </div>

       
      </div> <!-- /#header -->

     
     

      <div id="center">
             
    	<div class="border">  </div>    		

       <div id="menu">      		
       	 <?php print render($page['menu']); ?>
		</div>
		
      <div id="slideshow"> 
      		<?php print render($page['slideshow']); ?>
      </div>
    
    	<div class="border">  </div>    		

      
      <div id="home-content">
            <?php print render($page['homecontent']); ?>
      </div>
      
      </div>
      
      <div id="footer">
            <?php print render($page['footer']); ?>
      </div>

    </div> <!-- /#container -->
  </div> <!-- /#wrapper -->
