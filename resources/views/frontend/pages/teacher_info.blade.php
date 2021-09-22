

@extends('frontend.layouts.master')
@section('content')

    <section class="baner">

        <img src="{{url('public/frontend/image/t.jpg')}}" style="width:100%;">

    </section>

    <!--about us-->


    <style>
        table, th, td {
            border:1px solid black;
        }
    </style>
    <body>

    <h2 style="text-align: center">Teacher Information</h2>

    <table style="width:100%">
        <tr>
            <th>Sl</th>
            <th>Image</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Mobile</th>
            <th>Subject</th>
            <th>email</th>
        </tr>
        <tr>
            <td>Emil</td>
            <td>Tobias</td>
            <td>Linus</td>
            <td>Linus</td>
            <td>Linus</td>
            <td>Linus</td>
            <td>Linus</td>
        </tr>

    </table>




@endsection