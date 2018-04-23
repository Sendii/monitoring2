<tr role="row" class="odd">
	<?php
		$unitkerja = \App\unitkerja::where('aa', '=', $key->id_unit)->value('aa');
		$pegawai = \App\pegawai::where('namapegawai', '=', $key->id_pegawai)->value('namapegawai');
		$cekproses = \App\prosespengadaan::where('id_ppbj', '=', $key->id)->value('selesaikon');
		$itemspengadaan = \App\pengadaan::where('id', '=', $key->id_pengadaan)->value('namapengadaan');
		$cabang = \App\pbbj::where('id_unit', $key->id_unit)->first();
		$unit_kerjacabang = \App\unitkerja::where('unit_kerja', $cabang->id_unit)->where('unit_kerja', 'Kantor Cabang')->get();
	?>
	<td class="sorting_1">{{$key->id}}</td>
	<td class="border">{{$key->id_unit}}</td>
	<!-- {{ $loop->iteration }} -->
	<td class="center">{{$key->kodePj}}</td>
	<td class="center">
		@if($pegawai == "")
			<i><b>Belum ada Pelaksana</b></i>
		@else
			<div class="row">
				<div class="center">
					<i>{{$pegawai}}</i>
				</div>
			</div>
		@endif
</td>
<td class="center">{{$key->no_regis_umum}}</td>
<td class="center">{{$key->tgl_regis_umum}}</td>
<td class="center">{{$key->no_ppbj}}</td>
<td class="center">{{$key->tgl_permintaan_ppbj}}</td>
<td class="center">{{$key->tgl_dibutuhkan_ppbj}}</td>
<td class="center">{{$itemspengadaan}}</td>
<td class="center">{{ $unitkerja }}</td>
<td class="center">
	<ul>
		@foreach($key->Barang as $value)
		<li>
			{{$value->nama_barang}}
		</li>
		@endforeach
	</ul>
</td>
<td class="center">
	<ul>
		@foreach($key->Barang as $value)
		<li>
			{{$value->harga_brg}}
		</li>
		@endforeach
	</ul>
</td>
<td class="center">
	<ul>
		@foreach($key->Barang as $value)
		<li>
			{{$value->jumlah_brg}}
		</li>
		@endforeach
	</ul>
</td>
<td class="center">
	<ul>
		<?php
			$total = 0;
		?>
		@foreach($key->Barang as $value)
		<li>
			{{$value->total_brg }}
			<?php
				$total += $value->total_brg
			?>
		</li>
		@endforeach Total = <i>{{ $total }}</i>
	</ul>
</td>
<td>
	<a class="btn waves-effect waves-light yellow darken-2" href="{{ url('editassignmentPpbj', [$key->id])}}"><i class="fa fa-edit" aria-hidden="true">
		@if(Auth::user() && Auth::user()->akses == 'Kasubag QA')
			</i>Lihat Ppbj</a> 	
		@else
			</i>Penugasan</a> 
		@endif
		@if(Auth::user() && Auth::user()->akses == 'Kasubag QA')
			@if ($key->status == 'Pending')
				<center><span class="label label-info">Belum diVerifikasi&nbsp;<i class="fa fa-close"></i></span></center>
			@elseif ($key->status == 'Accepted')
				<center><span class="label label-success">Sudah di Verifikasi&nbsp;<i class="fa fa-check"></i></span></center>
			@else
				<center><span class="label label-danger">Dikembalikan&nbsp;<i class="fa fa-close"></i></span></center>
			@endif
		@endif

	@if(Auth::user() && Auth::user()->akses != 'Kasubag QA')
		@if($pegawai != "" && $cekproses != "")
			<center><span class="label label-success">Proses Selesai&nbsp;<i class="fa fa-check"></i></span></center>
		@elseif($pegawai == "")
			<center><span class="label label-danger">Belum ada Pemroses&nbsp;<i class="fa fa-close"></i></span></center>
		@elseif ($pegawai != "")
			<center><span class="label label-info">Dalam Proses&nbsp;<i class="fa fa-refresh"></i></span></center>
		@endif
	@endif
</td>
</tr>