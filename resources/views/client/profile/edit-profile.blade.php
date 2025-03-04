@extends('layouts.client.layout')

@section('title', 'Edit Profile')

@section('content')
<div id="main-content">
                    <div class="page-title">
                       <h3>Edit Profile</h3>
                    </div>
                    <section>
                    <form class="mt-3 needs-validation" novalidate>
                        <!-- PERSONAL INFO -->
                        <div class="container">
                            <div class="mb-3">
                                <label for="nationalid" class="form-label">National Identification Number</label>
                                <input type="number" class="form-control" id="nationalid" required>
                            </div>

                            <div class="mb-3">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="fname" required>
                            </div>

                            <div class="mb-3">
                                <label for="lname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lname" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="institution" class="form-label">Institution</label>
                                <input type="text" class="form-control" id="institution" required>
                            </div>
                        </div>

                    <div class="container text-right mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    </form>
                    </section>
                </div>
@endsection