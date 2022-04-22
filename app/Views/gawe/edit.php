<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Update Event &mdash; SEMS</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
          <div class="section-header">
          <div class="section-header-back">
                <a href="<?=site_url('gawe')?>" class="btn"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Update Event</h1>
          </div>
          <div class="section-body">
          <div class="card">
            </div>
            <div class="card-header">
                <h6>Edit Event / Acara</h6>
                </div>
                    <div class="card-body col-md-6">
                        <form action="<?=site_url('gawe/'.$gawe->id_sems)?>" method="post" autocomplete="off">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="PUT">
                            <div class="form-group">
                                <label>Nama Event / Acara</label>
                                <input type="text" name="name_sems" value="<?=$gawe->name_sems?>" class="form-control" required autofocus>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Acara</label>
                                <input type="date" name="date_sems" value="<?=$gawe->date_sems?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Info</label>
                                <textarea name="info_sems" class="form-control"><?=$gawe->info_sems?></textarea>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>Save</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        </section>
<?= $this->endSection() ?>
