let titleText = "Laporan Pasien-";
let speed = 400;

function scrollTitle() {
  document.title = titleText;
  titleText = titleText.substring(1) + titleText[0];
  setTimeout(scrollTitle, speed);
}

scrollTitle();
