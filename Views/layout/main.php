<body>
    <main>
        <h1>Giochi per gli animali</h1>
        <div class="container d-flex">
            
            <?php foreach($toy as $item) : ?>  
            <div class="card  m-2" style="width: 18rem;">
                <img src="<?php echo $item->img ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><strong><?php echo $item->name ?></strong></h5>
                    <p class="card-text"><strong>Nome marca: </strong><?php echo $item->brand ?></p>
                    <p class="card-text"><strong>Particolarità: </strong><?php echo $item->feature ?></p>
                    <p class="card-text"><strong>Id: </strong><?php echo $item->id ?></p>
                    <p class="card-text"><strong>Misure: </strong><?php echo $toy->size ?></p>

                </div>
            </div>
            <?php endforeach ?>
        </div>
        <h1>Cibo per gli animali</h1>
        <div class="container d-flex">
            
            <?php foreach($food as $item) : ?>  
            <div class="card  m-2" style="width: 18rem;">
                <img src="<?php echo $item->img ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <img src="<?php echo $item->category->icon ?>" alt="">
                    <h5 class="card-title"><strong><?php echo $item->name ?></strong></h5>
                    <p class="card-text"><strong>Nome marca: </strong><?php echo $item->brand ?></p>
                    <p class="card-text"><strong>Quantità: </strong><?php echo $item->weight ?></p>
                    <p class="card-text"><strong>Gusto: </strong><?php echo $item->taste ?></p>
                    <p class="card-text"><strong>Ingredienti: </strong><?php echo $item->ingredients ?></p>
                    

                </div>
            </div>
            <?php endforeach ?>
        </div>
        <h1>Accessori per gli animali</h1>
        <div class="container d-flex">
            
            <?php foreach($accessory as $item) : ?>  
            <div class="card  m-2" style="width: 18rem;">
                <img src="<?php echo $item->img ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    
                    <h5 class="card-title"><strong><?php echo $item->name  ?></strong></h5>
                    <p class="card-text"><strong>Nome marca: </strong><?php echo $item->brand ?></p>
                    <p class="card-text"><strong>Disponibile: </strong><?php echo $item->isAvaiable ? 'Disponibile' : 'Esaurito' ?></p>
                    <p class="card-text"><strong>Dimensioni: </strong><?php echo $item->size ?></p>
                    <p class="card-text"><strong>Materiali: </strong><?php echo $item->material ?></p>
                    

                </div>
            </div>
            <?php endforeach ?>
        </div>
      
    </main>
</body>

