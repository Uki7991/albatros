@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 book">
            <h2>Бронирование</h2>
            <form action="/bookCreate" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-4 col-sm-4 ">
                                <div class="input-group">
                                    <label for="inputEmail3" class="control-label">Имя <i>*</i></label>
                                
                                <input type="text" class="form-control" name="name">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-4 col-sm-4 ">
                                <div class="input-group">
                                    <label for="inputEmail3" class="control-label">Фамилия <i>*</i></label>
                                    <input type="text" class="form-control" name="last_name">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                              <div class="col-lg-4 col-sm-4 ">
                                <div class="input-group">
                                    <label for="inputEmail3" class="control-label">Номер телефона <i>*</i></label>
                                    <input type="text" name="phone_number" class="form-control" placeholder="996123456789">
                                </div>
                            </div>
                        </div><!-- /.row -->
                          
                        <div class="row">
                            <label for="">Дата приезда: <i>*</i></label>
                            <select name="coming_day">
                            @for ($i = 1; $i < 32; $i++)
                                
                                <option>@if ($i < 10){{ 0 }}@endif{{ $i }}</option> 
                            @endfor
                            </select>
                            <select name="coming_month">
                            @for ($i = 1; $i < 13; $i++)
                                <option>@if($i < 10){{ 0 }}@endif{{ $i }}</option>
                            @endfor
                            </select>
                            <select name="coming_year">
                            @for ($i = 2017; $i < 2021; $i++)
                                <option>{{ $i }}</option>
                            @endfor
                            </select>
                        </div>
                        <div class="row">
                            <label for="">Дата выезда: <i>*</i></label>
                            <select name="leaving_day">
                            @for ($i = 1; $i < 32; $i++)
                                <option>@if ($i < 10){{ 0 }}@endif{{ $i }}</option>
                            @endfor
                            </select>
                            <select name="leaving_month">
                            @for ($i = 1; $i < 13; $i++)
                                <option>@if ($i < 10){{ 0 }}@endif{{ $i }}</option>
                            @endfor
                            </select>
                            <select name="leaving_year">
                            @for ($i = 2017; $i < 2021; $i++)
                                <option>{{ $i }}</option>
                            @endfor
                            </select>
                        </div>
                        <div class="row">
                            <label for="">Тип номера: <i>*</i></label>
                            <select name="hotel_number">
                            @foreach ($numbers as $number)
                                <option value="{{ $number->id }}">{{ $number->name }}</option>
                            @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg">Забронировать</button>
                    </form>
        </div>
    </div>
</div>

@endsection
