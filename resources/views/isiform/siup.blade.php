@extends("layouts.masterfront")
@section('content')
	<div class="inline text-center" ><h3>Formulir Pengajuan Surat Izin Usaha Perdagangan (SIUP)</h3></div>
	<br>
	<div class="row">
		<div class="span3">	</div>
		<div class="span6">	
				<div class="panel panel-default">
					<div class="panel-heading">
						<br><h4 class="panel-title text-info">Identitas Pemilik / Pengurus / Penanggungjawab</h4>
					</div>
					<div class="panel-body">
						<div class=" row form-group">
							<label class="span2" for="nama">Nama :</label>
							<input class="span4" type="text" class="form-control" name="nama" id="nama" required>
						</div>
						<div class=" row form-group">
							<label class="span2" for="alamatTinggal">Alamat Temapat Tinggal :</label>
							<input class="span4" type="text" class="form-control" name="alamatTinggal" id="alamatTinggal" required>
						</div>
						<div class=" row form-group">
							<label class="span2" for="tempatLahir">Tempat / Tanggal Lahir :</label>
							<input class="span4" type="text" class="form-control" name="tempatLahir" id="tempatLahir" required>
						</div>
						<div class=" row form-group">
							<label class="span2" for="nomorTelepon">Nomor Telepon / Fax :</label>
							<input class="span4" type="text" class="form-control" name="nomorTelepon" id="nomorTelepon" required>
						</div>
						<div class=" row form-group">
							<label class="span2" for="nomorKtp">Nomor KTP / Paspor :</label>
							<input class="span4" type="text" class="form-control" name="nomorKtp" id="nomorKtp" required>
						</div>
						<div class=" row form-group">
							<label class="span2" for="kewarganegaraan">Kewarganegaraan :</label>
							<input class="span4" type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan" required>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<br><h4 class="panel-title text-info">Identitas Perusahaan</h4>
					</div>
					<div class="panel-body">
						<div class=" row form-group">
							<label class="span2" for="namaPerusahaan">Nama Perusahaan :</label>
							<input class="span4" type="text" class="form-control" name="namaPerusahaan" id="namaPerusahaan" required>
						</div>
						<div class=" row form-group">
							<label class="span2" for="alamatPerusahaan">Alamat Perusahaan :</label>
							<input class="span4" type="text" class="form-control" name="alamatPerusahaan" id="alamatPerusahaan" required>
						</div>
						<div class=" row form-group">
							<label class="span2" for="nomorTeleponPerusahaan">Nomor Telepon / Fax :</label>
							<input class="span4" type="text" class="form-control" name="nomorTeleponPerusahaan" id="nomorTeleponPerusahaan" required>
						</div>
						<div class=" row form-group">
							<label class="span2" for="provinsi">Provinsi :</label>
							<input class="span4" type="text" class="form-control" name="provinsi" id="provinsi" required>
						</div>
						<div class=" row form-group">
							<label class="span2" for="kabupaten">Kabupaten :</label>
							<input class="span4" type="text" class="form-control" name="kabupaten" id="kabupaten" required>
						</div>
						<div class=" row form-group">
							<label class="span2" for="kecamatan">Kecamatan :</label>
							<input class="span4" type="text" class="form-control" name="kecamatan" id="kecamatan" required>
						</div>
						<div class=" row form-group">
							<label class="span2" for="kelurahan">Kelurahan / Desas :</label>
							<input class="span4" type="text" class="form-control" name="kelurahan" id="kelurahan" required>
						</div>
						<div class=" row form-group">
							<label class="span2" for="status">Status :</label>
							<input class="span4" type="text" class="form-control" name="status" id="status" required>
						</div>
						<div class=" row form-group">
							<label class="span2" for="kodepos">Kodepos :</label>
							<input class="span4" type="text" class="form-control" name="kodepos" id="kodepos" required>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<br><h4 class="text-info panel-title">Legalitas Perusahaan</h4>
					</div>
					<div class="panel-body">
						<label>Akta Pendirian</label>
						<div class=" row form-group">
							<label class="span3" for="nomorAktaPendirian">Nomor & Tanggal Akta :</label>
							<input class="span3" type="text" class="form-control" name="nomorAktaPendirian" id="nomorAktaPendirian" required>
						</div>
						<div class=" row form-group">
							<label class="span3" for="nomorPengesahanPendirian">Nomor & Tanggal Pengesahan :</label>
							<input class="span3" type="text" class="form-control" name="nomorPengesahanPendirian" id="nomorPengesahanPendirian" required>
						</div>
						<label>Akta Perubahan</label>
						<div class=" row form-group">
							<label class="span3" for="nomorAktaPerubahan">Nomor & Tanggal Akta :</label>
							<input class="span3" type="text" class="form-control" name="nomorAktaPerubahan" id="nomorAktaPerubahan" required>
						</div>
						<div class=" row form-group">
							<label class="span3" for="nomorPengesahanPerubahan">Nomor & Tanggal Pengesahan :</label>
							<input class="span3" type="text" class="form-control" name="nomorPengesahanPerubahan" id="nomorPengesahanPerubahan" required>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<br><h4 class=" text-info panel-title">Modal dan Saham</h4>
					</div>
					<div class="panel-body">
						<div class=" row form-group">
							<label class="span4" for="modalPerusahaan">Modal dan Nilai Kelayakan Bersih Perusahaan :</label>
							<input class="span2" type="text" class="form-control" name="modalPerusahaan" id="modalPerusahaan" required>
						</div>
						<label>Saham</label>
						<div class=" row form-group">
							<label class="span3" for="totalSaham">Total Nilai Saham :</label>
							<input class="span3" type="text" class="form-control" name="totalSaham" id="totalSaham" required>
						</div>
						<label>Komposisi Kepemilikan Saham</label>
						<div class="form-inline">
							<div class=" row form-group">
								<label class="span3" for="persenNasional">Nasional:</label>
								<input class="span3" type="text" class="form-control" name="persenNasional" id="persenNasional" required>
							</div>
							<div class=" row form-group">
								<label class="span3" for="persenAsing">Asing :</label>
								<input class="span3" type="text" class="form-control" name="persenAsing" id="persenAsing" required>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<br><h4 class="panel-title text-info">Kegiatan Usaha</h4>
					</div>
					<div class="panel-body">
						<div class=" row form-group">
							<label class="span3" for="kelembagaan">Kelembagaan :</label>
							<input class="span3" type="text" class="form-control" name="kelembagaan" id="kelembagaan" required>
						</div>
						<div class=" row form-group">
							<label class="span3" for="kegiatanUsaha">Kegiatan Usaha (KBLI 5 Digit) :</label>
							<input class="span3" type="text" class="form-control" name="kegiatanUsaha" id="kegiatanUsaha" required>
						</div>
						<div class=" row form-group">
							<label class="span3" for="daganganUtama">Barang/Jasa Dagangan Utama :</label>
							<input class="span3" type="text" class="form-control" name="daganganUtama" id="daganganUtama" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span5"></div>
					<button type="submit" class="text-center btn btn-success ">Submit</button>
				</div>
		</div>
		<div class="span3">	</div>
	</div>
@stop