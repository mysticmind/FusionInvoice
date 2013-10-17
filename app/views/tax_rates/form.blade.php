@extends('layouts.master')

@section('content')

<script type="text/javascript">
$(function() {
   $('#name').focus(); 
});
</script>

@if ($edit_mode == true)
{{ Form::model($taxRate, array('route' => array('taxRates.update', $taxRate->id), 'class' => 'form-horizontal')) }}
@else
{{ Form::open(array('route' => 'taxRates.store', 'class' => 'form-horizontal')) }}
@endif

<div class="headerbar">
	<h1>{{ trans('fi.tax_rate_form') }}</h1>
	@include('layouts._header_buttons')
</div>

<div class="content">

	@include('layouts._alerts')

	<div class="control-group">
		<label class="control-label">{{ trans('fi.tax_rate_name') }}: </label>
		<div class="controls">
			{{ Form::text('name', null, ['id' => 'name']) }}
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">{{ trans('fi.tax_rate_percent') }}: </label>
		<div class="controls">
			{{ Form::text('percent', null, ['id' => 'percent']) }}
		</div>
	</div>

</div>

{{ Form::close() }}

@stop