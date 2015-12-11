@extends('master')

@section('content')
<div class="col-md-4">
</div>
<div class="col-md-4">
 <br><br><br><br><br>
 @if (!empty($success))
  <div class="alert alert-info">
    {{ $success }}
    </div>
@endif
 <h3 align="middle">Registration</h3>
{!! Form::open(['route' =>'user-registration']) !!}
<div class="form-group"> 
 {!! Form::label('name', 'Name :') !!}
 {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group"> 
 {!! Form::label('email', 'Email :') !!}
 {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group"> 
 {!! Form::label('password', 'Password :') !!}
 {!! Form::password('password',['class' => 'form-control']) !!}
</div>
<div class="form-group"> 
 {!! Form::label('password_confirmation', 'Re-Password :') !!}
 {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
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
