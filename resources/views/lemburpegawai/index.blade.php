@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h2><b><center> Data Lembur Pegawai </center></b></h2></div>

                <div class="panel-body">
                    <a href="{{url('/LemburPegawai/create')}}" class="btn btn-primary btn-block">Creare Data Lembur Pegawai</a><br>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td><center><b>No</b></center></td>
                                <td><center><b>Kode Lembur</b></center></td>
                                <td><center><b>Nama Pegawai</b></center></td>
                                <td><center><b>Jumlah Jam</b></center></td>
                                <td colspan="2"><center><b>Action</b></center></td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($lembur_pegawais as $baru)
                                <tr>
                                    <td>{{ $i++}}</td>
                                    <td>{{ $baru->kategori_lembur->kode_lembur }}</td>
                                    <td>{{ $baru->pegawai->User->name }}</td>
                                    <td>{{ $baru->jumlah_jam }}</td>
                                    <td><a href="{{route('LemburPegawai.edit',$baru->id)}}" class="btn btn-success">Edit Data</a></td>
                                    <td>
                                    {!! Form::open(['method' => 'DELETE', 'route'=>['LemburPegawai.destroy', $baru->id]]) !!}
                                    {!! Form::submit('Delete Data', ['class' => 'btn btn-danger']) !!}
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
