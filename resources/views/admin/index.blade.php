@extends("admin.layouts.app");

@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="#">Leads</a></li>
                        <li class="list-group-item"><a href="#">People</a></li>
                        <li class="list-group-item"><a href="#">Companies</a></li>
                        <li class="list-group-item"><a href="#">Opportunities</a></li>
                        <li class="list-group-item"><a href="#">Projects</a></li>
                        <li class="list-group-item"><a href="#">Tasks</a></li>
                        <li class="list-group-item"><a href="#">Emails</a></li>
                        <li class="list-group-item"><a href="#">Reports</a></li>
                        <li class="list-group-item"><a href="#">Settings</a></li>
                    </ul>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-header">Active Employees</div>
                            <div class="card-body">
                                <h4 class="text-center">42</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-header">Prospects</div>
                            <div class="card-body">
                                <h4 class="text-center">12</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-header">Sales for month</div>
                            <div class="card-body">
                                <h4 class="text-center">9</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-header">Total Sales</div>
                            <div class="card-body">
                                <h4 class="text-center">2188</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-4">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">Unassigned Prospects</div>
                        </div>
                        <ul class="list-group list-group-flush">
                            @for($i=0;$i<6;$i++)
                                <li class="list-group-item">
                                    Prospect {{$i}} <span class="float-right btn btn-group-sm btn-success">Assign</span>
                                </li>
                            @endfor
                            <li class="list-group-item">
                                <a href="#" class="btn btn-block btn-md btn-primary">View All Unassigned</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">Undelivered Items</div>
                            <ul class="list-group list-group-flush">
                                @for($i=0; $i<6; $i++)
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                Mrs Blessing
                                            </div>
                                            <div class="col-sm-4">
                                                20th March 2020
                                            </div>
                                            <div class="col-sm-4">
                                                Value: #23428
                                                <span class="float-right btn btn-success btn-group-sm">Details</span>
                                            </div>
                                        </div>
                                        <div class="row"></div>
                                    </li>
                                @endfor
                                <li class="list-group-item">
                                    <a href="#" class="btn btn-block btn-md btn-primary">View All Undelivered Items</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection