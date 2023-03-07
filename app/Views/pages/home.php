<?= $this->extend('layouts/html'); ?>
<?= $this->section('title'); ?>
Welcome🥳 (again😂)
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<?= view('components/header', ['position' => 'HomePage']) ?>
<main class="text">

  <section class="container plan d-flex align-items-center justify-content-center">
    <div class="p-3 row">
      <div class="d-none d-md-block col-md">
        <img src="<?= base_url('images/yankee.png') ?>" alt="Yankee's Logo" class="img img-fluid">
      </div>
      <div class="col-md d-md-flex flex-column justify-content-center">
        <h1 class="display-3">Hey, Welcome🥳<br>I'm <span class="text-primary">Elhadji</span>.</h1>
        <hr class="border border-light">
        <p class="h5">
          I'm a <span class="text-primary"> Web and Mobile Junior FullStack Developer</span> and <span class="text-primary">UI Designer</span> based in Senegal.
        </p>
        <p class="h5">
          📂Scroll to explore...
        </p>
      </div>
    </div>
  </section>

  <section class="bg-primary p-3 py-5">
    <div class="container text-white">
      <h2 class=" h5 text">AboutMe</h2>
      <p class="display-4">
        I'm Elhadji, i love <span class="text"><span class="text-warning">{</span>Code<span class="text-warning">}</span></span> and <span id="color" style="background-image: url(<?=base_url('images/colors.webp')?>);" class="text">Colors</span>. I live on PlanetEarth🌍 since 2001.
      </p>
      <br>
      <p class="display-4">
        I speak Wolof🛖, French🥖, English💂🏾, <span class="text-warning">{</span><span class="text">PHP</span><span class="text-warning">}</span>, <span class="text-warning">{</span><span class="text">JS</span><span class="text-warning">}</span>, <span class="text-warning">{</span><span class="text">C#</span><span class="text-warning">}</span> and SQL📂. 
      </p>
      <br>
      <p class="display-4">
        I have <span class="text">2Years <span class="text-warning">XP</span></span> in Web Development and <span class="text">1Year🍼 <span class="text-warning">XP</span></span> in Mobile Development.
      </p>
    </div>
  </section>

</main>
<?= view('components/footer') ?>
<?= $this->endSection(); ?>