<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Registration</title>
    {{-- Default Styles for app --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    {{-- Styles for registration page --}}
    <link rel="stylesheet" href="{{ asset('assets/css/registration.css') }}">
</head>

<body>

    <div class="container">
        <div class="registration-header">
            <p class="redirection">
                <ion-icon name="sparkles"></ion-icon> Do you have already account? <a href="/login">Login now</a>

            </p>
            <hr>
        </diV>
        <form id="registration-form" class="registration-form" action="/registration" method="post">
            {{ csrf_field() }}
            <div class="steps">
                <div id="step-1" class="personal-information-step step show">
                    <div class="step-image">
                        <img src={{ asset('assets/images/personalnformation.png') }}>
                    </div>
                    <div class="step-content">
                        <div class="step-count"></div>
                        <div class="step-header">
                            <h2 class="step-title">Personal Information</h2>
                            <p class="step-description">Enter your personal details to show them of an your profile</p>
                        </div>
                        <div class="step-form">
                            <div class="step-row">
                                <div class="step-label">
                                    <label for="firstname">First Name</label>
                                    <input type="text" class="step-input" name="firstname" id="firstname">

                                </div>
                                <div class="step-label">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" class="step-input" name="lastname" id="lastname">

                                </div>
                            </div>
                            <div class="step-row">
                                <div class="step-label">
                                    <label for="email">Email</label>
                                    <input type="email" class="step-input" name="email" id="email">

                                </div>
                                <div class="step-label">
                                    <label for="country">Country</label>
                                    <select data-selected="cyprus" name="country" id="country">
                                        <option value="cyprus">Cyprus (CY)</option>
                                        <option value="turkey">Turkey (TR)</option>
                                    </select>

                                </div>
                            </div>
                            <div class="step-row">
                                <div class="step-label">
                                    <label>Password</label>
                                    <input type="password" class="step-input" name="password" id="password">

                                </div>
                                <div class="step-label">
                                    <label>Date of birth</label>
                                    <input type="date" class="step-input" id="dob" name="dob">

                                </div>
                            </div>
                            <div class="step-row">
                                <div class="step-label">
                                    <div class="label">Gender</div>
                                    <div class="options">
                                        <label for="female">
                                            <div class="radio-logo">

                                                <img src={{ asset('assets/images/female.png') }} />
                                                <input type="radio" name="gender" value="female" id="female">
                                                <p class="radio-label-text">Female</p>
                                            </div>

                                        </label>
                                        <label for="male">
                                            <div class="radio-logo ">

                                                <img src={{ asset('assets/images/male.png') }} />
                                                <input type="radio" name="gender" value="male" id="male">
                                                <p class="radio-label-text">Male</p>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <div id="step-2" class="academic-information-step step">
                    <div class="step-image">
                        <img src={{ asset('assets/images/academicInformation.png') }}>
                    </div>
                    <div class="step-content">
                        <div class="step-count"></div>
                        <div class="step-header">
                            <h2 class="step-title">Academic Information</h2>
                            <p class="step-description">Enter your academic details to show them of an your profile</p>
                        </div>
                        <div class="step-form">
                            <div class="step-row">
                                <div class="step-label">
                                    <div class="label">Academic Career</div>
                                    <div class="options">
                                        <label for="student">
                                            <div class="radio-logo ">

                                                <img src={{ asset('assets/images/student.png') }} />
                                                <input type="radio" name="career" value="student" id="student">
                                                <p class="radio-label-text">I'm student</p>
                                            </div>
                                        </label>
                                        <label for="staff">
                                            <div class="radio-logo ">
                                                <img src={{ asset('assets/images/staff.png') }} />
                                                <input type="radio" name="career" value="staff" id="staff">
                                                <p class="radio-label-text">I'm staff</p>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <div class="step-label">
                                    <div class="label">Profile Image</div>
                                    <div class="preview-image">
                                        <div class="uploaded-image">

                                        </div>
                                        <div>
                                            <input type="file" id="profile-image" name="profile-image">
                                        </div>

                                    </div>
                                </div>

                            </div>


                            <div id="student-status" class="step-row academic-information-status activated">
                                <div class="step-label">
                                    <label for="student-number">Student Number</label>
                                    <input id="student-number" name="student-number" type="number"
                                        class="step-input">

                                </div>
                                <div class="step-label">
                                    <label for="academic-degree">Academic Degree</label>
                                    <select id="academic-degree" name="academic-degree"
                                        data-selected="masters-degree">
                                        <option value="masters-degree">Master's degree</option>
                                    </select>

                                </div>
                                <div class="step-label">
                                    <label>Academic Status</label>
                                    <select id="student-status" name="student-status" data-selected="notGraduated"
                                        class="step-input">
                                        <option value="notGraduated">I am not graduated yet</option>
                                        <option value="graduated">I am already graduated</option>
                                    </select>

                                </div>
                                <div class="step-label">
                                    <label>Graduation Date</label>
                                    <input type="date" name="graduate-date" id="graduate-date">
                                </div>
                            </div>


                            <div id="staff-status" class="step-row academic-information-status ">
                                <div class="step-label">
                                    <label>Staff Type</label>
                                    <select id="staff-type" name="staff-type" data-selected="instructor"
                                        class="step-input">
                                        <option value="instructor">Instructor</option>
                                        <option value="servant">Faculty Servant</option>
                                    </select>
                                </div>
                                <div class="step-label">
                                    <label>Academic Status</label>
                                    <select id="staff-status" name="staff-status" data-selected="notRetired"
                                        class="step-input">
                                        <option value="notRetired">I am not retired yet</option>
                                        <option value="retired">I am already retired</option>
                                    </select>
                                </div>
                                <div class="step-label">
                                    <label>Retirement Date</label>
                                    <input type="date" name="retirement-date" id="retirement-date">
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <div id="lastStep" class="confirm-information-step step">
                    <div class="step-image">
                        <img src={{ asset('assets/images/confirmAccount.png') }}>
                    </div>
                    <div class="step-content">
                        <div class="step-count"></div>
                        <div class="step-header">
                            <h2 class="step-title">Create your profile</h2>
                            <p class="step-description">Enter your personal details to show them of an your profile</p>
                        </div>


                    </div>
                </div>
            </div>
            <div class="action-buttons">
                <button id="back-btn" type="button" class="back-btn steps-btns">
                    <ion-icon name="arrow-back"></ion-icon> Back
                </button>
                <div class="right-buttons">
                    <button id="next-btn" type="button" class="next-btn steps-btns show">Continue</button>
                    <button type="submit" id="submit-btn" class="next-btn steps-btns ">Create your profile</button>
                </div>
            </div>
        </form>

    </div>

</body>

{{-- Local Storage Class for the application --}}
<script src={{ asset('assets/js/LocalRepository.js') }}></script>
{{-- Registration page actions script --}}
<script src={{ asset('assets/js/Registration.js') }}></script>

{{-- Ion icon CDN for icons --}}
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>




</html>
