@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <form action="/bookCreate" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group">
                                <span class="input-group-addon">
                                    <label>Имя</label>
                                </span>
                                <input type="text" class="form-control" name="name">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <label>Фамилия</label>
                                    </span>
                                    <input type="text" class="form-control" name="last_name">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" name="phone_number" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <select>
                            @for ($i = 1; $i < 32; $i++)
                                <option>{{ $i }}</option>
                            @endfor
                            </select>
                            <select>
                            @for ($i = 1; $i < 13; $i++)
                                <option>{{ $i }}</option>
                            @endfor
                            </select>
                            <select>
                            @for ($i = 2017; $i < 2021; $i++)
                                <option>{{ $i }}</option>
                            @endfor
                            </select>
                        </div>
                        <div class="row">
                            <select>
                            @for ($i = 1; $i < 32; $i++)
                                <option>{{ $i }}</option>
                            @endfor
                            </select>
                            <select>
                            @for ($i = 1; $i < 13; $i++)
                                <option>{{ $i }}</option>
                            @endfor
                            </select>
                            <select>
                            @for ($i = 2017; $i < 2021; $i++)
                                <option>{{ $i }}</option>
                            @endfor
                            </select>
                        </div>
                        <div class="row">
                            <select>
                            @foreach ($numbers as $number)
                                <option name="hotel_number">$number->name</option>
                            @endforeach
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
