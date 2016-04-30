{{ content() }}

<section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
                  <div class="row mt">
			<div class="col-md-12">
                      <div class="content-panel">
                          <h4><i class="fa fa-angle-right"></i> {{ ques.q_name }} </h4><hr>

			  <h5><i class="fa fa-anchor"></i> Description: </h5><br>{{ ques.q_description }}<hr><br>
			  <h5><i class="fa fa-anchor"></i> Constraints: </h5><br>{{ ques.q_constraint }}<hr><br>
			  <h5><i class="fa fa-anchor"></i> Score: </h5><br>{{ ques.q_score }}<hr><br>
			  
			  <form class="form-horizontal style-form" method="post" action="http://localhost/KiitOJ/practice/submit">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Your Program</label>
                              <div class="col-sm-10">
				  <input type="hidden" class="form-control" name="qid" value="{{ ques.q_id }}">
                                  <textarea name="answer" rows="10" cols="15"></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Language</label>
                              <div class="col-sm-10">
                                  <select class="form-control" name="lang">
						  <option value="1">C</option>
						  <option value="2">C++</option>
						  <option value="3">Java</option>
						  <option value="5">Python</option>
						  <option value="7">Php</option>
						  <option value="8">Ruby</option>
						  <option value="9">C#</option>
						  <option value="20">JavaScript</option>
						  <option value="32">Objective C</option>
						</select>
                              </div>
                          </div>

			  <div class="form-group">
				<div class="col-sm-3"></div>
				<div class="col-sm-6 text-center">
                                  <input class="form-control btn btn-theme btn-block" type="Submit" value="Submit Answer">
                              </div>
			  </form>
                      </div><!-- /content-panel -->
                  </div>

                    </div><!-- /row -->
	      
              </div><! --/row -->
          </section>
      </section>
