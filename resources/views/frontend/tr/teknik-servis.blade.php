@extends('frontend.layout.master')
@section('meta')
    <meta name="description" content="Hakkimizda Açıklama">
    <meta name="keywords" content="Kurumsal Anahtar Kelimeler">
    <title>Luvian Machinery Teknik Servis</title>
@endsection
@section('content')



    <div class="container">
    <ol class="breadcrumb">
		 <li><a href="teknik-servis">teknik servis</a></li>
        <li><a href="index">anasayfa</a></li>
    </ol>
    </div>

    <div class="container">
        <div class="col-md-3 sidebar-baslik">
            <div class="sidebar-baslik">
                Luvian Machinery
            </div>
            <ul>
                <li class="active"><a href="teknik-servis">Teknik Servis</a></li>
            </ul>

        </div>
<div class="col-md-8 col-md-offset-1 sayfa-icerik">
<img src="uploads/photos/iletisim/tek-vis.png"class="img-responsive center-block mb10" alt="">

    <h3 class="sayfa-baslik">
        
    </h3><p> Boşluk </p>

	<div class="iletisim-baslik mb30">Fiyatlandırma ve teknik sorular için lütfen bizimle iletişime geçiniz.</div>

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

    </div>

@endsection
@section('js')
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