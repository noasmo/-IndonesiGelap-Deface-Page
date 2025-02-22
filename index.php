<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>#IndonesiaGelap</title>
    <link rel="shortcut icon" href="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhZolQvwbOxrJDY-iP3k2Y11nT5dmwEOr-bXvYA3yRtMLRC1gT-Ll-1CvPw5R1LmFY8TmNA6tXvgz_-KC6ezorOdXbP0EcVk4Fhk02k_EJaD0oCTaTlvwZaifdtPkMjvoDKK-D8JCCbzVFN/s1600/idn.gif">
    <style type='text/css'>body, a, a:link{cursor:url(http://cur.cursors-4u.net/cursors/cur-2/cur117.cur), default;} a:hover {cursor:url(http://cur.cursors-4u.net/cursors/cur-2/cur116.cur),wait;}</style>
    <style>
        body {
            background-color: #121212;
            color: white;
            font-family: 'Courier New', Courier, monospace;
        }
        .welcome-page {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url('https://media4.giphy.com/media/v1.Y2lkPTc5MGI3NjExZ3pjYmowMmM4d3E1cHRyb3Z0a2R6YndqNW4ybXpjejdjNWI3MDNlbiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/n3UBd63oVlQLC/giphy.gif') no-repeat center center fixed;
            background-size: cover;
            position: relative;
            overflow: hidden;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }
        .content {
            z-index: 2;
            text-align: center;
            color: white;
        }
        .header {
            font-size: 3em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }
        .message {
            font-size: 1.3em;
            margin-bottom: 40px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }
        .btn-custom {
            background-color: #e63946;
            color: white;
        }
        .btn-custom:hover {
            background-color: #d62839;
        }
        .deface-page {
            display: none;
            height: 100vh;
            padding: 50px;
            text-align: center;
            overflow: auto;
        }
        .footer {
            text-align: center;
            margin-top: 0px;
        }
    </style>
</head>
<body>

<div class="welcome-page" id="welcomePage">
    <div class="overlay"></div>
    <div class="content">
        <h1 class="header">#IndonesiaGelap!</h1>
        <p class="message">Kau anggap Kami bodoh? Kami tidak bodoh!</p>
        <p class="message"><span style="color:red;">Hidup Rakyat Indoensia!</span></p>
        <button id="playButton" class="btn btn-custom">Click to Start</button>
        <audio id="myAudio" src="hacker2.mp3" preload="auto"></audio>
    </div>
</div>

<div class="deface-page" id="defacePage">

<img src="pancasila.png" width="100" style="display: block; margin: 0 auto;" border="0">
<p>#IndonesiaGelap</p>
    <h1 class="header">⚠️Warning!</h1>


    <div class="message" id="typeEffect"></div>
    <a href="#" class="btn btn-custom">Jangan Permainkan kami!</a>
</div>

<div class="footer">
    <p>&copy; 2025 NoAsmo Cyber4rt. All rights reserved.</p>
    
   
</div>

<script>
    const playButton = document.getElementById("playButton");
    const myAudio = document.getElementById("myAudio");
    const welcomePage = document.getElementById("welcomePage");
    const defacePage = document.getElementById("defacePage");

    playButton.addEventListener("click", () => {
        myAudio.play().then(() => {
            // Simulasi membuka pintu
            welcomePage.style.transition = "opacity 1s";
            welcomePage.style.opacity = 0;

            // Tampilkan halaman deface setelah transisi
            setTimeout(() => {
                welcomePage.style.display = 'none';
                defacePage.style.display = 'block';
                typeMessage(0); // Jalankan typing effect
            }, 1000); // Tunggu selama transisi
            
        }).catch(error => {
            console.error("Error playing audio:", error);
        });
    });

    // Mendefinisikan pesan dengan elemen HTML yang diperlukan
    const messages = [
        "This site has been defaced! </NoAsmo> was here!",
        "Hidup Mahasiswa! Hidup Rakyat Indonesia",
        "Anggaran Pendidikan dipangkas.",
        "Kekerasan aparatur tak kunjung diusut tuntas.",
        "Proyek Strategis Nasional merusak lingkungan dan merampas penghidupan masyarakat adat.",
        "Pelanggaran berat HAM disambut impunitas, hutang Negara atas keadilan bagi korban tak kunjung lunas.",
        "Habis gelap, terbitlah perlawanan.",
        "#IndonesiaGelap",
        "Kita berhak mengawal kebijakan Negara, dan bersuara agar setiap kebijakan yang berdampak pada hidup kita didasari keberpihakan pada kesejahteraan kita!"
    ];

    const typingSpeed = 50; // milliseconds
    let messageIndex = 0;

    function typeMessage(index) {
        if (index < messages.length) {
            let message = messages[index]; // Ambil pesan saat ini
            let charIndex = 0;

            function typeChar() {
                if (charIndex < message.length) {
                    // Menambahkan karakter satu per satu
                    const effectElement = document.getElementById("typeEffect");
                    effectElement.innerHTML += message.charAt(charIndex);                    
                    charIndex++;
                    setTimeout(typeChar, typingSpeed);
                } else {
                    // Setelah semua karakter ditampilkan, buat <br> untuk pemisah antar kalimat
                    const effectElement = document.getElementById("typeEffect");
                    const br = document.createElement("br");
                    effectElement.appendChild(br); // Tambahkan <br>
                    
                    // Mengatur jeda sebelum melanjutkan ke pesan berikutnya
                    setTimeout(() => typeMessage(index + 1), 1000); // Tunggu 1 detik sebelum memulai pesan berikutnya
                }
            }
            typeChar(); // Mulai mengetik karakter untuk pesan saat ini
        }
    }
</script>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>