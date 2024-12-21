<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tagihan Anda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .email-header h1 {
            font-size: 24px;
            color: #2c3e50;
        }

        .invoice-details {
            margin-bottom: 20px;
        }

        .invoice-details table {
            width: 100%;
            border-collapse: collapse;
        }

        .invoice-details th,
        .invoice-details td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .invoice-details th {
            background-color: #f8f8f8;
            color: #2c3e50;
        }

        .total {
            font-size: 18px;
            font-weight: bold;
            color: #e74c3c;
            margin-top: 20px;
        }

        .payment-button {
            display: block;
            width: 200px;
            margin: 20px auto;
            padding: 15px;
            background-color: #3498db;
            color: #fff;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .payment-button:hover {
            background-color: #2980b9;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            color: #777;
            margin-top: 30px;
        }

        .footer a {
            color: #3498db;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <h1>Tagihan Anda</h1>
            <p>Terima kasih telah berbisnis dengan kami!</p>
        </div>

        <!-- Invoice Details -->
        <div class="invoice-details">
            <table>
                <tr>
                    <th>Nomor Tagihan</th>
                    <td>#12345</td>
                </tr>
                <tr>
                    <th>Tagihan</th>
                    <td>Retribusi</td>
                </tr>
                <tr>
                    <th>Nama Pedagangs</th>
                    <td>{{$user->name}}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{$user->alamat}}</td>
                </tr>
                <tr>
                    <th>Jatuh Tempo</th>
                    <td>{{$invoice->created_at}}</td>
                </tr>
            </table>
        </div>

        <!-- Total Amount -->
        <div class="total">
            <p>Total Tagihan: <strong>Rp. {{ number_format($invoice->amount, 0, ',', '.')}}</strong></p>
        </div>

        <!-- Payment Button -->
        <a href="{{route('transaction.show', $invoice->id)}}" class="payment-button">
            Bayar Sekarang
        </a>

        <!-- Footer -->
        <div class="footer">
            <p>Jika Anda memiliki pertanyaan, silakan hubungi kami di <a href="mailto:support@example.com">pasarkuok@gmail.com</a>.</p>
            <p>&copy; 2024 Pasar Kuok</p>
        </div>
    </div>

</body>
</html>
