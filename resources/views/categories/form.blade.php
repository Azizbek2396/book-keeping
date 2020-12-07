@extends('layouts.master')

@section('title', 'Создать категорию')

@section('content')
            <div class="col-md-12">
                <h1>Добавить Категорию</h1>

                <form method="POST" enctype="multipart/form-data"  action="{{ route('categories.store') }}">
                    <div>
                        @csrf
                        <div class="input-group row" style="width: 100%;">
                            <label for="name" class="col-sm-2 col-form-label">Название: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="name" id="name" value="">
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <br>
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

                        <button class="btn btn-success">Сохранить</button>
                    </div>
                </form>
            </div>

@endsection
