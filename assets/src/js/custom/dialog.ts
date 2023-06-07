// ダイアログの制御
document.addEventListener('DOMContentLoaded', () => {
  const body = document.querySelector('body') as HTMLBodyElement | null
  const dialog = document.querySelector('header [data-id="dialog"]') as HTMLDialogElement | null
  const closeButton = document.querySelector(
    'header [data-id="dialog-close-button"]'
  ) as HTMLButtonElement | null
  const openButton = document.querySelector(
    'header [data-id="dialog-open-button"]'
  ) as HTMLButtonElement | null

  if (!body || !dialog || !closeButton || !openButton) {
    throw new Error('Failed to get elements related to dialog.')
  }

  const openDialog = () => {
    body.style.setProperty('overflow', 'hidden')
    dialog.showModal()
  }

  const closeDialog = () => {
    dialog.close()
    body.style.removeProperty('overflow')
  }

  // グレーアウト部分をクリックした際にダイアログを閉じる
  dialog.addEventListener('click', (event) => {
    event.stopPropagation()
    if (event.target === dialog) closeDialog()
  })

  closeButton.addEventListener('click', (event) => {
    event.stopPropagation()
    closeDialog()
  })

  openButton.addEventListener('click', (event) => {
    event.stopPropagation()
    openDialog()
  })
})
