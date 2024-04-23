<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hitung Volume dan Luas Permukaan</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .container {
        margin: 20px auto;
        padding: 20px;
        width: 300px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .form-group {
        margin-bottom: 15px;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Hitung Volume dan Luas Permukaan</h2>
    <h3>Pilih yang ingin dihitung:</h3>
    <div class="form-group">
        <input type="checkbox" id="volumeBalokCheckbox" onchange="toggleInputFields('volumeBalok')"> Volume Balok
    </div>
    <div class="form-group">
        <input type="checkbox" id="luasPermukaanBalokCheckbox" onchange="toggleInputFields('luasPermukaanBalok')"> Luas Permukaan Balok
    </div>
    <div class="form-group">
        <input type="checkbox" id="volumeKubusCheckbox" onchange="toggleInputFields('volumeKubus')"> Volume Kubus
    </div>
    <div class="form-group">
        <input type="checkbox" id="luasPermukaanKubusCheckbox" onchange="toggleInputFields('luasPermukaanKubus')"> Luas Permukaan Kubus
    </div>
    <div class="form-group">
        <input type="checkbox" id="volumeTabungCheckbox" onchange="toggleInputFields('volumeTabung')"> Volume Tabung
    </div>
    <div class="form-group">
        <input type="checkbox" id="luasPermukaanTabungCheckbox" onchange="toggleInputFields('luasPermukaanTabung')"> Luas Permukaan Tabung
    </div>
    
    <div class="form-group" id="inputFields" style="display: none;">
        <label for="input1">Dimensi 1 (cm):</label>
        <input type="number" id="input1">
        <label for="input2">Dimensi 2 (cm):</label>
        <input type="number" id="input2">
        <label for="input3">Dimensi 3 (cm):</label>
        <input type="number" id="input3">
    </div>
    
    <button onclick="hitung()">Hitung</button>
    <div id="result"></div>
</div>

<script>
    function toggleInputFields(rumus) {
        var inputFieldsDiv = document.getElementById("inputFields");
        var inputLabels = document.querySelectorAll('#inputFields label');
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        
        // Sembunyikan semua input fields
        inputFieldsDiv.style.display = "none";
        
        // Reset semua checkbox yang tidak dipilih
        checkboxes.forEach(function(checkbox) {
            if (checkbox.id !== rumus + "Checkbox") {
                checkbox.checked = false;
            }
        });

        // Sesuaikan label input fields sesuai dengan rumus yang dipilih
        if (rumus === "volumeBalok" || rumus === "luasPermukaanBalok") {
            inputLabels[0].textContent = "Panjang (cm):";
            inputLabels[1].textContent = "Lebar (cm):";
            inputLabels[2].textContent = "Tinggi (cm):";
        } else if (rumus === "volumeKubus" || rumus === "luasPermukaanKubus") {
            inputLabels[0].textContent = "Sisi (cm):";
            inputLabels[1].style.display = "none";
            inputLabels[2].style.display = "none";
        } else if (rumus === "volumeTabung" || rumus === "luasPermukaanTabung") {
            inputLabels[0].textContent = "Jari-jari (cm):";
            inputLabels[1].textContent = "Tinggi (cm):";
            inputLabels[1].style.display = "inline-block";
            inputLabels[2].style.display = "none";
        }

        // Tampilkan input fields yang sesuai dengan rumus yang dipilih
        inputFieldsDiv.style.display = "block";
    }

    function hitung() {
        var resultDiv = document.getElementById("result");
        resultDiv.innerHTML = "";

        var panjang = parseFloat(document.getElementById("input1").value);
        var lebar = parseFloat(document.getElementById("input2").value);
        var tinggi = parseFloat(document.getElementById("input3").value);

        if (document.getElementById("volumeBalokCheckbox").checked) {
            var volumeBalok = panjang * lebar * tinggi;
            resultDiv.innerHTML += "<h3>Volume Balok:</h3>";
            resultDiv.innerHTML += "Volume: " + volumeBalok.toFixed(2) + " cm³<br>";
        }

        if (document.getElementById("luasPermukaanBalokCheckbox").checked) {
            var luasPermukaanBalok = 2 * ((panjang * lebar) + (panjang * tinggi) + (lebar * tinggi));
            resultDiv.innerHTML += "<h3>Luas Permukaan Balok:</h3>";
            resultDiv.innerHTML += "Luas Permukaan: " + luasPermukaanBalok.toFixed(2) + " cm²<br>";
        }

        if (document.getElementById("volumeKubusCheckbox").checked) {
            var volumeKubus = Math.pow(panjang, 3);
            resultDiv.innerHTML += "<h3>Volume Kubus:</h3>";
            resultDiv.innerHTML += "Volume: " + volumeKubus.toFixed(2) + " cm³<br>";
        }

        if (document.getElementById("luasPermukaanKubusCheckbox").checked) {
            var luasPermukaanKubus = 6 * Math.pow(panjang, 2);
            resultDiv.innerHTML += "<h3>Luas Permukaan Kubus:</h3>";
            resultDiv.innerHTML += "Luas Permukaan: " + luasPermukaanKubus.toFixed(2) + " cm²<br>";
        }

        if (document.getElementById("volumeTabungCheckbox").checked) {
            var jariJari = parseFloat(document.getElementById("input1").value);
            var tinggiTabung = parseFloat(document.getElementById("input2").value);
            var volumeTabung = Math.PI * Math.pow(jariJari, 2) * tinggiTabung;
            resultDiv.innerHTML += "<h3>Volume Tabung:</h3>";
            resultDiv.innerHTML += "Volume: " + volumeTabung.toFixed(2) + " cm³<br>";
        }

        if (document.getElementById("luasPermukaanTabungCheckbox").checked) {
            var jariJari = parseFloat(document.getElementById("input1").value);
            var tinggiTabung = parseFloat(document.getElementById("input2").value);
            var luasPermukaanTabung = 2 * Math.PI * jariJari * (jariJari + tinggiTabung);
            resultDiv.innerHTML += "<h3>Luas Permukaan Tabung:</h3>";
            resultDiv.innerHTML += "Luas Permukaan: " + luasPermukaanTabung.toFixed(2) + " cm²<br>";
        }
    }
</script>
</body>
</html>