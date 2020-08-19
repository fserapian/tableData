<?php
$jsonData = file_get_contents('posts.json');
$posts = json_decode($jsonData, true);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./node_modules/datatables/media/css/jquery.dataTables.min.css">
  <title>Document</title>
</head>

<body>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <h1 id="heading" class="my-4 text-center">Table Data</h1>
      <table id="my-table" class="table table-striped table-bordered table-sm dataTable">
        <thead class="sorting">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($posts as $post) : ?>
            <tr>
              <td><?= $post['id'] ?></td>
              <td><?= $post['title'] ?></td>
              <td><?= $post['body'] ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="./js/index.js"></script>
</body>

</html>