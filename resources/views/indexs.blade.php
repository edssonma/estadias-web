<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UTTICS PROYECTOS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body style="background-color: #f2f2f2;">
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
                                                    <h4 class="card-title">${project.username + '.' + project.domain}</h4>
                                                    {{-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="backside">
                                            <div class="card">
                                                <div class="card-body text-center mt-4">
                                                    <h4 class="card-title">${project.username + '.' + project.domain}</h4>
                                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <button class="btn btn-dark">Ver proyecto</button>
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

                
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/element-ui/lib/index.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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

            }
        },
        delimiters:['${','}']
    });
</script>
</body>
</html>