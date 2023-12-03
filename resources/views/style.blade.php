<html>
    <head>
        <!--div disuruhhalaman ini, diset seperti i block-->
<link rel="stylesheet"href="mystyle.css">
<style>
    div {
        color : green;
        font-weight: bold;
        ext-align:right;
    }
    .judulhalaman {
        text-align:center;
        font-size:large;
    }
</style>

    </head>

    <body>
        <div class="judulhalaman">Selamat Datang</div>
        <!-- Inline CSS , digunakan ketika ada specifik ke 1 bagian saja-->
        <p style="
            text-decoration : line-through;
            color:red
            ">Hallo apa Kabar ? </p>
        <!-- Inpage CSS, digunakan ketika ada yang spesifik ke 1 halaman khusus -->
    <div>Hallo apa Kabar ? </div>
    <!--External CSS, digunakan untuk format umum 1 website-->
    <span>Hallo apa Kabar ? </span>
    <p>Bagian terakhir</p>
</body>
</html>
