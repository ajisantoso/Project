@extends('admin.layout')
@section('content')
<div class="col-md-4">
</div>
<div class="col-md-4">
@if (!empty($success))
  <div class="alert alert-info">
    {{ $success }}
    </div>
@endif
 <h3 align="left">Daftarkan Vendor</h3>

{!! Form::open(['route' => 'vendors-registration']) !!}
<meta id="token" name="token" content="{{ csrf_token() }}">
<div class="form-group"> 
 {!! Form::label('nama', 'Nama :') !!}
 {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group"> 
 {!! Form::label('alamat', 'Alamat :') !!}
 {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group"> 
 {!! Form::label('telepon', 'Telepon :') !!}
 {!! Form::text('telepon', null,['class' => 'form-control']) !!}
</div>

<div class="form-group"> 
 {!! Form::label('fasilitas', 'Fasilitas :') !!}
 {!! Form::text('fasilitas',null, ['class' => 'form-control']) !!}
</div>

<div class="form-group"> 
 {!! Form::label('peraturan', 'Peraturan :') !!}
 {!! Form::text('peraturan',null, ['class' => 'form-control']) !!}
</div>
 @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif
<div class="form-group"> 
 {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
</div>

</div>
<div>
</div>
@stop
