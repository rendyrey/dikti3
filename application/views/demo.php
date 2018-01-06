<?php
if (PHP_SAPI != 'cli') {
	echo "<pre>";
}

$strings = array(
	1 => 'Weather today is rubbish',
	2 => 'This cake looks amazing',
	3 => 'His skills are mediocre',
	4 => 'He is very talented',
	5 => 'She is seemingly very agressive',
	6 => 'Marie was enthusiastic about the upcoming trip. Her brother was also passionate about her leaving - he would finally have the house for himself.',
	7 => 'Kalau sekarang mereka dibayar berdasarkan gaji pokok saja. Padahal penerimaan gaji mereka adalah gapok (gaji pokok) plus tunjangan-tunjangan sehingga pada saat pensiun dia dihitung berdasarkan presentase gapoknya, nilainya begitu sangat kecil enggak memungkinkan mereka hidup normal," kata Sri Mulyani. Dia telah menginstruksikan kepada tim pejabat eselon I Kementerian Keuangan untuk melakukan evaluasi terkait dengan sistem pensiu',
);




// $load = base_url('tone/autoload.php');
require_once __DIR__ . '/../autoload.php';
// require_once $load;
// include($load);
// echo base_url('tone/autoload.php');
$sentiment = new \PHPInsight\Sentiment();
foreach ($strings as $string) {

	// calculations:
	$scores = $sentiment->score($string);
	$class = $sentiment->categorise($string);

	// output:
	echo "String: $string\n";
	echo "Dominant: $class, scores: ";
	print_r($scores);
	echo "\n";
}
