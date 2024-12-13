<!DOCTYPE html>
<html>
<head>
    <title>Edit Certificate</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="date"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
            min-height: 80px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Certificate</h1>
        <form action="{{ route('certificate.update', $certificate->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ $certificate->name }}" required>

            <label for="issued_by">Issued By:</label>
            <input type="text" name="issued_by" id="issued_by" value="{{ $certificate->issued_by }}" required>

            <label for="issued_at">Issued At:</label>
            <input type="date" name="issued_at" id="issued_at" value="{{ $certificate->issued_at }}" required>

            <label for="description">Description:</label>
            <textarea name="description" id="description">{{ $certificate->description }}</textarea>

            <label for="file">File (leave empty if not changing):</label>
            <input type="file" name="file" id="file">

            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>