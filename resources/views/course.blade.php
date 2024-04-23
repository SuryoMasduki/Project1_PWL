@extends('layout.app')
@section('content')
    <section id="content">
        <main class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-warning alert-dismissible mt-3" role="alert">
                        Message
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
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
                            <tr onclick="location.href ='course/detail';">
                                <td>1</td>
                                <td>Pemrogaman Web</td>
                                <td>
                                    <form action="" method="POST">
                                        <button>Tambah</button>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </section>
@endsection
