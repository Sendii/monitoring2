<div class="box-body">
	<div class="form-group">
		<input type="text" class="form-control" id="no_ppbj" disabled="disabled"><br>
		<div class="col-sm-6">
			<div class="input-group text">
				<div class="input-group-addon">
					@if($key->no_spph2 != "")
					<i class="fa fa-check"></i>
					@elseif($key->no_spph2 == "")
					<i class="fa fa-close"></i>
					@endif
				</div>
				<input type="text" class="form-control" id="no_spph2" placeholder="No. Spph" name="">
			</div>
			<br>
			<div class="input-group text">
				<div class="input-group-addon">
					@if($key->tgl_spph2 != "")
					<i class="fa fa-check"></i>
					@elseif($key->tgl_spph2 == "")
					<i class="fa fa-close"></i>
					@endif
				</div>
				<input type="text" class="form-control" id="tgl_spph2" placeholder="Tgl. Spph" name="">
			</div>
			@if($key->selesaispph2 != "")
			<label class="col-sm-6 control-label" id="selesaispph2"><i class="fa fa-arrow-right"></i>{{$key->selesaispph2}}</label><br>
			@else
			<label class="col-sm-8 control-label">Belum Selesai</label>
			@endif

			<input type="text" class="form-control" id="tgl_etp2" placeholder="Tgl. Etp" name=""><br>
			<div class="input-group text">
				<div class="input-group-addon">
					@if($key->no_pmn2 != "")
					<i class="fa fa-check"></i>
					@elseif($key->no_pmn2 == "")
					<i class="fa fa-close"></i>
					@endif
				</div>
				<input type="text" class="form-control" id="no_pmn2" placeholder="No. Pmn" name="">
			</div>
			<br>
			<div class="input-group text">
				<div class="input-group-addon">
					@if($key->no_pmn2 != "")
					<i class="fa fa-check"></i>
					@elseif($key->no_pmn2 == "")
					<i class="fa fa-close"></i>
					@endif
				</div>
				<input type="text" class="form-control" id="tgl_pmn2" placeholder="Tgl Pmn" name="">
			</div>
			@if($key->selesaipmn2 != "")
			<label class="col-sm-6 control-label" id="selesaipmn2"><i class="fa fa-arrow-right"></i>{{$key->selesaipmn2}}</label><br>
			@else
			<label class="col-sm-8 control-label" style="padding-left: 1px;">Belum Selesai</label><br>
			@endif <br>

			<div class="input-group text">
				<div class="input-group-addon">
					@if($key->no_kon2 != "")
					<i class="fa fa-check"></i>
					@elseif($key->no_kon2 == "")
					<i class="fa fa-close"></i>
					@endif
				</div>
				<input type="text" class="form-control" id="no_kon2" placeholder="No. Kon" name="">
			</div><br>
			<div class="input-group text">
				<div class="input-group-addon">
					@if($key->tgl_kon2 != "")
					<i class="fa fa-check"></i>
					@elseif($key->tgl_kon2 == "")
					<i class="fa fa-close"></i>
					@endif
				</div>
				<input type="text" class="form-control" id="tgl_kon2" placeholder="Tgl. Kon" name="">
			</div>
			@if($key->selesaikon2 != "")
			<label class="col-sm-6 control-label" id="selesaikon2"><i class="fa fa-arrow-right"></i>{{$key->selesaikon2}}</label><br>
			@else
			<label class="col-sm-8 control-label" style="padding-left: 1px;">Belum Selesai</label><br>
			@endif <br><br>
			<a class="btn btn-primary">s</a>
		</div>
		<!-- kedua -->
		<div class="col-sm-6">
			<div class="input-group text">
				<div class="input-group-addon">
					@if($key->no_spph3 != "")
					<i class="fa fa-check"></i>
					@elseif($key->no_spph3 == "")
					<i class="fa fa-close"></i>
					@endif
				</div>
				<input type="text" class="form-control" id="no_spph3" placeholder="No. Spph" name="">
			</div>
			<br>
			<div class="input-group text">
				<div class="input-group-addon">
					@if($key->tgl_spph3 != "")
					<i class="fa fa-check"></i>
					@elseif($key->tgl_spph3 == "")
					<i class="fa fa-close"></i>
					@endif
				</div>
				<input type="text" class="form-control" id="tgl_spph3" placeholder="Tgl. Spph" name="">
			</div>
			@if($key->selesaispph3 != "")
			<label class="col-sm-6 control-label"><i class="fa fa-arrow-right"></i>{{$key->selesaispph3}}</label><br>
			@else
			<label class="col-sm-8 control-label">Belum Selesai</label>
			@endif

			<input type="text" class="form-control" id="tgl_etp3" placeholder="Tgl. Etp" name=""><br>
			<div class="input-group text">
				<div class="input-group-addon">
					@if($key->no_pmn3 != "")
					<i class="fa fa-check"></i>
					@elseif($key->no_pmn3 == "")
					<i class="fa fa-close"></i>
					@endif
				</div>
				<input type="text" class="form-control" id="no_pmn3" placeholder="No. Pmn" name="">
			</div>
			<br>
			<div class="input-group text">
				<div class="input-group-addon">
					@if($key->no_pmn3 != "")
					<i class="fa fa-check"></i>
					@elseif($key->no_pmn3 == "")
					<i class="fa fa-close"></i>
					@endif
				</div>
				<input type="text" class="form-control" id="tgl_pmn3" placeholder="Tgl Pmn" name="">
			</div>
			@if($key->selesaipmn3 != "")
			<label class="col-sm-6 control-label"><i class="fa fa-arrow-right"></i>{{$key->selesaipmn3}}</label><br>
			@else
			<label class="col-sm-8 control-label" style="padding-left: 1px;">Belum Selesai</label><br>
			@endif <br>

			<div class="input-group text">
				<div class="input-group-addon">
					@if($key->no_kon3 != "")
					<i class="fa fa-check"></i>
					@elseif($key->no_kon3 == "")
					<i class="fa fa-close"></i>
					@endif
				</div>
				<input type="text" class="form-control" id="no_kon3" placeholder="No. Kon" name="">
			</div><br>
			<div class="input-group text">
				<div class="input-group-addon">
					@if($key->tgl_kon3 != "")
					<i class="fa fa-check"></i>
					@elseif($key->tgl_kon3 == "")
					<i class="fa fa-close"></i>
					@endif
				</div>
				<input type="text" class="form-control" id="tgl_kon3" placeholder="Tgl. Kon" name="">
			</div>
			@if($key->selesaikon3 != "")
			<label class="col-sm-6 control-label"><i class="fa fa-arrow-right"></i>{{$key->selesaikon3}}</label><br>
			@else
			<label class="col-sm-8 control-label" style="padding-left: 1px;">Belum Selesai</label><br>
			@endif <br>
		</div>
	</div>
</div>