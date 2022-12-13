<body>
    <main>
        <h1>Giochi per gli animali</h1>
        <div class="container d-flex">
            
            <?php foreach($toys as $toy) : ?>  
            <div class="card  m-2" style="width: 18rem;">
                <img src="<?php echo $toy->img ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><strong><?php echo $toy->name ?></strong></h5>
                    <p class="card-text"><strong>Nome marca: </strong><?php echo $toy->brand ?></p>
                    <p class="card-text"><strong>Particolarità: </strong><?php echo $toy->feature ?></p>
                    <p class="card-text"><strong>Id: </strong><?php echo $toy->id ?></p>
                    <p class="card-text"><strong>Misure: </strong><?php echo $toy->size ?></p>

                </div>
            </div>
            <?php endforeach ?>
        </div>
        <h1>Cibo per gli animali</h1>
        <div class="container d-flex">
            
            <?php foreach($foods as $food) : ?>  
            <div class="card  m-2" style="width: 18rem;">
                <img src="<?php echo $food->img ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><strong><?php echo $food->name ?></strong></h5>
                    <p class="card-text"><strong>Nome marca: </strong><?php echo $food->brand ?></p>
                    <p class="card-text"><strong>Quantità: </strong><?php echo $food->weight ?></p>
                    <p class="card-text"><strong>Gusto: </strong><?php echo $food->taste ?></p>
                    <p class="card-text"><strong>Ingredienti: </strong><?php echo $food->ingredients ?></p>
                    

                </div>
            </div>
            <?php endforeach ?>
        </div>
        <h1>Accessori per gli animali</h1>
        <div class="container d-flex">
            
            <?php foreach($accessories as $acc) : ?>  
            <div class="card  m-2" style="width: 18rem;">
                <img src="<?php echo $acc->img ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    
                    <h5 class="card-title"><strong><?php echo $acc->name  ?></strong></h5>
                    <p class="card-text"><strong>Nome marca: </strong><?php echo $acc->brand ?></p>
                    <p class="card-text"><strong>Disponibile: </strong><?php echo $acc->isAvaiable ? 'Disponibile' : 'Esaurito' ?></p>
                    <p class="card-text"><strong>Dimensioni: </strong><?php echo $acc->size ?></p>
                    <p class="card-text"><strong>Materiali: </strong><?php echo $acc->material ?></p>
                    

                </div>
            </div>
            <?php endforeach ?>
        </div>
      
    </main>
</body>

