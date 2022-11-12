<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cisco Packet</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="/css/download.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
</head>
<body>
<div id="particles-js">
</div>
<div class="panel">
    <h1>Cisco Packet Manager</h1>
    <h4>Programı direkt indirebilir veya direkt hesap açabilirsiniz.</h4>
    <div>
        <h3 class="modal-btn" data-target="downloadModal">İndir</h3>
        <h3 class="modal-btn" data-target="newAccountModal">Cisco'ya Üye Ol</h3>

        <div id="downloadModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" data-target="downloadModal">&times;</span>
                    <h1>Cisco İndir</h1>
                </div>
                <div class="modal-body flexing">
                    @foreach($devices as $name => $args)
                        <div>
                            <img src="/img/{{$args["img"]}}.svg" width="150" height="150" alt="{{$args["img"]}}">
                            <h2>{{$name}}</h2>
                            <div class="downloads">
                                @foreach($args["download"] as $nameArg => $link)
                                    <a href="https://resources.ciscogren.com.tr/CiscoPacketTracer_{{$version}}_{{$name}}_{{$link}}">
                                        <h3>{{$nameArg}}</h3>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>

        <div id="newAccountModal" class="modal" style="top:0">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" data-target="newAccountModal">&times;</span>
                    <h1>Cisco'ya Üye Ol</h1>
                </div>
                <div class="modal-body">
                    <h2 id="mailpass"></h2>
                    <img id="mailpassStat" src="/img/detail.png" style="width: 85%; display: none"/>
                </div>
            </div>

        </div>
    </div>

</div>


<script src="/js/background.js"></script>
</body>
</html>
