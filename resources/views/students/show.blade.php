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

        <!-- Success Message -->
        @if(session('success'))
            <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg">
                {{ session('success') }}
            </div>
        @endif


        <!-- Profile Card -->
        <div class="bg-white shadow-lg rounded-xl overflow-hidden">

            <!-- Header -->
            <div class="bg-blue-600 text-white px-6 py-5">
                <h1 class="text-2xl font-bold">
                    Student Profile
                </h1>

                <p class="text-blue-100 mt-1">
                    Registered student information
                </p>
            </div>


            <div class="p-6 md:p-8">

                <!-- Profile Picture -->
                <div class="flex justify-center mb-8">

                    <img
                        src="{{ asset('storage/' . $student->profile_picture) }}"
                        alt="Student Profile Picture"
                        class="w-40 h-40 rounded-full object-cover border-4 border-gray-200 shadow"
                    >

                </div>


                <!-- Student Name -->
                <div class="text-center mb-8">

                    <h2 class="text-2xl font-bold text-gray-800">
                        {{ $student->first_name }}
                        {{ $student->middle_name }}
                        {{ $student->last_name }}
                    </h2>

                    <p class="text-gray-500 mt-1">
                        Student ID: {{ $student->student_id }}
                    </p>

                </div>


                <!-- Student Information -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                    <!-- Email -->
                    <div class="border rounded-lg p-4">
                        <p class="text-sm text-gray-500">
                            Email Address
                        </p>

                        <p class="font-semibold text-gray-800 mt-1">
                            {{ $student->email }}
                        </p>
                    </div>


                    <!-- Mobile -->
                    <div class="border rounded-lg p-4">
                        <p class="text-sm text-gray-500">
                            Mobile Number
                        </p>

                        <p class="font-semibold text-gray-800 mt-1">
                            {{ $student->mobile_number }}
                        </p>
                    </div>


                    <!-- Date of Birth -->
                    <div class="border rounded-lg p-4">
                        <p class="text-sm text-gray-500">
                            Date of Birth
                        </p>

                        <p class="font-semibold text-gray-800 mt-1">
                            {{ $student->date_of_birth }}
                        </p>
                    </div>


                    <!-- Gender -->
                    <div class="border rounded-lg p-4">
                        <p class="text-sm text-gray-500">
                            Gender
                        </p>

                        <p class="font-semibold text-gray-800 mt-1">
                            {{ $student->gender }}
                        </p>
                    </div>


                    <!-- Program -->
                    <div class="border rounded-lg p-4">
                        <p class="text-sm text-gray-500">
                            Program
                        </p>

                        <p class="font-semibold text-gray-800 mt-1">
                            {{ $student->program }}
                        </p>
                    </div>


                    <!-- Year Level -->
                    <div class="border rounded-lg p-4">
                        <p class="text-sm text-gray-500">
                            Year Level
                        </p>

                        <p class="font-semibold text-gray-800 mt-1">
                            {{ $student->year_level }}
                        </p>
                    </div>


                    <!-- Address -->
                    <div class="border rounded-lg p-4 md:col-span-2">
                        <p class="text-sm text-gray-500">
                            Address
                        </p>

                        <p class="font-semibold text-gray-800 mt-1">
                            {{ $student->address }}
                        </p>
                    </div>

                </div>


                <!-- Register Another Student -->
                <div class="mt-8 text-center">

                    <a
                        href="{{ route('students.create') }}"
                        class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg"
                    >
                        Register Another Student
                    </a>

                </div>

            </div>

        </div>

    </div>

</body>
</html>