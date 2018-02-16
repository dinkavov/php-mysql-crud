<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>No.</th>

							<th>ФИО</th>
							<th>Дата Рождения</th>
							<th>Email</th>
							<th>Телефон</th>
							<th>Город</th>
							<th>Факультет</th>
							<th>Специальность</th>
			
							<th>Обновить</th>
							<th>Удалить</th>
						</tr>';

	$query = "SELECT * FROM users";

	if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }

    // if query results contains rows then featch those rows 
    if(mysql_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysql_fetch_assoc($result))
    	{
    		$data .= '<tr>
				<td>'.$number.'</td>
				<td>'.$row['fio'].'</td>
				<td>'.$row['data'].'</td>
				<td>'.$row['email'].'</td>
				<td>'.$row['phone'].'</td>
				<td>'.$row['city'].'</td>
				<td>'.$row['fakulty'].'</td>
				<td>'.$row['spec'].'</td>
				<td>
					<button onclick="GetUserDetails('.$row['id'].')" class="btn btn-warning">Обновить</button>
				</td>
				<td>
					<button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger">Удалить</button>
				</td>
    		</tr>';
    		$number++;
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6">Записи не найдены!</td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>