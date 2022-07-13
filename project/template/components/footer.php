    <footer>
        <div class="footer bg-light">
            <div class="footer__copy bg-dark text-light py-2">
                <div class="container">
                    <p>Paladino © 2022. Alguns direitos reservados.</p>
                </div>
            </div>
            <div class="container">
                <div class="footer__content pt-2 text-primary fw-bold">
                    <p>Menu</p>
                    <div class="footer__links fw-normal mt-2 pb-4 text-dark">
                        <?php for ($i = 0; $i < 9; $i++) : ?>
                            <a href="#">Item 0<?php echo $i ?></a>
                        <?php endfor; ?>
                    </div>
                    <div class="footer_my fw-normal fs-6 text-dark text-center py-3 border-top border-dark">
                        <a href="#">Hugo Codes</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Importações de scripts: -->
    <script>
        feather.replace()
    </script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>