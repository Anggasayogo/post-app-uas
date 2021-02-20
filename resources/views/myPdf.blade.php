<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <style>
        .invoice-head td {
            padding: 0 8px;
        }

        .container {
            padding-top: 30px;
        }

        .invoice-body {
            background-color: transparent;
        }

        .invoice-thank {
            margin-top: 60px;
            padding: 5px;
        }

        address {
            margin-top: 15px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="span4">
                <address>
                    <strong>Webivorous Web services Adminmart. Ltd.</strong><br>
                    jl.raya tigaraksa<br>
                    Directure, AnggaMaulana-089651884809 (ID)
                </address>
            </div>
            <div class="span4 well">
                <table class="invoice-head">
                    <tbody>
                        <tr>
                            <td class="pull-right"><strong>Customer #</strong></td>
                            <td>{{ $row->nama_pelanggan }}</td>
                        </tr>
                        <tr>
                            <td class="pull-right"><strong>Invoice #</strong></td>
                            <td>{{ $row->nama_transaksi }}</td>
                        </tr>
                        <tr>
                            <td class="pull-right"><strong>Date</strong></td>
                            <td>{{ $row->tgl_transaksi }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="span8">
                <h2>Invoice</h2>
            </div>
        </div>
        <div class="row">
            <div class="span8 well invoice-body">
                <table class="table table-bordered" border="1">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Disc</th>
                            <th>Quantity</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $row->nama_barang }}</td>
                            <td>{{ $row->diskon }}%</td>
                            <td>{{ $row->qty }}</td>
                            <td>Rp,{{ number_format($row->harga_barang) }}</td>
                        </tr>
                        <tr>
                            <td colspan="4"></td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                            <td><strong>Total</strong></td>
                            <td><strong>Rp,{{ number_format($row->harga) }}</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="span8 well invoice-thank">
                <h5 style="text-align:center;">Thank You!</h5>
            </div>
        </div>
        <div class="row">
            <div class="span3">
                <strong>Phone:</strong>+62 89651884809
            </div>
            <div class="span3">
                <strong>Email:</strong> <a href="web@webivorous.com">customer@adminmart.com</a>
            </div>
            <div class="span3">
                <strong>Website:</strong> <a href="">http://adminmart.com</a>
            </div>
        </div>
    </div>
</body>

</html>