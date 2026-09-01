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
		// if (!is_null($select)) {
		// 	$this->db->select($select);
		// }

		// $this->db->where(['status' => 1]);
		// if (!is_null($where)) {
		// 	$this->db->where($where);
		// }

		$categories = [
			[
				"id" => "0",
				"name" => "Animal Welfare & Wildlife Conservation",
				"description" =>
					"This category recognizes initiatives aimed at promoting the well-being and humane treatment of animals. This includes advocacy, rescue, rehabilitation, and education initiatives that protect animals from cruelty, neglect, and exploitation, providing essential veterinary services, first aid and emergency veterinary care, food, and water for free-roaming animals, etc.",
				"icon" => "Animal_Welfare.png",
				"status" => "1",
				"created_at" => "2024-07-17 15:38:28",
			],
			[
				"id" => "1",
				"name" => "Disability, Inclusion and Accessibility",
				"description" =>
					"The category recognizes individuals who have actively advocated for or implemented solutions to improve access, opportunity, and dignity for persons with disabilities. Initiatives may involve enhancing physical infrastructure such as constructing ramps, accessible toilets, or Braille signage or integrating assistive technologies to facilitate communication and mobility. Impact must show how their work has removed barriers and enabled full participation in social, educational, and economic life of the beneficiaries.",
				"icon" => "DIA.png",
				"status" => "1",
				"created_at" => "2024-07-17 15:38:28",
			],
			[
				"id" => "2",
				"name" => "Education & Skill Development",
				"description" =>
					"This category recognizes individuals that have made significant contributions towards enhancing access to quality education and practical skill-building. The focus is on initiatives that not only promote academic education but also equip individuals with vocational, digital, entrepreneurial, or life skills necessary for personal growth and employability.",
				"icon" => "Education.png",
				"status" => "1",
				"created_at" => "2024-07-17 15:38:28",
			],
			[
				"id" => "3",
				"name" => "Environment Sustainability",
				"description" =>
					"This category recognizes individuals that have taken impactful initiatives to protect, preserve, and restore the environment while promoting sustainable practices. It focuses on efforts that address climate change, waste management, resource conservation, sustainable water and sanitation practices, and ecological balance through innovation, advocacy, or community engagement.",
				"icon" => "Environment_Sustainability.png",
				"status" => "1",
				"created_at" => "2024-07-17 15:38:28",
			],
				[
				"id" => "4",
				"name" => "Women & Child Development",
				"description" =>
					"The category recognizes individuals dedicated to advancing the rights, dignity, and empowerment of girls and women across all spheres of life. This includes those working to promote gender equality, safeguard the rights of girl child, and ensure access to education, quality healthcare, economic opportunities, uplift the social and legal standing of women and protect/promote birth of a girl child, and overall development, etc.",
				"icon" => "GCWRE.png",
				"status" => "1",
				"created_at" => "2024-07-17 15:38:28",
			],
				[
				"id" => "5",
				"name" => "Healthcare & Accessibility",
				"description" =>
					"This category recognizes individuals who has demonstrated exceptional dedication and commitment to improving community health and wellness. Those who have gone beyond their professional obligations to make a significant impact on public health through various initiatives, including community and clinical health programs, innovative use of technology, free distribution of medicines, and other health-related services.",
				"icon" => "Healthcare.png",
				"status" => "1",
				"created_at" => "2024-07-17 15:38:28",
			],
			[
				"id" => "6",
				"name" => "Rural, Community & Livelihood Development",
				"description" =>
					"This category recognizes exceptional efforts and innovative initiatives aimed at improving living conditions and quality of life in rural areas and urban slum. Initiatives may focus on addressing the unique challenges faced by these communities, through comprehensive approaches that include infrastructure development, access to essential services, economic empowerment, providing education, sanitation, healthcare facilities, etc.",
				"icon" => "Rural_Development.png",
				"status" => "1",
				"created_at" => "2024-07-17 15:38:28",
			],
		
			[
				"id" => "7",
				"name" => "AgriTech & Rural Innovation",
				"description" =>
					"This award recognizes individuals who have leveraged technology to transform agriculture by improving productivity, sustainability, climate resilience, or farmer livelihoods through innovations such as digital platforms, precision farming, supply chain solutions, or data-driven insights.",
				"icon" => "FMN.png",
				"status" => "1",
				"created_at" => "2024-07-17 15:38:28",
			],
			[
				"id" => "8",
				"name" => "HealthTech & Care Access",
				"description" =>
					"This award recognizes individuals who have utilized technology to enhance healthcare delivery, accessibility, affordability, or patient outcomes through innovations such as digital health platforms, telemedicine, diagnostics, medical devices, or data-enabled care solutions.",
				"icon" => "Sanitation_Water.png",
				"status" => "1",
				"created_at" => "2024-07-17 15:38:28",
			],
		
			[
				"id" => "9",
				"name" => "Inclusive Technology for Social Impact",
				"description" =>
					"This award recognizes individuals who are using technology to enable greater inclusion, accessibility, and community empowerment. It honours changemakers who have developed, applied, or scaled tech-led solutions that help underserved, marginalized, or differently-abled communities overcome barriers and access opportunities with dignity.",
				"icon" => "SIUT.png",
				"status" => "1",
				"created_at" => "2024-07-17 15:38:28",
			],
		
		];
		return json_encode($categories);
		
	}
}
