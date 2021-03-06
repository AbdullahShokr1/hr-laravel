
<x-adminlayout>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Basic Tables </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Striped Table</h4>
                            <a class="btn btn-primary btn-fw" href="{{route('dashboard.users.create')}}"> Add User </a>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th> User </th>
                                        <th> Name </th>
                                        <th> Email </th>
                                        <th> Amount </th>
                                        <th> Deadline </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td class="py-1">
                                                <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                                            </td>
                                            <td> {{$user->name}} </td>
                                            <td> {{$user->email}} </td>
                                            <td>
                                                <a class="btn btn-warning btn-fw" href="{{route('dashboard.users.edit',$user->id)}}"> Edit User </a>
                                            </td>
                                            <td>
                                                <form class="del btn btn-danger" action="{{ route('dashboard.users.destroy',$user->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-fw" >Delete</button>
                                                </form>
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
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ?? 2022</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
</x-adminlayout>
