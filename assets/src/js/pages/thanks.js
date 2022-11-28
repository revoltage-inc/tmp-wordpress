// 10秒後にトップページにリダイレクトする
document.addEventListener('DOMContentLoaded', () => {
  let count = 10
  const countElement = document.querySelector('.page-thanks .countdown')

  setInterval(() => {
    if (count >= 0 && countElement && countElement.innerHTML) {
      const text = countElement.innerHTML
      const previousCount = text.replace(/[^0-9]/g, '')
      countElement.innerHTML = text.replace(`${previousCount}`, `${count}`)
    } else if (count < 0) {
      clearInterval(this)
      location.href = '/'
    }
    count--
  }, 1000)
})
