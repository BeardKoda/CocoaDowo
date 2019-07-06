@extends('admin.layout.app')

@section('title'){{$page['title']}} @endsection

@section('content')
<div class="row row-sm sr">
  <div class="col-md-2"></div>
  <div class="col-md-8">
      <div class="card">
          <div class="card-header"><strong>Add New Investment</strong></div>
          <div class="card-body">
              <form method="POST" action="{{route('products.update', $product->id)}}">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put" />
                      <div class="form-group col-md-12">
                        <label class="text-muted">Title</label>
                        <input type="text" class="form-control" name="name"  value="{{$product->name}}"  required placeholder="Enter Farm Title">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group col-md-12">
                        <label class="text-muted">Description</label>
                        <textarea class="form-control" name="desc" required>{{$product->description}}</textarea>
                        @if ($errors->has('desc'))
                            <span class="help-block">
                                <strong>{{ $errors->first('desc') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group col-md-12">
                        <label for="inputState" class="text-muted d-block">Select Product Type</label>
                        <select class="custom-select" name="type" required style="background-color: inherit;
                        border-color: rgba(135,150,165,.15);
                        border-width: 1px;border-radius: .25rem;color: inherit;">
                            <option selected="selected" value="{{$product->type}}">{{$product->type_->name}}</option>
                            @foreach($types as $type)
                            <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('type'))
                            <span class="help-block">
                                <strong>{{ $errors->first('type') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group col-md-12">
                        <label class="text-muted">Price</label>
                        <input type="text" class="form-control" name="price" value="{{$product->price}}" required placeholder="Enter Farm price">
                        @if ($errors->has('price'))
                            <span class="help-block">
                                <strong>{{ $errors->first('price') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group col-md-12">
                        <label class="text-muted">Duration</label>
                        <input type="text" class="form-control" name="duration" value="{{$product->duration}}" required placeholder="Enter Farm Duration">
                        @if ($errors->has('duration'))
                            <span class="help-block">
                                <strong>{{ $errors->first('duration') }}</strong>
                            </span>
                        @endif
                      </div>
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-primary col-md-6">Save</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection
