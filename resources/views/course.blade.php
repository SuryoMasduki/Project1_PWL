@extends('layout.app')
@section('content')
    <section id="content">
        <main class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-3 mb-3">
                        <h2>List Courses</h2>
                        <table>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            @for ($i = 0; $i < count($course); $i++)
                            <tr onclick="location.href ='{{ route('detailCourseView', ['course' => $course[$i]->id]) }}';">
                                <td>{{ $i + 1 }}</td>
                                <td>{{ $course[$i]->name }}</td>
                                <td>
                                    <form action="{{ route('addCourse', ['course' => $course[$i]->id]) }}" method="POST">
                                        @csrf
                                        <button class="mt-2">Tambah</button>
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
