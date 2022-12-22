<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Page;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            "id"=>1,
            "path"=>'selectableMenu',
            "content"=>'<p>Cihazı Eklemenin 2 Yolu vardır. Bunlar;</p>
                        <ol>
                        <li>Sürükle bırak</li>
                        <li>Tıklama yoluyla</li>
                        </ol>
                        <h2>Sürükle bırak</h2>
                        Sürüklemek için cihaza fareyi basılı tutarak yukarı kaydırabiliriz.
                        <gif>select-wait</gif>
                        <h2>Tıklama yoluyla</h2>
                        Bu yolda cihaza basıyoruz ve çalışma ortamına, eklenmesini istediğimiz bölgeye tıklıyoruz.
                        <gif>select-click</gif>',
            "title"=>'Cihaz Eklemek'
        ]);

        Page::create([
            "id"=>2,
            "path"=>'selectModule',
            "content"=>'<p>Modülleri sürükle bırak yaparak ekleyebilirsiniz. Ancak öncelikle cihazı kapatmanız gerekir.</p>
<p>Öncelikle bir GIF ile bu durumu açıklayalım;</p>
<gif>select-module</gif>
<p>Gördüğünüz üzere cihazı ekleme işlemi bu şekilde olabilir. Modülü ilgili menüden seçip sonra sürüklemeniz durumunda modül eklenebiliyor.</p>',
            "title"=>'Cihaza modül nasıl takılır?'
        ]);

        Page::create([
            "id"=>3,
            "path"=>'firstProject',
            "content"=>'<p>Hadi başlayalım!<br>Öncelikle yapacağımız şeyler oldukça basit. Öncelikle Laptop ekleyelim, Laptop ekleme işlemini aşağıdaki GIFde görebilirsiniz.</p>
<gif>first-select</gif>
<p>Laptopları ekledikten sonra kabloları bağlayalım. Kablo bağlama işlemide daha önceden gösterildiği şekilde yapılacak, eklenecektir.</p>
<gif>first-cable</gif>
<p>İşte bu kadar! İsterseniz dosyayı aşağıdan indirebilir ve örneğe bakabilirsiniz.</p>
<download>project1.pkt</download>',
            "title"=>'İlk Proje'
        ]);

        Page::create([
            "id"=>4,
            "path"=>'starTopology',
            "content"=>'<p>Yıldız topolojisini oluşturmaya başlayalım. Yıldız topolojisini oluşturmak için temel gereken sistem Switch ve son kullanıcı eşyalarıdır. Son kullanıcı eşyalarından 6 tane ve 1 switchden oluşan bir tasarımı yapacağız.</p>
<p>Öncelikle.. Programı açalım ve teker teker <a href="/selectableMenu">bilgisayarları ekleyelim</a>. GIF aşağıda!</p>
<gif>topology-star1</gif>
<p>Cihazları ekledik. Şimdi sıra switchde.</p>
<img src=\'/gif/topology-star2.gif\' />
<p>Kurduktan sonra kablolama ile bağlayalım. </p>
<img src=\'/gif/topology-star3.gif\' />
<p>En son kısımda olan durum ise farklı.. Farkında iseniz en sonki bilgisayara herhangi bir kablo koyamıyoruz. Kablo koyarken en sondaki için modül yetmiyor. Dolayısıyla modülü yükleyelim</p>
<img src=\'/img/content/star-success.png\'/>
<p>Başardık! Eğer isterseniz dosyayı indirebilirsiniz.</p>
<download>star-topology.pkt</download>
',
            "title"=>'Topolojiler - Yıldız Topolojisi'
        ]);

        Page::create([
            "id"=>5,
            "path"=>'busTopology',
            "content"=>'Cisco Packet Tracer Bus topolojisi yapmamıza izin vermediğinden, temsili bir topoloji olacak.</p>
<p>Öncelikle yeni dosya açalım ve cihazları ekleyelim.</p>
<png>bus/step1</png>
<p>İsimleri daha önceden anlatıldığı şekilde değiştirelim.</p>
<png>bus/step2</png>
<p>Bus topolojisinde en önemli kablo türü “T-Konnektör” dür. Ancak başta da bahsettiğim gibi hiçbir şekilde bunu Cisco Packet Tracer uygulamasına ekleyemiyoruz. Dolayısıyla yapacağımız şey Switch eklemek olacaktır. Switch temsili olduğundan odaklanmaya gerek yoktur.</p>
<png>bus/step3</png>
<p>Terminator dediğimiz şeyler bus topolojisindeki sonlandırıcıdır. Bunlar kabloların başlangıç ve sonunu temsil eder. Şimdi kablolama ve renklendirme yapalım. Kablolama bus topolojisinde genelde koaksiyel kablodur. Fakat biz programda bilgisayara direkt bağlayamıyoruz. Bu yüzden bakır kablo kullanacağız.</p>
<png>bus/step4</png>
<p>Şimdi <a href="/changeIp">IP Tanımlaması yapalım</a> ve ping atalım.</p>
<png>bus/step5</png>
<p>İsterseniz Bus topolojisinin dosyasını aşağıdan indirebilirsiniz.</p>
<download>bus-topology.pkt</download>
',
            "title"=>'Topolojiler - Bus Topolojisi'
        ]);

        Page::create([
            "id"=>6,
            "path"=>'changeIp',
            "content"=>'<p>IP Ayarlamaları yapmak için cihazı kullanmalıyız. <b>Cihaz Laptop, Masaüstü bir bilgisayar vs olabilir.</b> Bir önceki menü olan seçenekler menüsünde yaptığımız konfigrasyonların yanında bulunan “<b>Desktop</b>” seçeneğine basalım.</p>
<p>Ardından burada çok fazla uygulama göreceksiniz. Hepsine değinmeyeceğiz ancak birçoğunu bu kitap içeriğinde göreceksiniz. Şimdilik bizim odaklanmamız gereken program “IP Configration” dur.</p>
<png>ipchange/photo1</png>
<p>Seçildikten sonraki ekrana bakalım.</p>
<png>ipchange/photo2</png>
<ol>
<li>Interface: Seçili modül, her modüle farklı ip atanır.</li>
<li>Static / DHCP: IP Adresi tanımlama türleri. Static sabit IP, DHCP ise düzenli aralıklarla değişen IP türüne verilen isimdir.</li>
<li>IPv4 Address: IP yi gireceğimiz yer.</li>
</ol>
<p>3.menüden ip adresi yazarak değiştirebiliriz.</p>',
            "title"=>'IP Nasıl değiştirilir?'
        ]);

        Page::create([
            "id"=>7,
            "path"=>'lanConnection',
            "content"=>'<p>En basit ağ olan LAN, ev, ofis gibi küçük ancak ağa ihtiyaç duyulan yerlerde kullanılmak için yapılan ağ sistemidir. Bunun için bir <a href="#" data-toggle="popover" title="Yıldız Topolojisi" data-bs-content="Ortada switch / hub olan topoloji yapısı <img src=\'/img/content/star-success.png\'/>" >Yıldız topolojisi</a> yapacağım.</p>

<p>

Daha önceden yıldız topolojisi yaptığım için en baştan anlatmayacağım. Fakat renklendirme, isim ekleme gibi olaylar yapacağım.

Diyelim bir okulda laboratuvar 1 için 7 adet bilgisayar eklemelisiniz. Bundan örnek çıkarak yapacağım.

</p>

<png>lan/step1</png>

<p>Yeşil oklar başarıyla çalıştığını gösterir. Hadi ping atalım!

Öncelikle herhangi bir cihaza girelim, ben “Lab1-03” seçtim. Tıklayalım.</p>

<png>lan/step2</png>

<p>Buradan uygulamalar menüsüne girelim, hatırlarsanız <b>Desktop</b> seçeneğindeydi.</p>

<png>lan/step3</png>

<p>Buradan resimde gözüktüğü gibi <b>Command Prompt</b> seçeneğine basalım. Buraya herhangi bir seçili bilgisayar IP sini yazalım. Örneğin 192.168.1.107 olsun.</p>

<pre class="prettyprint">ping 192.168.1.107</pre>

<p>Yazarak test edelim. Dönen veri şuna benzer olacaktır.</p>

<pre class="prettyprint">

Pinging 192.168.1.107 with 32 bytes of data:



Reply from 192.168.1.107: bytes=32 time<1ms TTL=128

Reply from 192.168.1.107: bytes=32 time<1ms TTL=128

Reply from 192.168.1.107: bytes=32 time<1ms TTL=128

Reply from 192.168.1.107: bytes=32 time<1ms TTL=128



Ping statistics for 192.168.1.107:

   Packets: Sent = 4, Received = 4, Lost = 0 (0% loss),

Approximate round trip times in milli-seconds:

   Minimum = 0ms, Maximum = 0ms, Average = 0ms

</pre>

<p>Bu, başarıyla ping atıldığının işaretidir. Başarıyla ping atıldığında anlarız ki çalışıyordur.

Şimdi renklendirelim, “Draw Ellipse” kısmından üst kısımdaki daha önceden anlattığımız bölümden bir yuvarlak çizelim. Ben rengi camböceği yapacağım.</p>

<png>lan/step4</png>

<p>Burada “Select Fill Color” seçeneğine basalım. Ardından “Fill Color” seçeneğine basalım.</p>

<png>lan/step5</png>

<p>Başarılı! isterseniz aşağıdan indirebilirsiniz</p>

<download>lan-connection.pkt</download>',
            "title"=>'LAN Bağlantısı'
        ]);

        Page::create([
            "id"=>8,
            "path"=>'manConnection',
            "content"=>'<p>Öncelikle <a href="lanConnection">LAN da oluşturduğumuz şemayı</a> açalım ve aynı ağı kopyalayalım.</p>
<png>man/step1</png>
<p>Fakat ikisini bağlamaya çalışmayın.. Çünkü IP Adresleri aynı olduğundan turuncu renkte kalacaktırlar. Bu duruma çakışma denir. Bu yüzden IP leri düzenlemeliyiz</p>
<png>man/step2</png>
<p>IP Adresleri düzenlendi. Şimdi Switchleri bağlamalıyız.</p>
<h1>Router Kullanımı</h1>
<p>Router bizim en önemli cihazımız. Hatırlarsanız terimler kısmında routerden bahsettik. Şimdi ise yapmamız gerekenler oldukça basit. 2 router kuruyoruz ve bu routerler iki ağ içinde özel olmalı.</p>
<png>man/step3</png>
<p>Şuan ağları bağlamadık. Önce Routeri switche bağlayalım. Kırmızı ışık alıyorsanız port ayarına bakabilirsiniz.</p>
<png>man/step4</png>
<p>Gördüğünüz gibi bağladık. Artık yapmamız gerekenler Routerleri de Switche bağlamak. Peki neden 2 router kullandık? Çünkü daha çok ağ olduğunda yönetimi yavaşlamaması için.</p>
<p>Bağlamak için yapmamız gereken en önemli nokta bakır kablo <b>kullanmamak</b>. Bakır kablo bu işlerde yönetim sorunu oluşturacağından seri kablo kullanacağız. Seri kabloyu takmak için önce modül eklememiz gerekiyor. Ekleyelim!</p>
<png>man/step5</png>
<p>Buradan Seri port destekleyen seçeneği yani <b>NIM-2T</b> olanı ekliyoruz. Routeri kapatmayı unutmayın. Aynısını diğer routere ekledikten sonra kablolama yapalım. Şimdilik kafanız karışmasın diye <b>Serial DTE</b> kablosunu bağlamanız yeterli olacaktır.</p>
<png>man/step6</png>
<p>İsterseniz ping atın, artık başarılı! Eğer sizde kırmızı yanıyor ise muhtemelen portlar kapalıdır. Daha öncede bahsettiğim gibi portları Config > Interface kısmından açmanız gerek.</p>
<download>man-connection.pkt</download>',
            "title"=>'MAN Bağlantısı'
        ]);

        Page::create([
            "id"=>9,
            "path"=>'wanConnection',
            "content"=>'<p>

LAN, MAN gördük, şimdide aralarındaki en büyük bağlantı olan WAN a bakacağız. Elbette örneksiz olmaz. Hatırlar mısınız bir laboratuvarımız vardı? Onu internete bağlayacağız.

WAN, kıtalar arası ve şehirler arası büyüklükteki ağlara denir. En iyi örnekte internettir. Bu yüzden örnek olarak interneti kullanacak ve Almanyadaki https://ciscogren.com.tr ye bağlatacağız. (İnternet burada örnek, dolayısıyla aynı siteye siz ulaştığınızda farklı bir sonuç çıkacak. Server kurulumu yapmak istediğimiz için bunu örnek verdim.)

Öncelikle MAN bağlantısını açalım. Ben anlaşılması için renklendirerek yaptım.

</p>

<png>wan/step1</png>

<p>

Turuncu olan renge DNS Tanımlaması, diğer renge ise sitemizi koyacağız.

</p>

<h2>DHCP Server kuralım</h2>

<p>

DHCP, sisteme girenlere otomatik IP Tanımlaması yapmayı sağlar. Bunu istiyoruz çünkü her cihaza statik IP tanımlamak oldukça zor, haliyle yapacağımız şey daha çok cihaz olduğunda sorun yaratır. Hemen kuralım!

</p>

<png>wan/step2</png>

<p>

Bu kısımda Server seçeneğini açalım. DNS, HTTP, DHCP sistemlerinde server kullanıldığından çok işimize yarayacak.

</p>

<png>wan/step3</png>

<p>

Bu ekran önemli, zira sunucuyu yapılandırmak için gerekli seçenekler burada bulunuyor. Biz burada <b>DHCP</b> seçeneğine basalım.

</p>

<png>wan/step4</png>

<p>

DHCP çalışma mantığını anlatırsam bu ekranda tamamen aydınlanabilirsiniz. DHCP öncelikle bağlanan cihazda bulunan bütün cihazlara bakar. Ardından hepsine cihaz istediği takdirde boş ip tanımlar. Günümüzde kendi ağımız için bir adet, internet içinde 1 adet DHCP bulunmakta. IP lerin çakışması bu sayede önlenmektedir. Öncelikle tanımlamaları yapalım.

<br>Pool name: Havuzun adı, istediğinizi yapabilirsiniz. Biz Laboratuvar yapacağız.

<br>Default gateway: Bu, router adresidir. Şimdilik buna dokunmayalım.

<br>DNS Server: DNS sunucumuz varsa bunu girebiliriz. Biz kurarken olmadığından <b>192.168.1.2</b> gireceğiz.

Start IP Address: Başlangıç IP Adresi. Her gelen cihaz buradan artarak IP Adresi alacak. Biz <b>192.168.1.0</b> yapacağız ve gelen cihazlar sondaki 0 artarak kendine IP alacaklar.

Subnet mask: ağın hangi yerde olduğunu tespit eder. Daha iyi izah etmek gerekirse <b>255.255.255.0</b> yazarsak cihaz ilk 3 rakama bakar ve eğer diğer cihazlarda da aynı ise aynı ağda olduğu anlamına gelir. Bu kısmı 255.255.255.0 yapalım.

Maximum number of users: Ağa katılabilecek maksimum bilgisayar. Biz bunu 255 yapalım. Bu miktarı kendim istediğim için koydum istersem 50, istersem 100 de verebilirdim.

Ardından, <b>add</b> butonuna basalım ve kullanalım.

</p>

<png>wan/step5</png>

<p>

Ardından, DHCP sunucusuna sabit IP adresi tanımlayalım.</p>

<png>wan/step6</png>

<p>

Şimdi LAB1-01 e tıklayalım ve IP Değiştirme yerine girelim.

</p>

<png>wan/step7</png>

<p>Buradan DHCP seçeneğine tıklayalım.</p>

<png>wan/step8</png>

<p>Bu yazıyı göreceksiniz, bağlanmasını bekleyelim ve ardından başarılı!</p>

<png>wan/step9</png>

<p>Şimdi bütün cihazlara DHCP ekleyelim, ikinci laboratuvara da bağlayalım.

<br><b>Not</b>: Router, konfigrasyonu kafa karıştırıcı olabiliyor. Bu yüzden Router Kullanımı kısmındaki adımları kullanarak kurabilirsiniz. Şimdilik burayı es geçeceğim. Eğer oraya baktığınız halde kuramadıysanız QR Kod kullanarak ulaşabilirsiniz.

</p>

<download>files/wan-conneciton1.pkt</download>

<h2>HTTP Server kuralım</h2>

<p>Bir web sitesi yazmak istediğimizi varsayalım, herkes buna girmek istesin. Nasıl girerdi? Cevap çok basit. HTTP sunucusu!</p>

<png>wan/step10</png>

<p>Almanyadaki sunucuyu bağlamamız gerekiyor. Bunuda Switch’e bağlamalıyız. Lâkin sunucuya önce tıklayıp Servislerden HTTP’yi seçelim.</p>

<png>wan/step11</png>

<p>Buradaki seçeneklerde <b>File Manager</b> seçeneğine bakalım, burada dosyalar bulunmakta. <b>index.html</b> bizim anasayfamız. Edit seçeneğine basalım.</p>

<png>wan/step11</png>

<p>Şimdi bir HTML oluşturalım. Bu HTML tasarımı Cisco Packet Tracer uygulamasının kendi yaptığı tasarım. Bu yüzden düzenleyebiliriz.</p>

<png>wan/step12</png>

<p>Kaydet butonuna basarak kaydedelim. Ardından sabit bir IP adresi atayalım.</p>

<png>wan/step13</png>

<p>Şimdide switche kablolama yapalım.</p>

<png>wan/step14</png>

<p>Eskiden ping atardık, şimdi ise siteye girelim :)

Herhangi bir bilgisayara tıklayın.</p>

<png>wan/step15</png>

<p><b>Web Browser</b> seçeneğine bastıktan sonra url kısmına:

https://192.168.1.109 yazalım.</p>

<png>wan/step16</png>

<p>Başarılı! Fakat bir şey farkettiniz mi? Biz internette IP adresi yazarak gezinmiyoruz. Sunucumuza bir domain tanımlayalım.</p>

<download>files/wan-connection2.pkt</download>

<h2>DNS (Domain Name Server) kuralım</h2>

<p>DNS kurmadan önce DNS nedir bilmenizi ve neden ihtiyaç duyduğumuzu bilmenizi isterim.

IP Adresleri şu anda gördüğünüz gibi çok kafa karıştırıcı. İnsanların her biri her adresi ezbere bilseydi gerçekten çok korkunç bir hal alabilirdi. Unutulsa ne olurdu? Siteye asla giremezdiniz. Ayrıca yönetimi daha da kötü olurdu. Bunun için biz domaini yarattık. Kendi yazmış olduğumuz yazıları IP Adreslerine bağladık, ardından kullanıcılar yazıyı yazdığında ise yönlendirme yaptık. Biz bu kitapta nasıl yönlendiririz, nasıl bir DNS kurarız onları göreceğiz. Gelin birlikte bakalım.

İki laboratuvarımız vardı, DHCP ile bağladığımız bu laboratuvar <a href="https://cpto.com.tr">https://cpto.com.tr</a> ye erişebilse nasıl olurdu sizce? Hemen sunucu kuralım.</p>

<png>wan/step18</png>

<p>Sunucuyu Switche bağlayalım. Ardından ise DNS ayarını açalım ve OFF seçeneğini ON yapalım. DNS çalışmış olacak.</p>

<png>wan/step19</png>

<p>Şuanda boş bir sunucu açık. Kimse kimseyi yönlendirmiyor. Dolayısıyla bir emir vermemiz gerek. DNS kayıtları şu şekilde yapılır;

<ol>

<li>A Record: ipv4 kaydı yapar</li>

<li>AAAA Record: ipv6 kaydı yapar</li>

<li>CNAME: yönlendirme yapar</li>

<li>NS Record: Domaini sunucuya bağlar</li>

<li>SOA: DNS alanını seçmemize yarar.</li>

</ol>

</p>

<png>wan/step20</png>

<png>wan/step21</png>

<download>files/wan-connection3.pkt</download>',
            "title"=>'WAN Bağlantısı'
        ]);

        Page::create([
            "id"=>10,
            "path"=>'ringTopology',
            "content"=>'<p>Halka topolojisi ortasında <b>MAU</b> (Media access unit) bulunan çok kolay bir şekilde işlem yapabileceğiniz ve kontrol sistemine sahip bir cihaz. <b>Token</b> yapısını kullanarak haberleşme sağlar.</p>
<png>ring/mau</png>
<p>Ne yazık ki.. Cisco Packet Tracerde böyle bir cihaz yok. MAU buraya bağlanmayacağından hiçbir şekilde bunu ayarlayamayız. Bu yüzden bu şemada tıpkı Bus topolojisi gibi sadece temsili olacak. Ofisimizi hatırladınız değil mi? 6 cihaz bağlayacaktık. Şimdide bir otelde olduğumuzu ve bu otelde odaların her birine bir ring topolojisi yaptığımızı varsayalım. Odalar birbirine yakın olsun ve ortasında ise MAU olsun.</p>
<png>ring/step1</png>
<p>Şimdi ise hepsini MAU ya bağlayalım. MAU temsili olduğundan, biz Switch ekleyeceğiz.</p>
<png>ring/step2</png>
<p>Şimdide cihazları bağlayalım ve IP Adreslerini girelim.</p>
<png>ring/step3</png>
<download>ring-topology.pkt</download>',
            "title"=>'Topolojiler - Ring Topolojisi'
        ]);

        Page::create([
            "id"=>11,
            "path"=>'pduSend',
            "content"=>'<p>Paket anlamına gelen PDU, iki şekilde gönderilebilir. PDU gönderme amacımız genellikle cihazlar arasındaki iletişimin başarılı olup olmadığını test etmek. Basit ve kompleks şeklinde ayrılan seçenekleri bulunmakta. Öncelikle nereden göndereceğimizi görelim.</p>

<png>pdu/step1</png>

<ol>

<li>Basit istekler oluşturmaya yarar</li>

<li>Kompleks istekler oluşturmaya yarar.</li>

</ol>

<p>Kompleksi açmak gerekirse Cisco Packet Tracer uygulamasındaki sunucular, sistemlerin gönderdiği sinyalleri kopyalamak diyebiliriz. Siteye istek gönderme, FTP, Ping gibi istekleri taklit etmeye yarar. </p>

<p>Basit olan ise bağlantının olup olmadığını kontrol eder.</p>

<p>İsteklerin atılması için ağ olması zorunludur. Ağ olmadıkça hata verir.</p>

<png>pdu/step2</png>

<p>Ağdaki cihazların IP adresi olmadıkça hiçbir şey yapılamaz. Bu yüzden IP Adresi tanımlayalım.</p>

<png>pdu/step3</png>

<p>Tanımladıktan sonra <b>Basic PDU</b> butonuna basalım ardından iki cihazı seçelim.</p>

<png>pdu/step4</png>

<p>Başarılı!</p>

<download>pdu-send-sample.pkt</download>',
            "title"=>'PDU Gönderme'
        ]);

        Page::create([
            "id"=>12,
            "path"=>'simulationMode',
            "content"=>'<p>Bu modun amacı rahat bir şekilde paketleri bulmaya yarar. Takibide kolaylaştırır. Daha önceden yaptığımız PDU gönderme başarıyla olduğunda direkt sonucu verdi. Bizim bu aşamaları görmemiz harika olmaz mıydı? Bunu nasıl yapacağımızı daha önceden yaptığım PDU gönderme sisteminden göstereceğim.</p>

<png>simulation/step1</png>

<p><b>Simulation</b> kısmına basalım. Bastıktan sonra karşımıza bir menü gelecek.</p>

<png>simulation/step2</png>

<ol>

<li>Paketlerin kaçıncı saniyede en son hangi cihazda olduğunu gösterir.</li>

<li>Paketleri en başa getirir.</li>

<li>Gecikmeyi sabitler</li>

<li>Bulunan saniyeyi gösterir.</li>

<li>Bir geri alır</li>

<li>Oynatır</li>

<li>İleri alır</li>

<li>Animasyon hızını ayarlar</li>

<li>İzlenen paketleri gösterir</li>

<li>İzlenen paketleri düzenler</li>

<li>Paketlerin hepsini gösterir / Gizler</li>

</ol>

<p>Buradan sonra bir PDU paketi atalım. Daha önce size nasıl atacağınızı göstermiştim.</p>

<png>simulation/step3</png>

<p>İlk başta cihazdan gelen paketi görüyoruz. Mavi mektup olmasının sebebi paketin renginin mavi olması.

Şimdi 6.seçeneğe basıyoruz.

</p>

<png>simulation/step4</png>

<p>6.seçeneğe bastığımızda Switche paket gönderiliyor. Ardından Diğerki bilgisayara ulaşıyor ve Başarılı simgesi dönüyor!</p>

<p>Event list seçeneğine bastığınızda rahatlıkla görebileceğiniz üzere farklı seçenekler var. Buradan geçmişi görebilirsiniz.</p>',
            "title"=>'Simülasyon Modu'
        ]);

        Page::create([
            "id"=>13,
            "path"=>'routerCommon',
            "content"=>'<p>Routerlar çok fazla özelliğe sahip cihazlardır. Bu yüzden tek konu altında toplasak iyi olur. Burada gördüğünüz şeylerin büyük kısmı CLI kısmında olacaktır. Komut satırında olacağından biraz ezber gerekli olabilir. Fakat… Gerçek hayatta arayüz değilde CLI göreceğiniz için bu problem teşkil etmemeli.

Dilerseniz önce CLI kullanımını anlatmakla başlayalım.

Biz bu kitapta her şeyden bahsetmeyeceğiz. En çok kullanacağımız ve işimize en çok yarayacak olan komutlardan bahsedeceğiz. </p>

<h2>config,config-if</h2>

<p>Buradaysanız ve bir anda olduysa muhtemelen bir seçeneğe daha detaylı bakıyorsunuz.<br>

Bu kısımdaki bulunan config aslında yukarıdaki menüyü temsil eder. Buraya erişmek isterseniz configure yazabilirsiniz.</p>

<png>router_common/step1</png>

<p>Burası için yazacağımız komutlara değinelim.</p>

<h2>Basit Komutlar</h2>

<ol>

<li>enable: Komutları yazdığınız kısmı aktif hale getirir.</li>

<li>configure terminal: Çoğu sık kullanılan komutları config kısmında bulunur. Cihazın üzerindeki portları, router ayarlarını değiştirmemizi sağlar.</li>

<li>interface: Port seçmeye yarar. Kullanımı “interface ethernetportu“ şeklindedir.</li>

<li>reload: yeniden başlatır.</li>

<li>copy: Ayarları kopyalamaya yarar.</li>

<li>ip address: IP adresi tanımlamaya yarar. Kullanımı “ip address 192.168.1.100 255.255.255.0” şeklindedir.</li>

<li>shutdown: Portu kapatır</li>

<li>no shutdown: Portu açar</li>

<li>ip default-gateway: Router tarzı yönlendirme cihazlarını tanımlamak için kullanılır.</li>

<li>description: Açıklama ekler</li>

</ol>

<h2>Sorun giderme komutları</h2>

<ol>

<li>ping: Karşı cihaza paket göndermeye yarar.</li>

<li>speed: Bant aralığını ayarlamaya yarar (örn. speed 1000, speed 100)</li>

<li>show interfaces: Cihaza takılı portları listeler</li>

</ol>

<h2>Yönlendirme komutları</h2>

<ol>

<li>router rip: RIP özelliğini aktifleştirir (RIP, routerlerin birbirlerini otomatik görmesini sağlar.)</li>

<li>show ip rip database: RIP ile gelen IP adreslerini listeler</li>

</ol>

<h2>DHCP komutları</h2>

<ol>

<li>ip address dhcp: DHCP özelliğini aktive etmeye yarar</li>

<li>ip dhcp pool name: DHCP pool adı girmemizi sağlar</li>

<li>ip helper-address: DHCP sunucusuna veya başka routerlere yönlendirmeye yarar. Bu kitaptaki WAN, MAN bağlantılarında router kullanılmak istenirse yazılması gereken komut bu olmalıdır. (Örn. İp helper-address sunucuyadarouteradress)</li>

</ol>

<h2>Güvenlik komutları</h2>

<ol>

<li>password: Şifreleri listeler</li>

<li>username name password şifre: Giriş yapmaya yarar</li>

<li>enable password: Şifreyi aktif eder</li>

</ol>

<p>Elbette daha fazla komut var. Fakat bizim şuanlık bunları bilmemiz dahi yeterli. Zaten bu komutların dahi çoğunu kullanmayacağız.

Router komutlarını öğrendik. Şimdi ise bu kısımda nasıl kullanılır, kullanırken nelere dikkat etmemiz gerek bunlardan bahsedeceğiz.</p>

<h2>Komutla router kurulumu</h2>

<p>Şu ana kadar çoğu cihazı komut satırı olmadan kurduk. Ne yazık ki gerçek hayat bu kadar basit değil, bu yüzden komut satırını kullanarak gerçek hayata yakın bir deneyim elde edebiliriz. Birlikte router portunu açalım.

Öncelikle enable komutunu kullanarak komut satırını başlatalım. Aşağıdaki gibi bir görüntü göreceksiniz.</p>

<png>router_common/step2</png>

<p>Bu kısımdan sonra config ekranına gelmeliyiz, yazacağımız komut

<pre class="prettyprint">configure terminal</pre>

olacaktır.</p>

<png>router_common/step3</png>

<p>Bu esnadan sonra

<pre class="prettyprint">interface GigabitEthernet0/0/0</pre>

yazarak cihazın portuna ulaşalım.</p>

<png>router_common/step4</png>

<p><b>config-if</b> önemli. Bu, sizin bir portu seçtiğiniz anlamına gelir dolayısıyla buradan başka porta erişemezsiniz. Şimdi portu açalım. Açmak için

no shutdown

kapatmak için

<pre class="prettyprint">shutdown</pre>

yazabiliriz.</p>

<png>router_common/step5</png>

<p>Bu menüler arasında gezinmek için

<pre class="prettyprint">exit</pre>

komutunu kullanabilirsiniz. Bir önceki seçeneklere döner.</p>

<download>router-connect1.pkt</download>

<h2>İki ağ arası yönlendirme</h2>

<p>Temel olarak bir konfigürasyon nasıl yapılır öğrendiğimize göre şimdide iki ağ arasında bir yönlendirme yapalım.<br>

İlk olarak, iki ağ oluşturalım.</p>

<png>router_common/step6</png>

<p>Öncelikle ağlara ip tanımlaması yapalım.</p>

<png>router_common/step7</png>

<p>Bu tanımlamaların ardından iki ağı bağlayacağız. Fakat switchleri birbirlerine bağlamak onları yönetmek için mantıklı değil. Aralarına bir router koyalım. CLI kısmına gelelim.</p>

<png>router_common/step8</png>

<p>Öncelikle

<pre class="prettyprint">enable</pre>

kodunu kullanmalıyız. Sonrasında ise

<pre class="prettyprint">config terminal</pre>

kodunu kullanalım.

</p>

<png>router_common/step9</png>

<p>Bu menüden sonra düzenlemek istediğimiz soketi seçelim.

<pre class="prettyprint">interface GigabitEthernet0/0/0 </pre>

yazalım. Port açmak için gereken komudu hatırlıyor musunuz?

<pre class="prettyprint">no shutdown</pre>

yazalım. ip adresi tanımlamamız gerektiğinden

<pre class="prettyprint">ip address 192.168.1.110 255.255.255.0<br>exit</pre>

yazalım ve sonra diğer sokete

<pre class="prettyprint">interface GigabitEthernet0/0/1</pre>

yazarak gidelim. Tekrar port açma kodunu girdikten sonra

<pre class="prettyprint">ip address 1.1.1.1 255.0.0.0</pre>

yazalım. Ayrı olacak çünkü iki ağ arasındaki ip farklı olabilir.

</p>

<png>router_common/step10</png>

<p>Kullanmak istediğiniz cihazlarda default gateway adresini router olarak tanımlarsanız router ile yönlendirme yapabilirsiniz.</p>

<png>router_common/step11</png>

<p>Başarılı!</p>

<download>router-connect2.pkt</download>

<h2>Sunucu ile kullanım</h2>

<p>Bir önceki konuda ağlarımızı bağlamıştık. Şimdi ise ağlara DHCP Sunucusu kuralım. Daha önceden nasıl kurulduğunu anlattığımdan çok üstüne değinmeyeceğim bunun yerine router ile bağlantı durumunda yaşanacak olayları anlatacağız. İki adet soket olduğundan modüllerden Ethernet soketi ekliyorum ve işlemlere başlıyorum.</p>

<png>router_common/step12</png>

<png>router_common/step13</png>

<p>Poollar 2 adet ve iki farklı IP ye sahip. Bunun sebebi router üzerinde 2 farklı ağın olması.</p>

<png>router_common/step14</png>

<p>Eğer denerseniz router üzerinden giden bir isteğin serverda ayarlanmadan geri döndüğünü göreceksiniz. Bunun sebebi routerin sunucuyu yönlendirme ve yardımcı olarak değilde bir cihaz gibi tanımasıdır. Bunun için router kısmına gelelim ve

<pre class="prettyprint">ip helper-address 192.168.1.111</pre>

yazalım. Yazacağımız kısım routerden gelen soket olmalı.

</p>

<png>router_common/step15</png>

<p>Ufak bir not eklemek istiyorum, serverPool adresinin içeriğini değiştirmenize gerek yok çünkü her IP değiştirmenizde orası da değişecektir. İkinci ağın havuzunu oraya dahil etmemiz yeterli.</p>

<download>router-connect3.pkt</download>',
            "title"=>'Router Kurulumu'
        ]);

        Page::create([
            "id"=>14,
            "path"=>'routerMan',
            "content"=>'<p>DHCP kurduk ve iki ağa bağladık. Şimdi ise MAN ağımızı büyütelim ve bir ring topolojisi kullanarak bunları birleştirelim. Daha öncede bahsettiğimiz gibi ring topolojisi cisco packet tracer üzerinde yapılmadığı için, biz temsili bir görüntü sağlayacağız. Örnek verelim, Okulun Laboratuvarlarını bağlamak istiyorsunuz. Router kullanarak yapacağınız örnek aşağıda.</p>

<png>router_man/step1</png>

<p>Bu sistem çalışacaktır. Ancak 2,3 4, router kullanmak istersek burada router bağlantısı yapmamız gerekiyor. Sonraki bölümde bunlardan bahsedeceğiz. QR kod kullanarak bu kısıma kadar anlatılan her şeyi indirebilirsiniz.</p>

<h2>Router Yönlendirme Tipleri</h2>

<p>Bu bölümde 2,3,4 router kullandığımızda yapmamız gereken konfigrasyonlardan bahsedeceğiz. Router bağlaması için 2 adet yol vardır bunlar;</p>

<h4>Statik</h4>

<p>Statik bağlantıda routerler kendilerini görmezler. Manuel olarak tanımlama yapmanız gerekmektedir. Gelin bir örnek ile anlatalım. Öncelikle 2 router bağlayalım.</p>

<png>router_man/step2</png>

<p>Bu şemada 2 router var, eğer bilgisayarlar arası PDU gönderimi yaparsanız başarısız olacaktır çünkü routerler birbilerini tanımıyorlar. Dikkat etmeniz gereken önemli nokta ise routerler kablo değil serial şeklinde bağlı çünkü routerler arasındaki bağlantı seri olmalıdır. </p>

<p>Şimdi IP Adreslerini inceleyelim. IP Adreslerinde gördüğünüz üzere 192.168.1.0 ve 192.168.2.0 şeklinde iki ağ var. Ortadaki seri kısımda ise 1.1.1.0 kısmı var. Anlayacağınız üzere 3 ağ var ve bu ağların birinde routerler, diğerinde ise bilgisayarlar var. Şimdi ise PDU gönderirsek routerden cihazlara başarıyla gittiğini görürsünüz fakat farklı ağlarda sorun yaşarız. BU Yüzden bu 3 ağı birleştireceğiz. Gelin bakalım.</p>

<png>router_man/step3</png>

<p>Bu menüdeki yazılanlara bakalım.<br>

<ol>

<li>Gitmek istediğiniz ağ, size gelen istekleri yazdığınız ağa yönlendirir.</li>

<li>Gitmek istediğiniz ağın mask adresi, örn. 255.255.255.0</li>

<li>Hangi ağı kullanacağınız. Bizim örneğimizde seri ile bağladığımız ağ, 1.1.1.0</li>

</ol>

</p>

<p>Öncelikle bizim ilk routere gelmemiz gerek. İlk routerde aşağıdaki gibi bir konfigrasyon yapalım.</p>

<png>router_man/step4</png>

<p>Yukarıda yazdığımız yazının açılımını anlatmak gerekirse, 192.168.1.0 ağına 1.1.1.0 üzerinden bağlanmak istiyoruz. Peki neden? Çünkü 1.1.1.0 routerlerin haberleştiği ağ olduğundan (1.1.1.1 ve 1.1.1.2) routerler birbirini görebilir bu sayede kolayca bağlantıyı yapmış oluruz. 192.168.1.0 ise normalde erişemediğimiz ağın yeri oluyor.</p>

<png>router_man/step5</png>

<p>Burada da aynı işlemi yaptığımızda sizinde gördüğünüz üzere başarıyla PDU istekleri birbirine gönderilebiliyor!</p>

<download>router-static.pkt</download>',
            "title"=>'Router ile MAN'
        ]);
    }
}
