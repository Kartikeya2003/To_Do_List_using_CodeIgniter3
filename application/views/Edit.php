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
    <!-- <?php print_r($task); ?> -->
    <form name="task_list" method="POST" action=<?php echo base_url().'index.php/task/updateData'?>>
    <input type="hidden" name="id" id="id" value="<?php echo $task['ID'] ?>">
    Task <input type="text" name="task" value=<?php echo $task['Task'] ?>>
    <br><br>
    Due Date <input type="date" name="due_date" value=<?php echo $task['Due_Date'] ?>>
    <br><br>
    Email<input type="email" name="email" value=<?php echo $task['Email']?>>
    <br><br>
    Status<select name="status">
        <option  <?php if($task['Status'] == "Completed") {echo "selected"; }?>>Completed</option>
        <option  <?php if($task['Status'] == "Pending") {echo "selected"; }?>>Pending</option>
        <option  <?php if($task['Status'] == "Inprogress") {echo "selected"; }?>>InProgress</option>
    </select>
    <br>
    
    <input type="submit">
    </form>
    
    <a href=<?php echo base_url().'index.php/task/showData'?>>
    <button >View Tasks</button>
</a>

</body>
</html>