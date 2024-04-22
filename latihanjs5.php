<!DOCTYPE html>
<html>
<body>

<h2>JavaScript For Loop</h2>

Start:
<br>
<input type="number" name="nilai1" id="nilai1">
</br>
End:
<br>
<input type="number" name="nilai2" id="nilai2">
<br>
<button type="button" onclick = myfungsi()>tambah</button>
<br>


<p id="isi"></p>

<script>
function myfungsi() {
  let nilaiAwal = parseInt(document.getElementById("nilai1").value);
  let nilaiAkhir = parseInt(document.getElementById("nilai2").value);
  let text = '';
  if ((nilaiAwal) && (nilaiAkhir)) {
    for (let i = nilaiAwal; i <= nilaiAkhir; i++) {
      text += i + "<br>";
    }
    document.getElementById("isi").innerHTML = text;
  } else {
    document.getElementById("isi").innerHTML = "Mohon masukkan angka yang valid untuk kedua input.";
  }
}
</script>

</body>
</html>