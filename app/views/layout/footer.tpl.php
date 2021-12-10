<!-- And for every user interaction, we import Bootstrap JS components -->
</main>
<footer>
    <ul class="d-flex justify-content-center list-group list-group-horizontal mt-5 pb-3">
        <li class="list-group-item border-0 bg-transparent fs-4"><a href="#" class="link-warning text-decoration-none">Nous contacter</a></li>
        <li class="list-group-item border-0 bg-transparent fs-4"><a href="<?= $router->generate('footer-legalMention')?>" class="link-warning text-decoration-none">Mentions Légales</a></li>
        <li class="list-group-item border-0 bg-transparent fs-4"><a href="<?= $router->generate('footer-cgu')?>" class="link-warning text-decoration-none">CGU</a></li>
    </ul>
    <p class="d-flex justify-content-center text-white fs-6 mb-5 pb-4">
        ©2021 Carmen BLANARU - Tous droits réservés! 
    </p>
</footer>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>