<?php
//get the q parameter from URL
$q=$_GET["q"];

//find out which feed was selected
if($q=='Balipost'){
  $xml=("http://www.balipost.com/feed");
} elseif($q=="CNN") {
  $xml=("http://www.cnnindonesia.com/rss");
} elseif($q=="Detik") {
  $xml=("http://rss.detik.com/index.php/detikcom");
} elseif($q=="Kompas"){
  $xml=("http://www.kompas.com/getrss/nasional");
} elseif($q=="Liputan6"){
  $xml=("http://www.liputan6.com/rss");
} elseif($q=="PR"){
  $xml=("http://www.pikiran-rakyat.com/rss.xml");
} elseif($q=="Republika"){
  $xml=("http://www.republika.co.id/rss/pendidikan/");
} elseif($q=="SM"){
  $xml=("http://suaramerdeka.com/rsssm/");
} elseif($q=="Tirto"){
  $xml=("https://tirto.id/rss/pendidikan");
} elseif($q=="Tribun"){
  $xml=("http://tribunnews.com/rss");
} elseif($q=="Vivanews"){
  $xml=("http://rss.vivanews.com/get/teknologi");
} elseif($q=="TVOne"){
  $xml=("http://iptek.tvone.co.id/rss/news/");
} elseif($q=="Antara"){
  $xml=("http://www.antaranews.com/rss/tek.xml");
} elseif($q=="VOA"){
  $xml=("https://www.voaindonesia.com/api/zr-qoeuyoi");
}
$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);

//get elements from "<channel>"
$channel=$xmlDoc->getElementsByTagName('channel')->item(0);
$channel_title = $channel->getElementsByTagName('title')
->item(0)->childNodes->item(0)->nodeValue;
$channel_link = $channel->getElementsByTagName('link')
->item(0)->childNodes->item(0)->nodeValue;
// $channel_desc = $channel->getElementsByTagName('description')
// ->item(0)->childNodes->item(0)->nodeValue;

//output elements from "<channel>"
echo("<p><a href='" . $channel_link
  . "'>" . $channel_title . "</a>");
echo("<br>");
// echo($channel_desc . "</p>");

//get and output "<item>" elements
$x=$xmlDoc->getElementsByTagName('item');
function strposa($haystack, $needles=array(), $offset=0) {
        $chr = array();
        foreach($needles as $needle) {
                $res = strpos($haystack, $needle, $offset);
                if ($res !== false) $chr[$needle] = $res;
        }
        if(empty($chr)) return false;
        return min($chr);
}

$array = array(
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
for ($i=0; $i<=8; $i++) {
  $item_title=$x->item($i)->getElementsByTagName('title')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_link=$x->item($i)->getElementsByTagName('link')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_desc=$x->item($i)->getElementsByTagName('description')
  ->item(0)->childNodes->item(0)->nodeValue;



  echo "<table style='background=transparent;'>";
  $titletolower= strtolower($item_title);
  if (strposa($titletolower, $array, 1)) {
    echo "<tr>";
  echo "<td>";
  echo ("<p><a href='" . $item_link  . "'>" . $item_title . "</a>");
  echo "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>";
  echo ($item_desc . "</p>");
  echo "</td>";
  echo "</tr>";
	}

}
?>
