
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #2563eb, #1e40af);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        .container {
            width: 100%;
            max-width: 700px;
            background: #ffffff;
            border-radius: 15px;
            padding: 35px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            color: #1e3a8a;
            margin-bottom: 8px;
        }

        .header p {
            color: #64748b;
            font-size: 14px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full {
            grid-column: span 2;
        }

        label {
            margin-bottom: 7px;
            font-size: 14px;
            font-weight: bold;
            color: #334155;
        }

        input {
            padding: 12px 14px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            transition: 0.2s;
        }

        input:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.12);
        }

        input::placeholder {
            color: #94a3b8;
        }

        .button-container {
            margin-top: 25px;
        }

        button {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 8px;
            background: #2563eb;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
        }

        button:hover {
            background: #1d4ed8;
        }

        @media (max-width: 600px) {
            .container {
                padding: 25px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full {
                grid-column: span 1;
            }
        }
    </style>
</head>

<body>

    <div class="container">
    <a href="/showstudents">Show Student</a>
        <div class="header">
            <h1>Student Registration</h1>
            <p>Enter the student's information below</p>
        </div>

        <form action="/createstudent" method="post">
            @csrf

            <div class="form-grid">

                <div class="form-group">
                    <label for="fn">First Name</label>
                    <input 
                        type="text" 
                        name="firstname" 
                        id="fn"
                        placeholder="Enter first name"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="middlename">Middle Name</label>
                    <input 
                        type="text" 
                        name="middlename" 
                        id="middlename"
                        placeholder="Enter middle name"
                    >
                </div>

                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input 
                        type="text" 
                        name="lastname" 
                        id="lastname"
                        placeholder="Enter last name"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="contact_number">Contact Number</label>
                    <input 
                        type="text" 
                        name="contact_number" 
                        id="contact_number"
                        placeholder="09XXXXXXXXX"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="course">Course</label>
                    <input 
                        type="text" 
                        name="course" 
                        id="course"
                        placeholder="e.g. BS Information Technology"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="year">Year Level</label>
                    <input 
                        type="text" 
                        name="year" 
                        id="year"
                        placeholder="e.g. 1st Year"
                        required
                    >
                </div>

            </div>

            <div class="button-container">
                <button type="submit">Save Student</button>
            </div>

        </form>

    </div>

</body>
</html>
