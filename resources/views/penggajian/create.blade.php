@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2><b><center> Create Data Penggajian </center></b></h2></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/Penggajian') }}">
                        {{ csrf_field() }}

                            <div class="col-md-12">
                                <label for="tunjangan_pegawai_id">
                                    Nama Pegawai
                                </label>
                                <select class="col-md-6 form-control" name="tunjangan_pegawai_id" required>
                                    <option value="">Pilih Nama Pegawai</option>
                                    @foreach($tunjangans as $baru)
                                        <option value="{{$baru->id}}">
                                            {{$baru->pegawai->User->name}}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="help-block">
                                    {{$errors->first('tunjangan_pegawai_id')}}
                                </span>
                                <div>
                                    @if(isset($error))
                                        ReCheck, Gaji SUdah Di Hitung
                                    @endif
                                </div> 
                            </div>
                            <div class="col-md-12">
                                <label for="status_pengambilan">
                                    Status Pengambilan
                                </label>
                                <select class="col-md-6 form-control" name="status_pengambilan" required>
                                    <option value="">Pilih Status Gaji</option>
                                    <option value="1">
                                        Di Ambil
                                    </option>
                                    <option value="0">
                                        Belum Di Amil
                                    </option>
                                </select>
                                <span class="help-block">
                                    {{$errors->first('status_pengamilan')}}
                                </span>
                                <div>
                                    @if(isset($error))
                                            ReCheck, Gaji Sudah diHitung
                                        @endif
                                </div>
                            </div>
                            <div class="col-md-12" ><br><br>
                                <button type="submit" class="btn btn-success btn-block">Hitung</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
