<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Auth;

use App\PavluvQuestionnaire;

class DashboardController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      return View::make('dashboard.index');
    }
    public function showNotifications()
    {
      return View::make('dashboard.notifications');
    }
    public function showProfile()
    {
      return View::make('dashboard.profile');
    }
    public function showSiredam()
    {
      return View::make('dashboard.siredam');
    }
    public function showWaitlist()
    {
      return View::make('dashboard.waitlist');
    }
    public function showApplications()
    {
      return View::make('dashboard.applications');
    }
    public function showKennel()
    {
      return View::make('dashboard.kennel')->with
      ([
        'kennel' => Auth::user()->kennel,
      ]);
    }
    public function showBilling()
    {
      return View::make('dashboard.billing');
    }
    public function showQuestionnaire()
    {
      $questions = PavluvQuestionnaire::all();
      return view('dashboard.questionnaire')->with
      ([
        'questions' => $questions
      ]);
    }
    public function showLitterWizard()
    {
      return view('dashboard.new-litter')->with
      ([
        'sires' => Auth::user()->kennel->sires,
        'dams' => Auth::user()->kennel->dams,
      ]);
    }
    public function showPuppyManager()
    {
      return view('dashboard.manage-puppies');
    }
}
