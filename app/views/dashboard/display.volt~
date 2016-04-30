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
                              
                              {% for ques in quest %}
				<tr>
					<td><a href="http://localhost/KiitOJ/practice/answer/{{ ques.q_id }}">{{ ques.q_name }}</a></td>
					<td>{{ ques.q_type }}</td>
					<td>{{ ques.q_score }}</td>
					<td>{% if ques.q_visible == 0 %} <span class="label label-warning label-mini">Invisible</span> {% else %} <span class="label label-success label-mini">Visible</span>{% endif %}</td>
					<td>
					<a href="http://localhost/KiitOJ/practice/answer/{{ ques.q_id }}"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
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
