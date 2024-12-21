
<!DOCTYPE html>
<html>
<head>
    <title>Tagihan Anda</title>
</head>
<body>
    <h1>Tagihan Bulanan</h1>
    <p>Halo, {{ $user->name }}</p>
    <p>Tagihan Anda adalah sebesar <strong>{{ $invoice->amount }}</strong>.</p>
    <p>Silakan lakukan pembayaran sebelum jatuh tempo.</p>
</body>
</html>
