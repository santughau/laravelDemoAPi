<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\ClasslistController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\EventlistController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExpencesController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeworkController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestiondataeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectdataController;
use App\Http\Controllers\TermexamController;
use App\Http\Controllers\VideomController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// /AttendanceController
Route::post('attendance/save',[AttendanceController::class, 'save'] );
Route::post('attendance/getById', [AttendanceController::class, 'getById']);
Route::post('attendance/getInfoById', [AttendanceController::class, 'getInfoById']);
Route::get('attendance/getAll', [AttendanceController::class, 'getAll']);
Route::post('attendance/update', [AttendanceController::class, 'update']);
Route::post('attendance/destroy', [AttendanceController::class, 'delete']);


// /ChapterController
Route::post('chapter/save',[ChapterController::class, 'save'] );
Route::post('chapter/getById', [ChapterController::class, 'getById']);
Route::post('chapter/getInfoById', [ChapterController::class, 'getInfoById']);
Route::get('chapter/getAll', [ChapterController::class, 'getAll']);
Route::post('chapter/update', [ChapterController::class, 'update']);
Route::post('chapter/destroy', [ChapterController::class, 'delete']);

// ClasslistController
Route::post('classlist/save',[ClasslistController::class, 'save'] );
Route::post('classlist/getById', [ClasslistController::class, 'getById']);
Route::post('classlist/getInfoById', [ClasslistController::class, 'getInfoById']);
Route::get('classlist/getAll', [ClasslistController::class, 'getAll']);
Route::post('classlist/update', [ClasslistController::class, 'update']);
Route::post('classlist/destroy', [ClasslistController::class, 'delete']);

// ComplaintController
Route::post('complaint/save',[ComplaintController::class, 'save'] );
Route::post('complaint/getById', [ComplaintController::class, 'getById']);
Route::post('complaint/getInfoById', [ComplaintController::class, 'getInfoById']);
Route::get('complaint/getAll', [ComplaintController::class, 'getAll']);
Route::post('complaint/update', [ComplaintController::class, 'update']);
Route::post('complaint/destroy', [ComplaintController::class, 'delete']);

// EventlistController
Route::post('event/save',[EventlistController::class, 'save'] );
Route::post('event/getById', [EventlistController::class, 'getById']);
Route::post('event/getInfoById', [EventlistController::class, 'getInfoById']);
Route::get('event/getAll', [EventlistController::class, 'getAll']);
Route::post('event/update', [EventlistController::class, 'update']);
Route::post('event/destroy', [EventlistController::class, 'delete']);


// ExamController
Route::post('exam/save',[ExamController::class, 'save'] );
Route::post('exam/getById', [ExamController::class, 'getById']);
Route::post('exam/getInfoById', [ExamController::class, 'getInfoById']);
Route::get('exam/getAll', [ExamController::class, 'getAll']);
Route::post('exam/update', [ExamController::class, 'update']);
Route::post('exam/destroy', [ExamController::class, 'delete']);


// ExpencesController
Route::post('expence/save',[ExpencesController::class, 'save'] );
Route::post('expence/getById', [ExpencesController::class, 'getById']);
Route::post('expence/getInfoById', [ExpencesController::class, 'getInfoById']);
Route::get('expence/getAll', [ExpencesController::class, 'getAll']);
Route::post('expence/update', [ExpencesController::class, 'update']);
Route::post('expence/destroy', [ExpencesController::class, 'delete']);

// FeeController
Route::post('fee/save',[FeeController::class, 'save'] );
Route::post('fee/getById', [FeeController::class, 'getById']);
Route::post('fee/getInfoById', [FeeController::class, 'getInfoById']);
Route::get('fee/getAll', [FeeController::class, 'getAll']);
Route::post('fee/update', [FeeController::class, 'update']);
Route::post('fee/destroy', [FeeController::class, 'delete']);


// GalleryController
Route::post('gallery/save',[GalleryController::class, 'save'] );
Route::post('gallery/getById', [GalleryController::class, 'getById']);
Route::post('gallery/getInfoById', [GalleryController::class, 'getInfoById']);
Route::get('gallery/getAll', [GalleryController::class, 'getAll']);
Route::post('gallery/update', [GalleryController::class, 'update']);
Route::post('gallery/destroy', [GalleryController::class, 'delete']);

// GalleryController
Route::post('gallery/save',[GalleryController::class, 'save'] );
Route::post('gallery/getById', [GalleryController::class, 'getById']);
Route::post('gallery/getInfoById', [GalleryController::class, 'getInfoById']);
Route::get('gallery/getAll', [GalleryController::class, 'getAll']);
Route::post('gallery/update', [GalleryController::class, 'update']);
Route::post('gallery/destroy', [GalleryController::class, 'delete']);

// HomeworkController
Route::post('homework/save',[HomeworkController::class, 'save'] );
Route::post('homework/getById', [HomeworkController::class, 'getById']);
Route::post('homework/getInfoById', [HomeworkController::class, 'getInfoById']);
Route::get('homework/getAll', [HomeworkController::class, 'getAll']);
Route::post('homework/update', [HomeworkController::class, 'update']);
Route::post('homework/destroy', [HomeworkController::class, 'delete']);

// MessagesController
Route::post('message/save',[MessagesController::class, 'save'] );
Route::post('message/getById', [MessagesController::class, 'getById']);
Route::post('message/getInfoById', [MessagesController::class, 'getInfoById']);
Route::get('message/getAll', [MessagesController::class, 'getAll']);
Route::post('message/update', [MessagesController::class, 'update']);
Route::post('message/destroy', [MessagesController::class, 'delete']);


// ProfileController
Route::post('profile/save',[ProfileController::class, 'save'] );
Route::post('profile/getById', [ProfileController::class, 'getById']);
Route::post('profile/getInfoById', [ProfileController::class, 'getInfoById']);
Route::get('profile/getAll', [ProfileController::class, 'getAll']);
Route::post('profile/update', [ProfileController::class, 'update']);
Route::post('profile/destroy', [ProfileController::class, 'delete']);

// QuestiondataeController
Route::post('question/save',[QuestiondataeController::class, 'save'] );
Route::post('question/getById', [QuestiondataeController::class, 'getById']);
Route::post('question/getInfoById', [QuestiondataeController::class, 'getInfoById']);
Route::get('question/getAll', [QuestiondataeController::class, 'getAll']);
Route::post('question/update', [QuestiondataeController::class, 'update']);
Route::post('question/destroy', [QuestiondataeController::class, 'delete']);


// QuizController
Route::post('quiz/save',[QuizController::class, 'save'] );
Route::post('quiz/getById', [QuizController::class, 'getById']);
Route::post('quiz/getInfoById', [QuizController::class, 'getInfoById']);
Route::get('quiz/getAll', [QuizController::class, 'getAll']);
Route::post('quiz/update', [QuizController::class, 'update']);
Route::post('quiz/destroy', [QuizController::class, 'delete']);

// RegistrationController
Route::post('registration/save',[RegistrationController::class, 'save'] );
Route::post('registration/getById', [RegistrationController::class, 'getById']);
Route::post('registration/getInfoById', [RegistrationController::class, 'getInfoById']);
Route::get('registration/getAll', [RegistrationController::class, 'getAll']);
Route::post('registration/update', [RegistrationController::class, 'update']);
Route::post('registration/destroy', [RegistrationController::class, 'delete']);

// ResultController
Route::post('result/save',[ResultController::class, 'save'] );
Route::post('result/getById', [ResultController::class, 'getById']);
Route::post('result/getInfoById', [ResultController::class, 'getInfoById']);
Route::get('result/getAll', [ResultController::class, 'getAll']);
Route::post('result/update', [ResultController::class, 'update']);
Route::post('result/destroy', [ResultController::class, 'delete']);

// StudentController
Route::post('student/save',[StudentController::class, 'save'] );
Route::post('student/getById', [StudentController::class, 'getById']);
Route::post('student/getInfoById', [StudentController::class, 'getInfoById']);
Route::get('student/getAll', [StudentController::class, 'getAll']);
Route::post('student/update', [StudentController::class, 'update']);
Route::post('student/destroy', [StudentController::class, 'delete']);

// SubjectdataController
Route::post('subject/save',[SubjectdataController::class, 'save'] );
Route::post('subject/getById', [SubjectdataController::class, 'getById']);
Route::post('subject/getInfoById', [SubjectdataController::class, 'getInfoById']);
Route::get('subject/getAll', [SubjectdataController::class, 'getAll']);
Route::post('subject/update', [SubjectdataController::class, 'update']);
Route::post('subject/destroy', [SubjectdataController::class, 'delete']);

// SubjectdataController
Route::post('subject/save',[SubjectdataController::class, 'save'] );
Route::post('subject/getById', [SubjectdataController::class, 'getById']);
Route::post('subject/getInfoById', [SubjectdataController::class, 'getInfoById']);
Route::get('subject/getAll', [SubjectdataController::class, 'getAll']);
Route::post('subject/update', [SubjectdataController::class, 'update']);
Route::post('subject/destroy', [SubjectdataController::class, 'delete']);

// TermexamController
Route::post('term/save',[TermexamController::class, 'save'] );
Route::post('term/getById', [SubjectdataController::class, 'getById']);
Route::post('term/getInfoById', [TermexamController::class, 'getInfoById']);
Route::get('term/getAll', [TermexamController::class, 'getAll']);
Route::post('term/update', [TermexamController::class, 'update']);
Route::post('term/destroy', [TermexamController::class, 'delete']);

// VideomController
Route::post('video/save',[VideomController::class, 'save'] );
Route::post('video/getById', [VideomController::class, 'getById']);
Route::post('video/getInfoById', [VideomController::class, 'getInfoById']);
Route::get('video/getAll', [VideomController::class, 'getAll']);
Route::post('video/update', [VideomController::class, 'update']);
Route::post('video/destroy', [VideomController::class, 'delete']);