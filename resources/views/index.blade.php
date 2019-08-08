<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>UTTICS</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">

  <link rel="stylesheet" href="css/index.css">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">UTTICS</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Proyectos</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="login">Entrar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center"  style="background-image:url('img/banner.jpg'); 
  background-repeat: no-repeat; width: auto; background-size: cover; height: 100%;
   width: 100% ;
   text-align: center;">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      {{-- <img class="masthead-avatar mb-5" src="img/avataaars.svg" alt=""> --}}

      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-uppercase mb-0" style="font-size: 35px;">Universidad Tecnológica de Torreón</h1>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0">Tecnologías de la información y comunicación</p>

    </div>
  </header>

  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="portfolio" style="background-color: #f2f2f2;">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Proyectos</h2>

      <div id="indexPage"  v-loading="loading">
        <section id="team" class="pb-5">
                <div class="container">
                    <div class="row">
                        <!-- Proyecto -->
                        <div class="col-xs-12 col-sm-6 col-md-4" v-for="project in projects">
                            <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                <div class="mainflip">
                                    <div class="frontside">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <p><img class=" img-fluid" src="img/projectlogo.png" alt="card image"></p>
                                                <h5 class="card-title">${project.username + '.uttics.com'}</h5>
                                                {{-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="backside">
                                        <div class="card">
                                            <div class="card-body text-center mt-4">
                                                <h4 class="card-title">${project.username + '.uttics.com'}</h4>
                                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <button class="btn btn-dark" @click="abrirProyecto(project.username)">Ver proyecto</button>
                                                {{-- <a :href="project.username + '.uttics.com'" target="_blank">Ver proyecto</a> --}}
                                                {{-- <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href="#">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href="#">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href="#">
                                                            <i class="fa fa-skype"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href="#">
                                                            <i class="fa fa-google"></i>
                                                        </a>
                                                    </li>
                                                </ul> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Proyecto -->       
                    </div>
                </div>
            </section>
   </div>

    </div>
  </section>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; UTTICS 2019</small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://unpkg.com/element-ui/lib/index.js"></script>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>
  <script>

    var index = new Vue({
        el: '#indexPage',
        data() {
            return {
                projects:[],
                loading: null
            }
        },
        mounted() {
            this.getProjects();
        },
        methods: {
            getProjects()
            {
                this.loading= true;
                axios.post('getProjects').then(response =>{
                    this.projects = response.data.msj;
                    this.loading = false;   
                });

            },
            abrirProyecto(proyecto)
            {
                window.location.href = 'http://'proyecto + '.uttics.com';
            }
        },
        delimiters:['${','}']
    });
</script>
</body>

</html>
