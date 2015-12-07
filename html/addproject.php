<?php
/**
 * Created by PhpStorm.
 * User: Ecomitize15
 * Date: 12/4/2015
 * Time: 3:35 PM
 */
?>

<?php include('header.php'); ?>

    <div class="projects">
        <div class="container">
            <h1>Add project</h1>

            <form action="addpro.php" method="post">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                        <input type="text" class="form-control" name="project_name" placeholder="Project name" />
                    </div>
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 centered">
                        <button type="submit">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php include('footer.php'); ?>