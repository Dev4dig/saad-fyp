@if(Auth::guard('moderator')->check())
  <h1>{{Auth::guard('moderator')->user()->name}}</h1>

@else
  <h1>Not logged in</h1>
@endif


{{-- @extends('layout.base')

@section('title')
Submitted posts    
@endsection

@section('content')
    


  <x-tab-bar/> 
  <!-- Tab content -->
  <div id="Articles" class="post-wrapper col-md-12 tabcontent">
    @for ($i = 0; $i <=3; $i++)
        <x-test2 data={{$i}}/>
    @endfor  
        
  </div>
   
<!-- ===================================================================================== -->
  
 <!-- media posts content tab div -->
    <div id="Media" class="tabcontent">
        @for ($i = 0; $i <=3; $i++)
         <x-mpu data={{$i}}/>
        @endfor  
        
        <x-media_post_d/>
    </div>
    <!-- End media tab containt div -->


@endsection --}}