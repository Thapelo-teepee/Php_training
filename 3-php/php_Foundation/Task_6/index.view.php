<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASK_6</title>
</head>

<style>
    .container {
        display: flex;
        flex-direction: column;
        gap: 10px;
        align-items: center;
        width: 100%;
    }

    .table {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
    }
    .form {
        display: flex;
        flex-direction: column;
        gap: 4px;
         border: 12px;
        align-items: center;
        width: 100%;
    }

    .innerForm {
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: 100%;
    }
    .submitButton {
        color:white;
        background-color: blue;
        height: 50px;
        width: 80px;
        border-radius: 8px;
    }
</style>
<body>
    <div class="container">
        <div class="form" >

           <h2>FORM</h2>
            <form class="innerForm" method="POST" action="index.php">

                <input name="firstname" placeholder="First Name">

                <input name="surname" placeholder="Surname">

                <input type="date" name="dateOfBirth">

                <input name="emailaddress" placeholder="Email">

                <input type="number" name="age" placeholder="age">

                <button type="submit" class="submitButton" >Add Person</button>

       </form>
        </div>
        <div class="table">
            <h2 >People</h2>

            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Surname</th>
                        <th>Date of Birth</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($people as $person): ?>

                        <tr>
                            <td><?= $person['PersonID'] ?></td>
                            <td><?= $person['FirstName'] ?></td>
                            <td><?= $person['Surname'] ?></td>
                            <td><?= $person['DateOfBirth'] ?></td>
                            <td><?= $person['EmailAddress'] ?></td>
                            <td><?= $person['Age'] ?></td>

                            <td>
                                <button>
                                    Edit
                                </button>

                                <button>
                                    Delete
                                </button>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>

</body>
</html>