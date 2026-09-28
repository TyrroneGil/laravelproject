<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th {
        background-color: #333;
        color: white;
    }

    th, td {
        padding: 10px;
        border: 1px solid #ccc;
        text-align: left;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Contact Number</th>
            <th>Course</th>
            <th>Year</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->firstname }}</td>
            <td>{{ $student->middlename }}</td>
            <td>{{ $student->lastname }}</td>
            <td>{{ $student->contact_number }}</td>
            <td>{{ $student->course }}</td>
            <td>{{ $student->year }}</td>
            <td><a href="/showstudent/{{$student->id}}"><button>Update</button></a>
        <a href="/deletestudent/{{$student->id}}"><button>Delete</button></a></td>

        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>