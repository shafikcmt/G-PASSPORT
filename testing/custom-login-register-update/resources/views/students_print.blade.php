<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <!-- <link type="text/css" rel="stylesheet"  href="{{asset('css/bootstrap.min.css')}}" /> -->
    <title>Export PDF</title>
</head>
<body>
<div class="container">
<table border="1" cellpadding="10" width="100%" id="printTable">
    <thead style="background:#ddd;">
       <tr>
        <th>ID</th>
        <th>Roll</th>
        <th>Phone</th>
       </tr>
    </thead>
    <tbody style="background:#eee;">
        @foreach($students as $stu)
        <tr>
            <td>{{$stu->id}}</td>
            <td>{{$stu->roll}}</td>
            <td>{{$stu->phone}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>


