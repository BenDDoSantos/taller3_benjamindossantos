<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Crear Post - Blog de los Pajaritos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/styles.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <div class="card shadow-lg p-4">
    <h2 class="mb-4 text-center">Crear Nuevo Post</h2>
    <form action="save_post.php" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="title" class="form-label">Título</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Escribe el título del post" required>
      </div>
      <div class="mb-3">
        <label for="content" class="form-label">Contenido</label>
        <textarea name="content" id="content" class="form-control" rows="5" placeholder="Escribe el contenido del post" required></textarea>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Imagen (opcional)</label>
        <input type="file" name="image" id="image" class="form-control" accept="image/*">
      </div>
      <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-success px-4">Guardar</button>
        <a href="index.html" class="btn btn-secondary px-4">Inicio</a>
      </div>
    </form>
  </div>
</div>
</body>
</html>
