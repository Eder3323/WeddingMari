// document.addEventListener("DOMContentLoaded", function() {
//     // document.getElementById('background-music').play();
//     //  unmuteAudio();
// //     // setPlayIcon();
// //     unmuteAudio();
// //     setPlayIcon();
// });

function toggleMute() {
    var audio = document.getElementById("background-music");
    if (audio.muted) {
        unmuteAudio();
        setPlayIcon();
    } else {
        muteAudio();
        setMuteIcon();
    }
}

function muteAudio() {
    var audio = document.getElementById("background-music");
    // audio.pause();
    audio.muted = true;
}

function unmuteAudio() {
    var audio = document.getElementById("background-music");
    audio.muted = false;
    audio.play();
    // audio.play();
}

function setMuteIcon() {
    var muteIcon = document.getElementById("mute-img");
    muteIcon.src = "/music/mute.svg";
}

function setPlayIcon() {
    var muteIcon = document.getElementById("mute-img");
    muteIcon.src = "/music/play.png";
}


