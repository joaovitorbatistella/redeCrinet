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
                        <iframe width="1280" height="720" src="https://www.youtube.com/embed/JBDhaQIyX-8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                <a id="religion" value="religion" href="#news"><input hidden class="religionInput" value="religion" />Religião</a>
                            </li>
                            <li class="col-li-left">
                                <a id="policy" href="#news">Política</a>
                            </li>
                            <li class="col-li-left">
                                <a id="society" href="#news">Sociedade</a>
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
                                <a id="health" href="#news">Saúde</a>
                            </li>
                            <li class="col-li-right">
                                <a id="education" href="#news">Educação</a>
                            </li>
                            <li class="col-li-right">
                                <a id="tips" href="#news">Dicas</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <section id="news">
                <div id="religionId" style="display: none" class="row news-container">
                    <div id="divReligion" class="row col-news-category">
                    </div>
                </div>

                <div id="policyId" style="display: none" class="row news-container">
                    <div class="col-md-12 col-news-category">
                        <h1>Política</h1>
                    </div>
                </div>

                <div id="societyId" style="display: none" class="row news-container">
                    <div class="col-md-12 col-news-category">
                        <h1>Sociedade</h1>
                    </div>
                </div>

                <div id="healthId" style="display: none" class="row news-container">
                    <div class="col-md-12 col-news-category">
                        <h1>Saúde</h1>
                    </div>
                </div>

                <div id="educationId" style="display: none" class="row news-container">
                    <div class="col-md-12 col-news-category">
                        <h1>Educação</h1>
                    </div>
                </div>

                <div id="tipsId" style="display: none" class="row news-container">
                    <div class="col-md-12 col-news-category">
                        <h1>Dicas</h1>
                    </div>
                </div>
            </section>

            <div class="row content-toggle">
                <div class="dropdown">
                    <h1 style="color: white">Jornal Crinet</h1>
                    <div class="dropdown-content">
                        <a id="religion-mobile" href="#news"><input hidden class="religionInput" value="religion" /><p class="content-option" >Religião</p>
                        <a id="a-mobile" href="#"><p class="content-option" >Política</p>
                        <a id="b-mobile" href="#"><p class="content-option" >Sociedade</p>
                        <a id="c-mobile" href="#"><p class="content-option" >Saúde</p>
                        <a id="d-mobile" href="#"><p class="content-option" >Educação</p>
                        <a id="e-mobile" href="#"><p class="content-option" >Dicas</p>
                    </div>
                </div>
            </div>

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
            $('#religion-mobile,#religion').on('click',function(){
                var a = document.getElementById("religionId");
                var b = document.getElementById("policyId");
                var c = document.getElementById("societyId");
                var d = document.getElementById("healthId");
                var e = document.getElementById("educationId");
                var f = document.getElementById("tipsId");
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

            $('#policy').on('click',function(){
                var a = document.getElementById("religionId");
                var b = document.getElementById("policyId");
                var c = document.getElementById("societyId");
                var d = document.getElementById("healthId");
                var e = document.getElementById("educationId");
                var f = document.getElementById("tipsId");
                if (b.style.display === "none") {

                    var policyVar = $(this).find('input#policyInput').val();


                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "{{ route('ajax.home') }}",
                        type: "POST",
                        data: {title: policyVar},
                        dataType: 'json',
                        success: function(response) {
                            $.each(response, function(index, item) {
                                const {title, body, author, source, image} = item;
                                $("#divPolicy").append('<div class="news-flag col-md-6"><p class="policy-news">'+title+'</p><p class="policy-news">'+body+'</p><p class="policy-news">'+author+'</p><p class="policy-news">'+source+'</p><img width="300px" src="'+image+'" /></div>');

                            });
                        }
                    });

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

            $('#society').on('click',function(){
                var a = document.getElementById("religionId");
                var b = document.getElementById("policyId");
                var c = document.getElementById("societyId");
                var d = document.getElementById("healthId");
                var e = document.getElementById("educationId");
                var f = document.getElementById("tipsId");
                if (c.style.display === "none") {

                    var societyVar = $(this).find('input#societyInput').val();


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
                                const {title, body, author, source, image} = item;
                                $("#divSociety").append('<div class="news-flag"><p class="society-news">'+title+'</p><p class="society-news">'+body+'</p><p class="society-news">'+author+'</p><p class="society-news">'+source+'</p><img width="300px" src="'+image+'" /></div>');

                            });
                        }
                    });

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

            $('#health').on('click',function(){
                var a = document.getElementById("religionId");
                var b = document.getElementById("policyId");
                var c = document.getElementById("societyId");
                var d = document.getElementById("healthId");
                var e = document.getElementById("educationId");
                var f = document.getElementById("tipsId");

                if (d.style.display === "none") {

                    var healthVar = $(this).find('input#healthInput').val();


                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "{{ route('ajax.home') }}",
                        type: "POST",
                        data: {title: healthVar},
                        dataType: 'json',
                        success: function(response) {
                            $.each(response, function(index, item) {
                                const {title, body, author, source, image} = item;
                                $("#divHealth").append('<div class="news-flag"><p class="health-news">'+title+'</p><p class="health-news">'+body+'</p><p class="health-news">'+author+'</p><p class="health-news">'+source+'</p><img width="300px" src="'+image+'" /></div>');

                            });
                        }
                    });

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

            $('#education').on('click',function(){
                var a = document.getElementById("religionId");
                var b = document.getElementById("policyId");
                var c = document.getElementById("societyId");
                var d = document.getElementById("healthId");
                var e = document.getElementById("educationId");
                var f = document.getElementById("tipsId");
                if (e.style.display === "none") {

                    var educationVar = $(this).find('input#educationInput').val();

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "{{ route('ajax.home') }}",
                        type: "POST",
                        data: {title: educationVar},
                        dataType: 'json',
                        success: function(response) {
                            $.each(response, function(index, item) {
                                const {title, body, author, source, image} = item;
                                $("#divEducation").append('<div class="news-flag"><p class="education-news">'+title+'</p><p class="education-news">'+body+'</p><p class="education-news">'+author+'</p><p class="education-news">'+source+'</p><img width="300px" src="'+image+'" /></div>');

                            });
                        }
                    });

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

            $('#tips').on('click',function(){
                var a = document.getElementById("religionId");
                var b = document.getElementById("policyId");
                var c = document.getElementById("societyId");
                var d = document.getElementById("healthId");
                var e = document.getElementById("educationId");
                var f = document.getElementById("tipsId");
                if (f.style.display === "none") {

                    var tipsVar = $(this).find('input#tipsInput').val();

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "{{ route('ajax.home') }}",
                        type: "POST",
                        data: {title: tipsVar},
                        dataType: 'json',
                        success: function(response) {
                            $.each(response, function(index, item) {
                                const {title, body, author, source, image} = item;
                                $("#divTips").append('<div class="news-flag"><p class="tips-news">'+title+'</p><p class="tips-news" >'+body+'</p><p class="tips-news">'+author+'</p><p class="tips-news">'+source+'</p><img width="300px" src="'+image+'" /></div>');

                            });
                        }
                    });

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
