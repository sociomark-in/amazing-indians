<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "controllers/base/BaseController.php";
class MainController extends BaseController
{
	public $error;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data/CategoriesModel');
		$this->error = [];
	}
	public function index()
	{
		$this->data['page']['title'] = "Home" . " • " . APP_NAME;
		$this->data['page']['articles'] = [
			[
				'name' => "Meet the pandemic’s hero: Soumitra Mandal",
				'url' => "https://www.timesnownews.com/india/meet-the-pandemics-hero-soumitra-mandal-article-111924962",
				'category' => "COVID 19 heroes",
				'author' => "Soumitra Mandal",
				'thumb' => "https://static.tnn.in/thumb/msid-111929026,thumbsize-29138,width-1280,height-720,resizemode-75/111929026.jpg?quality=100",
			],
			[
				'name' => "Meet Abhisek Ray: The music composer who spent his savings to create a wildlife reserve",
				'url' => "https://www.timesnownews.com/india/meet-abhisek-ray-the-music-composer-who-spent-his-savings-to-create-a-wildlife-reserve-article-111925825",
				'category' => "Animal Welfare",
				'author' => "Abhisek Ray",
				'thumb' => "https://static.tnn.in/thumb/msid-111928070,thumbsize-102702,width-1280,height-720,resizemode-75/111928070.jpg?quality=100",
			],
			[
				'name' => "Odisha conservationist has ignited a movement that reverberates far beyond shorelines",
				'url' => "https://www.timesnownews.com/india/odisha-conservationist-has-ignited-a-movement-that-reverberates-far-beyond-shorelines-article-111931546",
				'category' => "Environment",
				'author' => "Soumya Ranjan Biswal",
				'thumb' => "https://static.tnn.in/thumb/msid-111931936,thumbsize-5796,width-1280,height-720,resizemode-75/111931936.jpg?quality=100",
			],
			[
				'name' => "From Film Set to Community Hero: Revathi's Journey of Empowerment in Tsunami hit Nagapattinam",
				'url' => "https://www.timesnownews.com/india/from-film-set-to-community-hero-revathis-journey-of-empowerment-in-tsunami-hit-nagapattinam-article-111929748",
				'category' => "Education",
				'author' => "R Revathi",
				'thumb' => "https://static.tnn.in/thumb/msid-111929748,thumbsize-40024,width-1280,height-720,resizemode-75/111929748.jpg?quality=100",
			],
			[
				'name' => "Jyotiben Tank Honored for transforming Organic Agriculture",
				'url' => "https://www.timesnownews.com/india/jyotiben-tank-honored-for-transforming-organic-agriculture-article-111932301",
				'category' => "Food Management and Nutrition",
				'author' => "Jyotiben Jitendrabhai Tank",
				'thumb' => "https://static.tnn.in/thumb/msid-111932357,thumbsize-17376,width-1280,height-720,resizemode-75/111932357.jpg?quality=100",
			],
		];
		$this->data['page']['quotes'] = [
			'Anand-Kumar.jpg',
			'Dr.-S-Rangarajan.jpg',
			'Dr-Priti-Adani.jpg',
			'General-M.M.-Naravane.jpg',
			'Mr.-Nambi-Narayan.jpg',
			'Ms.-Sonali-Bendre.jpg',
			'Ms.-Upasana-Kamineni.jpg',
			'Prasoon-Joshi.jpg',
			'Ritesh-Agarwal-.jpg',
			'Sonam-Wangchuck.jpg',
			'Ustad-Amjad-Ali-Khan.jpg',
		];
		$this->data['page']['categories'] = json_decode($this->CategoriesModel->get(), true);
		$this->load->main_view('index', $this->data);
	}
}
