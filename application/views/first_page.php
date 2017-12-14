
		<div id="body" align="center" style="width:100%">
			<div>
				<h3>First page</h3>
					
					<table border=1>
						<tr>
							<th>ID</th>
							<th>Title</th>
							<th>Deadline</th>
							<th>Created On</th>
						</tr>
					<?php
						//print_r($data);
						foreach($data as $d){
								echo '
									<tr>
										<td>'.$d["id"].'</td>
										<td>'.$d["title"].'</td>
										<td>'.$d["deadline"].'</td>
										<td>'.$d["created_on"].'</td>
									</tr>
								';
						}
					 ?>
					</table>
			</div>
		</div>
		
