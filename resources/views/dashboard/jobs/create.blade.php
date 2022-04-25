<x-adminlayout>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Create New User</h4>
                            <p class="card-description"> Sign Up </p>
                            <form class="forms-sample" method="POST" action="{{ route('dashboard.jobs.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Username</label>
                                    <input type="text" name="name" :value="old('name')" required autofocus class="form-control" id="exampleInputUsername1" placeholder="Username">
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Create</button>
                                <a class="btn btn-dark" href="{{route('dashboard.jobs.index')}}">Cancel</a>
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
