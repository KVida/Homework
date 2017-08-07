<? if (isset($lastVisitPage) && isset($lastVisitDate)) : ?>
    <div class="lastVisitPage">
        <span>Последняя посещеная страницa: <a href="<? echo "index.php?" . $lastVisitPage; ?>">ССЫЛКА</a></span>
    </div>
    <div class="lastVisitDate">
        <span> Последняя дата и время посещения: <? echo $lastVisitDate; ?></span>
    </div>
<? endif; ?>
