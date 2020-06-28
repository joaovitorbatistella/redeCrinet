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

        <link href="{{asset('css/lightbox.min.css')}}" rel="stylesheet" />

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
    @yield('front-content')
    </div>
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
                                if(response.length === 0){
                                    alert('Não há notícias desta categoria para lhe mostrar no momento!');
                                } else {
                                    $.each(response, function(index, item) {
                                        const {title, body, author, source, image, updated_at, created_at, images, uuid} = item;
                                        const path = images[0].path;

                                        $("#divReligion").append('<div class="news-flag col-md-12"><h1 class="religion-news title-news" style="text-align: center">'+title+'</h1><div class="col-md-7 cfi-first"><p class="religion-news author-news" style="font-size: 15px">'+updated_at+' por '+author+'</p><p class="religion-news  body-news retreat">'+body+'</p><p class="religion-news source-news" style="font-size: 15px"><strong>Fonte: </strong>'+source+'</p></div><div class="col-md-5 cfi-second"><a href="news/show/'+uuid+'"><img src="https://app-rede-crinet.s3.amazonaws.com/'+path+'" /></a></div></div>');
                                    });
                                }
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
                                if(response.length === 0){
                                    alert('Não há notícias desta categoria para lhe mostrar no momento!');
                                } else {
                                    $.each(response, function(index, item) {
                                        const {title, body, author, source, image, updated_at, created_at} = item;

                                        $("#divCulture").append('<div class="news-flag col-md-12"><h1 class="culture-news title-news" style="text-align: center">'+title+'</h1><div class="col-md-7 cfi-first"><p class="culture-news author-news" style="font-size: 15px">'+updated_at+' por '+author+'</p><p class="culture-news  body-news retreat">'+body+'</p><p class="culture-news source-news" style="font-size: 15px"><strong>Fonte: </strong>'+source+'</p></div><div class="col-md-5 cfi-second"><img src="'+image+'" /></div></div>');

                                    });
                                }
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
                                if(response.length === 0){
                                    alert('Não há notícias desta categoria para lhe mostrar no momento!');
                                } else {
                                    $.each(response, function(index, item) {
                                        const {title, body, author, source, image, updated_at, created_at} = item;

                                        $("#divSociety").append('<div class="news-flag col-md-12"><h1 class="society-news title-news" style="text-align: center">'+title+'</h1><div class="col-md-7 cfi-first"><p class="society-news author-news" style="font-size: 15px">'+updated_at+' por '+author+'</p><p class="society-news  body-news retreat">'+body+'</p><p class="society-news source-news" style="font-size: 15px"><strong>Fonte: </strong>'+source+'</p></div><div class="col-md-5 cfi-second"><img src="'+image+'" /></div></div>');

                                    });
                                }
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
                                if(response.length === 0){
                                    alert('Não há notícias desta categoria para lhe mostrar no momento!');
                                } else {
                                    $.each(response, function(index, item) {
                                    const {title, body, author, source, image, updated_at, created_at} = item;

                                    $("#divRecreation").append('<div class="news-flag col-md-12"><h1 class="recreation-news title-news" style="text-align: center">'+title+'</h1><div class="col-md-7 cfi-first"><p class="recreation-news author-news" style="font-size: 15px">'+updated_at+' por '+author+'</p><p class="recreation-news  body-news retreat">'+body+'</p><p class="recreation-news source-news" style="font-size: 15px"><strong>Fonte: </strong>'+source+'</p></div><div class="col-md-5 cfi-second"><img src="'+image+'" /></div></div>');

                                });
                                }
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

                                if(response.length === 0){
                                    alert('Não há notícias desta categoria para lhe mostrar no momento!');
                                } else {
                                    $.each(response, function(index, item) {
                                        const {title, body, author, source, image, updated_at, created_at} = item;

                                        $("#divWorld").append('<div class="news-flag col-md-12"><h1 class="World-news title-news" style="text-align: center">'+title+'</h1><div class="col-md-7 cfi-first"><p class="World-news author-news" style="font-size: 15px">'+updated_at+' por '+author+'</p><p class="World-news  body-news retreat">'+body+'</p><p class="World-news source-news" style="font-size: 15px"><strong>Fonte: </strong>'+source+'</p></div><div class="col-md-5 cfi-second"><img src="'+image+'" /></div></div>');

                                    });
                                }
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
                                if(response.length === 0){
                                    alert('Não há notícias desta categoria para lhe mostrar no momento!');
                                } else {
                                    $.each(response, function(index, item) {
                                        const {title, body, author, source, image, updated_at, created_at} = item;

                                        $("#divLastNews").append('<div class="news-flag col-md-12"><h1 class="lastNews-news title-news" style="text-align: center">'+title+'</h1><div class="col-md-7 cfi-first"><p class="lastNews-news author-news" style="font-size: 15px">'+updated_at+' por '+author+'</p><p class="lastNews-news  body-news retreat">'+body+'</p><p class="lastNews-news source-news" style="font-size: 15px"><strong>Fonte: </strong>'+source+'</p></div><div class="col-md-5 cfi-second"><img src="'+image+'" /></div></div>');

                                    });
                                }
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
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
    </body>
</html>
