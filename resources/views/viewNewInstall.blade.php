<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>View New Install</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body>
        <!--NAVBAR-->
        @include ('layouts.include.header')
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Rekap New Install Customer {{ $NewInstall->office_name }}</h2>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <table class="table table-bordered table-hover datatable">
            <tbody>
                <tr>
                    <td>SC Number</td>
                    <td>:</td>
                    <td>{{ $NewInstall->sc_number}}</td>
                    <td>Target TREG</td>
                    <td>:</td>
                    <td>{{ $NewInstall->target_treg}}</td>
                </tr>
                <tr>
                    <td>Customer OLO Name</td>
                    <td>:</td>
                    <td>{{ $NewInstall->office_name}}</td>
                    <td>Witel</td>
                    <td>:</td>
                    <td>{{ $NewInstall->witel}}</td>
                </tr>
                <tr>
                    <td>Detail End Customer</td>
                    <td>:</td>
                    <td>{{ $NewInstall->detail_end_cust}}</td>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{ $NewInstall->alamat}}</td>
                </tr>
                <tr>
                    <td>Start WFM</td>
                    <td>:</td>
                    <td>{{ $NewInstall->wfm_start}}</td>
                    <td>Longitude</td>
                    <td>:</td>
                    <td>{{ $NewInstall->longitude}}</td>
                </tr>
                <tr>
                    <td>Nama PIC</td>
                    <td>:</td>
                    <td>{{ $NewInstall->pic_office_name}}</td>
                    <td>Latitude</td>
                    <td>:</td>
                    <td>{{ $NewInstall->latitude}}</td>
                </tr>
                <tr>
                    <td>Nomor HP PIC</td>
                    <td>:</td>
                    <td>{{ $NewInstall->no_hp_pic}}</td>
                    <td>Petugas Input</td>
                    <td>:</td>
                    <td>{{ $NewInstall->petugas}}</td>
                </tr>
                <tr>
                    <td>Produk Yang Diminta</td>
                    <td>:</td>
                    <td>{{ $NewInstall->product_diminta}}</td>
                    <td>Tanggal Create</td>
                    <td>:</td>
                    <td>{{ $NewInstall->tgl_create}}</td>
                </tr>
                <tr>
                    <td>Project Name</td>
                    <td>:</td>
                    <td>{{ $NewInstall->project_name}}</td>
                    <td>Status</td>
                    <td>:</td>
                    <td>{{ $NewInstall->status}}</td>
                </tr>
                <tr>
                    <td>Bandwidth</td>
                    <td>:</td>
                    <td>{{ $NewInstall->bandwidth}}</td>
                </tr>
            </tbody>
        </table>
        <div class="pull-right">
            <a class="btn btn-danger" href="{{ url('new_install') }}"> Back</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>