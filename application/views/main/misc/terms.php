<main>
	<section class="section">
		<div class="container">
		<div class="title section-title mb-3 mb-md-4">
				<p class="">Amazing Indians</p>
				<h2 class="">Terms & Conditions</h2>
			</div>
			<div class="post-content misc">
				<ol>
					<li>
						<h5>Definition</h5>
						<table>
							<tr>
								<td>Awards</td>
								<td>Amazing Indians 2024</td>
							</tr>
							<tr>
								<td>Awards Management</td>
								<td>Personnel from Bennett Coleman & Company Limited and / or organizers who are responsible for the overall conduct of the Awards</td>
							</tr>
							<tr>
								<td>Applicant</td>
								<td>Any person that sends in an application to participate in the Awards as per the Terms & Conditions, or is nominated by Bennett, Coleman & Co. Ltd (BCCL) to participate in the Awards</td>
							</tr>
							<tr>
								<td>Application form</td>
								<td>The entry for the Award is determined by the completely filled-in form submitted by participant. The participant who must apply online on the below mentioned website</td>
							</tr>
							<tr>
								<td>Jury</td>
								<td>A group of experts identified by Awards Management for evaluation/review of the entries based on pre-defined evaluation parameters which will be reviewed by an independent agency</td>
							</tr>
							<tr>
								<td>Terms and Conditions (“T&C” or “Terms”)</td>
								<td>The terms governing the Awards, as may be amended from time to time by the Awards Management</td>
							</tr>
							<tr>
								<td>Website and its T&C & Privacy</td>
								<td><a href="<?= base_url() ?>"><strong>(www.theamazingindians.com)</strong></a></td>
							</tr>
						</table>
						<ol>
							<li>By participating in the Awards, the Participant agrees to abide by and be bound by these Terms</li>
							<li>These Terms may be modified without any prior written notification. Participant is advised to regularly review these Terms uploaded on the website. If there is any disagreement with any of the Terms and any amendments thereto, Participant must not participate in the award</li>
							<li>The awards may be changed / modified / split / merged / increased / decreased or cancelled by the Awards Management based on the number and quality of entries received</li>
							<li>n the event that no participants are found to be worthy of inclusion by the Awards Management, the reward may be cancelled. The decision of Awards Management in this regard will be final and binding. The Awards Management will not entertain any queries in this regard</li>
						</ol>
					</li>
					<li>
						<h5>Objective of the award</h5>
						<ol>
							<li>Times Network aims to uncover some of the most inspiring stories of amazing Indians</li>
							<li>It seeks to acknowledge common citizens who have stepped up to perform uncommon tasks that have benefitted the nation and / or its people in a significant manner</li>
							<li>Times Network shall publicly invite entries and showcase the final winners of the Award to the nation </li>
						</ol>
					</li>
					<li>
						<h5>Award Segment and Categories</h5>
						<table>
							<tr>
								<th>Name</th>
								<th>Definition</th>
								<th>Count of Winners</th>
							</tr>
							<?php foreach ($page['categories'] as $key => $category) : ?>
								<tr>
									<td><?= $category['name'] ?></td>
									<td><?= $category['description'] ?></td>
									<td><?= $category['count'] ??= 1 ?></td>
								</tr>
							<?php endforeach ?>
						</table>
						<ol>
							<li>The Award categories and no of winners may be changed / modified / split / merged / increased or cancelled by the Jury based on the number and quality of entries received in each category</li>
							<li>If no Participant in a category is found to be worthy of inclusion by the Jury, the Award category may be cancelled by the Jury. The Jury may decide to add nominees in the category to maintain high standards of participation. The decision of the Jury in this regard will be final and non-contestable. The Awards Management will not entertain any queries in this regard</li>
						</ol>
					</li>
					<li>
						<h5>Eligibility Criteria</h5>
						<ol>
							<li>Participant applying in categories under individual segment, must be a citizen of India.</li>
							<li>Individual should not be backed by a corporate body directly but an individual working in a Not-for-profit organization that is backed by a corporate body can apply and must provide an acknowledgment letter from the NGO, references, or beneficiaries for the contributions mentioned in the application.</li>
							<li>The initiative/story mentioned in the case study section should have been in execution and the impact must fall in the period of April 01, 2023, to March 31, 2024. This should be evidenced through supporting documents and testimonials.</li>
							<li>In case we found duplicate submissions for the same initiative from multiple participants, the management will make the final decision on how to proceed.</li>
							<li>The key initiative applied for the Awards should be within the lawful and legal rights of Indian judiciary system and must have benefitted India, or a community in India.</li>
							<li>On-going initiatives that were initiated in the eligibility period will be accepted only if significant impact is demonstrated and submitted in the application form</li>
							<li>It is mandatory that the nominee mentions two references for verification of the initiative and Impact mentioned in the application</li>
							<li>The Candidate must have relevant documents to support the details mentioned in the application form while applying for the Award. These documents should be provided to the Awards Management when the team reaches out to them</li>
							<li>The Candidate must provide relevant information and required documents to the Awards Management relating to the Award, identity, and information mentioned in the application form for validation purpose. Deviation in the same will lead to disqualification of the Candidate from the Award. The Awards Management reserves the sole right to disqualify any Candidate(s) </li>
							<li>The Jury holds the right to disqualify any application which does not meet the eligibility criteria without assigning any reason whatsoever. Jury’s decisions are final and binding on all Participants and cannot be challenged in any manner whatsoever.</li>
							<li>The Awards Management may modify the eligibility criteria from time to time with retrospective effect, without prior written notification</li>
							<li>Employees of BCCL, sponsors and partners of the Awards are not allowed to participate in the Awards</li>
							<li>Participation in the Awards is subject to defined Terms and Conditions available on website <a href="<?= base_url() ?>">www.theamazingindians.com</a></li>
							<li>The Award categories may be changed / modified / split / merged / increased or cancelled by the Awards Management and / or Jury based on the number of entries received in any category, and the quality of the entries. The decision in this regard will be final, non-contestable and binding on all participants. The Awards management will not entertain any queries in this regard</li>
						</ol>
					</li>
					<li>
						<h5>Completeness of entries and disqualifications</h5>
						<ol>
							<li>Applicants can apply only once for an initiative /project in a respective category. A separate form must be used for every new entry.</li>
							<li>Application forms must be filled in English only.</li>
							<li>The application form needs to be complete in all respects.</li>
							<li>Disqualification of entries is at the sole discretion of jury, on a case by case basis. The said disqualification will be as per the Terms and Conditions defined for the awards.</li>
							<li>If at any time, any information provided by an applicant is found to be incorrect in any manner, then the applicant will be disqualified from the awards.</li>
							<li>If found that the contact information of the referrers is incorrect or the referrer refuses to speak on behalf of the participant or does not respond to the rounds of calls made by the team, it will lead to the disqualification of the participant at any stage.</li>
							<li>If after the conclusion of the awards ceremony, any information provided by any applicant is found to be incorrect in any manner, then the applicant will be liable to return the award/ award money provided to the applicant under these awards.</li>
							<li>Determination of whether information provided by the applicant is incorrect or not is at jury’s discretion.</li>
							<li>The jury has the right to ask for documentary proof of information provided/ audit the information provided. If such a request is made and the applicant does not comply within 3 days from the date the request is made, the applicant would be disqualified from the awards.</li>
						</ol>
					</li>
					<li>
						<h5>Call for entries and participation</h5>
						<ol>
							<li>Applicant can apply for the Awards by submitting the completed application form on the website (<a href="<?= base_url() ?>">www.theamazingindians.com</a>)</li>
							<li>The Jury has right to reclassify Application Forms from one award category to another, at its discretion. This is not contestable in any manner.</li>
						</ol>
					</li>
					<li>
						<h5>Receipt of entries</h5>
						<ol>
							<li>A participant can apply for the Awards by logging on to www.theamazingindians.com and filling the application form online and attach the supporting documents along with the application form directly on the website</li>
							<li>Last date for receiving completed application forms is 11:59 PM IST on July 20, 2024</li>
							<li>Receipt of application forms after last date of receipt specified may be permitted only at the discretion of the Awards Management</li>
							<li>Awards Management will not be responsible for application forms that are received in an incorrect format / late / corrupt file etc.</li>
						</ol>
					</li>
					<li>
						<h5>Winner declaration</h5>
						<ol>
							<li>The applications that meet the eligibility criteria shall be presented to the Jury. The decision by the Jury as confirmed by Awards Management shall be final and binding</li>
							<li>The Awards Management reserves the right to offer or withdraw any of the awards/rewards/gratification as provided herein, at any point of time, including after they have been announced.</li>
							<li>Awards Management shall have the liberty, but not the obligation, to publish information with respect to the submission made by the participants.</li>
							<li>Participants declare that the details furnished in the application form and supporting documents submitted for the awards are true, correct and complete and, wherever required, provided after thorough due diligence and inquiry. In case any of the said information is found to be false or untrue or misleading or misrepresenting, the participant will be liable and accountable for any consequences resulting thereto including indemnifying the Awards Management for any expenses, costs, losses, damages incurred.</li>
							<li>The Participant authorizes the Awards Management to use the content submitted as part of my/our nomination/ participation, in whole or in part and use and display such content and entry, which shall include trade publications, press releases, electronic or social media posting to any website, electronic hyperlinks to the website of the Participant, and/or any other display format selected by the Awards Management during the awards ceremony or at a later point in time as it may deem fit.</li>
							<li>The Awards Management may, in its sole discretion, exclude a participant from participating in any part of the Awards on various grounds, which may include without limitation (i) circumstances which renders the participant unfit to participate therein; (ii) inability to produce documentation specified proving the identity of the participant; (iii) any other reason that, at their sole discretion, would adversely impact the Award. At no point of time will the Awards Management be obliged to notify unsuccessful Participants of its decision</li>
							<li>The Awards Management is not responsible if contact cannot be established with a shortlist via email or phone due to reasons not in the control of the Awards Management. </li>
							<li>The Awards Management further reserves the right to replace, at its discretion, any winner(s) who for any reason fails or is disqualified from or is unable to participate in the Award, with another Participant who should be eligible to be a winner.</li>
							<li>The Awards Management will reach out to winners within 30 days from winner declaration to obtain details and documentation, if any, to initiate the registration process for the award, if applicable. The Awards Management will make a maximum of 3 attempts to get in touch with such winner. Failure to contact the winner may result in forfeiture of the award for such participant and the Awards Management may award the same to subsequent eligible participant with highest score.</li>
							<li>The Awards Management will use the e-mail used to register for the Awards by the participant, to identify the winner of the awards won, if any. Inability on the part of the participant to accordingly show or provide the required identification proof could entitle Awards Management to disqualify the participant from any winnings, if any.</li>
							<li>Awards Management shall make all reasonable endeavours to (i) enable participant(s) to proceed with participation in the Awards (ii) to contact all winner(s) at each relevant juncture of the Awards, Awards Management can make no guarantee thereof and Awards Management shall in its sole discretion be entitled to proceed with the next entitled participants who are eligible to be winners under the Terms, in case it is unable to successfully contact and communicate with participants(s)/ winner(s) in terms hereof.</li>
							<li>Awards Management will have no liability to a participant who is unable to take part in the Awards, for whatever reason and Awards Management shall be entitled to disqualify the participant(s) from the Awards, at any time, at the discretion of Awards Management.</li>
							<li>Awards Management further reserves the right to replace, at its discretion, any winner(s) who for any reason fails or is disqualified from or is unable to participate in the Awards, with another participant, notwithstanding that such participant may have been previously eliminated from the Awards and each participant shall agree to collect the award as and when required by Awards Management to do so.</li>
							<li>If at any point, it is determined by Awards Management that any person has tampered with the Website, or any data / servers / database / etc. related to the Awards, Awards Management reserves the right at its discretion to revoke or winnings/awards of any such participants and / or initiate litigation as deemed fit and necessary by Awards Management.</li>
							<li>Awards Management will reach out to winners within 30 days from winner declaration to obtain details and documentation, if any, to initiate the registration process for the award, if applicable. Awards Management will determine delivery of the Award in consultation with the other partners of the platform and based on what is made available. Neither Awards Management nor the partners will be responsible should the winners refuse to accept the award as made available.</li>
							<li>Winners who have won the awards will receive a communication regarding the awards via email on the registered email id, from the Awards Management, or on the Website. The details will be intimated by Awards Management to each such winner on the email id provided by them at the time of registration on Website, on a best effort basis. Any awards not collected / claimed within 30 days will be forfeited and the winners will be disqualified</li>
							<li>The winners, in order to claim/ redeem awards will be required to send attested copies of a valid photo ID proof issued by the Government with address (passport, or any other Government identity proof, etc.)and any other documents that will be required within the stipulated time.</li>
							<li>The winner agrees that the delivery of the award may be delayed as a result of a delay in submission of documents and/ or any force majeure events which are not within the control of Awards Management, including but not limited to the orders/notifications/restrictions/prohibitions by the Government of India/other countries and the respective States/Union Territories, aimed at containment of the spread of COVID-19.</li>
							<li>The winners / grand award winner hereby agrees that he/ she shall not hold Awards Management responsible for any delays and/ or disputes and/or claims arising out of the award and shall indemnify the Awards Management against any and all such claims.</li>
							<li>The winners hereby agree that in case of any disputes/ claims arising out of the award, the same shall be addressed directly to the Awards Management.</li>
							<li>Awards Management may refuse to pay the award to the winners in the event of any fraud, dishonesty or non-entitlement on the part of any of such Winner(s) to participate in the Awards, under the Terms.</li>
						</ol>
					</li>
					<li>
						<h5>Validity and correctness of information</h5>
						<ol>
							<li>If at any time, including after the conclusion of any of the Awards ceremonies, any information provided by any Participant, is found to be incorrect in any manner, then the Participant will be liable to be disqualified and / or return the Awards and the monetary emoluments provided to the participant under this Awards, if any. Awards Management may also take penal action against the Participant for providing false information to participate in the Awards</li>
							<li>Determination of whether information provided as fair and accurate rests with the Jury and Awards Management</li>
							<li>Awards Management has the right to ask for proof of information provided / audit the information provided in the entry form. If such a request is made and the Participant does not agree, the Participant could be disqualified from participation at the Awards</li>
							<li>Awards Management will make calls to the references provided in the application form for verifying the information provided by the applicants in the form</li>
						</ol>
					</li>
					<li>
						<h5>Prohibited Activities</h5>
						<ol>
							<li>Viruses, trojan horses, worms, time bombs, corrupted files, malware, spyware, or any other similar software that may damage the operation of another’s computer or property</li>
							<li>Using the website in any manner intended to damage, disable, overburden, or impair any server, or the network(s) connected to any server, or interfere with any other party’s use and enjoyment of the site</li>
							<li>Attempting to gain unauthorized access to the site, other accounts, computer systems or networks connected to any server through hacking, password mining or any other means.</li>
							<li>Obtaining or attempting to obtain any materials or information stored on the Site, its servers, or associated computers through any means not intentionally made available through the site</li>
						</ol>
					</li>
					<li>
						<h5>Phases and Dates of the Award</h5>
						<figure>
							<table>
								<tr>
									<td>Submision Opening</td>
									<td><?= date("jS F Y", strtotime($this->EVENTS['opening'])) ?></td>
								</tr>
								<tr>
									<td>Submision Deadline</td>
									<td><?= date("jS F Y", strtotime($this->EVENTS['deadline'])) ?></td>
								</tr>
								<tr>
									<td>Awards Ceremony</td>
									<td><?= date("jS F Y", strtotime($this->EVENTS['awards'])) ?></td>
								</tr>
							</table>
							<figcaption>Tentative</figcaption>
						</figure>
						<ol>
							<li>The above-mentioned schedule could be added to, modified or cancelled based on technical requirements and in case the Award is for any reason rescheduled, extended, cancelled or terminated early and same shall be the absolute sole discretion of Awards Management</li>
							<li>All applications received will be evaluated based on pre-defined evaluation criteria determined by the Awards Management in its sole and absolute discretion</li>
							<li>The decision taken by the Awards Management, based upon the observation & recommendations of Jury with respect to the evaluation/disqualification/qualification is final and binding on all Participants. No claims/queries raised with respect to the same will be entertained in this regard</li>
						</ol>
					</li>
					<li>
						<h5>Limitations & Disclaimers</h5>
						<ol>
							<li>The Awards Management will not be responsible for late/ incomplete/ corrupted/ defective entries and/or which cannot be read or viewed for any reason, and such Entries shall stand automatically disqualified. Awards Management shall not be responsible if for any technical, physical or other reasons, the Entry is not received or cannot be read/ viewed/ judged. </li>
							<li>The Awards Management reserve their right to suspend, cancel or modify, add to, or truncate these Terms & Conditions or Award and/or rules relating thereto at any time without notice. Participants shall periodically check this page for updating of these Terms & Conditions.</li>
							<li>Awards Management gives no warranties in respect of any aspect of the Event or any materials related thereto or offered at the Event and, to the fullest extent possible under the laws governing this Agreement, disclaims all implied warranties, including but not limited to warranties of fitness for a particular purpose, accuracy, timeliness, and merchantability. The Event is provided on an “as-is” basis. Awards Management does not accept any responsibility or liability for reliance by you or any person on any aspect of the Event or any information provided at the Event.</li>
						</ol>
					</li>
					<li>
						<h5>General</h5>
						<ol>
							<li>Participant agrees that the Participant is legally capable of entering and, if selected, participating in the Awards and agree to the Terms & Conditions</li>
							<li>Participant understands and agrees that merely participating in this Awards does not entitle the Participant to an award or to any other form of consideration</li>
							<li>Participant shall be completely responsible for handling any infringement or alleged infringement and shall indemnify Awards Management from any claims, costs or damages from infringement or alleged infringement of the logo or trademark or the defines of a claim or any costs payable thereof.</li>
							<li>Participants for the purpose of entering the Awards, automatically grants the Awards Management a royalty-free, irrevocable, worldwide, non-transferable, non-exclusive right and license to use and display such entry, for participation in the Awards, and any intellectual property in relation to and arising out of such participation in the Awards and footage thereof, which shall include trade publications, press releases, electronic posting to the Website, the website in any display format selected during the Awards as it deems fit.</li>
							<li>The Awards Management reserve the right to, at its discretion, withdraw or amend or add to the Terms & Conditions of the Awards at any time, with prospective or retrospective effect, and does not take responsibility for any loss or damage that any individual or organization may suffer as a result of participating or attempting to participate in the Awards, the Awards being withdrawn, or its Terms and Conditions amended</li>
							<li>Should a participant wish to withdraw from the Awards, kindly inform the Awards Management in writing info@theamazingindians.com at any time up to one week prior to the final awards ceremony</li>
							<li>All disputes relating to or arising out of the Awards shall be subject to the laws of India, and shall be subject to the exclusive jurisdiction of the courts of competent jurisdiction at Mumbai, India</li>
							<li>In the event these terms and conditions do not cover any question or complaint in relation to the Awards, the same will be concluded on by the Awards Management(for all other issues) or an independent body or legal team as appointed by the Awards Management and deemed necessary</li>
						</ol>
					</li>
					<li>
						<h5>Website</h5>
						<ol>
							<li>The website is only an informational website <a href="<?= base_url() ?>">www.theamazingindians.com</a> (the “Website”) for the Awards. The Awards Management is not liable or responsible for any action or decision taken by Participant or anyone acting on Participant’s behalf or under Participant employment or under contract with Participant. The Awards Management shall not be under any obligation to Participant and Participant shall have no obligation or rights in relation to the Awards and shall have no claims whatsoever against the Awards Management relating to the selection process or the running of the Awards</li>
							<li>
								<p>The Awards Management shall not be responsible for:</p>
								<ol>
									<li>any delivery, failures relating to the registration or uploading videos/presentations. </li>
									<li>any SPAM generated messages as result of Participant accessing the Website.</li>
									<li>Awards Management not receiving or rejecting any data.</li>
									<li>any lost, late, or misdirected computer transmission or network, electronic failures of any kind or any failure to receive entries owing to transmission failures or due to any technical reasons and</li>
									<li>Other conditions/situations or failures beyond its control.</li>
								</ol>
							</li>
						</ol>
					</li>
					<li>
						<h5>Disclaimers</h5>
						<ol>
							<li>The Awards Management has no obligation to screen the entry material in advance and is not responsible for monitoring entries for the purpose of preventing violation of intellectual property ownership rights, or violations of any law, rule, or regulation. If the Awards Management is notified of submissions or materials that may not conform to the Terms and Conditions, it may investigate the allegation and determine in good faith and in its sole discretion whether to eliminate such an entry from consideration. The Awards Management has no liability or responsibility to Participants or other users of the Website for performance or non-performance of such activities.</li>
							<li>Awards Management failure to exercise any right shall not be deemed a waiver of any further rights. Awards Management shall not be liable for any failure to perform its obligations where such failure results from any cause beyond Awards Management’s reasonable control. If any provision of this Agreement is found to be unenforceable or invalid, that provision shall be limited or eliminated to the minimum extent necessary for this Agreement to otherwise remain in full force and effect and enforceable. This Agreement is not assignable, transferable or sub-licensable by you except with Awards Management prior written consent. This Agreement shall be governed by the internal laws of the India and the parties shall submit to the exclusive jurisdiction of the courts located in Mumbai, INDIA.</li>
							<li>A party that substantially prevails in an action brought under this Agreement is entitled to recover from the other party its reasonable attorneys’ fees and costs. Both parties agree that this Agreement is the complete and exclusive statement of the mutual understanding of the parties and supersedes and cancels all previous written and oral agreements, communications and other understandings relating to the subject matter of this Agreement, and that all modifications must be in a writing signed by both parties, except as otherwise provided herein.</li>
							<li>No agency, partnership, joint venture, or employment is created as a result of this Agreement and you acknowledge that you do not have any authority of any kind to bind Awards Management in any respect whatsoever.</li>
						</ol>
					</li>
					<li>
						<h5>Systems & Availability</h5>
						<ol>
							<li>Awards Management, its affiliates, process advisors, contractors, partners and promotion are not responsible for technical, hardware, software, or other communications malfunctions, errors or failures of any kind, lost or unavailable network connections, Website, Internet, or ISP availability, unauthorized human intervention, traffic congestion, incomplete or inaccurate capture of information (regardless of cause) or failed, incomplete, garbled, jumbled or delayed computer transmissions which may limit participants / participant’s ability to participate, including any injury or damage to participants or any other person's computer or mobile device relating to or resulting from participating in or downloading any materials. Awards Management is not responsible for lost, late, illegible, incomplete, invalid, unintelligible, technically corrupted or misdirected answers, which will be disqualified. Awards Management shall attempt to use commercially reasonable efforts to ensure the security and accuracy of all answer’s personal details (provided, however, that Participants acknowledge and agree that such methodologies are not infallible, and that the organizers make no guarantee as to their effectiveness).</li>
							<li>Any loss or outrage or dissatisfaction suffered by the course of the Awards by a participant would not be the responsibility of Awards Management and/or its associates/ affiliates and Awards Management or its associates/affiliates will not be responsible to make good any such loss or dissatisfaction.</li>
							<li>All attempts will be made to protect the data from loss and corruption, but in the event such data loss happens, Awards Management may have to continue with whatever data is available, or in any other manner as it may deem reasonable. Awards Management should not be held responsible for any loss of data or the action taken on account of the same. Awards Management will not be held responsible to make good any such loss or dissatisfaction on account of such loss.
							</li>
							<li>In case multiple entries are received from a participant with the same idea, Awards Management has the right to choose the first submission from that participant</li>
							<li>Prior to start of the Awards, the participant must check that the Websites are operational and functioning correctly. The participant is advised to keep adequate RAM and phone memory available to ensure smooth functioning of the site</li>
							<li>The server used to communicate with the participant has adequate redundancies built into it. However, in the rare cases, the server is down during the call for entry period, Awards Management will, at its discretion but not as an obligation, determine such measures as it may deem fit </li>
							<li>The participant acknowledges that all possible issues may not have been identified by Awards Management and its partners and agrees to hold harmless Awards Management and its partners for the application, network, process, technical or any other failures. Any losses, injury, discomfort, loss of privacy, inability to participate or any other discomfort of any sort caused to the participant or the participant’s property or device shall not be the responsibility of Awards Management or its partners.</li>
							<li>No person (i.e., either the participant, or any person on behalf of the participant) shall initiate litigation against Awards Management or its partners in any manner without first providing Awards Management a complaint at info@theamazingindians.com and providing Awards Management an opportunity to address the complaint.</li>
							<li>Awards Management shall not be liable for any failure of the application server or system in the course of Awards.</li>
						</ol>
					</li>
					<li>
						<h5>Confidentiality and Publicity</h5>
						<ol>
							<li>Awards Management shall keep all the information collected from the participants confidential and shall not share the information so collected with any party, save and except for the purpose of the Awards. The participant by providing the aforesaid sensitive personal information hereby agree that Awards Management shall have the right to share the information so collected with such other third party as required for the purpose of the Awards and hereby agree that they shall not file any claim against Awards Management for sharing of such personal information. Any information shared by the participant to Awards Management shall be handled by Awards Management in terms of the privacy policy of Awards Management.</li>
							<li>By entering the Awards, Participant agree to participate in any media or promotional activity resulting from the Awards as reasonably requested by the Awards Management at their expense and agree and consent to use of their name and/or likeness by the Awards Management.</li>
							<li>Awards Management will contact participants in advance of any Awards Management media request for interviews. The submissions may also be used for promotional, marketing, press and media purposes and Participants agrees to waive any rights and not assert any intellectual property rights that they have or may have in the project submission. Awards Management reserves the right to publish the name and likeness of the participants, the Finalists and the Winners of the Awards on Website or through other media for publicity purposes. Participant acknowledge that they will not be paid for use of name and/or likeness or project submissions and hereby relinquish (and with respect to its company, if applicable) any past, present, or future monetary or other claims against Awards Management and its affiliates for this use. </li>
							<li>None of the participants shall, without the prior written approval of Awards Management, speak to the press or any other media or any third person, nor give any interviews or comments relating to any aspect of the Awards. The participant shall not disclose any information whatsoever relating to Awards Management to any other party. Violation of this clause shall immediately disqualify the participant’s prospects of further participation.</li>
							<li>The participant shall at all times keep confidential all particulars and details regarding the Awards</li>
							<li>Any photographs, videos etc. submitted by the participant s/winners to Awards Management or recorded, shall on submission / creation become the property of Awards Management and shall be available to Awards Management for exploitation across all mediums throughout the world in perpetuity. The participant (s) shall ensure that the photos or videos submitted by them in any public domain or their performances shall not be obscene, vulgar, defaming, denigrating women or children, hurting religious sentiments, depicting violence or shall not infringe the rights of a third person. The participant (s) shall solely remain liable for any action (criminal/civil) arising therefrom.</li>
							<li>Acceptance of these terms & conditions by the participant constitutes permission for Awards Management, including its affiliates, to click photographs, record videos of the participant (s) and use the participant (s) name, photographs, likeness, voice and comments for advertising and promotional purposes in any media worldwide for purposes of advertising and trade without any additional compensation whatsoever.</li>
						</ol>
					</li>
					<li>
						<h5>Privacy</h5>
						<ol>
							<li>Participant agree that personal data submitted with an entry, including name, mailing address, phone number, and email address may be collected, processed, stored and otherwise used by Awards Management and its affiliates for the purposes of conducting and administering the Awards only. By entering the Awards, participant agree to the transmission, processing, disclosing and storage of this personal data by Awards Management and its affiliates. All personal information that is collected from the participant is subject to Times Network’ Privacy Policy.</li>
						</ol>
					</li>
					<li>
						<h5>Warranty and Indemnity</h5>
						<ol>
							<li>
								Participant warrant that their entry submission is their own original work and, as such, they are the sole and exclusive owner and rights holder of the entry submitted and that they have the right to submit the entry in the Awards and grant all required licenses. Each Participant agrees not to submit any entry that: (a) infringes any third party proprietary rights, intellectual property rights, industrial property rights, personal or moral rights or any other rights, including without limitation, copyright, trademark, trade names, industrial designs, patent, trade secret, privacy, publicity or confidentiality obligations; or (b) otherwise violates applicable state, federal, or local law
							</li>
							<li>To the maximum extent permitted by law, Participant indemnifies and agrees to keep indemnified Awards Management at all times from and against any liability, claims, demands, losses, damages, costs and expenses resulting from any act, default or omission of the Participant and/or a breach of any warranty set forth herein. To the maximum extent permitted by law, Participant agrees to defend, indemnify and hold harmless Awards Management from and against any and all claims, actions, suits or proceedings, as well as any and all losses, liabilities, damages, costs and expenses (including reasonable attorney’s fees) arising out of or accruing from: (i) any project submission or other material uploaded or otherwise provided by Participant that infringes any copyright, trademark, trade secret, trade dress, patent or other intellectual property right of any person or defames any person or violates their rights of publicity or privacy; (ii) any misrepresentation made by Participant in connection with the Awards; (iii) any non-compliance by Participant with these Terms; (iv) claims brought by persons or entities other than the parties to these Terms arising from or related to Participant’s involvement with the Awards; (v) acceptance, possession, misuse or use of any award or participation in any Awards-related activity or participation in the Awards; (vi) any malfunction or other problem with the Awards Website in relation to the entry and participation in the Awards by Participant; (vii) any error in the collection, processing, or retention of entry or voting information in relation to the entry and participation in the Awards by Participant and in the voting process by consumers; or (viii) any typographical or other error in the printing, offering or announcement of any award or winners in relation to the entry and participation in the Awards by Participant.
							</li>
						</ol>
					</li>
				</ol>
			</div>
		</div>
	</section>
</main>
