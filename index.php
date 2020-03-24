<!DOCTYPE html>
<html>
<head>
	<title>Multi Step Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		#second,#third, #fourth, #fifth, #sixth,  #final, #result{
			display: none;
		}
		#commentRatingOne{
			/*width: 200px; 
			height: 90px;*/
		}
		hr.rounded {
		  border-top: 8px solid #bbb;
		  border-radius: 5px;
}
		
	</style>
</head>
<body class="bg-dark">
	<div class="containe">
	<div class="row justify-content-center">
		<div class="col-md-6 bg-light p-4 rounded mt-5">
			<h5 class="text-center text-light bg-danger mb-2 p-2 rounded lead" id="result">Hello world!</h5>
			<div class="progress mb-3" style="height: 40px;">
			<div class="progress-bar bg-success" role="progressbar" style="width: 20%;" id="progressBar">
				<b class="lead" id="progressText">Step - 1</b>
			</div>
			</div>
			<form action="" method="post" id="form-data">
				<div id="first">
					<h5 class="text-center bg-primary p-1 rounded text-light">SECTION A: PERSONAL INFORMATION (To be filled by the Appraisee)</h5>

					<div class="form-group">
						<label for="appraiseeName">Name of the Appraisee</label>
						<input type="text" name="name" class="form-control" placeholder="Full name">
					</div>

					<div class="form-group">
						<label for="dob">Date of Birth</label>
						<input type="date" name="dob" class="form-control" placeholder="Date of Birth">
					</div>

					<div class="form-group">
						<label for="rank">Job Title/Rank</label>
						<input type="text" name="rank" class="form-control" placeholder="Job Title/Rank">
					</div>

					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <label class="input-group-text" for="inputGroupSelect01">Salary Scale</label>
					  </div>
					  <select class="custom-select" id="inputGroupSelect01">
					    <option selected>Choose...</option>
					    <option value="1">U2</option>
					    <option value="2">U3</option>
					    <option value="3">U4</option>
					  </select>
					</div>

					<div class="form-group">
						<label for="present Appointment">Date of Present Appointment</label>
						<input type="date" name="dop" class="form-control" placeholder="Date of Present Appointment">
					</div>

					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <label class="input-group-text" for="inputGroupSelect01">Terms of Employment</label>
					  </div>
					  <select class="custom-select" id="inputGroupSelect01">
					    <option selected>Choose...</option>
					    <option value="1">Probation</option>
					    <option value="2">Permanent</option>
					    <option value="3">Contract</option>
					  </select>
					</div>

					<div class="form-group">
						<label for="appraiserName">Name of the Appraiser</label>
						<input type="text" name="rank" class="form-control" placeholder="Name of the Appraiser">
					</div>

					<div class="form-group">
						<label for="rankAppraiser">Job Title/Rank</label>
						<input type="text" name="rank" class="form-control" placeholder="Job Title/Rank">
					</div>

					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <label class="input-group-text" for="inputGroupSelect01">Salary Scale</label>
					  </div>
					  <select class="custom-select" id="inputGroupSelect01">
					    <option selected>Choose...</option>
					    <option value="1">U2</option>
					    <option value="2">U3</option>
					    <option value="3">U4</option>
					  </select>
					</div>

					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <label class="input-group-text" for="inputGroupSelect02">Institution</label>
					  </div>
					  <select class="custom-select" id="inputGroupSelect01">
					    <option selected>Choose...</option>
					    <option value="1">Ministry of Finance, Planning and Economic Development</option>
					    <option value="2">Ministry of Local Government</option>
					    <option value="3">Ministry of Health</option>
					  </select>
					</div>

					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <label class="input-group-text" for="inputGroupSelect03">Department</label>
					  </div>
					  <select class="custom-select" id="inputGroupSelect01">
					    <option selected>Choose...</option>
					    <option value="1">F&A</option>
					    <option value="2">TPD</option>
					    <option value="3">MISD</option>
					  </select>
					</div>

					<div class="form-group">
						<label for="division">Division</label>
						<input type="text" name="division" class="form-control" placeholder="Division">
					</div>

					<div class="form-group">
						<a href="#" class="btn btn-primary" id="cont-1">Continue</a>
					</div>

				</div>

				<div id="second">
					<h5 class="text-center bg-primary p-1 rounded text-light">SECTION B: ASSESSMENT OF THE LEVEL OF ACHIEVEMENT</h5>
					<p>This section should be filled by both the Appraiser and the Appraisee. At the beginning of each assessment period, the Appraiser and Appraisee will agree on the key outputs for the assessment period. The means by which performance shall be measured (Performance Indicators) and the minimum level of performance (performance targets) for each output shall be agreed upon. If in the course of the assessment period, other activities are assigned to the Appraisee, the outputs related to the new activities should be agreed upon and included immediately or at least before the end of the assessment period. It is recommended that the maximum number of outputs for each assessment period should not exceed 10. At the end of the assessment period, an appraisal meeting should be conducted by the Appraiser. The Appraisee completes part B (1), before the appraisal meeting, by indicating the key outputs, performance indicators and targets agreed upon in the performance plan at the beginning of the assessment period. The Appraiser should complete part B (2), after the appraisal meeting. The assessment should reflect the jointly agreed position. The assessment of the Individual outputs shall be reflected as a performance level under section B(2), this will be supported by relevant comments on performance under the same section. The performance levels shall be described as Excellent, Very Good, Good, Fair and Poor. In order to quantify the assessment the performance levels shall be awarded scores namely; 5 for excellent, 4 for Very Good, 3 for Good, 2 for fair and 1 for Poor. Right after the table below is a detailed description of the performance levels. </p><br>


					<h6>B(1) Agreed Key Outputs, Performance Indicators and Targets</h6>
					<div class="form-group">
					  <label for="exampleFormControlTextarea3">Key Outputs</label>
					  <textarea placeholder="Type here..." class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
					</div>

					<div class="form-group">
					  <label for="exampleFormControlTextarea3">Performance Indicators (How will results be measured)</label>
					  <textarea placeholder="Type here..." class="form-control" id="exampleFormControlTextarea2" rows="7"></textarea>
					</div>


					<div class="form-group">
					  <label for="exampleFormControlTextarea3">Performance targets (An agreed minimum level of performance)</label>
					  <textarea placeholder="Type here..." class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>
					</div><br>

				
					<h6>B(2)Agreed Assessment of Performance between the Appraiser and the Appraisee</h6>
					<div class="form-group">
					  <label for="exampleFormControlTextarea3">Performance Level</label>
					  <textarea placeholder="Type here..." class="form-control" id="exampleFormControlTextarea4" rows="7"></textarea>
					</div>

					<div class="form-group">
					  <label for="exampleFormControlTextarea3">Comments on Performance</label>
					  <textarea placeholder="Type here..." class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>
					</div>

					<div class="form-group">
						<a href="#" class="btn btn-primary" id="prev-1">Previous</a>
						<a href="#" class="btn btn-primary" id="cont-2">Continue</a>
					</div>
				</div>

				<div id="third">
					<h4>Definition of the Performance Levels</h4>
					<p>Excellent (5): The Appraisee has exceeded the agreed targets and has consistently produced results of excellent
					quality and demonstrated a high level of productivity and timeliness. The Appraisee is a model of excellence in both the results achieved and the means by which they are achieved. Very good (4): The Appraisee achieved all the agreed outputs in line with the agreed targets. The Appraisee consistently meets expectations for the outputs achieved and the means by which they are achieved. Good (3): The Appraisee achieved most, but not all the agreed outputs in line with the agreed targets, and there is no supporting rationale for not meeting the other commitments. Fair (2): The Appraisee has achieved minimal outputs in line with the agreed targets and without a supporting rationale for inability to meet the commitments. Poor (1): The Appraisee has not achieved most of the agreed targets and without supporting rationale for not achieving them.</p> 

					<h4>Overall Assessment of Performance</h4>
					<p>Overall assessment of performance should be derived by adding the scores at each performance level and the total divided by the total number of outputs. The average of the scores obtained shall be the overall assessment.</p>

					<table class="table table-bordered">
					  <thead>
					  	
					    <tr style="text-align: center;">
					      <th scope="col">Overall Performance Level</th>
					      <td scope="col">Excellent<br> 5</td>
					      <td scope="col">Very Good<br> 4</td>
					      <td scope="col">Good<br> 3</td>
					      <td scope="col">Fair<br> 2</td>
					      <td scope="col">Poor<br> 1</td>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="col">&nbsp;&nbsp;&nbsp;Tick the relevant box</th>
					      <th scope="row"></th>
					      <th scope="row"></th>
					     <th scope="row"></th>
					      <th scope="row"></th>
					      <th scope="row"></th>
					    </tr>
					  </tbody>
					</table>

					<h5 class="text-center bg-primary p-1 rounded text-light">SECTION B: ASSESSMENT OF THE LEVEL OF ACHIEVEMENT</h5>

					<p>This section should be filled by the Appraiser after joint discussions between the Appraiser and Appraisee. The assessment will help establish any areas where some training or development is necessary. The Appraisee should be rated only in areas, which are relevant to his/her job. The maximum points per competence are 5, where 5 is for Excellent, 4 - Very Good, 3 - Good, 2 - Fair, 1 – Poor, N/A - Not Applicable. The Appraiser should give work related examples under comments, to justify their rating. </p>

					<table class="table table-bordered">
					  <thead>
					  	
					    <tr style="text-align: center;">
					      <th scope="col">COMPETENCE</th>
					      <th colspan="6" scope="col">ASSESSMENT <br> Performance level attained (Please tick)</th>
					      <th scope="col">COMMENTS</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td scope="col"></td>
					      <td scope="row">5</td>
					      <td scope="row">4</td>
					      <td scope="row">3</td>
					      <td scope="row">2</td>
					      <td scope="row">1</td>
					      <td scope="row">N/A</td>
					      <td style="width: 300px;" scope="row"></td>
					    </tr>

					    <tr>
					      <td style="width: 400px;" scope="row" scope="row"><b>Professional knowledge/skills</b><br>
								Draws on own experience, knowledge and expertise to demonstrate good judgment; relates professional knowledge to work.</td>
						  <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck1"> <label class="custom-control-label" for="tableDefaultCheck1"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck2"> <label class="custom-control-label" for="tableDefaultCheck2"></label> </div></td> 

						  <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck3"> <label class="custom-control-label" for="tableDefaultCheck3"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck4"> <label class="custom-control-label" for="tableDefaultCheck4"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck5"> <label class="custom-control-label" for="tableDefaultCheck5"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck6"> <label class="custom-control-label" for="tableDefaultCheck6"></label> </div></td>

					      <td scope="row"><textarea placeholder="Type here..." class="form-control" id="commentRatingTwo" rows="4"></textarea>
					      </td>
					    </tr>

					    <tr>
					      <td scope="row"><b>Planning, organizing and coordinating</b><br>								
								Prioritizes own work, develops and implements plans; rationally allocates resources, builds group capacity for effective planning and executing of work. Has ability to meet deadlines.</td>

					     <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck7"> <label class="custom-control-label" for="tableDefaultCheck7"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck8"> <label class="custom-control-label" for="tableDefaultCheck8"></label> </div></td> 

						  <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck9"> <label class="custom-control-label" for="tableDefaultCheck9"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck10"> <label class="custom-control-label" for="tableDefaultCheck10"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck11"> <label class="custom-control-label" for="tableDefaultCheck11"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck12"> <label class="custom-control-label" for="tableDefaultCheck12"></label></div></td>

					      <td scope="row"><textarea placeholder="Type here..." class="form-control" id="commentRatingThree" rows="4"></textarea>
					      </td>
					    </tr>

					    <tr>
					      <td style="width: 400px;" scope="row" scope="row"><b>Leadership</b><br>
								Keeps people informed; models and encourages personal accountability; uses power and authority fairly; demonstrates credible leadership, champions new initiatives; reinforces and communicates a compelling vision for change.</td> 
						  <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck13"> <label class="custom-control-label" for="tableDefaultCheck13"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck14"> <label class="custom-control-label" for="tableDefaultCheck14"></label> </div></td> 

						  <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck15"> <label class="custom-control-label" for="tableDefaultCheck15"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck16"> <label class="custom-control-label" for="tableDefaultCheck16"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck17"> <label class="custom-control-label" for="tableDefaultCheck17"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck18"> <label class="custom-control-label" for="tableDefaultCheck18"></label> </div></td>

					      <td scope="row"><textarea placeholder="Type here..." class="form-control" id="commentRatingTwo" rows="4"></textarea>
					      </td>
					    </tr>

					    <tr>
					      <td style="width: 400px;" scope="row" scope="row"><b>Decision Making</b><br>
								Makes logical analysis of relevant information and factors;
								develops appropriate solutions and takes action, generates
								ideas that provide new insight; provides reasons for
								decision or actions, is objective.</td> 
						  <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck19"> <label class="custom-control-label" for="tableDefaultCheck19"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck20"> <label class="custom-control-label" for="tableDefaultCheck20"></label> </div></td> 

						  <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck21"> <label class="custom-control-label" for="tableDefaultCheck21"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck22"> <label class="custom-control-label" for="tableDefaultCheck22"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck23"> <label class="custom-control-label" for="tableDefaultCheck23"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck24"> <label class="custom-control-label" for="tableDefaultCheck24"></label> </div></td>

					      <td scope="row"><textarea placeholder="Type here..." class="form-control" id="commentRatingTwo" rows="4"></textarea>
					      </td>
					    </tr>

					    <tr>
					      <td style="width: 400px;" scope="row" scope="row"><b>Initiative</b><br>
								Shows persistence by addressing current problems;
								acts proactively, plans for the future and implements
								comprehensive plans.
								Is open to new ideas; curious about and actively explores
								new possibilities; identifies how to create more value for
								customers; takes action on innovative ideas and champions
								innovation.</td> 

						  <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck25"> <label class="custom-control-label" for="tableDefaultCheck25"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck26"> <label class="custom-control-label" for="tableDefaultCheck26"></label> </div></td> 

						  <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck27"> <label class="custom-control-label" for="tableDefaultCheck27"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck28"> <label class="custom-control-label" for="tableDefaultCheck28"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck29"> <label class="custom-control-label" for="tableDefaultCheck29"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck30"> <label class="custom-control-label" for="tableDefaultCheck30"></label> </div></td>

					      <td scope="row"><textarea placeholder="Type here..." class="form-control" id="commentRatingTwo" rows="4"></textarea>
					      </td>
					    </tr>

					    <tr>
					      <td style="width: 400px;" scope="row" scope="row"><b>Communication</b><br>
								Actively listens and speaks respectfully; seeks to send
								clear oral and written messages; understands the impact of
								messages on others.</td> 

						  <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck31"> <label class="custom-control-label" for="tableDefaultCheck31"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck32"> <label class="custom-control-label" for="tableDefaultCheck32"></label> </div></td> 

						  <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck33"> <label class="custom-control-label" for="tableDefaultCheck33"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck34"> <label class="custom-control-label" for="tableDefaultCheck34"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck35"> <label class="custom-control-label" for="tableDefaultCheck35"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck36"> <label class="custom-control-label" for="tableDefaultCheck36"></label> </div></td>

					      <td scope="row"><textarea placeholder="Type here..." class="form-control" id="commentRatingTwo" rows="4"></textarea>
					      </td>
					    </tr>

					    <tr>
					      <td style="width: 400px;" scope="row" scope="row"><b>Result Orientation</b><br>
								Takes up duty willingly and produces results.</td> 

						  <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck37"> <label class="custom-control-label" for="tableDefaultCheck37"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck38"> <label class="custom-control-label" for="tableDefaultCheck38"></label> </div></td> 

						  <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck39"> <label class="custom-control-label" for="tableDefaultCheck39"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck40"> <label class="custom-control-label" for="tableDefaultCheck40"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck41"> <label class="custom-control-label" for="tableDefaultCheck41"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck42"> <label class="custom-control-label" for="tableDefaultCheck42"></label> </div></td>

					      <td scope="row"><textarea placeholder="Type here..." class="form-control" id="commentRatingTwo" rows="4"></textarea>
					      </td>
					    </tr>


					  </tbody>
					</table>


					<div class="form-group">
						<a href="#" class="btn btn-primary" id="prev-2">Previous</a>
						<a href="#" class="btn btn-primary" id="cont-3">Continue</a>
						<!-- <input type="submit" name="submit" value="Submit" id="submit" class="btn btn-success"> -->
					</div>
				</div>


				<div id="fourth">
	
					<table class="table table-bordered">
					  <thead>
					  	
					    <tr style="text-align: center;">
					      <th scope="col">COMPETENCE</th>
					      <th colspan="6" scope="col">ASSESSMENT <br> Performance level attained (Please tick)</th>
					      <th scope="col">COMMENTS</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td scope="col"></td>
					      <td scope="row">5</td>
					      <td scope="row">4</td>
					      <td scope="row">3</td>
					      <td scope="row">2</td>
					      <td scope="row">1</td>
					      <td scope="row">N/A</td>
					      <td style="width: 300px;" scope="row"></td>
					    </tr>

					    <tr>
					      <td style="width: 400px;" scope="row" scope="row"><b>Integrity</b><br>
								Communicates values to others, monitors own actions for
								consistency with values and beliefs, takes pride in being
								trust worthy; is open and honest and provides quality
								services without need for inducements.</td>
						  <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck1"> <label class="custom-control-label" for="tableDefaultCheck1"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck2"> <label class="custom-control-label" for="tableDefaultCheck2"></label> </div></td> 

						  <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck3"> <label class="custom-control-label" for="tableDefaultCheck3"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck4"> <label class="custom-control-label" for="tableDefaultCheck4"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck5"> <label class="custom-control-label" for="tableDefaultCheck5"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck6"> <label class="custom-control-label" for="tableDefaultCheck6"></label> </div></td>

					      <td scope="row"><textarea placeholder="Type here..." class="form-control" id="commentRatingTwo" rows="4"></textarea>
					      </td>
					    </tr>

					    <tr>
					      <td style="width: 400px;" scope="row" scope="row"><b>Human Resource Management</b><br>
								Works effectively with people to achieve organizational goals. Motivates the supervisees, focuses on the knowledge, skills and attitudes and the general work environment that affects their efficiency and effectiveness. Trains, mentors, coaches, inspires, motivates the supervisees, delegates effectively and are able to build a strong working team.</td> <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck1"> <label class="custom-control-label" for="tableDefaultCheck1"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck2"> <label class="custom-control-label" for="tableDefaultCheck2"></label> </div></td> 

						  <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck3"> <label class="custom-control-label" for="tableDefaultCheck3"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck4"> <label class="custom-control-label" for="tableDefaultCheck4"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck5"> <label class="custom-control-label" for="tableDefaultCheck5"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck6"> <label class="custom-control-label" for="tableDefaultCheck6"></label> </div></td>

					      <td scope="row"><textarea placeholder="Type here..." class="form-control" id="commentRatingTwo" rows="4"></textarea>
					      </td>
					    </tr>

					    <tr>
					      <td style="width: 400px;" scope="row" scope="row"><b>Financial Management</b><br>
								Knows the basic financial policies and procedures; familiar with the overall financial management processes.</td> <td scope="row"><div class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" id="tableDefaultCheck1"> <label class="custom-control-label" for="tableDefaultCheck1"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck2"> <label class="custom-control-label" for="tableDefaultCheck2"></label> </div></td> 

						  <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck3"> <label class="custom-control-label" for="tableDefaultCheck3"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck4"> <label class="custom-control-label" for="tableDefaultCheck4"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck5"> <label class="custom-control-label" for="tableDefaultCheck5"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck6"> <label class="custom-control-label" for="tableDefaultCheck6"></label> </div></td>

					      <td scope="row"><textarea placeholder="Type here..." class="form-control" id="commentRatingTwo" rows="4"></textarea>
					      </td>
					    </tr>

					    <tr>
					      <td style="width: 400px;" scope="row" scope="row"><b>Management of other resources (equipment & facilities)</b><br>Effectively and efficiently uses resources to accomplish tasks.</td> <td scope="row"><div class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" id="tableDefaultCheck1"> <label class="custom-control-label" for="tableDefaultCheck1"></label> </div></td>
					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck2"> <label class="custom-control-label" for="tableDefaultCheck2"></label> </div></td> 

						  <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck3"> <label class="custom-control-label" for="tableDefaultCheck3"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck4"> <label class="custom-control-label" for="tableDefaultCheck4"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck5"> <label class="custom-control-label" for="tableDefaultCheck5"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck6"> <label class="custom-control-label" for="tableDefaultCheck6"></label> </div></td>

					      <td scope="row"><textarea placeholder="Type here..." class="form-control" id="commentRatingTwo" rows="4"></textarea>
					      </td>
					    </tr>

					    <tr>
					      <td style="width: 400px;" scope="row" scope="row"><b>Time Management</b><br>Always in time and accomplishes tasks in time required and maximizes the use of time to achieve set targets.</td> <td scope="row"><div class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" id="tableDefaultCheck1"> <label class="custom-control-label" for="tableDefaultCheck1"></label> </div></td> <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck2"> <label class="custom-control-label" for="tableDefaultCheck2"></label> </div></td> 

						  <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck3"> <label class="custom-control-label" for="tableDefaultCheck3"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck4"> <label class="custom-control-label" for="tableDefaultCheck4"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck5"> <label class="custom-control-label" for="tableDefaultCheck5"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck6"> <label class="custom-control-label" for="tableDefaultCheck6"></label> </div></td>

					      <td scope="row"><textarea placeholder="Type here..." class="form-control" id="commentRatingTwo" rows="4"></textarea>
					      </td>
					    </tr>

					    <tr>
					      <td style="width: 400px;" scope="row" scope="row"><b>Customer care</b><br>Responds well and attends to clients. Reflects a good image for the Public service.</td> <td scope="row"><div class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" id="tableDefaultCheck1"> <label class="custom-control-label" for="tableDefaultCheck1"></label> </div></td> <td scope="row"><div class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" id="tableDefaultCheck2"> <label class="custom-control-label" for="tableDefaultCheck2"></label> </div></td>

						  <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck3"> <label class="custom-control-label" for="tableDefaultCheck3"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck4"> <label class="custom-control-label" for="tableDefaultCheck4"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck5"> <label class="custom-control-label" for="tableDefaultCheck5"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck6"> <label class="custom-control-label" for="tableDefaultCheck6"></label> </div></td>

					      <td scope="row"><textarea placeholder="Type here..." class="form-control" id="commentRatingTwo" rows="4"></textarea>
					      </td>
					    </tr>

					    <tr>
					      <td style="width: 400px;" scope="row" scope="row"><b>Loyalty</b><br>Complies with lawful instructions of Supervisor and is able to provide on going support to Supervisors.</td> <td scope="row"><div class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" id="tableDefaultCheck1"> <label class="custom-control-label" for="tableDefaultCheck1"></label> </div></td> <td scope="row"><div class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" id="tableDefaultCheck2"> <label class="custom-control-label" for="tableDefaultCheck2"></label> </div></td>
						  <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck3"> <label class="custom-control-label" for="tableDefaultCheck3"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck4"> <label class="custom-control-label" for="tableDefaultCheck4"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck5"> <label class="custom-control-label" for="tableDefaultCheck5"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck6"> <label class="custom-control-label" for="tableDefaultCheck6"></label> </div></td>

					      <td scope="row"><textarea placeholder="Type here..." class="form-control" id="commentRatingTwo" rows="4"></textarea>
					      </td>
					    </tr>

					    <tr>
					      <td style="width: 400px;" scope="row" scope="row">Any other relevant Competence<td scope="row"><div class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" id="tableDefaultCheck1"> <label class="custom-control-label" for="tableDefaultCheck1"></label> </div></td> <td scope="row"><div class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" id="tableDefaultCheck2"> <label class="custom-control-label" for="tableDefaultCheck2"></label> </div></td>
						  <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck3"> <label class="custom-control-label" for="tableDefaultCheck3"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck4"> <label class="custom-control-label" for="tableDefaultCheck4"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck5"> <label class="custom-control-label" for="tableDefaultCheck5"></label> </div></td>

					      <td scope="row"><div class="custom-control custom-checkbox">
						          <input type="checkbox" class="custom-control-input" id="tableDefaultCheck6"> <label class="custom-control-label" for="tableDefaultCheck6"></label> </div></td>

					      <td scope="row"><textarea placeholder="Type here..." class="form-control" id="commentRatingTwo" rows="4"></textarea>
					      </td>
					    </tr>	
						</tbody>
					</table>

					<div class="form-group">
						<a href="#" class="btn btn-primary" id="prev-3">Previous</a>
						<a href="#" class="btn btn-primary" id="cont-4">Continue</a>
					</div>
				</div>

				<div id="fifth">
					<h5 class="text-center bg-primary p-1 rounded text-light">SECTION D: ACTION PLAN TO IMPROVE PERFORMANCE</h5>
					<p>The Action Plan shall be jointly agreed during the performance appraisal meeting, taking into consideration the Appraisee’s required job competences and the identified performance gaps. The action plan to improve performance may include; Training, Coaching, mentoring, attachment, job rotation, counseling and or provision of other facilities and resources. Where the plan (s) involves formal training of the Appraisee, the record should be forwarded to the Training Committee.</p><br>

						<div class="input-group">
						  <div class="input-group-prepend">
						    <span class="input-group-text">Performance Gap</span>
						  </div>
						  <textarea placeholder="Type here..." class="form-control" aria-label="With textarea"></textarea>
						</div><br>

						<div class="input-group">
						  <div class="input-group-prepend">
						    <span class="input-group-text">Agreed Action</span>
						  </div>
						  <textarea placeholder="Type here..." class="form-control" aria-label="With textarea"></textarea>
						</div><br>

						<div class="input-group">
						  <div class="input-group-prepend">
						    <span class="input-group-text">Time frame</span>
						  </div>
						  <textarea placeholder="Type here..." class="form-control" aria-label="With textarea"></textarea>
						</div><br>

					<div class="form-group">
						<a href="#" class="btn btn-primary" id="prev-4">Previous</a>
						<a href="#" class="btn btn-primary" id="cont-5">Continue</a>
					</div>
				</div>

				<div id="sixth">
					<h5 class="text-center bg-primary p-1 rounded text-light">SECTION E: COMMENTS, RECOMMENDATIONS (IF ANY) AND SIGNATURES</h5>
					<p>This section is to be completed by the Appraisee, Appraiser and the counter signing Officers. It is a confirmation that the appraisal meeting took place and that there was agreement or if there was disagreement, it was resolved. It is also confirmation that the action plan to improve performance was discussed and agreed upon. The Appraisee / Appraiser / countersigning officer should use this section to comment about the job, career and any other relevant information.</p><br><hr class="rounded">

					<h5>COMMENTS OF THE APPRAISEE</h5>
					<div class="form-group">
					  <textarea placeholder="Type here..." class="form-control" id="commentsOfAppraisee" rows="6"></textarea>
					</div>

					<div class="input-group">
						  <div class="input-group-prepend">
						    <span class="input-group-text">Signature</span>
						  </div>
						  <textarea placeholder="Type here..." class="form-control" aria-label="With textarea"></textarea>
						</div><br>

					<div class="form-group">
						<label for="dob">Date</label>
						<input type="date" name="dob" class="form-control" placeholder="Date">
					</div><br><hr class="rounded">

					<h5>COMMENTS OF THE APPRAISER</h5>
					<div class="form-group">
					  <textarea placeholder="Type here..." class="form-control" id="commentsOfAppraisee" rows="6"></textarea>
					</div>

					<div class="input-group">
						  <div class="input-group-prepend">
						    <span class="input-group-text">Signature</span>
						  </div>
						  <textarea placeholder="Type here..." class="form-control" aria-label="With textarea"></textarea>
						</div><br>

					<div class="form-group">
						<label for="dob">Date</label>
						<input type="date" name="dob" class="form-control" placeholder="Date">
					</div><br><p></p><hr class="rounded">

					<h5>COMMENTS OF THE COUNTERSIGNING OFFICER/SUPERVISOR OF APPRAISER</h5>
					<div class="form-group">
					  <textarea placeholder="Type here..." class="form-control" id="commentsOfAppraisee" rows="6"></textarea>
					</div>

					<div class="form-group">
						<label for="appraiseeName">Name of Countersigning Officer</label>
						<input type="text" name="name" class="form-control" placeholder="Full name">
					</div>

					<div class="form-group">
						<label for="appraiseeName">Job Title</label>
						<input type="text" name="name" class="form-control" placeholder="Full name">
					</div><br>

					<div class="input-group">
						  <div class="input-group-prepend">
						    <span class="input-group-text">Signature</span>
						  </div>
						  <textarea placeholder="Type here..." class="form-control" aria-label="With textarea"></textarea>
					</div><br>

					<div class="form-group">
						<label for="dob">Date</label>
						<input type="date" name="dob" class="form-control" placeholder="Date">
					</div><br><p></p><hr class="rounded">

					<h5>COMMENTS OF THE RESPONSIBLE OFFICER</h5>
					<div class="form-group">
					  <textarea placeholder="Type here..." class="form-control" id="commentsOfAppraisee" rows="6"></textarea>
					</div>

					<div class="form-group">
						<label for="appraiseeName">Name</label>
						<input type="text" name="name" class="form-control" placeholder="Full name">
					</div><br>

					<div class="form-group">
						<label for="appraiseeName">Job Title</label>
						<input type="text" name="name" class="form-control" placeholder="Full name">
					</div><br>

					<div class="input-group">
						  <div class="input-group-prepend">
						    <span class="input-group-text">Signature</span>
						  </div>
						  <textarea placeholder="Type here..." class="form-control" aria-label="With textarea"></textarea>
					</div><br>

					<div class="form-group">
						<label for="dob">Date</label>
						<input type="date" name="dob" class="form-control" placeholder="Date">
					</div>

					<div class="form-group">
						<a href="#" class="btn btn-primary" id="prev-5">Previous</a>
						<a href="#" class="btn btn-primary" id="cont-6">Complete</a>
					</div>
				</div>

			<div id="final">
				<div class="alert alert-success" role="alert">
				  Conglatulations ! You have Successfully Completed Filling In the Form.
				</div>
				<a href="#" class="btn btn-primary" id="prev-6">Previous</a>
				<a href="#" class="btn btn-primary" id="preview">Preview</a>
				<input type="submit" name="submit" class="btn btn-success" value="Submit" id="cont-7">

			</div>
				
			</form>
		</div>
	</div>
	</div>
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#cont-1").click(function(){
			$("#second").show();
			$("#first").hide();
			$("#progressBar").css("width", "50%");
			$("#progressText").html("Step - 2");
		});

		$("#cont-2").click(function(){
			$("#third").show();
			$("#second").hide();
			$("#progressBar").css("width", "60%");
			$("#progressText").html("Step - 3");
		});

		$("#cont-3").click(function(){
			$("#fourth").show();
			$("#third").hide();
			$("#progressBar").css("width", "70%");
			$("#progressText").html("Step - 4");
		});

		$("#cont-4").click(function(){
			$("#fifth").show();
			$("#fourth").hide();
			$("#progressBar").css("width", "80%");
			$("#progressText").html("Step - 5");
		});

		$("#cont-5").click(function(){
			$("#sixth").show();
			$("#fifth").hide();
			$("#progressBar").css("width", "90%");
			$("#progressText").html("Step - 6");
		});

		$("#cont-6").click(function(){
			$("#final").show();
			$("#sixth").hide();
			$("#progressBar").css("width", "100%");
			$("#progressText").html("Completed");
		});

		$("#prev-1").click(function(){
			$("#first").show();
			$("#second").hide();
			$("#progressBar").css("width", "30%");
			$("#progressText").html("Step - 1");
		});

		$("#prev-2").click(function(){
			$("#second").show();
			$("#third").hide();
			$("#progressBar").css("width", "40%");
			$("#progressText").html("Step - 2");
		});

		$("#prev-3").click(function(){
			$("#third").show();
			$("#fourth").hide();
			$("#progressBar").css("width", "50%");
			$("#progressText").html("Step - 3");
		});

		$("#prev-4").click(function(){
			$("#fourth").show();
			$("#fifth").hide();
			$("#progressBar").css("width", "60%");
			$("#progressText").html("Step - 4");
		});

		$("#prev-5").click(function(){
			$("#fifth").show();
			$("#sixth").hide();
			$("#progressBar").css("width", "70%");
			$("#progressText").html("Step - 5");
		});

		$("#prev-6").click(function(){
			$("#sixth").show();
			$("#final").hide();
			$("#progressBar").css("width", "80%");
			$("#progressText").html("Step - 6");
		});

		
	});
</script>

</body>
</html>