/**
 * フェードインする
 * @param {*} entries
 * @param {*} observer
 */
function fadein(entries: any, observer: any) {
  entries.forEach((entry: any) => {
    if (entry.isIntersecting && !entry.target.classList.contains('fadeup')) {
      entry.target.classList.add('fadeup')
      observer.unobserve(entry.target)
    }
  })
}

// 要素が画面に入った時にフェードインする
document.addEventListener('DOMContentLoaded', () => {
  const observer = new IntersectionObserver(fadein)
  document.querySelectorAll('.fadein').forEach((element) => {
    observer.observe(element)
  })
})
