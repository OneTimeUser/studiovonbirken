<?php
    if ($tag != '') {
        echo '<a href="'. url() .'tag:' . urlencode(trim($tag)). '">'.html($tag).'</a>';
    }
?>