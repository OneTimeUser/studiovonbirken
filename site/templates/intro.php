<?php
  ini_set('display_errors', 'On');
  error_reporting(E_ALL | E_STRICT);
?>

<?php 
snippet('header-intro');
}

?> 


<div id="container" class="btcf">
  <div id="main" role="main">
    <div id="text-content">
        <div id="div3" class="targetDiv">
          <div class="col1"><p class="call-action">[contact]</p><p style="padding-bottom:15px;">katia kuethe</p><p>+ [1] 917.476 60 52</p><p><a href="mailto:katia@studiovonbirken.com">katia@studiovonbirken.com</a></p></div>
        </div>   
    
      </div>
       
    <?php

        $projects_intro = $pages->visible()
                                                ->findByUID('intro')
                                                ->children()
                                                ->invisible()
                                                ->shuffle()
                                                ->limit(9);
  
        snippet('intro-' . rand(1, 2), array($projects_intro));

    ?>

  </div>
</div> 
<?php snippet('footer') ?>