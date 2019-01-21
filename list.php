<?php
    $json = file_get_contents('http://robot-api/index.php?class=Task&method=getTaskList');
    $tasks = json_decode($json)->tasks;
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <title>Список задач</title>
    </head>
    <body>
        <div class="navbar mb-4 text-white bg-success">
			<h1 id="htmlTitle">Список задач</h1>
		</div>
		<div class="container-fluid px-4">
			<table id="table" class="table table-hover table-bordered">
				<thead class="thead-dark">
					<tr>
						<th class="text-center">№</th>
						<th>Название задачи</th>
					</tr> 
				</thead>
				<tbody>
                <?php foreach ($tasks as $task) { ?>
					<tr>
						<td class="text-center">
                            <a href="task.php?taskId=<?= $task->taskId ?>" title="Открыть условие">
                                <span class="badge badge-primary badge-pill"><?= $task->taskId ?></span>
                            </a>
						</td>
						<td>
							<a href="task.php?taskId=<?= $task->taskId ?>" title="Открыть условие">
                                <?= $task->title ?>
							</a>
						</td>
					</tr>
                <?php } ?>
				</tbody>
			</table>
		</div>
    </body>
</html>