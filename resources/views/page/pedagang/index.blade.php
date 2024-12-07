<x-layout>
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Daftar Pedagang</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Pedagang</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Daftar Pedagang</li>
                </ol>
            </div>

        </div>
        <!-- PAGE-HEADER END -->

        <!-- Row -->
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Pedagang</h3>
                    </div>
                    <div class="card-body">

                        <a href="{{route('pedagang.create')}}" class="btn btn-primary mb-4"> Tambah Pedagang Baru</a>
                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0">No</th>
                                        <th class="wd-15p border-bottom-0">Nama Pedangang</th>
                                        <th class="wd-20p border-bottom-0">Email</th>
                                        <th class="wd-15p border-bottom-0">NIK</th>
                                        <th class="wd-10p border-bottom-0">No Telepon</th>
                                        <th class="wd-10p border-bottom-0">Alamat</th>
                                        <th class="wd-10p border-bottom-0">Jenis Dagangan</th>
                                        <th class="wd-10p border-bottom-0">Tgl Terdaftar</th>
                                        <th class="wd-25p border-bottom-0">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($pedagang as $item)
                                    <tr>
                                        <td>1</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->nik}}</td>
                                        <td>{{$item->no_hp}}</td>
                                        <td>{{$item->alamat}}</td>
                                        <td>{{$item->jenis_dagangan}}</td>
                                        <td>{{$item->created_at}}</td>
                                       
                                        <td name="bstable-actions"><div class="btn-list">
                                            <a href="{{route('pedagang.edit', $item->id)}}" class="btn btn-sm btn-primary" >
                                                <span class="fe fe-edit"> </span>
                                            </a>
                                            <button id="bDel" type="button" class="btn  btn-sm btn-danger" >
                                                <span class="fe fe-trash-2"> </span>
                                            </button>
                                           
                                        </div></td>
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
