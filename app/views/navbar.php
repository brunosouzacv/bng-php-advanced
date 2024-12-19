<div class="container-fluid bng-navbar">
    <div class="row">

        <div class="col-6 d-flex align-content-center p-3">
            <img src="assets/images/logo_32.png" alt="logo bng" height="32" class="me-3">
            <h3><?= APP_NAME ?></h3>
        </div>

        <div class="col-6 text-end p-3">

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
<<<<<<< HEAD
                <i class="fa-regular fa-user me-2"></i>[agente]
=======
                <i class="fa-regular fa-user me-2"></i><?= $user->name ?>
>>>>>>> 6b3d324 (Novas configurações no processo de login e configuração do log com o monolog)
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-key me-2"></i>Alterar password</i></a></li>
                    <li><hr class="dropdown-divider"></li>
<<<<<<< HEAD
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-right-from-bracket me-2"></i>Sair</a></li>
=======
                    <li><a class="dropdown-item" href="?ct=main&mt=logout"><i class="fa-solid fa-right-from-bracket me-2"></i>Sair</a></li>
>>>>>>> 6b3d324 (Novas configurações no processo de login e configuração do log com o monolog)
                </ul>
            </div>
        </div>

    </div>
</div>