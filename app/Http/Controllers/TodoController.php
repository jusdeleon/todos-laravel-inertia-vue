<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class TodoController extends Controller
{
    public function index()
    {
        return Inertia::render('Todos/Index', [
            'todos' => Auth::user()->todos()->orderByDesc('created_at')->get(['id', 'name', 'completed'])
        ]);
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|max:255']);

        Auth::user()->todos()->create([
            'name' => $request->name,
            'completed' => false,
        ]);

        return back();
    }

    public function update(Request $request, Todo $todo)
    {
        $request->validate(['completed' => 'required|boolean']);

        $todo->update(['completed' => $request->completed]);

        return back();
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return back();
    }
}
