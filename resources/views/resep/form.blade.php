@extends('template.header')

@section('content')
  <section>
    <div class="container">
    		<div class="row">
    			<div class="col-lg-8">

    				<form action="{{ url('resep/create') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
              {!! csrf_field() !!}
            <div class="form-group">
    					<div class="col-sm-8">
    								<input type="hidden" name="id_user" class="form-control" value="1" readonly/>
    					</div>
    				</div>

    				<div class="form-group">
    					<label class="col-sm-4 control-label">JUDUL</label>
    					<div class="col-sm-8">
    						<input type="text" name="judul" class="form-control" />
    					</div>
    				</div>

    				<div class="form-group">
    					<label class="col-sm-4 control-label">DESKRIPSI</label>
    					<div class="col-sm-8">
    						<textarea name="deskripsi" class="form-control" required></textarea>
    					</div>
    				</div>

    				<div class="form-group">
    					<label class="col-sm-4 control-label">ALAT & BAHAN</label>
    					<div class="col-sm-8">
    						<textarea name="bahan" class="form-control" required></textarea>
    					</div>
    				</div>
    				<div class="form-group">
    					<label class="col-sm-4 control-label">CARA MEMASAK</label>
    					<div class="col-sm-8">
    						<textarea name="cara_memasak" class="form-control" required></textarea>
    					</div>
    				</div>

    				<div class="form-group">
    					<label class="col-sm-4 control-label">FOTO</label>
    					<div class="col-sm-8">
    						<input type="file" name="foto"/>
    					</div>
    				</div>

    				<div class="form-group">
    					<label class="col-sm-4 control-label">VIDEO</label>
    					<div class="col-sm-8">
    						<input type="file" name="video"/>
    					</div>
    				</div>

    				<div class="form-group">
    					<div class="col-sm-12">
    						<label class="col-sm-7 control-label">
    						<button type="submit" class="btn-submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-saved"></i> Submit</button>
    						</label>
    					</div>
    				</div>
    			</form>
    		</div>
    	</div>
    </div>
  </section>
@endsection
