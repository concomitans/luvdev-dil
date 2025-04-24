@extends('frontend.layout.master')
@section('meta')
    <meta name="description" content="Hakkimizda Açıklama">
    <meta name="keywords" content="Kurumsal Anahtar Kelimeler">
    <title>Luvian Machinery | İkinci El</title>
@endsection
@section('content')
    <div class="proje-kategorileri">
        <div class="container">

            <div id="portfolio" class="util-carousel portfolio-list">

                <div class="item text-center">
                    <div class="meida-holder">
                        <a href="rulo-sarim"><img src="uploads/photos/proje-kategori/yaprakdoner.jpg" class="img-responsive center-block" alt=""/></a>
                    </div>
                    <div class="detail-container col-md-12">
                        <a href="rulo-sarim">Rulo Sarım Makinaları</a>
                    </div>
                </div>
                <div class="item text-center">
                    <div class="meida-holder">
                        <a href="pecete-uretim"><img src="uploads/photos/proje-kategori/premium_10x10.png" class="img-responsive center-block" alt=""/></a>
                    </div>
                    <div class="detail-container col-md-12">
                        <a href="pecete-uretim">Peçete Üretim Makinaları</a>
                    </div>
                </div>
                <div class="item text-center">
                    <div class="meida-holder">
                        <a href="paketleme"><img src="uploads/photos/proje-kategori/hambur.png" class="img-responsive center-block" alt=""/></a>
                    </div>
                    <div class="detail-container col-md-12">
                        <a href="paketleme">Paketleme Grubu</a>
                    </div>
                </div>
                <div class="item text-center">
                    <div class="meida-holder">
                        <a href="yedek-parca"><img src="uploads/photos/proje-kategori/seb.jpg" class="img-responsive center-block sebze" alt=""/></a>
                    </div>
                    <div class="detail-container col-md-12">
                        <a href="yedek-parca">Yedek Parçalar</a>
                    </div>
                </div>
                <div class="item text-center">
                    <div class="meida-holder">
                        <a href="ikinci-el"><img src="uploads/photos/proje-kategori/ekol.png" class="img-responsive center-block sebze" alt=""/></a>
                    </div>
                    <div class="detail-container col-md-12">
                        <a href="ikinci-el">İkinci El</a>
                    </div>
                </div>
                <div class="item text-center">
                    <div class="meida-holder">
                        <a href="misrella"><img src="uploads/photos/proje-kategori/rella.png" class="img-responsive center-block sebze" alt=""/></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="ikinci-el">ikinci el</a></li>
                <li><a href="rulo-sarim">ürünlerimiz</a></li>
                <li><a href="index">anasayfa</a></li>
            </ol>
        </div>

        <div class="container">
            <div class="col-md-3 sidebar-baslik">
                <div class="sidebar-baslik">
                    Ürünlerimiz
                </div>
                <ul>
                    <li><a href="rulo-sarim">Rulo Sarım Makinaları</a></li>
                    <li><a href="dondurulmus-patatesler">Peçete Üretim Makinaları</a></li>
                    <li class="passive"><a href="paketleme">Paketleme Grubu</a></li>
                    <li><a href="yedek-parca">Yedek Parçalar</a></li>
                    <li class="active"><a href="ikinci-el">İkinci El</a></li>
                </ul>

            </div>
            <div class="col-md-8 col-md-offset-1 sayfa-icerik">


 <div class="col-md-4 col-sm-6 col-xs-12 text-center">
         </div>
                </div>
            </div>

        </div>
    </div>

@endsection
@section('js')
    <script src="frontend/_js/jquery.utilcarousel.min.js"></script>
    <script type="text/javascript">
        $('#portfolio').utilCarousel({
            autoPlay : true,
            pagination : false,
            navigation : false,
            breakPosints : [[1200,4 ],[992, 3],[768, 2],[480, 1]]
        });
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