@extends('layout.base')

@section('content')
<div class="filter-bar">
        
        <div>
                <div class="tabbar-tabs col-md-8 col-sm-8 col-lg-8">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2" >
                             <h4 style="color: white;">Articles</h4>
                                
                        </div>  
                        <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2">
                              <h4 style="color: white;">Media</h4>
                                
                        </div>    
                    </div>
                </div>
                <div class="tabbar-search col-md-4 col-sm-4 col-lg-4">
                        <form role="search" class=" app-search  hidden-xs m-r-1" style="float:right;  margin-top: -10px;">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="fa fa-search">
                            </i></a> 
                        </form>
                </div>
                

        </div>
    </div>  
    <!-- filter bar -->

    <div class="post-wrapper">
        <div class="single-post">
            <div class="post-header">

            </div>
            <!-- post header -->
            <div class="post-body">

            </div>
            <!-- post body -->

            <div class="post-footer">

            </div>
            <!-- post footer -->
        </div>
        <!-- single post -->
    </div>
@endsection