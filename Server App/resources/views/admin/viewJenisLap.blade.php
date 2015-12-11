@extends('admin.layout')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Tipe Lapangan</h3>
          </div>
          <div class="panel-body">
          <?php $i=1?>
           @foreach ($tipe_lap as $tipe_lap) 
            <p>
            Jenis Lapangan : {{$i}} <br>
            Tipe           :{{$tipe_lap->tipe}} <br>
            Description    :{{$tipe_lap->description}} <br>
            </p>                            
            <?php $i++ ?>   
        @endforeach
         </div>
        </div>
      </div>
    </div>
  </div>

   @stop
