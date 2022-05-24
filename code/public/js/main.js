var timer;
var percent = 0;
var n;
var audio;
var progress;
var playIcon, pauseIcon;

function reset() {
  audio.pause();
  audio.currentTime=0;
  progress.ariaValueNow = 0;
  progress.style.width = 0+"%";
  playIcon.style.display = "inherit";
  pauseIcon.style.display = "none";
  isPlaying = false;
  audio.replaceWith(audio.cloneNode(true));
}

var advance = function(duration, element) {
  increment = 10/duration
  percent = Math.min(increment * element.currentTime * 10, 100);
  progress.ariaValueNow = percent;
  progress.style.width = percent+"%";
  startTimer(duration, element);
}
var startTimer = function(duration, element){
  if(percent < 99) {
    timer = setTimeout(function (){advance(duration, element)}, 100);
  }
  else {
    reset();
  }
}

function togglePlay(n) {

  if(audio == null)
    audio = document.getElementById("audio"+n)

  if(audio != document.getElementById("audio"+n)) {
      reset();
  }

  audio = document.getElementById("audio"+n);
  progress = document.getElementById("progress"+n);

  audio.addEventListener("playing", function(_event) {
    var duration = _event.target.duration;
    advance(duration, audio);
  });
  audio.addEventListener("pause", function(_event) {
    clearTimeout(timer);
  });


  var b = document.getElementById('player'+n);
  playIcon =  document.getElementById('playIcon'+n);
  pauseIcon =  document.getElementById('pauseIcon'+n);

  if (!audio.paused) {
    playIcon.style.display = "inherit";
    pauseIcon.style.display = "none";

    audio.pause();
    isPlaying = false;
  } else {
    playIcon.style.display = "none";
    pauseIcon.style.display = "inherit";
    audio.play();
    isPlaying = true;
  }
}
