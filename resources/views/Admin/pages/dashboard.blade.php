@extends('admin.layout.app')

@section('title') Dashboard @endsection
@section('sub-title')
 Welcome aboard, <strong>{{Auth::user()->name}}</strong></small> 
@endsection
@section('content')
<div class="row row-sm sr">
    <div class="col-md-8 col-lg-8">
        <div class="row row-sm">
            <div class="col-md-12">
                <div class="row row-sm">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row row-sm">
                                    <div class="col-3"><small class="text-muted">Artist</small>
                                        <div class="text-highlight mt-2 font-weight-500">{{count($products)}}</div>
                                    </div>
                                    <div class="col-3"><small class="text-muted">Users</small>
                                        <div class="mt-2 font-weight-500">{{count($users)}}</div>
                                    </div>
                                    <div class="col-3"><small class="text-muted">Premium User</small>
                                        <div class="mt-2 font-weight-500"><span class="text-info">{{$P_count}}</span> user</div>
                                    </div>
                                    <div class="col-3"><small class="text-muted">Premium Artists</small>
                                        <div class="mt-2 font-weight-500"><span class="text-info">{{$U_count}}</span> user</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-sm">
                    <div class="col-6 d-flex">
                        <div class="card flex">
                            <div class="card-body"><small>Profile complete: <strong
                                        class="text-primary">65%</strong></small>
                                <div class="progress my-3 circle" style="height:6px">
                                    <div class="progress-bar circle gd-primary" data-toggle="tooltip" title="65%"
                                        style="width: 65%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-flex">
                        <div class="card flex">
                            <div class="card-body"><small>Payment process: <strong
                                        class="text-primary">25%</strong></small>
                                <div class="progress my-3 circle" style="height:6px">
                                    <div class="progress-bar circle gd-warning" data-toggle="tooltip" title="25%"
                                        style="width: 25%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 d-flex">
        <div class="card flex">
            <div class="card-body">
                <div class="d-flex align-items-center text-hover-success">
                    <div class="avatar w-56 m-2 no-shadow gd-success"><i data-feather="trending-up"></i></div>
                    <div class="px-4 flex">
                        <div>Weekly top sell</div>
                        <div class="text-success mt-2">+ 2.50%</div>
                    </div><a href="#" class="text-muted"><i data-feather="arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row row-sm sr">
    <div class="col-md-8 d-flex">
        <div class="card flex">
            <div class="card-body">
                <div class="row row-sm">
                    <div class="col-sm-6">
                        <div class="mb-2"><small class="text-muted">Investments statistics</small></div>
                        <div class="row row-sm">
                            <div class="col-4">
                                <div class="text-highlight text-md">{{$I_count}}</div><small>Tasks</small>
                            </div>
                            <div class="col-4">
                                <div class="text-danger text-md">+15</div><small>Added</small>
                            </div>
                            <div class="col-4">
                                <div class="text-md">45.5%</div><small>Remain</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="mb-2 mt-2 mt-sm-0"><small class="text-muted">This week</small></div>
                        <div>Task completion</div>
                        <div class="progress no-bg mt-2 align-items-center circle" style="height:6px">
                            <div class="progress-bar circle gd-danger" style="width: 65%"></div><span
                                class="mx-2">65%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row row-sm">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="pos-rlt" style="height: 78px">
                            <div class="pos-abt w-100 h-100 d-flex align-items-center justify-content-center">
                                <small>35%</small></div><canvas data-plugin="chartjs" id="chart-pie-2"></canvas>
                        </div>
                        <div class="px-3 pt-3 text-center"><small>Weekly</small></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="pos-rlt" style="height: 78px">
                            <div class="pos-abt w-100 h-100 d-flex align-items-center justify-content-center">
                                <small>25%</small></div><canvas data-plugin="chartjs" id="chart-pie-3"></canvas>
                        </div>
                        <div class="px-3 pt-3 text-center"><small>Monthly</small></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row row-sm sr">
    <div class="col-md-12">
        <div class="card">
            <div class="p-3-4">
                <div class="d-flex">
                    <div>
                        <div>Top Sponsors</div><small class="text-muted"></small>
                    </div><span class="flex"></span>
                    <div><a href="#" class="btn btn-sm btn-white">Total Sponsors: {{$U_count}}</a></div>
                </div>
            </div>
            <table class="table table-theme v-middle m-0">
                <thead style="color:#fff;">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>No of Investments</th>
                    <!-- <th></th> -->
                </thead>
                <tbody>
                    @foreach($users as $song)
                    <tr class="" data-id="10">
                        <td style="min-width:30px;text-align:center">{{$song->id}}</td>
                        <td class="flex">
                            {{$song->name}}
                        </td>
                        <td>{{$song->email}}</td>
                        <td>{{$song->investment->count()}}</td>
                        <!-- <td>
                            <div class="item-action dropdown"><a href="#" data-toggle="dropdown" class="text-muted"><i
                                        data-feather="more-vertical"></i></a>
                                <div class="dropdown-menu dropdown-menu-right bg-black" role="menu"><a class="dropdown-item"
                                        href="#">See detail </a><a class="dropdown-item download">Download </a><a
                                        class="dropdown-item edit">Edit</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item trash">Delete item</a>
                                </div>
                            </div>
                        </td> -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
