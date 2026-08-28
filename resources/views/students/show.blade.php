<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Profile</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-4xl mx-auto py-10 px-4">

        <!-- Back Button -->
        <div class="mb-6">
            <a
                href="{{ route('students.index') }}"
                class="text-blue-600 hover:text-blue-800 font-semibold"
            >
                ← Back to Students
            </a>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="mb-6 bg-green-100 border border-green-300 text-green-800 px-5 py-4 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <!-- Profile Card -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

            <!-- Header -->
            <div class="bg-blue-600 px-6 py-8 text-center">

                <img
                    src="{{ asset('storage/' . $student->profile_picture) }}"
                    alt="Student Profile Picture"
                    class="w-32 h-32 mx-auto rounded-full object-cover border-4 border-white shadow-md"
                >

                <h1 class="text-2xl font-bold text-white mt-4">
                    {{ $student->first_name }}
                    {{ $student->middle_name }}
                    {{ $student->last_name }}
                </h1>

                <p class="text-blue-100 mt-1">
                    Student ID: {{ $student->student_id }}
                </p>

            </div>

            <!-- Student Information -->
            <div class="p-6 md:p-8">

                <h2 class="text-xl font-bold text-gray-800 mb-6">
                    Student Information
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div>
                        <p class="text-sm text-gray-500">First Name</p>
                        <p class="font-semibold text-gray-800">
                            {{ $student->first_name }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Middle Name</p>
                        <p class="font-semibold text-gray-800">
                            {{ $student->middle_name ?: 'N/A' }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Last Name</p>
                        <p class="font-semibold text-gray-800">
                            {{ $student->last_name }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Student ID</p>
                        <p class="font-semibold text-gray-800">
                            {{ $student->student_id }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Email Address</p>
                        <p class="font-semibold text-gray-800 break-words">
                            {{ $student->email }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Mobile Number</p>
                        <p class="font-semibold text-gray-800">
                            {{ $student->mobile_number }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Date of Birth</p>
                        <p class="font-semibold text-gray-800">
                            {{ $student->date_of_birth }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Gender</p>
                        <p class="font-semibold text-gray-800">
                            {{ $student->gender }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Program</p>
                        <p class="font-semibold text-gray-800">
                            {{ $student->program }}
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Year Level</p>
                        <p class="font-semibold text-gray-800">
                            {{ $student->year_level }}
                        </p>
                    </div>

                    <div class="md:col-span-2">
                        <p class="text-sm text-gray-500">Address</p>
                        <p class="font-semibold text-gray-800">
                            {{ $student->address }}
                        </p>
                    </div>

                </div>

            </div>

            <!-- Footer -->
            <div class="border-t bg-gray-50 px-6 py-5 flex flex-col sm:flex-row gap-3 justify-center">

                <a
                    href="{{ route('students.create') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg text-center"
                >
                    Register Another Student
                </a>

                <a
                    href="{{ route('students.index') }}"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold px-6 py-3 rounded-lg text-center"
                >
                    View All Students
                </a>

            </div>

        </div>

    </div>

</body>
</html>