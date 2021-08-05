<!-- ============================================================================= -->
        <!-- media post by user -->
        <div id="mpu-{{$i}}" class="hidden-xs hidden-sm mpu-single-post media-post-user col-md-8 col-sm-8 col-xs-8" style="margin-top: 20px;">
            <div class=" row mpu-header">
                <div class=" col-md-8 post-heading ">
                    <b>Ali Yashaar</b> 
                </div>
                <div class="a col-md-4 col-sm-4 "> 
                <p>Computer Science   </p> 
                </div>

                

                
            </div>
            <!-- post header -->
            
            <div class=" row mpu-body">
                <div class="mpu-images-area ">
                
                        
                       @for ($v = 0; $v <=2; $v++)
                            <div onclick="showImg({{$i}}, {{$v}})" class="single-img-wrapper">
                                <a href="#">
                                    <div class="img-body">
                                    <img id="img-{{$i}}-{{$v}}" style="width: 100%; height: 100%;" src="{{ asset('') }}{{$imgs[$v]}}" alt="">
                                    </div>          
                                </a>       
                            </div>
                        @endfor
                  
                </div>  
                <!--mpu images area  -->
            </div>
            <!--mpu post body -->
                
                

        </div>
        <!-- media post by user /single post -->
        <!-- ========================================================================== -->