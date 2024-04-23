function toggleInputFields(shape) {
    var balokInputs = document.getElementById('balokInputs');
    var kubusInputs = document.getElementById('kubusInputs');
    var balokCheckbox = document.getElementById('balokCheckbox');
    var kubusCheckbox = document.getElementById('kubusCheckbox');

    if (shape === 'balok') {
        balokInputs.style.display = 'block';
        kubusInputs.style.display = 'none';
        kubusCheckbox.checked = false;
    } else if (shape === 'kubus') {
        balokInputs.style.display = 'none';
        kubusInputs.style.display = 'block';
        balokCheckbox.checked = false;
    }
}

function hitungVolume() {
    var hasilField = document.getElementById('hasil');
    var balokCheckbox = document.getElementById('balokCheckbox');
    var kubusCheckbox = document.getElementById('kubusCheckbox');

    if (balokCheckbox.checked) {
        var panjang = parseFloat(document.getElementById('panjangBalok').value);
        var lebar = parseFloat(document.getElementById('lebarBalok').value);
        var tinggi = parseFloat(document.getElementById('tinggiBalok').value);
        var volume = panjang * lebar * tinggi;
        hasilField.value = volume;
    } else if (kubusCheckbox.checked) {
        var sisi = parseFloat(document.getElementById('sisiKubus').value);
        var volume = sisi * sisi * sisi;
        hasilField.value = volume;
    } else {
        hasilField.value = "Pilih salah satu bentuk terlebih dahulu.";
    }
}
