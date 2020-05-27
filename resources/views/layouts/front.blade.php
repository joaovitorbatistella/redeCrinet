<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


        <link rel="stylesheet" type="text/css" href="<?php echo asset('css/styled.css')?>">
        <title>Rede - Crinet</title>


    </head>
    <body>
        <div class="container-fluid .content-body">
            <div class="row">
                <div class="col-md-12 content-logo-bar">
                    <a target="_blank" href="http://facebook.com/redecrinet" ><img id="facebook-main" style="width: 50px" src="{{asset('images/facebook.png')}}" /></a>
                    <a href="/" ><img src="{{asset('images/logo.png')}}" /></a>
                    <a target="_blank" href="#" ><img id="youtube-main" style="width: 70px" src="{{asset('images/yt_logo.png')}}" /></a>
                </div>
            </div>

            <div class="row content-first-block">
                <div class="col-md-6 col-one-first-block">
                    <div class="container-event-title">
                        <h2 class="event-title">Próximos eventos Rede Crinet</h2>
                    </div>

                <div class="row-schedule">
                    <div class="w3-content w3-display-container">
                        <div class="mySlides">
                            <p class="event-title-frame">Missa da Paz de Cristo</p>
                            <p class="event-hour-frame">29/05/2020 às 18:00</p>
                            <p class="event-description-frame">Missa em celebração a Deus e ao povo</p>
                        </div>

                        <div class="mySlides">
                            <p class="event-title-frame">Título2</p>
                            <p class="event-hour-frame">Horário2</p>
                            <p class="event-description-frame">Descrição2</p>
                        </div>

                        <div class="mySlides">
                            <p class="event-title-frame">Título3</p>
                            <p class="event-hour-frame">Horário3</p>
                            <p class="event-description-frame">Descrição3</p>
                        </div>

                        <div class="mySlides">
                            <p class="event-title-frame">Título4</p>
                            <p class="event-hour-frame">Horário4</p>
                            <p class="event-description-frame">Descrição4</p>
                        </div>

                        <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                        <button class="w3-button w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                    </div>
                </div>

                </div>
                <div class="col-md-6 col-two-first-block">
                    <div class="row">
                        <div class="col-md-12 player-frame">
                            <iframe width="80%" height="400px" src="https://www.youtube.com/embed/gHhj3JNQKCo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row read-about">
                <div align="center" class="col-md-12">
                    <h1 style="color: white">Leia sobre:</h1>
                </div>
            </div>
            <div class="row content-search-block">
                <div class="col-md-12">
                    <div class="col-1">
                        <ul class="ul-left">
                            <li class="col-li-left">
                                <a id="religion" href="#news">Religião</a>
                            </li>
                            <li class="col-li-left">
                                <a href="">Política</a>
                            </li>
                            <li class="col-li-left">
                                <a href="">Sociedade</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-2">
                        <div class="poligonal">
                            <img src="{{asset('images/logo.png')}}" />
                        </div>
                    </div>
                    <div class="col-3">
                        <ul class="ul-right">
                            <li class="col-li-right">
                                <a href="#">Saúde</a>
                            </li>
                            <li class="col-li-right">
                                <a href="#">Educação</a>
                            </li>
                            <li class="col-li-right">
                                <a href="#">Dicas</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <section id="news">
                <div id="newsId" class="row news-container">
                    <div class="col-md-12">

                    </div>
                </div>
            </section>

            <div class="row content-about-block">
                <div class="col-md-9 col-about-left">
                    <h2 class="about-title">A rede Crinet!</h2>
                    <p class="retreat">
                    PsadksmdkladklsnfsnsdbfhkbfhksdfjkbsfsdjkbsdfhbsdjkfjsdkfjksdbfksdfjknsdfjknsdjkfhfmsdjnsdfjkbsdfjkbsdfbsdjfjsdfnsjkfnnjsdfnjksdfksdfjksdfjksdfjknsdfjknsdjkfnsdjkfnsjfnjksdfjksdfjksdfsdjkfsdjkfjksdbfjsdkbfjksdbfjksdfjksbfjdksbfjksfjksfjkdsbfkssdfsdnfsdksdfnonsdfonsodfdsdfssfdsfsdfsdfPsadksmdkldsnlsdfjjfnjksdfjksdfjksdfsdjkfsdjkfjksdbfjsdkbfjksdbfjksdfjksbfjdksbfjksfjksfjkdsbfkssdfsdnfsdksdfnonsdfonsodfdsdfssfdsfsdfsdfPsadksmdkldsnlsdfjlfhksfhkfkj
                    </p>
                </div>
                <div class="col-md-3 col-about-right">
                <figure>
                    <img src="{{asset('images/retrato.jpg')}}" />
                    <figcaption>Nome da pessoa</figcaption>
                </figure>
                </div>
            </div>

            <div class="row content-sponsor-block">
                <div class="row sponsor">
                    <div class="col-md-12">
                        <h2 class="about-title">Apoiadores</h2>
                    </div>
                </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="sponsor-logo">
                            <img src="assets/img/sponsors/1.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="sponsor-logo">
                            <img src="assets/img/sponsors/1.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="sponsor-logo">
                            <img src="assets/img/sponsors/1.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="sponsor-logo">
                            <img src="" alt="">
                        </div>
                    </div>


            </div>

        </div>

        <footer>
            <div class="footer-div">
                <p><strong>Designed and Built by:</strong> João Vítor Batistella</p>
                <a target="_blank" href="https://github.com/joaovitorbatistella"><img src="{{asset('images/github_white.png')}}" /><a>
                <a target="_blank" href="https://linkedin.com/in/joão-vítor-batistella-0aa300175"><img src="{{asset('images/linkedin.png')}}" /><a>
                <a target="_blank" href="https://facebook.com/joaovitorbatistella.batistellajoviba"><img src="{{asset('images/facebook.png')}}" /><a>
            </div>
            <div class="footer-div">
                <p><strong>Contribution from :</strong> Guilherme Barboza</p>
                <a class="a-sec" target="_blank" href="https://github.com/"><img src="{{asset('images/github_white.png')}}" /><a>
                <a class="a-sec" target="_blank" href="https://linkedin.com/"><img src="{{asset('images/linkedin.png')}}" /><a>
                <a class="a-sec" target="_blank" href="https://facebook.com/"><img src="{{asset('images/facebook.png')}}" /><a>
            </div>
        </footer>


        <!-- Scripts -->
        <script>
            $('#religion').on('click',function(){
                var a = document.getElementById("newsId");
                if (a.style.display === "none") {
                    a.style.display = "block";
                } else {
                    a.style.display = "none";
                }

            });

            var slideIndex = 1;
                showDivs(slideIndex);

            function plusDivs(n) {
                showDivs(slideIndex += n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                if (n > x.length) {slideIndex = 1}
                if (n < 1) {slideIndex = x.length}
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";

            }
                x[slideIndex-1].style.display = "block";
            }
        </script>
    </body>
</html>
