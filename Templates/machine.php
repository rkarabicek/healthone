<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
global $product;
global $productId;
global $name;
global $categoryId;
?>

<body>

    <div class="container" style="background:gray">
        <?php
        include_once('defaults/header.php');
        include_once('defaults/menu.php');
        include_once('defaults/pictures.php');
        ?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="/home">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="/categories">Categories</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="/category/<?= $categoryId ?>"><?= $category?></a></li>
                <li class="breadcrumb-item"><a class="text-white" href=""><?= $product->name ?></a></li>
            </ol>
        </nav>
        <div style="width: 95%; margin: auto;">
        <div class="col-md-8 order-md-2">
            <h1 class="text-warning"><?= $product->name; ?></h1>
            <img class="img-fluid rounded" src="<?= $product->image; ?>">
        </div>
        <hr>
        <div class="col-md-12 order-md-12">
            <p class="text-white text-center">
                <?= $product->description ?>
            </p>
        </div>
        <hr>
        <?php if (!$_SESSION["isLoggedIn"]){
            echo "
            <div class='alert alert-info' role='alert'>
            ℹ Wilt u ook een review achterlaten? <a href = '/inloggen'>Log</a> dan <a href = '/inloggen'>in</a> met uw HealthOne Account. 
            </div>";
        } else {
            echo '
            <h3 class="text-warning text-center">
            Review Posten
            </h3>
            <div class="container rounded">
            <form method="post"> 
                <div class="form-group">
                    <label class="text" for="reviewTitle">Review Titel:</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter Title">
                    <small class="text-warning">Voer uw titel in.</small>
                </div>
                <div class="form-group">
                    <label class="text" for="reviewText">Uw Mening:</label>
                    <input type="text" class="form-control" name="review" placeholder="Enter Review">
                    <small class="text-warning">Voer uw review in.</small>
                </div>
                <div class="rate" id="stars">
                    <input type="radio" id="star5" name="stars" value="5" />
                    <label for="star5" title="5 sterren">5 stars</label>
                    <input type="radio" id="star4" name="stars" value="4" />
                    <label for="star4" title="4 sterren">4 stars</label>
                    <input type="radio" id="star3" name="stars" value="3" />
                    <label for="star3" title="3 sterren">3 stars</label>
                    <input type="radio" id="star2" name="stars" value="2" />
                    <label for="star2" title="2 sterren">2 stars</label>
                    <input type="radio" id="star1" name="stars" value="1" />
                    <label for="star1" title="1 sterren">1 star</label>
                </div>
                <br>
                <br>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="captchaCheck">
                    <label class="text form-check-label" for="captchaCheck">Ik ben geen robot</label>
                </div>
                <button type="submit" name="verzenden" class="btn btn-warning text-light">Submit</button>
                <br><br>
            </form>
            </div>
            ';
        }
        ?>
        
        <br>
        
            <?php
            foreach ($reviews as $review) : ?>
            <div class="card-group">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $review->name; ?></a></h5>
                        <p class="card-text"><?= $review->review; ?></p>
                        <a><?php for ($x = 0; $review->stars > $x; $x++) {
                                echo "⭐";
                            }
                            ?></a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Schreef <?= getUserName($review->user_id); ?> op <?= $review->postdate; ?></small>
                    </div>
                </div>
                <br>
                </div><br>
            <?php endforeach; ?>
        
        </div>
        <div>
            <?php
            include_once('defaults/footer.php');
            ?>
        </div>
    </div>
</body>
</html>