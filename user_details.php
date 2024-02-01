<?php
include("config.php");

// Fetch all users from the database
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>User Details</title>
        <!-- Include Bootstrap CSS link -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                padding: 20px;
            }
            table {
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <h2 class="mt-4 mb-4">User Details</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Email Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["gender"]; ?></td>
                        <td><?php echo $row["email_status"]; ?></td> 
                        <td>
                            <a class="btn btn-primary" href="user_details.php?action=show&id=<?php echo $row["id"]; ?>">Show</a>
                            <a class="btn btn-warning" href="user_details.php?action=update&id=<?php echo $row["id"]; ?>">Update</a>
                            <a class="btn btn-danger" href="user_details.php?action=delete&id=<?php echo $row["id"]; ?>">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a class="btn btn-success" href="index.php">Add New User</a>
        <!-- Include Bootstrap JS and Popper.js from CDN -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
    </html>
    <?php
} else {
    echo "No users found.";
}

$conn->close();
?>