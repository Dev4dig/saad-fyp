

<script>
    $(document).ready(
        function(){
            $("#img-menu-button").click(function(){
              $('#opt-menu').css({"visibility":"visible"});
              console.log("clicked")
            });
    
            var id = "#img-menu-button";
            $(id).focusout(function(){
              $('#opt-menu').css({"visibility":"hidden"});
            });
            
        
            
          }
      );
    
    
    </script>


    <div class="single-img-wrapper">
            
            <div class="img-header">
                <button id="img-menu-button" class="btn btn-xs  img-opt-btn font-icon icon-menu" style="float: right;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                </svg></button>
            </div>
            <div class="img-body">
                <img style="width: 100%; height: 100%;" src="{{ asset('wa.jpg') }}" alt="">
            </div>
            <div class="img-opt-menu" id="opt-menu">
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
    </div>

