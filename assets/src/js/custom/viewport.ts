/**
 * 画面サイズに合わせて、Viewportを更新する(最小値は375px)
 */
function updateViewport() {
  const viewport = document.querySelector('meta[name="viewport"]')
  const content = window.outerWidth > 375 ? 'width=device-width,initial-scale=1' : 'width=375'

  // 既存のViewportが存在しない場合は新規に作成する
  if (!viewport) {
    const newViewport = document.createElement('meta')
    newViewport.setAttribute('name', 'viewport')
    newViewport.setAttribute('content', content)

    const head = document.querySelector('head')
    if (head) head.prepend(newViewport)
  } else {
    viewport.setAttribute('content', content)
  }
}

// ページ読み込み時と画面サイズリサイズ時に、Viewportを更新する
document.addEventListener('DOMContentLoaded', () => {
  updateViewport()
  addEventListener('resize', updateViewport)
})
