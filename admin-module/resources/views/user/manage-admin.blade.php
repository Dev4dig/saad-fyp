@extends('layout.base')

@section('content')
    


 <x-tab_bar first="User requests" second="Moderators"/>
  <!-- Tab content -->
  <div id="Articles" class="post-wrapper col-md-12 tabcontent">
        
        <div class="row">
          <div class="col-md-6">
                
                <h4>Approved Users</h4>
            @foreach ($users as $user)
                
                   
                            <script>
                                    // this is for post menu show and hide
                                        $(document).ready(
                                            function(){
                                                $("#user-menu-button{{$user->id}}").click(function(){
                                                $('#user-opt-menu{{$user->id}}').css({"visibility":"visible"});
                                                console.log("clicked")
                                                });
                                        
                                                var id = "#user-menu-button{{$user->id}}";
                                                $(id).focusout(function(){
                                                $('#user-opt-menu{{$user->id}}').css({"visibility":"hidden"});
                                                });
                                                
                                            
                                                
                                            }
                                        );
                                
                                
                                
                                        
                                        
                                </script>    
                                
                                {{-- \Admin Card Wrapper --}}
                                <div class="col-md-12 col-sm-12 user-card-wrapper">
                                        {{-- row --}}
                                        <div style="height: 100%" class="row">
                                            {{-- profile pic wrapper --}}
                                            <div class="col-md-2 col-sm-3 user-card-profile-pic-wrapper">
                                                <div class="profile-pic-div">
                                                    <img class="prfile-pic" src="{{asset('adm.png')}}" alt="">
                                
                                                </div>
                                            </div>
                                            {{--end profile pic wrapper --}}
                                
                                            {{-- profile details wrapper --}}
                                            <div class="col-md-7 col-sm-8 user-card-profile-details-wrapper">
                                                <div class="profile-name">
                                                    <p style=" display: inline-block;">{{$user->name}} </p><h5 style="margin-left:5px; display: inline-block; color: #bbbbbb;"> - Admin</h5>
                                                    
                                                </div>
                                
                                                <div class="profile-details">
                                                    <p>{{$user->about}}</p>
                                                </div>
                                            </div>
                                            {{--end profile details wrapper --}}
                                
                                            {{-- left side wrapper --}}
                                            <div class=" col-md-3 profile-card-left-wrapper" >
                                                <div style="height:50%; width:100%;">
                                                <button class="article-opt-menu-btn btn-info" id="user-menu-button{{$user->id}}">
                                                    
                                                                <span class="glyphicon glyphicon-option-horizontal"></span>
                                                        </button>
                                                </div>
                                                <div class="user-opt-menu" id="user-opt-menu{{$user->id}}">
                                                        <ul>
                                                       
                                                            

                                                       
                                                            <div class="hr-divider"></div>
                                                           
                                                            
                                                        </ul>
                                                    
                                                    </div>
                                                <div style="padding-left:8%; padding-top:10%; height:50%; width:200%;" class="row">
                                                        

                                                        <form action="{{ route('delete-user', $user->id) }}" method="POST">
                                                                @csrf   
                                                            <button type="submit" class="btn btn-xs btn-danger"> Delete
                                                            </button>
                                                        </form>        
                                           
                                                
                                                </div>
                                            </div>
                                            {{-- end left side wraapper --}}
                                        </div>
                                        {{-- end row --}}
                                    </div>   
                                {{--  end Admin Card Wrapper --}}  
                    
                    
            @endforeach
    </div>
    {{-- first col end --}}



    {{-- secnd colmn --}}
    <div class="col-md-6">
            <h4>New Users Requestes</h4>
    
            @foreach ($requests as $request)
                
                   
            <script>
                    // this is for post menu show and hide
                        $(document).ready(
                            function(){
                                $("#request-menu-button{{$request->id}}").click(function(){
                                $('#request-opt-menu{{$request->id}}').css({"visibility":"visible"});
                                console.log("clicked")
                                });
                        
                                var id = "#request-menu-button{{$request->id}}";
                                $(id).focusout(function(){
                                $('#request-opt-menu{{$request->id}}').css({"visibility":"hidden"});
                                });
                                
                            
                                
                            }
                        );
                
                
                
                        
                        
                </script>    
                
                {{-- \Admin Card Wrapper --}}
                <div class="col-md-11 col-sm-11 user-card-wrapper">
                        {{-- row --}}
                        <div style="height: 100%" class="row">
                            {{-- profile pic wrapper --}}
                            <div class="col-md-2 col-sm-3 user-card-profile-pic-wrapper">
                                <div class="profile-pic-div">
                                    
                                <img class="prfile-pic" src="{{asset('adm.png')}}" alt="">
                                {{-- http://192.168.43.193:8000/storage/SQvrN2QKwrQY3pbvL5LsENpLEvzVeaJv3nbEl3Ae.jpg --}}
                
                                </div>
                            </div>
                            {{--end profile pic wrapper --}}
                
                            {{-- profile details wrapper --}}
                            <div class="col-md-7 col-sm-8 user-card-profile-details-wrapper">
                                <div class="profile-name">
                                    <p style=" display: inline-block;">{{$request->name}} </p><h5 style="margin-left:5px; display: inline-block; color: #bbbbbb;"> - Admin</h5>
                                    
                                </div>
                
                                <div class="profile-details">
                                    <p>{{$request->about}}</p>
                                </div>
                            </div>
                            {{--end profile details wrapper --}}
                
                            {{-- left side wrapper --}}
                            <div class=" col-md-3 profile-card-left-wrapper" >
                                <div style="height:50%; width:100%;">
                                <button class="article-opt-menu-btn btn-info" id="request-menu-button{{$request->id}}">
                                    
                                                <span class="glyphicon glyphicon-option-horizontal"></span>
                                        </button>
                                </div>
                                <div class="user-opt-menu" id="request-opt-menu{{$request->id}}">
                                        <ul>
                                       
                                            
                                            
                                        </ul>
                                    
                                    </div>
                                <div style="padding-left:48%; padding-top:10%; height:50%; width:115%;" class="row">
                                        



                                        <form action="{{ route('approve-user', $request->id) }}" method="POST"> 
                                                @csrf
                                                <button type="submit" class="btn btn-success btn-xs"> Approve
                                                </button>
                                            </form>
                                            
                                            <form action="{{ route('delete-user', $request->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-xs"> Delete
                                                    </button>
                                                </form>
                                            
                                </div>
                            </div>
                            {{-- end left side wraapper --}}
                        </div>
                        {{-- end row --}}
                    </div>   
                {{--  end Admin Card Wrapper --}}  
    
    
@endforeach
    </div>
    {{-- second dolumn end --}}
    </div>
    {{-- row end --}}
    
  </div>
   
<!-- ===================================================================================== -->
  
 <!-- media posts content tab div -->
    <div id="Media" class="tabcontent">

            <div class="col-md-8 col-sm-8" >
                
                {{-- for admins --}}
                <div class="row" style="max-height: 500px; ">
                    <h4>Admins</h4>
                        @foreach ($admins as $admin)
                        <script>
                            // this is for post menu show and hide
                                $(document).ready(
                                    function(){
                                        $("#admin-menu-button{{$admin->id}}").click(function(){
                                          $('#admin-opt-menu{{$admin->id}}').css({"visibility":"visible"});
                                          console.log("clicked")
                                        });
                                
                                        var id = "#admin-menu-button{{$admin->id}}";
                                        $(id).focusout(function(){
                                          $('#admin-opt-menu{{$admin->id}}').css({"visibility":"hidden"});
                                        });
                                        
                                    
                                        
                                      }
                                  );
                        
                         
                        
                                
                                
                        </script>    
                        
                        {{-- \Admin Card Wrapper --}}
                        <div class="col-md-11 col-sm-11 user-card-wrapper">
                                {{-- row --}}
                                <div style="height: 100%" class="row">
                                    {{-- profile pic wrapper --}}
                                    <div class="col-md-2 col-sm-3 user-card-profile-pic-wrapper">
                                        <div class="profile-pic-div">
                                            <img class="prfile-pic" src="{{asset('adm.png')}}" alt="">
                        
                                        </div>
                                    </div>
                                    {{--end profile pic wrapper --}}
                        
                                    {{-- profile details wrapper --}}
                                    <div class="col-md-7 col-sm-8 user-card-profile-details-wrapper">
                                        <div class="profile-name">
                                            <p style=" display: inline-block;">{{$admin->name}} </p><h5 style="margin-left:5px; display: inline-block; color: #bbbbbb;"> - Admin</h5>
                                            
                                        </div>
                        
                                        <div class="profile-details">
                                            <p>About: the details about the user admin or editor dumy details. dummy details dummy details</p>
                                        </div>
                                    </div>
                                    {{--end profile details wrapper --}}
                        
                                    {{-- left side wrapper --}}
                                    <div class=" col-md-3 profile-card-left-wrapper" >
                                        
                                        <div style="padding-left:48%; padding-top:10%; height:50%; width:115%;" class="row">
                                            <form action="{{ route('delete-moderator', $admin->id) }}" method="POST">
                                                    @csrf   
                                                    <button type="submit" class="btn btn-xs btn-danger"> Delete
                                                    </button>
                                                </form> 
                                        </div>
                                        {{-- form column end --}}
                                    </div>
                                    {{-- end left side wraapper --}}
                                </div>
                                {{-- end row --}}
                            </div>   
                            {{--  end Admin Card Wrapper --}}
                        @endforeach
                </div>
                {{-- admins div end --}}


                {{-- for editors --}}
                <div class="row">
                    <h4>Editors</h4>

            @foreach ($editors as $editor)
                <script>
                    // this is for post menu show and hide
                        $(document).ready(
                            function(){
                                $("#editor-menu-button{{$editor->id}}").click(function(){
                                  $('#editor-opt-menu{{$editor->id}}').css({"visibility":"visible"});
                                  console.log("clicked")
                                });
                        
                                var id = "#editor-menu-button{{$editor->id}}";
                                $(id).focusout(function(){
                                  $('#editor-opt-menu{{$editor->id}}').css({"visibility":"hidden"});
                                });
                                
                            
                                
                              }
                          );
                
                 
                
                        
                        
                </script>    
                
                {{-- \Editor Card Wrapper --}}
                <div class="col-md-11 col-sm-11 user-card-wrapper">
                        {{-- row --}}
                        <div style="height: 100%" class="row">
                            {{-- profile pic wrapper --}}
                            <div class="col-md-2 col-sm-3 user-card-profile-pic-wrapper">
                                <div class="profile-pic-div">
                                    <img class="prfile-pic" src="{{asset('adm.png')}}" alt="">
                
                                </div>
                            </div>
                            {{--end profile pic wrapper --}}
                
                            {{-- profile details wrapper --}}
                            <div class="col-md-7 col-sm-8 user-card-profile-details-wrapper">
                                <div class="profile-name">
                                    <p style=" display: inline-block;">{{$editor->name}} </p><h5 style="margin-left:5px; display: inline-block; color: #bbbbbb;"> - Editor</h5>
                                    
                                </div>
                
                                <div class="profile-details">
                                    <p>About: the details about the user admin or editor dumy details. dummy details dummy details</p>
                                </div>
                            </div>
                            {{--end profile details wrapper --}}
                
                            {{-- left side wrapper --}}
                            <div class=" col-md-3 profile-card-left-wrapper" >
                               
                               
                                <div style="padding-left:48%; padding-top:10%; height:50%; width:115%;" class="row">
                                        <form action="{{ route('delete-moderator', $editor->id) }}" method="POST">
                                            @csrf   
                                            <button type="submit" class="btn btn-xs btn-danger"> Delete
                                            </button>
                                        </form> 
                                </div>
                                {{-- form column end --}}
                            </div>
                            {{-- end left side wraapper --}}
                        </div>
                        {{-- end row --}}
                    </div>   
                    {{--  end Admin Card Wrapper --}}
                @endforeach
                </div>
                {{-- editors div end --}}
            
                
            </div>
            {{-- end first column --}}
            <div class="col-md-3 col-sm-3" style="height: 600px;">
                <div class="container">
                    <h4> Add Moderator </h4>
                <form method="POST" action="{{route('add-moderator')}}">
                        @csrf
                        <label>Email</label>
                        @if(session('status'))
                            {{session('status')}}
                        @endif
                        <input class="form-control" name="email" required type="email"  style="width: 200px;">

                        <label>Name</label>
                        <input class="form-control" name="name" required type="text"  style="width: 200px;">


                        <label>About</label>
                        <input class="form-control"  name="about" required type="text"  style="width: 200px;">

                        <label>Password</label>
                        <input class="form-control"  name="password" required type="password"  style="width: 200px;">
                        <label>Authority</label>
                            
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="formCheck-1">
                            <label class="form-check-label" for="formCheck-1">Admin</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="formCheck-2">
                            <label class="form-check-label" for="formCheck-2">Editor</label>
                        </div>

                        <button type="submit" class="btn-info btn btn-sm" style="margin-left:170px;">Add</button>
                    </form>
                </div>

            </div>

        
    </div>
    <!-- End media tab containt div -->

@endsection