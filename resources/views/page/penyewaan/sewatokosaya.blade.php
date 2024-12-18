<x-layout>
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Toko / Tempat Dagangan Saya</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Toko</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Toko / Tempat Dagangan Saya</li>
                </ol>
            </div>

        </div>
        <!-- PAGE-HEADER END -->

        <!-- Row -->
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Toko / Tempat Dagangan Saya</h3>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0">No</th>
                                        <th class="wd-10p border-bottom-0">Foto</th>
                                        <th class="wd-15p border-bottom-0">Kode Toko</th>
                                        <th class="wd-15p border-bottom-0">Biaya Restetusi</th>
                                        <th class="wd-20p border-bottom-0">Luas</th>
                                        <th class="wd-15p border-bottom-0">Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($user->tokos as $toko)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td> <img src="{{ asset($toko->foto) }}" alt="Foto Toko" width="200">
                                            </td>
                                            <td>{{ $toko->kode_toko }}</td>
                                            <td>Rp. {{ $toko->biaya_restetusi }}</td>
                                            <td>{{ $toko->luas }}</td>
                                            <td>{{ $toko->deskripsi }}</td>

                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->


        <!-- End Row -->
    </div>
</x-layout>
