<?php

namespace App\Controllers;

use App\Models\Beranda_m;
use App\Libraries\Layout;

class Beranda extends BaseController
{
	protected $controller = "beranda";

	public function index()
	{
		$this->news();
	}

	public function news($slug = false)
	{
		$model = new Beranda_m();
		$layout = new Layout();

		$data['news'] = $model->getNews($slug);
		if (empty($data['news'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $slug);
		}
		$data['title'] = "Berita";
		$data['method'] = $this->controller . "/news";
		$data['slug'] = $slug;

		$layout->render('pages/beranda_v', $data);
	}

	//--------------------------------------------------------------------

}
