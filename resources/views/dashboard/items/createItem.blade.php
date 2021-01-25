@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      @if($message)
      <div class="alert alert-success" role="alert">
        {{$message}}
      </div>
      @endif
      <div class="card">
        <div class="card-header">{{ __('items.newItem') }}</div>
        <div class="card-body">
           <form method="POST" action="{{route('items.store')}}" >
            @csrf
            <div class="form-group">
              <label for="name">{{ __('items.name') }}</label>
              <input type="text" class="form-control" id="itemName" aria-describedby="itemName" name="name">
            </div>
            <div class="form-group">
              <label for="description">{{ __('items.description') }}</label>
              <input type="text" class="form-control" id="itemDescription" name="description">
            </div>
            <div class="form-group">
              <label for="category">{{ __('items.category') }}</label>
              <select class="form-control" id="itemDescription" name="categoryId"> 
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{__('common.'.$category->name)}}</option>
                @endforeach
              </select> 
            </div>
            <div class="form-group">
              <label for="pattern">{{ __('items.pattern') }}</label>
              <input type="text" class="form-control" id="itemPattern" name="pattern">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
