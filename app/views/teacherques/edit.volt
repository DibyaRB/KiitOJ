{{ content() }}
<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

      <!--main content start-->
      <section id="main-content">
    <section class="wrapper">
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Add Question </h4>
                      <form class="form-horizontal style-form" method="post" action="http://localhost/KiitOJ/teacherques/update">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Question Name</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="qname" value="{{ ques.q_name }}">
				  <input type="hidden" class="form-control" name="qid" value="{{ ques.q_id }}">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Question Description</label>
                              <div class="col-sm-10">
                                  <textarea class="form-control" name="info" rows="15" >{{ ques.q_description }}</textarea>
                              </div>
                          </div>
			  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Constraints</label>
                              <div class="col-sm-10">
                                  <textarea class="form-control" name="constraints" rows="5" >{{ ques.q_constraint }}</textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Type</label>
                              <div class="col-sm-10">
                                  <select class="form-control" name="sel1" selected="{{ ques.q_type }}">
						  <option value="Warmup">Warm Up</option>
						  <option value="Beginner">Beginner</option>
						  <option value="Implementation">Implementation"</option>
						  <option value="Sorting">Sorting</option>
						  <option value="Greedy">Greedy techniques</option>
						  <option value="Dynamic Programming">Dynamic programming</option>
						</select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Level</label>
                              <div class="col-sm-10">
                                  <select class="form-control" name="qlevel" selected="{{ ques.q_level }}">
						  <option value="Easy">Easy</option>
						  <option value="Medium">Medium</option>
						  <option value="Hard">Hard</option>
						  <option value="Advanced">Advanced</option>
						</select>
                              </div>
                          </div>
			  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Score</label>
                              <div class="col-sm-10">
                                  <input type="number" class="form-control" name="qscore" value="{{ ques.q_score }}" >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Test Case 1</label>
                              <div class="col-sm-5">
				  <input type="hidden" class="form-control" name="box1id" value="{{ test1.te_id }}">
                                  <input class="form-control" type="text" placeholder="Input" name="boxes1i" value="{{ test1.t_input }}" >
                              </div>
			      <div class="col-sm-5">
                                  <input class="form-control"  type="text" placeholder="Output" name="boxes1o" value="{{ test1.t_output }}" >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Test Case 2</label>
                              <div class="col-sm-5">
				  <input type="hidden" class="form-control" name="box2id" value="{{ test2.te_id }}">
                                  <input class="form-control" type="text" placeholder="Input" name="boxes2i" value="{{ test2.t_input }}" >
                              </div>
			      <div class="col-sm-5">
                                  <input class="form-control" type="text" placeholder="Output" name="boxes2o" value="{{ test2.t_output }}" >
                              </div>
                          </div>
			  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Test Case 3</label>
                              <div class="col-sm-5">
				  <input type="hidden" class="form-control" name="box3id" value="{{ test3.te_id }}">
                                  <input class="form-control" type="text" placeholder="Input" name="boxes3i" value="{{ test3.t_input }}" >
                              </div>
			      <div class="col-sm-5">
                                  <input class="form-control" type="text" placeholder="Output" name="boxes3o" value="{{ test3.t_output }}" >
                              </div>
                          </div>
			  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Test Case 4</label>
                              <div class="col-sm-5">
				  <input type="hidden" class="form-control" name="box4id" value="{{ test4.te_id }}">
                                  <input class="form-control" type="text" placeholder="Input" name="boxes4i" value="{{ test4.t_input }}" >
                              </div>
			      <div class="col-sm-5">
                                  <input class="form-control" type="text" placeholder="Output" name="boxes4o" value="{{ test4.t_output }}" >
                              </div>
                          </div>
			  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Visible To Practice Ground</label>
			      <div class="col-sm-5 text-center">
                                  <div class="checkbox">
						  <label>
						    <input value="1" type="checkbox" name="qvisible" {% if (ques.q_visible == 1) %} checked {% endif %}>
						  </label>
				  </div>
                              </div>
			      <div class="form-group">
				<div class="col-sm-3"></div>
				<div class="col-sm-6 text-center">
                                  <input class="form-control btn btn-theme btn-block" type="Submit" value="Add Question">
                              </div>
			  </div>
                          </div>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->

