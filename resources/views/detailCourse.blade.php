@extends('layout.app')
@section('content')
    <section id="content">
        <main class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-3">
                        <h2>Detail Course</h2>
                        <p><span>Name</span>: {{ $course->name }}</p>
                        <p><span>Code</span>: {{ $course->code }}</p>
                        <p><span>Credit</span>: {{ $course->credit }}</p>
                        <p><span>Department</span>: {{ $department->name }}</p>
                    </div>
                </div>
            </div>
        </main>
    </section>
@endsection
