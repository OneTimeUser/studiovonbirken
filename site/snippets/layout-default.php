
<div id="layout-default" class="grid">
	<div id="div0" class="targetDiv"><p class="call-action">[content]</p></div>
    <?php
        foreach($projects as $project):
            if ($project->featured_video() != '' || $project->hasImages()) :
                echo '<div class="project">';
                snippet('project-grid', array('project' => $project, 'size' => 'large'));
                echo '</div>';
            endif;
        endforeach;
    ?>
</div>
