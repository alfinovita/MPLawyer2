<!-- Logout Modal-->
<div class="modal fade" id="logout-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Ingin Keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">pilih LOGOUT untuk keluar</div>
        <div class="modal-footer">
          <button class="btn  btn-outline-danger " type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{route('logout-advokat')}}">Logout</a>
        </div>
      </div>
    </div>
</div>

<!-- modal notifikation -->
<div class="modal fade " tabindex="-1 " role="dialog " id="modal-notifikasi">
    <div class="modal-dialog modal-lg" role="document ">
        <div class="modal-content ">
            <div class="modal-header ">
                <h5 class="modal-title " id="modalAppointmentLabel">Notifikasi Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
                <div class="card-text">
                    <div class="alert alert-danger">
                        <div class="d-flex text-danger">
                            <div>Tagihan Pengajuan Somasi Dikirimkan Oleh Advokat Andira Pramanta</div>
                            <div class="ml-auto"><i class="fa fa-bell" style="font-size: 22px"
                                    aria-hidden="true"></i></div>
                        </div>
                    </div>
                    <div class="alert alert-danger">
                        <div class="d-flex text-danger">
                            <div >Tagihan Pengajuan Somasi Dikirimkan Oleh Advokat Andira Pramanta</div>
                            <div class="ml-auto "><i class="fa fa-bell" style="font-size: 22px"
                                    aria-hidden="true"></i></div>
                        </div>
                    </div>
                    <div class="alert alert-danger">
                        <div class="d-flex text-danger">
                            <div >Tagihan Pengajuan Somasi Dikirimkan Oleh Advokat Andira Pramanta</div>
                            <div class="ml-auto"><i class="fa fa-bell" style="font-size: 22px"
                                    aria-hidden="true"></i></div>
                        </div>
                    </div>
                    <div class="alert alert-light" style="background-color: rgb(218, 213, 213);">
                        <div class="d-flex text-dark">
                            <div>Tagihan Pengajuan Somasi Dikirimkan Oleh Advokat Andira Pramanta</div>
                            <div class="ml-auto "><i class="fas fa-bell" style="font-size: 22px" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>