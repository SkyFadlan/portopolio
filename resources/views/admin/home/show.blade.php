<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #555;
        }
        .container {
            width: 100%;
            max-width: 900px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            padding: 30px;
            box-sizing: border-box;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 28px;
        }
        p {
            margin: 10px 0;
            line-height: 1.6;
        }
        .embed-container {
            border-radius: 10px;
            overflow: hidden;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            height: 100vh;
        }
        .back-button {
            display: inline-block;
            margin-bottom: 20px;
            background-color: #0066cc;
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s;
            text-align: center;
        }
        .back-button:hover {
            background-color: #005bb5;
        }
        .btn-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .details {
            font-size: 18px;
            color: #444;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>home Details</h2>
        <div class="details">
            <p><strong>Id:</strong> {{ $home->id }}</p>
            <p><strong>Nama:</strong> {{ $home->name }}</p>
            <p><strong>Description:</strong> {{ $home->description }}</p>
        </div>
        
        <div class="embed-container">
            <h2 style="text-align: center;">home Document</h2>
            <embed src="{{ asset('storage/' . $home->file) }}" type="application/pdf" width="100%" height="100%">
        </div>
    </div>
</body>
</html>
