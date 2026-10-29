<div style="margin: 0 auto;">
    <h1>El dado de suerte</h1>

    <?php for($i=1; $i<=5; $i++): ?>
        <img src="img/<?php echo rand(1,6) ?>.svg">
    <?php endfor; ?>

</div>