@extends('layouts.layout')

@section('content')
  <section>
    <div class="container">
    		<div class="row">
    			<div class="col-xs-12">
            <div class="form-resep">

    				<form action="{{ url('resep/add') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
              {!! csrf_field() !!}

            <h2 class="txtgeo">Tambah Resep</h2>

            <div class="form-group">
    					<div class="col-sm-8">
								<input type="hidden" name="id_user" class="form-control" value="1" readonly/>
    					</div>
    				</div>

    				<div class="form-group">
    					<div class="col-xs-12">
                <label class="txtgeo">JUDUL</label>
    						<input type="text" name="judul" class="form-control" />
    					</div>
    				</div>

    				<div class="form-group">
    					<div class="col-xs-12">
                <label class="txtgeo">DESKRIPSI</label>
    						<textarea name="deskripsi" class="form-control" required></textarea>
    					</div>
    				</div>

    				<div class="form-group">
    					<div class="col-xs-12">
                <label class="txtgeo">ALAT & BAHAN</label>
    						<textarea name="bahan" class="form-control" required></textarea>
    					</div>
    				</div>
    				<div class="form-group">
    					<div class="col-xs-12">
                <label class="txtgeo">CARA MEMASAK</label>
    						<textarea name="cara_memasak" class="form-control" required></textarea>
    					</div>
    				</div>

    				<div class="form-group">
    					<div class="col-xs-12">
                <label class="txtgeo">FOTO</label>
    						<input type="file" name="foto"/>
                <!-- <input type="text" name="foto" value="0"> -->
    					</div>
    				</div>

    				<div class="form-group">
    					<div class="col-xs-12">
                <label class="txtgeo">VIDEO</label>
    						<!-- <input type="file" name="video"/> -->
                <input type="text" name="video" value="0">
    					</div>
    				</div>

    				<div class="form-group">
    					<div class="col-sm-12">
    						<label class="col-xs-12 control-label">
    						<button type="submit" class="btn btn-primary col-xs-12"><i class="glyphicon glyphicon-floppy-saved"></i> Submit</button>
    						</label>
    					</div>
    				</div>

    			</form>
    		</div>
    	</div>
    </div>
    </div>
  </section>
@endsection
