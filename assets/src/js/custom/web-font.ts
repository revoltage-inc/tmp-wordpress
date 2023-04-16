// Webフォントの読み込みのちらつきを防ぐため、読み込まれてからページを表示する
document.addEventListener('DOMContentLoaded', () => {
  const isWebFontLoaded = document.querySelector('html')?.classList.contains('wf-active')
    ? true
    : false

  // ページ読み込みから0.1秒後までにWebフォントが表示されない場合、ページを強制的に表示する
  if (!isWebFontLoaded) {
    setTimeout(() => {
      document.querySelector('html')?.classList.add('wf-active')
    }, 100)
  }
})
