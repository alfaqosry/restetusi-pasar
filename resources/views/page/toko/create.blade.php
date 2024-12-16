<x-layout>

    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Tambah Toko</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Toko</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Toko</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->



        <!--Row -->
        <div class="row">
            <div class="col-md-12 col-xl-112">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Toko</h3>
                    </div>
                    <div class="card-body">
                        <form class="row" method="POST" action="{{ route('toko.store') }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control @error('kode_toko') is-invalid @enderror"
                                            name="kode_toko" id="kodetoko" placeholder="Kode Toko">
                                        @error('kode_toko')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control @error('biaya_restetusi') is-invalid @enderror"
                                            name="biaya_restetusi" id="kodetoko" placeholder="Biaya restetusi">
                                        @error('biaya_restetusi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                               
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('luas') is-invalid @enderror"
                                            name="luas" id="luas" placeholder="Luas Toko">
                                        @error('luas')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                               
                                <div class="form-group col-md-6 mb-0">
                                    <div class="form-group">
                                        <input class="form-control @error('foto') is-invalid @enderror" name="foto"
                                            type="file">
                                        @error('foto')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>


                            <div class="form-row">
                               
                                <div class="form-group col-md-12 mb-0">
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control @error('deskripsi') is-invalid @enderror"
                                            name="deskripsi" id="deskripsi" placeholder="Deskripsi">
                                        @error('deskripsi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                              

                            </div>

                            <div class="form-footer mt-2">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>


        </div>

    </div>
    <!--End Row-->


    </div>
</x-layout>
