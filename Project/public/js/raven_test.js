$(document).ready(function(){
	/*var reqData1 = new FormData();*/
	var quizList = [];
	
	/*var preSelectedAnswer="", preQuiz="", nextSeletectdAnswer="", nextQuiz="";*/
	$('body').on('click', '.pagination a', function(e) {
        e.preventDefault();
        $('#quiz_load a').css('color', '#dfecf6');
        var url = $(this).attr('href');
       // var answer = "", quiz="";
        answerQuiz();
      	getQuiz(url);
        window.history.pushState("", "", url);
    });
    $("#finish").click(function(){
        submitQuiz();
    });

    function getQuiz(url) {
        $.ajax({
            url : url  
        }).done(function (data) {
            $('#quiz_container').html(data);
            var currentQuiz = parseInt($("input:radio").attr('name'));
            var index = isSelectedQuiz(quizList, currentQuiz);
            if(index != -1){
            	var radioBtn = document.getElementById(quizList[index].answer);
            	radioBtn.checked = true;
            }
          
           
        }).fail(function () {
            alert('Quizzes could not be loaded.');
        });
    }
    function submitQuiz(){
    	console.log("submit");
        answerQuiz();
    	var reqData = {
    	 	'_token': $('_token').val(),
            'answers' : quizList,
            'minute': $("#minute").text(),
            'second': $("#second").text()
    	}
        console.log(reqData);
    	$.ajaxSetup({
			headers: {
			    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
    	$.ajax({
            url : '/raven/submit',
            type: 'POST',
            data: reqData,
          //  dataType: 'JSON',
            success: function(data){
            	console.log(data);
            },
             error: function(data) {
             	console.log("error");
        		console.log(data);
    		}
            
        });
    }
	function isSelectedQuiz(arr, quiz){
        var i = -1;
        for(i=0; i < arr.length; i++){
            if(quiz == arr[i].quiz)
                return i;
        }
        return -1;
    }
    function answerQuiz(){
        if($("input[type='radio']:checked").is(':checked')){
            console.log("checked");
            var answer = $("input[type='radio']:checked").val();
            var quiz = $("input[type='radio']:checked").attr('name');
           var item = {
                quiz: quiz,
                answer: answer
            };
            var index = isSelectedQuiz(quizList, quiz);
            if(index != -1){
                quizList[index] = item;
            }else{
                quizList.push(item);
            }
         //   submitQuiz(quiz, answer);
        }
    }
});