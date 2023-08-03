<section class="press-center" data-controller="view-more">
    <header class="press-center__header">
        <h1 class="light">
            Новости
        </h1>
    </header>
    <div class="press-center__articles press-center__articles--wide-list" data-target="view-more.container">
        <? foreach ($arResult['ITEMS'] as $key => $item): ?>
            <? if ($key == 0): ?>
                <article class="news-important" style="background-image: url(<?= $item['PREVIEW_PICTURE']['SRC']?>)">
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
                <article class="news news--wide">
                    <div class="news__publication-info">
                        <a href="<?= $item['DETAIL_PAGE_URL'] ?>" class="news__link">
                            <h3 class="news__title content-block">
                                <?= $item['~PREVIEW_TEXT'] ?>
                            </h3>
                        </a>
                        <time class="news__publication-date"
                              datetime="<?= FormatDate("Y-m-d", MakeTimeStamp($item['TIMESTAMP_X'])) ?>">
                            <?= mb_strtolower(FormatDate("d F Y", MakeTimeStamp($item['TIMESTAMP_X']))) ?>
                        </time>
                    </div>
                    <div class="news__illustration" style="background-image: url(<?= $item['PREVIEW_PICTURE']['SRC']?>)"></div>
                </article>
            <? endif ?>
        <? endforeach ?>
    </div>
    <div class="grid-container">
        <a class="press-center__view-more button button--inverted" href="press-center.html"
           data-target="view-more.button" data-action="view-more#load">
            Показать более ранние материалы
        </a>
    </div>
</section>