<?php
$tempatWisata = array("Toba Lake", "Raja Ampat", "Bromo Mountain", "Telaga Warna", "Karimun Jawa", "Bali", "Penida Island", "Gili Terawangan");
$daftarHargaTiketWisata = array("Toba Lake" => 1000000, "Raja Ampat" => 1000000, "Bromo Mountain" => 1000000, "Telaga Warna" => 1000000, "Karimun Jawa" => 1000000, "Bali" => 1000000, "Penida Island" => 1000000, "Gili Terawangan" => 1000000);

function totalBayar($hargaTempatWisata, $pengunjungDewasa, $pengunjungAnak)
{
    global $daftarHargaTiketWisata;                                                 //Variabel Global

    $hargaTempatWisata == $daftarHargaTiketWisata;

    return ($pengunjungDewasa * $hargaTempatWisata + $pengunjungAnak * ($hargaTempatWisata / 2));
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>
</style>

<body>

    <main>

        <div class="container">
            <h3 style="margin-top: 25px;" class="pb-2 border-bottom">Form Pemesanan</h3>
            <div class="row">
                <div class="col-8">
                    <!-- Form Pemesanan Tiket Wisata -->
                    <form method="post" action="pesanTiket.php">
                        <div class="mb-3 row">
                            <label for="inputNama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="inputNama" placeholder="Nama Lengkap"
                                    name=namaLengkap>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputIdentitas" class="col-sm-2 col-form-label">Nomor Identitas</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="inputIdentitas"
                                    placeholder="Nomor Identitas" name=nomorIdentitas minlength="16" maxlength="16">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputNoHp" class="col-sm-2 col-form-label">No. HP</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="inputNoHp" placeholder="No Hp" name=noHp
                                    minlength="11" maxlength="12">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputWisata" class="col-sm-2 col-form-label">Tempat Wisata</label>
                            <div class="col-sm-5">
                                <select id="inputWisata" class="form-select" placeholder="Tempat Wisata" name="wisata">
                                    <!-- Perulangan untuk menampilkan Tempat Wisata -->
                                    <?php
                                    foreach ($tempatWisata as $tw) {
                                        echo "<option value='" . $tw . "'>" . $tw . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputTanggal" class="col-sm-2 col-form-label">Tanggal Kunjungan</label>
                            <div class="col-sm-5">
                                <input type="date" data-date-format="DD/MM/YYY" class="form-control" id="inputTanggal"
                                    placeholder="Tanggal Kunjungan" name=tanggal required autofocus>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPengunjungDewasa" class="col-sm-2 col-form-label">Pengunjung Dewasa</label>
                            <div class="col-sm-5">
                                <input type="number" class="form-control" id="inputPengunjungDewasa"
                                    placeholder="Pengunjung Dewasa" name=jumlahDewasa>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPengunjungAnak" class="col-sm-2 col-form-label">Pengunjung
                                Anak-anak</label>
                            <div class="col-sm-5">
                                <input type="number" class="form-control" id="inputPengunjungAnak"
                                    placeholder="Pengunjung Anak-anak" name=jumlahAnakAnak>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="hargaTiket" class="col-sm-2 col-form-label">Harga Tiket</label>
                            <div class="col-sm-5">
                                <input type="text" readonly class="form-control-plaintext" id="hargaTiket"
                                    name="hargaTiket" value="Rp. 1000000">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="totalBayar" class="col-sm-2 col-form-label">Total Bayar</label>
                            <div class="col-sm-5">
                                <input type="text" readonly class="form-control-plaintext" id="totalBayar"
                                    name="totalBayar" value="Rp. ">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="agree" name="agree">
                                    <label class="form-check-label" for="gridCheck">
                                        Saya telah membaca semua persyaratan diatas dan menyetujui semua persyaratan
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="Button" class="btn btn-primary" name="hitungTotalBayar"
                            id="hitungTotalBayar">Hitung Total Bayar</button>
                        <button type="submit" class="btn btn-primary" name="pesanTiket" id="pesanTiket">Pesan
                            Tiket</button>
                        <button type="reset" class="btn btn-danger" name="cancel">Cancel</button>
                        <div class="mb-3 row"></div>
                    </form>
                </div>

                <?php
                if (isset($_POST["pesanTiket"])) {
                    $namaPemesan = $_POST["namaLengkap"];
                    $noIdentitasPemesan = $_POST["nomorIdentitas"];
                    $nomorHp = $_POST["noHp"];
                    $namaTempatWisata = $_POST["wisata"];
                    $pengunjungDewasa = $_POST["jumlahDewasa"];
                    $pengunjungAnakAnak = $_POST["jumlahAnakAnak"];
                    $hargaWisata = 1000000;
                    $totalHargaTiket = totalBayar($hargaWisata, $pengunjungDewasa, $pengunjungAnakAnak);

                    $dataPesanan = [$namaPemesan, $noIdentitasPemesan, $nomorHp, $namaTempatWisata, $pengunjungDewasa, $pengunjungAnakAnak, $totalHargaTiket];          //Menampung inputan User kedalam Array
                }
                ?>

                <div class="col-4">
                    <ul style="list-style-type: none;">
                        <?php
                        if (isset($_POST["pesanTiket"])) {
                            echo '<div class="bg-warning p-2 text-dark bg-opacity-10 border">';
                            echo '<h5><center>Tiket Wisata<center></h5>';
                            echo '<li>Nama Pemesan          : ' .    $namaPemesan . '</li>';
                            echo '<li>No HP                 : ' .    $nomorHp . '</li>';
                            echo '<li>No Identitas          : ' .    $noIdentitasPemesan . '</li>';
                            echo '<li>Tempat Wisata         : ' .    $namaTempatWisata . '</li>';
                            echo '<li>Pengunjung Dewasa     : ' .    $pengunjungDewasa . '</li>';
                            echo '<li>Pengunjung Anak-anak  : ' .    $pengunjungAnakAnak . '</li>';
                            echo '<li>Harga Tiket           : Rp. ' .    $hargaWisata . '</li>';
                            echo '<li>Total Bayar           : Rp. ' .    $totalHargaTiket . '</li>';
                            echo '</div>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
</script>

<script type="text/javascript">
let hitungTotalBayar = document.getElementById("hitungTotalBayar");
hitungTotalBayar.addEventListener("click", function() {
    let pengunjungDewasa = parseInt(document.getElementById("inputPengunjungDewasa")
        .value);
    let pengunjungAnak = parseInt(document.getElementById("inputPengunjungAnak")
        .value);
    document.getElementById("totalBayar").value = "Rp. " + (pengunjungDewasa * 1000000 + pengunjungAnak * (
        1000000 /
        2));
});
</script>

</html>