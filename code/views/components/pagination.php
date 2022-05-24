<?php if(Superglobal::getGet()->get('page') == 'sharedTracks'): ?>
  <nav aria-label="Page navigation tracks">
    <ul class="pagination justify-content-center">
      <?php for ($i=0; $i < ceil($nbTracksByRegion / 5); $i++): ?>
      <li class="page-item <?php if(Superglobal::getGet()->get('trackPage') == $i + 1) echo "active"; ?>"><a class="page-link link-secondary" href="index.php?page=sharedTracks&trackPage=<?= $i +1 ?>"><?= $i +1 ?></a></li>
    <?php endfor ?>
    </ul>
  </nav>
<?php endif ?>