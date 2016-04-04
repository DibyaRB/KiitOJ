{{ content() }}

{{ form('userdetail/update','id':'userdetailForm','onbeforesubmit':'return false') }}

<fieldset>
	


		   {{ form.label('ufname') }}
		
		   {{ form.render('ufname') }}
	
			</br>
	
		   {{ form.label('ulname') }}
		
		   {{ form.render('ulname') }}
		
			</br>

 		   {{ form.label('email') }}
		
		   {{ form.render('email') }}
		
			</br>

	
	     	   {{ form.label('uphno') }}
		
		   {{ form.render('uphno') }}
		
		
			</br>

	<div class="form-actions">
            {{ submit_button('Save','class': 'btn btn-primary btn-large','onclick': 'return Userdetial.validate();') }}
        </div>


</fieldset>
</form>
