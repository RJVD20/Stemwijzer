<?php
  $host = 'localhost';
  $dbname = 'vote';
  $username = 'root';
  $password = 'mysql1234';

  $dsn = "mysql:host=$host;dbname=$dbname";
  // get all users
  $sql = "SELECT count(*) as aantal,  party.partyname FROM vote

inner join member
ON vote.memberID = member.memberID

inner join party
ON member.partyID = party.partyID



GROUP by party.partyname
ORDER BY aantal DESC";

  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);

   if($stmt === false){
    die("Error");
   }

  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>
<!DOCTYPE html>
<html>
<head>Partijen</head>
<body>
 <h1>Total Stemmen Per Partij</h1>
 <table>
   <thead>
     <tr>
       <th>Partij</th>
       <th>Aantal Stemmen</th>
     </tr>
   </thead>
   <tbody>
     <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td><?php echo htmlspecialchars($row['partyname']); ?></td>
       <td><?php echo htmlspecialchars($row['aantal']); ?></td>
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
</body>
</html>
