<x-layout>
    <!-- CONTAINER -->
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Detail Toko</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">E-Commerce</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Toko</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW-1 OPEN -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row row-sm">
                            <div class="col-xl-5 col-lg-12 col-md-12">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="product-carousel">
                                            <div id="Slider" class="carousel slide border" data-bs-ride="false">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active"><img
                                                            src="{{ asset($toko->foto) }}" alt="img"
                                                            class="img-fluid mx-auto d-block">
                                                        <div class="text-center mt-5 mb-5 btn-list">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="details col-xl-7 col-lg-12 col-md-12 mt-4 mt-xl-0">
                                <div class="mt-2 mb-4">
                                    <h3 class="mb-3 fw-semibold">{{ $toko->kode_toko }}</h3>

                                    <h4 class="mt-4"><b> Description</b></h4>
                                    <p>{{ $toko->deskripsi }}</p>

                                    <h3 class="mb-4"><span class="me-2 fw-bold fs-25 d-inline-flex">Rp.
                                            {{ number_format($toko->biaya_restetusi, 2, ',', '.') }} </span></span></h3>
                                    {{-- <div class=" mt-4 mb-5"><span class="fw-bold me-2">Offer :</span><span
                                            class="fw-bold text-primary">15% Cashback </span>by using icici bank credit
                                        card.<small class="text-muted">Terms and Conditions Applies!</small></div> --}}

                                </div>

                                <hr>
                                <div class="btn-list mt-4">

                                    <button id="pay-button" class="btn ripple btn-secondary"><i
                                            class="fe fe-credit-card"> </i> Bayar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="card productdesc">
                <div class="card-body">
                    <div class="panel panel-primary">
                        <div class=" tab-menu-heading">
                            <div class="tabs-menu1">
                                <!-- Tabs -->
                                <ul class="nav panel-tabs">
                                    <li><a href="#tab5" class="active" data-bs-toggle="tab">Specifications</a></li>
                                    <li><a href="#tab6" data-bs-toggle="tab">Dimensions</a></li>
                                    <li><a href="#tab7" data-bs-toggle="tab">Features</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body tabs-menu-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab5">
                                    <h4 class="mb-5 mt-3 fw-bold">Description :</h4>
                                    <p class="mb-3 fs-15">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                        blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                        molestias excepturi sint occaecati cupiditate non provident,
                                        similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                                        dolorum fuga.</p>
                                    <p class="mb-3 fs-15">odio dignissimos ducimus qui blanditiis praesentium voluptatum
                                        deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                                        cupiditate non provident, similique sunt in culpa qui officia.
                                    </p>
                                    <h4 class="mb-5 mt-3 fw-bold">Specifications :</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td class="fw-bold">Package Dimensions</td>
                                                <td>33x22x3cm; 450 Grams</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">Manufacturer</td>
                                                <td>Chokka Production</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">Item part number </td>
                                                <td>BNVRDMRHENFULL-Z14</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">Best Sellers Rank</td>
                                                <td> #141 in Clothing & Accessories (See Top 100 in Clothing &
                                                    Accessories)</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">Customer Reviews</td>
                                                <td>
                                                    <p class="text-muted float-start me-3">
                                                        <span class="fa fa-star text-warning"></span>
                                                        <span class="fa fa-star text-warning"></span>
                                                        <span class="fa fa-star text-warning"></span>
                                                        <span class="fa fa-star-half-o text-warning"></span>
                                                        <span class="fa fa-star-o text-warning"></span>
                                                        <span class="text-success fw-semibold">(2,076 ratings)</span>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane pt-5" id="tab6">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td class="fw-bold">Width</td>
                                                <td> 6.1 inch</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">Height</td>
                                                <td>24 inch</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">Depth</td>
                                                <td>6.1 inch</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">Other Dimensions</td>
                                                <td>15.5*15.5*24CM</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab7">
                                    <ul class="p-5">
                                        <li><i class="fa fa-check me-3 text-success mb-5"></i>Asthetic Product - more
                                            lively movies and music</li>
                                        <li><i class="fa fa-check me-3 text-success mb-5"></i>Long lasting 7,040 mAH
                                            battery with fast adaptive charging</li>
                                        <li><i class="fa fa-check me-3 text-success mb-5"></i>8 MP Primary Camera, 5 MP
                                            Front Facing Camera</li>
                                        <li><i class="fa fa-check me-3 text-success mb-5"></i>Seamless apps and gaming
                                            experience with Qualcomm Snapdragon 662 processor (4X2.0 GHz+4X1.8 GHz)</li>
                                        <li><i class="fa fa-check me-3 text-success mb-5"></i>1 year manufacturer
                                            warranty for device and 6 months manufacturer warranty for in-box
                                            accessories</li>
                                        <li><i class="fa fa-check me-3 text-success"></i>Customer care :1234 567 678
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- ROW-1 CLOSED -->
    </div>
    <!-- CONTAINER CLOSED -->


    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function() {

            console.log('tekan')
            // SnapToken acquired from previous step
            snap.pay('{{ $transaction->snap_token }}', {
                // Optional
                onSuccess: function(result) {
                    window.location.href = '{{ route('transaction.success', $transaction->id) }}'

                    // console.log(result)
                },
                // Optional
                onPending: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                },
                // Optional
                onError: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                }
            });
        };
    </script>
</x-layout>
