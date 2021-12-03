
<h2 class="text-white text-center fs-1 mt-3 mb-5">
    D'où viennent nos cafés?
</h2>

<?php 

    foreach ($origin as $index => $element):
       if($index&1):
       
?>
    <img align="right"
    src="../public/assets/img/<?= $element['url-image'] ?>" class="img-fluid rounded w-25 me-3 mt-4" alt="image carte du monde" width="800px" height="600px">
        <p class="text-white fs-4 mt-5 px-5">
            <?= $element['texte'] ?>
        </p>

<?php 
    else:
?>

<img align="left"
src="../public/assets/img/<?= $element['url-image'] ?>" class="img-fluid rounded w-25 ms-5 me-2 mt-4" alt="image carte du monde" width="800px" height="600px">
    <p class="text-white fs-4 mt-5 px-5">
        <?= $element['texte'] ?>
    </p>

<?php
    endif;
    endforeach
?>