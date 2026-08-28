<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->get();

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'student_id' => 'required|string|max:50|unique:students,student_id',
        'first_name' => 'required|string|max:100',
        'middle_name' => 'nullable|string|max:100',
        'last_name' => 'required|string|max:100',
        'email' => 'required|email|max:255|unique:students,email',
        'mobile_number' => 'required|numeric',
        'date_of_birth' => 'required|date',
        'gender' => 'required|string',
        'program' => 'required|string',
        'year_level' => 'required|string',
        'address' => 'required|string',
        'profile_picture' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $profilePicturePath = $request
        ->file('profile_picture')
        ->store('profile-pictures', 'public');

    $student = new Student();

    $student->student_id = $validated['student_id'];
    $student->first_name = $validated['first_name'];
    $student->middle_name = $validated['middle_name'];
    $student->last_name = $validated['last_name'];
    $student->email = $validated['email'];
    $student->mobile_number = $validated['mobile_number'];
    $student->gender = $validated['gender'];
    $student->date_of_birth = $validated['date_of_birth'];
    $student->program = $validated['program'];
    $student->year_level = $validated['year_level'];
    $student->address = $validated['address'];
    $student->profile_picture = $profilePicturePath;

    $student->save();

    return redirect()
        ->route('students.show', $student)
        ->with('success', 'Student registered successfully!');
}

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }
}