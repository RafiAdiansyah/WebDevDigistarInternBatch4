<!doctype html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Input Modify</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body>
        <!--NAVBAR-->
        @include ('layouts.include.header')

        <!--body-->

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-success">
                    <form action="{{ url('input_modify_action') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputNoSC" class="form-label">SC Number</label>
                                        <input type="number" name="sc_number"
                                            class="form-control  @error('sc_number') is-invalid @enderror" id="inputNoSc" placeholder="Enter SC Number">
                                        @error('sc_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputAlamat" class="form-label">Alamat</label>
                                        <input type="text" name="alamat"
                                            class="form-control  @error('alamat') is-invalid @enderror" id="inputAlamat"
                                            placeholder="Enter Address">
                                        @error('alamat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="inputCustOlo" class="form-label">OLO Customer</label>
                                        <input type="text" name="office_name"
                                            class="form-control  @error('office_name') is-invalid @enderror"
                                            id="inputCustOlo" placeholder="Enter Customer OLO Name">
                                        @error('office_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputlong" class="form-label">Longitude</label>
                                        <input type="decimal" name="longitude"
                                            class="form-control  @error('longitude') is-invalid @enderror" id="inputlong"
                                            placeholder="Enter Longitude">
                                        @error('longitude')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="inputDEC" class="form-label">End Customer</label>
                                        <input type="text" name="detail_end_cust"
                                            class="form-control  @error('detail_end_cust') is-invalid @enderror"
                                            id="inputDEC" placeholder="Enter Detail End Customer">
                                        @error('detail_end_cust')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputlat" class="form-label">Latitude</label>
                                        <input type="decimal" name="latitude"
                                            class="form-control  @error('latitude') is-invalid @enderror" id="inputlat"
                                            placeholder="Enter Latitude">
                                        @error('latitude')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputNamaPIC" class="form-label">PIC Customer</label>
                                        <input type="text" name="pic_office_name"
                                            class="form-control  @error('pic_office_name') is-invalid @enderror"
                                            id="inputNamaPIC" placeholder="Enter PIC Name">
                                        @error('pic_office_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="datecreate" class="form-label">Tanggal Create</label>
                                        <div class="input-group">
                                            <input type="date" name="tgl_create"
                                                class="form-control  @error('tgl_create') is-invalid @enderror" placeholder="Enter Petugas Input">
                                            @error('tgl_create')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputSID" class="form-label">SID</label>
                                        <input type="text" name="sid"
                                            class="form-control  @error('sid') is-invalid @enderror"
                                            id="inputSID" placeholder="Enter SID">
                                        @error('sid')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputPetugas" class="form-label">Petugas Input</label>
                                        <input type="text" name="petugas"
                                            class="form-control  @error('petugas') is-invalid @enderror" id="inputPetugas"
                                            placeholder="Enter Petugas Input">
                                        @error('petugas')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Witel</label>
                                        <select class="form-control  @error('witel') is-invalid @enderror" name="witel">
                                            <option selected value="">Select a Value</option>
                                            <option>Semarang</option>
                                            <option>Yogyakarta</option>
                                            <option>Solo</option>
                                            <option>Pekalongan</option>
                                            <option>Purwokerto</option>
                                            <option>Kudus</option>
                                            <option>Magelang</option>
                                        </select>
                                        @error('witel')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control  @error('status') is-invalid @enderror" name="status">
                                            <option selected value="">Select a Value</option>
                                            <option>In Progres</option>
                                            <option>Kendala Pelanggan</option>
                                            <option>Cancel</option>
                                            <option>Fallout</option>
                                            <option>Stuck</option>
                                            <option>Closed</option>
                                        </select>
                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputReqModify" class="form-label">Detail Permintaan Modify</label>
                                        <input type="text" name="req_modify"
                                            class="form-control  @error('req_modify') is-invalid @enderror"
                                            id="inputReqModify" placeholder="Enter Detail Permintaan">
                                        @error('req_modify')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputReqBw" class="form-label">Request Bandwidth</label>
                                        <input type="number" name="req_bandwidth"
                                            class="form-control  @error('req_bandwidth') is-invalid @enderror" id="inputReqBw"
                                            placeholder="Enter Request Bandwidth">
                                        @error('req_bandwidth')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="datetime" class="form-label">Start WFM</label>
                                        <div class="input-group">
                                            <input type="date" name="wfm_start"
                                                class="form-control  @error('wfm_start') is-invalid @enderror">
                                            @error('wfm_start')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--button-->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a class="btn btn-danger" href="{{ url('modify') }}">Back</a>
                        </div>
                        <!--end button-->
                    </form>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

        <!--end body-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>