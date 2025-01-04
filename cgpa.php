<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGPA Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px 0;
            box-sizing: border-box;
        }

        .container {
            width: 100%;
            max-width: 500px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        .add-btn,
        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

        .add-btn:hover,
        .submit-btn:hover {
            background-color: #0056b3;
        }

        .course-inputs {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>CGPA Calculator</h2>
        <form action="calculate.php" method="POST" id="cgpaForm">
            <div id="courseInputs" class="course-inputs">
                <div class="form-group">
                    <label for="course1">Course 1 Grade</label>
                    <input type="text" name="grades[]" placeholder="Enter grade (e.g., A, B+)" required>
                </div>
                <div class="form-group">
                    <label for="credit1">Course 1 Credit</label>
                    <input type="number" name="credits[]" placeholder="Enter credit (e.g., 3)" required>
                </div>
            </div>

            <button type="button" class="add-btn" onclick="addCourse()">Add Another Course</button>
            <button type="submit" class="submit-btn">Calculate CGPA</button>
        </form>
    </div>

    <script>
        function addCourse() {
            const courseInputs = document.getElementById('courseInputs');
            const courseNumber = courseInputs.children.length / 2 + 1; // Calculate next course number

            const gradeGroup = document.createElement('div');
            gradeGroup.className = 'form-group';
            gradeGroup.innerHTML = `
                <label for="course${courseNumber}">Course ${courseNumber} Grade</label>
                <input type="text" name="grades[]" placeholder="Enter grade (e.g., A, B+)" required>
            `;

            const creditGroup = document.createElement('div');
            creditGroup.className = 'form-group';
            creditGroup.innerHTML = `
                <label for="credit${courseNumber}">Course ${courseNumber} Credit</label>
                <input type="number" name="credits[]" placeholder="Enter credit (e.g., 3)" required>
            `;

            courseInputs.appendChild(gradeGroup);
            courseInputs.appendChild(creditGroup);
        }
    </script>
</body>

</html>