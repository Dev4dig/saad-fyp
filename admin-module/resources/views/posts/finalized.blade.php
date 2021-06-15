@extends('layout.base')

@section('content')
    <x-tab-bar/>
    <!-- Tab content -->
    <div id="Articles" class="post-wrapper col-md-12 tabcontent">
        <x-article-post/>      
    </div>
    
    <!-- ===================================================================================== -->

    <!-- media posts content tab div -->
    <div id="Media" class="tabcontent">
        <x-media-post-u/>
        <x-media-post-d/>
    </div>
    <!-- End media tab containt div -->

@endsection