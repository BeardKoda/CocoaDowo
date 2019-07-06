@extends('admin.layout.app')

@section('title')Edit - Users @endsection

@section('content')
<div class="row row-sm sr">
  <div class="col-md-2"></div>
  <div class="col-md-8">
      <div class="card">
          <div class="card-header"><strong>Edit Users</strong></div>
          <div class="card-body">
              <form method="POST" action="{{route('admin-users-save', $user->id)}}">
                {{ csrf_field() }}
                      <div class="form-group col-md-12">
                        <label class="text-muted">Name</label>
                        <input type="text" class="form-control" value="{{$user->name}}" name="name" required placeholder="Name">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group col-md-12">
                        <label class="text-muted">Email</label>
                        <input type="email" class="form-control" value="{{$user->email}}" required name="email" placeholder="Email">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group col-md-12">
                        <label for="inputState" class="text-muted d-block">Premium</label>
                        <select class="custom-select" name="role" value="{{$user->premium}}" required style="background-color: inherit;
                            border-color: rgba(135,150,165,.15); border-width: 1px;border-radius: .25rem;color: inherit;">
                            <option selected="selected" value="{{$user->premium}}">@if ($user->premium == 0)No @else Yes @endif</option>
                            @if ($user->premium == 0)<option value="1">Yes</option>@else<option value="0">No</option>                               
                            @endif
                        </select>
                        @if ($errors->has('role'))
                            <span class="help-block">
                                <strong>{{ $errors->first('role') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group col-md-12">
                        <label class="text-muted">Password</label>
                        <input type="password" required class="form-control" name="password" placeholder="Password">
                        @if ($errors->has('pasword'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
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
