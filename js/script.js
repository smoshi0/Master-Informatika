$(document).ready(function () {
  //Menghilangkan tombol cari
  $("#tombol-cari").hide();
  // event ketika keyword ditulis
  $("#keyword").on("keyup", function () {
    $("#containers").load("ajax/mahasiswa.php?keyword=" + $("#keyword").val());
  });
});
