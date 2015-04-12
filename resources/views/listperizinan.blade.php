@extends('layouts.masterfront')

@section('content')
	<div class="col-md-12 mt">
      	<div class="content-panel">
              <table class="table   table-hover">
      	  	  <div class="row centered"><h4></i> Daftar Perizinan</h4></div>
      	  	  <hr>
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama Izin</th>
                      <th>Penjelasan</th>
                      <th>Fromulir</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <td>1</td>
                      <td>Izin Gangguan / HO</td>
                      <td><a href="detailperizinan/ho" type="button" class=" text-center btn-sm btn-info">Pelajari</a></td>
                      <td><a href="isiform/ho" type="button" class=" text-center btn-sm btn-primary">Isi Sekarang <i class="fa fa-angle-right"></i> </a></td>
                  </tr>
                  <tr>
                      <td>2</td>
                      <td>Tanda Daftar Perusahaan / TDP</td>
                      <td><a href="detailperizinan/tdp" type="button" class=" text-center btn-sm btn-info">Pelajari</a></td>
                      <td><a href="isiform/tdp" type="button" class=" text-center btn-sm btn-primary">Isi Sekarang <i class="fa fa-angle-right"></i> </a></td>
                  </tr>
                  <tr>
                      <td>3</td>
                      <td>Tanda Daftar Gudang / TDG</td>
                      <td><a href="detailperizinan/tdg" type="button" class=" text-center btn-sm btn-info">Pelajari</a></td>
                      <td><a href="isiform/tdg" type="button" class=" text-center btn-sm btn-primary">Isi Sekarang <i class="fa fa-angle-right"></i> </a></td>
                  </tr>
                  <tr>
                      <td>4</td>
                      <td>Izin Usaha Perdagangan / SIUP</td>
                      <td><a href="detailperizinan/siup" type="button" class=" text-center btn-sm btn-info">Pelajari</a></td>
                      <td><a href="isiform/siup" type="button" class=" text-center btn-sm btn-primary">Isi Sekarang <i class="fa fa-angle-right"></i> </a></td>
                  </tr>
                  <tr>
                      <td>5</td>
                      <td>Izin Usaha Industri / IUI</td>
                      <td><a href="detailperizinan/iui" type="button" class=" text-center btn-sm btn-info">Pelajari</a></td>
                      <td><a href="isiform/iui" type="button" class=" text-center btn-sm btn-primary">Isi Sekarang <i class="fa fa-angle-right"></i> </a></td>
                  </tr>
                  <tr>
                      <td>6</td>
                      <td>Tanda Daftar Industri /TDI</td>
                      <td><a href="detailperizinan/tdi" type="button" class=" text-center btn-sm btn-info">Pelajari</a></td>
                      <td><a href="isiform/tdi" type="button" class=" text-center btn-sm btn-primary">Isi Sekarang <i class="fa fa-angle-right"></i> </a></td>
                  </tr>
                  <tr>
                      <td>7</td>
                      <td>Izin Usaha Jasa Konstruksi / IUJK</td>
                      <td><a href="detailperizinan/iujk" type="button" class=" text-center btn-sm btn-info">Pelajari</a></td>
                      <td><a href="isiform/iujk" type="button" class=" text-center btn-sm btn-primary">Isi Sekarang <i class="fa fa-angle-right"></i> </a></td>
                  </tr>
                  <tr>
                      <td>8</td>
                      <td>Izin Mendirikan Bangunan / IMB</td>
                      <td><a href="detailperizinan/imb" type="button" class=" text-center btn-sm btn-info">Pelajari</a></td>
                      <td><a href="isiform/imb" type="button" class=" text-center btn-sm btn-primary">Isi Sekarang <i class="fa fa-angle-right"></i> </a></td>
                  </tr>
                  <tr>
                      <td>9</td>
                      <td>Izin Lokasi</td>
                      <td><a href="detailperizinan/ilo" type="button" class=" text-center btn-sm btn-info">Pelajari</a></td>
                      <td><a href="isiform/ilo" type="button" class=" text-center btn-sm btn-primary">Isi Sekarang <i class="fa fa-angle-right"></i> </a></td>
                  </tr>
                  <tr>
                      <td>10</td>
                      <td>Izin Penggalian Ruang Milik Jalan (RUMIJA)</td>
                      <td><a href="detailperizinan/rumija" type="button" class=" text-center btn-sm btn-info">Pelajari</a></td>
                      <td><a href="isiform/rumija" type="button" class=" text-center btn-sm btn-primary">Isi Sekarang <i class="fa fa-angle-right"></i> </a></td>
                  </tr>
                  </tbody>
              </table>
      	  </div><! --/content-panel -->
      </div><!-- /col-md-12 -->
@endsection
