@extends('layouts.master')



@section('contentheader')


  <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Government Info
            <small>Preview</small>
          </h1>


       <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Government Info</li>
          </ol>


   
        </section>

@endsection



@section('content')



        
<?php
function current_page($uri = "/") {
    return strstr(request()->path(), $uri);
}
?>
 
 
    <div class="row">
        <div class="col-sm-10"><h1>{{$person->firstname}} {{$person->lastname}}</h1></div>
<!--                 <div class="col-sm-2"><a href="{{ url('/home')}}"  class="pull-right"><button class="btn btn-md btn-success"><i class="glyphicon glyphicon-home"  {{ (current_page("home")) ? 'class=active' : '' }}></i> Home</button></a></div>
 --><!--         <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" style="size:100px;" src="http://www.gravatar.com/avata?s=100"></a></div>
 -->    </div>
    <div class="row">
        <div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
    <!--   <img src="data:image;base64,{{$person->imagefile}}" class="avatar img-circle img-thumbnail" alt="avatar"> -->
   <img src="/defaultimage.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
      <input type="file" name="image" required><br>
        <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-save"></i> Update Profile Picture</button>
      </div></hr><br><br>
    
               

               
          <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body">None</div>
          </div>
          
          
<!--           <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
          </ul>  -->
               
          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
                <i class="fa fa-facebook fa-2x">Facebook</i><br><i class="fa fa-github fa-2x">Instagram</i><br><i class="fa fa-twitter fa-2x">Twitter</i><i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>
          
        </div><!--/col-3-->
        <div class="col-sm-9">
             <ul class="nav nav-tabs">

                <li {{ (current_page("personalinfo")) ? 'class=active' : '' }}><a href="{{ url('/adminpersonalinfo')}}/{{$person->id}}">Basic Info</a></li>
               
                <li {{ (current_page("educationinfo")) ? 'class=active' : '' }}><a href="{{ url('/admineducationinfo')}}/{{$person->id}}">Educational Info</a></li>
              
                <li {{ (current_page("governinfo")) ? 'class=active' : '' }}><a href="{{ url('/admingoverninfo')}}/{{$person->id}}">Government Info</a></li>
                
                <li {{ (current_page("companyinfo")) ? 'class=active' : '' }}><a href="{{ url('/admincompanyinfo')}}/{{$person->id}}">Company Info</a></li>

               
                <li {{ (current_page("Others")) ? 'class=active' : '' }}><a href="{{ url('/adminOthers')}}/{{$person->id}}">Others</a></li>

              </ul>

                  <hr>
                  <form class="form" action="" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>SSS Number</h4></label>
                              <input style="border:none; background:white;" disabled="" value="{{$person->sss}}" type="text" class="form-control" name="first_name" id="first_name" placeholder="None">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>PhilHealth Number</h4></label>
                              <input style="border:none; background:white;" disabled="" value="{{$person->phil}}" type="text" class="form-control" name="last_name" id="last_name" placeholder="None">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Pag-Ibig Number</h4></label>
                              <input style="border:none; background:white;" disabled="" value="{{$person->pagibig}}" type="text" class="form-control" name="phone" id="phone" placeholder="None">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>TIN Number</h4></label>
                              <input style="border:none; background:white;" disabled="" value="{{$person->tin}}" type="text" class="form-control" name="mobile" id="mobile" placeholder="None">
                          </div>
                      </div>
                      
                        
                        <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-primary" type="submit"><i class="glyphicon glyphicon-edit"></i> Edit</button>
                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>  
                </form>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                                                      

@endsection





