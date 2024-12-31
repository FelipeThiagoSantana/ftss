<!--Navbar -->
<nav x-data="{open: false}" class="navbar navbar-expand-lg bg-body-tertiary" id="navbarToggleExternalContent" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand logo" href="/">FTSS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Quem Sou</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Projetos</a>
                </li>

                <!-- Botão Contato dentro da lista -->
                <li class="nav-item d-lg-none"> <!-- Visible only on mobile -->
                    <button type="button" class="custom-btn">Contato</button>
                </li>
            </ul>
        </div>
        <!-- Botão Contato fora da lista, alinhado à direita -->
        <div class="ml-auto d-none d-lg-block"> <!-- Hidden on mobile, visible on desktop -->
            <button type="button" class="custom-btn">Contato</button>
        </div>
    </div>
</nav>
