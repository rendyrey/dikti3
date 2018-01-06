<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_grafik extends CI_Model {



	public function __construct()
	{
		parent::__construct();

	}

	function get_count_tone_berita(){
		$this->db->select('id_isi_berita,id_media,tone_berita,tone_judul,tone_kutipan,count(tone_berita) as jml_tone');
		$this->db->group_by('tone_berita');
		$this->db->order_by('jml_tone', 'desc');
		return $this->db->get('isi_berita');
	}

	function get_count_tone_berita_by($tgl_awal,$tgl_akhir){
		$this->db->select('id_isi_berita,id_media,tone_berita,tone_judul,tone_kutipan,count(tone_berita) as jml_tone');
		$this->db->where('tgl_berita >=', $tgl_awal);
		$this->db->where('tgl_berita <=', $tgl_akhir);
		$this->db->group_by('tone_berita');
		$this->db->order_by('jml_tone', 'desc');
		return $this->db->get('isi_berita');
	}

	function get_count_tone_judul_by($tgl_awal,$tgl_akhir){
		$this->db->select('id_isi_berita,id_media,tone_berita,tone_judul,tone_kutipan,count(tone_judul) as jml_tone');
		$this->db->where('tgl_berita >=', $tgl_awal);
		$this->db->where('tgl_berita <=', $tgl_akhir);
		$this->db->group_by('tone_judul');
		$this->db->order_by('jml_tone', 'desc');
		return $this->db->get('isi_berita');
	}

	function get_count_tone_kutipan_by($tgl_awal,$tgl_akhir){
		$this->db->select('id_isi_berita,id_media,tone_berita,tone_judul,tone_kutipan,count(tone_kutipan) as jml_tone');
		$this->db->where('tgl_berita >=', $tgl_awal);
		$this->db->where('tgl_berita <=', $tgl_akhir);
		$this->db->group_by('tone_kutipan');
		$this->db->order_by('jml_tone', 'desc');
		return $this->db->get('isi_berita');
	}

	function get_count_media_by($tgl_awal,$tgl_akhir){
		$this->db->select('id_isi_berita,id_media,tone_berita,tone_judul,tone_kutipan,count(id_media) as jml_media');
		$this->db->where('tgl_berita >=', $tgl_awal);
		$this->db->where('tgl_berita <=', $tgl_akhir);
		$this->db->group_by('id_media');
		$this->db->order_by('jml_media', 'desc');
		return $this->db->get('isi_berita');
	}



	////bagian untuk kronologi grafik

	function grafik_kronologi_berita($tgl_awal,$tgl_akhir){
		$this->db->select('id_isi_berita,id_media,tone_berita,tone_judul,tone_kutipan,LEFT(tgl_post,10) as tgl,count(tone_berita) as jml_tone');
		$this->db->where('tgl_berita >=', $tgl_awal);
		$this->db->where('tgl_berita <=', $tgl_akhir);
		$this->db->group_by('tone_berita');
		$this->db->group_by('tgl_berita');
		return $this->db->get('isi_berita');
	}





	//bagian untuk mendapatkan semua tanggal
	function get_jml_tanggal($tgl_awal,$tgl_akhir){
		$this->db->select('tgl_berita as tgl');
		$this->db->where('tgl_berita >=', $tgl_awal);
		$this->db->where('tgl_berita <=', $tgl_akhir);
		$this->db->group_by('tgl_berita');
		return $this->db->get('isi_berita');
	}

	function get_jml_tanggal_all(){
		$this->db->select('tgl_berita as tgl');
		$this->db->group_by('tgl_berita');
		return $this->db->get('isi_berita');
	}

	function get_jml_tone_berita_positif($tgl){
		$this->db->select('tone_berita,tone_judul,tone_kutipan,count(tone_berita) as jml_tone');
		$this->db->where('tone_berita',1);
		$this->db->where('tgl_berita',$tgl);
		return $this->db->get('isi_berita');
	}
	function get_jml_tone_berita_netral($tgl){
		$this->db->select('tone_berita,tone_judul,tone_kutipan,count(tone_berita) as jml_tone');
		$this->db->where('tone_berita',0);
		$this->db->where('tgl_berita',$tgl);
		return $this->db->get('isi_berita');
	}
	function get_jml_tone_berita_negatif($tgl){
		$this->db->select('tone_berita,tone_judul,tone_kutipan,count(tone_berita) as jml_tone');
		$this->db->where('tone_berita',-1);
		$this->db->where('tgl_berita',$tgl);
		return $this->db->get('isi_berita');
	}

	function get_jml_tone_judul_positif($tgl){
		$this->db->select('tone_berita,tone_judul,tone_kutipan,count(tone_judul) as jml_tone');
		$this->db->where('tone_judul',1);
		$this->db->where('tgl_berita',$tgl);
		return $this->db->get('isi_berita');
	}
	function get_jml_tone_judul_netral($tgl){
		$this->db->select('tone_berita,tone_judul,tone_kutipan,count(tone_judul) as jml_tone');
		$this->db->where('tone_judul',0);
		$this->db->where('tgl_berita',$tgl);
		return $this->db->get('isi_berita');
	}
	function get_jml_tone_judul_negatif($tgl){
		$this->db->select('tone_berita,tone_judul,tone_kutipan,count(tone_judul) as jml_tone');
		$this->db->where('tone_judul',-1);
		$this->db->where('tgl_berita',$tgl);
		return $this->db->get('isi_berita');
	}

	function get_jml_tone_kutipan_positif($tgl){
		$this->db->select('tone_berita,tone_judul,tone_kutipan,count(tone_kutipan) as jml_tone');
		$this->db->where('tone_kutipan',1);
		$this->db->where('tgl_berita',$tgl);
		return $this->db->get('isi_berita');
	}
	function get_jml_tone_kutipan_netral($tgl){
		$this->db->select('tone_berita,tone_judul,tone_kutipan,count(tone_kutipan) as jml_tone');
		$this->db->where('tone_kutipan',0);
		$this->db->where('tgl_berita',$tgl);
		return $this->db->get('isi_berita');
	}
	function get_jml_tone_kutipan_negatif($tgl){
		$this->db->select('tone_berita,tone_judul,tone_kutipan,count(tone_kutipan) as jml_tone');
		$this->db->where('tone_kutipan',-1);
		$this->db->where('tgl_berita',$tgl);
		return $this->db->get('isi_berita');
	}

	//untuk media

	function get_media($tgl,$id_media){
		$this->db->select('id_media,count(id_media) as jml_media');
		$this->db->where('tgl_berita',$tgl);
		$this->db->where('id_media',$id_media);
		return $this->db->get('isi_berita');
	}

	//untuk narasumber
	function get_count_narasumber_berita1($id_narasumber,$tgl_awal,$tgl_akhir){
		$this->db->select('*,count(isi_berita.id_narasumber) as jml_narasumber');
		$this->db->from('sub_narasumber,isi_berita');
		$this->db->where('sub_narasumber.id_sub_narasumber = isi_berita.id_narasumber');
		$this->db->where('sub_narasumber.id_narasumber', $id_narasumber);
		$this->db->where('tgl_berita >=',$tgl_awal);
		$this->db->where('tgl_berita <=',$tgl_akhir);
		return $this->db->get();
	}
	function get_count_narasumber_berita2($id_narasumber,$tgl_awal,$tgl_akhir){
		$this->db->select('*,count(isi_berita.id_narasumber2) as jml_narasumber');
		$this->db->from('sub_narasumber,isi_berita');
		$this->db->where('sub_narasumber.id_sub_narasumber = isi_berita.id_narasumber2');
		$this->db->where('sub_narasumber.id_narasumber', $id_narasumber);
		$this->db->where('tgl_berita >=',$tgl_awal);
		$this->db->where('tgl_berita <=',$tgl_akhir);
		return $this->db->get();
	}
	function get_count_narasumber_berita3($id_narasumber,$tgl_awal,$tgl_akhir){
		$this->db->select('*,count(isi_berita.id_narasumber3) as jml_narasumber');
		$this->db->from('sub_narasumber,isi_berita');
		$this->db->where('sub_narasumber.id_sub_narasumber = isi_berita.id_narasumber3');
		$this->db->where('sub_narasumber.id_narasumber', $id_narasumber);
		$this->db->where('tgl_berita >=',$tgl_awal);
		$this->db->where('tgl_berita <=',$tgl_akhir);
		return $this->db->get();
	}
	function get_count_narasumber_berita4($id_narasumber,$tgl_awal,$tgl_akhir){
		$this->db->select('*,count(isi_berita.id_narasumber4) as jml_narasumber');
		$this->db->from('sub_narasumber,isi_berita');
		$this->db->where('sub_narasumber.id_sub_narasumber = isi_berita.id_narasumber4');
		$this->db->where('sub_narasumber.id_narasumber', $id_narasumber);
		$this->db->where('tgl_berita >=',$tgl_awal);
		$this->db->where('tgl_berita <=',$tgl_akhir);
		return $this->db->get();
	}

	//untuk sub_narasumber
	function get_count_sub_narasumber_berita1($id_narasumber,$tgl_awal,$tgl_akhir){
		$this->db->select('*,count(isi_berita.id_narasumber) as jml_narasumber');
		$this->db->from('sub_narasumber,isi_berita');
		$this->db->where('sub_narasumber.id_sub_narasumber = isi_berita.id_narasumber');
		$this->db->where('sub_narasumber.id_sub_narasumber', $id_narasumber);
		$this->db->where('tgl_berita >=',$tgl_awal);
		$this->db->where('tgl_berita <=',$tgl_akhir);
		return $this->db->get();
	}
	function get_count_sub_narasumber_berita2($id_narasumber,$tgl_awal,$tgl_akhir){
		$this->db->select('*,count(isi_berita.id_narasumber2) as jml_narasumber');
		$this->db->from('sub_narasumber,isi_berita');
		$this->db->where('sub_narasumber.id_sub_narasumber = isi_berita.id_narasumber2');
		$this->db->where('sub_narasumber.id_sub_narasumber', $id_narasumber);
		$this->db->where('tgl_berita >=',$tgl_awal);
		$this->db->where('tgl_berita <=',$tgl_akhir);
		return $this->db->get();
	}
	function get_count_sub_narasumber_berita3($id_narasumber,$tgl_awal,$tgl_akhir){
		$this->db->select('*,count(isi_berita.id_narasumber3) as jml_narasumber');
		$this->db->from('sub_narasumber,isi_berita');
		$this->db->where('sub_narasumber.id_sub_narasumber = isi_berita.id_narasumber3');
		$this->db->where('sub_narasumber.id_sub_narasumber', $id_narasumber);
		$this->db->where('tgl_berita >=',$tgl_awal);
		$this->db->where('tgl_berita <=',$tgl_akhir);
		return $this->db->get();
	}
	function get_count_sub_narasumber_berita4($id_narasumber,$tgl_awal,$tgl_akhir){
		$this->db->select('*,count(isi_berita.id_narasumber4) as jml_narasumber');
		$this->db->from('sub_narasumber,isi_berita');
		$this->db->where('sub_narasumber.id_sub_narasumber = isi_berita.id_narasumber4');
		$this->db->where('sub_narasumber.id_sub_narasumber', $id_narasumber);
		$this->db->where('tgl_berita >=',$tgl_awal);
		$this->db->where('tgl_berita <=',$tgl_akhir);
		return $this->db->get();
	}

	function get_all_narasumber(){
		$this->db->select('*');
		$this->db->order_by('id_narasumber', 'asc');
		return $this->db->get('narasumber');
	}

	function get_all_narasumber_int(){
		$this->db->select('*');
		$this->db->order_by('id_sub_narasumber','asc');
		$this->db->where("id_narasumber != 'NS008'");
		return $this->db->get('sub_narasumber');

	}

	function get_all_narasumber_eks(){
		$this->db->select('*');
		$this->db->order_by('id_sub_narasumber','asc');
		$this->db->where("id_narasumber = 'NS008'");
		return $this->db->get('sub_narasumber');

	}

	function get_sub_narasumber(){
		return $this->db->get('sub_narasumber');
	}

	///untuk tema

	function get_all_topik(){
		$this->db->select('*');
		$this->db->order_by('id_berita', 'asc');
		return $this->db->get('topik_berita');
	}

	function get_count_topik_berita($id_berita,$tgl_awal,$tgl_akhir){
		$this->db->select('*,count(isi_berita.id_berita) as jml_topik');
		$this->db->from('topik_berita,isi_berita');
		$this->db->where('topik_berita.id_berita = isi_berita.id_berita');
		$this->db->where('isi_berita.id_berita', $id_berita);
		$this->db->where('tgl_berita >=',$tgl_awal);
		$this->db->where('tgl_berita <=',$tgl_akhir);
		return $this->db->get();
	}

	function get_topik($tgl,$id_berita){
		$this->db->select('topik_berita.topik_berita as topik_berita, count(isi_berita.id_berita) as jml_topik');
		$this->db->where('isi_berita.tgl_berita',$tgl);
		$this->db->where('isi_berita.id_berita',$id_berita);
		$this->db->where('isi_berita.id_berita = topik_berita.id_berita');
		return $this->db->get('isi_berita,topik_berita');
	}

	function get_sub_topik($tgl,$id_sub_topik){
		$this->db->select('sub_topik_berita.nama_sub_topik as sub_topik, count(isi_berita.id_berita) as jml_sub_topik');
		$this->db->where('isi_berita.tgl_berita',$tgl);
		$this->db->where('isi_berita.id_sub_topik',$id_sub_topik);
		$this->db->where('isi_berita.id_sub_topik = sub_topik_berita.id_sub_topik');
		return $this->db->get('isi_berita,sub_topik_berita');
	}

	function get_all_sub_topik(){
		return $this->db->get('sub_topik_berita');
	}

	function get_count_sub_topik($id_sub_topik,$tgl_awal,$tgl_akhir){
		$this->db->select('*,count(isi_berita.id_sub_topik) as jml_sub_topik');
		$this->db->from('sub_topik_berita,isi_berita');
		$this->db->where('sub_topik_berita.id_sub_topik = isi_berita.id_sub_topik');
		$this->db->where('isi_berita.id_sub_topik', $id_sub_topik);
		$this->db->where('tgl_berita >=',$tgl_awal);
		$this->db->where('tgl_berita <=',$tgl_akhir);
		return $this->db->get();
	}


	//untuk kronologi narasumber berita

	function get_jml_narasumber_by($tgl,$id_narasumber){
		$this->db->select('*,count(isi_berita.id_narasumber) as jml_narasumber');
		$this->db->where('tgl_berita',$tgl);
		$this->db->where('sub_narasumber.id_sub_narasumber = isi_berita.id_narasumber');
		$this->db->where('sub_narasumber.id_narasumber',$id_narasumber);
		return $this->db->get('isi_berita,sub_narasumber');
	}


	//untuk jenis Berita

	function get_jenis_berita($tgl_awal,$tgl_akhir){
		$this->db->select('*,count(jenis_berita) as jml_jenis_berita');
		$this->db->where('jenis_berita IS NOT NULL');
		$this->db->where('tgl_berita >=', $tgl_awal);
		$this->db->where('tgl_berita <=', $tgl_akhir);
		$this->db->group_by('jenis_berita');
		return $this->db->get('isi_berita');
	}








}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */
