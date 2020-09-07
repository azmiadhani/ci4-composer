<?php

namespace App\Controllers;

use App\Models\Beranda_m;
use App\Libraries\Layout;

class Beranda extends BaseController
{
	protected $controller = "beranda";

	public function __construct()
	{
		$this->layout = new Layout();
	}

	public function index()
	{
		$this->news();
	}
	/**
	 * Undocumented function
	 *
	 * @param boolean $slug
	 * @return void
	 */
	public function news($slug = false)
	{
		$model = new Beranda_m();

		$data['news'] = $model->getNews($slug);
		if (empty($data['news'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $slug);
		}
		$data['title'] = "Berita";
		$data['method'] = $this->controller . "/news";
		$data['slug'] = $slug;

		$this->layout->frender('beranda/beranda_v', $data);
	}

	public function request_news($slug = false)
	{
		// $model = new Beranda_m();
		echo json_encode(array("test" => "1"));
		// echo json_encode($model->getNews($slug));
	}

	//--------------------------------------------------------------------

}
