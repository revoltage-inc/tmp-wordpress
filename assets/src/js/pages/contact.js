// import AutoKana from 'vanilla-autokana'

// 名前を入力した際に自動でふりがなを入力する
// AutoKana.bind('#name', '#furigana-name')

// 送信完了後に送信完了ページに遷移する
document.addEventListener('wpcf7mailsent', () => {
  window.location.href = '/thanks'
})
