@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Tunjangan</div>

                <div class="panel-body">
                {!! Form::model($tunjangans,['method'=>'PATCH','route'=>['Tunjangan.update',$tunjangans->id]])!!}
                    
                    <label>Nama Lembur</label>
                    <select name="kode_lembur_id" class="form-control" required>
                        
                        @foreach($kategori_lemburs as $baru)
                        <option value="{{$baru->id}}">{{$baru->kode_lembur}}</option>
                        @endforeach
                    </select><br>
                    <div class="form-group">
                            <label for="pegawai_id" class="form-group">Nama Pegawai</label>
                            <div class="form-group">
                                <select name="pegawai_id" class="form-control">
                                    <option value="{{ $lembur_pegawais->PegawaiModel->User->name }}">Nama Pegawai -- {{ $lembur_pegawais->PegawaiModel->User->name }}</option>
                                    @foreach($pegawais as $baru)
                                    <option value="{{$baru->id}}">{{$baru->User->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    <div class="form-group">
                        {!! Form::label('Besaran Uang','Besaran Uang')!!}
                        {!! Form::text('besaran_uang',null,['class'=>'form-control','required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('save',['class'=>'btn btn-success form-control'])!!}
                    </div>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
