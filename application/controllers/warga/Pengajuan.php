<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends MY_Controller
{
	function __construct()
	{
		$this->_accessable = TRUE;
		parent::__construct();

		$this->load->helper(array('dump', 'form'));
		$this->load->library(array('form_validation'));
		$this->load->model(array('surat_m', 'organisasi_m', 'penduduk_m', 'keluarga_m'));
	}

	public function blankoktp()
	{
		$data['anggotas'] = $this->keluarga_m
		->with_penduduk('fields:nama')
		->with_detailKK(array(
			'fields' => 'nik',
			'with' => array(
				'relation' => 'penduduk',
				'fields' => 'nama'
				)
			))
		->where(array(
			'nik' => $this->ion_auth->get_current_nik(),
			'id_organisasi' => $this->ion_auth->get_current_id_org()
			))
		->fields('nik')
		->get();

		$this->generateCsrf();
		$this->render('warga/pengajuan/pengajuan_ktp', $data);
	}

	public function blankoktp_simpan()
	{
		$data = $this->input->post();
		$data['nik'] = str_replace(' ', '', substr($data['nik'], 0, strpos($data['nik'], '|')));
		$data_insert = array(
			"id_organisasi" => $this->ion_auth->get_current_id_org(),
			"jenis" => "0",
			);

		$insert = $this->surat_m->insert(array_merge($data, $data_insert));

		if($insert === FALSE){   
			$this->message('Berhasil mengajukan surat blanko ktp', 'success');
		}else{
			$this->message('Gagal mengajukan surat blanko ktp', 'danger');
		}
		$this->go('warga/surat');
	}

	public function keterangan_miskin()
	{
		$data['anggotas'] = $this->keluarga_m
		->with_penduduk('fields:nama')
		->with_detailKK(array(
			'fields' => 'nik',
			'with' => array(
				'relation' => 'penduduk',
				'fields' => 'nama'
				)
			))
		->where(array(
			'nik' => $this->ion_auth->get_current_nik(),
			'id_organisasi' => $this->ion_auth->get_current_id_org()
			))
		->fields('nik')
		->get();

		$this->generateCsrf();
		$this->render('warga/pengajuan/pengajuan_keterangan_miskin', $data);
	}

	public function keterangan_miskin_simpan()
	{
		$data = $this->input->post();
		$data['nik'] = str_replace(' ', '', substr($data['nik'], 0, strpos($data['nik'], '|')));
		$data_insert = array(
			"id_organisasi" => $this->ion_auth->get_current_id_org(),
			"jenis" => "2",
			);

		$insert = $this->surat_m->insert(array_merge($data, $data_insert));

		if($insert === FALSE){   
			$this->message('Berhasil mengajukan surat blanko ktp', 'success');
		}else{
			$this->message('Gagal mengajukan surat blanko ktp', 'danger');
		}
		$this->go('warga/surat');
	}
}