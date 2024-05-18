<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Tasks</title>

    <!-- External CSS for the Website -->
    <link rel="stylesheet" href="<?php echo base_url().'vendor/style.css'; ?>">

    <!-- External CSS for the DataTable Plugins -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.jqueryui.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/scroller/2.1.1/css/scroller.jqueryui.min.css">
</head>
<body>
    <h1>Your Tasks</h1>

    <table class="table" id="table">
        <thead>
            <tr>
                <th>Task Name</th>
                <th>Due Date</th>
                <th>Email</th>
                <th>Status</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task):
               ; ?>
                
                <tr>
                    <td><?php echo $task['Task']; ?></td>
                    <td><?php echo $task['Due_Date']; ?></td>
                    <td><?php echo $task['Email']; ?></td>
                    <td><?php echo $task['Status']; ?></td>
                    <td>
                    <a href= '<?php echo base_url()?>index.php/task/getData/<?php echo $task['ID'] ?>'>
                    <button type="submit">Update</button></a>
                    <a href= '<?php echo base_url()?>index.php/task/deleteData/<?php echo $task['ID'] ?>'>
                    <button class="demo" type="submit">Delete</button></a>
                    </td>
                  
                   
                   

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Include jQuery and DataTables plugins -->


    <script>
        // Initialize DataTable
        $(document).ready(function() {
            $('#table').DataTable();
            // You can uncomment and modify the following options for server-side processing
            "serverSide": true,
            "processing": true,
            "ajax": "Server_Side_Script.php"
        });
    </script>

    <!-- Add a link to navigate to the 'Add Tasks' page -->
    <a href="<?php echo base_url().'index.php/task'; ?>">
        <button >Add Tasks</button>
    </a>
</body>
</html>
