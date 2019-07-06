@extends('admin.layout.app')

@section('title'){{$page['title']}} @endsection

@section('content')
<div class="row row-sm sr">
  <div class="col-md-2"></div>
  <div class="col-md-8">
      <div class="card">
          <div class="card-header"><strong>Add New Investment</strong></div>
          <div class="card-body">
              <form method="POST" action="{{ route('investments.store') }}">
                {{ csrf_field() }}
                      <div class="form-group col-md-12">
                        <label for="inputState" class="text-muted d-block">Select Investor</label>
                        <select class="custom-select" name="investor_id" required style="background-color: inherit;
                        border-color: rgba(135,150,165,.15);
                        border-width: 1px;border-radius: .25rem;color: inherit;">
                            <option selected="selected" disabled>Choose Investor</option>
                            @foreach($investors as $investor)
                            <option value="{{$investor->id}}">{{$investor->name}} - {{$investor->email}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('investor'))
                            <span class="help-block">
                                <strong>{{ $errors->first('investor') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group col-md-12">
                        <label for="inputState" class="text-muted d-block">Select Product</label>
                        <select class="custom-select" name="product_id" required style="background-color: inherit;
                        border-color: rgba(135,150,165,.15);
                        border-width: 1px;border-radius: .25rem;color: inherit;">
                            <option selected="selected" disabled>Choose product</option>
                            @foreach($products as $product)
                            <option value="{{$product->id}}">{{$product->name}} - {{$product->type}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('product'))
                            <span class="help-block">
                                <strong>{{ $errors->first('product') }}</strong>
                            </span>
                        @endif
                      </div>
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-primary col-md-6">Add</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection
