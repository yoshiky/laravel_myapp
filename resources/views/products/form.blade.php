<div class="form-group">
  <p>CODE</p>
  {!! Form::text('code', null, ['required', 'class'=>'form-controll']) !!}
</div>
<div class="form-group">
  <p>NAME</p>
  {!! Form::text('name', null, ['required', 'class'=>'form-controll']) !!}
</div>
<div class="form-group">
  <p>UNIT PRICE</p>
  {!! Form::text('unit_price', null, ['required', 'class'=>'form-controll']) !!}
</div>
<div class="form-group">
  <p>DESCRIPTION</p>
  {!! Form::textarea('description', null, ['class'=>'form-controll']) !!}
</div>
{!! Form::submit($submitButton, ['class'=>'btn btn-default form-controll']) !!}

{!! link_to('products', 'Back to Index', ['class' => 'btn btn-default']) !!}