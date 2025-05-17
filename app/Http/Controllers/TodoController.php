<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class TodoController extends Controller
{
    /**
     * Display a listing of the todos for the authenticated user.
     */
    public function index(Request $request): JsonResponse
    {
        $todos = $request->user()->todos()->orderBy('created_at', 'desc')->get();

        return response()->json($todos);
    }

    /**
     * Store a newly created todo in storage.
     *
     * @throws ValidationException
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
        ]);

        $todo = $request->user()->todos()->create([
            'title' => $validated['title'],
            'content' => $validated['content'] ?? '',
            'completed' => false,
        ]);

        return response()->json($todo, 201);
    }

    /**
     * Display the specified todo.
     */
    public function show(Request $request, string $id): JsonResponse
    {
        $todo = $request->user()->todos()->findOrFail($id);

        return response()->json($todo);
    }

    /**
     * Update the specified todo in storage.
     *
     * @throws ValidationException
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $todo = $request->user()->todos()->findOrFail($id);

        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'content' => 'sometimes|nullable|string',
            'completed' => 'sometimes|boolean',
        ]);

        $todo->update($validated);

        return response()->json($todo);
    }

    /**
     * Remove the specified todo from storage.
     */
    public function destroy(Request $request, string $id): Response
    {
        $todo = $request->user()->todos()->findOrFail($id);
        $todo->delete();

        return response()->noContent();
    }
}
