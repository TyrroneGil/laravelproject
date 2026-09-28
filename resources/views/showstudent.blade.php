<form action="/updatestudent" method="POST">
    @csrf

    <input type="hidden" name="id" value="{{$student->id}}">
    <label>First Name:</label>
    <input type="text" name="firstname" value="{{ $student->firstname }}">
    <br><br>

    <label>Middle Name:</label>
    <input type="text" name="middlename" value="{{ $student->middlename }}">
    <br><br>

    <label>Last Name:</label>
    <input type="text" name="lastname" value="{{ $student->lastname }}">
    <br><br>

    <label>Contact Number:</label>
    <input type="text" name="contact_number" value="{{ $student->contact_number }}">
    <br><br>

    <label>Course:</label>
    <input type="text" name="course" value="{{ $student->course }}">
    <br><br>

    <label>Year:</label>
    <input type="number" name="year" value="{{ $student->year }}">
    <br><br>

    <button type="submit">Update Student</button>
</form>