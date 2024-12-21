<x-layout>
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Checkout</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">E-Commerce</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW-1 OPEN -->
        <div class="row">

            <div class="col-xl-12 col-md-12">
                <div class="card cart">
                    <div class="card-header">
                        <h3 class="card-title">Pedagang</h3>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <h4 class="fw-semibold">{{ $tagihan->user->name }}</h4>
                            <p>Email : {{ $tagihan->user->email }}</p>
                            <p>Jenis Dagangan : {{ $tagihan->user->jenis_dagangan }}</p>

                        </div>
                    </div>
                   
                </div>
                <div class="card cart">
                    <div class="card-header">
                        <h3 class="card-title">Total Pembayaran</h3>
                    </div>
                    <div class="card-body">


                        <ul class="list-group border br-7 mt-5">
                            <li class="list-group-item border-0">
                                Sub Total
                                <span class="h6 fw-bold mb-0 float-end">Rp. {{ number_format($tagihan->amount, 0, ',', '.') }}</span>
                            </li>
                            <li class="list-group-item border-0">
                                Discount
                                <span class="h6 fw-bold mb-0 float-end">0%</span>
                            </li>

                            <li class="list-group-item border-0">
                                Total
                                <span class="h4 fw-bold mb-0 float-end">Rp.
                                    {{ number_format($tagihan->amount, 0, ',', '.') }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-end">


                        <button class="btn btn-primary" id="pay-button">Bayar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ROW-1 CLOSED -->
    </div>

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
