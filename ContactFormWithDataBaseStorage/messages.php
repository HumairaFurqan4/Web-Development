<?php
include 'config.php';
$result = $db->query("SELECT * FROM messages ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
  <title>All Messages</title>
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <div class="form-wrapper">
    <h2>Messages Received</h2>

    <?php if ($result->num_rows > 0) { ?>
    <table border="1" width="100%" cellpadding="8">
      <tr style="background-color:#28a745; color:white;">
        <th>No.</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Sent On</th>
      </tr>
      <?php while ($row = $result->fetch_assoc()) { ?>
      <tr>
        <td><?= $row['ID'] ?></td>
        <td><?= $row['Name'] ?></td>
        <td><?= $row['Email'] ?></td>
        <td><?= $row['Message'] ?></td>
        <td><?= $row['created_at'] ?></td>
      </tr>
      <?php } ?>
    </table>
    <?php } else { ?>
      <p>No messages available.</p>
    <?php } ?>

  </div>
</body>
</html>
