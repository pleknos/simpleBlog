<div id="modal2" class="modal">
	<div class="modal-content">
	  <div class="row">
	    <form class="col s12">
	      <div class="row">
	        <div class="input-field col s6">
	          <input id="postname" type="text">
	          <label for="first_name">Заголовок</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <textarea id="posttext" class="materialize-textarea"></textarea>
	          <label for="first_name">Текст поста</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s8">
	        	<?php require 'loader.php' ?>
	          <a id="postbutton" class="waves-effect waves-light btn">Запостить</a>
	        </div>
	      </div>
	    </form>
	  </div>	
	</div>
</div>