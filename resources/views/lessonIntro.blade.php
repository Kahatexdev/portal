@extends('layout.layout')

@php
     $footer='true';
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
                        <div class="section-title">
                            <h4>Introduction to Our Histudy</h4>
                            <p>Welcome to our online course for beginners JavaScript! This course is designed to give you a solid foundation in the basics of JavaScript programming. Whether you're looking to pursue a career in web development, or just interested in learning a valuable new skill, this course is the perfect place to start.</p>

                            <p>Throughout this course, you'll learn the fundamental concepts of programming such as variables, data types, functions, and control structures. You'll also learn how to use these concepts to create simple programs and web applications.</p>

                            <p>Our course is structured in a way that makes learning easy and fun. We use a combination of video lectures, hands-on exercises, and quizzes to help you reinforce your understanding of the material. Additionally, we provide detailed explanations and examples to help you overcome any challenges you may encounter along the way.</p>

                            <p>By the end of this course, you'll be able to write basic JavaScript code, understand the fundamental concepts of programming, and be able to build simple web applications. So let's get started and begin your journey to becoming a proficient JavaScript programmer!</p>
                        </div>
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