@extends('layouts.front')

@section('front-content')
<div class="row show-news-row">
            <div class="col-md-12" align="center">
                <h1 class="p-title"><strong>{{$result->title}}</strong></h1>
            </div>
        </div>
        <div class="row show-news-row">
            <div class="col-md-6">

                <p class="p-show p-author-updated_at"><strong>Editado por:</strong> {{$result->author}} em {{$result->updated_at_day}} às{{$result->updated_at_hour}}</p>
                <p class="p-show p-category"><strong>Categoria:</strong> {{$result->nameCategory}}</p>
                <p class="p-show p-body retreat"> {{$result->body}}</p>
                <p class="p-show p-source"><strong>Fonte:</strong> {{$result->source}}</p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="image-content w3-display-container">

                    @foreach($newsImage as $img)
                        <div class="mySlides">
                        <a class="example-image-link" href="https://app-rede-crinet.s3.amazonaws.com/{{$img->path}}" target="_blank">
                            <img class="example-image" width="100%" src="https://app-rede-crinet.s3.amazonaws.com/{{$img->path}}"/>
                        </a>
                        </div>
                    @endforeach

                        <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                        <button class="w3-button w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                    </div>
                </div>
            </div>
        </div>
@endsection
<script>
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
