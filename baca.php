<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <title>Baca Cerita - Ruang Cerita</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
      body {
        margin: 0;
        padding: 0;
        background: linear-gradient(to right, #fef6ff, #fce4ff);
        font-family: 'Poppins', sans-serif;
        color: #333;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
      }

      .container {
        max-width: 800px;
        padding: 40px;
        background-color: #fff;
        box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        border-radius: 12px;
        line-height: 1.8;
        box-sizing: border-box;
      }

      h1 {
        font-size: 32px;
        color: #6c3483;
        margin-bottom: 10px;
      }

      .author {
        font-style: italic;
        font-size: 14px;
        color: #777;
        margin-bottom: 30px;
      }

      p {
        margin-bottom: 20px;
        text-align: justify;
      }

      .back-link {
        display: inline-block;
        margin-top: 30px;
        text-decoration: none;
        color: #6c3483;
        font-weight: bold;
        transition: color 0.3s;
      }

      .back-link:hover {
        color: #9c27b0;
      }
    </style>
  </head>
<body>

  <!-- Konten Cerita -->
  <div class="container">
    <?php
      $stories = [
        "menemukan-harapan" => [
          "title" => "Menemukan Harapan",
          "author" => "Dika, Loa Janan",
          "body" => "<p>Setelah mengalami kegagalan dalam menjalankan bisnis pertamanya, Dika merasa hidupnya hancur. Setiap hari ia hanya mengurung diri, merasa tidak berguna, dan kehilangan arah. Namun di tengah keterpurukan itu, keluarganya tidak pernah berhenti memberikan dukungan. Kata-kata sederhana dari ibunya—\"Kamu belum gagal, kamu baru belajar\"—membuatnya perlahan bangkit. Ia mulai merancang ulang rencana bisnisnya, mengikuti pelatihan UMKM, dan memperluas jaringan pertemanan. Kini, Dika berhasil membuka usaha baru yang lebih stabil, dan ia menjadi inspirasi bagi banyak pemuda di Loa Janan.</p>"
        ],
        "di-balik-senyum" => [
          "title" => "Di Balik Senyum",
          "author" => "Sarah, Jalan Juanda",
          "body" => "<p>Sarah dikenal sebagai pribadi yang ceria. Senyumannya hampir selalu hadir dalam setiap pertemuan, membuat orang lain merasa nyaman. Namun, tak banyak yang tahu bahwa di balik senyum itu tersimpan luka dan tekanan mental yang ia alami sejak lama. Setiap malam ia menangis diam-diam, merasa tak cukup baik, merasa lelah menghadapi ekspektasi orang-orang. Hingga suatu hari, ia memutuskan untuk jujur pada dirinya sendiri dan mulai mencari bantuan profesional. Kini, Sarah menjadi contoh bahwa menerima diri dan berani mencari pertolongan adalah bentuk kekuatan sejati.</p>"
        ],
        "malam-di-sungai-dama" => [
          "title" => "Malam di Sungai Dama",
          "author" => "Anton, Sungai Dama",
          "body" => "<p>Pada suatu malam, Anton dan dua temannya memutuskan untuk berkemah di tepi Sungai Dama. Malam itu terasa berbeda, sunyi dan dingin menusuk tulang. Tiba-tiba, mereka mendengar suara langkah kaki dari balik semak—padahal tidak ada siapa pun. Lampu senter mereka meredup, dan kabut tebal mulai turun. Anton merasa seperti diawasi. Ketakutan melanda, tapi mereka mencoba tetap tenang. Hingga keesokan harinya, salah satu temannya mengaku melihat sosok bayangan berdiri di seberang sungai. Cerita itu terus mereka simpan, namun malam itu mengubah pandangan mereka tentang alam dan hal-hal yang tak kasat mata.</p>"
        ],
        "langkah-baru" => [
          "title" => "Langkah Baru",
          "author" => "Liana, Loa Janan",
          "body" => "<p>Liana baru saja pindah ke Loa Janan setelah bercerai dari suaminya. Awalnya, ia merasa asing dan takut menghadapi hidup sendiri. Namun, lingkungan barunya membawanya pada pengalaman baru: bergabung dalam komunitas perempuan wirausaha, belajar bercocok tanam, dan menemukan kedamaian dalam rutinitas sederhana. Hari-harinya kini lebih berarti, dan ia merasa lebih kuat daripada sebelumnya. Loa Janan menjadi awal dari babak baru yang penuh harapan dan makna.</p>"
        ],
        "petualangan-dua-sahabat" => [
          "title" => "Petualangan Dua Sahabat",
          "author" => "Joko, Samarinda Seberang",
          "body" => "<p>Joko dan Reza telah bersahabat sejak kecil. Libur sekolah kali ini mereka manfaatkan untuk menjelajahi sudut-sudut Samarinda Seberang. Mereka mengunjungi pasar tradisional, naik perahu menyusuri sungai, dan bahkan membantu seorang pedagang tua. Di balik tawa dan keringat mereka, tersimpan pelajaran tentang solidaritas dan nilai kehidupan. Petualangan itu membuat ikatan mereka semakin erat, dan kenangan itu tetap hidup dalam setiap cerita yang mereka bagi di kemudian hari.</p>"
        ],
        "damainya-alam" => [
          "title" => "Damainya Alam",
          "author" => "Rina, Sungai Dama",
          "body" => "<p>Rina merasa penat dengan kesibukan kantor dan hiruk pikuk kota. Ia memutuskan untuk berlibur sejenak ke pinggiran Sungai Dama. Di sana, ia mendengarkan suara burung, gemericik air, dan merasakan hembusan angin yang sejuk. Ia duduk berjam-jam sambil menulis di jurnalnya, meresapi setiap detik ketenangan itu. Momen itu membuatnya sadar bahwa ia perlu lebih sering terhubung dengan alam untuk menjaga kewarasannya. Sungai Dama menjadi tempat pelariannya saat dunia terasa terlalu bising.</p>"
        ],
        "bayangan-di-bengkuring" => [
          "title" => "Bayangan di Bengkuring",
          "author" => "Aldi, Bengkuring",
          "body" => "<p>Sejak kepergian kakaknya dalam sebuah kecelakaan, Aldi merasa hidupnya hampa. Ia sering menyendiri dan bermimpi tentang bayangan kakaknya yang berdiri diam di ujung gang rumah mereka di Bengkuring. Suara tawa masa kecil mereka terus terngiang di kepalanya. Dengan bantuan konseling dan komunitas pendukung, Aldi mulai menuliskan kisah tentang kakaknya. Proses itu menjadi terapi, dan perlahan-lahan ia mulai menerima kepergian itu sebagai bagian dari hidup. Kini, Aldi membantu orang lain menghadapi kehilangan dengan berbagi pengalamannya.</p>"
        ],
        "cahaya-di-ujung-jalan" => [
          "title" => "Cahaya di Ujung Jalan",
          "author" => "Fira, Jalan M Yamin",
          "body" => "<p>Hidup Fira penuh dengan kesulitan sejak kecil—dari kekerasan dalam rumah, kemiskinan, hingga stigma masyarakat. Namun, semangatnya tak pernah padam. Ia bekerja serabutan, menabung sedikit demi sedikit, hingga akhirnya mampu kuliah dengan beasiswa. Di Jalan M Yamin tempat ia tinggal, Fira sering berjalan sendirian di malam hari sambil menatap lampu jalan yang temaram, membayangkan masa depan yang lebih baik. Kini, ia menjadi guru dan terus menyalakan cahaya harapan untuk anak-anak yang mengalami hal serupa.</p>"
        ],
        "suara-tengah-malam" => [
          "title" => "Suara Tengah Malam",
          "author" => "Yuni, Jalan Juanda",
          "body" => "<p>Yuni baru saja pindah ke rumah warisan neneknya di Jalan Juanda. Setiap tengah malam, ia selalu mendengar suara langkah kaki di loteng—padahal rumah itu kosong. Awalnya ia mengira hanya ilusi, tapi suara itu makin jelas dan disertai bunyi pintu berderit. Dengan keberanian yang terkumpul, ia naik ke loteng dan menemukan kotak tua berisi surat cinta, foto lama, dan catatan harian neneknya yang telah lama hilang. Sejak saat itu, suara itu berhenti. Ia yakin, neneknya hanya ingin dikenang dan didengarkan.</p>"
        ]
      ];

      $id = $_GET['id'] ?? '';
      if (array_key_exists($id, $stories)) {
        echo "<h1 id=\"story-title\">" . htmlspecialchars($stories[$id]['title']) . "</h1>";
        echo "<div class=\"author\" id=\"story-author\">oleh: " . htmlspecialchars($stories[$id]['author']) . "</div>";
        echo "<div id=\"story-body\">" . $stories[$id]['body'] . "</div>";
      } else {
        echo "<h1>Cerita tidak ditemukan</h1><p>Cerita yang Anda cari tidak tersedia.</p>";
      }
    ?>
    <a href="galericerita.php" class="back-link">&larr; Kembali</a>
  </div>

</body>
</html>