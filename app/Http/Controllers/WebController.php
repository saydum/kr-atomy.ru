<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\EmployeeRequest;

class WebController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    public function saveEmployee(EmployeeRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();
        $validatedData['agree'] = $request->boolean('agree');
        Employee::create($validatedData);
        return redirect()
            ->route('web.index')
            ->with('success', 'Сообщение успешно отправлено, скоро с вами свяжется представитель компании Atomy.');
    }
}
