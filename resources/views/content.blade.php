@php
    function check($class){
        if($class->path == "#"){
            return "opacity: 0";
        }
        return "opacity: 1";
    }
@endphp
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{$title}}</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
    <link href="{{asset("/css/content.css")}}" rel="stylesheet">
    <link href="{{asset("/css/style/theme.css")}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" rel="stylesheet">

</head>
<body>
<menu>
    <ul>
        <li>{{$title}}</li>
    </ul>


</menu>
<a href="https://github.com/Andromeda606/CiscOgren" class="github-corner" aria-label="View source on GitHub">
    <svg width="80" height="80" viewBox="0 0 250 250"
         style="fill:#7d00f2; color:#fff; position: fixed; top: 0; border: 0; right: 0;" aria-hidden="true">
        <path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path>
        <path
            d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2"
            fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path>
        <path
            d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z"
            fill="currentColor" class="octo-body"></path>
    </svg>
</a>
<style>.github-corner:hover .octo-arm {
        animation: octocat-wave 560ms ease-in-out
    }

    @keyframes octocat-wave {
        0%, 100% {
            transform: rotate(0)
        }
        20%, 60% {
            transform: rotate(-25deg)
        }
        40%, 80% {
            transform: rotate(10deg)
        }
    }

    @media (max-width: 500px) {
        .github-corner:hover .octo-arm {
            animation: none
        }

        .github-corner .octo-arm {
            animation: octocat-wave 560ms ease-in-out
        }
    }</style>

<div class="content">
    <p class="display-4">
        {{$title}}
        <qr>{!! QrCode::style("round")->gradient(255, 50, 50, 50,50, 255, "diagonal")->generate(url()->current()) !!}</qr>
    </p>
    <content>
        {!! $content !!}
    </content>
    <pagination>
        <a style="{{check($prev)}}" href="{{$prev->path}}">{{$prev->title}}</a>
        <a style="{{check($next)}}" href="{{$next->path}}">{{$next->title}}</a>
    </pagination>

</div>
<footer class="footer">
    <div>
        <h4>Ramazan Akbal</h4>
        <h6>Bilgisayar Teknolojisi bölümü öğrencisi</h6>
    </div>
    <h4>Proje ödevi İçin Sevgiyle Oluşturuldu</h4>
</footer>

<script src="{{asset("/js/render.js")}}"></script>
<script>
</script>
</body>
</html>
