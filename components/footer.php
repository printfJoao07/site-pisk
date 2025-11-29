<?php
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }
?>

<style>
    footer {
        background-color: #212529;
    }

    footer div.logo {
        min-width: 300px;
    }

    footer div.logo p.long-text {
        color: #ffffffc0;
    }

    footer div.col-12 h5 {
        color: #fff;
    }

    
</style>

<div class="container-flex w-100 mx-0 mt-5">
<footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 ps-5 pe-1 border-top align-bottom " > 
    <div class="logo col-12 col-lg-3 mb-3"> 
        <a href="http://localhost/site-pisk/" class="d-flex align-items-center mb-3  text-decoration-none " aria-label="Pisk"> 
            <img src="http://localhost/site-pisk/images/logo_pisk.png" alt="Logo da Pisk" class="img-fluid me-3" style="width: 60px; height: 60px" />
            <h3 class="title">Pisk Editorial</h3>
        </a> 
        <p class="">© 2025. Todos os direitos reservados</p> 
        <p class="">Passos/MG</p>
    </div> 
    
    <div class="col-12 col-md-4 col-lg-3 mb-3"> 
        <h5 class="text">Sobre Nós</h5> 
        <ul class="nav flex-column"> 
            <li class="nav-item mb-2">
                <a href="http://localhost/site-pisk/" class="nav-link p-0 ">Página inicial</a>
            </li> 
            <li class="nav-item mb-2">
                <a href="http://localhost" class="nav-link p-0 ">Nossa história</a>
            </li> 
            <li class="nav-item mb-2">
                <a href="http://localhost" class="nav-link p-0 ">Colaboradores</a>
            </li> 
            <li class="nav-item mb-2">
                <a href="http://localhost" class="nav-link p-0 ">Parceiros</a>
            </li> 
            
        </ul> 
    </div> 
    <div class="col-12 col-md-4 col-lg-3  mb-3"> 
        <h5 class="text">Ajuda</h5> 
        <ul class="nav flex-column"> 
            <li class="nav-item mb-2">
                <a href="http://localhost" class="nav-link p-0">Política de privacidade</a>
            </li> 
            <li class="nav-item mb-2">
                <a href="http://localhost" class="nav-link p-0 ">Perguntas frequentes</a>
            </li> 
            <li class="nav-item mb-2">
                <a href="http://localhost" class="nav-link p-0 ">Política de Cookies</a>
            </li> 
            
        </ul> 
    </div> 
    <div class="col-12 col-md-4 col-lg-3 ms-lg-5 ms-xl-0 mb-3">
         <h5 class="text">Contato</h5> 
         <ul class="nav flex-column"> 
            <li class="nav-item mb-2">
                <a href="http://localhost" class="nav-link p-0 ">atendimento@piskeditora.com.br</a>
            </li> 
            <li class="nav-item mb-2">
                <a href="http://localhost" class="nav-link p-0 ">(35) 99888-7777</a>
            </li>
            <li class="nav-item mb-2">
                <a href="http://localhost" class="nav-link p-0 ">Passos/MG</a>
            </li> 
            
        </ul> 
    </div> 

</footer>
</div>

