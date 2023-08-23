<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <style>
        body {
            background: #68a7ac9e;
            padding: 2px;
            margin: 10px;
        }

        .main-section {
            width: 100%;
        }

        .show-todo-section table {
            width: 100%;
        }

        table.dataTable {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #dee2e6;
        }

        table.dataTable thead th {
            font-weight: bold;
            border: 1px solid #dee2e6;
        }

        table.dataTable th {
            padding: 12px;
            line-height: 2;
            vertical-align: middle;
            border-top: 1px solid #dee2e6;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    include "./navbar/header.php";
    ?>
    <div class="main-section">
        <div class="add-section">
            <form action="app/add.php" method="POST" autocomplete="off">
                <?php if (isset($_GET['mess']) && $_GET['mess'] == 'error') { ?>
                    <input type="text" name="title" style="border-color: #ff6666" placeholder="This field is required" />
                    <button type="submit">Add &nbsp; <span>&#43;</span></button>
                <?php } else { ?>
                    <input type="text" name="title" placeholder="What do you need to do?" />
                    <button type="submit">Add &nbsp; <span>&#43;</span></button>
                <?php } ?>
            </form>
        </div>

        <div class="show-todo-section">
            <table id="todo-table" class="table table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Date Created</th>
                        <th>Action</th>
                    </tr>
                </thead>

            </table>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>


    <script>
        $(document).ready(function () {
            $('#todo-table').DataTable({
                "paging": false, // Disable pagination
                "language": {
                    "paginate": {
                        "previous": "Previous",
                        "next": "Next"
                    }
                }
            });
        });
    </script>

</body>

</html>