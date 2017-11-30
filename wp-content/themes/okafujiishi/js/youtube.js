var script = document.createElement("script");
script.src = "https://www.youtube.com/iframe_api";

var firstScript = document.getElementsByTagName("script")[0];
firstScript.parentNode.insertBefore(script, firstScript);

var player;
var vid = "v_-wSnnhMKE";
var maxTime = 320,
    startTime = Math.ceil((Math.random() * maxTime));

function onYouTubeIframeAPIReady() {
  player = new YT.Player("js-youtube", {
    videoId: vid,
    playerVars: {
      "autoplay": 1,
      "showinfo": 0,
      "autohide": 1,
      "controls": 0,
      "rel": 0,
      "loop": 1,
      "playlist": vid,
      "playsinline": 1,
      "start": startTime
    },
    events: {
      "onReady": onPlayerReady,
      "onStateChange": onPlayerStateChange
    }
  });
}

var playerReady = false;

function onPlayerReady(event) {
  const p = event.target;

  playerReady = true;

  p.mute();
  p.playVideo();

}

function onPlayerStateChange(event) {
  var status = event.data;

  if (status == 1) {
    document.getElementById("js-youtube").classList.add("show");
  }
  if (status == 3) {
    document.getElementById("js-youtube").classList.remove("show");
  }
}
