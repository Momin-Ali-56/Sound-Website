window.addEventListener('load', function() {
  setTimeout(function() {
      document.querySelector('header .menu_side').style.width = '22%';
      document.querySelector('header .song_side').style.width = '78%';
      document.querySelector('header .song_side').style.height = '90%';
      document.querySelector('header .menu_side').style.height = '90%';
      document.querySelector('header .master_play').style.height = '10%';
      document.querySelector('header .master_play').style.opacity = '1';
  }, 500); // Slight delay before starting the animation to ensure page is fully loaded
});

// Side Nav

const navItems = ['first', 'second', 'third', 'fourth', 'fifth', 'sixth'];
const playlist = document.getElementsByClassName("playlist")[0];
const song_names = document.getElementsByClassName("song_names")[0];
const mix_songs = document.getElementsByClassName("mix_songs")[0];
const party_songs = document.getElementsByClassName("party_songs")[0];
const romantic_songs = document.getElementsByClassName("romantic_songs")[0];
const sad_songs = document.getElementsByClassName("sad_songs")[0];
const rap_songs = document.getElementsByClassName("rap_songs")[0];
const phonks = document.getElementsByClassName("phonks")[0];
const backbtn = document.getElementById("backbtn");
const trending = document.getElementsByClassName("trending")[0];
const pl_lst = document.getElementsByClassName("pl_lst")[0];
const recent_play = document.getElementsByClassName("recent_play")[0];
const Trending_songs = document.getElementsByClassName("Trending_songs")[0];
const recents = document.getElementsByClassName("recents")[0];
const first_text = document.getElementById("first_text");

navItems.forEach((item, index) => {
  document.getElementsByClassName(item)[0].addEventListener("click", () => {
    song_names.style.display = "none";
    playlist.style.display = "none";
    backbtn.style.display = "block";
    switch (index) {
      case 0:
        mix_songs.style.display = "block";
        break;
      case 1:
        party_songs.style.display = "block";
        break;
      case 2:
        romantic_songs.style.display = "block";
        break;
      case 3:
        sad_songs.style.display = "block";
        break;
      case 4:
        rap_songs.style.display = "block";
        break;
      case 5:
        phonks.style.display = "block";
        break;
    }
  });
});

backbtn.addEventListener("click", () => {
  playlist.style.display = "block";
  backbtn.style.display = "none";
  mix_songs.style.display = "none";
  song_names.style.display = "block";
  party_songs.style.display = "none";
  romantic_songs.style.display = "none";
  sad_songs.style.display = "none";
  rap_songs.style.display = "none";
  phonks.style.display = "none";
  recents.style.display = "none"
});

const navLinks = [pl_lst, trending, recent_play];
const pages = [song_names, Trending_songs, recents];
const titles = ["Playlist", "Trending Songs", "Recently Played"];
document.getElementsByClassName("pl_lst")[0].classList.add("active");

navLinks.forEach((link, index) => {
  link.addEventListener("click", () => {
    navLinks.forEach((l) => l.classList.remove("active"));
    link.classList.add("active");
    pages.forEach((page, i) => {
      if (i === index) {
        page.style.display = "block";
      } else {
        page.style.display = "none";
      }
    });
    first_text.innerText = titles[index];
  });
});

// Artist

import {artists} from './artist.js'

const back_btn = document.getElementById("btn_s");
const btn_s = document.getElementsByClassName("btn_s")[0];
const pop_song = document.getElementsByClassName("pop_song")[0];
const art_name = document.getElementById("art_name");

artists.forEach((artist) => {
  const artistButton = document.getElementById(artist.id);
  const artistElement = document.getElementsByClassName(artist.className)[0];

  if (artistButton && artistElement) {
    artistButton.addEventListener("click", () => {
      artists.forEach((a) => {
        const element = document.getElementsByClassName(a.className)[0];
        if (element) {
          element.style.display = "none";
        }
      });
      artistElement.style.display = "flex";
      pop_song.style.display = "none";
      art_name.innerText = artist.displayName;
      back_btn.style.display = "block";
      btn_s.style.display = "none";
    });
  }
});

back_btn.addEventListener("click", () => {
  artists.forEach((artist) => {
    const element = document.getElementsByClassName(artist.className)[0];
    if (element) {
      element.style.display = "none";
    }
  });
  pop_song.style.display = "flex";
  back_btn.style.display = "none";
  btn_s.style.display = "block";
  art_name.innerText = "Popular Songs";
});

// Scrolling

// For Artist
const leftScrollBtn = document.getElementById("left_scrolls");
const rightScrollBtn = document.getElementById("right_scrolls");
const popularArtistsContainer = document.querySelector(
  ".popular_artists .item"
);

leftScrollBtn.addEventListener("click", () => {
  popularArtistsContainer.scrollBy({
    left: -100,
    behavior: "smooth",
  });
});

rightScrollBtn.addEventListener("click", () => {
  popularArtistsContainer.scrollBy({
    left: 100,
    behavior: "smooth",
  });
});

// For Songs
const scrollRight = document.getElementById("right_scroll");
const scrollLeft = document.getElementById("left_scroll");
const popularSongs = document.querySelector(".pop_song");

scrollRight.addEventListener("click", function () {
  popularSongs.scrollLeft += 150;
});

scrollLeft.addEventListener("click", function () {
  popularSongs.scrollLeft -= 150;
});

// Songs Playing

import { popular_songs, Trending_play, mixes, party, romantic, sad, raps, phonk_play, Arijit_songs, Talha_songs, Atif_songs, Snake_songs, Honey_songs, Badshah_songs, Diljit_songs, Shreya_songs, Ali_songs, Rahat_songs, AP_songs, AR_songs, Tony_songs, Neha_songs } from './songs.js';

let audio = new Audio();
let currentSongIndex = 0;
let isPlaying = false;
let currentPlaylist = popular_songs; // Default playlist

function updateMasterPlay(song) {
  document.getElementById("poster_master_play").src = song.poster;
  document.getElementById("title").innerHTML = song.songName;
}

function playSong(songIndex, songsArray) {
  let song = songsArray[songIndex];
  audio.src = `Audio/${song.songName.split("<br")[0].trim()}.mp3`;
  updateMasterPlay(song);

  // Check if audio is already playing and if the song is the same
  if (isPlaying && currentSongIndex === songIndex) {
    audio.play();
  } else {
    audio.currentTime = currentPosition; // Set the playback position to the stored value
    audio.play().then(() => {
      document
       .getElementById("masterPlay")
       .classList.replace("bi-play-fill", "bi-pause-fill");
      document.querySelector('.wave').classList.add('active2');
      isPlaying = true;
    }).catch(error => {
      console.error("Error playing the song:", error);
    });
  }
}

document.getElementById("play_songs").addEventListener("click", function () {
  playSong(currentSongIndex, currentPlaylist);
});

let currentPosition = 0;

function pauseSong() {
  currentPosition = audio.currentTime;
  audio.pause();
  document
   .getElementById("masterPlay")
   .classList.replace("bi-pause-fill", "bi-play-fill");
  document.querySelector('.wave').classList.remove('active2');
  isPlaying = false;
}

function updateSeekBar() {
  if (audio.duration && !isNaN(audio.duration)) {
    let progress = (audio.currentTime / audio.duration) * 100;
    document.getElementById("seek").value = progress;
    document.getElementById("bar2").style.width = `${progress}%`;
    document.querySelector(".bar .dot").style.left = `${progress}%`;
    document.getElementById("currentStart").textContent = formatTime(audio.currentTime);
    document.getElementById("currentEnd").textContent = formatTime(audio.duration);
  }
}

function updateVolumeBar() {
  let volume = audio.volume * 100;
  document.getElementById("vol").value = volume;
  document.querySelector(".vol .vol_bar").style.width = `${volume}%`;
  document.querySelector(".vol .dot").style.left = `${volume}%`;
  if (volume < 50) {
    vol_icon.classList.add("bi-volume-down-fill");
    vol_icon.classList.remove("bi-volume-up-fill");
    vol_icon.classList.remove("bi-volume-mute-fill");
  } else if (volume >= 50) {
    vol_icon.classList.add("bi-volume-up-fill");
    vol_icon.classList.remove("bi-volume-down-fill");
    vol_icon.classList.remove("bi-volume-mute-fill");
  } else if (volume === 0) {
    vol_icon.classList.remove("bi-volume-up-fill");
    vol_icon.classList.remove("bi-volume-down-fill");
    vol_icon.classList.add("bi-volume-mute-fill");
  }
}
audio.volume = 1;
updateVolumeBar();

function formatTime(seconds) {
  let minutes = Math.floor(seconds / 60);
  let secs = Math.floor(seconds % 60);
  return `${minutes}:${secs < 10 ? "0" : ""}${secs}`;
}

document.getElementById("masterPlay").addEventListener("click", function () {
  if (isPlaying) {
    pauseSong();
  } else {
    playSong(currentSongIndex, currentPlaylist);
  }
});

document.getElementById("next").addEventListener("click", function () {
  currentSongIndex = (currentSongIndex + 1) % currentPlaylist.length;
  playSong(currentSongIndex, currentPlaylist);
});

document.getElementById("back").addEventListener("click", function () {
  currentSongIndex =
    (currentSongIndex - 1 + currentPlaylist.length) % currentPlaylist.length;
  playSong(currentSongIndex, currentPlaylist);
});

document.getElementById("seek").addEventListener("input", function () {
  if (audio.duration && !isNaN(audio.duration)) {
    audio.currentTime = (this.value / 100) * audio.duration;
  }
});

document.getElementById("vol").addEventListener("input", function () {
  audio.volume = this.value / 100;
  updateVolumeBar();
});

audio.addEventListener("timeupdate", updateSeekBar);
audio.addEventListener("volumechange", updateVolumeBar);

audio.addEventListener("ended", function() {
  currentSongIndex = (currentSongIndex + 1) % currentPlaylist.length;
  playSong(currentSongIndex, currentPlaylist);
});

function changePlaylist(playlist) {
  currentPlaylist = playlist;
  currentSongIndex = 0;
  updateMasterPlay(currentPlaylist[0]);
  // Do not automatically play the song when the playlist changes
}

// Function to handle song item click
function handleSongItemClick(event) {
  let songItem = event.currentTarget;
  let playlistName = songItem.dataset.playlist;
  let songId = parseInt(songItem.querySelector("i").id, 10);

  switch (playlistName) {
    case "popular_songs":
      currentPlaylist = popular_songs;
      break;
    case "mixes":
      currentPlaylist = mixes;
      break;
    case "Trending_play":
      currentPlaylist = Trending_play;
      break;
    case "party":
      currentPlaylist = party;
      break;
    case "romantic":
      currentPlaylist = romantic;
      break;
    case "sad":
      currentPlaylist = sad;
      break;
    case "raps":
      currentPlaylist = raps;
      break;
    case "phonk_play":
      currentPlaylist = phonk_play;
      break;
    case "Arijit_songs":
      currentPlaylist = Arijit_songs;
      break;
    case "Talha_songs":
      currentPlaylist = Talha_songs;
      break;
    case "Atif_songs":
      currentPlaylist = Atif_songs;
      break;
    case "Snake_songs":
      currentPlaylist = Snake_songs;
      break;
    case "Honey_songs":
      currentPlaylist = Honey_songs;
      break;
    case "Badshah_songs":
      currentPlaylist = Badshah_songs;
      break;
    case "Diljit_songs":
      currentPlaylist = Diljit_songs;
      break;
    case "Shreya_songs":
      currentPlaylist = Shreya_songs;
      break;
    case "Ali_songs":
      currentPlaylist = Ali_songs;
      break;
    case "Rahat_songs":
      currentPlaylist = Rahat_songs;
      break;
    case "AP_songs":
      currentPlaylist = AP_songs;
      break;
    case "AR_songs":
      currentPlaylist = AR_songs;
      break;
    case "Tony_songs":
      currentPlaylist = Tony_songs;
      break;
    case "Neha_songs":
      currentPlaylist = Neha_songs;
      break;
    default:
      currentPlaylist = popular_songs; // Default to popular songs if playlist not found
  }

  currentSongIndex = songId - 1; // Song IDs are 1-based, array indices are 0-based
  playSong(currentSongIndex, currentPlaylist);
}

// Attach click event listeners to all song items
document.querySelectorAll(".songItem").forEach((songItem) => {
  songItem.addEventListener("click", handleSongItemClick);
});

// Initial call to set the master play section

updateMasterPlay(currentPlaylist[0]);



document.getElementById('logoutBtn').addEventListener('click', function(event) {
  event.preventDefault(); // Prevent default anchor behavior

  fetch('logout.php', {
      method: 'POST'
  }).then(() => {
      // Redirect to index.php after successful logout
      window.location.href = 'index.php';
  }).catch(error => {
      console.error('Error:', error);
  });
});