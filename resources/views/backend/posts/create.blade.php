@extends('layouts.master')
@section('title', 'Create A New Post')

@section('content')
  <div class="container col-md-8 col-md-offset-2">
    <div class="well well bs-component">
      <form method="post" class="form-horizontal">
        {!! csrf_field() !!}
        @foreach ($errors->all() as $error)
          <p class="alert alert-danger">{{ $error }}</p>
        @endforeach

        @if(session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
        @endif

        <fieldset>
          <legend>Create a new post</legend>
          <div class="form-group">
            <label for="title" class="col-lg-2 control-label">Title</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" placeholder="Title" name="title">
            </div>
          </div>

          <div class="form-group">
            <label for="content" class="col-lg-2 control-label">Content</label>
            <div class="col-lg-10">
              <textarea rows="3" id="content" class="form-control" name="content"></textarea>
            </div>
          </div>

          <div class="form-group">
            <label for="categories" class="col-lg-2 control-label">Categories</label>

            <div class="col-lg-10">
              <select name="categories[]" id="category" class="form-control" multiple>
                @foreach($categories as $category)
                  <option value="{!! $category->id !!}">
                    {!! $category->name !!}
                  </option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button type="reset" class="btn btn-default">Cancel</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>

        </fieldset>
      </form>
    </div>
  </div>
@endsection