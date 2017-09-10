<div id="modal1" class="modal">
	<div class="modal-content">
	  <div class="row">
	    <form class="col s12">
	      <div class="row">
	        <div class="input-field col s6">
	          <input id="name" type="text" class="validate">
	          <label for="first_name">Логин //admin</label>
	          <p style="color:red" id="errortext"></p>
	        </div>
	        <div class="input-field col s6">
	          <input id="password" type="password" class="validate">
	          <label for="password">Пароль //12345</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s8">
	        	<?php require 'loader.php' ?>
	          <a id="loginbutton" class="waves-effect waves-light btn">Войти</a>
	        </div>
	      </div>
	    </form>
	  </div>	
	</div>
</div>