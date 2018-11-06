<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Quiz;
use App\Model\Answer;
use App\Model\CorrectAnswer;
class QuizController extends Controller
{
    //
    public function Create(Request $request)
    {
    	$quiz = new Quiz;
    	$destination = '';
    	$quiz->raven_code = $request->raven_code;
    	$quiz->category = $request->category;
    	$nummberCorrectAnswer = (int)$request->correct_answer;
    	$i = 1;
    	echo(gettype($i));
    	if($request->File('quiz_image')){
    		$file = $request->quiz_image;
    		$name = $file->getClientOriginalName();
    		$fileName = $quiz->raven_code .'_'. $name;
    		echo $fileName;
    		$destination = 'images/quiz/' . $quiz->category;
    		$file->move($destination, $fileName);
    		$quiz->image_content = $destination .'/' . $fileName;
    	}else{
    		echo "noo";
    	}
    	$quiz->save();
    	if($request->hasFile('answer_images')){
    		$answerFiles = $request->answer_images;
    		$i = 1;
    		foreach ($answerFiles as $answerFile) {
    			$answer = new Answer;
    			$answer->number = $i;
    			$name = $answerFile->getClientOriginalName();
    			$fileName = $quiz->raven_code . '_' . 'Answer' . $i . '_' . $name;
	    		$answerFile->move($destination, $fileName);
	    		$answer->image_content = $destination . '/' . $fileName;
	    		$answer->quiz_id = $quiz->id;
	    		$answer->save();
	    		if($i == $nummberCorrectAnswer){
	    			$correctAnswer = new CorrectAnswer;
	    			echo "ok";
	    			$correctAnswer->quiz_id = $quiz->id;
	    			echo "ok2";
	    			$correctAnswer->answer_id = $answer->id;
	    			$correctAnswer->save();
	    		}
	    		$i++;
    		}
    	}
    	return redirect()->route('AddQuiz');
    }
}
