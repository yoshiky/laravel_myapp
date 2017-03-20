@extends('app')

  @section('content')
    <h2 class="page-header">商品一覧</h2>
    <table class="table table-sprited table-hover">
      <thead>
        <tr>
          <th>CODE</th>
          <th>NAME</th>
          <th>UNIT PRICE</th>
          <th>DESCRIPTION</th>
          <th>CREATED AT</th>
          <th>UPDATED AT</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      {!! link_to('products/create', 'Add product', ['class' => 'btn btn-primary']) !!}
      <tbody>
      @foreach($products as $product)
        <tr>
          <td>{{{ $product->code }}}</td>
          <td>{{{ $product->name }}}</td>
          <td>¥{{{ $product->unit_price }}}</td>
          <td>{{{ $product->description }}}</td>
          <td>{{{ $product->created_at }}}</td>
          <td>{{{ $product->updated_at }}}</td>
          <td>{!! link_to(action('ProductsController@edit', [$product->id]), 'Edit', ['class' => 'btn btn-warning']) !!}</td>
          <td>
            {!! Form::open(['method'=>'DELETE', 'url'=>['products', $product->id]]) !!}
              {!! Form::submit('Del', ['class'=>'btn btn-danger']) !!}
            {!! Form::close() !!}
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  @endsection