function validateForm() {
    let nama = document.getElementById("nama");
    let nik = document.getElementById("nik");
    let jenis_kelamin = document.getElementById("jenis_kelamin");
    let jabatan = document.getElementById("jabatan");
    let divisi = document.getElementById("divisi");
    let tgl_masuk = document.getElementById("tgl_masuk");
    let gaji = document.getElementById("gaji");
    let alamat = document.getElementById("alamat");
    let foto = document.getElementById("foto");

    if (nama.value.trim().length === 0) {
        setInvalidField(nama, "Nama tidak boleh kosong");
        return false;
    } else if (nama.value.trim().length < 3) {
        setInvalidField(nama, "Nama harus memiliki minimal 3 karakter");
        return false;
    }

    if (nik.value.trim() === "") {
        setInvalidField(nik, "NIK harus diisi");
        return false;
    } else if (isNaN(nik.value)) {
        setInvalidField(nik, "NIK harus berupa angka");
        return false;
    }

    if (jenis_kelamin.value === "" || jenis_kelamin.value === null) {
        setInvalidField(jenis_kelamin, "Jenis Kelamin harus dipilih");
        return false;
    }

    if (jabatan.value === "" || jabatan.value === null) {
        setInvalidField(jabatan, "Jabatan harus dipilih");
        return false;
    }

    if (divisi.value === "" || divisi.value === null) {
        setInvalidField(divisi, "Divisi harus dipilih");
        return false;
    }

    if (tgl_masuk.value.trim() === "") {
        setInvalidField(tgl_masuk, "Tanggal Masuk harus diisi");
        return false;
    }

    if (gaji.value.trim() === "" || gaji.value <= 0) {
        setInvalidField(
            gaji,
            "Gaji harus diisi dengan angka lebih besar dari 0"
        );
        return false;
    }

    if (alamat.value.trim() === "") {
        setInvalidField(alamat, "Alamat harus diisi");
        return false;
    }

    if (foto.value.trim() === "") {
        setInvalidField(foto, "Foto harus diunggah");
        return false;
    }

    return true;
}

function setInvalidField(field, message) {
    field.classList.add("is-invalid");
    field.nextElementSibling.textContent = message;
}

// Event listener untuk menghapus class is-invalid saat input diubah
document
    .querySelectorAll(".form-control, .form-select")
    .forEach(function (element) {
        element.addEventListener("input", function () {
            this.classList.remove("is-invalid");
            this.nextElementSibling.textContent = "";
        });
    });
