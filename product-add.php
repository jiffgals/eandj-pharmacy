<?php
    // start the session.
    session_start();
    if(isset($_SESSION['user'])) header('location: index.html');

    $_SESSION['table'] = 'products';
    $_SESSION['redirect_to'] = 'product-add.php';

    $user = $_SESSION['$user'];
?>

<DOCTYPE html>
    <html>
    <head>
        <title>Add Product - Admin Control Panel</title>
        <?php include('partials/app-header-scripts.html') ?>
    
        <style>
    
        </style>
    </head>
    <body>
        <div id="dashboardMainContainer" id="dashboardMainContainer">
            <?php include('partials/app-sidebar.html') ?>
            <div class="dashboard_content_container" id="dashboard_content_container">
                <?php include('partials/app-topnav.html') ?>
                <div class="dashboard_content">
                    <div class="dashboard_content_main" id="dashboard_content_main">
                        <div class="row">
                            <div class="column column-12">
                                <h1 class="section_header"><i class="fa fa-plus"></i> Create Product</h1>
                                    <div class="userAddFormContainer">
                                        <form action="database/add.html" method="POST" class="appForm" enctype="multipart/form-data">
                                            <div class="appFormInputContainer">
                                                <label for="product_name">Product Name</label>
                                                <input type="text" class="appFormInput" id="product_name" placeholder="Enter product name..." name="product_name" />
                                            </div>
                                            <div class="appFormInputContainer">
                                                <label for="description">Description</label>
                                                <textarea class="appFormInput productTextAreaInput" id="description" placeholder="Enter product description..." name="description">

                                                </textarea>
                                            </div>
                                            <div class="appFormInputContainer">
                                                <label for="product_name">Product Image</label>
                                                <input type="file" name="img" />
                                            </div>

                                            <button type="submit" class="appBtn"><i class="fa fa-plus"></i> Add Product</button>
                                        </form>
                                        <?php
                                            if(isset($_SESSION['response'])){
                                                $response_message = $_SESSION['response']['message'];
                                                $is_success = $_SESSION['response']['success'];
                                        ?>
                                            <div class="responseMessage">
                                                <p class="responseMessage <?= $is_success ? 'responseMessage__success' : 'responseMessage__error' ?>" >
                                                    <?= $response_message ?>
                                                </p>
                                            </div>
                                        <?php unset($_SESSION['response']); } ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include('partials/app-scripts.php') ?>

    </body>
    </html>
