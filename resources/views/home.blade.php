@extends('layout.app')
@section('content')
    <section id="content">
        <main class="container">
            <div class="row">
                @if ($errors->get('home'))
                    <div class="col-md-12">
                        <div class="alert alert-warning alert-dismissible mt-3" role="alert">
                            @foreach ($errors->get('home') as $error)
                                {{ $error }}
                            @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endif
                <div class="col-md-8">
                    <div class="card mt-3">
                        <h2>Detail User</h2>
                        <p><span>Name</span>: {{ $user->name }}</p>
                        <p><span>Email</span>: {{ $user->email }}</p>
                        <p><span>NIM</span>: {{ $user->nim }}</p>
                        <p><span>Department</span>: {{ $department->name }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mt-3">
                        <h2>Add Course</h2>
                        <button class="btn button-card" data-bs-toggle="modal" data-bs-target="#showAllCourse">Show all
                            courses
                        </button>
                        <button class="btn button-card" data-bs-toggle="modal" data-bs-target="#addByCode">Add by
                            code
                        </button>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card mt-3 mb-3">
                        <h2>List Courses</h2>
                        <table>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            @for ($i = 0; $i < count($userCourses); $i++)
                                <tr onclick="location.href ='course/detail';">
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $userCourses[$i]->name }}</td>
                                    <td>
                                        <form action="{{ route('deleteCourse', ['course' => $userCourses[$i]->id])}}"
                                              method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button>Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endfor
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </section>
@endsection
