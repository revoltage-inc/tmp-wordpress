// モーダルの制御
document.addEventListener('DOMContentLoaded', () => {
  const modal = document.querySelector('#modal')
  const closeButton = document.querySelector('header #modal .close-button')
  const openButton = document.querySelector('header #modal .open-button')

  if (modal) {
    // グレーアウト部分をクリックした際にモーダルを閉じる
    modal.addEventListener('click', (event) => {
      if (event.target === modal) modal.close()
    })

    if (closeButton) {
      closeButton.addEventListener('click', (event) => {
        event.stopPropagation()
        document.querySelector('body').style.removeProperty('overflow')
        modal.close()
      })
    }

    if (openButton) {
      openButton.addEventListener('click', (event) => {
        event.stopPropagation()
        // モーダルの裏をスクロールできないようにする
        document.querySelector('body').style.setProperty('overflow', 'hidden')
        modal.showModal()
      })
    }
  }
})
