<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Quiz;
use App\Model\Answer;
use App\Model\CorrectAnswer;
use App\Model\ReferencesIQ;
use App\Model\Result;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class QuizController extends Controller
{
    //
    protected $score = 0;
    public function Create(Request $request)
    {
        $quiz = new Quiz;
        $destination = '';
        $quiz->raven_code = $request->raven_code;
        $quiz->category = $request->category;
        $nummber_correct_answer = (int)$request->correct_answer;
        $i = 1;
        echo(gettype($i));
        if($request->File('quiz_image')){
            $file = $request->quiz_image;
            $name = $file->getClientOriginalName();
            $file_name = $quiz->raven_code .'_'. $name;
            echo $file_name;
            $destination = 'images/quiz/' . $quiz->category;
            $file->move($destination, $file_name);
            $quiz->image_content = $destination .'/' . $fileName;
        }else{
            echo "noo";
        }
        $quiz->save();
        if($request->hasFile('answer_images')){
            $answer_files = $request->answer_images;
            $i = 1;
            foreach ($answer_files as $answer_file) {
                $answer = new Answer;
                $answer->number = $i;
                $name = $answerFile->getClientOriginalName();
                $file_name = $quiz->raven_code . '_' . 'Answer' . $i . '_' . $name;
                $answer_file->move($destination, $fileName);
                $answer->image_content = $destination . '/' . $fileName;
                $answer->quiz_id = $quiz->id;
                $answer->save();
                if($i == $nummber_correct_answer){
                    $correct_answer = new CorrectAnswer;
                    echo "ok";
                    $correct_answer->quiz_id = $quiz->id;
                    echo "ok2";
                    $correct_answer->answer_id = $answer->id;
                    $correct_answer->save();
                }
                $i++;
            }
        }
        return redirect()->route('AddQuiz');
    }
    public function GetQuizzes(Request $request)
    {
        $quizzes = Quiz::simplePaginate(1);
        if ($request->ajax()) {
            //render partial 
            return view('quiz_container', ['quizzes' => $quizzes])->render();  
        }
    //    return view('index');
        return view('raven_test', ['quizzes' => $quizzes]);
    }
    public function SubmitQuiz(Request $request)
    {
       /* $minute = 60 - (int)$request->minute;
        $second = 60 - (int)$request->second;*/
        $user_answers = $request->answers; //is_array = true
        $result = new Result;
        $result->correct_answers = 0;
        if($user_answers != null)
        {
            foreach ($user_answers as $user_answer) 
            {
                $quiz_id = (int)$user_answer['quiz'];
                $answer_id = (int)$user_answer['answer'];
                $quiz = Quiz::find($quiz_id);
                if($quiz->correctAnswer->answer_id == $answer_id)
                {
                    $result->correct_answers++;
                }
            }
        }

        $reference = ReferencesIQ::where('raven_score', $result->correct_answers)->first();
        $result->iq_score = 0;
        if($reference != null){
            $result->iq_score = $reference->iq_score;
        }
        $result->estimation = ReferencesIQ::estimateIQ($result->iq_score);
        //insert result
        $result->user_id = Auth::id();
        $result->minute = 60 - (int)$request->minute;
        $result->second = 60 - (int)$request->second;
        $result->save();
        return json_encode($result, JSON_UNESCAPED_UNICODE); //Không bị lỗi tiếng Việt
   
        
    }
    public function Test(){
        $reference = ReferencesIQ::where('raven_score', 11)->first();
        return ReferencesIQ::estimateIQ(130);
        if($reference != null){
            return $reference->estimateIQ(102);
        }
    }
    public function GetQuizzesByCate(){
        $quizzes = Quiz::All()->groupBy('category')->toArray();
        return view('admin/quiz_index', ['quizzes' => $quizzes]);
    //    return ($quizzes["A"][1]["id"]);
    }
    public function GetQuizDetail(Request $request){
        $id = $request->id;
        $quizzes = Quiz::simplePaginate(1);
        return view('admin/quiz_detail', ['quizzes' => $quizzes]);
    }
}
