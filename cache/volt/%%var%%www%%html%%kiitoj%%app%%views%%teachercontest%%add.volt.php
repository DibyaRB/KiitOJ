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
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Add Contest </h4>
                      <form class="form-horizontal style-form" method="post" action="http://localhost/KiitOJ/teachercontest/add">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Contest Name</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="cname">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Contest Description</label>
                              <div class="col-sm-10">
                                  <textarea class="form-control" name="info" rows="15"></textarea>
                              </div>
                          </div>
			  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Contest duration [In Hours]</label>
                              <div class="col-sm-10">
                                   <input type="numeric" class="form-control" name="duration">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Contest date</label>
                              <div class="col-sm-10">
				<div id="datepicker">
                                   <input type="text"  class="form-control" name="date" value="">
				   <script type="text/javascript">
					$(function(){
						$('*[name=date]').appendDtpicker();
					});
				</script>
				</div>
                              </div>
                          </div>
			<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Question List</label>
                              <div class="col-sm-10">
				<table class="table table-striped table-advance table-hover">
	                  	  	  
	                  	  	  
                              <thead>
                              <tr>
				  <th><i class="fa fa-bullhorn"></i> Select</th>
                                  <th><i class="fa fa-bullhorn"></i> Question Name</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Question Level </th>
                                  <th><i class="fa fa-bookmark"></i> Question Score </th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php foreach ($ques as $que) { ?>
				<tr>
					<td><input value="<?php echo $que->q_id; ?>" type="checkbox" name="question[]">
					<td><?php echo $que->q_name; ?></td>
					<td><?php echo $que->q_level; ?></td>
					<td><?php echo $que->q_score; ?></td>
				</tr>
				<?php } ?>
                              </tbody>
                          </table>
				</div>
                          </div>
			  <div class="form-group">
				<div class="col-sm-3"></div>
				<div class="col-sm-6 text-center">
                                  <input class="form-control btn btn-theme btn-block" type="Submit" value="Add Contest">
                              </div>
			  </div>
				
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->

