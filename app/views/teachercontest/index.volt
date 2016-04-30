{{ content() }}
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
                          <h4><i class="fa fa-angle-right"></i> Your Contests </h4><hr><table class="table table-striped table-advance table-hover">
	                  	  	  
	                  	  	  
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Contest Name</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Duration</th>
                                  <th><i class="fa fa-bookmark"></i> Date </th>
                                  <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              
                              {% for con in contests %}
				<tr>
					<td><a href="http://localhost/KiitOJ/teachercontest/view/{{ con.contets_id }}">{{ con.name }}</a></td>
					<td>{{ con.duration }}</td>
					<td>{{ con.date }}</td>
					<td>
					<a href="http://localhost/KiitOJ/teachercontest/edit/{{ con.contest_id }}"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                        <a href="http://localhost/KiitOJ/teachercontest/delete/{{ con.contest_id }}"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
					</td>
				</tr>
				{% endfor %}
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div>

                    </div><!-- /row -->
	      
              </div><! --/row -->
          </section>
      </section>
