<!DOCTYPE html>
<html>
<head>
    <title>Hellow World!</title>
</head>
<body>
    <h1>Hello everyone</h1>
    <table>
    	<thead>
    	</thead>
    		<tr>
    			<th>Id</th>
        		<th>Firstname</th>
        		<th>Lastname</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php foreach ($students as $student) { ?>
                <tr>
                	<td><?= $student->getId(); ?></td>
                	<td><?= $student->getFirstname(); ?></td>
                	<td><?= $student->getLastname(); ?></td>
                </tr>
           <?php } ?>
    	</tbody>
    </table>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    <br/>Pariatur et nisi vel voluptates id deserunt?
    <br/>Atque nihil, asperiores modi repellat unde necessitatibus optio molestiae dolore quisquam nulla delectus perspiciatis provident.</p>
    
</body>
</html>