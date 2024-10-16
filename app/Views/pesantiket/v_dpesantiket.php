<?= $this->extend('layout/pengguna/p_template'); ?>
<?= $this->section('isi'); ?>
<!-- partial -->
<div class="row">
  <div class="col-md-10 offset-1">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Pemesanan Tiket Kapal</h4>
        <form action="<?= base_url(); ?>/Pesantiket/simpan_pemesanan" method="POST">
          <div>
            <h3>Data Diri</h3>
            <section>
              <h3>Masukkan Data Diri Anda</h3>
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nm_pemesan" placeholder="Masukkan Nama" required>
              </div>
              <div class="form-group">
                <label class="col-sm-6 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-3">
                  <div class="form-check form-check-secondary">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="jk" id="membershipRadios1" value="Laki-Laki" checked>
                      Laki-Laki
                    </label>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-check form-check-secondary">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="jk" id="membershipRadios2" value="Perempuan">
                      Perempuan
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" required>
              </div>
              <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir" required>
              </div>
              <div class="form-group">
                <label>NIK</label>
                <input type="number" class="form-control" name="nik" placeholder="Masukkan NIK Anda" required>
              </div>
              <div class="form-group">
                <label>No Hp</label>
                <input type="number" class="form-control" name="nohp" placeholder="Masukkan Nomor Handphone" required>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat" rows="5  placeholder=" Masukkan Alamat Anda" required></textarea>
              </div>
            </section>

            <h3>Jenis Kendaraan</h3>
            <section>
              <h3>A. Penumpang</h3>
              <div class="form-group">
                <div class="col-xs-4">
                  <label for="ex1">Dewasa</label>
                  <input type="number" class="form-control" id="dewasa" name="dewasa" onkeyup="harga();" min="0">
                </div>
              </div>
              <div class="form-group">
                <label>Bayi</label>
                <input type="number" class="form-control" id="bayi" name="bayi" onkeyup="harga();" min="0">
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3>B. Kendaraan</h3>
                  <div class="form-group">
                    <label>Pilih Jenis Kendaraan</label>
                    <select name="kendaraan" class="form-control" id="gol" onchange="harga(this.value)" required>
                      <option>-Pilih Jenis Kendaraan-</option>
                      <option value="Golongan I">Golongan I</option>
                      <option value="Golongan II">Golongan II</option>
                      <option value="Golongan III">Golongan III</option>
                      <option value="Golongan IV">Golongan IV</option>
                      <!-- <option value="Golongan IV">Golongan IV</option> -->
                      <option value="Golongan V">Golongan V</option>
                      <!-- <option value="Golongan V">Golongan V</option> -->
                      <option value="Golongan VI">Golongan VI</option>
                      <!-- <option value="Golongan VI">Golongan VI</option> -->
                      <option value="Golongan VII">Golongan VII</option>
                      <option value="Golongan VIII">Golongan VIII</option>
                      <option value="Golongan IX">Golongan IX</option>
                    </select>
                    <small id="keterangan" class="form-text text-muted"></small>
                  </div>
                  <div class="form-group" id="jenis">
                    <small id="keterangan2" class="form-text text-muted"></small>
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="biaya" id="biaya">
                  </div>
                  <h3>Total Bayar : <span id="bayar"></span></h3>
                </div>
                <div class="col-md-6">
                  <h3>Keterangan : </h3>
                  <ol type="A">
                    <strong>
                      <li>Penumpang</li>
                    </strong>
                    <ol>
                      <li>-Dewasa <strong>Rp166.208</strong>/orang </li>
                      <li>-Bayi <strong>Rp113.418</strong>/orang </li>
                    </ol>
                    <strong>
                      <li>Kendaraan</li>
                    </strong>
                    <ol>
                      <li>Golongan I  <strong>64.090</strong>/unit</li>
                      <li>Golongan II <strong>Rp173.435</strong>/unit </li>
                      <li>Golongan III  <strong>Rp184.810</strong>/unit </li>
                      <li>Golongan IV
                        <ol type="a">
                          <li>Kendaraan Penumpang  <strong>Rp906.779</strong>/unit </li>
                          <li>Kendaraan Barang  <strong>Rp892.995</strong>/unit </li>
                        </ol>
                      </li>
                      <li>Golongan V <strong></strong>
                        <ol type="a">
                          <li>Kendaraan Penumpang <strong>Rp1.124.720</strong>/unit </li>
                          <li>Kendaraan Barang  <strong>Rp1.400.200</strong>/unit </li>
                        </ol>
                      </li>
                      <li>Golongan VI <strong></strong>
                        <ol type="a">
                          <li>Kendaraan Penumpang <strong>Rp1.639.795</strong>/unit </li>
                          <li>Kendaraan Barang <strong>Rp1.637.255</strong>/unit </li>
                        </ol>
                      </li>
                      <li>Golongan VII <strong>2.304.555</strong>/unit </li>
                      <li>Golongan VIII  <strong>Rp2.622.895</strong>/unit </li>
                      <li>Golongan IX (<strong>Rp7.276.095</strong>/unit) </li>
                    </ol>
                  </ol>
                </div>
              </div>
            </section>

            <h3>Pembayaran</h3>
            <section>
              <h3>Pilih Metode Pembayaran</h3>
              <!-- <div class="form-group">
                          <label>Comments</label>
                          <textarea class="form-control" rows="3"></textarea>
                        </div> -->
              <div class="form-group">
                <label>Pembayaran</label>
                <select name="pembayaran" class="form-control">
                  <option>-Pilih Pembayaran-</option>
                  <?php foreach ($dtiket as $d) { ?>
                    <option value="<?= $d->id_pembayaran ?>"><?= $d->bank; ?></option>
                  <?php } ?>
                </select>
              </div>

            </section>

            <!-- <h3>Finish</h3>
                      <section>
                        <h3>Finish</h3>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox">
                            I agree with the Terms and Conditions.
                          </label>
                        </div>
                      </section> -->

          </div>
          <button type="submit" class="btn btn-primary float-right">Pesan Tiket</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- content-wrapper ends -->
<!-- partial:../../partials/_footer.html -->
<?= $this->endSection(); ?>