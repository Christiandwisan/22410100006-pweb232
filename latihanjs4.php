<!DOCTYPE html>
<html>
<body>

<h2>JavaScript if</h2>

<p>Nilai Uts: <input type="number" name="nilai1" id="nilai1"></p>
<p>Nilai Uas: <input type="number" name="nilai2" id="nilai2"></p>
<p>Nilai Tugas: <input type="number" name="nilai3" id="nilai3"></p>
<button type="button" onclick="myFunction()">Hitung</button>
<p>Hasil: <input type="number" name="hasil" id="hasil" readonly></p>

<p id="isi">Good Evening!</p>

<script>
function myFunction() {
    let x = parseInt(document.getElementById("nilai1").value);
    let y = parseInt(document.getElementById("nilai2").value);
    let z = parseInt(document.getElementById("nilai3").value);

    let total = x + y + z;
 

    if(total >= 80) {
        document.getElementById("isi").innerHTML = "A";
    } else if (total >= 70) {
        document.getElementById("isi").innerHTML = "B";
    } else {
        document.getElementById("isi").innerHTML = "C";
    }
}
</script>

</body>
</html>