<x-layout>

    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Edit Toko</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Toko</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Toko</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->



        <!--Row -->
        <div class="row">
            <div class="col-md-12 col-xl-112">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Toko</h3>
                    </div>
                    <div class="card-body">
                        <form class="row" method="POST" action="{{ route('toko.update', $toko->id) }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control @error('kode_toko') is-invalid @enderror"
                                            name="kode_toko" id="kodetoko" placeholder="Kode Toko" value="{{$toko->kode_toko}}">
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
                                            class="form-control @error('luas') is-invalid @enderror" name="luas"
                                            id="luas" placeholder="Luas Toko" value="{{$toko->luas}}">
                                        @error('luas')
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
                                            name="deskripsi" id="deskripsi" placeholder="Deskripsi" value="{{$toko->deskripsi}}">
                                        @error('deskripsi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-12 mb-0">
                                    <div class="form-group d-flex align-items-center">
                                        <!-- Foto yang sudah diunggah -->
                                        <div class="mr-5">
                                            @if($toko->foto)
                                                <img src="{{ asset($toko->foto) }}" alt="Foto Toko" style="width: 100px; height: 100px; object-fit: cover;">
                                            @else
                                                <img src="{{ asset('img/default.jpg') }}" alt="Default Foto" style="width: 100px; height: 100px; object-fit: cover;">
                                            @endif
                                        </div>
                                
                                        <!-- Input untuk mengganti foto -->
                                        <div>
                                            <input class="form-control @error('foto') is-invalid @enderror" name="foto" type="file">
                                            @error('foto')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-footer mt-2">
                                <button type="submit" class="btn btn-primary">Simpan</button>
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
