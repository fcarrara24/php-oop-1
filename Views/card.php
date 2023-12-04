<div class="col-12 col-md-4 col-lg-3">
    <div class="card">
        <img src="<?= $data["poster_path"] ?>" class="card-img-top my-ratio" alt="<?= $data["title"] ?>">
        <div class="card-body">
            <h5 class="card-title">
                <?= $data["title"] ?>
            </h5>
            <p class="card-text">
                <?= $data["vote_average"] ?>
            </p>
            <div class="d-flex justify-content-between align-items-flex-start">
                <?= $data["original_language"] ?>
                <div>
                    <small>
                        <?= $data["title"] ?>
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>