<?php

namespace App\Controllers;

class Home extends BaseController
{
	/**
	 * index.
	 *
	 * @author	Azmi Adhani
	 * @since	v0.0.1
	 * @version	v1.0.0	Wednesday, September 2nd, 2020.
	 * @access	public
	 * @return	mixed
	 */
	public function index()
	{
		return view('welcome_message');
	}

	public function view($page = 'home')
	{
		if (!is_file(APPPATH . '/Views/pages/' . $page . '.php')) {
			// Whoops, we don't have a page for that!
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter

		echo view('templates/header', $data);
		echo view('pages/' . $page, $data);
		echo view('templates/footer', $data);
	}

	public function get_data_peserta()
	{
		$data_peserta = array(
			'pesertaNIM' => '1611016110005',
			'pesertaNama' => 'Azmi',
		);
		$data = array(
			'data_peserta' => $data_peserta
		);
		// return view('home', $data);
		dd($data);
	}

	//--------------------------------------------------------------------

}
