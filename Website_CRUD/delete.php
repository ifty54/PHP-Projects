<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Delete Contact</title>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-white">
                <h2 class="text-center">Delete Contact</h2>
            </div>
            <div class="card-body">
                <?php
                include "db_conn.php";

                $id = $_GET['id'];

                if (isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
                    // Perform delete operation
                    $sql = "DELETE FROM `crud` WHERE id = $id";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        header("Location: index.php?msg=Record Deleted Successfully");
                    } else {
                        echo "Failed: " . mysqli_error($conn);
                    }
                } elseif (isset($_GET['confirm']) && $_GET['confirm'] === 'no') {
                    // Redirect back to index.php if user clicks "No"
                    header("Location: index.php");
                    exit();
                }

                // Fetch contact details
                $sql_contact = "SELECT * FROM `crud` WHERE id = $id";
                $result_contact = mysqli_query($conn, $sql_contact);
                $contact = mysqli_fetch_assoc($result_contact);
                ?>

                <p class="lead">Are you sure you want to delete contact #<?=$contact['id']?>?</p>
                <div class="text-center">
                    <a href="delete.php?id=<?=$contact['id']?>&confirm=yes" class="btn btn-danger">Yes</a>
                    <a href="delete.php?id=<?=$contact['id']?>&confirm=no" class="btn btn-secondary">No</a>
                </div>
            </div>
            <div class="card-footer">
                <a href="index.php" class="btn btn-primary">Back to Contact List</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>
