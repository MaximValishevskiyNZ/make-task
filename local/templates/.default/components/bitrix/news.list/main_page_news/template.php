<section class="main-screen">
    <div class="main-screen__content">
        <section class="press-center">
            <header class="go-to-section">
                <a href="/novosti/" class="go-to-section__link">
                    <h2 class="go-to-section__title">
                        Новости
                    </h2>
                    <span class="go-to-link">
            Все новости
            <svg class="icon" role="img">
                <use xlink:href="<?= ASSET_PATH ?>icons.svg#dropdown-arrow"/>
            </svg>
          </span>
                </a>
            </header>
            <div class="press-center__articles press-center__articles--dense-list">
                <? foreach ($arResult['ITEMS'] as $key => $item): ?>
                <? if ($key == 0): ?>
                    <article class="news-important"
                             style="background-image: url(<?= $item['PREVIEW_PICTURE']['SRC'] ?>)">
                        <a href="<?= $item['DETAIL_PAGE_URL'] ?>" class="news-important__link">
                            <h2 class="news-important__title">
                                <?= $item['~PREVIEW_TEXT'] ?>
                            </h2>
                        </a>
                        <time class="news-important__publication-date"
                              datetime="<?= FormatDate("Y-m-d", MakeTimeStamp($item['TIMESTAMP_X'])) ?>">
                            <?= mb_strtolower(FormatDate("d F Y", MakeTimeStamp($item['TIMESTAMP_X']))) ?>
                        </time>
                    </article>
                <? else: ?>
                    <article class="news">
                        <a href="<?= $item['DETAIL_PAGE_URL'] ?>" class="news__link">
                            <h4 class="news__title">
                                <?= $item['~PREVIEW_TEXT'] ?>
                            </h4>
                        </a>
                        <div class="news__illustration"
                             style="background-image: url(<?= $item['PREVIEW_PICTURE']['SRC'] ?>)"></div>
                        <div class="news__publication-info">
                            <time class="news__publication-date"
                                  datetime="<?= FormatDate("Y-m-d", MakeTimeStamp($item['TIMESTAMP_X'])) ?>">
                                <?= mb_strtolower(FormatDate("d F Y", MakeTimeStamp($item['TIMESTAMP_X']))) ?>
                            </time>
                        </div>
                    </article>
                <? endif ?>
                <? endforeach ?>
            </div>
        </section>
    </div>
</section>