
$(document).ready(function(){
	//Задаем параметры для всех модалов
    $('.modal').modal({
    	dismissible: true,
    	opacity: .2,
    });

    //Кнопа "Войти" в форме входа
    $('#loginbutton').on('click', function() {
    	$(this).hide();
    	$('.preloader-wrapper').show();
		axios.post('/login', {
			login: $('#name').val(),
			password: $('#password').val()
		})
		.then(function (response) {
			if (response.data.verified) {
				location.reload();
			} else {
				$('#loginbutton').show();
    			$('.preloader-wrapper').hide();
				$('#errortext').text('Неверный пароль');
			}
		})
		.catch(function (error) {
			console.log(error);
		});
    });

    //Кнопка "Запостить" в форме "Новый пост"
    $('#postbutton').on('click', function() {
    	$(this).hide();
    	$('.preloader-wrapper').show();
		axios.post('/post/create', {
			name: $('#postname').val(),
			text: $('#posttext').val()
		})
		.then(function (response) {
			location.reload();
		})
		.catch(function (error) {
			console.log(error);
		});
    });

    //Красная кнопка удаления поста
    $('.deletepost').on('click', function() {	
    	let idtext = $(this).parents('.card').find('.postid').text();
		let blogpost = $(this).parents('.row')
    	axios.post('/post/delete', {
			id: idtext
		})
		.then(function (response) {
			blogpost.slideUp('2000');
		})
		.catch(function (error) {
			console.log(error);
		});
    });

    // Почти зеленая кнопка изменения поста [открывает форму]
    $('.editpost').on('click', function() {
    	let idtext = $(this).parents('.card').find('.postid').text();
    	let postname = $(this).parents('.card').find('.postname').text();
    	let posttext = $(this).parents('.card').find('.posttext').text();
    	$('#editmodal').modal({
    		dismissible: true,
    		opacity: .2,
    		ready: function(modal, trigger) {
    			modal.find('#posteditid').val(idtext);
        		modal.find('#posteditname').val(postname);
        		modal.find('#postedittext').val(posttext);
        		Materialize.updateTextFields();
      		}
    	})
    	$('#editmodal').modal('open');
    });

    //Кнопка для сохранения изменений поста [в форме]
    $('#posteditbutton').on('click', function() {
    	$(this).hide();
    	$('.preloader-wrapper').show();
    	let postid = $('#posteditid').val();
    	let postname = $('#posteditname').val();
    	let posttext = $('#postedittext').val();
    	axios.post('/post/update', {
    		id: postid,
			name: postname,
			text: posttext
		})
		.then(function (response) {
			location.reload();
		})
		.catch(function (error) {
			console.log(error);
		});
    });
});