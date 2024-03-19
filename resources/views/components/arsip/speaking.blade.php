@extends('layouts.dashboard')

@section('main-table')
<!-- Recent Sales -->
<div class="col-12">
    <div class="card recent-sales overflow-auto">

        <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                    class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
        </div>

        <div class="card-body">
            <h5 class="card-title">Speaking Class <span>| Recent</span></h5>

            <table class="table table-borderless datatable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Class</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><a href="#">1</a></th>
                        <td>Speaking</td>
                        <td><a href="#" class="text-primary">How to master Speakig English</a>
                        </td>
                        <td>$64</td>
                        <td><a class="shadow rounded btn" style="padding: .20rem; font-size: 12px; border-color: blue">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row"><a href="#">#2147</a></th>
                        <td>Bridie Kessler</td>
                        <td><a href="#" class="text-primary">Blanditiis dolor omnis
                                similique</a></td>
                        <td>$47</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                    </tr>
                    <tr>
                        <th scope="row"><a href="#">#2049</a></th>
                        <td>Ashleigh Langosh</td>
                        <td><a href="#" class="text-primary">At recusandae
                                consectetur</a></td>
                        <td>$147</td>
                        <td><span class="badge bg-success">Approved</span></td>
                    </tr>
                    <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Angus Grady</td>
                        <td><a href="#" class="text-primar">Ut voluptatem id earum
                                et</a></td>
                        <td>$67</td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                    </tr>
                    <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Raheem Lehner</td>
                        <td><a href="#" class="text-primary">Sunt similique
                                distinctio</a></td>
                        <td>$165</td>
                        <td><span class="badge bg-success">Approved</span></td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>
</div><!-- End Recent Sales -->
@endsection