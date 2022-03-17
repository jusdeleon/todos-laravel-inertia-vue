<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
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
        $this->gate($todo);

        $request->validate(['completed' => 'required|boolean']);

        $todo->update(['completed' => $request->completed]);

        return back();
    }

    public function destroy(Todo $todo)
    {
        $this->gate($todo);

        $todo->delete();

        return back();
    }

    private function gate(Todo $todo)
    {
        Gate::allowIf(fn ($user) => $user->id === $todo->user_id);
    }
}
