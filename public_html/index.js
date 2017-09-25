const counter = document.getElementById('counter')
const es = new EventSource('server.php')

es.addEventListener('countdown', (event) => {
  counter.textContent = event.data
})

es.addEventListener('message', (event) => {
  alert(event.data)
  es.close()
})
