@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h3><b><center> Data Jabatan </center></b></h3></div>

                <div class="panel-body">
                    <a href="{{url('/Jabatan/create')}}" class="btn btn-danger btn-block">Tambah Jabatan</a><br>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode Jabatan</td>
                                <td>Nama Jabatan</td>
                                <td>Besaran Uang</td>
                                <td colspan="2">Pilihan:</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($jabatans as $baru)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ $baru->kode_jabatan }}</td>
                                    <td>{{ $baru->nama_jabatan }}</td>
                                    <td>{{ $baru->besaran_uang }}</td>
                                    <td><a href="{{route('Jabatan.edit',$baru->id)}}" class="btn btn-warning">Ubah</a></td>
                                    <td>
                                    {!! Form::open(['method' => 'DELETE', 'route'=>['Jabatan.destroy', $baru->id]]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
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
