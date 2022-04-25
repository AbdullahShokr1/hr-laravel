
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
                            <h4 class="card-title">Messages table</h4>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-dark">
                                    <thead>
                                    <tr>
                                        <th> Name </th>
                                        <th> Email </th>
                                        <th> Phone </th>
                                        <th> Subject </th>
                                        <th> Message</th>
                                        <th> Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contacts as $contact)
                                        <tr>
                                            <td> {{$contact->name}} </td>
                                            <td> {{$contact->email}} </td>
                                            <td> {{$contact->phone}} </td>
                                            <td> {{$contact->subject}} </td>
                                            <td>
                                                <a class="btn btn-inverse-info btn-fw" href="{{route('dashboard.showmessg',$contact->id)}}')}}">More Details</a>
                                            </td>
                                            <td>
                                                <a class="del btn btn-danger" href="{{ route('dashboard.delcontact',$contact->id) }}">
                                                    <button class="btn btn-danger btn-fw" >Delete</button>
                                                </a>
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
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2022</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
</x-adminlayout>
