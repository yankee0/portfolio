<?= $this->extend('layouts/html') ;?>
<?= $this->section('title') ;?>
Welcome🥳 (again😂)
<?= $this->endSection() ;?>
<?= $this->section('content') ;?>
<?=view('components/header',['position'=>'HomePage'])?>
<main class="text">
  <section class="container plan d-flex align-items-center justify-content-center">
    
    <div class="p-3 row">
      <div class="d-none d-md-block col-md">
        <img src="<?=base_url('images/yankee.png')?>" alt="Yankee's Logo" class="img img-fluid">
      </div>
      <div class="col-md d-md-flex flex-column justify-content-center">
        <h1 class="display-3">Hey, Welcome🥳<br>I'm <span class="text-primary">Elhadji</span></h1>
        <hr class="border">
        <p class="h5">
          I'm a <span class="text-primary"> Web and Mobile Junior FullStack Developer</span> and <span class="text-primary">UI Designer</span> based in Senegal.<br>
          📂Scroll to explore...
        </p>
      </div>
    </div>
  </section>
</main>
<?=view('components/footer')?>
<?= $this->endSection() ;?>
