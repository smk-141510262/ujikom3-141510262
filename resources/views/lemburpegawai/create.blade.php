@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2><b><center>Tambah Data Lembur Pegawai </center></b></h2></div>

                <div class="panel-body">
                    {!! Form::open(['url'=>'LemburPegawai'])!!}
                    <label>Kode Lembur</label>
                    <select name="kode_lembur_id" class="form-control">
                        <option value="">Pilih Kode Tunjangan</option>
                        @foreach($kategori_lemburs as $baru)
                        <option value="{{$baru->id}}">{{$baru->kode_lembur}}</option>
                        @endforeach
                    </select><br>

                    <label>Nama Pegawai</label>
                    <select name="pegawai_id" class="form-control">
                        <option value="">Pilih Nama Pegawai</option>
                        @foreach($pegawais as $baru)
                        <option value="{{$baru->id}}">{{$baru->User->name}}</option>
                        @endforeach
                    </select><br>

                    <div class="form-group">
                        {!! Form::label('Jumlah Jam','Jumlah Jam')!!}
                        {!! Form::text('jumlah_jam',null,['class'=>'form-control','required'])!!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::submit('save',['class'=>'btn btn-primary form-control'])!!}
                    </div>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
