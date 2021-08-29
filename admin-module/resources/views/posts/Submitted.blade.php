{{-- @if(Auth::guard('moderator')->check())
  <h1>{{Auth::guard('moderator')->user()->name}}</h1>

@else
  <h1>Not logged in</h1>
@endif --}}

@extends('layout.base')

@section('title')
Submitted posts    
@endsection

@section('content')
    


  <x-tab-bar/> 
  <!-- Tab content -->
  <div id="Articles" class="post-wrapper col-md-12 tabcontent">

    @foreach ($articles as $article )
      

      <script>
          // this is for post menu show and hide
              $(document).ready(
                  function(){
                      $("#post-menu-button{{$article->id}}").click(function(){
                        $('#opt-menu{{$article->id}}').css({"visibility":"visible"});
                        console.log("clicked")
                      });
              
                      var id = "#post-menu-button{{$article->id}}";
                      $(id).focusout(function(){
                        $('#opt-menu{{$article->id}}').css({"visibility":"hidden"});
                      });
                      
                  
                      
                    }
                );
      
       
      
              
              
      </script>
      
              
      <div class="hidden-xs hidden-sm single-post col-md-8 col-sm-8 col-xs-8">
          <div class=" row post-header ">
              <div class=" col-md-8 post-heading ">
                  <b>{{$article->title}}</b> 
              </div>
              <div class="a col-md-3 col-sm-3 "> 
              <p>Ali salar khan   </p> 
              </div>
      
              <div class="a col-md-1 col-sm-1 col-xs-1" style="white-space: nowrap;"> 
                      <p>5d ago  </p>  
                      
              </div>
             
              
          </div>
          <!-- post header -->
          
          <div class=" row post-body">
              <p>{{$article->content}}
              </p>
          </div>
          <!-- post body -->
          <div class=" row post-footer">
                  
                  <div class="col-md-4">
                      <p>Microbiology</p>
      
                  </div>
                  <div class="col-md-6" >
                    <div class="row">
                        
                        <div class="col-md-2">
                            <form   style="margin-right: 3px; margin-bottom: 5px;" action="{{route('approve-post', $article->id)}}" method="POST">
                                @csrf
                                <button id="demo" style="" class="btn btn-success btn-xs">Approve</button>
                              </form>
                        </div>
                        <div class="col-md-2">
                            <form  style="margin-right: 3px; margin-bottom: 5px;" action="{{route('to-edit-post', $article->id)}}" method="POST">
                                @csrf  
                              <button id="demo" style="" class="btn btn-info btn-xs">To Edit</button>
                              </form>
                          </div>
                          <div class="col-md-2">
                              <form  style="margin-right: 3px; margin-bottom: 5px;" action="{{route('reject-post', $article->id)}}" method="POST">
                                  @csrf 
                                <button id="demo" class="btn btn-danger btn-xs">Reject</button>
                                </form>
                            </div>
                    </div>
                    
                    
                  </div>
                  <div class="" style="float: right;">
                      <a href="{{route('full-post', $article->id)}}">
                          <button id="demo" style="margin-right: 30px; height: 30px; margin-bottom: 25px;" class="btn bn-sm btn-info">View Full</button>
                      </a>
                  </div>
          </div>
          <!-- post footer -->
          <!-- single post article --> 
      </div>
      <!-- end Article tab content div- london -->
    @endforeach
  
        
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


@endsection