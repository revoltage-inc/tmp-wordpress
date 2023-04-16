/**
 * スムーススクロールする
 */
function smoothScroll(element: HTMLElement) {
  const rect = element.getBoundingClientRect().top // ブラウザからの高さ
  const offset = window.pageYOffset // 現在のスクロール量
  const wpadminbar = document.getElementById('wpadminbar')
  const wpadminbarHeight = wpadminbar ? wpadminbar.clientHeight : 0 // 管理バーの高さ
  const header = document.getElementById('header')
  const headerHeight = header ? header.clientHeight : 0 // headerの高さを取得
  const top = rect + offset - headerHeight - wpadminbarHeight - 40 // スクロール箇所

  window.scrollTo({
    top: top,
    behavior: 'smooth',
  })
}

// ページトップにスムーススクロールする
const scrollButton = document.querySelector('[data-js-scroll-top]')
if (scrollButton) {
  scrollButton.addEventListener('click', (event) => {
    event.preventDefault()
    smoothScroll(document.body)
  })
}
