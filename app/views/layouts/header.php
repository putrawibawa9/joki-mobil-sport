<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skema Programmer</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: #f4f4f9;
        }
        header {
            background-color: green;
            color: white;
            text-align: center;
            padding: 1.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        main {
            flex: 1;
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f7f7f7;
        }
        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: auto;
            font-size: 14px;
        }
        .action-links a {
            display: inline-block;
            padding: 8px 12px;
            text-decoration: none;
            color: white;
            border-radius: 4px;
            font-size: 14px;
            transition: background-color 0.3s;
        }
        .action-links .edit {
            background-color: #3498db;
            margin-right: 5px;
        }
        .action-links .edit:hover {
            background-color: #2980b9;
        }
        .action-links .delete {
            background-color: #e74c3c;
        }
        .action-links .delete:hover {
            background-color: #c0392b;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            color: white;
            border-radius: 6px;
            font-size: 16px;
            transition: background-color 0.3s;
            cursor: pointer;
        }
        .btn-add {
            background-color: #2ecc71;
            margin-bottom: 20px;
        }
        .btn-add:hover {
            background-color: #27ae60;
        }
        .btn-logout {
            background-color: #e74c3c;
        }
        .btn-logout:hover {
            background-color: #c0392b;
        }
        h2 {
            color: #333;
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 6px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 0;
            text-align: center;
        }
        img {
            border-radius: 4px;
        }
               .form-container {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            color: white;
            border-radius: 4px;
            font-size: 16px;
            transition: background-color 0.3s;
            cursor: pointer;
            border: none;
        }
        .btn-submit {
            background-color: #2ecc71;
        }
        .btn-submit:hover {
            background-color: #27ae60;
        }
        footer {
            background-color: #34495e;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: auto;
        }
    </style>
</head>
<body>
        <header>
        <h1>Toko Smartphone</h1>
    </header>