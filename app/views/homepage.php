<div class="container-fluid mt-5">
    <div class="row justify-content-center">
<<<<<<< HEAD
        
        <div class="d-flex flex-row flex-wrap justify-content-center">
            
            <!-- os meus clientes -->
            <a href="#" class="unlink m-2">
                <div class="home-option p-5 text-center">
                    <h3 class="mb-3"><i class="fa-solid fa-users"></i></h3>
                    <h5>Os meus clientes</h5>
                </div>
            </a>
            
            <!-- adicionar clientes -->
            <a href="#" class="unlink m-2">
                <div class="home-option p-5 text-center">
                    <h3 class="mb-3"><i class="fa-solid fa-user-plus"></i></h3>
                    <h5>Adicionar clientes</h5>
                </div>
            </a>

            <!-- carregar ficheiro de clientes -->
            <a href="#" class="unlink m-2">
                <div class="home-option p-5 text-center">
                    <h3 class="mb-3"><i class="fa-solid fa-upload"></i></h3>
                    <h5>Carregar ficheiro</h5>
                </div>
            </a>

            <!-- clientes -->
            <a href="#" class="unlink m-2">
                <div class="home-option p-5 text-center">
                    <h3 class="mb-3"><i class="fa-solid fa-users"></i></h3>
                    <h5>Clientes</h5>
                </div>
            </a>

            <!-- estatística -->
            <a href="#" class="unlink m-2">
                <div class="home-option p-5 text-center">
                    <h3 class="mb-3"><i class="fa-solid fa-chart-column"></i></h3>
                    <h5>Estatística</h5>
                </div>
            </a>

            <!-- gestão de utilizadores -->
            <a href="#" class="unlink m-2">
                <div class="home-option p-5 text-center">
                    <h3 class="mb-3"><i class="fa-solid fa-user-gear"></i></h3>
                    <h5>Gestão de utilizadores</h5>
                </div>
            </a>
=======

        <div class="d-flex flex-row flex-wrap justify-content-center">

            <!-- os meus clientes -->
            <?php if ($user->profile == 'agent') : ?>
                <a href="#" class="unlink m-2">
                    <div class="home-option p-5 text-center">
                        <h3 class="mb-3"><i class="fa-solid fa-users"></i></h3>
                        <h5>Os meus clientes</h5>
                    </div>
                </a>
            <?php endif; ?>

            <!-- adicionar clientes -->
            <?php if ($user->profile == 'agent') : ?>
                <a href="#" class="unlink m-2">
                    <div class="home-option p-5 text-center">
                        <h3 class="mb-3"><i class="fa-solid fa-user-plus"></i></h3>
                        <h5>Adicionar clientes</h5>
                    </div>
                </a>
            <?php endif; ?>

            <!-- carregar ficheiro de clientes -->
            <?php if ($user->profile == 'agent') : ?>
                <a href="#" class="unlink m-2">
                    <div class="home-option p-5 text-center">
                        <h3 class="mb-3"><i class="fa-solid fa-upload"></i></h3>
                        <h5>Carregar ficheiro</h5>
                    </div>
                </a>
            <?php endif; ?>

            <!-- clientes -->
            <?php if ($user->profile == 'admin') : ?>
                <a href="#" class="unlink m-2">
                    <div class="home-option p-5 text-center">
                        <h3 class="mb-3"><i class="fa-solid fa-users"></i></h3>
                        <h5>Clientes</h5>
                    </div>
                </a>
            <?php endif; ?>

            <!-- estatística -->
            <?php if ($user->profile == 'admin') : ?>
                <a href="#" class="unlink m-2">
                    <div class="home-option p-5 text-center">
                        <h3 class="mb-3"><i class="fa-solid fa-chart-column"></i></h3>
                        <h5>Estatística</h5>
                    </div>
                </a>
            <?php endif; ?>

            <!-- gestão de utilizadores -->
            <?php if ($user->profile == 'admin') : ?>
                <a href="#" class="unlink m-2">
                    <div class="home-option p-5 text-center">
                        <h3 class="mb-3"><i class="fa-solid fa-user-gear"></i></h3>
                        <h5>Gestão de utilizadores</h5>
                    </div>
                </a>
            <?php endif; ?>
>>>>>>> 6b3d324 (Novas configurações no processo de login e configuração do log com o monolog)

        </div>

    </div>
</div>