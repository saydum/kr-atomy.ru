<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Employee;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\EmployeeRequest;

class FormController extends Controller
{
    public function send(EmployeeRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();
        $validatedData['agree'] = $request->boolean('agree');

        $employee = Employee::create($validatedData);

        Mail::to('example@mail.com')->send(new SendMail($employee));

        return redirect()
            ->route('web.index')
            ->with('success', 'Сообщение успешно отправлено, скоро с вами свяжется представитель компании Atomy.');
    }
}
