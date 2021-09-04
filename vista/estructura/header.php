<!DOCTYPE html>
  <html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="../css/fontawesome/all.min.css">
        <title><?php $Titulo ?></title>
        <style type="text/css">
          .sidebar li .submenu{ 
            list-style: none; 
            margin: 0; 
            padding: 0; 
            padding-left: 1rem; 
            padding-right: 1rem;
          }

          .sidebar .nav-link {
              font-weight: 500;
              color: var(--bs-dark);
          }
          .sidebar .nav-link:hover {
              color: var(--bs-primary);
          }
        </style>
        <script type="text/javascript">
          document.addEventListener("DOMContentLoaded", function(){
            document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
              element.addEventListener('click', function (e) {
                let nextEl = element.nextElementSibling;
                let parentEl  = element.parentElement;	
                if(nextEl) {
                  e.preventDefault();	
                  let mycollapse = new bootstrap.Collapse(nextEl);
                  if(nextEl.classList.contains('show')){
                    mycollapse.hide();
                  } else {
                      mycollapse.show();
                      var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                      if(opened_submenu){
                        new bootstrap.Collapse(opened_submenu);
                      }
                    }
                }
              });
            })
          }); 
        </script>
    </head>
    <body class="bg-light">

      <header class="section-header py-3">
      <div class="container">
        <h2>Programación Web Dinámica</h2> 
      </div>
      </header>

      <div class="container">
        <section class="section-content py-3">
          <div class="row">
            <aside class="col-lg-3">
              <nav class="sidebar card py-2 mb-4">
                <ul class="nav flex-column" id="nav_accordion">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                  </li>
                  <li class="nav-item has-submenu">
                    <a class="nav-link" href="#">Trabajo Práctico 1<i class="fas fa-caret-down"></i> </a>
                    <ul class="submenu collapse">
                      <li><a class="nav-link" href="#">Ejercicio 1</a></li>
                        <li><a class="nav-link" href="#">Ejercicio 2 </a></li>
                        <li><a class="nav-link" href="#">Ejercicio 3 </a> </li>
                    </ul>
                  </li>
                  <li class="nav-item has-submenu">
                    <a class="nav-link" href="#">Trabajo Práctico 2<i class="fas fa-caret-down"></i> </a>
                    <ul class="submenu collapse">
                      <li><a class="nav-link" href="#">Ejercicio 1 </a></li>
                        <li><a class="nav-link" href="#">Ejercicio 2 </a></li>
                        <li><a class="nav-link" href="#">Ejercicio 3 </a></li>
                    </ul>
                  </li>
                  <li class="nav-item has-submenu">
                    <a class="nav-link" href="#">Trabajo Practico 3<i class="fas fa-caret-down"></i> </a>
                    <ul class="submenu collapse">
                      <li><a class="nav-link" href="#">Ejercicio 1</a></li>
                        <li><a class="nav-link" href="#">Ejercicio 2</a></li>
                        <li><a class="nav-link" href="#">Ejercicio 3</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Demo link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Demo link</a>
                  </li>
                </ul>
              </nav>
            </aside>
            <main class="col-lg-9">