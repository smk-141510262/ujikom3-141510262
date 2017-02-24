@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h2><b><center> Data Penggajian </center></b></h2></div>

                <div class="panel-body">
                    <a href="{{url('/Penggajian/create')}}" class="btn btn-primary btn-block">Create Data Penggajian</a><br>
                    <center>{{ $penggajians->links() }}</center>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <td><center><b>No</b></center></td>
            <td><center><b>Photo</b></center></td>
            <td><center><b>NIP</b></center></td>
            <td><center><b>Nama Pegawai</b></center></td>
            <td class="2"><center><b>Status</b></center></td>
            <td colspan="3"><center><b>Action</b></center></td>
        </tr>
    </thead>
    <tbody>
        @php
            $i=1;
        @endphp
         @php
            ;
        @endphp
        @foreach ($penggajians as $baru)
            <tr>
                <td>
                    {{$i++}}
                </td>
                <td>
                    <img src="{{asset('img/'.$baru->tunjangan_pegawai->pegawai->photo.'')}}" width="75" height="75" class="img-rounded img-responsive" alt="Responsive image">
                </td>
                <td>
                    {{$baru->tunjangan_pegawai->pegawai->nip}}
                </td>
                <td>
                    {{$baru->tunjangan_pegawai->pegawai->User->name}}
                </td>
                <td>
                    @if($baru->tanggal_pengambilan == ""&&$baru->status_pengambilan == "0")
                        Belum Diambil
                    @elseif($baru->tanggal_pengambilan == ""||$baru->status_penggambilan == "0")
                        Belum Diambil
                </td>
                <td>
                    <a class="btn btn-success" href="{{route('Penggajian.edit', $baru->id)}}">Ambil</a>
                    @else
                        Sudah Diambiln / {{$baru->tanggal_pengambilan}}
                    @endif
                </td>
                <td>
                    <a class="btn btn-info" href="{{route('Penggajian.show', $baru->id)}}">Detail</a>
                </td>
                <td>
                    {!!Form::open(['method'=>'DELETE','route'=>['Penggajian.destroy',$baru->id]])!!}
                    {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}
                    {!!Form::close()!!}
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
