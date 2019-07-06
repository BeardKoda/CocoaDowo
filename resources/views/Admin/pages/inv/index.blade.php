@extends('admin.layout.app')

@section('title'){{$page['title']}} @endsection
@section('content')
<div class="mb-5">
    <div class="toolbar">
        <div class="btn-group"><button class="btn btn-sm btn-icon btn-white"
                data-toggle="tooltip" title="Trash" id="btn-trash"><i data-feather="trash"
                    class="text-muted"></i></button> <button
                class="btn btn-sm btn-icon btn-white sort" data-sort="item-title"
                data-toggle="tooltip" title="Sort"><i class="sorting"></i></button></div>
        <form class="flex">
            <div class="input-group"><input type="text"
                    class="form-control form-control-theme form-control-sm search"
                    placeholder="Search" required> <span class="input-group-append"><button
                        class="btn btn-white no-border btn-sm" type="button"><span
                            class="d-flex text-muted"><i
                                data-feather="search"></i></span></button></span></div>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-theme table-row v-middle">
            <thead>
                <tr>
                    <th style="width:20px"><label class="ui-check m-0"><input
                                type="checkbox"><i></i></label></th>
                    <th class="text-muted"></th>
                    <th class="text-muted" data-toggle-class="asc">Item</th>
                    <th class="text-muted">Status</th>
                    <th class="text-muted">Payment Id</th>
                    <th class="text-muted">Created_at</th>
                    <!-- <th class="text-muted">Last Login</th> -->
                    <th class="text-muted" style="width:50px"></th>
                    <th style="width:50px"></th>
                </tr>
            </thead>
            <tbody>
            @if(count($users) > 0)
                @foreach($users as $user)
                <tr class="v-middle">
                    <td>
                        <label class="ui-check m-0"><input type="checkbox" name="id" value="6">
                            <i></i>
                        </label>
                    </td>
                    <td>
                        <a href="#" class="avatar w-32" data-toggle="tooltip" title="Velit,">
                            <img src="/admincss/assets/img/user.png" alt=".">
                        </a>
                    </td>
                    <td class="flex">
                        <a href="#" class="item-title text-color">{{$user->product->name}}</a>
                        <div class="item-except text-muted text-sm h-1x">
                            {{$user->product->type_->name}}
                        </div>
                    </td>
                    <td><span class="item-amount d-none d-sm-block text-sm">{{$user->status}}</span></td>
                    <td><span class="item-amount d-none d-sm-block text-sm">{{$user->txr_id}}</span></td>
                    <td><span class="item-amount d-none d-sm-block text-sm">{{$user->created_at}}</span></td>
                    <td>
                        <!-- <span class="item-amount d-none d-sm-block text-sm [object Object]">5</span> -->
                    </td>
                    <td>
                        <div class="item-action dropdown">
                            <a href="#" data-toggle="dropdown" class="text-muted"><i data-feather="more-vertical"></i></a>
                            <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                <a class="dropdown-item edit" href="{{route('investments.show', $user->id)}}">view</a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="15" style="text-align:center;">No record available</td>
                </tr>
            @endif
            </tbody>
        </table>        
        <div>
            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection
