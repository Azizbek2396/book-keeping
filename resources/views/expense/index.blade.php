@extends('layouts.master')

@section('title', 'Лист')

@section('content')
    <div class="col-md-12">
        <h1>Лист</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    ТИП
                </th>
                <th>
                    КАТЕГОРИЯ
                </th>
                <th>
                    ДАТА
                </th>
                <th>
                    СУММА
                </th>
                <th>
                    ИТОГО
                </th>
                <th>
                    КОММЕНТАРИЙ
                </th>

            </tr>
{{--            @foreach($categories as $category)--}}
{{--                <tr>--}}
{{--                    <td>{{ category->id }}</td>--}}
{{--                    <td>{{ $category->name }}</td>--}}
{{--                    <td>{{ $category->tip }}</td>--}}

{{--                </tr>--}}
{{--            @endforeach--}}
            </tbody>
        </table>
    </div>
@endsection
