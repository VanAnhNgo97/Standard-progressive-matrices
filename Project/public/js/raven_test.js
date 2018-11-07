$(document).ready(function(){
	var reqData1 = new FormData();
	var preSelectedAnswer="", preQuiz="", nextSeletectdAnswer="", nextQuiz="";
	$('body').on('click', '.pagination a', function(e) {
        e.preventDefault();
        $('#quiz_load a').css('color', '#dfecf6');
        var url = $(this).attr('href');
        var answer = "", quiz="";
        if($("input[type='radio']:checked").is(':checked')){
        	console.log("checked");
        	answer = $("input[type='radio']:checked").val();
        	quiz = $("input[type='radio']:checked").attr('name');
        }else{
        	console.log("nochecked");
        }
        
       // reqData1.append("quiz", answer);
        console.log(quiz + "--" + answer);
      //  var option = {'content' : reqData1};
      	if($('#quiz_load a').attr('rel') == 'prev'){
      		nextSeletectdAnswer = answer;
      		nextQuiz = quiz;
      		console.log("prev - " + preQuiz + "--" + preSelectedAnswer);
      		getQuiz(url, preQuiz,preSelectedAnswer);
      	}else{

      		preSelectedAnswer = answer;
      		preQuiz = quiz;
      		console.log("next --" + nextQuiz + "--" + nextSeletectdAnswer);
      		getQuiz(url, nextQuiz, nextSeletectdAnswer);
      	}
        submitQuiz(quiz, answer);
        window.history.pushState("", "", url);
    });

    function getQuiz(url, quiz, selected_answer) {
        $.ajax({
            url : url  
        }).done(function (data) {
		//	console.log(data);        	
            $('#quiz_container').html(data);
            if(quiz != "" && selected_answer != ""){
            	console.log("ko null kia");
            	var radioBtn = document.getElementById(selected_answer);
            	radioBtn.checked = true;
            	//console.log($("input:radio[name=10]"));
        /*    	var radio = "\"input:radio[name=\'" + quiz + "\']\"";
            	console.log(radio);
            	var radioBtn = $("input:radio");
            //	var radioBtn = $(radio);
            	console.log(radioBtn);
            	radioBtn.filter([value='35']).prop('checked', true);
            	radioBtn.filter("\'[value=\'" + selected_answer +"\']\'").prop('checked', true);*/
            }
           
        }).fail(function () {
            alert('Quizzes could not be loaded.');
        });
    }
    function submitQuiz(quiz, selected_answer){
    	console.log("submit");
    	 var reqData = {
    	 	 '_token': $('_token').val(),
    		'quiz_id': quiz,
    		'answer_id': selected_answer
    	}
    	$.ajaxSetup({
			headers: {
			    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
    	$.ajax({
            url : '/raven/submit',
            type: 'POST',
            data: JSON.stringify(reqData),
            dataType: 'JSON',
            success: function(data){
            	console.log(data);
            },
             error: function(data) {
             	console.log("error");
        		console.log(data);
    		}
            
        });
    }
	
});