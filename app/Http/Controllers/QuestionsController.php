<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;
use App\Question;
use App\Http\Requests;

class QuestionsController extends Controller
{
    public function index() {
        $questions = Question::all();

        return view('questions.index', compact('questions'));
    }

//    Create is where the user will answer the questions
//    public function create() {
//
//        $questions = Question::all();
//
//        return view('questions.create', compact('questions', 'answer'));
//    }

    /**
     * @return string
     */
    public function show($id)
    {
        $question = Question::find($id);

        return view('questions.show', compact('question'));

    }

    public function edit($id)
    {
        $questions = Question::find($id);
        $answers = Answer::all();

        return view('questions.create', compact('questions', 'answers'));
    }
}
