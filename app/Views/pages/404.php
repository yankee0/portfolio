<?= $this->extend('layouts/html'); ?>
<?= $this->section('title'); ?>
🗿 i'm working on it
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<section class="plan d-flex align-items-center justify-content-center">
  <div class="text-center container p-3 text">
    <p class="display-1" data-aos="zoom-out-down" data-aos-duration="400">🗿</p>
    <p class="">
      <h1 data-aos="fade-up" data-aos-delay="400" data-aos-duration="400">Hum... I'm Working On This Page. Sorry!</h1>
    </p>
    <a data-aos="fade-in" data-aos-delay="800" data-aos-duration="400" href="<?=base_url('')?>">Back to HomePage🚖</a>
  </div>
</section>

<?= $this->endSection(); ?>