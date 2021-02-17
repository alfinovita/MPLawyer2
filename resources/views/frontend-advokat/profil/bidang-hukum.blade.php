@extends('frontend-advokat.layouts.app-putih')

@section('css')
@endsection

@section('content')
<section class="ftco-section ">
    <div class="container">
        <div class="row justify-content-center my-4">
            <div class="col-md-10 text-center ftco-animate">
                <h2 class="pb-3 font-weight-bold">Bidang Hukum</h2>
            </div>
        </div>
        <div class="row justify-content-center pb-3 mx-3 ftco-animate">
            <div class="p-3 " style="max-width: auto;">
                <div class="row  card-body py-0">
                    <div class="col-lg col-md mx-auto my-auto">
                        <div class="row justify-content-center">
                            <img src="{{url('public/plugins/fronted-advokat')}}/images/img/probono/img_pro_bono.jpg" class="rounded img-fluid" style="height: 10rem; width: 10rem;" alt="...">
                        </div>
                    </div>
                    <div class="col-md-9 col-lg-10 pl-0">
                        <div class="card-body  mx-2">
                            <h5 class="font-weight-bold m-0">Probono</h5>
                            <p class="text-dark ">Pelayanan ini diberikan untuk kepentingan umum atau hanya untuk pihak yang tidak mampu secara finansial untuk membayar jasa pengacara tanpa dipungut biaya atau secara cuma cuma</p>
                            <div class="btn btn-info my-auto" data-toggle="modal" data-target="#modal-probono">Gabung Ke Probono</div>
                        </div>
                    </div>
                </div>
            </div>
     
            @foreach ($data as $d)
            <div class="card p-3 my-2 mx-4 mb-5 rounded" style="max-width: auto;">
                <div class="row no-gutters">
                    <div class="row justify-content-around card-body py-0">
                        <div class="col mx-auto my-auto pr-0">
                            <div class="row justify-content-center">
                                <img src="{{asset($d['gambar'])}}" class="rounded img-fluid" style="height: 5rem; width: 5rem;" alt="...">
                            </div>
                        </div>
                        <div class="col-md-8 pl-0">
                            <div class="card-body pb-0 mx-2">
                                <h5 class="card-title mb-0 font-weight-bold">{{$d['nama']}}</h5>
                                <p class="text-danger">@foreach ($d['lawyerPrice'] as $item)
                                    {{$item->harga }}
                                @endforeach</p>
                            </div>
                        </div>
                        <div class="col-md-3 my-auto ">
                        <div class="btn btn-primary  justify-content-end " data-toggle="modal" data-target="#modal-bidanghukum-{{$d['id']}}" style="float: right;">Edit</div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
@endsection


@section('modal')
    <!-- Modal probono masuk -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modal-probono">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAppointment">Probono</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center mx-2">
                        <img src="{{url('public/plugins/fronted-advokat')}}/images/img/probono/img_pro_bono.jpg" class="rounded img-fluid" style="height: 10rem; width: 10rem;" alt="...">
                        <h5 class="text-center pt-5 py-2 m-0 font-weight-bold"> Apakah Anda Ingin Dimasukan Ke dalam List ProBono ?</h5>
                        <small class="text-muted mb-3"> Layanan ini mempunya 2 cara live dan Tatap Muka</small>
                    </div>
                    <div class="row mt-3 mx-3">
                        <div class="col-sm mb-2">
                            <button type="button" class="btn btn-outline-danger btn-block" data-dismiss="modal">batal</button>
                        </div>
                        <div class="col-sm mb-2">
                            <a href="bidanghukum-keluar.html"> <button type="button" class="btn btn-primary btn-block">Oke</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal  1-->
    @foreach ($data as $m)
    <div class="modal fade" id="modal-bidanghukum-{{$m['id']}}" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAppointmentLabel">Edit Bidang Hukum</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
                </div>
                <div class="modal-body m-2">
                    <div class="row px-3 mb-3">
                        <img src="{{asset($m['gambar'])}}" class="rounded img-fluid" style="height: 7rem; width: 7rem;" alt="...">
                        <h5 class="font-weight-bold  my-auto mx-3">{{$m['nama']}}</h5>
                    </div>
                    <form action="#">
                        @foreach ($m['lawyerPrice'] as $item)
                        <div class="form-group">
                            <label for="appointment_email" class="text-black">Harga Layanan</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input type="text" class="form-control" value=" {{$item->harga }}" id="inlineFormInputGroup">
                              
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="appointment_email" class="text-black">Deskripsi Layanan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" vale rows="3"> {{$item->deskripsi }}</textarea>
                        </div>
                        @endforeach
                        <div class="form-group pt-3">
                            <button type="button" class="btn btn-primary btn-block btn-lg font-weight-bold">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection


@section('js')
<script>
    $('#btn-update').on("click", function () {
        var queryString = $('#form-update-profil').serialize();
        $.ajax(`/lawyer/advokat/edit_bidanghukum?${queryString}`, {
            method: 'GET',
            success: function (e) {
                console.log(e);
                $('input[name="nama_lengkap"]').val(e.nama_lengkap)
                $('input[name="alamat"]').val(e.alamat)


                $("#h5-nama_lengkap").html(e.nama_lengkap)
                $("#p-email").html(e.email)
               

                $("#modal-edit-profil").modal("toggle")
                alert("Profil Anda Telah Diperbaruhi!");

            }
        });
    });
</script>
@endsection