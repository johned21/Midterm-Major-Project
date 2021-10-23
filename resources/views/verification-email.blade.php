<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">IPT102 Midterm Project</h1>
                </div>
<hr>
                <div class="card-body">
                    <h3>Welcome {{$user->name}}!</h3>

                    <p>
                        Thank you for registering to our website. you may now click the link below 
                        to verify your account..
                    </p>
                </div>
<hr>
                <div class="card-footer">
                    <p>
                        <a href="{{url('/verification/' . $user->id . '/' . $user->remember_token)}}" class="btn btn-primary form-control">
                            Verify Account
                        </a>
                    </p>  
                </div>
            </div>
        </div>
    </div>
</div>