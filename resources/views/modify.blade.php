<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Modify | Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body>
        <!--NAVBAR-->
        @include ('layouts.include.header')
         <!--Body-->
        <div class="col align-self-center">
            <p class="text-justify"><center>Setiap step di sini adalah touch point dengan pelanggan, pastikan target TTD & TTR tercapai dengan berintegritas dan berkualitas. Upayakan customer experience yang terbaik.</center></p>
        </div>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="col-md-3 py-1 mt-1">
                <h1
                    style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:#7F8487">
                    Customer Journey
                </h1>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <p>Order Modify In Progress</p>
                                    <a href="{{ url('inputmodify') }}" class="btn btn-primary btn-sm"><i
                                    class="fas fa-plus mr-2"></i>Input Order Modify</a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered table-hover datatable">
                                        <thead>
                                            <tr>
                                                <th>Customer Name</th>
                                                <th>SC Number</th>
                                                <th>Request Bandwidth</th>
                                                <th>Witel</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($Modify_OLO as $data)
                                                <tr>
                                                    <td>{{ $data->office_name }}</td>
                                                    <td>{{ $data->sc_number }}</td>
                                                    <td>{{ $data->req_bandwidth }}</td>
                                                    <td>{{ $data->witel }}</td>
                                                    <td>{{ $data->status }}</td>
                                                    <td>
                                                    <form action="{{ url('/modify/delete',$data->id) }}" method="POST">
                                                            <a class="btn btn-success" href="{{ url('/modify/show',$data->id) }}">Show</a>
                                                            <a class="btn btn-primary" href="{{ url('/modify/edit',$data->id) }}">Edit</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah ingin menghapus data ini?')">Delete</button>
                                                        </form>      
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <a class="btn btn-danger" href="{{ url('home') }}">Back</a>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
         <!--end Body-->
        @section('css-tambahan')
            <link rel="stylesheet" href="{{ asset('cdn/datatables/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
            <link rel="stylesheet" href="{{ asset('cdn/datatables/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
            <link rel="stylesheet" href="{{ asset('cdn/datatables/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

        @section('js-tambahan')
            <!-- DataTables  & Plugins -->
            <script src="{{ asset('cdn/datatables/datatables/jquery.dataTables.min.js') }}"></script>
            <script src="{{ asset('cdn/datatables/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
            <script src="{{ asset('cdn/datatables/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
            <script src="{{ asset('cdn/datatables/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
            
        @endsection
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>