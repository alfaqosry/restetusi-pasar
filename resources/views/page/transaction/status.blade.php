<x-layout>
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Status</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Transaksi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Status</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW-1 OPEN -->
        <div class="row">

            <!-- COL END -->
            <div class="col-xl-12 col-sm-12">
                <div class="card border p-0 pb-3">
                    <div class="card-header border-0 pt-3">
                        <div class="card-options">
                            <a href="javascript:void(0)" class="card-options-remove" data-bs-toggle="card-remove"><i
                                    class="fe fe-x"></i></a>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="60" width="60"
                                viewBox="0 0 24 24">
                                <path fill="#13bfa6"
                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                    opacity=".99"></path>
                                <path fill="#71d8c9"
                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z">
                                </path>
                            </svg></span>
                        <h4 class="h4 mb-0 mt-3">Success</h4>
                        <p class="card-text">Pembayaran Berhasil</p>
                    </div>
                    <div class="card-footer text-center border-0 pt-0">
                        <div class="row">
                            <div class="text-center">
                                <a href="javascript:void(0)" class="btn btn-success">Close</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- COL END -->
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="card productdesc">
                        <div class="card-body">
                            <h4>Detail Pembayaran</h4>
                            <div class="panel panel-primary">
                               
                                <div class="panel-body tabs-menu-body">



                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td class="fw-bold">Kode Toko</td>
                                                    <td>{{$transaction->toko->kode_toko}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-bold">Luas</td>
                                                    <td>{{$transaction->toko->luas}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-bold">Biaya</td>
                                                    <td ><b class="text-primary text-bold"> Rp. {{$transaction->price}} </b></td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-bold">Type Pembayaran</td>
                                                    <td> BRI</td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-layout>
