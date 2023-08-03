<section class="article">
    <header class="article__header">
        <h1 class="article__title">
            <?= $arResult['~NAME'] ?>
        </h1>
        <time class="article__publication-date"
              datetime="<?= FormatDate("Y-m-d", MakeTimeStamp($arResult['TIMESTAMP_X'])) ?>">
            <?= mb_strtolower(FormatDate("d F Y", MakeTimeStamp($arResult['TIMESTAMP_X']))) ?>
        </time>
        <a class="back-link" href="/novosti/">
            <svg class="icon" role="img">
                <use xlink:href="<?= ASSET_PATH ?>icons.svg#dropdown-arrow"/>
            </svg>
            Пресс-центр
        </a>
    </header>
    <div class="article__content-wrapper">
        <?= $arResult['~DETAIL_TEXT'] ?>
    </div>
</section>
