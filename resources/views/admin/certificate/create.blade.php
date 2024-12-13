<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Certificate</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .form-wrapper {
            padding: 20px;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"],
        input[type="date"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        textarea {
            resize: vertical;
            min-height: 100px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        button:hover {
            background-color: #45a049;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #007BFF;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <header>
            <h1>Create Certificate</h1>
        </header>
        <div class="form-wrapper">
            <form action="{{ route('certificate.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="issued_by">Issued By:</label>
                <input type="text" id="issued_by" name="issued_by" required>

                <label for="issued_at">Issued At:</label>
                <input type="date" id="issued_at" name="issued_at" required>

                <label for="description">Description:</label>
                <textarea id="description" name="description"></textarea>

                <label for="file">File:</label>
                <input type="file" id="file" name="file">

                <button type="submit">Create Certificate</button>
            </form>

            <a href="{{ route('certificate.index') }}">Back to List</a>
        </div>
    </div>

</body>
</html>