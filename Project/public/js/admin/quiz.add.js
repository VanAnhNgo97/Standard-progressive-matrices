$(document).ready(function(){
	init();
	function init(){
		$("#quiz_image").filepicker();
		$("#answer_images").filepicker();
		$("#quiz_image").change(function(e){
			console.log("quiz_image" + $("#quiz_image").val());
		});
		$("#answer_images").change(function(){
			console.log("answer_images" + $("#answer_images").val());
		});
	}
});