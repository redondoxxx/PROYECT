<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<!---BOXICONS-->
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@500&display=swap" rel="stylesheet'/>
<!-- CSS -->
<link rel="stylesheet" href="home.css">
    <title>Perfil Administrativo</title>
</head>
<body>
<div>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="logo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name"><?php echo $_SESSION["uname"] ?></span>
                    <span class="profession">Administrador</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                    <li class="nav-link">
                        <a href="/PAGINA%20ROPA/index.html">
                            <i class='bx bx-movie icon' ></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/PAGINA%20ROPA/pages/hombre/index.html">
                            <i class='bx bx-user icon' ></i>
                            <span class="text nav-text">Usuarios</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/PAGINA%20ROPA/pages/mujer/index.html">
                            <i class='bx bx-chat icon'></i>
                            <span class="text nav-text">Mensajes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/PAGINA%20ROPA/pages/accesorios/index.html">
                            <i class='bx bx-chart icon' ></i>
                            <span class="text nav-text">Estadisticas</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="/PAGINA%20ROPA/pages/accesorios/index.html">
                            <i class='bx bx-folder icon' ></i>
                            <span class="text nav-text">Categorias</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="/PAGINA%20ROPA/pages/accesorios/index.html">
                            <i class='bx bx-purchase-tag icon' ></i>
                            <span class="text nav-text">Productos</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="/PAGINA%20ROPA/pages/accesorios/index.html">
                            <i class='bx bx-paper-plane icon' ></i>
                            <span class="text nav-text">Pedidos</span>
                        </a>
                    </li>


            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Cerrar Sesion</span>
                    </a>
                </li>
                <li class="">
                    <a href="/PAGINA%20ROPA/pages/carro/index.php">
                        <i class='bx bx-pen icon' ></i>
                        <span class="text nav-text">Herramientas</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Modo oscuro</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>
</div>

    <div class="ecabecera">
        <div class="cabecera">
            <h1>ENVIOS GRATUITOS A PARTIR DE 60€ A TODA EUROPA.</h1>
        </div>
    </div>

    <div class="home">
        <div class="text">DEUS BRAND</div>
        </div>
<script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
</body>
</html>