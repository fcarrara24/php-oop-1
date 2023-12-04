<div class="col-12 col-md-4 col-lg-3 flex-grow-1 pb-4">
    <div class="card h-100">
        <img src="<?= $data["poster_path"] ?>" class="card-img-top my-ratio" alt="<?= $data["title"] ?>">
        <div class="card-body">
            <h5 class="card-title">
                <?= $data["title"] ?>
            </h5>
            <p class="card-text">
                <?= $data["vote_average"] ?>
            </p>
            <div class="d-flex justify-content-between align-items-flex-start">
                <?php for ($i = 0; $i < floor($data["vote_average"] / 2); $i++) {
                    echo "<i class=\"fa-solid fa-star\"></i>";
                } ?>
                <div>
                    <small>
                        <img src="<?= "https://flagsapi.com/" . ($data["original_language"] == "en" ? "GB" : strtoupper(substr($data["original_language"], 0, 2))) . "/flat/64.png" ?>"
                            alt="" srcset="">
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>