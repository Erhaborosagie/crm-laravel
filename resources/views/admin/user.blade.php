@extends("admin.layouts.app");

@section("content")

    <div class="container-fluid">

        <div class="row">
            @component("admin.layouts.menu.sidebar")
            @endcomponent
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        {{$user->name}} information
                        <span id="open_edit" class="float-right btn btn-sm btn-primary">Edit</span>
                    </div>

                    <div class="card-body">
                        <h4>Name: {{$user->name}}</h4>
                        <h4>Email: {{$user->email}}</h4>
                        <h4>Role: {{$user->role}}</h4>
                        <h4>Role: {{$user->is_active == 1 ? "Yes" : "No"}}</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4">

            </div>
        </div>

        <div id="user-modal" class="modal-content" style="">
            <div class="col-md-6 offset-md-3 pt-5">
                <div class="card">
                    <div class="card-header">
                        Edit the details for {{$user->name}}
                        <span id="close_edit" class="float-right" style="color: red; font-weight: bold; cursor: pointer">X</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="#">
                            @csrf
                            <div class="form-group">
                                <label for="name"> User Name:</label>
                                <input type="text" name="name" class="form-control" value="{{$user->name}}">
                            </div>
                            <div class="form-group">
                                <label for="email"> User Email:</label>
                                <input type="text" name="email" class="form-control" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label for="role"> User Role:</label>
                                <select class="form-control" name="role">
                                    @if($user->role === "admin")
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    @else
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="active"> User Active?:</label>
                                <select class="form-control" name="active">
                                    <option value="1" {{$user->is_active === "1" ? 'default' : ""}}>Yes</option>
                                    <option value="0" {{$user->is_active === "0" ? 'default' : ""}}>No</option>
                                    @if($user->is_active === "1")

                                    @else
                                        <option value="0">No</option>
                                        <option value="admin">Yes</option>
                                    @endif
                                </select>
                            </div>

                            <button class="btn btn-primary">Update User details</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push("admin.layouts.scripts.users")
    <script type="application/javascript" src="{{asset("js/admin/user.js")}}"></script>
@endpush
@push("admin.layouts.styles")
    <link rel="stylesheet" href={{asset("/css/admin/user.css")}}>
@endpush
