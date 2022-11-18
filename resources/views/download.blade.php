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
<a href="https://github.com/Andromeda606/CiscOgren" class="github-corner" aria-label="View source on GitHub"><svg width="80" height="80" viewBox="0 0 250 250" style="fill:#fff; color:#151513; position: absolute; top: 0; border: 0; right: 0;" aria-hidden="true"><path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path><path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path><path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path></svg></a><style>.github-corner:hover .octo-arm{animation:octocat-wave 560ms ease-in-out}@keyframes octocat-wave{0%,100%{transform:rotate(0)}20%,60%{transform:rotate(-25deg)}40%,80%{transform:rotate(10deg)}}@media (max-width:500px){.github-corner:hover .octo-arm{animation:none}.github-corner .octo-arm{animation:octocat-wave 560ms ease-in-out}}</style>

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
