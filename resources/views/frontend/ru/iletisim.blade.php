@extends('frontend.layout.master')
@section('meta')
    <meta name="description" content="Hakkimizda Açıklama">
    <meta name="keywords" content="Kurumsal Anahtar Kelimeler">
    <title>Luvian Machinery İletişim</title>
@endsection
@section('content')


    <div class="container">
    <ol class="breadcrumb">
        <li><a href="#">iletişim</a></li>
        <li><a href="#">anasayfa</a></li>
    </ol>
    </div>

<div class="container">
    <div class="iletisim-baslik">Harita <br>
    </div>
    <span><br></span>
</div>
<div class="container-fluid p0 mb20">
    <div class="embed-responsive embed-responsive-16by9"style="height: 400px;">
<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3021.9574748827117!2d29.939734075545566!3d40.76296003449513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDDCsDQ1JzQ2LjYiTiAyOcKwNTYnMzIuMyJF!5e0!3m2!1str!2str!4v1745010552325!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
</div>
    <div class="container">
        <div class="col-md-6">
            <div class="iletisim-baslik mb30">İletişim Formu</div>

            <form class="mb30 required" action="mail2" method="post">
                <div class="form-group">
                    <label for="adsoyad">Adınız Soyadınız :</label>
                    <input type="text" name="adsoyad" required="required" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Mail adresiniz :</label>
                    <input type="email" name="email" required="required" class="form-control">
                </div>
                <div class="form-group">
                    <label for="mesaj">Mesajınız :</label>
                    <textarea name="mesaj" class="form-control" required="required" rows="3"></textarea>
                </div>

                <button type="submit" class="btn iletisim-submit pull-right">Mail Gönder</button>
                <div class="clearfix"></div>
                {!! csrf_field() !!}

            </form>
        </div>
        <div class="col-md-6">
            <div class="iletisim-baslik">Bize Ulaşın </div>
            <div class="adres">
                Luvian Machinery <br>
                <br>
                Körfez mah. Ankara Karayolu Caddesi no : 119 İç kapı no : 201 Kocaeli / İzmit / Turkiye <br>
            Tel : 0262 325 2004 Fax : - <br>
            E-posta : info@luvianmachinery.com

            </div>
            <div class="adres">
                Luvian Machinery<br>
                <br>
                Körfez mah. Ankara Karayolu Caddesi no : 119 İç kapı no : 201 Kocaeli / İzmit / Turkiye <br>
            Tel : 0262 325 2004 Fax : - <br>
            E-posta : info@luvianmachinery.com

            </div>
        </div>


    </div>
@endsection
@section('js')
    <script src="frontend/_js/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
    <script src="frontend/_js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="frontend/_js/phone.js" type="text/javascript"></script>
    <script src="frontend/_js/pnotify.custom.min.js" type="text/javascript"></script>
    <script src="frontend/_js/localization/messages_tr.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".commentForm").validate();
            $(".phone").inputmask({"mask": "0 (999) 999-9999"});
        });
        @if(Session::has('mesaj'))
        new PNotify({
            title: '{!! Session::get("title") !!}',
            text: '{!! Session::get("text") !!}',
            type: '{!! Session::get("type") !!}'
        });
        @endif
    </script>

@endsection
@section('css')
   <link href="frontend/_css/layerslider.css" rel="stylesheet">
    <link href="frontend/_css/util.carousel.css" rel="stylesheet">
    <link href="frontend/_css/util.carousel.skins.css" rel="stylesheet">
    <link href="frontend/urunslide/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="frontend/urunslide/css/flexslider.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="frontend/urunslide/css/animate.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="frontend/urunslide/rs-plugin/css/settings.css" />
    <link rel="stylesheet" type="text/css" href="frontend/urunslide/css/rev-style.css" />
    <link href="frontend/urunslide/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="frontend/urunslide/owl-carousel/assets/owl.theme.default.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="frontend/urunslide/css/yamm.css" rel="stylesheet" type="text/css" />
    <link href="frontend/urunslide/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />
    <link href="frontend/urunslide/css/magnific-popup.css" rel="stylesheet" type="text/css" />

@endsection