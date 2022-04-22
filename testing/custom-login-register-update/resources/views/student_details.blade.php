@extends('layouts.master')
@section('content')
@include('includes.sidebar')

<div class="main-content p-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Student List</h4>
               
                <a href="#"><button class="btn btn-light">COPY</button></a>
                <a href="export-pdf"><button class="btn btn-light">PDF</button></a>
                <a href="export-excel"><button class="btn btn-light">EXCELL</button></a>
                <a href="export-csv"><button class="btn btn-light">CSV</button></a>
                <a href="{{url('/print-file')}}"><button class="btn btn-light btnprn">PRINT</button></a>
               
                <br> <br>
                <table class="table table-bordered table-hover table-striped">
                @if(!empty($students) && $students->count())    
                @foreach($students as $stu)
                    <tr>
                        <td>{{$stu->roll}}</td>
                        <td>{{$stu->phone}}</td>
                        <td><a href="#" class="btn btn-primary">View</a></td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td>Data Not Found</td>
                    </tr>
                    @endif
                </table>
            {{$students->links()}}
            </div>
        </div>

        @stop

