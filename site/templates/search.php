<?php
    ini_set('display_errors', 'On');
    error_reporting(E_ALL | E_STRICT);
?>

<?php
    $field = '';
    if (isset($_GET["field"])) {
        $field = htmlspecialchars($_GET["field"]);
    }

    if ($field != "") {
        $search = new search(array(
            'searchfield' => 'q',
            'mode' => 'and',
            'fields' => array($field, 'text'),
            'words' => true,
            'ignore' => array('error', 'docs', 'blog', 'feed', 'search'),
            'paginate' => 20
        ));
    } else {
        $search = new search(array(
            'searchfield' => 'q',
            'mode' => 'and',
            'words' => true,
            'ignore' => array('error', 'docs', 'blog', 'feed', 'search'),
            'paginate' => 20
        ));
    }

    $results = $search->results();
?>
<?php snippet('header'); ?>


        <?php if($results): ?>
            <div id="container" class="btcf">
            <div id="main" role="main">
                <div id="div1" class="targetDiv"><p class="call-action">[about]</p><p>Studio von Birken is an <a href="<?php echo url() ?>tag:Awards+%26+Publications">award winning</a> New York-based, multidisciplinary creative studio steeped in the worlds of <a href="<?php echo url() ?>tag:Advertising">advertising</a>, <a href="<?php echo url() ?>tag:Branding">branding</a>, <a href="<?php echo url() ?>tag:Editorial">editorial</a> & <a href="<?php echo url() ?>tag:Packaging">packaging</a>.  Founded in 2002 in New York City and led by owner and creative director Katia Kuethe, Studio von Birken specializes in fashion, beauty and their neighboring disciplines.  Katia believes in high-end simplicity, clear strategy and meticulous execution. With a well-trained eye and over 15 years of experience, Katia is able to predict culturally relevant moments to craft impactful new positions for clients. She has a unique ability to blend the cool with the classic, creating something that is timeless yet fresh.  Her love of <a href="<?php echo url() ?>tag:Type">type</a> often inspires her to create custom work.   Her elevated approach has been successfully applied to brands such as <a href="<?php echo url() ?>tag:Uniqlopaper">Uniqlo</a>, <a href="<?php echo url() ?>tag:J.+Crew">J.Crew</a>, <a href="<?php echo url() ?>tag:Kate+Spade+Live+Colorfully">Kate Spade</a> & <a href="<?php echo url() ?>tag:Estée+Lauder">Estee Lauder</a>.  Most recently, Katia consulted for <a href="<?php echo url() ?>tag:Abercrombie+%26+Fitch">Abercrombie & Fitch</a> to help reposition the brand and express its heritage point of view.  On the editorial side, Katia and has worked on a range of titles, including <a href="<?php echo url() ?>tag:Teen+Vogue">teen vogue</a>, <a href="<?php echo url() ?>tag:Arkitip">Arkitip</a> and the self-published indie magazine <a href="<?php echo url() ?>tag:Editor+%26+Art+Director+-+The+Glossy+Zine">The Glossy Zine</a>.  She has collaborated with Japanese brands <a href="<?php echo url() ?>tag:Beams">Beams</a> & <a href="<?php echo url() ?>tag:Worldtypographers">Uniqlo</a> on T-shirt editions and Studio von Birken produces its own set of <a href="http://shop.studiovonbirken.com">limited editions</a> annually.  She lives & works in Chelsea, New York with her son Paz.</p>
        </div>
                  <div id="div3" class="targetDiv">
                    <div class="col1"><p class="call-action">[contact]</p><p style="padding-bottom:15px;">katia kuethe</p><p>+ [1] 917.476 60 52</p><p><a href="mailto:katia@studiovonbirken.com">katia@studiovonbirken.com</a></p></div>
                  </div>   
              
                </div>  
            <?php snippet('layout-default', array('projects' => $results)); ?>
            </div>
            </div>
        <?php else: ?>
            <div id="container" class="btcf">
            <div class="main" role="main">
                <div id="text-content">
                  <div id="div1" class="targetDiv"><p class="call-action">[about]</p><p>Studio von Birken is an <a href="<?php echo url() ?>tag:Awards+%26+Publications">award winning</a> New York-based, multidisciplinary creative studio steeped in the worlds of <a href="<?php echo url() ?>tag:Advertising">advertising</a>, <a href="<?php echo url() ?>tag:Branding">branding</a>, <a href="<?php echo url() ?>tag:Editorial">editorial</a> & <a href="<?php echo url() ?>tag:Packaging">packaging</a>.  Founded in 2002 in New York City and led by owner and creative director Katia Kuethe, Studio von Birken specializes in fashion, beauty and their neighboring disciplines.  Katia believes in high-end simplicity, clear strategy and meticulous execution. With a well-trained eye and over 15 years of experience, Katia is able to predict culturally relevant moments to craft impactful new positions for clients. She has a unique ability to blend the cool with the classic, creating something that is timeless yet fresh.  Her love of <a href="<?php echo url() ?>tag:Type">type</a> often inspires her to create custom work.   Her elevated approach has been successfully applied to brands such as <a href="<?php echo url() ?>tag:Uniqlopaper">Uniqlo</a>, <a href="<?php echo url() ?>tag:J.+Crew">J.Crew</a>, <a href="<?php echo url() ?>tag:Kate+Spade+Live+Colorfully">Kate Spade</a> & <a href="<?php echo url() ?>tag:Estée+Lauder">Estee Lauder</a>.  Most recently, Katia consulted for <a href="<?php echo url() ?>tag:Abercrombie+%26+Fitch">Abercrombie & Fitch</a> to help reposition the brand and express its heritage point of view.  On the editorial side, Katia and has worked on a range of titles, including <a href="<?php echo url() ?>tag:Teen+Vogue">teen vogue</a>, <a href="<?php echo url() ?>tag:Arkitip">Arkitip</a> and the self-published indie magazine <a href="<?php echo url() ?>tag:Editor+%26+Art+Director+-+The+Glossy+Zine">The Glossy Zine</a>.  She has collaborated with Japanese brands <a href="<?php echo url() ?>tag:Beams">Beams</a> & <a href="<?php echo url() ?>tag:Worldtypographers">Uniqlo</a> on T-shirt editions and Studio von Birken produces its own set of <a href="http://shop.studiovonbirken.com">limited editions</a> annually.  She lives & works in Chelsea, New York with her son Paz.</p>
        </div>
                  <div id="div3" class="targetDiv">
                    <div class="col1"><p class="call-action">[contact]</p><p style="padding-bottom:15px;">katia kuethe</p><p>+ [1] 917.476 60 52</p><p><a href="mailto:katia@studiovonbirken.com">katia@studiovonbirken.com</a></p></div>
                  </div>   
              
                </div>   
             <h1 class="no-results">Sorry... No Results.</h1>
            </div>
            </div>
           

        <?php endif ?>


<?php snippet('footer') ?>