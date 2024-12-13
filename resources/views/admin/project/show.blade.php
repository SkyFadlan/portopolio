<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Project</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 600px;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        p {
            color: #555;
            margin-bottom: 20px;
        }
        .btn-primary {
            display: inline-block;
            padding: 12px 24px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .icon {
            width: 100px; /* Adjust the width as needed */
            height: auto; /* Maintain aspect ratio */
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('asset-landing-page/img/rubah.png') }}" alt="Icon" class="icon">
        <h1>Data project</h1>
        <p><strong>Name:</strong> {{ $project->name }}</p>
        <p><strong>Description:</strong> {{ $project->description }}</p>
        <p><strong>Link:</strong> {{ $project->link }}</p>
        <p><strong>Date:</strong> {{ $project->date}}</p>
        <a class="btn btn-primary" href="{{ route('project.index') }}">Back</a>
    </div>
</body>
</html>
