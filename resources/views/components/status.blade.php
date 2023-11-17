@if ( session('status')=='store')
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasi Simpan!</strong> Data telah Berhasil disimpan.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if ( session('status')=='update')
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasi Update!</strong> Data telah Berhasil diubah.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if ( session('status')=='destroy')
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasi Hapus!</strong> Data telah Berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif