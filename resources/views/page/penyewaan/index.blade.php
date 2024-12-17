<x-layout>
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Sewa Tempat</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Toko</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sewa Tempat</li>
                </ol>
            </div>

        </div>
        <!-- PAGE-HEADER END -->

        <!-- Row -->
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Sewa Tempat</h3>
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

                                        <th class="wd-25p border-bottom-0">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($toko as $item)
                                        <tr>
                                            <td>{{$loop->iteration }}</td>
                                            <td> <img src="{{ asset($item->foto) }}" alt="Foto Toko" width="200">
                                            </td>
                                            <td>{{ $item->kode_toko }}</td>
                                            <td>Rp. {{ $item->biaya_restetusi }}</td>
                                            <td>{{ $item->luas }}</td>
                                            <td>{{ $item->deskripsi }}</td>
                                            <td name="bstable-actions">
                                                <div class="btn-list">
                                                    <a href="{{ route('sewatempat.show', $item->id) }}"
                                                        class="btn btn-sm btn-primary">
                                                        Sewa
                                                    </a>


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
