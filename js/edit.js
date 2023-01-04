let input = document.getElementById('request');

const btnMarkDown = document.getElementById('MarkDown');
btnMarkDown.addEventListener('click', () => {
    let txt = input.value;
    txt += 'この結果をMarkdown形式で出力してください。';
    input.value = txt;
});

const btnHTML = document.getElementById('HTML');
btnHTML.addEventListener('click', () => {
    let txt = input.value;
    txt += 'この結果をHTML形式で出力してください。';
    input.value = txt;
});

const btnCSV = document.getElementById('CSV');
btnCSV.addEventListener('click', () => {
    let txt = input.value;
    txt += 'この結果をCSV形式で出力してください。';
    input.value = txt;
});

const btnJSON = document.getElementById('JSON');
btnJSON.addEventListener('click', () => {
    let txt = input.value;
    txt += 'この結果をJSON形式で出力してください。';
    input.value = txt;
});

const btnSimple = document.getElementById('Simple');
btnSimple.addEventListener('click', () => {
    let txt = input.value;
    txt += 'この結果を簡潔に分かりやすく説明して欲しい。';
    input.value = txt;
});

const btnBullet = document.getElementById('Bullet');
btnBullet.addEventListener('click', () => {
    let txt = input.value;
    txt += 'この結果を箇条書きで説明して欲しい。';
    input.value = txt;
});

const btnPaper = document.getElementById('Paper');
btnPaper.addEventListener('click', () => {
    let txt = input.value;
    txt += 'この結果を論文のような構成で出力してください。';
    input.value = txt;
});