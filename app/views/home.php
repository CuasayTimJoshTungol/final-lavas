<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Student Registration</title>
    <style>
        
       body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f7f7f7;
        border: 2px solid #ccc;
        border-radius: 10px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"] {
        width: 95%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .btn {
        display: inline-block;
        background-color: #007BFF;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #0056b3;
    }
        table {
            width: 100%; /* Make the table take up 100% of its container's width */
            border-collapse: collapse; /* Remove border spacing between table cells */
            margin-top: 0px; /* Add margin space above the table */
            font-family: Arial, sans-serif; /* Choose a font for the table */
            background-color: #f0f0f0; /* Background color for the table */
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
        background-color: black; /* Background color */
        color: #fff; /* Text color */
        padding: 10px 20px; /* Padding for spacing */
        font-weight: bold; /* Bold text */
        text-transform: uppercase; /* Uppercase text */
        border-radius: 1px; /* Rounded corners */
        text-align: center; /* Center-align text */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            text-decoration: none;
            margin-right: 10px;
        }

        .edit-btn {
            background-color: #007BFF;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .edit-btn:hover {
            background-color: #0056b3;
        }

        .delete-btn {
            background-color: #FF0000;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .delete-btn:hover {
            background-color: #cc0000;
        }

        /* CSS for the button */
.btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    text-transform: uppercase;
    background-color: black; /* Button background color */
    color: #fff; /* Button text color */
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease; /* Smooth transition on hover */
}

/* Hover effect */
.btn:hover {
    background-color: #0056b3; /* New background color on hover */
}


       
    </style>
</head>
    <h1>Search</h1>
    <form method="GET" action="search.php">
        <input type="text" name="query" placeholder="Search...">
        <div style="text-align: center;">
        <input class="btn" type="submit" value="<?=(isset($edit['id']))? "Update" : "Search" ?>">
        </div>
    </form>

<body>
    <br>
    <br>
    <br>
    <br>
    <h1>Student Registration Form</h1>
    <form action="/<?=(isset($edit['id']))? "submitedit/" . $edit['id']: "submit" ?>" method="post">
        <label>StudentID:</label>
        <input type="text"  name="studentID" required value="<?=(isset($edit['id']))? $edit['studentID']: ""?>">
        <label>FullName:</label>
        <input type="text" name="FullName" required value="<?=(isset($edit['id']))? $edit['FullName']: ""?>">
        <label>YearLevel:</label>
        <input type="text" name="YearLevel" required value="<?=(isset($edit['id']))? $edit['YearLevel']: ""?>">
        <label>Program:</label>
        <input type="text" name="Program" required value="<?=(isset($edit['id']))? $edit['Program']: ""?>">
        <br>
        <br>
        <div style="text-align: center;">
        <input class="btn" type="submit" value="<?=(isset($edit['id']))? "Update" : "Add New" ?>">
        </div>

    <style>
  th.actions-header {
    text-align: center;
  }
</style>
    </form>

    <table border="1">
    <thead>
            <th class="actions-header">Student ID</th>
            <br>
            <th class="actions-header">Full Name</th>
            <br>
            <th class="actions-header">Year Level</th>
            <br>
            <th class="actions-header">Program</th>
            <br>
            <th class="actions-header">Actions</th>
        </thead>
        <tbody>
            <?php foreach($info as $i): ?>
        <tr>
            <td><?= $i['studentID']?></td>
            <td><?= $i['FullName']?></td>
            <td><?= $i['YearLevel']?></td>
            <td><?= $i['Program']?></td>
            <td style="text-align: center;">
    <a href="/edit/<?= $i['id'] ?>" class="edit-button">
        <i class="fas fa-edit"></i> Edit
    </a>||  &#160;
    <a href="/delete/<?= $i['id'] ?>" class="delete-button">
        <i class="fas fa-trash-alt"></i> Delete
    </a>
</td>
        </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>