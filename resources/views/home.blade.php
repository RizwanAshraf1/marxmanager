@extends('layouts.app') @section('content')
<div class="container">
   
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                @include('inc.messages')
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <button class="btn btn-primary btn-lg" type="button" data-toggle="modal" data-target="#addmodal" name="button"> Add Bookmark</button>
               <hr>
               <h3>My bookmarks</h3>
               <ul class="list-group">
                   @foreach ($bookmarks as $bookmark)
                       <li class="list-group-item clearfix">
                           <a href="{{$bookmark->url}}" target="_blank">{{$bookmark->name}}</a>
                           <span> {{$bookmark->description}}</span>

                           <button data-id="{{$bookmark->id}}" class="delete-bookmark btn btn-danger pull-right">Delete</button>

                       </li>
                   @endforeach
               </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="addmodal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add bookmark</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{route('bookmarks.store')}}" method="post">
            {{csrf_field()}}
<div class="form-group">
    <label for="name"> Bookamrk Name</label>
    <input type="text" name="name" id="name" class="form-control" required>
</div>
<div class="form-group">
        <label for="url">Bookmark Url</label>
        <input type="text" name="url" id="url" class="form-control" required>
    </div>
    <div class="form-group">
            <label for="name">Webite Description</label>
            <input type="text" name="description" id="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary"> Submit</button>


        </form>
        </div>
     
      </div>
    </div>
  </div>
@endsection
