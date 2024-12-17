import './bootstrap';

const express = require('express');
const bodyParser = require('body-parser');
const app = express();

app.use(bodyParser.urlencoded({ extended: true }));

app.post('/register', (req, res) => {
    const { name, email, password, password_confirmation } = req.body;

    // Validasi input
    if (!name || !email || !password || !password_confirmation) {
        return res.status(400).send('Semua kolom harus diisi!');
    }

    if (password !== password_confirmation) {
        return res.status(400).send('Password dan konfirmasi password tidak cocok!');
    }

    // Simpan pengguna baru (misalnya ke database)
    // Anda perlu menambahkan logika untuk menyimpan pengguna di database

    // Redirect ke halaman home setelah berhasil
    res.redirect('/home'); // Pastikan rute ini ada
});

app.get('/home', (req, res) => {
    res.send('Welcome to Home Page'); // Ganti dengan tampilan yang sesuai
});