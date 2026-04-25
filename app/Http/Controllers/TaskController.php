<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

public function index()
{
    $this->authorize('viewAny', Task::class);

    $tasks = auth()->user()
        ->tasks()
        ->orderByRaw("FIELD(priority, 'haute', 'moyenne', 'basse')")
        ->get();

    return view('tasks.index', compact('tasks'));
}

    public function create()
    {
        $this->authorize('create', Task::class);
        return view('tasks.create');
    }

    public function store(Request $request)
{
    $request->validate([
    'title' => 'required|min:3|max:255',
    'description' => 'nullable|max:1000',
    'priority' => 'required|in:haute,moyenne,basse',
]);

    auth()->user()->tasks()->create([
    'title' => $request->title,
    'description' => $request->description,
    'priority' => $request->priority,
]);

    return redirect()->route('tasks.index')
                     ->with('success', 'Tâche créée !');
}

    public function edit(Task $task)
    {
        $this->authorize('update', $task);
        return view('tasks.edit', compact('task'));
    }

public function update(Request $request, Task $task)
{
    $this->authorize('update', $task);

    $request->validate([
        'title' => 'required|min:3|max:255',
        'priority' => 'required|in:haute,moyenne,basse',
    ]);

    $task->update([
        'title' => $request->title,
        'description' => $request->description,
        'completed' => $request->has('completed'),
        'priority' => $request->priority, // 👈 AJOUT IMPORTANT
    ]);

    return redirect()->route('tasks.index')
                     ->with('success', 'Tâche modifiée !');
}

    public function destroy(Task $task)
{
    $this->authorize('delete', $task);
    $task->delete();

    return redirect()->route('tasks.index')
                     ->with('success', 'Tâche supprimée !');
}
}
?>