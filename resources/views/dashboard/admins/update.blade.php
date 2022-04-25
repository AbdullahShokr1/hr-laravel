
<x-adminlayout>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Create New User</h4>
                            <p class="card-description"> Sign Up </p>
                            <form class="forms-sample" method="POST" action="{{ route('dashboard.admins.update',$admin->id ) }}">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Username</label>
                                    <input type="text" name="name" value="{{$admin->name}}" required autofocus class="form-control" id="exampleInputUsername1" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" value="{{$admin->email}}" required class="form-control" id="exampleInputEmail1" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>

                                    <input type="password" name="password" required autocomplete="new-password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">Confirm Password</label>
                                    <input type="password" name="password_confirmation" required class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                                <a class="btn btn-dark" href="{{route('dashboard.admins.index')}}">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2022</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
</x-adminlayout>
