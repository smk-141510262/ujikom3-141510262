@extends('layouts.app')

@section('content')
<div class="col-md-10">
	<div class="panel panel-default">
		<div class="panel-heading"><center><b><h2>Data Penggajian</h2></b></center></div>

		<div class="">
			<div class="col-md-10">
				<a href="{{ url('Penggajian/create') }}" class="btn btn-primary form-control">Create Data</a>
			</div>
			<table class="table table-striped table-hover table-bordered">
				<div class="col-md-10">
					<p>
						<img width="120px" height="100px" src="<?php echo url('asset/img/') ?>/ <?php echo $baru->tunjangan_pegawai->pegawai->photo; ?>" class="img-circle" alt="Cinque Terre">
					</p>
					<h3>
						{{ $baru->tunjangan_pegawai->pegawai->User->name }}
					</h3>
					<h4>
						{{ $baru->tunjangan_pegawai->pegawai->nip }}
					</h4>
					<b>
						@if($baru->tanggal_pengambilan == ""&&$baru->status_pengambilan == "0")
							Gaji Belum Diambil
						@elseif($baru->tanggal_pengambilan == ""||$baru->status_pengambilan == "0")
							Gaji Belum Diambil
						@else
							Gaji Sudah Diambil Pada Tanggal
							{{ $baru->tanggal_pengambilan }}
						@endif
					</b>
					<h5>
						Gaji Lembur Sebesar Rp.{{$baru->jumlah_uang_lembur}} ,
						Gaji Pokok Sebesar Rp.{{$baru->gaji_pokok}} ,
						Mendapat Tunjangan Sebesar Rp.{{$baru->tunjangan_pegawai->tunjangan->besaran_uang}} ,
						Jadi Total Gaji Rp.{{$baru->gaji_total}}
					</h5>
				</div>
			</table>
		</div>
	</div>
</div>