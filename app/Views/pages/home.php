<?= $this->extend('layouts/html'); ?>
<?= $this->section('title'); ?>
Welcome🥳 (again😂)
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<?= view('components/header', ['position' => 'HomePage']) ?>
<main class="text">

  <section class="container plan d-flex align-items-center justify-content-center">
    <div class="p-3 row">
      <div data-aos="fade-up" data-aos-duration="1000" class="d-md-flex align-items-center col-md">
        <img src="<?= base_url('images/yankee.png') ?>" alt="Yankee's Logo" class="img img-fluid">
      </div>
      <div data-aos="fade-up" data-aos-duration="1000" class="col-md d-md-flex flex-column justify-content-center">
        <h1 class="display-3">Hey, Welcome🥳<br>I'm <span class="text-primary">Elhadji</span>.</h1>
        <hr class="border border-light">
        <p class="h5">
          I'm a <span class="text-primary"> Web and Mobile Junior FullStack Developer</span> and <span class="text-primary">UI Designer</span> based in Senegal.
        </p>
        <p class="h5">
          📂Scroll To Explore...
        </p>
      </div>
    </div>
  </section>

  <section class="bg-primary p-3 py-5">
    <div class="container text-white">
      <h2 data-aos="flip-up" data-aos-duration="1000" class=" h5 text">About Me</h2>
      <p data-aos="fade-up" data-aos-duration="1000" class="display-4">
        I'm Elhadji, i love <span class="text"><span class="text-warning">{</span>Code<span class="text-warning">}</span></span> and <span id="color" style="background-image: url(<?= base_url('images/colors.webp') ?>);" class="text">Colors</span>. I live on PlanetEarth🌍 since 2001.
      </p>
      <br>
      <p data-aos="fade-up" data-aos-duration="1000" class="display-4">
        I speak Wolof🛖, French🥖, English💂🏾, <span class="text-warning">{</span><span class="text">PHP</span><span class="text-warning">}</span>, <span class="text-warning">{</span><span class="text">JS</span><span class="text-warning">}</span>, <span class="text-warning">{</span><span class="text">C#</span><span class="text-warning">}</span> and SQL📂.
      </p>
      <br>
      <p data-aos="fade-up" data-aos-duration="1000" class="display-4">
        I have <span class="text">2Years <span class="text-warning">XP</span></span> in Web Development and <span class="text">1Year🍼 <span class="text-warning">XP</span></span> in Mobile Development.
      </p>
    </div>
  </section>

  <section class="p-3 py-5">
    <div class="container">
      <h2 data-aos="flip-up" data-aos-duration="1000" class=" h5 text-primary">MySkills</h2>
      <div class="row">
        <div data-aos="fade-up" data-aos-duration="1000" class="col-12 display-4">Web</div>
        <div data-aos="fade-up" data-aos-duration="1000" class="col-sm-6 ">
          <p>
            <span>Codeigniter 4 (i build this website with it)</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          </p>
          <p>
            <span>Laravel</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          </p>
          <p>
            <span>ASP.NET</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          </p>
        </div>
        <div data-aos="fade-up" data-aos-duration="1000" class="col-sm-6">
          <p>
            <span>Wordpress</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          </p>
          <p>
            <span>React JS</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          </p>
          <p>
            <span>MySQL</span>
          <div class="progress">
            <div class="progress-bar" style="width: 80%" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          </p>
        </div>
        <div data-aos="fade-up" data-aos-duration="1000" class="col-12 display-4">Mobile</div>
        <div data-aos="fade-up" data-aos-duration="1000" class="col-sm-6 ">
          <p>
            <span>Flutter</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          </p>
          <p>
            <span>Xcode</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          </p>
          <p>
            <span>Android Studio</span>🦦
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          </p>
        </div>
        <div data-aos="fade-up" data-aos-duration="1000" class="col-sm-6 ">
          <p>
            <span>Firebase</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          </p>
        </div>
        <div data-aos="fade-up" data-aos-duration="1000" class="col-12 display-4">Other</div>
        <div data-aos="fade-up" data-aos-duration="1000" class="col-sm-6 ">
          <p>
            <span>OOP + UML</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          </p>
          <p>
            <span>GitFlow</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          </p>
          <p>
            <span>Canvas</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          </p>
          <p>
            <span>Photoshop</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          </p>
        </div>
        <div data-aos="fade-up" data-aos-duration="1000" class="col-sm-6 ">
          <p>
            <span>Figma + Zeplin</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          </p>
          <p>
            <span>Linux command line</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          </p>
          <p>
            <span>Chat GPT 🦦... </span>
          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="p-3 py-5">
    <div data-aos="zoom-in" data-aos-duration="1000" class="container">
      <h2 class=" h5 text-primary">Contact</h2>
      <div class="display-3">Let's Get In Touch</div>
      <div class="d-flex">
        <a class="h5 " href="https://instagram.com/yankeesuprem"><img src="<?= base_url('images/insta.png') ?>" height="64px" alt="Instagram"></a>
        <div class="px-3"></div>
        <a class="h5 " href="https://linkedin.com/in/yankeesuprem"><img src="<?= base_url('images/in.png') ?>" height="64px" alt="Linked in"></a>
        <div class="px-3"></div>

        <a class="h5 " href="mailto:yankeesuprem@gmail.com"><img src="<?= base_url('images/g.png') ?>" height="64px" alt="Gmail"></a>
      </div>
    </div>
  </section>

</main>
<?= view('components/footer') ?>
<?= $this->endSection(); ?>