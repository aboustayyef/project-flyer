<div class="row">
	{!! Form::open(['method' => 'POST', 'route' => 'flyers.store', 'class' => 'col-md-6']) !!}

	<div class="form-group">
	    {!! Form::label('street', 'Street:') !!}
	    {!! Form::text('street', null, ['class' => 'form-control']) !!}
	    <small class="text-danger">{{ $errors->first('street') }}</small>
	</div>
	<div class="form-group">
	    {!! Form::label('city', 'City:') !!}
	    {!! Form::text('city', null, ['class' => 'form-control']) !!}
	    <small class="text-danger">{{ $errors->first('city') }}</small>
	</div>
	<div class="form-group">
	    {!! Form::label('zip', 'Zip / Postal Code:') !!}
	    {!! Form::text('zip', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('zip') }}</small>
	</div>
	<div class="form-group">
		<?php $options = ['Lebanon', 'USA', 'UK', 'Spain']; ?>
	    {!! Form::label('country', 'Country:') !!}
	    {!! Form::select('country', $options, null, ['class' => 'form-control']) !!}
	    <small class="text-danger">{{ $errors->first('country') }}</small>
	</div>
	<div class="form-group">
	    {!! Form::label('state', 'State:') !!}
	    {!! Form::text('state', null, ['class' => 'form-control']) !!}
	    <small class="text-danger">{{ $errors->first('state') }}</small>
	</div>

	<hr>

	<div class="form-group">
	    {!! Form::label('price', 'Sale Price:') !!}
	    {!! Form::text('price', null, ['class' => 'form-control']) !!}
	    <small class="text-danger">{{ $errors->first('price') }}</small>
	</div>

	<div class="form-group">
	    {!! Form::label('description', 'Description:') !!}
	    {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 10]) !!}
	    <small class="text-danger">{{ $errors->first('description') }}</small>
	</div>

	{!! Form::submit('Submit', ['class' => 'btn btn-primary pull-right']) !!}
{!! Form::close() !!}
</div>