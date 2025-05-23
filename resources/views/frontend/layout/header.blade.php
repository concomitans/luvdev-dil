<div class="top-section">
    <div class="container" style="max-width: 1050px; width: 100%; padding: 0 15px; margin: 0 auto;">
        <div class="row">
            <div class="col-12">
                <div class="row align-items-center top-content flex-md-row flex-column-reverse" style="min-height: 10px;"> 
                    <!-- Telefon ve Mail Bilgileri -->
                    <div class="col-md-6">
                        <div class="info-text h-100 d-flex align-items-center"> 
                            <div class="d-flex align-items-center justify-content-md-start justify-content-center py-2"> 
							<i class="fas fa-clock"></i>
							<span> 08:30 - 18:00 </span>
							<span class="text-muted mx-2">|</span>
                                <i class="fas fa-phone-alt me-2" ></i>
                                <a href="tel:+902623258981" class="text-dark me-3">+90 (262) 325 89 81</a>
                                <span class="text-muted mx-2">|</span> <!-- Daha iyi görünüm için text-muted -->
                                <a href="mailto:info@luvianmachinery.com" class="d-flex align-items-center text-decoration-none ms-2">
                                    <i class="fas fa-envelope me-2"></i>
                                    <span>info@luvianmachinery.com</span>
                                </a>
								
								
                            </div>
                        </div>
                    </div>

<div class="col-md-6 text-md-end text-center py-2">
  <!-- Türkçe Butonu -->
  <a href="" 
     title="Türkiye" 
     class="language-flag me-3">
    <img style="width:35px; height:auto;" 
         src="{{ asset('frontend/_images/tr.png') }}" 
         alt="Türk Bayrağı">
  </a>

  <!-- İngilizce Butonu -->
  <a href="" 
     title="England" 
     class="language-flag me-3">
    <img style="width:35px; height:auto;" 
         src="{{ asset('frontend/_images/eng.png') }}" 
         alt="İngiliz Bayrağı">
  </a>

  <!-- Rusça Butonu -->
  <a href="" 
     title="Russia" 
     class="language-flag me-3"
     style="margin-right:-480px; margin-top:5px;">
    <img style="width:35px; height:auto;" 
         src="{{ asset('frontend/_images/rus.png') }}" 
         alt="Rus Bayrağı">
  </a>
</div>              </div>
            </div>
        </div>
    </div>
    <div class="red-line" style="height: 2px; background: #e74c3c;"></div>
</div>



<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-8">
            <a href="index" title="Luvian Machinery">
                <div class="img-responsive banner"><img src="frontend/_images/luvlog.png" alt=""></div>
            </a>
        </div>
    </div>
</div>
    <div class="menu">
        <div class="container">
            <nav class="navbar navbar-default mb0">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button class="c-hamburger c-hamburger--rot navbar-toggle collapsed visible-xs" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span>Menü</span></button>
                    </div>


                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li @if(Request::segment(1)=='index')class="active"@endif><a href="index">Anasayfa<span class="sr-only">(current)</span></a></li>
														 <li @if(Request::segment(1)=='urunlerimiz')class="active"@endif class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kurumsal<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                    <li><a href="hakkimizda">Hakkımızda</a></li>
                                    <li><a href="misyon-vizyon">Misyon & Vizyon</a></li>
                                                    <li><a href="kalite-yonetimi">Kalite Yönetimi</a></li>

                                                </ul>
                            </li>
                                            <li @if(Request::segment(1)=='urunlerimiz')class="active"@endif class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ürünlerimiz<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                    <li><a href="rulo-sarim">Rulo Sarım Makinaları</a></li>
                                    <li><a href="pecete-grubu">Peçete Üretim Makinaları </a></li>
                                                    <li><a href="paketleme">Paketleme</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="yedek-parca">Yedek Parçalar</a></li>
													<li role="separator" class="divider"></li>
                                                    <li><a href="ikinci-el">İkinci El</a></li>

                                                </ul>
                            </li>
							<li @if(Request::segment(1)=='urunlerimiz')class="active"@endif class="dropdown">
                                                <a href="fuarlar" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Basında Biz<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                    <li><a href="fuarlar">Fuarlar</a></li>
                                    <li><a href="haberler">Haberler</a></li>

                                                </ul>
                            </li>
							<li @if(Request::segment(1)=='teknik-servis')class="active"@endif><a href="teknik-servis">Teknik Servis</a></li>
							<li @if(Request::segment(1)=='iletisim')class="active"@endif><a href="iletisim">İletişim</a></li>
                        </ul>
						
                        <form class="navbar-form navbar-right">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Site içi arama..">
                            </div>
                            <button type="submit" class="btn btn-default buton-renk">Ara</button>
                        </form>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div><!-- header sonu -->
