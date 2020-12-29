<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h2 class="text-secondary">Daftar Surat Masuk</h2>
            <div class="card-header mb-4 d-flex">
              <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalTambahSM">
                <i class="mdi mdi-plus"></i>Tambah Data
              </a>
              <div class="ml-auto">
                <a href="" class="btn btn-sm btn-outline-success">Excel <i class="mdi mdi-file-excel"></i></a>
                <a href="" class="btn btn-sm btn-outline-danger">PDF <i class="mdi mdi-file-pdf-box"></i></a>
              </div>
            </div>
            <div class="table-responsive">
              <table id="table-SM" class="table table-striped text-center">
                <thead>
                  <tr>
                    <th>Kode Arsip</th>
                    <th>Pengirim</th>
                    <th>No. Surat</th>
                    <th>Tanggal Surat</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <td>M1</td>
                  <td>Ippsadasdad</td>
                  <td>01/SU/Xii/1440H</td>
                  <td>28/12/2020</td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-format-list-bulleted"></i></button>
                      <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute;">
                        <a href="<?= base_url('/transaksi-surat/detailSM'); ?>" class="dropdown-item">Detail</a>
                        <a href="" class="dropdown-item">Delete</a>
                      </div>
                    </div>
                  </td>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>

    <!-- Modal -->
    <div class="modal fade" id="modalTambahSM" tabindex="-1" role="dialog" aria-labelledby="modalTambahSMLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Surat Masuk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="form-sample">

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label">Kode Arsip</label>
                      <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label">Tanggal Diterima</label>
                      <input type="date" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="form-label">Pengirim</label>
                      <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label">Tanggal Masuk</label>
                      <input type="date" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label">Nomor Surat</label>
                      <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label">Keterangan</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label">Isi Surat</label>
                    <textarea class="form-control" rows="5"></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label">Upload File</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Pilih File</label>
                    </div>
                    <span class="text-danger" style="font-size: 12px">Format file yang diizinkan .jpg .png .pdf dan ukuran maks 2 MB</span>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            <button type="button" class="btn btn-primary">Tambah</button>
          </div>
        </div>
      </div>
    </div>
    <?= $this->endSection(); ?>