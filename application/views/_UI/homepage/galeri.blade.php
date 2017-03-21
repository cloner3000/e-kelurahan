@layout('_layout/homepage/index')

@section('page_title')

@endsection

@section('content')
<div class="container-fluid container-content">
	<div class="row">
		<div class="col-xs-12">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title pull-left">Album</h3>
					<div class="input-group input-group-sm input-search pull-right">
						<input type="text" class="form-control" placeholder="cari album">
						<div class="input-group-btn">
							<button class="btn btn-default"><i class="fa fa-search"></i></button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="panel-body">
					<div class="row">
						@for($i=0; $i < 7; $i++)
						<div class="col-xs-4 col-sm-4 col-md-3">
							<a href="{{site_url('ui/galeri_list')}}" class="thumbnail">
								<img src="{{base_url('assets/images/default-folder.png')}}" alt="...">
								<div class="caption text-size-14 text-bold">nama album {{$i+1}}</div>
							</a>
						</div>
						@endfor
					</div>
				</div>
				<div class="panel-footer">
					<nav aria-label="...">
						<ul class="pager">
							<li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Baru</a></li>
							<li class="next"><a href="#">Lama <span aria-hidden="true">&rarr;</span></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('style')
<style>
	.container-content{
		min-height: 55vh;
		padding: 50px;
		padding-top: 125px;
	}
	.panel{
		padding: 15px;
	}
	.input-search{
		width: 200px;
		margin-right: 5px;
	}
	.pager{
		margin: 0;
	}
</style>
@endsection