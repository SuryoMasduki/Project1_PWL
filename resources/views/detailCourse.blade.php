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
                    <div class="card mt-3">
                        <h2>Detail Course</h2>
                        <p><span>Name</span>: Pemweb</p>
                        <p><span>Code</span>: PMW1</p>
                        <p><span>Credit</span>: 3</p>
                        <p><span>Department</span>: Sistem Informasi</p>
                    </div>
                </div>
            </div>
        </main>
    </section>
@endsection
