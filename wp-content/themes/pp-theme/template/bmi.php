<?php
/*
Template Name: bmi
*/
get_header();
?>
  <?php
    $input = $_POST;

    if(count($input) <= 0) {
      echo '<script> top.location.href="'.site_url().'"</script>';
    }
    /**
     * Calculate Age
     **/
    $from = new DateTime($input['tahun_lahir'].'-'.$input['bulan_lahir'].'-'.$input['tanggal_lahir']);
    $to   = new DateTime('today');
    // echo "YEAR: ".($from->diff($to)->y * 12). " MONTH: ". $from->diff($to)->m; exit;
    $age_in_month = (($from->diff($to)->y) * 12) + $from->diff($to)->m;

    /**
     * Calculate BMI
     **/
    $bmi = sprintf('%0.2f', ($input['berat_badan'] / (($input['tinggi_badan'] / 100) * ($input['tinggi_badan'] / 100))));
    // echo "BMI: ".$bmi. " Age in Month ". $age_in_month;

    /**
     * Get data normal/lower/higher from DB
     **/
    global $wpdb;
    $query = "SELECT * FROM wp_bmi WHERE gender='".$input['jenis_kelamin']."' AND age_in_month='".$age_in_month."'";
    // echo $query; exit;
    $result = $wpdb->get_results($query);
    $bmi_result = array(
      'result' => '',
      'text' => 'Berat Badan Ideal'
    );

    if($bmi <= $result[0]->low) {
      $bmi_result = array(
        'result' => 'kekurangan',
        'text' => 'Kekurangan Berat Badan'
      );
    } else if($bmi >= $result[0]->high) {
      $bmi_result = array(
        'result' => 'kelebihan',
        'text' => 'Kelebihan Berat Badan'
      );
    }
  ?>
  <div class="content-wrapper <?php echo $bmi_result['result']; ?>">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-xs-12 col-sm-12">
          <div class="content-inside">
            <h3 class="page-title">Index Massa Tubuh</h3>
            <h1 class="number"><?php echo $bmi; ?></h1>
            <h5 class="sub-title"><?php echo $bmi_result['text']; ?></h5>
            <h4 class="title">Tips</h4>
            <?php if($bmi_result['result'] == 'kekurangan'): ?>
              <p>Girls, kamu termasuk golongan berat badan kurang atau kurus. Jangan bangga dulu Girls, kurus ternyata juga jadi masalah lho!</p>
              <p>Buat kamu remaja laki-laki, mungkin masalahnya akan berdampak pada gangguan metabolisme tubuh yang kurang berjalan dengan normal akibat kekurangan gizi serta risiko sakit yang lebih tinggi seperti penyakit infeksi dan anemia. Namun buat kamu remaja perempuan, selain berisiko terkena anemia, kekurangan berat badan juga akan berdampak ke masa depanmu. Saat sudah menikah dan siap memiliki anak, berat badan yang kurus bisa meningkatkan risiko kelahiran bayi dengan berat badan lahir rendah.</p> 
              <p>Kalau kamu punya badan yang kurus, kamu bisa gampang letih dan nggak bisa bekerja keras seperti remaja yang memiliki berat badan ideal. 
              </p>
              <p>Nah, gimana caranya meningkatkan berat badan agar bisa ideal?</p>
              <ol>
                <li>Sarapanlah dengan gizi seimbang.</li>
                <li>Konsumsi makanan bergizi dan seimbang sesuai anjuran Pedoman Gizi Seimbang.</li>
                <li>Konsumsi makanan utama 3 kali sehari dan 2 kali cemilan sehari.</li>
                <li>Konsumsi sumber makanan dengan pengolahan yang baik dan sehat. Seperti, masak sayuran dengan api sedang, menggoreng makanan dengan minyak harus dilakukan dengan api sedang dan minyak cuma boleh digunakan maksimal 3 kali, serta penambahan garam baiknya dilakukan setelah makanan matang dan agak dingin agar iodium tdk hilang.</li>
                <li>Tingkatkan makanan berenergi tinggi seperti sumber karbohidrat kompeks, seperti Nasi, umbi-umbian, kentang, jagung, roti.</li>
                <li>Tingkatkan juga makanan berprotein tinggi (hewani dan nabati).</li>
                <li>Hindari mengonsumsi kopi atau teh setelah mengonsumsi protein ber zat besi.</li>
                <li>Olahraga minimal 30 menit per hari atau 150 menit per minggu</li>
                <li>Batasi gula (4 sdm per hari), garam (1 sdt per hari), dan lemak (5 sdm per hari).</li>
                <li>Minum air mineral minimal 8 gelas per hari</li>
                <li>Konsumsi sayur dan buah minimal 2-3 porsi (atau 150 gram) per hari</li>
                <li>Istirahat yang cukup</li>
              </ol>
            <?php elseif($bmi_result['result'] == 'kelebihan'): ?>
              <p>Hi Girls, Kamu termasuk golongan berat badan berlebih, tapi tau nggak sih apa penyebab sebenarnya? Yap, berat badan berlebih sebenarnya dipengaruhi oleh beberapa faktor, seperti genetik, gaya hidup, lingkungan, dan budaya.</p>
              <p>Nah, apa sih yang harus dilakukan buat kamu yang memiliki berat badan berlebih?</p>
              <ol>
                <li>Sarapanlah dengan makanan  bergizi seimbang.</li>
                <li>Konsumsi makanan bergizi dan seimbang secara teratur (2-3 kali sehari) sesuai kebutuhan.</li>
                <li>Kurangi porsi makan sesuai anjuran ahli gizi.</li>
                <li>Konsumsi sayur dan buah minimal 2-3 porsi (atau 150 gram) per hari.</li>
                <li>Olahraga minimal 30 menit per hari atau 150 menit per minggu.</li>
                <li>Lakukan aktivitas fisik seperti jalan santai, naik turun tangga, bersepeda, dan lain-lain.</li>
                <li>Batasi gula (4 sdm per hari), garam (1 sdt per hari), dan lemak (5 sdm per hari).</li>
                <li>Kurangi makanan ringan dengan kandungan gula dan karbohidrat tinggi, seperti kue manis, makanan berlemak, dan minuman manis.</li>
                <li>Ganti cemilanmu dengan buah dan sayur.</li>
                <li>Minum air mineral minimal 8 gelas per hari.</li>
                <li>Cek berat badan minimal satu kali dalam sebulan.</li>
                <li>Istirahat yang cukup.</li>
              </ol>
              <p>Selain itu Girls, jangan pernah konsumsi obat atau minuman pelangsing ya! Hindari juga diet yang bisa mengurangi berat badanmu secara drastis karena hal ini akan membuatmu kekurangan gizi dan akan mengganggu metabolisme tubuh serta berdampak pada efek “yoyo” di mana tubuh akan mengalami peningkatan berat badan drastis ketika pola hidup sehat mulai tidak teratur.</p>
              <p>Lakukan pengurangan porsi makan secara bertahap. Penurunan berat badan normal yaitu sekitar 0.5 kg-1 kg per minggu.</p>
            <?php else: ?>
              <p>Yeaaay! Selamat Girls, Berat badanmu sudah ideal. Pertahankan berat badanmu ini dengan terus mengonsumsi makanan bergizi seimbang sesuai anjuran Pedoman Gizi Seimbang. Selain itu, apa lagi sih yang harus kamu lakukan untuk mempertahankan berat badanmu?</p>
              <ol>
                <li>Sarapanlah dengan makanan  bergizi seimbang.</li>
                <li>Konsumsi sayur dan buah minimal 2-3 porsi (150 gram) per hari.</li>
                <li>Batasi gula (4 sdm per hari), garam (1 sdt per hari), dan lemak (5 sdm per hari).</li>
                <li>Olahraga minimal 30 menit per hari atau 150 menit per minggu.</li>
                <li>Minum air mineral minimal 8 gelas per hari.</li>
                <li>Lakukan aktivitas fisik seperti, jalan santai, naik turun tangga, bersepeda, dan lain-lain.</li>
                <li>Istirahat yang cukup</li>
              </ol>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="content-block text-center">
            <ul class="share">
              <li>Share</li>
              <li><a href="<?php echo site_url(); ?>" id="btn-bmi-share-fb"><i class="fa fa-facebook"></i></a></li>
              <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>