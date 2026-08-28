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
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">

            <div>
                <h1 class="text-3xl font-bold text-gray-800">
                    Registered Students
                </h1>

                <p class="text-gray-500 mt-1">
                    View all registered students
                </p>
            </div>

            <a
                href="{{ route('students.create') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-3 rounded-lg text-center"
            >
                + Register Student
            </a>

        </div>


        <!-- Student Table -->
        <div class="bg-white shadow-lg rounded-xl overflow-hidden">

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

                    <tbody class="divide-y">

                        @forelse($students as $student)

                            <tr class="hover:bg-gray-50">

                                <!-- Photo -->
                                <td class="px-6 py-4">

                                    <img
                                        src="{{ asset('storage/' . $student->profile_picture) }}"
                                        alt="Student Photo"
                                        class="w-16 h-16 rounded-full object-cover"
                                    >

                                </td>


                                <!-- Student ID -->
                                <td class="px-6 py-4 text-sm font-medium text-gray-800">
                                    {{ $student->student_id }}
                                </td>


                                <!-- Name -->
                                <td class="px-6 py-4 text-sm text-gray-800">
                                    {{ $student->first_name }}
                                    {{ $student->middle_name }}
                                    {{ $student->last_name }}
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
                                        class="text-blue-600 hover:text-blue-800 font-semibold"
                                    >
                                        View Profile
                                    </a>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td
                                    colspan="6"
                                    class="px-6 py-10 text-center text-gray-500"
                                >
                                    No students registered yet.
                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</body>
</html>