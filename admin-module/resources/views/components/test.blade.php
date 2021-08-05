

    
    
<div onclick="showImg()" class="single-img-wrapper">
    <a href="">
        <div class="img-body">
            <img style="width: 100%; height: 100%;" src="{{ asset('wa.jpg') }}" alt="">
        </div>          
    </a>       
</div>
    
    




        {{-- <div class="img-opt-menu" id="opt-menu{{$i}}">
                    <ul>
                        <a href=""> <li>Approve</li></a>
                        <div class="hr-divider"></div>
                        <a href=""><li>Delete</li></a>
                        <div class="hr-divider"></div>
                        <a href=""><li>Reject</li></a>
                        <div class="hr-divider"></div>
                        <a href=""><li>Finalized</li></a>
                    </ul>
                 
                </div> --}}

{{-- 
                
<script>
        $(document).ready(
            function(){
                $("#img-menu-button{{$i}}").click(function(){
                  $('#opt-menu{{$i}}').css({"visibility":"visible"});
                  console.log("clicked")
                });
        
                var id = "#img-menu-button{{$i}}";
                $(id).focusout(function(){
                  $('#opt-menu{{$i}}').css({"visibility":"hidden"});
                });
                
            
                
              }
          );
        
        
        </script> --}}