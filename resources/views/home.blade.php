@extends('layout.app')
@section('content')
    <section id="content">
        <main class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card mt-3">
                        <h2>Detail User</h2>
                        <p><span>Name</span>: John Doe</p>
                        <p><span>Email</span>: john.doe@example.com</p>
                        <p><span>NIM</span>: 123456789</p>
                        <p><span>Department</span>: Computer Science</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mt-3">
                        <h2>Add Course</h2>
                        <button class="btn button-card" data-bs-toggle="modal" data-bs-target="#showAllCourse">Show all courses</button>
                        <button class="btn button-card" data-bs-toggle="modal" data-bs-target="#addByCode">Add by code</button>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card mt-3 mb-3">
                        <h2>List Courses</h2>
                        <table>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Credit</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td><button>Delete</button></td>
                            </tr>
                            <tr>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td><button>Delete</button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </section>
    @include('modal.addByCode')
    @include('modal.showAllCourse')
@endsection
