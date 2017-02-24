@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Rincian Gaji</div>
				<div class="panel-body">
					<a href="{{url('Penggajian')}}" class="btn btn-success btn-block">Back</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-heading"><center><b><h2>Tabel Penggajian</h2></b></center></div>

		<div class="">
			<div class="col-md-12">
				
			</div>
			<table class="table table-striped table-hover table-bordered">
				<div class="col-md-12">
					<center>
						<p>
							<img width="120px" height="100px" src="<?php echo url('asset/img/') ?>/<?php echo $penggajians->tunjangan_pegawai->pegawai->photo; ?>" class="img-Circle" alt="Cinque Terre">
						</p>
						<h3>
							{{$penggajians->tunjangan_pegawai->pegawai->User->name}}
						</h3>
						<h4>
							{{$penggajianv->tunjangan_pegawai->pegawai->nip}}
						</h4>
						<b>
							@if($penggajianv->tanggal_pengambilan == ""&&$penggajianv->status_pengambilan == "0")
	                            Belum Diambil
	                        @elseif($penggajianv->tanggal_pengambilan == ""||$penggajianv->status_pengambilan == "0")
	                            Belum Diambil
	                        @else
	                            Sudah Diambil / {{$penggajianv->tanggal_pengambilan}}
	                        @endif
	                    </b>
						<h5>
							Gaji Lembur  Rp.{{$penggajianv->jumlah_uang_lembur}} ,
							Gaji Pokok Rp.{{$penggajianv->gaji_pokok}} ,
							Tunjangan Rp.{{$penggajianv->tunjangan_pegawai->tunjangan->besaran_uang}} ,
							Total Gaji Rp.{{$penggajianv->total_gaji}}
						</h5>
					</center>
				</div>
			</table>
		</div>
	</div>
</div>
@endsection