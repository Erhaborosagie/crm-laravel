<div class="col-md-2">
    <div class="card">
        <div class="card-header">
            <img style="border-radius: 50px" src="https://via.placeholder.com/100" alt="John Doe">
            <h5> John Doe</h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="{{route("home")}}">Dashboard</a></li>
            <li class="list-group-item"><a href="{{route("admin.users")}}">Users</a></li>
            <li class="list-group-item"><a href="#">Leads</a></li>
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