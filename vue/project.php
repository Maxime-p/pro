<section id='project'>
    <h2 class="title">Mes projets</h2>
    <div class="grid">
        <?php foreach ($projects as $project){
            ?>
            <div class="item">
                <h4 class="post"><?php echo $project["post"]; ?></h4>
                <h4><?php echo $project["date_begin"] . '/'. $project["date_begin"] . " " . $project["customer"]; ?></h4>
                <h4><?php echo $project["title"]; ?></h4>
                <p><?php echo $project["description"]; ?></p>
            </div>
            <?php
        } echo $project["date_begin"]?>
    </div>
</section>