<?php
    use App\Models\Image;
?>

<div class="bg-textile-dark-blue p-3 w-100"></div>
<div class="container-fluid bg-textile-light-blue">
    <div class="container">
        <div class="row service-header">
            <div class="col-md-9 d-flex flex-column justify-content-center text-white p-3">
                <h1 class="h4 mb-3">
                    <?=$title ?? 'Could not load service title'?>
                </h1>
                <?=$details ?? 'Could not load service details'?>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-9 p-3">
            <?=$description ?? 'Could not load service description'?>
        </div>
        <div class="col-md-3">
            <div class="bg-textile-light-gray img-services p-2">
                <?php
                    foreach ($images as $image) {
                        if ($image instanceof Image) {
                            $src = $image->getPath();
                            echo "<img class='border border-4 border-white w-100 my-2' src='$src'
                                    alt=''>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>
