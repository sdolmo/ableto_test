<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use App\Data;
use App\User;
use Charts;
use App\HttpResponse;
use App\Http\Requests\CreateChart;
use Illuminate\Http\Request;



class QuestionsController extends Controller
{
    public function index() {

        $chart = Charts::database(Data::all(), 'bar', 'highcharts')
                        ->setResponsive(false)
                        ->groupBy('3')
                        ->setWidth(0);
//                        ->setLables(['Q1', 'Q2', 'Q3', 'Q4']);


        return view('questions.index', ['chart' => $chart]);
    }

//    Create is where the user will answer the questions
    public function create() {

        $questions = Question::all();
        $answers = Answer::all();

        return view('questions.create', compact('questions', 'answers'));
    }

    /**
     * @return string
     */
    public function show($id)
    {
        $question = Question::find($id);

        return view('questions.show', compact('question'));

    }

    public function store(Request $request)
    {

        Data::create($request->all());

        return redirect('questions');
    }
}
