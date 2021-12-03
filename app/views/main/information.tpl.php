<div class="information">
    <ul class="list-unstyled list-inline badge bg-warning text-wrap lh-lg mt-3">
        <li class="fs-2"> The Coffee Cup est ouvert : </li>

        <?php 

            //first foreach for the first table whose days are in english
            foreach($data['openingHours'] as $englishDay => $secondTable):
                
                //the result of the first table, the variable $secondTable, represents the second foreach 
                foreach($secondTable as $frenchDay => $finalSchedule)
        ?>
            
            <?php 
                //the variable $englishDay contains the english days' names on which the date() function is applied
                if($englishDay == $data['currentDay']) {
                    //the variable $class is created to switch after the current day
                    $class = "today";
                        } else {
                            $class = "";}
            ?>

            <li class="list-inline-item fs-4 <?= $class?>"> 
                <?= $frenchDay?>
               
                <span class="list-inline-item fs-4 ms-5 "> 
                    <?= $finalSchedule?>
                </span>
            </li><br>
                  
        <?php 
            endforeach; 
        ?>

    </ul>

    <div class="h-50 badge bg-warning text-wrap adress">
        <p class=""> Nous vous attendons au  
            <span>234 route du Roi</span>
                <span>78000 Versailles</span> 
        </p> 
    </div>
</div>