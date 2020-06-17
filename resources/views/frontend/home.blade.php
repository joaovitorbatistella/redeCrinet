@extends('layouts.front')

@section('front-content')



            <div class="row content-first-block">
                <div class="col-md-6 col-one-first-block">
                    <div class="container-event-title">
                        <h2 class="event-title">Próximos eventos Rede Crinet</h2>
                    </div>

                <div class="row-schedule">
                    <div class="w3-content w3-display-container">

                    @foreach($events as $event)
                    <div class="mySlides">
                            <p class="event-title-frame">{{$event->title}}</p>
                            <p class="event-hour-frame">{{$event->description}}</p>
                            <p class="event-description-frame">{{\Carbon\Carbon::parse($event->scheduledto)->format('d/m/Y')}} às {{ \Carbon\Carbon::parse($event->scheduledto)->format('H:i')}}</p>
                        </div>
                    @endforeach

                        <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                        <button class="w3-button w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                    </div>
                </div>

                </div>
                <div class="col-md-6 col-two-first-block">
                    <div class="row">
                        <div class="col-md-12 player-frame">
                        <iframe width="1280" height="720" src="https://www.youtube.com/embed/EEIk7gwjgIM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row read-about">
                <div align="center" class="col-md-12">
                    <h1 style="color: white">Leia sobre:</h1>
                </div>
            </div>
            <section id="news">
            <div class="row content-search-block">
                <div class="col-md-12">
                    <div class="col-1">
                        <ul class="ul-left">
                            <li class="col-li-left">
                                <a id="religion" href="#news"><input hidden class="religionInput" value="religion" />Religião</a>
                            </li>
                            <li class="col-li-left">
                                <a id="culture" href="#news"><input hidden class="cultureInput" value="culture" />Cultura</a>
                            </li>
                            <li class="col-li-left">
                                <a id="society" href="#news"><input hidden class="societyInput" value="society" />Sociedade</a>
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
                                <a id="recreation" href="#news"><input hidden class="recreationInput" value="recreation" />Lazer</a>
                            </li>
                            <li class="col-li-right">
                                <a id="world" href="#news"><input hidden class="worldInput" value="world" />Mundo</a>
                            </li>
                            <li class="col-li-right">
                                <a id="lastNews" href="#news"><input hidden class="lastNewsInput" value="lastNews" />Últimas notícias</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row content-toggle">
                <div class="dropdown">
                    <h1 style="color: white">Jornal Crinet</h1>
                    <div class="dropdown-content">
                        <a id="religion-mobile" href="#news"><input hidden class="religionInput" value="religion" /><p class="content-option" >Religião</p>
                        <a id="culture-mobile" href="#news"><input hidden class="cultureInput" value="culture" /><p class="content-option" >Cultura</p></a>
                        <a id="society-mobile" href="#news"><input hidden class="societyInput" value="society" /><p class="content-option" >Sociedade</p></a>
                        <a id="recreation-mobile" href="#news"><input hidden class="recreationInput" value="recreation" /><p class="content-option" >Lazer</p></a>
                        <a id="world-mobile" href="#news"><input hidden class="worldInput" value="world" /><p class="content-option" >Mundo</p></a>
                        <a id="lastNews-mobile" href="#news"><input hidden class="lastNewsInput" value="lastNews" /><p class="content-option" >Últimas notícias</p></a>
                    </div>
                </div>
            </div>



                <div id="religionId" style="display: none" class="row news-container">
                    <div id="divReligion" class="row col-news-category">
                    </div>
                </div>

                <div id="cultureId" style="display: none" class="row news-container">
                    <div id="divCulture" class="row col-news-category">
                    </div>
                </div>

                <div id="societyId" style="display: none" class="row news-container">
                    <div id="divSociety" class="row col-news-category">
                    </div>
                </div>

                <div id="recreationId" style="display: none" class="row news-container">
                    <div id="divRecreation" class="row col-news-category">
                    </div>
                </div>

                <div id="worldId" style="display: none" class="row news-container">
                    <div id="divWorld" class="row col-news-category">
                    </div>
                </div>

                <div id="lastNewsId" style="display: none" class="row news-container">
                    <div id="divLastNews" class="row col-news-category">
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
                        <h2 class="about-title">Apoio Cultural</h2>
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
@endsection
