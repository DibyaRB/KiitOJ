<?php echo $this->getContent(); ?>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->


      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
                  <div class="row mt">
			<div class="col-md-12">
                      <div class="content-panel">
                          <h4><i class="fa fa-angle-right"></i> Your Questions </h4><hr><table class="table table-striped table-advance table-hover">
	                  	  	  
	                  	  	  
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Question Name</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Type</th>
                                  <th><i class="fa fa-bookmark"></i> Max Score </th>
                                  <th><i class=" fa fa-edit"></i> Status</th>
                                  <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              
                              <?php foreach ($quest as $ques) { ?>
				<tr>
					<td><a href="http://localhost/KiitOJ/practice/answer/<?php echo $ques->q_id; ?>"><?php echo $ques->q_name; ?></a></td>
					<td><?php echo $ques->q_type; ?></td>
					<td><?php echo $ques->q_score; ?></td>
					<td><?php if ($ques->q_visible == 0) { ?> <span class="label label-warning label-mini">Invisible</span> <?php } else { ?> <span class="label label-success label-mini">Visible</span><?php } ?></td>
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
	      
              </div><! --/row -->
          </section>
      </section>
