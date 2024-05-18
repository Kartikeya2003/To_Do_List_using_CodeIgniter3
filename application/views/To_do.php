<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do </title>
    <link rel="stylesheet" href=<?php echo base_url().'vendor/style.css'?>>
</head>
<body>
    <h1>Add Your Activities</h1>

    <form name="task_list" method="POST" action=<?php echo base_url().'index.php/task/storeData'?>>
    Task <input type="text" name="task">
    <br><br>
    Due Date <input type="date" name="due_date">
    <br><br>
    Email<input type="email" name="email">
    <br><br>
    Status<select name="status">
        <option>Select Status</option>
        <option>Completed</option>
        <option>Pending</option>
        <option>InProgress</option>
    </select>
    <br>
    
    <input type="submit">
    </form>
    
    <a href=<?php echo base_url().'index.php/task/showData'?>>
    <button >View Tasks</button>
</a>

</body>
</html>