<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a paginated list of users.
     */
    public function index(): View
    {
        $viewData = [
            'users' => User::paginate(10),
        ];

        return view('users.index', $viewData);
    }

    /**
     * Show the form to create a new user.
     */
    public function create(): View
    {
        return view('users.create');
    }

    /**
     * Store a newly created user.
     */
    public function store(StoreUserRequest $request): RedirectResponse
    {
        $user = new User;
        $user->setName($request->validated('name'));
        $user->setEmail($request->validated('email'));
        $user->setPassword($request->validated('password'));
        $user->setAddress($request->validated('address'));
        $user->save();

        return redirect()->route('users.index')->with('status', 'Usuario creado correctamente.');
    }

    /**
     * Display a single user.
     */
    public function show(User $user): View
    {
        $viewData = [
            'user' => $user,
        ];

        return view('users.show', $viewData);
    }

    /**
     * Show the form to edit an existing user.
     */
    public function edit(User $user): View
    {
        $viewData = [
            'user' => $user,
        ];

        return view('users.edit', $viewData);
    }

    /**
     * Update an existing user.
     */
    public function update(UpdateUserRequest $request, User $user): RedirectResponse
    {
        $user->setName($request->validated('name'));
        $user->setEmail($request->validated('email'));
        $user->setAddress($request->validated('address'));

        if ($request->filled('password')) {
            $user->setPassword($request->validated('password'));
        }

        $user->save();

        return redirect()->route('users.index')->with('status', 'Usuario actualizado correctamente.');
    }

    /**
     * Remove the given user.
     */
    public function destroy(User $user): RedirectResponse
    {
        $user->delete();

        return redirect()->route('users.index')->with('status', 'Usuario eliminado correctamente.');
    }
}
