<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Http\Requests\StoreTestRequest;
use App\Http\Requests\UpdateTestRequest;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tests = Test::paginate(config('pagination.count'));
        return view('admin.tests.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('admin.tests.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestRequest $request)
    {
          Test::create($request->validated());

                return redirect()
                    ->route('admin.tests.index')
                    ->with('success', __('keywords.test_added'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Test $test)
    {
        return view('admin.tests.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test $test)
    {
            return view('admin.tests.edit', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestRequest $request, Test $test)
    {
         $test->update($request->validated());

                return redirect()
                    ->route('admin.tests.index')
                    ->with('success', __('keywords.test_updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $test)
    {
         $test->delete();

                return redirect()
                    ->route('admin.tests.index')
                    ->with('success', __('keywords.test_deleted'));
    }
}
