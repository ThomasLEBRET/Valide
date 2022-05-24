<?php if(!empty($this->lesTracks[$i]->getAudioextrackURL())): ?>
  <br> <br>
  <p id="idAudioTrack<?=$i?>" style="display:none"><?=$i?></p>
      <button type="button" class="btn btn-secondary" onClick="togglePlay(<?=$i?>)" id="player<?=$i?>">
        <i id="playIcon<?=$i?>" class="fas fa-play"></i>
        <i id="pauseIcon<?=$i?>" class="fas fa-pause" style="display:none"></i>
      </button>

      <br><br>

      <div class="container" style="width:100%">
        <div class="progress" style="height: 1em;">
          <div id="progress<?=$i?>" class="progress-bar bg-secondary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <audio id="audio<?=$i?>" src="<?= $this->lesTracks[$i]->getAudioextrackURL() ?>"></audio>
      </div>
      <br>
<?php endif ?>