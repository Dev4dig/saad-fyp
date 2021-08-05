@extends('layout.base')

@section('content')
    


 <x-tab_bar first="User requests" second="Moderators"/>
  <!-- Tab content -->
  <div id="Articles" class="post-wrapper col-md-12 tabcontent">
    
        <x-pending_user_card />
  </div>
   
<!-- ===================================================================================== -->
  
 <!-- media posts content tab div -->
    <div id="Media" class="tabcontent">
        <x-user_card />

        <x-user_card /> 
    
        <x-user_card />
        <x-user_card />  
    </div>
    <!-- End media tab containt div -->

@endsection