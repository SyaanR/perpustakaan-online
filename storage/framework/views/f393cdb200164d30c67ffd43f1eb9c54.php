
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Tambah Buku</h2>
        <form action="<?php echo e(route('books.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="title">Judul Buku</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="mb-3">
                <label for="author">Penulis</label>
                <input type="text" name="author" id="author" class="form-control">
            </div>
            <div class="mb-3">
                <label for="quantity">Jumlah</label>
                <input type="number" name="quantity" id="quantity" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
    
</body>
</html>
<!-- <?php $__env->startSection('content'); ?>
<?php $__env->stopSection(); ?> -->
<?php /**PATH C:\xampp\htdocs\perpustakaan-online\resources\views/books/create.blade.php ENDPATH**/ ?>