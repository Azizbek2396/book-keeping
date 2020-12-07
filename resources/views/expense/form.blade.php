@extends('layouts.master')

@section('title', 'Создать категорию')

@section('content')
    <div class="col-md-12">
        <h1>Добавить Категорию</h1>

        <form method="POST" enctype="multipart/form-data"  action="{{ route('expense.store') }}">
            <div>
                @csrf
                <div class="input-group row" style="width: 100%;">
                    <label for="tip" class="col-sm-2 col-form-label">Тип: </label>
                    <div class="col-sm-6">
                        <select name="tip" id="tip">
                            @foreach($tips as $tip)
                                <option value="{{ $tip->name }}">{{ $tip->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="input-group row" style="width: 100%;">
                    <label for="category" class="col-sm-2 col-form-label">КАТЕГОРИЯ: </label>
                    <div class="col-sm-6">
                        <select name="category" id="category">
                            @foreach($categories as $category)
                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="input-group row" style="width: 100%;">
                    <label for="money" class="col-sm-2 col-form-label">СУММА: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="money" id="money" value="">
                        @error('money')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <br>

                <div class="input-group row" style="width: 100%;">
                    <label for="comment" class="col-sm-2 col-form-label">КОММЕНТАРИЙ: </label>
                    <div class="col-sm-6">
                        <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
                        @error('comment')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>

@endsection
