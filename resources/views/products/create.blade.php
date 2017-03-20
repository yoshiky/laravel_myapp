@extends('app')

  @section('content')


    <h2 class="page-header">商品登録</h2>
      {!! Form::open(['url'=>'products']) !!}
        @include('products.form', ['submitButton'=>'Create'])
      {!! Form::close() !!}
  @endsection