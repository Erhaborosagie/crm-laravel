@extends("admin.layouts.app");

@section("content")

    <div class="container-fluid">
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <div class="row">
            @component("admin.layouts.menu.sidebar")
            @endcomponent
            <div class="col-md-10 pl-0">
                <div class="card">
                    <div class="card-header"><h3>Users</h3></div>
                </div>
                <div class="row">
                    <div class="col-sm-4" id="newUserForm">
                        <div class="card">
                            <div class="card-header">
                                Enter New User Detail
                            </div>
                            <div class="card-body">
                                @component("admin.layouts.components.forms.add_user")
                                @endcomponent
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 pt-4 pl-4" id="usersTable">
                        <div class="card">
                            <div class="card-header"> All Users <span class="btn btn-primary float-right" id="show-new-user-form">
                            Add a new user
                        </span></div>
                        </div>
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Num</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->role}}</td>
                                    <td>
                                        <a href="/admin/user/{{$user->id}}" class="btn btn-success">view</a>
                                        <a href="/admin/users/edit/{{$user->id}}" class="btn btn-success">edit</a>
                                        <a href="/admin/users/delete/{{$user->id}}" class="btn btn-danger">delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push("admin.layouts.scripts.users")
    <script type="application/javascript" src="{{asset("js/admin/users.js")}}"></script>
@endpush