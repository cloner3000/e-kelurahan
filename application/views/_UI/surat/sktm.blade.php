@layout('_layout/dashboard/index')
@section('title')Surat Keterangan Tidak Mampu@endsection
@section('nama-kelurahan')Lumajang@endsection

@section('content')
<div class="panel panel-theme">
	<div class="panel-heading">
		<h3 class="panel-title pull-left">Surat Keterangan Tidak Mampu (SKTM)</h3>
		<div class="btn-group pull-right">
			<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus"></i></button>
			<button class="btn btn-default btn-sm reload"><i class="fa fa-refresh"></i></button>
			<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-cari"><i class="fa fa-search"></i></button>
			<a href="#" class="btn btn-default btn-sm"><i class="fa fa-archive"></i></a>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="panel-body table-responsive table-full">
		<table class="table table-stripped table-hover table-bordered">
			<thead>
				<tr>
					<th class="text-center">NO. URUT</th>
					<th>NO. SURAT</th>
					<th>PENGAJU</th>
					<th class="text-center">TANGGAL PENGAJUAN</th>
					<th class="text-center">TANGGAL VERIFIKASI</th>
					<th class="text-center">AKSI</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="text-center">01</td>
					<td>23/18/02.002/2017</td>
					<td><a href="#">Mohammad Ainul Yakin</a></td>
					<td class="text-center">{{date('d-m-Y')}}</td>
					<td class="text-center">{{date('d-m-Y')}}</td>
					<td class="text-center">
						<a href="#" class="btn btn-default btn-xs"><i class="fa fa-info"></i> detail</a>
						<a href="#" class="btn btn-default btn-xs"><i class="fa fa-print"></i> cetak</a>
						<a href="#" class="btn btn-default btn-xs" onclick="return confirm('Anda yakin?')"><i class="fa fa-archive"></i> arsipkan</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="panel-footer"><span class="text-grey">last edited by admin 12/02/2017 08:50</span></div>
</div>
@endsection

