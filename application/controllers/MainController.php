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
				'thumb' => "https://static.tnn.in/thumb/msid-111932301,thumbsize-17376,width-1280,height-720,resizemode-75/111932301.jpg?quality=100",
			],
			[
				'name' => "Meet Ajeet Singh: A revolutionary transforming the lives of sex trafficking victims in India",
				'url' => "https://www.timesnownews.com/india/meet-ajeet-singh-a-revolutionary-transforming-the-lives-of-sex-trafficking-victims-in-india-article-111948075",
				'category' => "Girl Child and Women's empowerment",
				'author' => "Ajeet Singh",
				'thumb' => "https://static.tnn.in/thumb/msid-111948075,thumbsize-17376,width-1280,height-720,resizemode-75/111948075.jpg?quality=100",
			],
			[
				'name' => "Medicine Baba Honored with Times Now Amazing Indians Award 2022 for Healthcare Contribution",
				'url' => "https://www.timesnownews.com/india/medicine-baba-honored-with-times-now-amazing-indians-award-2022-for-healthcare-contribution-article-111949323",
				'category' => "Healthcare and Medical Assessment",
				'author' => "Omkar Nath",
				'thumb' => "https://static.tnn.in/thumb/msid-111949323,thumbsize-17376,width-1280,height-720,resizemode-75/111949323.jpg?quality=100",
			],
			[
				'name' => "Dive into Fedrick Pariath's journey, as he continues to fight against pollution",
				'url' => "https://www.timesnownews.com/india/dive-into-fedrick-pariaths-journey-as-he-continues-to-fight-against-pollution-article-111950737",
				'category' => "Pollution",
				'author' => "Fredrick Pariath",
				'thumb' => "https://static.tnn.in/thumb/msid-111950737,thumbsize-17376,width-1280,height-720,resizemode-75/111950737.jpg?quality=100",
			],
			[
				'name' => "CHIP: Revolutionizing Rural Healthcare in India",
				'url' => "https://www.timesnownews.com/india/chip-revolutionizing-rural-healthcare-in-india-article-111953906",
				'category' => "Rural Developemnt",
				'author' => "Mohammed Shahnawaz",
				'thumb' => "https://static.tnn.in/thumb/msid-111953906,thumbsize-17376,width-1280,height-720,resizemode-75/111953906.jpg?quality=100",
			],
			[
				'name' => "A Hero Among Us: Pramod Kulkarni and His Journey of Compassion",
				'url' => "https://www.timesnownews.com/india/a-hero-among-us-pramod-kulkarni-and-his-journey-of-compassion-article-111954745",
				'category' => "Shelter Management",
				'author' => "Pramod Kulkarni",
				'thumb' => "https://static.tnn.in/thumb/msid-111954745,thumbsize-17376,width-1280,height-720,resizemode-75/111954745.jpg?quality=100",
			],
			// [
			// 	'name' => "",
			// 	'url' => "",
			// 	'category' => "",
			// 	'author' => "",
			// 	'thumb' => "",
			// ],
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
