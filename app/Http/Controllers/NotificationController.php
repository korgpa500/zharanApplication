<?php

namespace App\Http\Controllers;

use App\Register;
use App\Suggestion;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    function index()
    {
        $suggestions = Suggestion::orderBy('created_at', 'desc')->paginate(5);
        $registers = Register::orderBy('created_at', 'desc')->paginate(5);
        return view('notifications.index')->with('suggestions', $suggestions)->with('registers', $registers);
    }

    function showSuggestion($suggestion_id)
    {
        $suggestion = Suggestion::find($suggestion_id);
        $suggestion->read = 1;
        $suggestion->save();
        return view('notifications.suggestion_show')->with('suggestion', $suggestion);
    }
}
