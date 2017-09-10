<div class="blog">
	<?php foreach($posts as $post) : ?>
		<div class="row">
			<div class="col s12">
				<div class="card brown lighten-1">
					<?php if($_SESSION['admin']) : ?>
						<div class="cardmenu">
							<a class="btn-small btn-floating teal accent-5 editpost">
								<i class="material-icons">edit</i>
							</a>
							<a class="btn-small btn-floating  red darken-3 deletepost">
								<i class="material-icons">close</i>
							</a>
						</div>	
					<?php endif ?>
					<div class="card-content white-text">
						<span class="postid"><?= $post->id ?></span>						
						<span class="card-title">
							<span class="postname"><?= $post->name ?></span>	
						</span>				
						<p class="posttext"><?= $post->text ?></p>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach ?>
</div>

<div id="editmodal" class="modal">
	<div id="posteditid"></div>
	<div class="modal-content">
	  <div class="row">
	    <form class="col s12">
	      <div class="row">
	        <div class="input-field col s6">
	          <input id="posteditname" type="text">
	          <label class="active" for="first_name">Заголовок</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <textarea id="postedittext" class="materialize-textarea"></textarea>
	          <label class="active" for="first_name">Текст поста</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s8">
			  		<?php require 'shared/loader.php' ?>
	          <a id="posteditbutton" class="waves-effect waves-light btn">Изменить</a>
	        </div>     
	      </div>
	    </form>
	  </div>	
	</div>
</div>