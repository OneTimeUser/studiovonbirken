<?php
    if (!$project) {
        return;
    }

    if ($project->orientation() == 'landscape') {
        if ($size == 'small') {
            $width = 526;
            $height = 390;
        } else {
            $width = 1080;
            $height = 800;
        }
    } else {
        if ($size == 'small') {
            $width = 526;
            $height = 701;
        } else {
            $width = 1080;
            $height = 1440;
        }
    }

    if ($project->featured_video() != '') {
        $url = $project->featured_video();

        // Using 'youtu' because possibility of having shortened urls (http://youtu.be/)
        if (strpos($url, 'youtu') > 0) {
            echo youtube($url, $width, $height);
        } elseif (strpos($url, 'vimeo') > 0) {
            echo vimeo($url, $width, $height);
        } else {
            return;
        }

    } else {
        $tagName = explode(',', $project->caption_2())[0];
        echo '<a href="' . url() . 'tag:' . urlencode(trim($tagName)) . '" title="' . html($project->title()) . '">';
            $featured_img = $project->images()->first();
            $featured_img->fitWidth($width, true);
            $featured_img->fitHeight($height, false);

            echo '<img src="' . $featured_img->url() . '">';
        echo '</a>';
    }
?>


<div class="keywords">
    <ul>
        <?php
            for ($i = 1; $i <= 4; $i++) {
                $captionGroup = 'caption_' . $i;
                $count = 0;
                echo '<li><span>';
                foreach($captions = explode(',', $project->$captionGroup()) as $tag) {
                    $count++;
                    snippet('tags', array('tag' => $tag));
                    if ($count != count($captions)) { echo ', '; }
                }
                if ($i === 4 && $project->shop() == 'true') {
                    echo ', <a class="shop" href="http://shop.studiovonbirken.com">SHOP</a>';
                }
                echo '</span></li>';
            }
        ?>
    </ul>
</div>
