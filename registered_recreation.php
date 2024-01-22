<?php
session_start();
include("database.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/styles/class.css" />
    <title>Recreation</title>
    <style>
        * {
            color: #000;
        }

        table {
            margin-top: 20px;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;

        }

        td,
        th {
            border: 2px solid #dddddd;
            text-align: left;
            padding: 8px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #ffffff;

        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }
    </style>
</head>

<body>
    <main>
        <nav class="prm-nme" style="margin-bottom: 100px;">
            <a class="land" href="landPage.php">
                <img src="assets/images/sunlogo.png" alt="" />
            </a>
            <h1>Sun Fitness Program</h1>
            <div class="user-profile">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="#fff" d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                </svg>
                <p>
                    <?php
                    echo $_SESSION['firstname'];
                    ?>
                </p>
                <a href="logout.php">Logout</a>
            </div>
        </nav>

        <div class="main-container">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Sport</th>
                    <th>Weight</th>
                    <th>Date</th>
                </tr>
                <?php
                $sql = "SELECT fullname,sport, weight, date	FROM sport";
                $result = mysqli_query($links, $sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                        <td>" . $row["fullname"] . "</td><td>" . $row["sport"] . "</td><td>" . $row["weight"] . "</td><td>" . $row["date"] . "</td></tr>";
                    }
                } else {
                    echo '<tr style="font-size:35px;">You have no history of registrations available</tr>';
                }
                ?>
            </table>
        </div>
    </main>
    <footer style="position:absolute; bottom:0; text-align:center;">
        <div>&copy; 2023/34 SE Grp1 Project</div>
    </footer>
</body>

</html>