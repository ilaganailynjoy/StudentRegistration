<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-5xl mx-auto py-10 px-4">

        @if(session('success'))
            <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <!-- Page Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">
                Student Registration
            </h1>

            <p class="text-gray-600 mt-2">
                Please complete the form below to register a student.
            </p>
        </div>


        <!-- Registration Form -->
        <div class="bg-white shadow-lg rounded-xl p-6 md:p-8">

            <form
                action="{{ route('students.store') }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf


                <!-- Student Information -->
                <div class="mb-8">

                    <h2 class="text-xl font-semibold text-gray-800 mb-4">
                        Student Information
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                        <!-- Student ID -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Student ID
                            </label>

                            <input
                                type="text"
                                name="student_id"
                                value="{{ old('student_id') }}"
                                placeholder="Enter student ID"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            >

                            @error('student_id')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>


                        <!-- First Name -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                First Name
                            </label>

                            <input
                                type="text"
                                name="first_name"
                                value="{{ old('first_name') }}"
                                placeholder="Enter first name"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            >

                            @error('first_name')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>


                        <!-- Middle Name -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Middle Name
                            </label>

                            <input
                                type="text"
                                name="middle_name"
                                value="{{ old('middle_name') }}"
                                placeholder="Enter middle name"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            >

                            @error('middle_name')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>


                        <!-- Last Name -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Last Name
                            </label>

                            <input
                                type="text"
                                name="last_name"
                                value="{{ old('last_name') }}"
                                placeholder="Enter last name"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            >

                            @error('last_name')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>


                        <!-- Email -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Email Address
                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="student@example.com"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            >

                            @error('email')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>


                        <!-- Mobile Number -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Mobile Number
                            </label>

                            <input
                                type="text"
                                name="mobile_number"
                                value="{{ old('mobile_number') }}"
                                placeholder="09XXXXXXXXX"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            >

                            @error('mobile_number')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>


                        <!-- Date of Birth -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Date of Birth
                            </label>

                            <input
                                type="date"
                                name="date_of_birth"
                                value="{{ old('date_of_birth') }}"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            >

                            @error('date_of_birth')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>


                        <!-- Gender -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Gender
                            </label>

                            <select
                                name="gender"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            >
                                <option value="">Select gender</option>
                                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>
                                    Male
                                </option>
                                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>
                                    Female
                                </option>
                                <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>
                                    Other
                                </option>
                            </select>

                            @error('gender')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                    </div>

                </div>


                <!-- Academic Information -->
                <div class="mb-8">

                    <h2 class="text-xl font-semibold text-gray-800 mb-4">
                        Academic Information
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                        <!-- Program -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Program
                            </label>

                            <select
                                name="program"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            >
                                <option value="">Select program</option>

                                <option value="BS Information Technology"
                                    {{ old('program') == 'BS Information Technology' ? 'selected' : '' }}>
                                    BS Information Technology
                                </option>

                                <option value="BS Computer Science"
                                    {{ old('program') == 'BS Computer Science' ? 'selected' : '' }}>
                                    BS Computer Science
                                </option>

                                <option value="BS Information Systems"
                                    {{ old('program') == 'BS Information Systems' ? 'selected' : '' }}>
                                    BS Information Systems
                                </option>
                            </select>

                            @error('program')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>


                        <!-- Year Level -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Year Level
                            </label>

                            <select
                                name="year_level"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            >
                                <option value="">Select year level</option>

                                <option value="1st Year"
                                    {{ old('year_level') == '1st Year' ? 'selected' : '' }}>
                                    1st Year
                                </option>

                                <option value="2nd Year"
                                    {{ old('year_level') == '2nd Year' ? 'selected' : '' }}>
                                    2nd Year
                                </option>

                                <option value="3rd Year"
                                    {{ old('year_level') == '3rd Year' ? 'selected' : '' }}>
                                    3rd Year
                                </option>

                                <option value="4th Year"
                                    {{ old('year_level') == '4th Year' ? 'selected' : '' }}>
                                    4th Year
                                </option>
                            </select>

                            @error('year_level')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                    </div>

                </div>


                <!-- Address -->
                <div class="mb-8">

                    <h2 class="text-xl font-semibold text-gray-800 mb-4">
                        Contact Information
                    </h2>

                    <div>

                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Address
                        </label>

                        <textarea
                            name="address"
                            rows="4"
                            placeholder="Enter complete address"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        >{{ old('address') }}</textarea>

                        @error('address')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                </div>


                <!-- Profile Picture -->
                <div class="mb-8">

                    <h2 class="text-xl font-semibold text-gray-800 mb-4">
                        Profile Picture
                    </h2>

                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Upload Profile Picture
                    </label>

                    <input
                        type="file"
                        name="profile_picture"
                        accept=".jpg,.jpeg,.png"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 bg-white"
                    >

                    <p class="text-sm text-gray-500 mt-1">
                        JPG, JPEG, or PNG only. Maximum file size: 2 MB.
                    </p>

                    @error('profile_picture')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <!-- Submit Button -->
                <div class="flex justify-end">

                    <button
                        type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg transition"
                    >
                        Register Student
                    </button>

                </div>

            </form>

        </div>

    </div>

</body>
</html>