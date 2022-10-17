<?php 
$db = new mysqli("localhost", "petermac", "password", "library"); 
// убедитесь, что вы используете корректные учетные данные 
if ( $db->connect_error) { 
die("Connect Еггог { { $db->connect_errno}) { $db->connect_error} "); 
$sql = "SELECT * FROM books WHERE availaЬle = 1 ORDER ВУ title"; 
$result = $db->query{ $sql}; 
?> 
<html> 
<body> 
<tаЫе cel1Spacing="2" cellPadding=" 6" align=" center" border=" 1 "> 
<tr> 
<td colspan=" 4"> 
<hЗ align=" center">Ha данный момент доступны следующие книги</hЗ> 
</td> 
</tr> 
<tr> 
<td align=" сеntег">Заголовок</td> 
<td align=" сеntег">Год издания</td> 
<td align=" center">ISBN</td> 
</tr> 
<?php while ($row = $result->fetch_assoc) { ?> 
<tr> 
<td><?php echo stripslashes{$row['title']}; ?></td> 
<td align=" center"><?php echo $row['pub_year']; ?></td> 
<td><?php echo $row('ISBN'); ?></td> 
</tr> 
<?php } ?> 
</tаЫе> 
</body> 
</html>