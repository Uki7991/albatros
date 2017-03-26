@extends('layouts.admin')

@section('content')
@if (!(Auth::guest()))
@if (Auth::user()->admin == 1)
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Заявки на бронь</div>

                <div class="panel-body">
                <table class="table table-bordered">
                    <tr>
                        <td>#</td>
                        <td>Имя</td>
                        <td>Фамилия</td>
                        <td>Номер</td>
                        <td>День приезда</td>
                        <td>Месяц приезда</td>
                        <td>Год приезда</td>
                        <td>День отхода</td>
                        <td>Месяц отхода</td>
                        <td>Год отхода</td>
                        <td>Тип номера</td>
                    </tr>
                
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->last_name }}</td>
                        <td>{{ $book->phone_number }}</td>
                        <td class="col-md-1">@if ($book->coming_day < 10){{ 0 }}@endif{{ $book->coming_day }}</td>
                        <td class="col-md-1">@if ($book->coming_month < 10){{ 0 }}@endif{{ $book->coming_month }}</td>
                        <td class="col-md-1">{{ $book->coming_year }}</td>
                        <td class="col-md-1">@if ($book->leaving_day < 10){{ 0 }}@endif{{ $book->leaving_day }}</td>
                        <td class="col-md-1">@if ($book->leaving_month < 10){{ 0 }}@endif{{ $book->leaving_month }}</td>
                        <td class="col-md-1">{{ $book->leaving_year }}</td>
                        <td class="col-md-1">{{ $book->hotel_number }}</td>
                    </tr>
                @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endif
@endsection
