@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h2><b><center> Data Penggajian </center></b></h2></div>

                <div class="panel-body">
                    <a href="{{url('/Pegawai/create')}}" class="btn btn-primary btn-block">Create Data Penggajian</a><br>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td><center><b>No</b></center></td>
                                <td><center><b>Foto</b></center></td>
                                <td><center><b>NIP</b></center></td>
                                <td><center><b>Nama Pegawai</b></center></td>
                                <td><center><b>Status</b></center></td>
                                <td colspan="1"><center><b>Action</b></center></td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach ($penggajians as $baru)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><img height="100px" alt="Smiley face" width="100px" class="img-circle" src="asset/img/{{$baru->tunjangan_pegawai->pegawai->photo}}"></td>
                                    <td>{{$baru->tunjangan_pegawai->pegawai->nip}}</td>
                                    <td>{{$baru->tunjangan_pegawai->pegawai->User->name}}</td>
                                    <td><a href="{{route('Pegawai.show',$baru->id)}}" class="btn btn-warning">Rincian Gaji</a></td>
                                    {!! Form::close() !!}
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
@endsection
