<x-layout>
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Daftar Toko</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Toko</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Daftar Toko</li>
                </ol>
            </div>

        </div>
        <!-- PAGE-HEADER END -->

        <!-- Row -->
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Toko</h3>
                    </div>
                    <div class="card-body">

                        <a href="{{ route('toko.create') }}" class="btn btn-primary mb-4"> Tambah Toko Baru</a>
                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0">No</th>
                                        <th class="wd-15p border-bottom-0">Kode Toko</th>
                                        <th class="wd-15p border-bottom-0">Biaya Restetusi</th>
                                        <th class="wd-20p border-bottom-0">Luas</th>
                                        <th class="wd-15p border-bottom-0">Deskripsi</th>
                                        <th class="wd-10p border-bottom-0">Foto</th>
                                        <th class="wd-25p border-bottom-0">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($toko as $item)
                                        <tr>
                                            <td>1</td>
                                            <td>{{ $item->kode_toko }}</td>
                                            <td>{{ $item->biaya_restetusi }}</td>
                                            <td>{{ $item->luas }}</td>
                                            <td>{{ $item->deskripsi }}</td>
                                            <td> <img src="{{ asset($item->foto) }}" alt="Foto Toko" width="200">
                                            </td>
                                            <td name="bstable-actions">
                                                <div class="btn-list">
                                                    <a href="{{ route('toko.edit', $item->id) }}"
                                                        class="btn btn-sm btn-primary">
                                                        <span class="fe fe-edit"> </span>
                                                    </a>
                                                    <button id="bDel" type="button"
                                                        class="btn  btn-sm btn-danger">
                                                        <span class="fe fe-trash-2"> </span>
                                                    </button>

                                                </div>
                                            </td>
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
