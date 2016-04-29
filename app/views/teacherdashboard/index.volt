{{ content() }}
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
                  
                  	<div class="row mtbox">
                  		
                  		<div class="col-md-4 col-sm-4 col-md-offset-2 box0">
                  			<div class="box1">
					  			<span class="li_news"></span>
					  			<h3>+10</h3>
                  			</div>
					  			<p>You have set 23 practice Questions.</p>
                  		</div>
                  		<div class="col-md-4 col-sm-4 box0">
                  			<div class="box1">
					  			<span class="li_data"></span>
					  			<h3>14</h3>
                  			</div>
					  			<p>You have created 14 Contests</p>
                  		</div>
                  	
                  	</div><!-- /row mt -->	
                  
                      
                      <div class="row mt">
			<div class="col-md-12">
                      <div class="content-panel">
                          <h4><i class="fa fa-angle-right"></i> Recent Questions </h4><hr><table class="table table-striped table-advance table-hover">
	                  	  	  
	                  	  	  
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
                              
                              {% for que in ques %}
				<tr>
					<td>{{ que.q_name }}</td>
					<td>{{ que.q_type }}</td>
					<td>{{ que.q_score }}</td>
					<td>{% if que.q_visible == 0 %} <span class="label label-warning label-mini">Invisible</span> {% else %} <span class="label label-success label-mini">Visible</span>{% endif %}</td>
					<td>
					<button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
					</td>
				</tr>
				{% endfor %}
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
                                  <th><i class=" fa fa-edit"></i> Status </th>
                              </tr>
                              </thead>
                              <tbody>
                              {% for con in contests %}
				<tr>
					<td>{{ con.name }}</td>
					<td>{{ con.duration }}</td>
					<td>{{ con.date }}</td>
					<td>{% if que.q_visible == 0 %} <span class="label label-warning label-mini">Invisible</span> {% else %} <span class="label label-success label-mini">Visible</span>{% endif %}</td>
					<td>
					<button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
					</td>
				</tr>
				{% endfor %}
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->				
		</div><!-- /row -->
					
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
              </div><! --/row -->
          </section>
      </section>

{{ javascript_include("js/sparkline-chart.js") }}
{{ javascript_include("js/zabuto_calendar.js") }}
<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to KIIT Online Judge!',
            // (string | mandatory) the text inside the notification
            text: '{{ name }}, Hope you have a wonderful programming expeience!',
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
