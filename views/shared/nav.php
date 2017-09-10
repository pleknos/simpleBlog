<nav>
    <div class="nav-wrapper  blue-grey darken-1">
      <div class="container">
        <ul class="right">
        	<?php if (! $_SESSION['admin']) : ?>
  			    <li><a class="modal-trigger" href="#modal1">Войти</a></li>
  		    <?php else : ?>
      			<li><a class="modal-trigger" href="#modal2">Новый пост</a></li>
      			<li><a href="/logout">Выйти</a></li>
  		    <?php endif ?>
        </ul>
        <ul class="left">
          <li><a href="/">Главная</a></li>
          <li><a href="/about">О сайте</a></li>
        </ul>
      </div>
    </div>
 </nav>