

<?php include('includes/header.php');?>}
<?php include('db.php');?>

<div class="container p-4">
    <div class="col-md-4">
        <?php  if(isset($_SESSION['message'])){ ?>
            <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php }?>

        <div class="card card-body">
            <form action="save_task.php" method="POST">
                <div class="form-group">
                    <input type="text" name="title" class="form-control"
                    placeholder="title"
                    autofocus
                    >
                </div>
                <div class="form-group">
                    <textarea name="description"  rows="2" class="form-control"
                    placeholder="description" ></textarea>
                </div>
                <input type="submit" class="btn btn-success btn-block"
                name="save_task" value="Save task">
            </form>
        </div>
    </div>
    <div class="col-md-8">

    </div>
</div>
   

<?php include('includes/footer.php'); ?>
