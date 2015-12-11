@extends('user.layout')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Ketersediaan Lapangan</h3>
          </div>
          <div class="panel-body">
          <?php $i=1?>
           @foreach ($lapangan as $lapangan)  
            <p>
            Lapangan Nomor : {{$i}} <br>
            Harga           :{{$lapangan->harga}} <br>
            Ketersediaan    :{{$lapangan->ketersediaan}} <br>
            Vendor          :{{$lapangan->vendor_id}} <br>
            </p>          
             <?php $i++ ?>                            
        @endforeach
         </div>      
        </div>
      </div>
    </div>
  </div>
 @stop
