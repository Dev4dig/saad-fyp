<script>
    // this is for post menu show and hide
        $(document).ready(
            function(){
                $("#post-menu-button{{$i}}").click(function(){
                  $('#opt-menu{{$i}}').css({"visibility":"visible"});
                  console.log("clicked")
                });
        
                var id = "#post-menu-button{{$i}}";
                $(id).focusout(function(){
                  $('#opt-menu{{$i}}').css({"visibility":"hidden"});
                });
                
            
                
              }
          );

 

        
        
</script>

        
<div class="hidden-xs hidden-sm single-post col-md-8 col-sm-8 col-xs-8">
    <div class=" row post-header ">
        <div class=" col-md-8 post-heading ">
            <b>The one who keeps me awake</b> 
        </div>
        <div class="a col-md-2 col-sm-2 "> 
        <p>Ali salar khan   </p> 
        </div>

        <div class="a col-md-1 col-sm-1 col-xs-1" style="white-space: nowrap;"> 
                <p>5d ago  </p>  
                
        </div>
        <div class="col-md-1  col-sm-1 col-xs-1 dropdown  " id="dropdownMenu">
            <button class="article-opt-menu-btn btn-info" id="post-menu-button{{$i}}">
                       
                        <span class="glyphicon glyphicon-option-horizontal"></span>
                </button>
                
                
        </div>
        
    </div>
    <!-- post header -->
    <div class="img-opt-menu" id="opt-menu{{$i}}">
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
    <div class=" row post-body">
        <p>This is dummy paragraph open full post to read 
                This is dummy paragraph open full post to read
                This is dummy paragraph open full post to read
                This is dummy paragraph open full post to read
                This is dummy paragraph open full post to read
                This is dummy paragraph open full post to read
                This is dummy paragraph open full post to read
                This is dummy paragraph open full post to read
                This is dummy paragraph open full post to read
                This is dummy paragraph open full post to read
                This is dummy paragraph open full post to read
        </p>
    </div>
    <!-- post body -->
    <div class=" row post-footer">
            
            <div class="col-md-4">
                <p>Microbiology</p>

            </div>
            <div class="" style="float: right;">
                <a href="{{route('full-post')}}">
                    <button id="demo" style="margin-right: 30px; height: 30px; margin-bottom: 25px;" class="btn btn-info">View Full</button>
                </a>
            </div>
    </div>
    <!-- post footer -->
    <!-- single post article --> 
</div>
<!-- end Article tab content div- london -->