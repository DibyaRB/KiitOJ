<?php echo $this->getContent(); ?>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
                  
                  	<div class="row mtbox">
                  		<div class="col-md-2 col-sm-2 col-md-offset-2 box0">
                  			<div class="box1">
					  			<span class="li_heart"></span>
					  			<h3>1</h3>
                  			</div>
					  			<p>1 is your rank in the university!</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_stack"></span>
					  			<h3><?php echo $score->score; ?></h3>
                  			</div>
					  			<p>Your total score is <?php echo $score->score; ?>!</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_news"></span>
					  			<h3>+<?php echo $nosquestion; ?></h3>
                  			</div>
					  			<p>You solved <?php echo $nosquestion; ?> practice Questions.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_data"></span>
					  			<h3><?php echo $noscontest; ?></h3>
                  			</div>
					  			<p>You have attempted <?php echo $noscontest; ?> Contests</p>
                  		</div>
                  	
                  	</div><!-- /row mt -->	
                  
                      
                      <div class="row mt">
			<div class="col-md-12">
                      <div class="content-panel">
                          <h4><i class="fa fa-angle-right"></i> Recent Submissions </h4><hr><table class="table table-striped table-advance table-hover">
	                  	  	  
	                  	  	  
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Question Name</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Type</th>
                                  <th><i class="fa fa-bookmark"></i> Max Score </th>
                                  <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              
                              <?php foreach ($quest as $ques) { ?>
				<tr>
					<td><a href="http://localhost/KiitOJ/practice/answer/<?php echo $ques->q_id; ?>"><?php echo $ques->q_name; ?></a></td>
					<td><?php echo $ques->q_type; ?></td>
					<td><?php echo $ques->q_score; ?></td>
					<td><?php if ($ques->success == 0) { ?> <span class="label label-warning label-mini">Unsuccessful</span> <?php } else { ?> <span class="label label-success label-mini">Successful</span><?php } ?></td>
					<td>
					<a href="http://localhost/KiitOJ/practice/answer/<?php echo $ques->q_id; ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
					</td>
				</tr>
				<?php } ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div>

                    </div><!-- /row -->
                    
                    				
		<div class="row mt">
			<div class="col-md-12">
                      <div class="content-panel">
                          <h4><i class="fa fa-angle-right"></i> Recent Contests </h4><hr><table class="table table-striped table-advance table-hover">
	                  	  	  
	                  	  	  
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Contest Name</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Duration </th>
                                  <th><i class="fa fa-bookmark"></i> Date </th>
                                 
                              </tr>
                              </thead>
                              <tbody>
                              
                              <?php foreach ($contests as $con) { ?>
				<tr>
					<td><?php echo $con->name; ?></td>
					<td><?php echo $con->duration; ?></td>
					<td><?php echo $con->date; ?></td>
				</tr>
				<?php } ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->				
		</div><!-- /row -->
					
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
              </div><! --/row -->
          </section>
      </section>

<?php echo $this->tag->javascriptInclude('js/sparkline-chart.js'); ?>
<?php echo $this->tag->javascriptInclude('js/zabuto_calendar.js'); ?>
<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to KIIT Online Judge!',
            // (string | mandatory) the text inside the notification
            text: '<?php echo $name; ?>, Hope you Have a wonderful programming Experience!',
            // (string | optional) the image to display on the left
            image: 'http://localhost/KiitOJ/public/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>
