<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data Event &mdash; SEMS</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
          <div class="section-header">
            <h1>Event Management</h1>
            <div class="section-header-button">
                <a href="<?=site_url('gawe/add')?>" class="btn btn-primary">Add New</a>
            </div>
          </div>

          <?php if(session()->getFlashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close"data-dismiss="alert">x</button>
                    <b>Success!</b>
                    <?=session()->getFlashdata('success')?>
                </div>
            </div>
          <?php endif; ?>
          <?php if(session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close"data-dismiss="alert">x</button>
                    <b>Error!</b>
                    <?=session()->getFlashdata('error')?>
                </div>
            </div>
          <?php endif; ?>

          <div class="section-body">
          <div class="card">
            </div>
            <div class="card-header">
                <h6>Data Event / Acara</h6>
            </div>
          <div class="card-body table-responsive">
                      <table class="table table-striped table-md">
                        <tbody><tr>
                          <th>No</th>
                          <th>Nama Event</th>
                          <th>Tanggal Event</th>
                          <th>Info</th>
                          <th>Action</th>
                        </tr>
                        <?php foreach ($gawe as $key =>$value) : ?>
                        <tr>
                          <td><?=$key + 1?></td>
                          <td><?=$value->name_sems ?></td>
                          <td><?=date('d/m/Y', strtotime($value->date_sems)) ?></td>
                          <td><?=$value->info_sems ?></td>
                          <td class="text-center" style="width:10%" >
                              <a href="<?=site_url('gawe/edit/'.$value->id_sems)?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                              <form action="<?=site_url('gawe/'.$value->id_sems)?>" method="post" class="d-inline" onsubmit="return confirm('Yakin akan dihapus?')">
                              <?= csrf_field() ?>
                              <input type="hidden" name="_method" value="DELETE">
                              <button class="btn btn-danger btn-sm">
                              <i class="fas fa-trash"></i>
                              </button>
                              </form>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody></table>
                    </div>
                    </div>
        </div>
        </section>
<?= $this->endSection() ?>
