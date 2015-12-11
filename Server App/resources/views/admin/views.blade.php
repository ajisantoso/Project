@extends('admin.layout')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Available Vendor</h3>
          </div>
          <div class="panel-body">
          <?php $i=1?>
           @foreach ($vendor as $vendor) 
            <p>
           Vendor Nomor  : {{$i}} <br>
           nama      : {{$vendor->nama}} <br>
           alamat    :{{$vendor->alamat}} <br>
           telepon   :{{$vendor->telepon}} <br>
           fasilitas :{{$vendor->fasilitas}} <br>
           peraturan :{{$vendor->peraturan}} <br/>
            </p>   
            <?php $i++ ?>                            
        @endforeach
         </div>
        </div>
      </div>
    </div>
  </div>

   <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Add Lapangan</h3>
          </div>
          <div class="panel-body">
          @if (!empty($success))
  <div class="alert alert-info">
    {{ $success }}
    </div>
@endif

{!! Form::open(['route' => 'lapangan-registration']) !!}

<meta id="token" name="token" content="{{ csrf_token() }}">
<div class="form-group"> 
 {!! Form::label('tipe_id', 'Jenis Lapangan :') !!}
 {!! Form::select('tipe_id', $lap_jenis, array('class' => 'form-control')) !!}
</div>

<div class="form-group"> 
 {!! Form::label('harga', 'Harga /Jam :') !!} 
 {!! Form::text('harga', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group"> 
 {!! Form::label('vendor_id', 'Vendor Pemilik :') !!}
  {!! Form::select('vendor_id', $vendor_name, array('class' => 'form-control')) !!}
</div>

 @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif
<div class="form-group"> 
 {!! Form::submit('Tambahkan Lapangan', ['class' => 'btn btn-primary form-control']) !!}
</div>        
         </div>
        </div>
      </div>
    </div>
  </div>
@stop
