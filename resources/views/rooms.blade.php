@extends('layouts.base')

@section('content')
<div class="rooms">
  <h2>Номера</h2>
  <div class="row">
      <div class="container">
        <div class="col-xs-6">
        <a href="/room/1"><img src="img/rooms/budget/budget.jpg" class="img-responsive" alt="Responsive image"></a>
      </div>
      <div class="col-xs-6">
        <h3>Бюджетный двухместный номер с одной кроватью</h3>
        <p class="desc">Площадь номера 30 м<sup>2</sup></p>
        <a  class="btn btn-info booking-btn">59$/ 4140 сом</a>
      </div>
      </div>
  </div>
  <div class="row">
    <div class="container">
      <div class="col-xs-6">
        <a href="/room/2"><img src="img/rooms/standart/standart.jpg" class="img-responsive" alt="Responsive image"></a>
      </div>
      <div class="col-xs-6">
        <h3>Стандартный 2-х местный номер с раздельными кроватями</h3>
        <p class="desc">Площадь номера 35 м<sup>2</sup></p>
        <a  class="btn btn-success booking-btn">73$ / 5175 сом</a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="container">
      <div class="col-xs-6">
      <a href="/room/3"><img src="img/rooms/improved/imp.jpg" class="img-responsive" alt="Responsive image"></a>
    </div>
    <div class="col-xs-6">
      <h3>Улучшенный двухместный номер с 1 кроватью</h3>
      <p class="desc">Площадь номера 35 м<sup>2</sup></p>
      <a  class="btn btn-danger booking-btn">73$ / 5175 сом</a>
    </div>
    </div>
  </div>
  <div class="row">
    <div class="container">
      <div class="col-xs-6">
      <a href="/room/4"><img src="img/rooms/kingSize/king.jpg" class="img-responsive" alt="Responsive image"></a>
    </div>
    <div class="col-xs-6">
      <h3>Улучшенный номер с кроватью размера "king-size"</h3>
      <p class="desc">Площадь номера 50 м<sup>2</sup></p>
      <a  class="btn btn-primary booking-btn">93$ / 6555 сом</a>
    </div>
    </div>
  </div>
  <div class="row">
    <div class="container">
      <div class="col-xs-6">
      <a href="/room/5"><img src="img/rooms/luxe/luxe.jpg" class="img-responsive" alt="Responsive image"></a>
    </div>
    <div class="col-xs-6">
      <h3>Номер "Люкс"</h3>
      <p class="desc">Площадь номера 50 м<sup>2</sup></p>
      <a  class="btn btn-warning booking-btn">122$ / 8625 сом</a>
    </div>
    </div>
  </div>
</div>
@endsection
