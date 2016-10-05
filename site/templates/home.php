<?php
  ini_set('display_errors', 'On');
  error_reporting(E_ALL | E_STRICT);
?>

<?php snippet('header'); ?>

<!-- $host =  "{$_SERVER['HTTP_HOST']}/svb/";
$uri = "{$_SERVER['REQUEST_URI']}";
if (strpos($uri,'svb') !== false ){
//  // snippet('header-intro'); } else {}

$trimmed = str_replace('/svb/', '', $uri);

    if (strlen($trimmed) === 0){

       snippet('header-intro');


     } else { 


  

    }
// 
 }

 
?>  -->
 
<!-- <script>
    console.log(<? echo json_encode($trimmed); ?>);
    console.log(<? echo json_encode(strlen($trimmed)); ?>);
    console.log(<? echo json_encode($ishome); ?>);
</script> --> 




<div id="container" class="btcf">
  <div id="main" role="main">
    <div id="text-content">
        <div id="div1" class="targetDiv"><p class="call-action">[about]</p><p>Studio von Birken is an <a href="<?php echo url() ?>tag:Awards+%26+Publications">award winning</a> New York-based, multidisciplinary creative studio steeped in the worlds of <a href="<?php echo url() ?>tag:Advertising">advertising</a>, <a href="<?php echo url() ?>tag:Branding">branding</a>, <a href="<?php echo url() ?>tag:Editorial">editorial</a> & <a href="<?php echo url() ?>tag:Packaging">packaging</a>.  Founded in 2002 in New York City and led by owner and creative director Katia Kuethe, Studio von Birken specializes in fashion, beauty and their neighboring disciplines.  Katia believes in high-end simplicity, clear strategy and meticulous execution. With a well-trained eye and over 15 years of experience, Katia is able to predict culturally relevant moments to craft impactful new positions for clients. She has a unique ability to blend the cool with the classic, creating something that is timeless yet fresh.  Her love of <a href="<?php echo url() ?>tag:Type">type</a> often inspires her to create custom work.   Her elevated approach has been successfully applied to brands such as <a href="<?php echo url() ?>tag:Uniqlopaper">Uniqlo</a>, <a href="<?php echo url() ?>tag:J.+Crew">J.Crew</a>, <a href="<?php echo url() ?>tag:Kate+Spade+Live+Colorfully">Kate Spade</a> & <a href="<?php echo url() ?>tag:Estée+Lauder">Estee Lauder</a>.  Most recently, Katia consulted for <a href="<?php echo url() ?>tag:Abercrombie+%26+Fitch">Abercrombie & Fitch</a> to help reposition the brand and express its heritage point of view.  On the editorial side, Katia and has worked on a range of titles, including <a href="<?php echo url() ?>tag:Teen+Vogue">teen vogue</a>, <a href="<?php echo url() ?>tag:Arkitip">Arkitip</a> and the self-published indie magazine <a href="<?php echo url() ?>tag:Editor+%26+Art+Director+-+The+Glossy+Zine">The Glossy Zine</a>.  She has collaborated with Japanese brands <a href="<?php echo url() ?>tag:Beams">Beams</a> & <a href="<?php echo url() ?>tag:Worldtypographers">Uniqlo</a> on T-shirt editions and Studio von Birken produces its own set of <a href="http://shop.studiovonbirken.com">limited editions</a> annually.  She lives & works in Chelsea, New York with her son Paz.</p>
        </div>
        <div id="div3" class="targetDiv">
          <div class="col1"><p class="call-action">[contact]</p><p style="padding-bottom:15px;">katia kuethe</p><p>+ [1] 917.476 60 52</p><p><a href="mailto:katia@studiovonbirken.com">katia@studiovonbirken.com</a></p></div>
        </div>   
    
      </div>
       
    <?php

      if(param('tag')) {
        $projects = array();
        for ($i = 1; $i <= 4; $i++) {
          $filteredProjects = $pages
                        ->children()
                        ->visible()
                        ->filterBy('caption_' . $i, urldecode(param('tag')), ',')
                        ->sortBy('modified','desc');


          if ($filteredProjects != '') {
            foreach($filteredProjects as $project) {
              array_push($projects, $project);
            }
          };
        }

        snippet('layout-default', array('projects' => array_unique($projects)));

          } else {
            // One project from each subfolder
            // Product is the only one that is landscape or portrait
            // 5 landscape (adv, packaging, type, video, product)
            // 3 portrait (editorial, 3D, random/product)

            $projects_product = $pages->visible()
                                                ->findByUID('product')
                                                ->children()
                                                ->visible()
                                                // ->filterBy('tier', '1')
                                                ->filterBy('shop', 'true')
                                                ->shuffle()
                                                ->limit(1);


            $projects_landscape_advertising = $pages->visible()
                                                    ->findByUID('advertising')
                                                    ->children()
                                                    ->visible()
                                                    // ->filterBy('tier', '1')
                                                    ->filterBy('orientation', 'landscape')
                                                    ->shuffle()
                                                    ->limit(1);

            $projects_landscape_packaging = $pages->visible()
                                                  ->findByUID('packaging')
                                                  ->children()
                                                  ->visible()
                                                  // ->filterBy('tier', '1')
                                                  ->filterBy('orientation', 'landscape')
                                                  ->shuffle()
                                                  ->limit(1);

            $projects_landscape_type = $pages->visible()
                                             ->findByUID('type')
                                             ->children()
                                             ->visible()
                                             // ->filterBy('tier', '1')
                                             ->filterBy('orientation', 'landscape')
                                             ->shuffle()
                                             ->limit(1);

            $projects_landscape_video = $pages->visible()
                                              ->findByUID('video')
                                              ->children()
                                              ->visible()
                                              // ->filterBy('tier', '1')
                                              ->filterBy('orientation', 'landscape')
                                              ->shuffle()
                                              ->limit(1);

            $projects_portrait_editorial = $pages->visible()
                                                 ->findByUID('editorial')
                                                 ->children()
                                                 ->visible()
                                                 // ->filterBy('tier', '1')
                                                 ->filterBy('orientation', 'portrait')
                                                 ->shuffle()
                                                 ->limit(1);

            $projects_portrait_3D = $pages->visible()
                                          ->findByUID('3d')
                                          ->children()
                                          ->visible()
                                          // ->filterBy('tier', '1')
                                          ->filterBy('orientation', 'portrait')
                                          ->shuffle()
                                          ->limit(1);

            if ($projects_product->first()->orientation() == 'landscape') {
                      // Add landscape projects
                      $projects_landscape = Pages::merge($projects_landscape_advertising,
                                                         $projects_landscape_packaging,
                                                         $projects_landscape_type,
                                                         $projects_landscape_video);

                      $projects_landscape = $projects_landscape->shuffle();
                      $projects_landscape = Pages::merge($projects_product,
                                                         $projects_landscape);

                      // Add portrait projects
                      $projects_portrait = Pages::merge($projects_portrait_editorial, $projects_portrait_3D);
                      $projects_portrait = $projects_portrait->shuffle();

            } else {
                      // Add landscape projects
                      $projects_landscape = Pages::merge($projects_landscape_advertising,
                                                         $projects_landscape_packaging,
                                                         $projects_landscape_type,
                                                         $projects_landscape_video);
                      $projects_landscape = $projects_landscape->shuffle();

                      // Add portrait projects
                      $projects_portrait = Pages::merge($projects_portrait_editorial,
                                                        $projects_portrait_3D);
                      $projects_portrait = $projects_portrait->shuffle();

                      $projects_portrait = Pages::merge($projects_product,
                                                        $projects_portrait);
            }

        // Subtract project count from what we need
        $landscape_count = 6;
        $portrait_count = 4;

        // If we have less than we need, fill in the rest with random projects
        $landscape_difference = $landscape_count - $projects_landscape->count();

        if ($landscape_difference > 0) {
          // Need to make sure we are not grabbing duplicate projects
          $landscape_uid = array();
          foreach($projects_landscape as $project):
            array_push($landscape_uid, $project->uid());
          endforeach;
          $landscape_uid_count = count($landscape_uid);

          if ($landscape_uid_count == 5) {
            $projects_landscape_random = $pages->visible()
                                               ->children()
                                               ->visible()
                                               // ->filterBy('tier', '1')
                                               ->filterBy('orientation', 'landscape')
                                               ->not($landscape_uid_count[0])
                                               ->not($landscape_uid_count[1])
                                               ->not($landscape_uid_count[2])
                                               ->not($landscape_uid_count[3])
                                               ->not($landscape_uid_count[4])
                                               ->shuffle()
                                               ->limit($landscape_difference);
          } else if ($landscape_uid_count == 4) {
            $projects_landscape_random = $pages->visible()
                                               ->children()
                                               ->visible()
                                               // ->filterBy('tier', '1')
                                               ->filterBy('orientation', 'landscape')
                                               ->not($landscape_uid_count[0])
                                               ->not($landscape_uid_count[1])
                                               ->not($landscape_uid_count[2])
                                               ->not($landscape_uid_count[3])
                                               ->shuffle()
                                               ->limit($landscape_difference);

          } else if ($landscape_uid_count == 3) {
            $projects_landscape_random = $pages->visible()
                                               ->children()
                                               ->visible()
                                               // ->filterBy('tier', '1')
                                               ->filterBy('orientation', 'landscape')
                                               ->not($landscape_uid_count[0])
                                               ->not($landscape_uid_count[1])
                                               ->not($landscape_uid_count[2])
                                               ->shuffle()
                                               ->limit($landscape_difference);
          } else if ($landscape_uid_count == 2) {
            $projects_landscape_random = $pages->visible()
                                               ->children()
                                               ->visible()
                                               // ->filterBy('tier', '1')
                                               ->filterBy('orientation', 'landscape')
                                               ->not($landscape_uid_count[0])
                                               ->not($landscape_uid_count[1])
                                               ->shuffle()
                                               ->limit($landscape_difference);
          } else if ($landscape_uid_count == 1) {
            $projects_landscape_random = $pages->visible()
                                               ->children()
                                               ->visible()
                                               // ->filterBy('tier', '1')
                                               ->filterBy('orientation', 'landscape')
                                               ->not($landscape_uid_count[0])
                                               ->shuffle()
                                               ->limit($landscape_difference);
          } else {
            $projects_landscape_random = $pages->visible()
                                               ->children()
                                               ->visible()
                                               // ->filterBy('tier', '1')
                                               ->filterBy('orientation', 'landscape')
                                               ->shuffle()
                                               ->limit($landscape_difference);
          }
          $projects_landscape = Pages::merge($projects_landscape, $projects_landscape_random);
        }

        $portrait_difference = $portrait_count - $projects_portrait->count();
          if ($portrait_difference > 0) {
            // Need to make sure we are not grabbing duplicate projects
            $portrait_uid = array();
            foreach($projects_portrait as $project):
              array_push($portrait_uid, $project->uid());
            endforeach;
            $portrait_uid_count = count($portrait_uid);

            if ($portrait_uid_count == 5) {
             $projects_portrait_random = $pages->visible()
                                                           ->children()
                                                           ->visible()
                                                           // ->filterBy('tier', '1')
                                                           ->filterBy('orientation', 'portrait')
                                                           ->not($portrait_uid_count[0])
                                                           ->not($portrait_uid_count[1])
                                                           ->not($portrait_uid_count[2])
                                                           ->not($portrait_uid_count[3])
                                                           ->not($portrait_uid_count[4])
                                                           ->shuffle()
                                                           ->limit($landscape_difference);
          } else if ($portrait_uid_count == 4) {
            $projects_portrait_random = $pages->visible()
                                                           ->children()
                                                           ->visible()
                                                           // ->filterBy('tier', '1')
                                                           ->filterBy('orientation', 'portrait')
                                                           ->not($portrait_uid_count[0])
                                                           ->not($portrait_uid_count[1])
                                                           ->not($portrait_uid_count[2])
                                                           ->not($portrait_uid_count[3])
                                                           ->shuffle()
                                                           ->limit($landscape_difference);
          } else if ($portrait_uid_count == 3) {
            $projects_portrait_random = $pages->visible()
                                                           ->children()
                                                           ->visible()
                                                           // ->filterBy('tier', '1')
                                                           ->filterBy('orientation', 'portrait')
                                                           ->not($portrait_uid_count[0])
                                                           ->not($portrait_uid_count[1])
                                                           ->not($portrait_uid_count[2])
                                                           ->shuffle()
                                                           ->limit($landscape_difference);
          } else if ($portrait_uid_count == 2) {
            $projects_portrait_random = $pages->visible()
                                                           ->children()
                                                           ->visible()
                                                           // ->filterBy('tier', '1')
                                                           ->filterBy('orientation', 'portrait')
                                                           ->not($portrait_uid_count[0])
                                                           ->not($portrait_uid_count[1])
                                                           ->shuffle()
                                                           ->limit($portrait_difference);
          } else if ($portrait_uid_count == 1) {
            $projects_portrait_random = $pages->visible()
                                                           ->children()
                                                           ->visible()
                                                           // ->filterBy('tier', '1')
                                                           ->filterBy('orientation', 'portrait')
                                                           ->not($portrait_uid_count[0])
                                                           ->shuffle()
                                                           ->limit($portrait_difference);
          } else {
            $projects_portrait_random = $pages->visible()
                                                           ->children()
                                                           ->visible()
                                                           // ->filterBy('tier', '1')
                                                           ->filterBy('orientation', 'portrait')
                                                           ->shuffle()
                                                           ->limit($portrait_difference);
          }
                    $projects_portrait = Pages::merge($projects_portrait, $projects_portrait_random);
            }
        snippet('layout-' . rand(1, 10), array('projects_portrait' => $projects_portrait,
                              'projects_landscape' => $projects_landscape));
          }

    ?>

  </div>
</div>

<?php snippet('footer') ?>