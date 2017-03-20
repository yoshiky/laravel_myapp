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
        </tr>
      </thead>

      <tbody>
      @foreach($products as $product)
        <tr>
          <td>{{{ $product->code }}}</td>
          <td>{{{ $product->name }}}</td>
          <td>¥{{{ $product->unit_price }}}</td>
          <td>{{{ $product->description }}}</td>
          <td>{{{ $product->created_at }}}</td>
          <td>{{{ $product->updated_at }}}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  @endsection