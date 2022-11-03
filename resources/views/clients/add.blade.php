@extends('layouts.client')
@section('title')
    {{$title}}
@endsection

@section('content')
    <h1>Thêm sản phẩm</h1>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="">Tên sản phẩm</label>
            <input type="text" class="form-control" name="product_name" placeholder="tên sản phẩm...">
        </div>

        <div class="mb-3">
            <label for="">Giá sản phẩm</label>
            <input type="text" class="form-control" name="product_price" placeholder="Giá sản phẩm...">
        </div>

        <button type="submit" class="btn btn-primary">Thêm mới</button>
        @csrf

    </form>
@endsection

@section('css')
    
@endsection

@section('js')

@endsection