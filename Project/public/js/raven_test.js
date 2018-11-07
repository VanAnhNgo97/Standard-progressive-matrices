$(document).ready(function(){
	var reqData1 = new FormData();
	var quizList = [];
	var index = 0;
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
        	index = parseInt(quiz);
        	quizList[index] = answer;
            submitQuiz(quiz, answer);
        }else{
        	console.log("nochecked");
        }
        console.log(quiz + "--" + answer);
      //  var option = {'content' : reqData1};
      	console.log($('#quiz_load a').attr('rel'));
      	
      	getQuiz(url);
        
        window.history.pushState("", "", url);
    });

    function getQuiz(url) {
        $.ajax({
            url : url  
        }).done(function (data) {
		//	console.log(data);        	
            $('#quiz_container').html(data);
            var quiz = parseInt($("input:radio").attr('name'));
            if(quizList[quiz] != undefined){
            	var radioBtn = document.getElementById(quizList[quiz]);
            	radioBtn.checked = true;
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