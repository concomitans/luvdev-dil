<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{{ url('/frontend/_css/style.css') }}" rel="stylesheet">
    <script src="{{ url('/frontend/_js/app.js') }}"></script>
    @yield('meta')
    <title>Luvian Machinery</title>
    <link href="frontend/_css/bootstrap.min.css" rel="stylesheet">
    <link href="frontend/_css/style.css" rel="stylesheet">
    <link rel="Shortcut Icon" href="frontend/_images/luvmac2.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,700|Oswald:400,500,700&subset=latin-ext" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link href="frontend/_css/hamburger.min.css" rel="stylesheet">
    <link href="frontend/_css/pnotify.custom.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.7.1/css/flag-icon.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	
	

@yield('css')

</head>
<body>
@include('frontend.layout.header')

<!-- WhatsApp Container -->
<div class="popup-container">
    <div class="whatsapp-popup" id="whatsappPopup" style="bottom: 20px;">
        <div class="popup-content">
            <span class="close-btn" onclick="slideClose('whatsappPopup', 'whatsappMiniBtn')">&times;</span>
            <h4>WhatsApp Destek</h4>
            <a href="https://wa.me/905551234567" class="whatsapp-btn" target="_blank">
               <i class="fab fa-whatsapp"></i> Mesaj Gönder
            </a>
        </div>
    </div>
    <div id="whatsappMiniBtn" class="popup-mini-button" onclick="restorePopup('whatsappPopup', 'whatsappMiniBtn')">
        <i class="fab fa-whatsapp"></i>
    </div>
</div>

<!-- Telegram Container -->
<div class="popup-container">
    <div class="telegram-popup" id="telegramPopup" style="bottom: 100px;">
        <div class="popup-content">
            <span class="close-btn" onclick="slideClose('telegramPopup', 'telegramMiniBtn')">&times;</span>
            <h4>Telegram Destek</h4>
            <a href="https://t.me/kullanici_adiniz" class="telegram-btn" target="_blank">
               <i class="fab fa-telegram"></i> Mesaj Gönder
            </a>
        </div>
    </div>
    <div id="telegramMiniBtn" class="popup-mini-button" onclick="restorePopup('telegramPopup', 'telegramMiniBtn')">
        <i class="fab fa-telegram"></i>
    </div>
</div>

@yield('content')


@include('frontend.layout.footer')
<script src="frontend/_js/greensock.js"></script>
<script src="frontend/_js/jquery.min.js"></script>
<script src="frontend/_js/bootstrap.min.js"></script>
<script src="frontend/_js/style.js"></script>
<script src="frontend/_js/pnotify.custom.min.js" type="text/javascript"></script>
<script src="frontend/_js/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
<script src="frontend/_js/jquery.validate.min.js" type="text/javascript"></script>
<script src="frontend/_js/phone.js" type="text/javascript"></script>
<script src="frontend/_js/pnotify.custom.min.js" type="text/javascript"></script>
<script src="frontend/_js/localization/messages_tr.min.j    s" type="text/javascript"></script>
<script type="text/javascript">
    @if(Session::has('mesaj'))
            new PNotify({
        title: '{!! Session::get("title") !!}',
        text: '{!! Session::get("text") !!}',
        type: '{!! Session::get("type") !!}'
    });
    @endif

    $(document).ready(function () {
        $(".commentForm").validate();
        $(".phone").inputmask({"mask": "0 (999) 999-9999"});
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
        // Bayrak tıklama fonksiyonları
        document.querySelectorAll('.flag-icon').forEach(flag => {
            flag.addEventListener('click', function() {
                const lang = this.classList.contains('flag-icon-tr') ? 'TR' :
                            this.classList.contains('flag-icon-gb') ? 'EN' : 'RU';
                console.log(`Dil değiştir: ${lang}`);
                // Gerçek uygulamada: window.location.href = `?lang=${lang.toLowerCase()}`;
            });
        });
    </script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
  document.querySelectorAll('.flag').forEach(flag => {
    flag.addEventListener('click', function() {
      const lang = this.getAttribute('data-lang'); // Eksik olan kritik kısım
      if(lang) {
        window.location.href = `?lang=${lang.toLowerCase()}`;
      }
    });
  });
    </script>

<script>
    // Sayfa yüklendiğinde pop-up'ları aç
    window.onload = function() {
        document.getElementById('whatsappPopup').style.display = 'block';
        document.getElementById('telegramPopup').style.display = 'block';
    };

    // Kapatma fonksiyonu (mini butonu göster)
    function slideClose(popupId, miniBtnId) {
        const popup = document.getElementById(popupId);
        popup.style.transform = 'translateX(120%)';
        
        // İlgili mini butonu göster
        document.getElementById(miniBtnId).style.display = 'block';
    }

    // Geri açma fonksiyonu (mini butonu gizle)
    function restorePopup(popupId, miniBtnId) {
        const popup = document.getElementById(popupId);
        popup.style.transform = 'translateX(0)';
        
        // Mini butonu gizle
        document.getElementById(miniBtnId).style.display = 'none';
    }
</script>


@yield('js')



@include('language-switcher')	
</body>
</html>