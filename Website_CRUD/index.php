<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">

    <title>CRUD</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5">
    Employee Database
    <a href="./auth/logout.php" class="btn btn-dark ms-3">Logout</a>
    </nav>


    <div class="container">
        <?php
        if(isset($_GET['msg'])){
            $msg = $_GET['msg'];
        }
        ?>

        <a href="add_new.php" class="btn btn-dark mb-3">Add New</a>

        <table class="table table-hover text-center">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Image</th> 
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

            <?php
                include "db_conn.php";

                // Pagination settings
                $records_per_page = 5;
                $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
                $offset = ($page - 1) * $records_per_page;

                $sql = "SELECT * FROM `crud` LIMIT $offset, $records_per_page";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['first_name'] ?></td>
                        <td><?php echo $row['last_name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['gender'] ?></td>
                        <td>
                            <img src="/uploads/<?php echo $row['image']; ?>" alt="Image" width="100">
                        </td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="dark-link"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <a href="delete.php?id=<?php echo $row['id'] ?>" class="dark-link"><i class="fa-solid fa-trash fs-5"></i></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        <!-- Pagination links -->
        <div class="clearfix">
            <ul class="pagination mb-3 mt-5 justify-content-center">
                <?php
                $sql = "SELECT COUNT(*) FROM `crud`";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_row($result);
                $total_records = $row[0];
                $total_pages = ceil($total_records / $records_per_page);

                if ($page > 1) {
                    echo '<li class="page-item"><a href="?page=' . ($page - 1) . '" class="page-link">Previous</a></li>';
                }

                for ($i = 1; $i <= $total_pages; $i++) {
                    echo '<li class="page-item' . ($i === $page ? ' active' : '') . '"><a href="?page=' . $i . '" class="page-link">' . $i . '</a></li>';
                }

                if ($page < $total_pages) {
                    echo '<li class="page-item"><a href="?page=' . ($page + 1) . '" class="page-link">Next</a></li>';
                }
                ?>
            </ul>
        </div>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>
