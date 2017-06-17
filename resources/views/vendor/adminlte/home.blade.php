@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Home</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						My name is Rafieq Roslan, an IT bachelor student majored in Intelligent Systems Engineering. This project developed just for Soding 
						interview tasks. So, I am using Admin LTE layout as the theme and this website is using Laravel Framework. So, click on sidebar 
						'CRUD' for do 'crud-ing' to tasks. Thank You.
						<br>
						<br>
						<div class='pull-right' align='right' > If you want to contact me or offering me jobs  you can visit my linked in profile
						<br>
						<b >https://www.linkedin.com/in/rafieq-roslan/</b></div>

					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>
@endsection
