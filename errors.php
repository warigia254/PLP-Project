<?php error_reporting(0); ?> 

<?php if(count($errors) > 0 ) : ?>

    <div>

        <?php foreach($errors as $error) : ?>

            <p><?php echo $error ?></p>
        <?php endforeach ?>

    </div>

    <?php endif ?>