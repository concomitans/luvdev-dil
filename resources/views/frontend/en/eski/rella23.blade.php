@extends('frontend.layout.master')
@section('meta')
    <meta name="description" content="Hakkimizda Açıklama">
    <meta name="keywords" content="Kurumsal Anahtar Kelimeler">
    <title>AK Gıda Miss Rella</title>
@endsection
@section('content')
    <div class="proje-kategorileri">
        <div class="container">

            <div id="portfolio" class="util-carousel portfolio-list">

                <div class="item text-center">
                    <div class="meida-holder">
                        <a href="urunlerimiz"><img src="uploads/photos/proje-kategori/yaprakdoner.jpg" class="img-responsive center-block" alt=""/></a>
                    </div>
                    <div class="detail-container col-md-12">
                        <a href="urunlerimiz">Dondurulmuş Dönerler</a>
                    </div>
                </div>
                <div class="item text-center">
                    <div class="meida-holder">
                        <a href="dondurulmus-patatesler"><img src="uploads/photos/proje-kategori/premium_10x10.png" class="img-responsive center-block" alt=""/></a>
                    </div>
                    <div class="detail-container col-md-12">
                        <a href="dondurulmus-patatesler">Dondurulmuş Patatesler</a>
                    </div>
                </div>
                <div class="item text-center">
                    <div class="meida-holder">
                        <a href="dondurulmus-kofteler"><img src="uploads/photos/proje-kategori/hambur.png" class="img-responsive center-block" alt=""/></a>
                    </div>
                    <div class="detail-container col-md-12">
                        <a href="dondurulmus-kofteler">Dondurulmuş Köfteler</a>
                    </div>
                </div>
                <div class="item text-center">
                    <div class="meida-holder">
                        <a href="dondurulmus-sebzeler"><img src="uploads/photos/proje-kategori/seb.jpg" class="img-responsive center-block sebze" alt=""/></a>
                    </div>
                    <div class="detail-container col-md-12">
                        <a href="dondurulmus-sebzeler">Dondurulmuş Sebzeler</a>
                    </div>
                </div>
                <div class="item text-center">
                    <div class="meida-holder">
                        <a href="dunyamutfagi"><img src="uploads/photos/proje-kategori/ekol.png" class="img-responsive center-block sebze" alt=""/></a>
                    </div>
                    <div class="detail-container col-md-12">
                        <a href="dunyamutfagi">Dünya Mutfağı</a>
                    </div>
                </div>
                <div class="item text-center">
                    <div class="meida-holder">
                        <a href="misrella"><img src="uploads/photos/proje-kategori/rella.png" class="img-responsive center-block sebze" alt=""/></a>
                    </div>
                    <div class="detail-container col-md-12">
                        <a href="misrella">Miss Rella</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="rella23">Brownie
                    </a></li>
                <li><a href="misrella">Miss Rella </a></li>
                <li><a href="index">anasayfa</a></li>
            </ol>
        </div>
        <div class="container">
            <div class="col-md-3 sidebar-baslik">
                <div class="sidebar-baslik">
                    Ürünlerimiz
                </div>
                <ul>
                    <li class="active"><a href="urunlerimiz">Dondurulmuş döner grupları</a></li>
                    <li><a href="dondurulmus-patatesler">Dondurulmuş patates grupları</a></li>
                    <li><a href="dondurulmus-kofteler">Dondurulmuş hamburger grupları</a></li>
                    <li><a href="dondurulmus-sebzeler">Dondurulmuş sebze grupları</a></li>
                    <li><a href="dunyamutfagi">Dünya mutfağı</a></li>
                    <li><a href="misrella">Miss Rella</a></li>
                </ul>
            </div>
            <div class="col-md-8 col-md-offset-1 sayfa-icerik">
                <h3 class="sayfa-baslik">Brownie
                </h3>
                <div class="proje-detay col-md-12">
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-12  mb20 mt20 p15">
                                <div class="col-xs-12" id="slider">
                                    <!-- Top part of the slider -->
                                    <div class="row">
                                        <div class="col-sm-12" id="carousel-bounding-box">
                                            <div class="carousel slide" id="myCarousel">
                                                <!-- Carousel items -->
                                                <div class="carousel-inner ">
                                                    <div class="active item img-responsive center-block" data-slide-number="0">
                                                        <img src="uploads/photos/proje-kategori/rella22.jpg"></div>
                                                    <div class="item" data-slide-number="1">
                                                        <img src="uploads/photos/proje-kategori/rella22.jpg"></div>
                                                    <div class="item" data-slide-number="2">
                                                        <img src="uploads/photos/proje-kategori/rella22.jpg"></div>
                                                </div>
                                                <!-- Carousel nav -->
                                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                </a>
                                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12  hidden-xs" id="slider-thumbs">
                                <!-- Bottom switcher of slider -->
                                <ul class="hide-bullets">
                                    <li class="col-sm-4 p0">
                                        <a id="carousel-selector-0">
                                            <img src="uploads/photos/proje-kategori/rella22.jpg" class="img-responsive">
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <!--/Slider-->
                        </div>
                    </div>
                    <div class="col-md-7 proje-aciklama">
                        <h4 class="proje-isim"></h4>
                        Kutu İçi Adet(Slice in Box):<br>
                        10 Adet / Pieces<br>
                        Koli İçi Adet (Quantity in Case):<br>
                        10 Kutu / Boxes<br>
                        Porsiyon Gramaj (Slice Weight):<br>
                        110 gr. e<br>
                        +4 Cº Çözülme Süresi (Thawing Time (+4 Cº):<br>
                        2 Saat/Hours<br>
                        Raf Ömrü (Shell Life):<br>
                        1 Yıl/48 Saat - 1 Year / 48 Hours
                    </div>
                </div>
                <div class="col-md-12">
                    <h3 class="digersistemler">Diğer pasta grupları</h3>
                </div>



                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Berry Cheesecake

                            </a>
                        </div>
                        <a href="rella1"><img src="uploads/photos/proje-kategori/rella1.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella1" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Brownie Cheesecake

                            </a>
                        </div>
                        <a href="rella2"><img src="uploads/photos/proje-kategori/rella2.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella2" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Çikolatalı Cheesecake

                            </a>
                        </div>
                        <a href="rella3"><img src="uploads/photos/proje-kategori/rella3.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella3" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Frambuazlı Cheesecake
                            </a>
                        </div>
                        <a href="rella4"><img src="uploads/photos/proje-kategori/rella4.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella4" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Limonlu Cheesecake                            </a>
                        </div>
                        <a href="rella5"><img src="uploads/photos/proje-kategori/rella5.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella5" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Krokanlı Pasta
                            </a>
                        </div>
                        <a href="rella6"><img src="uploads/photos/proje-kategori/rella6.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella6" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Beyaz Çikolatalı Fıstıklı
                            </a>
                        </div>
                        <a href="rella7"><img src="uploads/photos/proje-kategori/rella7.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella7" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Beyaz Çikolatalı Profiterollü

                            </a>
                        </div>
                        <a href="rella8"><img src="uploads/photos/proje-kategori/rella33.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella8" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Bella Vista
                            </a>
                        </div>
                        <a href="rella9"><img src="uploads/photos/proje-kategori/rella8.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella9" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Fıstıklı Pasta
                            </a>
                        </div>
                        <a href="rella10"><img src="uploads/photos/proje-kategori/rella9.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella10" class="detayliincele pull-right">detaylı incele</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Pasta Latte
                            </a>
                        </div>
                        <a href="rella11"><img src="uploads/photos/proje-kategori/rella10.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella11" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Pasta Latte Mono
                            </a>
                        </div>
                        <a href="rella12"><img src="uploads/photos/proje-kategori/rella11.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella12" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Mozaik
                            </a>
                        </div>
                        <a href="rella13"><img src="uploads/photos/proje-kategori/rella12.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella13" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Çikolatalı Muzlu Pasta
                            </a>
                        </div>
                        <a href="rella14"><img src="uploads/photos/proje-kategori/rella13.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella14" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Devil's Fudge
                            </a>
                        </div>
                        <a href="rella15"><img src="uploads/photos/proje-kategori/rella14.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella15" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Karaorman Pasta
                            </a>
                        </div>
                        <a href="rella16"><img src="uploads/photos/proje-kategori/rella15.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella16" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Siyah Profiterollü Pasta

                            </a>
                        </div>
                        <a href="rella17"><img src="uploads/photos/proje-kategori/rella16.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella17" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Siyah Profiterollü Kare

                            </a>
                        </div>
                        <a href="rella18"><img src="uploads/photos/proje-kategori/rella17.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella18" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Peanut Caramel Kek
                            </a>
                        </div>
                        <a href="rella19"><img src="uploads/photos/proje-kategori/rella18.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella19" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Tiramisu Tondo
                            </a>
                        </div>
                        <a href="rella20"><img src="uploads/photos/proje-kategori/rella19.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella20" class="detayliincele pull-right">detaylı incele</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Tiramisu Kare
                            </a>
                        </div>
                        <a href="rella21"><img src="uploads/photos/proje-kategori/rella20.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella21" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Chocolate Hazelnut Kek
                            </a>
                        </div>
                        <a href="rella22"><img src="uploads/photos/proje-kategori/rella21.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella22" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Orman Meyveli Tart
                            </a>
                        </div>
                        <a href="rella24"><img src="uploads/photos/proje-kategori/rella23.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella24" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Havuçlu Kek
                            </a>
                        </div>
                        <a href="rella25"><img src="uploads/photos/proje-kategori/rella24.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella25" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Dereotlu Maydanozlu Kek

                            </a>
                        </div>
                        <a href="rella26"><img src="uploads/photos/proje-kategori/rella25.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella26" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Islak Kek

                            </a>
                        </div>
                        <a href="rella27"><img src="uploads/photos/proje-kategori/rella26.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella27" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Tepsi Profiterol

                            </a>
                        </div>
                        <a href="rella28"><img src="uploads/photos/proje-kategori/rella27.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella28" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Sufle

                            </a>
                        </div>
                        <a href="rella29"><img src="uploads/photos/proje-kategori/rella28.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella29" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Çikolatalı Muffin
                            </a>
                        </div>
                        <a href="rella30"><img src="uploads/photos/proje-kategori/rella29.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella30" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Vişneli Muffin
                            </a>
                        </div>
                        <a href="rella31"><img src="uploads/photos/proje-kategori/rella30.jpg" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella31" class="detayliincele pull-right">detaylı incele</a>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Rende Mozzarella

                            </a>
                        </div>
                        <a href="rella32"><img src="uploads/photos/proje-kategori/rella31.png" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella32" class="detayliincele pull-right">detaylı incele</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="proje">
                        <div class="proje-isim">
                            <a href="#">
                                Küp Rende Mozzarella
                            </a>
                        </div>
                        <a href="rella33"><img src="uploads/photos/proje-kategori/rella32.png" class="img-responsive center-block" alt=""></a>
                        <div class="aciklama">
                            <a href="#"></a>
                        </div>
                        <a href="#" class="siparisver pull-left">sipariş ver</a>
                        <a href="rella33" class="detayliincele pull-right">detaylı incele</a>
                    </div>
                </div>


            </div>
            <div class="clearfix"></div>
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
        jQuery(document).ready(function($) {

            $('#myCarousel').carousel({
                interval: 5000
            });

            //Handles the carousel thumbnails
            $('[id^=carousel-selector-]').click(function () {
                var id_selector = $(this).attr("id");
                try {
                    var id = /-(\d+)$/.exec(id_selector)[1];
                    console.log(id_selector, id);
                    jQuery('#myCarousel').carousel(parseInt(id));
                } catch (e) {
                    console.log('Regex failed!', e);
                }
            });
            // When the carousel slides, auto update the text
            $('#myCarousel').on('slid.bs.carousel', function (e) {
                var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
            });
        });

    </script>
@endsection
@section('css')
    <link href="frontend/_css/util.carousel.css" rel="stylesheet">
    <link href="frontend/_css/util.carousel.skins.css" rel="stylesheet">
@endsection