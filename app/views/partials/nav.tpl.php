<div class="container">
            <header class="pt-4">
                <img src="<?=$assetsBaseUri ?>img/istockphoto-1252818926-612x612.jpg" class="img-fluid rounded ms-2 mb-4 logo" alt="logo du site" width="100px" height="100px">
                    <h1 class="d-inline ps-4 text-white ">The coffee cup</h1>
                    <nav class="navbar navbar-expand-lg navbar-light bg-transparent navigation">
                        <div class="container-fluid">
                        <button class="navbar-toggler bg-warning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon "></span>
                        </button>
                        <div class="collapse navbar-collapse bg-warning opacity-75" id="navbarNavAltMarkup">
                            <div class="navbar-nav move">
                            <a class="nav-link" href="<?= $router->generate('main-home')?>">
                                <button class="btn btn-warning fs-5 me-3 px-4" type="button">Accueil</button>
                            </a>
                            <a class="nav-link" href="#">
                                <button class="btn btn-warning fs-5 me-3 px-4" type="button">Nos cafés</button>
                            </a>
                            <a class="nav-link" href="#">
                                <button class="btn btn-warning fs-5 me-3 px-4" type="button">Origines</button>
                            </a>
                            <a class="nav-link" href="#">
                                <button class="btn btn-warning fs-5 me-3 px-4" type="button">Horaires</button>
                            </a>
                            </div>
                        </div>
                        </div>
                    </nav>
            </header>
            <main>