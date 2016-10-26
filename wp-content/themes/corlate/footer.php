<?php
include 'includes/database.php';
include 'includes/header.php';
include 'includes/sidebar.php';

$employeeSelectQuery = mysqli_query($con, "select * from employee");
$projectSelectQuery = mysqli_query($con, "select * from project");

if (isset($_GET['action']) && $_GET['action'] == 'delete') {
	$task_id = $_GET['task_id'];
	$query = "DELETE FROM task WHERE task_id = '$task_id'";
	mysqli_query($con, $query);
	echo '<script>window.location="index.php?page=task"</script>';
}
?>

<div id="page-wrapper">
    <div class="row">
         <div class = "col-lg-12">

             <span class="pull-right"><a href="insert_task.php"><i class= "fa fa-plus fa-fw"></i>Add Task</a></span>
             <h3>Employee Task</h3>
                <table class = "table table-responsive">
                    <tr>
                        <th>Employee</th>
                        <th>Project</th>
                        <th> Task Description</th>
                        <th>Start Date</th>
                        <th>Due Date</th>
                        <th>Action</th>
                    </tr>

<?php
$run = mysqli_query($con, "
    SELECT t.task_id as taskid, t.description, t.start_date, t.due_date, e.name as employee_name, p.title as project_title
        FROM task t, employee e, project p
        WHERE t.emp_id = e.emp_id
        AND t.project_id = p.project_id");
while ($row = mysqli_fetch_array($run)) {
	$startDate = new \DateTime($row['start_date']);
	$dueDate = new \DateTime($row['due_date']);
	echo '<tr>
                        <td>' . $row['employee_name'] . '</td>
                        <td>' . $row['project_title'] . '</td>
                        <td>' . $row['description'] . '</td>
                        <td>' . $startDate->format('F j, Y') . '</td>
                        <td>' . $dueDate->format('F j, Y') . '</td>
                        <td><a href="index.php?page=edit_task&id=' . $row['taskid'] . '&action=edit"><i class=\'fa fa-edit fa-lg text-success\'></i></a>
                        </td>
                        <td>
                        <a href="index.php?page=task&task_id=' . $row['taskid'] . '&action=delete"><i class=\'fa fa-trash fa-lg text-danger\'onclick=\' return confirm("Are you sure want to Delete!")\'></i></a>
                        </td>
                    </tr>';
}
?>
   </table>
</div>

<?php include 'includes/footer.php'?>