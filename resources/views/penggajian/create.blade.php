@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2><b><center> Tambah Data Penggajian </center></b></h2></div>
                <div class="panel-body">
                    {!!Form::open(['url'=>'/Pegawai', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data', 'files'=>true])!!}
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
