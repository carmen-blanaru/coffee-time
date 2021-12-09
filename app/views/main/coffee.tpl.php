<h2 class="text-white text-center mt-5 mb-3 coffee"> Nos choix de cafés</h2>
    <img src="<?=$assetsBaseUri ?>img/coffee-g152bdc3b3_1280.png" class="img-fluid position-relative top-50 start-50 translate-middle-x" width="1000px" height="900px" alt="types de cafés" >
       <div class="bg-warning w-75 mt-5 mb-5 text-center position-relative top-50 start-50 translate-middle-x cake">
            <p class="p-3"> 
                Accompagnez votre café d'une de nos délicieuses pâtisseries faites avec amour! 
            </p>
        </div> 

       
            <div class="d-sm-flex flex-row">

            <?php 
            foreach ($cake as $index => $value):
        
        ?>
                <figure class="figure w-auto h-auto m-3">
                    <img src="<?=$assetsBaseUri ?>img/<?= $value['url-image'] ?>" class="figure-img img-fluid rounded " alt="images des gateaux">
                        <figcaption class="figure-caption text-center fs-4 text-white"> <?= $value['texte'] ?> </figcaption>
                </figure>
        <?php 
        endforeach
        ?>
            </div>
