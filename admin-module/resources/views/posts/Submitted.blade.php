@extends('layout.base')


@section('title')
Submitted posts    
@endsection

@section('content')
    


  <x-tab-bar/>
  <!-- Tab content -->
  <div id="Articles" class="post-wrapper col-md-12 tabcontent">
      <x-article_post/>      
  </div>
   
<!-- ===================================================================================== -->
  
 <!-- media posts content tab div -->
    <div id="Media" class="tabcontent">
        <x-media_post_u/>
        <x-media_post_d/>
    </div>
    <!-- End media tab containt div -->


@endsection