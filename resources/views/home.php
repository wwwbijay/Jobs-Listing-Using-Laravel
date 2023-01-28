<h1>
    <?php
        echo $heading;
    ?>
</h1>

<?php foreach($jobs as $job): ?>
<p>
    <small><?php echo $job['date'];  ?></small>
</p>
<h3>
    <a href="<?php echo $job['url'];  ?>">
        <?php echo $job['jobtitle'];  ?>
    </a>
</h3>
<p>
    <small><?php echo $job['company'].', '.$job['city'] ;  ?></small>
</p>

<p>
    <?php echo $job['snippet'];  ?>
</p>
<?php endforeach; ?>