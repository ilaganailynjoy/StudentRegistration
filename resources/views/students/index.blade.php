<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registered Students</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-6xl mx-auto py-10 px-4">

        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">

            <div>
                <h1 class="text-3xl font-bold text-gray-800">
                    Registered Students
                </h1>

                <p class="text-gray-500 mt-1">
                    Manage and view registered student information
                </p>
            </div>

            <a
                href="{{ route('students.create') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-3 rounded-lg text-center shadow-sm"
            >
                + Register Student
            </a>

        </div>

        <!-- Student Count -->
        <div class="bg-white rounded-xl shadow-sm p-5 mb-6">
            <p class="text-sm text-gray-500">
                Total Registered Students
            </p>

            <p class="text-3xl font-bold text-blue-600 mt-1">
                {{ $students->count() }}
            </p>
        </div>

        <!-- Student Table -->
        <div class="bg-white shadow-lg rounded-xl overflow-hidden">

            @if($students->count() > 0)

                <div class="px-6 py-4 border-b bg-gray-50">
                    <h2 class="font-semibold text-gray-800">
                        Student Records
                    </h2>
                </div>

                <div class="overflow-x-auto">

                    <table class="w-full">

                        <thead class="bg-gray-50 border-b">

                            <tr>

                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">
                                    Photo
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">
                                    Student ID
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">
                                    Name
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">
                                    Email
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">
                                    Program
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">
                                    Action
                                </th>

                            </tr>

                        </thead>

                        <tbody class="divide-y divide-gray-100">

                            @foreach($students as $student)

                                <tr class="hover:bg-blue-50 transition">

                                    <!-- Photo -->
                                    <td class="px-6 py-4">

                                        <img
                                            src="{{ asset('storage/' . $student->profile_picture) }}"
                                            alt="Student Photo"
                                            class="w-14 h-14 md:w-16 md:h-16 rounded-full object-cover border-2 border-gray-200"
                                        >

                                    </td>

                                    <!-- Student ID -->
                                    <td class="px-6 py-4 text-sm font-semibold text-gray-800">
                                        {{ $student->student_id }}
                                    </td>

                                    <!-- Name -->
                                    <td class="px-6 py-4 text-sm text-gray-800">

                                        <div class="font-semibold">
                                            {{ $student->first_name }}
                                            {{ $student->middle_name }}
                                            {{ $student->last_name }}
                                        </div>

                                    </td>

                                    <!-- Email -->
                                    <td class="px-6 py-4 text-sm text-gray-600">
                                        {{ $student->email }}
                                    </td>

                                    <!-- Program -->
                                    <td class="px-6 py-4 text-sm text-gray-600">
                                        {{ $student->program }}
                                    </td>

                                    <!-- Action -->
                                    <td class="px-6 py-4">

                                        <a
                                            href="{{ route('students.show', $student) }}"
                                            class="inline-block bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-4 py-2 rounded-lg"
                                        >
                                            View Profile
                                        </a>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            @else

                <!-- Empty State -->
                <div class="text-center px-6 py-16">

                    <div class="text-5xl mb-4">
                        👨‍🎓
                    </div>

                    <h2 class="text-xl font-bold text-gray-800">
                        No Students Registered
                    </h2>

                    <p class="text-gray-500 mt-2 mb-6">
                        Start by registering the first student.
                    </p>

                    <a
                        href="{{ route('students.create') }}"
                        class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-3 rounded-lg"
                    >
                        Register First Student
                    </a>

                </div>

            @endif

        </div>

    </div>

</body>
</html>