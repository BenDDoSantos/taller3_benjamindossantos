<?php require 'db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Posts - Blog de los Pajaritos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/styles.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <h1 class="mb-4 text-center">Posts del Blog</h1>
  <div class="d-flex justify-content-between mb-4">
    <a href="create.php" class="btn btn-success">Crear nuevo post</a>
    <a href="index.html" class="btn btn-secondary">Inicio</a>
  </div>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php
    $result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
    while($row = $result->fetch_assoc()):
    ?>
      <div class="col">
        <div class="card h-100 shadow-sm post-card">
          <?php if ($row['image_path']): ?>
            <img src="<?php echo htmlspecialchars($row['image_path']); ?>" 
                 alt="Imagen del post" 
                 class="card-img-top post-image">
          <?php endif; ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo htmlspecialchars($row['title']); ?></h5>
            <p class="card-text"><?php echo nl2br(htmlspecialchars($row['content'])); ?></p>
          </div>
          <div class="card-footer text-center bg-light">
            <small class="text-muted">Publicado: <?php echo $row['created_at']; ?></small>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</div>
</body>
</html>
