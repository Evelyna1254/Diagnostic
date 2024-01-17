<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/inicio.css">
    <title>Diagnostic</title>
    <style>
        :root {
    --white: #FFFFFF;
    --black: #000000;
    --text-input-field: #C7C7C7;
    --fondo: #F4F4F4;
    --hospital-green: #66C8BF;
    --green-ligth: #B3ECE7;
    --sm: 14px;
    --md: 16px;
    --lg: 18px;
  }
  body {
    margin: 0;
    font-family: 'Quicksand', sans-serif;
    background-color: var(--fondo);
  }
  nav {
    display: flex;
    justify-content: space-between;
    padding: 0 24px;
    border-bottom: 1px solid var(--very-light-pink);
    background-color: var(--green-ligth);
  }
 
  .logo {
    width: 206px;
  }
  .navbar-left ul,
  .navbar-right ul {
    list-style: none;
    padding: 0;
    margin:  0;
    display: flex;
    align-items: center;
    height: 60px;
  }
  .navbar-left {
    display: flex;
  }
  .navbar-left ul {
    margin-left: 12px;
  }
  .navbar-left ul li a {
    text-decoration: none;
    color: var(--black);
    padding: 8px;
  }
  .navbar-right ul li a {
    text-decoration: none;
    color: var(--black);
    border: 1px solid var(--hospital-green);
    background-color: var(--hospital-green);
    padding: 8px;
    border-radius: 8px;
  }
  .navbar-left ul li a:hover,
  .navbar-right ul li a:hover {
    border: 1px solid var(--black);
    border-radius: 8px;
  }
  .img_health{
    width: 100%;
    height: 450px;  
  }
  .cuadrado {
    position: absolute;
    width: 494px;
    height: 448px;
    left: 270px;
    top: 560px;
    background: #66C8BF;
  }
.estetoscopio{
    position: absolute;
    width: 494px;
    height: 448px;
    left: 635px;
    top: 645px;
}
.tittle{
    padding-left: 71px;
}
.text{
    padding: 15px 126px 0px 21px;
}
.main-container{
  position: relative;
  top: 600px;
}
.cards-container{
  display: grid;
  grid-template-columns: repeat(auto-fill,240px);
  gap: 26px;
  place-content: center;
}
.product-card{
  width: 240px;

}
.product-card img{
  width: 240px;
  height: 240px;
  border-radius: 20px;
  object-fit: cover;

}
.product-info{
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 12px;
  
}

.product-info div p:nth-child(1){
  font-weight: bold;
  font-size: var(--md);
  margin-top: 0;
  margin-bottom: 4px;
}
.product-info div p:nth-child(2){
  font-size: var(--sm);
  margin-top: 0;
  margin-bottom: 4;
  color: var(--black);
}
@media(max-width: 640px){
  .cards-container{
      grid-template-columns: repeat(auto-fill,140px);
  }
  .product-card{
      width: 140px;

  }
  .product-card img{
      width: 140px;
      height: 140px;

  }
}
.pie-pagina{
  width: 100%;
  background-color: var(--green-ligth);
  position: absolute;
  bottom: -1650px;
}
.pie-pagina .grupo-1{
  width: 100%;
  max-width: 1200px;
  margin: auto;
  display:grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap:50px;
  padding: 45px 0px;
}
.pie-pagina .grupo-1 .box figure{
  width: 100%;
  height: 100%;
  justify-content: center;
  align-items: center;
}
.pie-pagina .grupo-1 .box figure ul{
  list-style: none;
}
.pie-pagina .grupo-1 .box figure ul li a{
  text-decoration: none;
  color: var(--black);
}
.pie-pagina .grupo-1 .box h2{
  color: var(--black);
  margin-bottom: 25px;
  font-size: 20px;
}
.pie-pagina .grupo-1 .box p{
  color: var(--black);
  margin-bottom: 10px;
}
.pie-pagina .grupo-1 .red-social a img{
  display: inline-block;
  text-decoration: none;
  width: 45px;
  height: 45px;
  line-height: 45px;
  color: var(--black);
  margin-right: 10px;
  background-color: var(--hospital-green);
  text-align: center;
  transition: all 300ms ease;
}
.pie-pagina .grupo-1 .red-social a:hover{
  color: aqua;
}
.pie-pagina .grupo-2{
  background-color: var(--hospital-green);
  padding: 15px 10px;
  text-align: center;
  color: var(--black);
}
.pie-pagina .grupo-2 small{
  font-size: 15px;
}
@media screen and (max-width:800px){
  .pie-pagina .grupo-1{
      width: 90%;
      grid-template-columns: repeat(1, 1fr);
      grid-gap:30px;
      padding: 35px 0px;
  }
}
 
 
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="navbar-left">
                <a href="#"><img src="{{ URL::asset('img/logosinfondo.png') }}" alt="logo" class="logo"></a>
                <ul>
                    <li>
                      <a href="#">Inicio</a>
                    </li>
                    <li>
                      <a href="#acerca_de_nosotros">Acerca de nosotros</a>
                    </li>
                    <li>
                      <a href="#seccion">Servicios</a>
                    </li>
                  </ul>
            </div>
            <div class="navbar-right">
                <ul>
                  <li class="navbar-inicioseccion">
                    <a href="/login">Inicio de sesión</a>
                </li>
                </ul>
              </div>
        </nav>
    </header>
    <main>
        <div class=" banner">
            <img src="{{ URL::asset('img/health.jpg') }}" alt="health" class="img_health">
        </div>
        <div>
            <div class="cuadrado">
                <a name="acerca_de_nosotros">
                <h1 class="tittle">Acerca de nosotros</h1>
                <p class="text">La solución completa para profesionales latinoamericanos 
                    en el área de la salud, facilita el ejercicio de su práctica. 
                    Todas las herramientas necesarias para administrar eficientemente sus agendas, 
                    registrar la información de sus pacientes y sus diagnosticos.</p>
                </a>
            </div>
            <div>
                <img src="{{ URL::asset('img/estetoscopio.jpg') }}" alt="estetoscopio" class="estetoscopio">
            </div>
        </div>
        <section class="main-container">
            <a name="seccion">
            <h1 class="servicios">Servicios</h1>
            </a>
            <div class="cards-container">
                <div class="product-card">
                    <img src="{{ URL::asset('img/recetas.jpg') }}" alt="" class="product-img">
                    <div class="product-info">
                        <div>
                            <p>Recetas y Medicamentos</p>
                            <p>Usted podrá administrar su propio catálogo de medicamentos y productos. Además podrá imprimir las recetas en su formato predilecto.</p>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <img src="{{ URL::asset('img/pacientes.jpg') }}" alt="" class="product-img">
                    <div class="product-info">
                        <div>
                            <p>Pacientes</p>
                            <p>El módulo de pacientes le permitirá buscar, agregar, editar y eliminar pacientes. Podrá registrar los principales datos demográficos de interés así como la fotografía.</p>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <img src="{{ URL::asset('img/consultas.jpg') }}" alt="" class="product-img">
                    <div class="product-info">
                        <div>
                            <p>Consultas</p>
                            <p>Usted podrá registrar todos los elementos básicos de una consulta y mucho más.  Agregará continuamente más tipos de consultas para facilitar el trabajo a los médicos de diversas especialidades.</p>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <img src="{{ URL::asset('img/antecedentes.jpg') }}" alt="" class="product-img">
                    <div class="product-info">
                        <div>
                            <p>Antecedentes</p>
                            <p>Registre los antecedentes básicos de una persona, así como alergias y medicamentos. Además cuenta con una sección especializada para antecedentes perinatales.</p>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <img src="{{ URL::asset('img/diagnosticos.jpg') }}" alt="" class="product-img">
                    <div class="product-info">
                        <div>
                            <p>Diagnosticos</p>
                            <p>El módulo de diagnosticos le permitirá buscar, agregar, editar y eliminar diagnosticos. </p>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <img src="{{ URL::asset('img/agenda.jpg') }}" alt="" class="product-img">
                    <div class="product-info">
                        <div>
                            <p>Agenda</p>
                            <p>La agenda le permite administrar de una forma fácil, rápida e intuitiva las citas y consultas. Además usted podrá enviar recordatorios por correo electrónico y manejar su gestión de cobros.</p>
                        </div>
                    </div>
                </div>      
        </div>
    </section>   
    </main>
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <h2>MENÚ</h2>
                <figure>
                    <ul>
                        <li>
                          <a href="inicio.html">Inicio</a>
                        </li>
                        <li>
                          <a href="#acerca_de_nosotros">Acerca de nosotros</a>
                        </li>
                        <li>
                          <a href="#seccion">Servicios</a>
                        </li>
                    </ul>
                </figure>
            </div>
            <div class="box">
                <h2>CONTACTENOS</h2>
                <p>Gmail: soporte@diagnostic.com</p>
                <p>Telefono: (604)4598814</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"><img src="{{ URL::asset('img/facebook.png') }}" alt=""></a>
                    <a href="#" class="fa fa-instagram"><img src="{{ URL::asset('img/instagram.png') }}" alt=""></a>
                    <a href="#" class="fa fa-twitter"><img src="{{ URL::asset('img/twitter.png') }}" alt=""></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>Diagnostic</b> | Mapa del Sitio | Condiciones del Servicio | Políticas de Privacidad | Políticas de Seguridad</small>
        </div>
    </footer>     
</body>
</html>