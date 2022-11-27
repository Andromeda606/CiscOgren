$("download").each(function (i, el) {
    $(el).html(`
            <a href="/files/${el.innerText}" target="_blank" class="button">
                <ul>
                    <li>İndir</li>
                </ul>
                <div>
                    <svg viewBox="0 0 24 24"></svg>
                </div>
            </a>
       `);
});

$("gif").each(function (i, el) {
    $(el).html(`
            <img src='/gif/${el.innerText}.gif' />
       `);
});

$("png").each(function (i, el) {
    $(el).html(`
            <img src='/img/${el.innerText}.png' />
       `);
});

jQuery(document).ready(()=>{
    $('[data-toggle="popover"]').popover({
        html: true,
        container: 'body',
        trigger:"hover",
        placement:"auto"
    });
});

