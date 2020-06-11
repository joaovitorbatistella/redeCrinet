<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>

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
            $('#religion-mobile,#religion').on('click',function(){
                var a = document.getElementById("religionId");
                var b = document.getElementById("cultureId");
                var c = document.getElementById("societyId");
                var d = document.getElementById("recreationId");
                var e = document.getElementById("worldId");
                var f = document.getElementById("lastNewsId");
                if (a.style.display === "none") {

                    event.preventDefault();

                    if (!$(".religion-news").length){

                        var religionVar = $(this).find('input.religionInput').val();


                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: "{{ route('ajax.home') }}",
                            type: "POST",
                            data: {title: religionVar},
                            dataType: 'json',
                            success: function(response) {
                                $.each(response, function(index, item) {
                                    const {title, body, author, source, image, updated_at, created_at} = item;

                                    console.log(item);

                                    $("#divReligion").append('<div class="news-flag col-md-12"><h1 class="religion-news title-news" style="text-align: center">'+title+'</h1><div class="col-md-7 cfi-first"><p class="religion-news author-news" style="font-size: 15px">'+updated_at+' por '+author+'</p><p class="religion-news  body-news retreat">'+body+'</p><p class="religion-news source-news" style="font-size: 15px"><strong>Fonte: </strong>'+source+'</p></div><div class="col-md-5 cfi-second"><img src="'+image+'" /></div></div>');

                                });
                            }
                        });

                    }

                    a.style.display = "block";
                    b.style.display = "none";
                    c.style.display = "none";
                    d.style.display = "none";
                    e.style.display = "none";
                    f.style.display = "none";
                } else {
                    a.style.display = "none";
                    b.style.display = "none";
                    c.style.display = "none";
                    d.style.display = "none";
                    e.style.display = "none";
                    f.style.display = "none";
                }

            });

            $('#culture-mobile,#culture').on('click',function(){
                var a = document.getElementById("religionId");
                var b = document.getElementById("cultureId");
                var c = document.getElementById("societyId");
                var d = document.getElementById("recreationId");
                var e = document.getElementById("worldId");
                var f = document.getElementById("lastNewsId");
                if (b.style.display === "none") {

                    event.preventDefault();

                    if (!$(".culture-news").length){

                        var cultureVar = $(this).find('input.cultureInput').val();


                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: "{{ route('ajax.home') }}",
                            type: "POST",
                            data: {title: cultureVar},
                            dataType: 'json',
                            success: function(response) {
                                $.each(response, function(index, item) {
                                    const {title, body, author, source, image, updated_at, created_at} = item;

                                    console.log(item);

                                    $("#divCulture").append('<div class="news-flag col-md-12"><h1 class="culture-news title-news" style="text-align: center">'+title+'</h1><div class="col-md-7 cfi-first"><p class="culture-news author-news" style="font-size: 15px">'+updated_at+' por '+author+'</p><p class="culture-news  body-news retreat">'+body+'</p><p class="culture-news source-news" style="font-size: 15px"><strong>Fonte: </strong>'+source+'</p></div><div class="col-md-5 cfi-second"><img src="'+image+'" /></div></div>');

                                });
                            }
                        });

                    }

                    a.style.display = "none";
                    b.style.display = "block";
                    c.style.display = "none";
                    d.style.display = "none";
                    e.style.display = "none";
                    f.style.display = "none";
                } else {
                    a.style.display = "none";
                    b.style.display = "none";
                    c.style.display = "none";
                    d.style.display = "none";
                    e.style.display = "none";
                    f.style.display = "none";
                }

            });

            $('#society-mobile,#society').on('click',function(){
                var a = document.getElementById("religionId");
                var b = document.getElementById("cultureId");
                var c = document.getElementById("societyId");
                var d = document.getElementById("recreationId");
                var e = document.getElementById("worldId");
                var f = document.getElementById("lastNewsId");
                if (c.style.display === "none") {

                    event.preventDefault();

                    if (!$(".society-news").length){

                        var societyVar = $(this).find('input.societyInput').val();


                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: "{{ route('ajax.home') }}",
                            type: "POST",
                            data: {title: societyVar},
                            dataType: 'json',
                            success: function(response) {
                                $.each(response, function(index, item) {
                                    const {title, body, author, source, image, updated_at, created_at} = item;

                                    console.log(item);

                                    $("#divSociety").append('<div class="news-flag col-md-12"><h1 class="society-news title-news" style="text-align: center">'+title+'</h1><div class="col-md-7 cfi-first"><p class="society-news author-news" style="font-size: 15px">'+updated_at+' por '+author+'</p><p class="society-news  body-news retreat">'+body+'</p><p class="society-news source-news" style="font-size: 15px"><strong>Fonte: </strong>'+source+'</p></div><div class="col-md-5 cfi-second"><img src="'+image+'" /></div></div>');

                                });
                            }
                        });

                    }

                    a.style.display = "none";
                    b.style.display = "none";
                    c.style.display = "block";
                    d.style.display = "none";
                    e.style.display = "none";
                    f.style.display = "none";
                } else {
                    a.style.display = "none";
                    b.style.display = "none";
                    c.style.display = "none";
                    d.style.display = "none";
                    e.style.display = "none";
                    f.style.display = "none";
                }

            });

            $('#recreation-mobile,#recreation').on('click',function(){
                var a = document.getElementById("religionId");
                var b = document.getElementById("cultureId");
                var c = document.getElementById("societyId");
                var d = document.getElementById("recreationId");
                var e = document.getElementById("worldId");
                var f = document.getElementById("lastNewsId");
                if (d.style.display === "none") {

                    event.preventDefault();

                    if (!$(".recreation-news").length){

                        var recreationVar = $(this).find('input.recreationInput').val();


                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: "{{ route('ajax.home') }}",
                            type: "POST",
                            data: {title: recreationVar},
                            dataType: 'json',
                            success: function(response) {
                                $.each(response, function(index, item) {
                                    const {title, body, author, source, image, updated_at, created_at} = item;

                                    console.log(item);

                                    $("#divRecreation").append('<div class="news-flag col-md-12"><h1 class="recreation-news title-news" style="text-align: center">'+title+'</h1><div class="col-md-7 cfi-first"><p class="recreation-news author-news" style="font-size: 15px">'+updated_at+' por '+author+'</p><p class="recreation-news  body-news retreat">'+body+'</p><p class="recreation-news source-news" style="font-size: 15px"><strong>Fonte: </strong>'+source+'</p></div><div class="col-md-5 cfi-second"><img src="'+image+'" /></div></div>');

                                });
                            }
                        });

                    }

                    a.style.display = "none";
                    b.style.display = "none";
                    c.style.display = "none";
                    d.style.display = "block";
                    e.style.display = "none";
                    f.style.display = "none";
                } else {
                    a.style.display = "none";
                    b.style.display = "none";
                    c.style.display = "none";
                    d.style.display = "none";
                    e.style.display = "none";
                    f.style.display = "none";
                }

            });

            $('#world-mobile,#world').on('click',function(){
                var a = document.getElementById("religionId");
                var b = document.getElementById("cultureId");
                var c = document.getElementById("societyId");
                var d = document.getElementById("recreationId");
                var e = document.getElementById("worldId");
                var f = document.getElementById("lastNewsId");
                if (e.style.display === "none") {

                    event.preventDefault();

                    if (!$(".world-news").length){

                        var worldVar = $(this).find('input.worldInput').val();


                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: "{{ route('ajax.home') }}",
                            type: "POST",
                            data: {title: worldVar},
                            dataType: 'json',
                            success: function(response) {
                                $.each(response, function(index, item) {
                                    const {title, body, author, source, image, updated_at, created_at} = item;

                                    console.log(item);

                                    $("#divWorld").append('<div class="news-flag col-md-12"><h1 class="World-news title-news" style="text-align: center">'+title+'</h1><div class="col-md-7 cfi-first"><p class="World-news author-news" style="font-size: 15px">'+updated_at+' por '+author+'</p><p class="World-news  body-news retreat">'+body+'</p><p class="World-news source-news" style="font-size: 15px"><strong>Fonte: </strong>'+source+'</p></div><div class="col-md-5 cfi-second"><img src="'+image+'" /></div></div>');

                                });
                            }
                        });

                    }

                    a.style.display = "none";
                    b.style.display = "none";
                    c.style.display = "none";
                    d.style.display = "none";
                    e.style.display = "block";
                    f.style.display = "none";
                } else {
                    a.style.display = "none";
                    b.style.display = "none";
                    c.style.display = "none";
                    d.style.display = "none";
                    e.style.display = "none";
                    f.style.display = "none";
                }

            });

            $('#lastNews-mobile,#lastNews').on('click',function(){
                var a = document.getElementById("religionId");
                var b = document.getElementById("cultureId");
                var c = document.getElementById("societyId");
                var d = document.getElementById("recreationId");
                var e = document.getElementById("worldId");
                var f = document.getElementById("lastNewsId");
                if (f.style.display === "none") {

                    event.preventDefault();

                    if (!$(".lastNews-news").length){

                        var lastNewsVar = $(this).find('input.lastNewsInput').val();


                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: "{{ route('ajaxAll.home') }}",
                            type: "POST",
                            data: {title: lastNewsVar},
                            dataType: 'json',
                            success: function(response) {
                                $.each(response, function(index, item) {
                                    const {title, body, author, source, image, updated_at, created_at} = item;

                                    console.log(item);

                                    $("#divLastNews").append('<div class="news-flag col-md-12"><h1 class="lastNews-news title-news" style="text-align: center">'+title+'</h1><div class="col-md-7 cfi-first"><p class="lastNews-news author-news" style="font-size: 15px">'+updated_at+' por '+author+'</p><p class="lastNews-news  body-news retreat">'+body+'</p><p class="lastNews-news source-news" style="font-size: 15px"><strong>Fonte: </strong>'+source+'</p></div><div class="col-md-5 cfi-second"><img src="'+image+'" /></div></div>');

                                });
                            }
                        });

                    }

                    a.style.display = "none";
                    b.style.display = "none";
                    c.style.display = "none";
                    d.style.display = "none";
                    e.style.display = "none";
                    f.style.display = "block";
                } else {
                    a.style.display = "none";
                    b.style.display = "none";
                    c.style.display = "none";
                    d.style.display = "none";
                    e.style.display = "none";
                    f.style.display = "none";
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
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
    </body>
</html>
