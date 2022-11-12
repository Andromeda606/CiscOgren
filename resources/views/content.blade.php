@php
    function get(){
        return "Deenenemee";
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

</head>
<body>
<menu>
    <ul>
        <li>{{$title}}</li>
    </ul>


</menu>
<div class="content">
    <p class="display-4">
        {{$title}}
        <qr>{!! QrCode::style("round")->gradient(255, 50, 50, 50,50, 255, "diagonal")->generate(url()->current()) !!}</qr>
    </p>
    <content>
        {!! $content !!}
    </content>

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
