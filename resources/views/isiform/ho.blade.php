@extends("layouts.masterfront")
@section('content')
	<div class="inline text-center" ><h3>Formulir Pengajuan Izin Gangguan (HO)</h3></div>
	<br>
	<div class="row">
		<div class="col-md-3">	</div>
		
		<div class="col-md-6">	
		
				<div class="row form-group">
					<label class="col-md-6" for="namaPengusaha">Nama Pengusaha :</label>
					<input class="col-md-6" type="text" class="form-control" name="namaPengusaha" id="namaPengusaha" required>
				</div>
				<div class="row form-group">
					<label class="col-md-6" for="alamatPengusaha">Alamat Pengusaha :</label>
					<input class="col-md-6" type="text" class="form-control" name="alamatPengusaha" id="alamatPengusaha"  required>
				</div>
				<div class="row form-group">
					<label class="col-md-6" for="kebangsaan">Kebangsaan :</label>
					<input class="col-md-6" type="text" class="form-control" name="kebangsaan" id="kebangsaan"  required>
				</div>
				<div class="row form-group">
					<label class="col-md-6" for="namaPerusahaan">Nama Perusahaan : </label>
					<input class="col-md-6" type="text" class="form-control" name="namaPerusahaan" id="namaPerusahaan"  required>
				</div>
				<div class="row form-group">
					<label class="col-md-6" for="letakPerusahaan">Letak Perusahaan : </label>
					<input class="col-md-6" type="text" class="form-control" name="letakPerusahaan" id="letakPerusahaan"  required>
				</div>
				<div class="row form-group">
					<label class="col-md-6" for="bentukPerusahaan">Bentuk Perusahaan : </label>
					<select class="col-md-6 form-control" id="bentukPerusahaan" name="bentukPerusahaan">
						<option value="Perorangan">Perorangan</option>
						<option value="CV">CV</option>
						<option value="PT">PT</option>
					</select>
				</div>
				<div class="row form-group">
					<label class="col-md-6" for="statusPerusahaan">Status Perusahaan : </label>
					<input class="col-md-6" type="text" class="form-control" name="statusPerusahaan" id="statusPerusahaan"  required>
				</div>
				<div class="row form-group">
					<label class="col-md-6" for="jenisUsaha">Jenis Usaha : </label>
					<input class="col-md-6" type="text" class="form-control" name="jenisUsaha" id="jenisUsaha"  required>
				</div>
				<div class="row form-group">
					<label class="col-md-6" for="permohonan">Permohonan : </label>
					<select class="col-md-6 form-control" id="permohonan" name="permohonan">
						<option value="Baru">Baru</option>
						<option value="Perluasan">Perluasan</option>
						<option value="Perubahan izin">Perubahan izin</option>
					</select>
				</div>
				<div class="row form-group">
					<label class="col-md-6" for="luasTanah">Luas Tanah : </label>
					<input class="col-md-6" type="text" class="form-control" name="luasTanah" id="luasTanah"  required>
				</div>
				<div class=" form-group">
					<label for="batas">Batas-batas : </label>
					<div class=" row ">
						<div class="form-group">
							<label class="col-md-6" for="batasUtara">Utara : </label>
							<input class="col-md-6" type="text" class="form-control" name="batasUtara" id="batasUtara"  required>
						</div>
						<div class="form-group">
							<label class="col-md-6" for="batasTimur">Timur : </label>
							<input class="col-md-6" type="text" class="form-control" name="batasTimur" id="batasTimur"  required>
						</div>
						<div class="form-group">
							<label class="col-md-6" for="batasSelatan">Selatan : </label>
							<input class="col-md-6" type="text" class="form-control" name="batasSelatan" id="batasSelatan"  required>
						</div>
						<div class="form-group">
							<label class="col-md-6" for="batasBarat">Barat : </label>
							<input class="col-md-6" type="text" class="form-control" name="batasBarat" id="batasBarat"  required>
						</div>
					</div>
				</div>
				<div class="row form-group">
					<label class="col-md-6" for="luasBangunan">Luas Bangunan Perusahaan : </label>
					<input class="col-md-6" type="text" class="form-control" name="luasBangunan" id="luasBangunan"  required>
				</div>
				<div class="row form-group">
					<label class="col-md-6" for="keadaanBangunan">Keadaan Bangunan : </label>
					<select class="col-md-6 form-control" id="keadaanBangunan" name="keadaanBangunan">
						<option value="1">Permanen</option>
						<option value="2">Semi Permanen</option>
						<option value="3">Darurat</option>
					</select>
				</div>
				<div class="row form-group">
					<label class="col-md-6" for="statusTanah">Status Tanah Perusahaan : </label>
					<select class="col-md-6 form-control" id="statusTanah" name="statusTanah">
						<option value="1">Milik Oranglain</option>
						<option value="2">Milik Sendiri</option>
					</select>
				</div>
				<div class="form-group">
					<label for="tenagaKerja">Tenaga Kerja : </label>
					<div>
						<label for="tenagaKerjaPribumi">Pribumi : </label>
						<div class="">
							<div class="row form-group">
								<label class="col-md-6" for="pribumiPria">Laki-laki : </label>
								<input class="col-md-6" type="text" class="form-control" name="pribumiPria" id="pribumiPria"  required>
							</div>
							<div class="row form-group">
								<label class="col-md-6" for="pribumiWanita">Wanita : </label>
								<input class="col-md-6" type="text" class="form-control" name="pribumiWanita" id="pribumiWanita"  required>
							</div>
						</div>
						<label for="tenagaKerjaAsing">Asing : </label>
						<div class="">
							<div class="row form-group">
								<label class="col-md-6" for="asingPria">Laki-laki : </label>
								<input class="col-md-6" type="text" class="form-control" name="asingPria" id="asingPria"  required>
							</div>
							<div class="row form-group">
								<label class="col-md-6" for="asingWanita">Wanita : </label>
								<input class="col-md-6" type="text" class="form-control" name="asingWanita" id="asingWanita"  required>
							</div>
						</div>
					</div>
				</div>
				<div class="row form-group">
					<label class="col-md-6" for="banyakPeralatan">Banyaknya Peralatan Mesin dan Tenaga Penggerak yang Dipergunakan : </label>
					<input class="col-md-6" type="text" class="form-control" name="banyakPeralatan" id="banyakPeralatan"  required>
				</div>
				<div class="row form-group">
					<label class="col-md-6" for="sumberAir">Sumber Air yang Dipergunakan : </label>
					<input class="col-md-6" type="text" class="form-control" name="sumberAir" id="sumberAir"  required>
				</div>
				<div class="row form-group">
					<label class="col-md-6" for="jumlahJamKerja">Jumlah Jam Kerja : </label>
					<input class="col-md-6" type="text" class="form-control" name="jumlahJamKerja" id="jumlahJamKerja"  required>
				</div>
				<div class="row form-group">
					<label class="col-md-6" for="lainLain">Lain-lain :</label>
					<textarea class="col-md-6 form-control" rows="5" name="lainLain" id="lainLain"></textarea>
				</div>
				<div class="row">
					<div class="span5"></div>
					<button type="submit" class="text-center btn btn-success ">Submit</button>
				</div>
		</div>
		<div class="span3">	</div>
	</div>
@stop