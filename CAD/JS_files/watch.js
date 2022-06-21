function godzina() {
  let date = new Date();
  let hours = date.getHours();
  let minutes = date.getMinutes();
  let seconds = date.getSeconds();
  if (seconds < 10) {
    seconds = "0" + seconds;
  }
  if (minutes < 10) {
    minutes = "0" + minutes;
  }
  if (hours < 10) {
    hours = "0" + hours;
  }
  let time = hours + ":" + minutes + ":" + seconds;

  document.getElementById("zegar").innerHTML = time;

  setTimeout(godzina, 1000);
}
godzina();
