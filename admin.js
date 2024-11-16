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
  });
  
  const navLinks = [pl_lst, trending];
  const pages = [song_names, Trending_songs];
  const titles = ["Playlist", "Trending Songs"];
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


let Add = document.getElementById("Add");
let form = document.getElementsByClassName("form-box")[0];
let close = document.getElementsByClassName("close-btn")[0];
let closeDel = document.getElementsByClassName("close-del")[0];
let del = document.getElementById("del");
let delBox = document.getElementsByClassName("del-box")[0];

Add.addEventListener('click',() => {
  form.style.display = "block";
})

close.addEventListener('click', () => {
  form.style.display = "none";
})

del.addEventListener('click', () => {
  delBox.style.display = "block";
})

closeDel.addEventListener("click", () => {
  delBox.style.display = "none";
})





