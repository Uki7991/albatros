@extends('layouts.base')

@section('content')
<div class="container room-section">
            <div class="row">
                <h3>{{ $room->fullTitle }}</h3>
                <div class="col-md-6">
                    <!--carusel -->
                      <div id="carousel-example-generic" class="carousel slide hidden-sm hidden-xs hidden-xs" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner room " role="listbox">
                          <div class="item active">
                            <img src="{{ $room->imgPath }}" alt="Изображение номера">
                          </div>
                          <div class="item">
                            <img src="{{ $room->imgPath2 }}" alt="Изображение номера">
                          </div>
                          <div class="item">
                            <img src="{{ $room->imgPath3 }}" alt="Изображение номера">
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
                </div>
                
                <div class="col-md-6 room-desc">
                  <div class="col-xs-12 hidden-md hidden-lg">
                    <img class="img-responsive" src="{{ $room->imgPath }}">
                  </div>
                    <div class="desription">
                        <h4>Оснащение номера:</h4>
                        <ul>
                            <li>Шкаф/гардероб</li>
                            <li>LED телевизор с ID интерактив. телевидением</li>
                            <li>Телефон</li>
                            <li>Кондиционер</li>
                            <li>Холодильник</li>
                            <li>Комплект постельного белья, подушки, одеяла, покрывало, 2 прикроватных тумбочки</li>
                            <li>Интернет (Wi-Fi / Internet)</li>
                        </ul>
                    </div>
                    <div class="row">
                      <p class="pull-left">{{ $room->price }} сом</p>
                      <p class="pull-right">{!! $room->roomDesc !!}</p>
                    </div>
                    
                    <a class="btn booking-btn {{ $room->btnClass }}">Забронировать</a>

                </div>
            </div>
        </div>

@endsection
