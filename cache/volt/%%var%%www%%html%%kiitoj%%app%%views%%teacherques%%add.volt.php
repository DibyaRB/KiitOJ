<?php echo $this->getContent(); ?>
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
                      <form class="form-horizontal style-form" method="post" action="http://localhost/KiitOJ/teacherques/add">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Question Name</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="qname">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Question Description</label>
                              <div class="col-sm-10">
                                  <textarea class="form-control" name="info" rows="15"></textarea>
                              </div>
                          </div>
			  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Constraints</label>
                              <div class="col-sm-10">
                                  <textarea class="form-control" name="constraints" rows="5"></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Type</label>
                        <div class="col-sm-10">
                                  <select class="form-control" name="sel1">
						  <option value="1">Warm Up</option>
						  <option value="2">Beginner</option>
						  <option value="3">Implementation"</option>
						  <option value="4">Sorting</option>
						  <option value="5">Greedy techniques</option>
						  <option value="6">Bit Manipulation</option>
						  <option value="6">Dynamic programming</option>
						  <option value="7">Graphs</option>
						</select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Level</label>
                              <div class="col-sm-10">
                                  <select class="form-control" name="qlevel">
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
                                  <input type="number" class="form-control" name="qscore">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Test Case 1</label>
                              <div class="col-sm-5">
                                  <input class="form-control" type="text" placeholder="Input" name="boxes1i">
                              </div>
			      <div class="col-sm-5">
                                  <input class="form-control"  type="text" placeholder="Output" name="boxes1o">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Test Case 2</label>
                              <div class="col-sm-5">
                                  <input class="form-control" type="text" placeholder="Input" name="boxes2i">
                              </div>
			      <div class="col-sm-5">
                                  <input class="form-control" type="text" placeholder="Output" name="boxes2o">
                              </div>
                          </div>
			  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Test Case 3</label>
                              <div class="col-sm-5">
                                  <input class="form-control" type="text" placeholder="Input" name="boxes3i">
                              </div>
			      <div class="col-sm-5">
                                  <input class="form-control" type="text" placeholder="Output" name="boxes3o">
                              </div>
                          </div>
			  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Test Case 4</label>
                              <div class="col-sm-5">
                                  <input class="form-control" type="text" placeholder="Input" name="boxes4i">
                              </div>
			      <div class="col-sm-5">
                                  <input class="form-control" type="text" placeholder="Output" name="boxes4o">
                              </div>
                          </div>
			  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Visible To Practice Ground</label>
			      <div class="col-sm-5 text-center">
                                  <div class="checkbox">
						  <label>
						    <input value="1" type="checkbox" name="qvisible">
						  </label>
				  </div>
                              </div>
			      
                          </div>

			  <div class="form-group">
				<div class="col-sm-3"></div>
				<div class="col-sm-6 text-center">
                                  <input class="form-control btn btn-theme btn-block" type="Submit" value="Add Question">
                              </div>
			  </div>
				
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->

