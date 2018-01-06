<?php
//get the q parameter from URL
$q=$_GET["q"];

//find out which feed was selected
$date=date('Y/m/d');
$tgl = date('d');
$bln = date('m');
$thn = date('Y');
if($q=='Balipost'){
  $url=("http://www.balipost.com/pendidikan");
} elseif($q=="CNN") {
  $url=("https://www.cnnindonesia.com/nasional/indeks/3");
} elseif($q=="Detik") {
  $url=("https://news.detik.com/indeks/all");
} elseif($q=="Kompas.com"){
  $url=("http://news.kompas.com/search/all");
}else if($q=="Kompas.id"){
  $url=("https://kompas.id/kategori/dikbud/pendidikan/");
} elseif($q=="Liputan6"){
  $url=("http://www.liputan6.com/rss");
} elseif($q=="PR"){
  $url=("http://www.pikiran-rakyat.com/nasional/");
} elseif($q=="Republika"){
  $url=("http://www.republika.co.id/kanal/news/pendidikan");
} elseif($q=="SM"){
  $url=("http://www.suaramerdeka.com/news/indeks/all");
} elseif($q=="Tirto"){
  $url=("https://tirto.id/indeks");
} elseif($q=="Tribun"){
  $url=("http://www.tribunnews.com/nasional/pendidikan");
} elseif($q=="Vivanews"){
  $url=("http://www.viva.co.id/berita/nasional");
} elseif($q=="TVOne"){
  $url=("http://iptek.tvone.co.id/rss/news/");
} elseif($q=="Antara"){
  $url=("https://www.antaranews.com/nasional/umum/");
} elseif($q=="VOA"){
  $url=("https://www.voaindonesia.com/z/299?p=3");
} elseif($q=="BeritaSatu"){
  $url=("http://www.beritasatu.com/newsindex?indate");
} elseif($q=="Bisnis.com"){
  $url=("http://www.bisnis.com/index");
} elseif($q=="JawaPos"){
  $url=("https://www.jawapos.com/berita-hari-ini");
} elseif($q=="Okezone"){
  $url=("https://news.okezone.com/indeks/$date");
} elseif($q=="Tempo"){
  $url=("https://www.tempo.co/indeks/$date/nasional");
} elseif($q=="Kabar24"){

} elseif($q=="SinarHarapan"){

} elseif($q=="Beritagar"){
  $url=("https://beritagar.id/cari?search=");
} elseif($q=="Kumparan"){

} elseif($q=="Rmol.co"){
  $url=("http://rmol.co/indeksberita.php?pickdate");
} elseif($q=="JPNN"){
  $url=("https://www.jpnn.com/indeks?id=215&d=$tgl&m=$bln&y=$thn&tab=all");
} elseif($q=="PojokSatu"){
  $url=("http://pojoksatu.id/$date");
} elseif($q=="RRI"){
  $url=("");
}
elseif($q=="AntaraJateng"){
  $url=("https://jateng.antaranews.com/terkini");
}
elseif($q=="AntaraJabar"){
  $url=("https://jabar.antaranews.com/terkini");
}
elseif($q=="AntaraJogja"){
  $url=("https://jogja.antaranews.com/terkini");
}
elseif($q=="AntaraBali"){
  $url=("https://bali.antaranews.com/terkini");
}
elseif($q=="AntaraJatim"){
  $url=("https://jatim.antaranews.com/terkini");
}
elseif($q=="AntaraMegapolitan"){
  $url=("https://megapolitan.antaranews.com/terkini");
}
elseif($q=="AntaraMataram"){
  $url=("https://mataram.antaranews.com/terkini");
}
elseif($q=="AntaraGorontalo"){
  $url=("https://gorontalo.antaranews.com/terkini");
}
elseif($q=="AntaraPapuabarat"){
  $url=("https://papuabarat.antaranews.com/terkini");
}
elseif($q=="AntaraSultra"){
  $url=("https://sultra.antaranews.com/terkini");
}
elseif($q=="AntaraSulut"){
  $url=("https://manado.antaranews.com/terkini");
}
elseif($q=="AntaraSulteng"){
  $url=("https://sulteng.antaranews.com/terkini");
}
elseif($q=="AntaraMakassar"){
  $url=("https://makassar.antaranews.com/terkini");
}
elseif($q=="AntaraAceh"){
  $url=("https://aceh.antaranews.com/terkini");
}
elseif($q=="AntaraBengkulu"){
  $url=("https://bengkulu.antaranews.com/terkini");
}
elseif($q=="AntaraKepri"){
  $url=("https://kepri.antaranews.com/terkini");
}
elseif($q=="AntaraBanten"){
  $url=("https://banten.antaranews.com/terkini");
}
elseif($q=="AntaraLampung"){
  $url=("https://lampung.antaranews.com/terkini");
}
elseif($q=="AntaraKalteng"){
  $url=("https://kalteng.antaranews.com/terkini");
}
elseif($q=="AntaraKaltim"){
  $url=("https://kaltim.antaranews.com/terkini");
}
elseif($q=="AntaraKalsel"){
  $url=("https://kalsel.antaranews.com/terkini");
}
elseif($q=="AntaraKalbar"){
  $url=("https://kalbar.antaranews.com/terkini");
}
elseif($q=="AntaraKalut"){
  $url=("https://kalut.antaranews.com/terkini");
}
elseif($q=="AntaraKupang"){
  $url=("https://kupang.antaranews.com/terkini");
}
elseif($q=="AntaraMaluku"){
  $url=("https://ambon.antaranews.com/terkini");
}
elseif($q=="AntaraBabel"){
  $url=("https://babel.antaranews.com/terkini");
}
elseif($q=="AntaraJambi"){
  $url=("https://jambi.antaranews.com/terkini");
}elseif($q=="TribunJabar"){
  $url=("http://jabar.tribunnews.com/index-news?date=$thn-$bln-$tgl&page");
}elseif($q=="TribunBogor"){
  $url=("http://bogor.tribunnews.com/index-news?date=$thn-$bln-$tgl&page");
}elseif($q=="TribunJogja"){
  $url=("http://jogja.tribunnews.com/index-news?date=$thn-$bln-$tgl&page");
}elseif($q=="TribunJateng"){
  $url=("http://jateng.tribunnews.com/index-news?date=$thn-$bln-$tgl&page");
}elseif($q=="TribunSolo"){
  $url=("http://solo.tribunnews.com/index-news?date=$thn-$bln-$tgl&page");
}elseif($q=="TribunSurabaya"){
  $url=("http://surabaya.tribunnews.com/index-news?date=$thn-$bln-$tgl&page");
}elseif($q=="TribunSuryamalang"){
  $url=("http://suryamalang.tribunnews.com/index-news?date=$thn-$bln-$tgl&page");
}elseif($q=="TribunBali"){
  $url=("http://bali.tribunnews.com/index-news?date=$thn-$bln-$tgl&page");
}elseif($q=="TribunAceh"){
  $url=("http://aceh.tribunnews.com/index-news?date=$thn-$bln-$tgl&page");
}elseif($q=="TribunMedan"){
  $url=("http://medan.tribunnews.com/index-news?date=$thn-$bln-$tgl&page");
}elseif($q=="TribunPekanbaru"){
  $url=("http://pekanbaru.tribunnews.com/index-news?date=$thn-$bln-$tgl&page");
}elseif($q=="TribunBatam"){
  $url=("http://batam.tribunnews.com/index-news?date=$thn-$bln-$tgl&page");
}elseif($q=="TribunJambi"){
  $url=("http://jambi.tribunnews.com/index-news?date=$thn-$bln-$tgl&page");
}elseif($q=="TribunPalembang"){
  $url=("http://palembang.tribunnews.com/index-news?date=$thn-$bln-$tgl&page");
}elseif($q=="TribunBangka"){
  $url=("http://bangka.tribunnews.com/index-news?date=$thn-$bln-$tgl&page");
}elseif($q=="TribunLampung"){
  $url=("http://lampung.tribunnews.com/index-news?date=$thn-$bln-$tgl&page");
}


$kata_kunci = array(
  "menristekdikti",
  "pendidikan",
  "dikti",
  "mahasiswa",
  "pelantikan",
  "rektor",
  "iptek",
  "riset",
  "kemristek",
  "teknologi",
  "kopertis",
  "institut",
  "universitas",
  "akademi",
  "permenristekdikti",
  "pdpt",
  "pusdatin",
  "kemristekdikti",
  "ristek",
  "boptn",
  "ppid",
  "lakip",
  "inovasi",
  "perguruan",
  "science",
  "sains",
  "kkni",
  "ppgt",
  "ukt",
  "siswa",
  "kurikulum",
  "dosen",
  "institut",
  "politeknik",
  "dirn",
  "aipi",
  "bppt",
  "lipi",
  "lapan",
  "batan",
  "bapeten",
  "aptisi",
  "ban-pt",
  "cpns",
  "plagiarisme"
);

function strposa($haystack, $needles=array(), $offset=0) {
  $chr = array();
  foreach($needles as $needle) {
    $res = strpos($haystack, $needle);
    if ($res !== false) $chr[$needle] = $res;
  }
  if(empty($chr)) return false;
  return min($chr);
}

include("simple_html_dom.php");
if($q == "PR"){
  $jml_page = 2;
    $jml=0;
  for($i=0;$i<=$jml_page;$i++){

    $target_url = "$url?page=$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('h2.entry-title') as $link){
      $titletolower= strtolower($link);
      if(strposa($titletolower, $kata_kunci, 0)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q == "Antara"){
  $jml_page = 2;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = $url.$i;
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('h3.entry-title td-module-title') as $link){
      $titletolower= strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q == "Balipost"){
  $jml_page = 2;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/page/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('h3 a') as $link){
      $titletolower= strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q == "CNN"){
  $jml_page = 4;
  $jml=0;
  $target_url = $url;
  $html = new simple_html_dom();
  $html->load_file($target_url);
  foreach($html->find('article a') as $link){
    $titletolower= strtolower($link);
    if(strposa($titletolower, $kata_kunci, 1)) {
      echo $link."<br/>";
      $jml++;
    }
  }
}else if($q == "Detik"){
  $jml_page = 4;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article a') as $link){
      $titletolower= strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q == "Kompas.id"){
  $jml_page = 4;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/page/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('h2.article-headline a') as $link){
      $titletolower= strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q == "Republika"){
  // $jml_page = 3;
  // for($i=1;$i<=$jml_page;$i++){
  $jml=0;
  $target_url = "$url";
  $html = new simple_html_dom();
  $html->load_file($target_url);
  foreach($html->find('div.jdl-ct-a a') as $link){
    $titletolower= strtolower($link);
    if(strposa($titletolower, $kata_kunci, 1)) {
      echo $link."<br/>";
      $jml++;
    }
  }
  // }
}else if($q == "SM"){
  $jml_page = 3;
  $jml=0;
  for($i=0;$i<=$jml_page;$i++){
    $tgl = date('Y-m-d');
    $indeks = $i*15;
    $target_url = "$url/$tgl/$indeks";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('figcaption.news-caption a') as $link){
      $titletolower= strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q == "Tirto"){
  $jml_page = 4;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('h4.media-heading a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 0)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q == "Tribun"){
  // $jml_page = 3;
  // for($i=1;$i<=$jml_page;$i++){
  $jml=0;
  $target_url = "$url";
  $html = new simple_html_dom();
  $html->load_file($target_url);
  foreach($html->find('div.mr140 a') as $link){
    $titletolower= strtolower($link);
    if(strposa($titletolower, $kata_kunci, 1)) {
      echo $link."<br/>";
      $jml++;
    }
  }
  // }
}else if($q == "Vivanews"){
  $jml=0;
  $target_url = "$url";
  $html = new simple_html_dom();
  $html->load_file($target_url);
  foreach($html->find('div.content_center a.title-content') as $link){
    $titletolower= strtolower($link);
    if(strposa($titletolower, $kata_kunci, 1)) {
      echo $link."<br/>";
      $jml++;
    }
  }
}else if($q == "VOA"){
  $jml=0;
  $target_url = "$url";
  $html = new simple_html_dom();
  $html->load_file($target_url);
  foreach($html->find('div.content a') as $link){
    $titletolower= strtolower($link);
    if(strposa($titletolower, $kata_kunci, 1)) {
      echo "<a href='http://voaindonesia.com/$link->href'>".$link->plaintext."<br/></a>";
      $jml++;
    }
  }
}else if($q == "JawaPos"){
  $jml=0;
  $jml_page = 15;
  for($i=1;$i<=$jml_page;$i++){
    $target_url = "$url?page=$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('div.content a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo "<a href=$link->href>".$link->plaintext."<br/></a>";
        $jml++;
      }

    }
  }
}else if($q=="Kompas.com"){
  $jml=0;
  $jml_page = 5;
  for($i=1;$i<=$jml_page;$i++){
    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('h3.article__title a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }

    }
  }
}else if($q=="Okezone"){
  $jml_page = 12;
  $jml=0;
  for($i=0;$i<=$jml_page;$i++){
    $j=$i*10;
    $target_url = "$url/$j";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('h4.f17 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
      // echo $link."<br>";

    }
  }
}else if($q=="BeritaSatu"){
  $jml_page = 3;
  $jml=0;
  $date = date('Y-m-d');
  // for($i=0;$i<=$jml_page;$i++){
  // $j=$i*10;
  $target_url = "$url=$date";
  $html = new simple_html_dom();
  $html->load_file($target_url);
  foreach($html->find('div.content a') as $link){
    $titletolower=strtolower($link);
    if(strposa($titletolower, $kata_kunci, 1)) {
      echo "<a href=$link->href>$link->title<br/></a>";
      $jml++;
    }
    // echo $link."<br>";

  }
  // }
}else if($q=="Bisnis.com"){
  // $jml_page = 3;
  // for($i=0;$i<=$jml_page;$i++){
  // $j=$i*10;
  $jml=0;
  $target_url = "$url";
  $html = new simple_html_dom();
  $html->load_file($target_url);
  foreach($html->find('div.col-sm-7 h2 a') as $link){
    $titletolower=strtolower($link);
    if(strposa($titletolower, $kata_kunci, 1)) {
      echo $link."<br/>";
      $jml++;
    }
    // echo $link."<br>";

  }
  // }
}else if($q=="Tempo"){
  // $jml_page = 3;
  // for($i=0;$i<=$jml_page;$i++){
  // $j=$i*10;
  $jml=0;
  $target_url = "$url";
  $html = new simple_html_dom();
  $html->load_file($target_url);
  foreach($html->find('div.wrapper a') as $link){
    $titletolower=strtolower($link);
    if(strposa($titletolower, $kata_kunci, 1)) {
      echo $link."<br/>";
      $jml++;
    }
    // echo $link."<br>";

  }
  // }
}else if($q=="Beritagar"){
  $jml_page = 3;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){
    // $j=$i*10;
    $target_url = "$url&page=$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('div.article-title a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }

    }
  }
}else if($q=="Rmol.co"){
  $jml_page = 3;
  $jml=0;
  $date=date('Y-m-d');
  for($i=1;$i<=$jml_page;$i++){
    // $j=$i*10;
    $target_url = "$url=$date&page=$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('div.title a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="JPNN"){
  $jml=0;
  $target_url = "$url";
  $html = new simple_html_dom();
  $html->load_file($target_url);
  foreach($html->find('ul.loadmore a') as $link){
    $titletolower=strtolower($link);
    if(strposa($titletolower, $kata_kunci, 1)) {
      echo $link."<br/>";
      $jml++;
    }
  }
}else if($q=="PojokSatu"){
  $jml_page = 5;
  $jml=0;
  for($i=0;$i<$jml_page;$i++){

    $target_url = "$url/page/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('h2.title a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="RRI"){
  $jml=0;
  $target_url = "$url";
  $html = new simple_html_dom();
  $html->load_file($target_url);
  foreach($html->find('ul.article-array a') as $link){
    $titletolower=strtolower($link);
    if(strposa($titletolower, $kata_kunci, 1)) {
      echo $link."<br/>";
      $jml++;
    }
  }
}else if($q=="AntaraJateng"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article.simple-post h3 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="AntaraJabar"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article.simple-post h3 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="AntaraJogja"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article.simple-post h3 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="AntaraBali"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article.simple-post h3 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="AntaraJatim"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article.simple-post h3 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="AntaraMegapolitan"){
  $jml_page = 5;
  $jml=0;
  for($i=0;$i<$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article.simple-post h3 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="AntaraMataram"){
  $jml_page = 5;
  $jml=0;
  for($i=0;$i<$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article.simple-post h3 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="AntaraGorontalo"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article.simple-post h3 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="AntaraPapuabarat"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article.simple-post h3 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="AntaraSultra"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article.simple-post h3 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="AntaraSulut"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article.simple-post h3 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="AntaraSulteng"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article.simple-post h3 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="AntaraMakassar"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article.simple-post h3 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="AntaraAceh"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article.simple-post h3 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="AntaraKepri"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article.simple-post h3 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="AntaraBanten"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article.simple-post h3 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="AntaraKalteng"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article.simple-post h3 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="AntaraKaltim"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article.simple-post h3 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="AntaraKalsel"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article.simple-post h3 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="AntaraKalbar"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article.simple-post h3 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="AntaraKalut"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article.simple-post h3 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="AntaraKupang"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article.simple-post h3 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="AntaraMaluku"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article.simple-post h3 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="AntaraBabel"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article.simple-post h3 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="AntaraJambi"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url/$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('article.simple-post h3 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="TribunJabar"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url=$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('h3.f16 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="TribunBogor"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url=$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('h3.f16 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="TribunJogja"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url=$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('h3.f16 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="TribunJateng"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url=$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('h3.f16 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="TribunSolo"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url=$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('h3.f16 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="TribunSurabaya"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url=$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('h3.f16 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="TribunSuryamalang"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url=$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('h3.f16 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="TribunBali"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url=$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('h3.f16 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="TribunAceh"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url=$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('h3.f16 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="TribunMedan"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url=$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('h3.f16 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="TribunPekanbaru"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url=$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('h3.f16 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="TribunBatam"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url=$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('h3.f16 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="TribunJambi"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url=$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('h3.f16 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="TribunPalembang"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url=$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('h3.f16 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="TribunBangka"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url=$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('h3.f16 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}else if($q=="TribunLampung"){
  $jml_page = 5;
  $jml=0;
  for($i=1;$i<=$jml_page;$i++){

    $target_url = "$url=$i";
    $html = new simple_html_dom();
    $html->load_file($target_url);
    foreach($html->find('h3.f16 a') as $link){
      $titletolower=strtolower($link);
      if(strposa($titletolower, $kata_kunci, 1)) {
        echo $link."<br/>";
        $jml++;
      }
    }
  }
}


if($jml==0){
  echo "<h3>Belum ada berita di $q</h3>";
}


?>
