@extends('layouts.master')


@section('contentheader')


  <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manpower Other Docs
            <small>Preview</small>
          </h1>


       <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Manpower Documents</li>
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
     <!--  <img src="data:image;base64,{{$person->imagefile}}" class="avatar img-circle img-thumbnail" alt="avatar"> -->
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


 <div class="panel-body">

 
        <h3>Import Documents</h3>
        <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 20px;" action="{{ URL::to('/uploaddocs') }}" class="form-horizontal" method="post" enctype="multipart/form-data">


          <input type="file" name="image" required/>
          {{ csrf_field() }}
          <br/>

          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="manpowerid" value="{{$person->id}}">


                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button name="submit" class="btn btn-md btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <button class="btn btn-md" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>

        </form>
        <br/>

    </div>



<div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Manpower Documents</h3>
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      <div class="input-group-btn">
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Action</th>
                      <th>Description</th>
                      <th>Date Uploaded</th>
                 
                    </tr>


                  @if(isset($manpowerdocs))
                  @foreach($manpowerdocs as $per)

                    <tr>
 
                      <td><button class="btn btn-success">Download</button></td>
                      <td>{{$per->imagename}}</td>
                      <td>{{$per->created_at}}</td>

                    </tr>
                   
                    @endforeach
                           
                    @endif



                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>

 
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                                                      

@endsection





