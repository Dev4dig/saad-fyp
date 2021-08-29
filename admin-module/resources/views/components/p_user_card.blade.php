<script>
    // this is for post menu show and hide
        $(document).ready(
            function(){
                $("#user-menu-button").click(function(){
                  $('#user-opt-menu').css({"visibility":"visible"});
                  console.log("clicked")
                });
        
                var id = "#user-menu-button";
                $(id).focusout(function(){
                  $('#user-opt-menu').css({"visibility":"hidden"});
                });
                
            
                
              }
          );

 

        
        
</script>    

{{-- \Admin Card Wrapper --}}
<div class="col-md-8 col-sm-10 user-card-wrapper">
        {{-- row --}}
        <div style="height: 100%" class="row">
            {{-- profile pic wrapper --}}
            <div class="col-md-2 col-sm-3 user-card-profile-pic-wrapper">
                <div class="profile-pic-div">
                    <img class="prfile-pic" src="{{asset('ab.jpg')}}" alt="">

                </div>
            </div>
            {{--end profile pic wrapper --}}

            {{-- profile details wrapper --}}
            <div class="col-md-7 col-sm-8 user-card-profile-details-wrapper">
                <div class="profile-name">
                    <p style=" display: inline-block;">Adnan </p><h5 style="margin-left:5px; display: inline-block; color: #bbbbbb;"> - Admin</h5>
                    
                </div>

                <div class="profile-details">
                    <p>About: the details about the user admin or editor dumy details. dummy details dummy details</p>
                </div>
            </div>
            {{--end profile details wrapper --}}

            {{-- left side wrapper --}}
            <div class=" col-md-3 profile-card-left-wrapper" >
                <div style="height:50%; width:100%;">
                        <button class="article-opt-menu-btn btn-info" id="user-menu-button">
                       
                                <span class="glyphicon glyphicon-option-horizontal"></span>
                        </button>
                </div>
                <div class="user-opt-menu" id="user-opt-menu">
                        <ul>
                            <a href=""> <li>Approve</li></a>
                            <div class="hr-divider"></div>
                            <a href=""><li>Delete</li></a>
                            <div class="hr-divider"></div>
                            <a href=""><li>Reject</li></a>
                            <div class="hr-divider"></div>
                            <a href=""><li>Finalized</li></a>
                        </ul>
                     
                    </div>
                <div style="padding-left:48%; padding-top:10%; height:50%; width:115%;" class="row">
                    
                </div>
            </div>
            {{-- end left side wraapper --}}
        </div>
        {{-- end row --}}
    </div>   
    {{--  end Admin Card Wrapper --}}