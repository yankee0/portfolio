<header class="w-100 text-center bg-white sticky-top">
  <nav class="d-none d-md-flex align-items-center justify-content-between p-1">
    <a href="<?= base_url() ?>"><img src="<?= base_url('images/yankee.png') ?>" height="70px" alt="Yankee Logo" title="Home"></a>
    <div class="d-flex align-items-center">
      <a title="Hey! Welcome(Againπ)" class="px-3 <?= ($position === 'HomePage') ? 'active' : '' ?>" href="<?= base_url('') ?>">HomePage</a>
      <a title="I'll tell you things about me.π" class="px-3 <?= ($position === 'AboutMe') ? 'active' : '' ?>" href="<?= base_url('about-me') ?>">AboutMe</a>
      <a title="What can Yankee do?π€" class="px-3 <?= ($position === 'MySkills') ? 'active' : '' ?>" href="<?= base_url('my-skills') ?>">MySkills</a>
      <a title="What did Yankee do?π€" class="px-3 <?= ($position === 'MyProjects') ? 'active' : '' ?>" href="<?= base_url('my-projects') ?>">MyProjects</a>
      <a title="Yupπ" class="btn btn-primary mr-1" href="#" role="button">GetInTouch ππΎ</a>
    </div>
  </nav>
</header>