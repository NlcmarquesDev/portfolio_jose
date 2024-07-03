<?php
function ranfEffect()
{
    $effects = ['ef-move-bottom', 'ef-move-top', 'ef-move-right', 'ef-move-left', 'ef-slide-bottom', 'ef-slide-top', 'ef-slide-right', 'ef-slide-left', 'ef-push-bottom', 'ef-push-top', 'ef-push-right', 'ef-push-left'];
    $number = rand(0, 11);
    return $effects[$number];
}

?>
<div class="grid-css grid-css--masonry" data-col-lg="3" data-col-md="2" data-col-sm="2" data-col-xs="1" data-gap="30">
    <div class="grid__inner">
        <div class="grid-sizer"></div>
        <?php foreach ($projects as $project) : ?>
            <div class="grid-item">
                <div class="grid-item__inner">
                    <div class="grid-item__content-wrapper">
                        <!-- work -->
                        <div class="work">
                            <a href="work-detail.php?id=<?= $project['id'] ?>">
                                <!-- hoverbox ef-slide-bottom -->
                                <div class="hoverbox <?= ranfEffect() ?> light">
                                    <!-- hb_front -->
                                    <div class="hb_front"><img src="<?= $project['thumbnail'] ?>" alt="" />
                                    </div><!-- End / hb_front -->
                                    <!-- hb_back -->
                                    <div class="hb_back d-flex flex-column justify-content-between">
                                        <div>
                                            <h4 class="work__title"><?= $project['name'] ?></h4><span class="work__text">View detail</span>
                                        </div>
                                        <div class="d-flex justify-content-end align-items-center gap-4">
                                            <?php foreach ($project['icons'] as $icon) : ?>
                                                <?= $icon ?>
                                            <?php endforeach ?>
                                        </div>
                                    </div><!-- End / hb_back -->
                                </div><!-- End / hoverbox ef-slide-bottom -->
                            </a>
                        </div><!-- End / work -->
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
<!-- <div class="awe-text-center mt-50">
    <a class="md-btn md-btn--outline-primary" href="index.php">all work
    </a>
</div> -->
<img src="" alt="">