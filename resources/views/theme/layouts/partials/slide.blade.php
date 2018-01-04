{{--<div id="carouselExampleIndicators" class="carousel slide fade-carousel" data-ride="carousel" data-interval="4000">--}}
    {{--@if(count($banners) > 1)--}}
        {{--<ol class="carousel-indicators">--}}
            {{--@foreach($banners as $key => $value)--}}
                {{--@if($key == 0)--}}
                    {{--<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>--}}
                {{--@else--}}
                    {{--<li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}"></li>--}}
                {{--@endif--}}
            {{--@endforeach--}}
        {{--</ol>--}}
    {{--@endif--}}
    {{--<div class="carousel-inner" role="listbox">--}}
        {{--<!-- Slide One - Set the background image for this slide in the line below -->--}}
        {{--@foreach($banners as $key => $value)--}}
            {{--@if($key == 0)--}}
                {{--<div class="carousel-item active" style="background-image: url('{{ asset('images/banners/'. $value->image) }}')">--}}
                    {{--<div class="carousel-caption d-none d-md-block">--}}
                        {{--<img src="{{ asset('images/title.png') }}">--}}
                        {{--<p class="text-caption">{{ $value->caption }}</p>--}}
                        {{--<a class="btn btn-xl js-scroll-trigger" href="{{ $value->url }}"><span style="font-weight: 200;">Get Started </span><img src="{{ asset('images/arrow-right.png') }}" class="cs-img"></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--@else--}}
                {{--<div class="carousel-item" style="background-image: url('{{ asset('images/banners/'. $value->image) }}')">--}}
                    {{--<div class="carousel-caption d-none d-md-block">--}}
                        {{--<img src="{{ asset('images/title.png') }}">--}}
                        {{--<p class="text-caption">{{ $value->caption }}</p>--}}
                        {{--<a class="btn btn-xl js-scroll-trigger" href="{{ $value->url }}"><span style="font-weight: 200;">Get Started </span><img src="{{ asset('images/arrow-right.png') }}" class="cs-img"></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--@endif--}}
        {{--@endforeach--}}
    {{--</div>--}}
    {{--@if(count($banners) > 1)--}}
    {{--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">--}}
        {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
        {{--<span class="sr-only">Previous</span>--}}
    {{--</a>--}}
    {{--<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">--}}
        {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
        {{--<span class="sr-only">Next</span>--}}
    {{--</a>--}}
    {{--@endif--}}
{{--</div>--}}