<!-- Views/pesantiket/v_cetaktiket.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/css/vertical-layout-light/style.css">
    <title>Cetak Tiket</title>
    <style>
        .card {
            margin-top: 4rem;
        }

        .card-header {
            text-align: center;
        }

        .card-body {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .data-container {
            width: 60%;
        }

        .image-container {
            width: 40%;
            text-align: center;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    <h3>Tiket Kapal</h3>
                </div>
                <div class="card-body">
                    <div class="data-container">
                        <table>
                            <tr>
                                <th>No Pemesanan</th>
                                <td>: <?= $data->id_pemesanan; ?></td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>: <?= $data->nm_pemesan; ?></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>: <?= $data->alamat; ?></td>
                            </tr>
                            <tr>
                                <th>Tanggal Pembelian Tiket</th>
                                <td>: <?= $data->tgl_pemesanan; ?></td>
                            </tr>
                            <tr>
                                <th>Status Pembayaran</th>
                                <td>: Lunas</td>
                            </tr>
                            <tr>
                                <th>Total Pembayaran</th>
                                <td>: Rp.<?= $data->total_pembayaran; ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="image-container">
                        <img src="<?= base_url('uploads/qrcodes/'.$data->id_pemesanan.'.png'); ?>" alt="QR Code">
                    </div>
                </div>
                <p class="text-center">"Semoga perjalanan anda menyenangkan"</p>
            </div>
        </div>
    </div>
    <script>
        print();
        onafterprint = back;

        function back() {
            location = "<?= base_url('/Pesantiket/riwayat'); ?>";
        }
    </script>
</body>

</html>
