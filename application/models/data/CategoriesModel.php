<?php
defined('BASEPATH') or exit('No direct script access allowed');
class CategoriesModel extends CI_Model
{
	private $table;
	public function __construct()
	{
		parent::__construct();
		$this->table['categories'] = "platform_data_categories";
	}

	public function get($select = null, $where = null)
	{
		/* if (!is_null($select)) {
			$this->db->select($select);
		}

		$this->db->where(['status' => 1]);
		if (!is_null($where)) {
			$this->db->where($where);
		} */

		$data = [
			[
				"id" => "0",
				"name" => "Girl Child & Women’s Rights Empowerment",
				"description" => "The category recognizes individuals dedicated to advancing the rights and empowerment of girls and women. This includes efforts to promote gender equality, provide access to education, healthcare, and economic opportunities, combat gender-based violence and discrimination, improving social stand of women in society and protecting/promoting birth of a girl child, nutritional care, overall development, etc.",
				"icon" => "GCWRE.png",
				"status" => "1",
				"created_at" => "2024-07-17 15:38:28"
			],
			[
				"id" => "1",
				"name" => "Food Management & Nutrition",
				"description" => "This category recognizes initiatives taken towards providing meals to the under privileged population, address food security, dietary education, community nutrition programs, hunger relief programs, efficient management of food resources, promotion of nutrition and healthy eating habits.",
				"icon" => "Food_Management_Nutrition.png",
				"status" => "1",
				"created_at" => "2024-07-17 15:38:28"
			],
			[
				"id" => "2",
				"name" => "Animal Welfare",
				"description" => "This category recognizes initiatives aimed at promoting the well-being and humane treatment of animals. This includes advocacy, rescue, rehabilitation, and education initiatives that protect animals from cruelty, neglect, and exploitation, providing essential veterinary services, first aid and emergency veterinary care, food, and water for free-roaming animals, etc.",
				"icon" => "Animal_Welfare.png",
				"status" => "1",
				"created_at" => "2024-07-17 15:38:28"
			],
			[
				"id" => "3",
				"name" => "Environment Sustainability",
				"description" => "The category recognizes individuals who have undertaken initiatives to address environmental challenges, promote sustainability, and mitigate the impacts of climate change. Initiatives may focus on renewable energy, waste management, conservation efforts, waster sanitation, sustainable agriculture, reducing pollution or any other innovative solution contributing to environmental sustainability.",
				"icon" => "Environment_Sustainability.png",
				"status" => "1",
				"created_at" => "2024-07-17 15:38:28"
			],
			[
				"id" => "4",
				"name" => "Agriculture",
				"description" => "This category recognizes individuals who have made significant contributions to advancing sustainable agriculture practices, promoting food security, and empowering rural communities. Initiatives may demonstrate innovation in agricultural techniques, advocated for policies that support smallholder farmers, or implemented initiatives that enhance agricultural productivity while preserving environmental sustainability.",
				"icon" => "Agriculture.png",
				"status" => "1",
				"created_at" => "2024-07-17 15:38:28"
			],
			[
				"id" => "5",
				"name" => "Sanitation and Water",
				"description" => "This category recognizes individuals who have made significant contributions towards improving access to clean water and sanitation facilities, particularly in under-served communities. Initiatives can include efforts to access safe clean drinking water, water distribution systems, improve sanitation infrastructure through construction of toilets, latrines, sewage systems, and waste management facilities promoting good hygiene practices within communities.",
				"icon" => "Sanitation_Water.png",
				"status" => "1",
				"created_at" => "2024-07-17 15:38:28"
			],
			[
				"id" => "6",
				"name" => "Rural Development",
				"description" => "This category recognizes exceptional efforts and innovative initiatives aimed at improving living conditions and quality of life in rural areas and urban slum. Initiatives may focus on addressing the unique challenges faced by these communities, through comprehensive approaches that include infrastructure development, access to essential services, economic empowerment, providing education, sanitation, healthcare facilities, etc.",
				"icon" => "Rural_Development.png",
				"status" => "1",
				"created_at" => "2024-07-17 15:38:28"
			],
			[
				"id" => "7",
				"name" => "Road Safety",
				"description" => "This category recognizes individuals who demonstrates significant contributions to promoting road safety and reducing the incidence of accidents and fatalities on the roads. Initiatives can include exemplary efforts in raising awareness, implementing effective road safety measures, influencing policy changes, or developing innovative solutions to address road safety challenges, filling potholes, etc.",
				"icon" => "Road_Safety.png",
				"status" => "1",
				"created_at" => "2024-07-17 15:38:28"
			],
			[
				"id" => "8",
				"name" => "Education",
				"description" => "This award recognizes individuals who have made extraordinary efforts to promote education and learning within their communities. These efforts may include, but are not limited to, creating and implementing innovative educational programs, leveraging technology to enhance learning, building or improving educational infrastructure, and providing exceptional support and mentorship to students.",
				"icon" => "Education.png",
				"status" => "1",
				"created_at" => "2024-07-17 15:38:28"
			],
			[
				"id" => "9",
				"name" => "Sports Enablers",
				"description" => "This award recognizes individuals who has gone above and beyond their call of duty to promote and encourage sports within their community. Someone who has significantly contributed to making sports accessible for all, fostering a culture of physical activity, teamwork, and healthy living. Individual may have created or supported programs, initiatives, or events that encourage participation in sports, provided mentorship and guidance to aspiring athletes, or advocated for sports development and resources in underserved areas.",
				"icon" => "Sports_Enablers.png",
				"status" => "1",
				"created_at" => "2024-07-17 15:38:28"
			],
			[
				"id" => "10",
				"name" => "Healthcare",
				"description" => "This award recognizes individuals who has demonstrated exceptional dedication and commitment to improving community health and wellness. This category honors those who have gone beyond their professional obligations to make a significant impact on public health through various initiatives, including community and clinical health programs, innovative use of technology, free distribution of medicines, and other health-related services.",
				"icon" => "Healthcare.png",
				"status" => "1",
				"created_at" => "2024-07-17 15:38:28"
			],
			[
				"id" => "11",
				"name" => "Social Innovation using Technology",
				"description" => "This award recognizes individuals who has demonstrated exceptional commitment and creativity in leveraging technology to drive positive social change. The recipient has gone beyond the call of duty to implement innovative solutions that address pressing community challenges, ensuring accessibility and inclusivity without any cost to the end user. This category celebrates tech for good initiatives highlighting those who have made a significant impact through their dedication to enhancing the quality of life for others.",
				"icon" => "Social_Innovation.png",
				"status" => "1",
				"created_at" => "2024-07-17 15:38:28"
			]
		];

		// return json_encode($this->db->get($this->table['categories'])->result_array());
		return json_encode($data);
	}
}
