const btn = document.getElementById('Copy');
btn.addEventListener('click', () => {
const txt = document.getElementById('ResultArea').textContent;
  navigator.clipboard.writeText(txt);
  alert('コピー完了しました。');
});
