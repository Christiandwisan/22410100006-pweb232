<!DOCTYPE html>
<html>
<body>

<h2>Kalkulator Volume Bangun Ruang</h2>

<input type="checkbox" id="checkboxBalok"> Balok
<input type="checkbox" id="checkboxKubus"> Kubus
<p id="output"></p>
<button onclick="checkRadio()">Hitung</button>

<script>
    let output = document.getElementById("output");

    function checkRadio() {
        let checkboxBalok = document.getElementById('checkboxBalok');
        let checkboxKubus = document.getElementById('checkboxKubus');

        if (checkboxBalok.checked) {
            let panjang = prompt("Panjang:");
            let lebar = prompt("Lebar:");
            let tinggi = prompt("Tinggi:");
            if (panjang && lebar && tinggi) {
                let hasil = panjang * lebar * tinggi;
                alert("Hasilnya: " + hasil + " cm³");
            } else {
                alert("Mohon masukkan panjang, lebar, dan tinggi.");
            }
        } else if (checkboxKubus.checked) {
            let sisi = prompt("Sisi:");
            if (sisi) {
                let hasil = Math.pow(sisi, 3);
                alert("Hasilnya: " + hasil + " cm³");
            } else {
                alert("Mohon masukkan panjang sisi.");
            }
        } else {
            alert("Pilih salah satu jenis bangun ruang.");
        }
    }
</script>

</body>
</html>