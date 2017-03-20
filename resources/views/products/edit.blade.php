@extends('app')

  @section('content')


    <h2 class="page-header">商品編集</h2>
      {!! Form::model($product,['method' => 'PATCH', 'url' => ['products', $product->id]]) !!}
        @include('products.form', ['submitButton' => 'Edit'])
      {!! Form::close() !!}
  @endsection