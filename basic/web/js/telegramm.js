function SaveTelegramMasage(){
	$('#telegramMasage').val();
	$.ajax({
        url: 'index.php?r=site%2Ftelegramsave',
        type: 'POST',
        data: {
        	text:$('#telegramMasage').val(),
        },
        success: function(res){
            window.location.reload();
        },
        error: function(){
            alert('Не удалось отправить');
        }
    });
}