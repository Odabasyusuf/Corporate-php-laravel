@extends('admin.layouts.master')

@section('content')

    <!-- Routes index sayfası -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Rotalar</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>URI</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Method</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($routes as $route)
                        @if($route->getPrefix() !== '_ignition' && $route->getPrefix() !== '_debugbar')
                            <tr>
                                <td>{{$route->uri}}</td>
                                <td>{{$route->getName()}}</td>
                                <td>{{$route->getPrefix()}}</td>
                                <td>{{$route->getActionMethod()}}</td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('page-level-scripts')
    <!-- Page level plugins -->
    <script src="{{asset('admins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admins/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('admins/js/demo/datatables-demo.js')}}"></script>
@endsection
