<div id="layout-7" class="grid">
<div id="div0" class="targetDiv"><p class="call-action">[content]</p></div>
    <div class="landscape-a">
        <div class="project-1 project">
            <?php
                $project_a = $projects_landscape->first();
                snippet('project-grid', array('project' => $project_a,
                                                'size' => 'large'));
            ?>
        </div>
    </div>
    <div class="portrait-b">
        <?php
            foreach($projects_portrait->slice(0, 2) as $project):
        ?>
                <div class="project">
                    <?php snippet('project-grid', array('project' => $project,
                                                        'size' => 'small'));
                    ?>
                </div>
        <?php
            endforeach
        ?>
    </div>
    <div class="portrait-a">
        <div class="project-1 project">
            <?php
                $project_b = $projects_portrait->slice(2, 1)->first();
                snippet('project-grid', array('project' => $project_b,
                                                'size' => 'large'));
            ?>
        </div>
    </div>
    <div class="landscape-b">
        <?php
            foreach($projects_landscape->slice(1, 4) as $project):
        ?>
                <div class="project">
                    <?php snippet('project-grid', array('project' => $project,
                                                        'size' => 'small'));
                    ?>
                </div>
        <?php
            endforeach
        ?>
    </div>


</div>