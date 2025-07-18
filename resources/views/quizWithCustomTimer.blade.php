@extends('layout.layout')

@php
     $topToBottom='true';
     $header='false';
@endphp

@section('content')

    <div class="rbt-lesson-area bg-color-white">
        <div class="rbt-lesson-content-wrapper">
            <div class="rbt-lesson-leftsidebar">
                <div class="rbt-course-feature-inner rbt-search-activation">
                    <div class="section-title">
                        <h4 class="rbt-title-style-3">Course Content</h4>
                    </div>

                    <div class="lesson-search-wrapper">
                        <form action="#" class="rbt-search-style-1">
                            <input class="rbt-search-active" type="text" placeholder="Search Lesson">
                            <button class="search-btn disabled"><i class="feather-search"></i></button>
                        </form>
                    </div>

                    <hr class="mt--10">

                    <div class="rbt-accordion-style rbt-accordion-02 for-right-content accordion">


                        <div class="accordion" id="accordionExampleb2">

                            <div class="accordion-item card">
                                <h2 class="accordion-header card-header" id="headingTwo1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#collapseTwo1" aria-controls="collapseTwo1">
                                        Welcome Histudy <span class="rbt-badge-5 ml--10">1/2</span>
                                    </button>
                                </h2>
                                <div id="collapseTwo1" class="accordion-collapse collapse show" aria-labelledby="headingTwo1">
                                    <div class="accordion-body card-body">
                                        <ul class="rbt-course-main-content liststyle">

                                            <li>
                                                <a href="{{ route('lesson') }}">
                                                    <div class="course-content-left">
                                                        <i class="feather-play-circle"></i> <span class="text">Course
                                            Intro</span>
                                                    </div>
                                                    <div class="course-content-right">
                                                        <span class="min-lable">30 min</span>
                                                        <span class="rbt-check"><i class="feather-check"></i></span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="lesson-intro.html">
                                                    <div class="course-content-left">
                                                        <i class="feather-file-text"></i> <span class="text">Introduction</span>
                                                    </div>
                                                    <div class="course-content-right">
                                                        <span class="rbt-check"><i class="feather-check"></i></span>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item card">
                                <h2 class="accordion-header card-header" id="headingTwo4">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#collapseTwo4" aria-controls="collapseTwo4">
                                        Welcome Lessons <span class="rbt-badge-5 ml--10">1/3</span>
                                    </button>
                                </h2>
                                <div id="collapseTwo4" class="accordion-collapse collapse show" aria-labelledby="headingTwo4">
                                    <div class="accordion-body card-body">
                                        <ul class="rbt-course-main-content liststyle">

                                            <li>
                                                <a href="{{ route('lesson') }}">
                                                    <div class="course-content-left">
                                                        <i class="feather-play-circle"></i> <span class="text">Hello World!
                                        </span>
                                                    </div>
                                                    <div class="course-content-right">
                                                        <span class="min-lable">0.37</span>
                                                        <span class="rbt-check"><i class="feather-check"></i></span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <div class="course-content-left">
                                                        <i class="feather-play-circle"></i> <span class="text">Values and
                                            Variables</span>
                                                    </div>
                                                    <div class="course-content-right">
                                                        <span class="min-lable">20 min</span>
                                                        <span class="rbt-check unread"><i class="feather-circle"></i></span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <div class="course-content-left">
                                                        <i class="feather-play-circle"></i> <span class="text">Basic Operators
                                        </span>
                                                    </div>
                                                    <div class="course-content-right">
                                                        <span class="min-lable">15 min</span>
                                                        <span class="rbt-check unread"><i class="feather-circle"></i></span>
                                                    </div>
                                                </a>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item card">
                                <h2 class="accordion-header card-header" id="headingTwo2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#collapseTwo2" aria-controls="collapseTwo2">
                                        Histudy Quiz <span class="rbt-badge-5 ml--10">1/8</span>
                                    </button>
                                </h2>
                                <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2">
                                    <div class="accordion-body card-body">
                                        <ul class="rbt-course-main-content liststyle">
                                            <li><a href="questions-types.html">
                                                    <div class="course-content-left"><i class="feather-help-circle"></i><span
                                            class="text">Questions
                                            Types</span></div>
                                                    <div class="course-content-right"><span class="rbt-check unread"><i
                                                class="feather-circle"></i></span></div>
                                                </a></li>
                                            <li><a href="all-questions.html">
                                                    <div class="course-content-left"><i class="feather-help-circle"></i><span
                                            class="text">Questions Below Each
                                            Other</span></div>
                                                    <div class="course-content-right"><span class="rbt-check unread"><i
                                                class="feather-circle"></i></span></div>
                                                </a></li>
                                            <li><a href="pagination-quiz.html">
                                                    <div class="course-content-left"><i class="feather-help-circle"></i><span
                                            class="text">Pagination Quiz
                                            Style</span></div>
                                                    <div class="course-content-right"><span class="rbt-check unread"><i
                                                class="feather-circle"></i></span></div>
                                                </a></li>
                                            <li><a href="single-question.html">
                                                    <div class="course-content-left"><i class="feather-help-circle"></i><span
                                            class="text">Single
                                            Question</span></div>
                                                    <div class="course-content-right"><span class="rbt-check unread"><i
                                                class="feather-circle"></i></span></div>
                                                </a></li>
                                            <li><a href="quiz-with-point.html">
                                                    <div class="course-content-left"><i class="feather-help-circle"></i><span
                                            class="text">Quiz with individual
                                            point</span></div>
                                                    <div class="course-content-right"><span class="rbt-check unread"><i
                                                class="feather-circle"></i></span></div>
                                                </a></li>
                                            <li><a href="quiz-with-custom-timer.html">
                                                    <div class="course-content-left"><i class="feather-help-circle"></i><span
                                            class="text">Quiz with custom
                                            timer</span></div>
                                                    <div class="course-content-right"><span class="rbt-check unread"><i
                                                class="feather-circle"></i></span></div>
                                                </a></li>
                                            <li><a href="lesson-quiz.html">
                                                    <div class="course-content-left"><i class="feather-help-circle"></i><span
                                            class="text">Histudy Quiz
                                            Start</span></div>
                                                    <div class="course-content-right"><span class="rbt-check unread"><i
                                                class="feather-circle"></i></span></div>
                                                </a></li>
                                            <li><a href="lesson-quiz-result.html">
                                                    <div class="course-content-left"><i class="feather-help-circle"></i><span
                                            class="text">Histudy Quiz
                                            Result</span></div>
                                                    <div class="course-content-right"><span class="rbt-check unread"><i
                                                class="feather-circle"></i></span></div>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item card">
                                <h2 class="accordion-header card-header" id="headingTwo3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#collapseTwo3" aria-controls="collapseTwo3">
                                        Histudy Assignments <span class="rbt-badge-5 ml--10">1/2</span>
                                    </button>
                                </h2>
                                <div id="collapseTwo3" class="accordion-collapse collapse" aria-labelledby="headingTwo3">
                                    <div class="accordion-body card-body">
                                        <ul class="rbt-course-main-content liststyle">
                                            <li>
                                                <a href="lesson-assignments.html">
                                                    <div class="course-content-left">
                                                        <i class="feather-file-text"></i> <span class="text">Histudy Assignments</span>
                                                    </div>
                                                    <div class="course-content-right">
                                                        <span class="rbt-check unread"><i class="feather-circle"></i></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="lesson-assignments-submit.html">
                                                    <div class="course-content-left">
                                                        <i class="feather-file-text"></i> <span class="text">Histudy Assignments
                                            Submit</span>
                                                    </div>
                                                    <div class="course-content-right">
                                                        <span class="rbt-check unread"><i class="feather-circle"></i></span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>

            <div class="rbt-lesson-rightsidebar overflow-hidden">
                <div class="lesson-top-bar">
                    <div class="lesson-top-left">
                        <div class="rbt-lesson-toggle">
                            <button class="lesson-toggle-active btn-round-white-opacity" title="Toggle Sidebar"><i
                    class="feather-arrow-left"></i></button>
                        </div>
                        <h5>The Complete Histudy 2024: From Zero to Expert!</h5>
                    </div>
                    <div class="lesson-top-right">
                        <div class="rbt-btn-close">
                            <a href="{{ route('courseDetails') }}" title="Go Back to Course" class="rbt-round-btn"><i class="feather-x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="inner">
                    <div class="content">
                        <form id="quiz-form" class="quiz-form-wrapper">
                            <!-- Start Single Quiz  -->
                            <div id="question-1" class="question">
                                <div class="section-title">
                                    <p class="mb--10">Quiz</p>
                                    <h5>Questions Types</h5>
                                </div>
                                <hr>
                                <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30">
                                    <div class="rbt-lesson-area bg-color-white">
                                        <div class="rbt-lesson-content-wrapper">
                                            <div class="inner py-0">
                                                <div class="section-title">
                                                    <p>At Histudy, we offer a variety of<strong> 8 interactive quiz
                                                            types </strong>designed to enhance the learning
                                                        experience. Our quizzes are an excellent tool for assessing
                                                        students' knowledge, making education both engaging
                                                        and effective. With Histudy, learning is not just informative
                                                        but also enjoyable.</p>
                                                    <ul class="rbt-list-style-1 mb--20">
                                                        <li>1. True/False</li>
                                                        <li>2. Single Choice </li>
                                                        <li>3. Multiple Choice </li>
                                                        <li>4. Open Ended</li>
                                                        <li>5. Fill in the Blanks</li>
                                                        <li>6. Sort Answer</li>
                                                        <li>7. Matching</li>
                                                        <li>8. Image Matching</li>
                                                    </ul>
                                                    <p>Short Answer, Matching ,Image Matching, Image Answering,
                                                        Ordering, Detailed Quiz Report for Student are pro
                                                        features.</p>
                                                    <p>Note: Contact our support center or let us know if you need the
                                                        discount code.</p>
                                                    <ul class="rbt-list-style-1">
                                                        <li><span>Quiz Time: <strong> Minutes </strong></span></li>
                                                        <li><span>Total Attempted: <strong> 0/10 </strong></span></li>
                                                        <li><span>Passing Grade: <strong> (90%) </strong></span></li>
                                                    </ul>
                                                </div>

                                                <button class="rbt-btn btn-gradient hover-icon-reverse mt--30" id="next-btn"><span class="icon-reverse-wrapper"><span
                                                            class="btn-text">Start
                                                            Quiz</span><span class="btn-icon"><i
                                                                class="feather-arrow-right"></i></span><span
                                                            class="btn-icon"><i
                                                                class="feather-arrow-right"></i></span></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Quiz  -->

                            <!-- Start Single Quiz  -->
                            <div id="question-2" class="question">
                                <div class="quize-top-meta mb-0">
                                    <div class="quize-top-left section-title">
                                        <p class="mb--10">Quiz</p>
                                        <h5>Quiz with custom timer</h5>
                                    </div>
                                    <div class="quize-top-right" id="timerContainer">
                                        <span>Time remaining:<strong class="ps-2" id="timerText">0h 59m 41s
                                            </strong>
                                        </span>
                                    </div>
                                </div>
                                <hr>

                                <div class="rbt-single-quiz mb--80">
                                    <h4>1. What is the capital of France?</h4>
                                    <div class="row g-3">
                                        <div class="col-lg-6">
                                            <p class="rbt-checkbox-wrapper mb--5"><input id="rbt-checkbox-1" name="rbt-checkbox-1" type="checkbox" value="yes"><label for="rbt-checkbox-1">Option One</label></p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="rbt-checkbox-wrapper"><input id="rbt-checkbox-2" name="rbt-checkbox-2" type="checkbox" value="yes"><label for="rbt-checkbox-2">Option Two</label></p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="rbt-checkbox-wrapper"><input id="rbt-checkbox-3" name="rbt-checkbox-3" type="checkbox" value="yes"><label for="rbt-checkbox-3">Option Three</label></p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="rbt-checkbox-wrapper"><input id="rbt-checkbox-4" name="rbt-checkbox-4" type="checkbox" value="yes"><label for="rbt-checkbox-4">Option Four</label></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="rbt-single-quiz mb--80">
                                    <h4>2. What is the Javascript?</h4>
                                    <div class="row g-3">
                                        <div class="col-lg-6">
                                            <div class="rbt-form-check"><input class="form-check-input" type="radio" name="rbt-radio" id="rbt-radio-1"><label class="form-check-label" for="rbt-radio-1">Option One</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="rbt-form-check"><input class="form-check-input" type="radio" name="rbt-radio" id="rbt-radio-2"><label class="form-check-label" for="rbt-radio-2">Option Two</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="rbt-form-check"><input class="form-check-input" type="radio" name="rbt-radio" id="rbt-radio-3"><label class="form-check-label" for="rbt-radio-3">Option Three</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="rbt-form-check"><input class="form-check-input" type="radio" name="rbt-radio" id="rbt-radio-4"><label class="form-check-label" for="rbt-radio-4">Option Four</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rbt-single-quiz mb--80">
                                    <h4>3. NextJs is a Framework?</h4>
                                    <div class="row g-3">
                                        <div class="col-lg-6">
                                            <div class="rbt-form-check"><input class="form-check-input" type="radio" name="rbt-single-select" id="rbt-single-select-10"><label class="form-check-label" for="rbt-single-select-10">True</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="rbt-form-check"><input class="form-check-input" type="radio" name="rbt-single-select" id="rbt-single-select-20"><label class="form-check-label" for="rbt-single-select-20">False</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rbt-single-quiz mb--80">
                                    <h4>4. Fill in the Blanks</h4>
                                    <div class="row g-3">
                                        <div class="col-lg-12">
                                            <div class="rbt-form-chec" style="line-height: 55px;"><span
                                                    class="form-check-label">Next.js is a
                                                    popular</span><input class="form-blank-input mx-2" type="text"><span
                                                    class="form-check-label">framework
                                                </span><span class="form-check-label">built on top of
                                                </span><input class="form-blank-input mx-2" type="text"><span
                                                    class="form-check-label">.It
                                                    enables developers to create</span><input class="form-blank-input mx-2" type="text"><span
                                                    class="form-check-label">applications with features such
                                                    as</span><input class="form-blank-input mx-2" type="text"><span
                                                    class="form-check-label">
                                                    rendering and
                                                </span><input class="form-blank-input mx-2" type="text"><span
                                                    class="form-check-label">
                                                    generation. </span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rbt-single-quiz mb--80">
                                    <h4>5. What are the key features of Next.js ?</h4>
                                    <div class="row g-3">
                                        <div class="col-lg-12">
                                            <div class="rbt-form-chec">
                                                <div class="form-group mb--10">
                                                    <textarea id="answerTextArea" placeholder="Write Answer"></textarea>
                                                    <span class="focus-border"></span>
                                                </div><span class="chr">Character
                                                    Remaining: 500</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rbt-single-quiz mb--80">
                                    <h4>6. Change Question Order</h4>
                                    <div class="row g-3 mt--10">
                                        <div class="col-lg-12">
                                            <div id="dnd1">
                                                <div class="list-group-item d-flex align-items-center gap-4 rbt-course-wrape mb-4 bg-transparent">
                                                    <i class="feather-menu cursor-scroll pe-3 active-icon-white"></i>
                                                    <img class="img-fluid wdt-100" src="{{ asset('assets/images/course/course-01.jpg') }}" alt="image">
                                                    <h6 class="rbt-title mb-0">The Complete Histudy 2024: From Zero
                                                        to Expert!</h6>
                                                </div>
                                                <div class="list-group-item d-flex align-items-center gap-4 rbt-course-wrape mb-4 bg-transparent">
                                                    <i class="feather-menu cursor-scroll pe-3 active-icon-white"></i>
                                                    <img class="img-fluid wdt-100" src="{{ asset('assets/images/course/course-02.jpg') }}" alt="image">
                                                    <h6 class="rbt-title mb-0">Difficult Things About Education.
                                                    </h6>
                                                </div>
                                                <div class="list-group-item d-flex align-items-center gap-4 rbt-course-wrape mb-4 bg-transparent">
                                                    <i class="feather-menu cursor-scroll pe-3 active-icon-white"></i>
                                                    <img class="img-fluid wdt-100" src="{{ asset('assets/images/course/course-03.jpg') }}" alt="image">
                                                    <h6 class="rbt-title mb-0">Five Things You Should Do In
                                                        Education.</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-btn mt--30"><a class="rbt-btn btn-gradient hover-icon-reverse" href="#"><span class="icon-reverse-wrapper"><span class="btn-text">Submit
                                                Quiz</span><span class="btn-icon"><i
                                                    class="feather-arrow-right"></i></span><span class="btn-icon"><i
                                                    class="feather-arrow-right"></i></span></span></a></div>
                            </div>
                            <!-- End Single Quiz  -->
                        </form>
                    </div>
                </div>

                <div class="bg-color-extra2 ptb--15 overflow-hidden">
                    <div class="rbt-button-group">

                        <a class="rbt-btn icon-hover icon-hover-left btn-md bg-primary-opacity" href="#">
                            <span class="btn-icon"><i class="feather-arrow-left"></i></span>
                            <span class="btn-text">Previous</span>
                        </a>

                        <a class="rbt-btn icon-hover btn-md" href="#">
                            <span class="btn-text">Next</span>
                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection