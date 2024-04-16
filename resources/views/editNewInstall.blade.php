<!doctype html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Edit New Install</title>
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
                        <form action="{{ url('/new_install/update',$NewInstall->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputNoSC" class="form-label">SC Number</label>
                                            <input type="number" name="sc_number" value="{{$NewInstall->sc_number}}"
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
                                            <label for="inputTreg" class="form-label">Target TREG</label>
                                            <input type="number" name="target_treg" value="{{$NewInstall->target_treg}}"
                                                class="form-control  @error('target_treg') is-invalid @enderror" id="inputTreg"
                                                placeholder="Enter Target TREG">
                                            @error('target_treg')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="inputCustOlo" class="form-label">Customer OLO Name</label>
                                            <input type="text" name="office_name" value="{{$NewInstall->office_name}}"
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
                                            <label for="inputWitel">Witel</label>
                                            <select class="form-control  @error('witel') is-invalid @enderror" name="witel" id="inputWitel"> 
                                                <option selected value="{{$NewInstall->witel}}">Select a Value</option>
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
                                        <label for="inputDEC" class="form-label">Detail End Customer</label>
                                            <input type="text" name="detail_end_cust" value="{{$NewInstall->detail_end_cust}}"
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
                                            <label for="inputAlamat" class="form-label">Alamat</label>
                                            <input type="text" name="alamat" value="{{$NewInstall->alamat}}"
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
                                            <label for="inputWFM"  class="form-label">Start WFM</label>
                                            <div class="input-group">
                                                <input type="date" name="wfm_start" value="{{$NewInstall->wfm_start}}"
                                                    class="form-control  @error('wfm_start') is-invalid @enderror" id="inputWFM">
                                                @error('wfm_start')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputlong" class="form-label">Longitude</label>
                                            <input type="decimal" name="longitude" value="{{$NewInstall->longitude}}"
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
                                            <label for="inputNamaPIC" class="form-label">Nama PIC</label>
                                            <input type="text" name="pic_office_name" value="{{$NewInstall->pic_office_name}}"
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
                                            <label for="inputlat" class="form-label">Latitude</label>
                                            <input type="decimal" name="latitude" value="{{$NewInstall->latitude}}"
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
                                            <label for="inputHpPIC" class="form-label">Nomor HP PIC</label>
                                            <input type="number" name="no_hp_pic" value="{{$NewInstall->no_hp_pic}}"
                                                class="form-control  @error('no_hp_pic') is-invalid @enderror" id="inputHpPIC"
                                                placeholder="Enter PIC Phone Number">
                                            @error('no_hp_pic')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputPetugas" class="form-label">Petugas Input</label>
                                            <input type="text" name="petugas" value="{{$NewInstall->petugas}}"
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
                                            <label for="inputProduk">Produk Yang Diminta</label>
                                            <select class="form-control  @error('product_diminta') is-invalid @enderror" name="product_diminta" id="inputProduk">
                                                <option selected value="{{$NewInstall->product_diminta}}">Pilih Produk</option>
                                                <option>Telkom Metro Node</option>
                                                <option>ASTINet</option>
                                                <option>VPN IP</option>
                                                <option>IP Transit</option>
                                                <option>SL Digital</option>
                                                <option>DWDM</option>
                                                <option>NCIX</option>
                                                <option>SD WAN</option>
                                            </select>
                                            @error('product_diminta')
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
                                                <input type="date" name="tgl_create" value="{{$NewInstall->tgl_create}}"
                                                    class="form-control  @error('tgl_create') is-invalid @enderror" placeholder="Enter Petugas Input" id="datecreate">
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
                                            <label for="inputProject">Project Name</label>
                                            <select class="form-control  @error('project_name') is-invalid @enderror" name="project_name" id="inputProject">
                                                <option selected value="{{$NewInstall->project_name}}">Select a Value</option>
                                                <option>ASTINet Telkomsel</option>
                                                <option>Pre Order</option>
                                                <option>Hipernet</option>
                                                <option>Ldp</option>
                                                <option>H3i</option>
                                            </select>
                                            @error('project_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputStatus">Status</label>
                                            <select class="form-control  @error('status') is-invalid @enderror" name="status" id="inputStatus">
                                                <option selected value="{{$NewInstall->status}}">Select a Value</option>
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
                                            <label for="inputBw" class="form-label">Bandwidth</label>
                                            <input type="number" name="bandwidth" value="{{$NewInstall->bandwidth}}"
                                                class="form-control  @error('bandwidth') is-invalid @enderror" id="inputBw"
                                                placeholder="Enter Bandwidth">
                                            @error('bandwidth')
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
                                <a class="btn btn-danger" href="{{ url('new_install') }}">Back</a>
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