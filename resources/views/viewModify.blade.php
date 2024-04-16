<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>View Modify</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body>
        <!--NAVBAR-->
        @include ('layouts.include.header')
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Rekap Modify Customer {{ $Modify_OLO->office_name }}</h2>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <table class="table table-bordered table-hover datatable">
            <tbody>
                <tr>
                    <td>SC Number</td>
                    <td>:</td>
                    <td>{{ $Modify_OLO->sc_number }}</td>
                    <td>Customer OLO Name</td>
                    <td>:</td>
                    <td>{{ $Modify_OLO->office_name }}</td>
                </tr>
                <tr>
                    <td>Detail End Customer</td>
                    <td>:</td>
                    <td>{{ $Modify_OLO->detail_end_cust }}</td>
                    <td>PIC Customer</td>
                    <td>:</td>
                    <td>{{ $Modify_OLO->pic_office_name }}</td>
                </tr>
                <tr>
                    <td>SID</td>
                    <td>:</td>
                    <td>{{ $Modify_OLO->sid }}</td>
                    <td>Witel</td>
                    <td>:</td>
                    <td>{{ $Modify_OLO->witel}}</td>
                </tr>
                <tr>
                    <td>Detail Permintaan Modify</td>
                    <td>:</td>
                    <td>{{ $Modify_OLO->req_modify }}</td>
                    <td>Request Bandwidth</td>
                    <td>:</td>
                    <td>{{ $Modify_OLO->req_bandwidth }}</td>
                </tr>
                <tr>
                    <td>Start WFM</td>
                    <td>:</td>
                    <td>{{ $Modify_OLO->wfm_start }}</td>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{ $Modify_OLO->alamat }}</td>
                </tr>
                <tr>
                    <td>Longitude</td>
                    <td>:</td>
                    <td>{{ $Modify_OLO->longitude }}</td>
                    <td>Latitude</td>
                    <td>:</td>
                    <td>{{ $Modify_OLO->latitude }}</td>
                </tr>
                <tr>
                    <td>Tanggal Create</td>
                    <td>:</td>
                    <td>{{ $Modify_OLO->tgl_create }}</td>
                    <td>Petugas Input</td>
                    <td>:</td>
                    <td>{{ $Modify_OLO->petugas }}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>{{ $Modify_OLO->status}}</td>
                </tr>
            </tbody>
        </table>
        <div class="pull-right">
            <a class="btn btn-danger" href="{{ url('modify') }}"> Back</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>