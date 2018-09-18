<?php
    if(have_post()){
        while(have_post()){
            the_post();
?>
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <?php the_content(); ?>
    </div>
</div>

<?php
        }
    }
    ?>