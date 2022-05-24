<div id="carousel" class="carousel slide border border-light border-5"
     data-bs-ride="carousel">
    <div class="carousel-inner">
        <?=$slides ?? 'There was a problem rendering the slides'?>
    </div>
    <button class="carousel-control-prev" type="button"
            data-bs-target="#carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">
            Previous
        </span>
    </button>
    <button class="carousel-control-next" type="button"
            data-bs-target="#carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">
            Next
        </span>
    </button>
</div>