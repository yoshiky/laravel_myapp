@extends('app')

  @section('content')


    <h2 class="page-header">商品登録</h2>
      {!! Form::open(['url'=>'products']) !!}
        <div class="form-group">
          <p>CODE</p>
          {!! Form::input('text', 'code', null, ['required', 'class'=>'form-controll']) !!}
        </div>
        <div class="form-group">
          <p>NAME</p>
          {!! Form::input('text', 'name', null, ['required', 'class'=>'form-controll']) !!}
        </div>
        <div class="form-group">
          <p>UNIT PRICE</p>
          {!! Form::input('text', 'unit_price', null, ['required', 'class'=>'form-controll']) !!}
        </div>
        <div class="form-group">
          <p>DESCRIPTION</p>
          {!! Form::textarea('description', null, ['class'=>'form-controll']) !!}
        </div>
        <button type="submit" class="btn btn-default">SUBMIT</button>
      {!! Form::close() !!}
  @endsection