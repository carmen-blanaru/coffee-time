<nav class="navbar sticky-top navbar-expand-lg">
    <div class="container">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link<?= $currentPage == 'main-home' ? ' active' : '' ?>" href="<?= $router->generate('main-home') ?>">Accueil</a>
                </li>
            </ul>
           
        </div>
    </div>
</nav>