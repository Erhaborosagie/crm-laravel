@extends("admin.layouts.app");

@section("content")

    <div class="container-fluid">
        <div class="row">
            @component("admin.layouts.menu.sidebar")
            @endcomponent
            <div class="col-md-10">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-block btn-primary" id="show-new-user-form">Add a new user</button>
                                @component("admin.layouts.components.forms.add_user")
                                @endcomponent
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8"></div>
                </div>
            </div>
        </div>
    </div>
@endsection