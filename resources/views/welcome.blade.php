@extends('layouts.base')

@section('content')

<!--carusel -->
      <div id="carousel-example-generic" class="carousel slide hidden-sm hidden-xs hidden-xs" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="img/main-slide.jpg" alt="...">
            <div class="carousel-caption">
              
            </div>
          </div>
          <div class="item">
            <img src="img/main-slide1.jpg" alt="...">
            <div class="carousel-caption">
              
            </div>
          </div>
          
        </div>
        
        
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <h3 class="slogon"></h3>



    
    <section id="rooms" class="numbers hidden-sm hidden-xs hidden-xs">
      
      <h2>НОМЕРА</h2>
      <p>Garden hotel Bishkek оснащен 26-ю номерами трех категорий</p>

      <div class="container">
        <div class="row">
          <div class="col-xs-4 card">
            <a href="/room/1"><img src="img/cards/1.jpg" class="img-responsive" alt="Responsive image"></a>
            <h3>Бюджетный двухместный номер с одной кроватью</h3>
            <p class="desc">Площадь номера 30 м<sup>2</sup></p>
            <a href="/book" class="btn btn-info">59$/ 4140 сом</a>
          </div>
          <div class="col-xs-4 card">
            <a href="/room/2"><img src="img/cards/2.jpg" class="img-responsive" alt="Responsive image"></a>
            <h3>Стандартный 2-х местный номер с раздельными кроватями</h3>
            <p class="desc">Площадь номера 35 м<sup>2</sup></p>
            <a href="/book" class="btn btn-success">73$ / 5175 сом</a>
          </div>
          <div class="col-xs-4 card">
            <a href="/room/3"><img src="img/cards/3.jpg" class="img-responsive" alt="Responsive image"></a>
            <h3>Улучшенный двухместный номер с 1 кроватью</h3>
            <p class="desc">Площадь номера 35 м<sup>2</sup></p>
            <a href="/book" class="btn btn-danger">73$ / 5175 сом</a>
          </div>
          <div class="col-xs-4 card col-md-offset-2">
            <a href="/room/4"><img src="img/cards/card.jpg" class="img-responsive" alt="Responsive image"></a>
            <h3>Улучшенный номер с кроватью размера "king-size"</h3>
            <p class="desc">Площадь номера 50 м<sup>2</sup></p>
            <a href="/book" class="btn btn-primary">93$ / 6555 сом</a>
          </div>
          <div class="col-xs-4 card">
            <a href="/room/5"><img src="img/cards/5.jpg" class="img-responsive" alt="Responsive image"></a>
            <h3>Номер "Люкс"</h3>
            <p class="desc">Площадь номера 50 м<sup>2</sup></p>
            <a href="/book" class="btn btn-warning">122$ / 8625 сом</a>
          </div>
        </div>
      </div>

    </section>



    <section id="galery" class="tour hidden-sm hidden-xs hidden-xs">
      
      <h2>ГАЛЕРЕЯ</h2>

          <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:800px;height:456px;overflow:hidden;visibility:hidden;background-color:#24262e;">
              <!-- Loading Screen -->
              <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
                  <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                  <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
              </div>
              <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:800px;height:356px;overflow:hidden;">
                  <div>
                      <img data-u="image" src="img/1.jpg" />
                      <img data-u="thumb" src="img/1.jpg" />
                  </div>
                  <div>
                      <img data-u="image" src="img/2.jpg" />
                      <img data-u="thumb" src="img/2.jpg" />
                  </div>
                  <div>
                      <img data-u="image" src="img/3.jpg" />
                      <img data-u="thumb" src="img/3.jpg" />
                  </div>
                  <div>
                      <img data-u="image" src="img/4.jpg" />
                      <img data-u="thumb" src="img/4.jpg" />
                  </div>
                  <div>
                      <img data-u="image" src="img/5.jpg" />
                      <img data-u="thumb" src="img/5.jpg" />
                  </div>
                  <div>
                      <img data-u="image" src="img/6.jpg" />
                      <img data-u="thumb" src="img/6.jpg" />
                  </div>
                  <div>
                      <img data-u="image" src="imag/07.jpg" />
                      <img data-u="thumb" src="imag/thumb-07.jpg" />
                  </div>
                  <a data-u="any" href="http://www.jssor.com" style="display:none">Image Gallery</a>
                  <div>
                      <img data-u="image" src="imag/08.jpg" />
                      <img data-u="thumb" src="imag/thumb-08.jpg" />
                  </div>
                  <div>
                      <img data-u="image" src="imag/09.jpg" />
                      <img data-u="thumb" src="imag/thumb-09.jpg" />
                  </div>
                  <div>
                      <img data-u="image" src="imag/10.jpg" />
                      <img data-u="thumb" src="imag/thumb-10.jpg" />
                  </div>
                  <div>
                      <img data-u="image" src="imag/11.jpg" />
                      <img data-u="thumb" src="imag/thumb-11.jpg" />
                  </div>
                  <div>
                      <img data-u="image" src="imag/12.jpg" />
                      <img data-u="thumb" src="imag/thumb-12.jpg" />
                  </div>
              </div>
              <!-- Thumbnail Navigator -->
              <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1">
                  <!-- Thumbnail Item Skin Begin -->
                  <div data-u="slides" style="cursor: default;">
                      <div data-u="prototype" class="p">
                          <div class="w">
                              <div data-u="thumbnailtemplate" class="t"></div>
                          </div>
                          <div class="c"></div>
                      </div>
                  </div>
                  <!-- Thumbnail Item Skin End -->
              </div>
              <!-- Arrow Navigator -->
              <span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
              <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
          </div>

    </section>

    



    <section id="info" class="info hidden-sm hidden-xs hidden-xs">
      
      <div class="container">
        
        <h2><strong>О НАС</strong></h2>

        <p><b>Albatros Hotel Bishkek</b> находится в Бишкеке, в 5 минутах езды от центра города, рядом с Ботаническим Садом в тихом уютном районе, в доступной близости от всех важнейших деловых, культурных и административных центров столицы Бишкек. К услугам гостей отеля Albatros Bishkek бесплатный Wi-Fi и круглосуточная стойка регистрации.</p>
        <br>
        <p>Номера оформлены в классическом стиле, в теплой цветовой гамме, обставлены итальянской мебелью из темного дерева и оснащены кондиционером. В числе удобств в каждом номере телевизор с плоским экраном, холодильник и собственная ванная комната, которая   оборудована всем необходимым. Albatros Hotel Bishkek  подойдет как для отдыха так и для деловой поездки, обеспечивая отдыхающим приятное и  расслабляющее пребывание.</p>
        <br>
        <p>В ресторане отеля накрывают континентальный завтрак.</p>
        <br>
        <p>Центральный железнодорожный вокзал Бишкека расположен в 15 минутах езды от отеля Albatros Bishkek, международный аэропорт Манас — в 32 км.</p>
        <br>
        <p><b>Мы говорим на вашем языке!</b></p>

      </div>

    </section>



    <section id="service" class="inhotel hidden-sm hidden-xs hidden-xs">
        <div class="container">
            <h2>Наши услуги</h2>
            <div class="wrapp">
              <p class="service">Трансеф из аэропорта</p>
              <p class="service">Завтрак</p>
              <p class="service">Магазин этносувениров</p>
              <p class="service">Конференц зал</p>
            </div>
            <div class="wrapp imeg">
              <div class="row">
                  <div class="col-xs-3 service"><img src="img/inhotel/inhotel-1.jpg" alt=""></div>
                  <div class="col-xs-3 service"><img src="img/inhotel/inhotel-2.jpg" alt=""></div>
                  <div class="col-xs-3 service"><img src="img/inhotel/inhotel-3.jpg" alt=""></div>
                  <div class="col-xs-3 service"><img src="img/inhotel/inhotel-4.jpg" alt=""></div>
            </div>
              </div>
            <div class="wrapp imeg row">
              <div class="col-xs-3 service"><img src="img/inhotel/inhotel-5.jpg" alt=""></div>
              <div class="col-xs-3 service"><img src="img/inhotel/inhotel-6.jpg" alt=""></div>
              <div class="col-xs-3 service"><img src="img/inhotel/inhotel-7.jpg" alt=""></div>
              <div class="col-xs-3 service"><img src="img/inhotel/inhotel-8.jpg" alt=""></div>
            </div>
            <div class="wrapp">
              <p class="service">Прокат велосипедов</p>
              <p class="service">Массаж в номере</p>
              <p class="service">Спорт зал</p>
              <p class="service">Тур поездки по Кыргызстану</p>
            </div>
        </div>
    </section>
    
        <div class="container container-mobile hidden-lg hidden-md">
          <ul>
            <li><a href=""><i class="fa fa-bed" aria-hidden="true"></i>&nbsp;Номера<i class="fa fa-arrow-circle-right pull-right fa-lg" aria-hidden="true"></i></a></li>
            <li><a href="/book"><i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp;Бронирование<i class="fa fa-arrow-circle-right pull-right fa-lg" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp;Партнерам<i class="fa fa-arrow-circle-right pull-right fa-lg" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-compass" aria-hidden="true"></i>&nbsp;Меcтоположение<i class="fa fa-arrow-circle-right pull-right fa-lg" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-comments" aria-hidden="true"></i>&nbsp;Отзывы<i class="fa fa-arrow-circle-right pull-right fa-lg" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;Новости<i class="fa fa-arrow-circle-right pull-right fa-lg" aria-hidden="true"></i></a></li>
          </ul>
        </div>
       



@endsection