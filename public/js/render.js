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


//TODO not working
const syncMenu = ()=>{
    let html = "";
    $("a[id^=\"\"]").each((i,element) => {
        const link = element.getAttribute("href");
        const title = element.innerText;
        html += `
            <li><a href="${link}">${title}</a></li>
        `;
    });
    $("menu").html(html);
}

syncMenu();

